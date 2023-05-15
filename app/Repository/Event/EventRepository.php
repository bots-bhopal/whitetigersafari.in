<?php

namespace App\Repository\Event;

use App\Models\Event;
use App\Models\EventImage;
use App\Repository\Event\EventInterface;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Storage;
use function PHPUnit\Framework\fileExists;

class EventRepository implements EventInterface
{
    public function getAllEvents()
    {
        // Show all events for admin
        if (Auth::user()->role->id == 3) {
            $user = Auth::user();
            $events = $user->event()->where('status', '0')->orderBy('id', 'DESC')->get();
            return $events;
        }

        // Show all events for serveradmin and superadmin
        return $events = Event::where('status', '0')->orderBy('id', 'DESC')->get();
    }

    public function storeEvent($data)
    {
        $image = Request::file('image');
        $images = Request::file('images');

        // Create News
        if (fileExists($image)) {
            $newFile = time() . $image->getClientOriginalName();
            $image->storeAs('public/event_image', $newFile);
        }

        $events = Event::create([
            'user_id' => Auth::id(),
            'title' => Request::input('title'),
            'slug' => SlugService::createSlug(Event::class, 'slug', Request::input('title')),
            'date' => Request::input('date'),
            'time' => Request::input('time'),
            'place' => Request::input('place'),
            'description' => Request::input('description'),
            'image' => $newFile,
        ]);

        $events->save();

        if (is_array($images)) {
            foreach ($images as $image) {
                $newImages = time() . $image->getClientOriginalName();
                $image->storeAs('public/event_images/', $newImages);
                EventImage::create([
                    'event_id' => $events->id,
                    'image' => $newImages
                ]);
            }
        }

        return $events;
    }

    public function getEvent($id)
    {
        // Edit event for admin
        if (Auth::user()->role->id == 3) {
            $user = Auth::user();
            $events = $user->event()->find($id);
            return $events;
        }

        // Edit News
        return $events = Event::find($id);
    }

    public function updateEvent($data, $id = null)
    {
        // Update Event
        $events = Event::find($id);
        $image = Request::file('image');
        $old_image = Request::input('h_image');

        // Update Single Image
        if (is_null($image)) {
            $events->image = $old_image;
        } else {
            $name = $image->getClientOriginalName();
            $newImage = $events->image =  time() . $name;
            $image->storeAs('public/event_image', $newImage);
            $path = public_path() . "/storage/event_image/";
            if (file_exists($path . $old_image)) {
                unlink($path . $old_image);
            }
        }

        $events->update([
            'title' => Request::input('title'),
            // 'slug' => SlugService::createSlug(News::class, 'slug', Request::input('title')),
            'date' => Request::input('date'),
            'time' => Request::input('time'),
            'place' => Request::input('place'),
            'description' => Request::input('description')
        ]);

        $events->update();

        // Update Multiple Images
        $images = Request::file('images');
        $old_images = Request::input('h_images');

        if (is_null($images)) {
            $events->image = $old_images;
        } else {
            foreach ($images as $image) {
                $name = time() . $image->getClientOriginalName();
                EventImage::updateOrCreate([
                    'event_id' => $events->id,
                    'image' => $name
                ]);

                $image->storeAs('public/event_images/', $name);
            }
        }

        return $events;
    }

    public function deleteEvent($id)
    {
        // Delete Event
        $events = Event::where('id', $id)->firstOrFail();

        if (!$events) {
            return redirect()->route('events.index')->with('error', 'Event not found !!');
        } else {
            $image = "/public/event_image/" . $events->image;
            if (Storage::exists($image)) {
                Storage::delete($image);
            }

            foreach ($events->images as $image) {
                $images = "/public/event_images/" . $image->image;
                if (Storage::exists($images)) {
                    Storage::delete($images);
                }
            }

            $eventImages = app(EventImage::class)->getTable();

            if ($events) {
                $events->delete();
                cleanup($events->getTable());
                cleanup($eventImages);
            }

            return $events;
        }
    }

    // Delete Event Feature Image
    public function deleteEventImage($id)
    {
        // Get Event Image
        $eventImage = Event::select('image')->where('id', $id)->first();

        // Get Event Image Path
        $event_image_path = public_path() . "/storage/event_image/";

        // Delete Event Imgae from folder if exists
        if (file_exists($event_image_path . $eventImage->image)) {
            unlink($event_image_path . $eventImage->image);
        }

        // Delete Event Imgae from news table
        $events = Event::where('id', $id)->update(['image' => 'image-gallery.jpg']);

        return $events;
    }

    // Delete Event Multiple Images
    public function deleteEventImages($id)
    {
        // Get Event Image
        $eventImages = EventImage::select('image')->where('id', $id)->first();

        // Get Event Image Path
        $event_image_path = public_path() . "/storage/event_images/";

        // Delete Event Imgae from folder if exists
        if (file_exists($event_image_path . $eventImages->image)) {
            unlink($event_image_path . $eventImages->image);
        }

        $images = EventImage::where('id', $id)->firstOrFail();

        if ($images) {
            $images->delete();
            cleanup($images->getTable());
        }

        return $images;
    }

    public function pendingEvent()
    {
        // Display only pending event for admin
        if (Auth::user()->role->id == 3) {
            $user = Auth::user();
            $pendingEvent = $user->event()->where('status', '1')->orderBy('id', 'DESC')->get();
            return $pendingEvent;
        }

        // Display only pending event for serveradmin & superadmin
        return $pendingEvent = Event::where('status', '1')->orderBy('id', 'DESC')->get();
    }
}
