<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEventRequest;
use App\Http\Requests\UpdateEventRequest;
use App\Models\EventImage;
use App\Repository\Event\EventInterface;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;

class EventController extends Controller
{
    // Manage Event by Admin Portal
    protected $news;

    public function __construct(EventInterface $event)
    {
        $this->event = $event;
    }

    // Show Event
    public function index()
    {
        $events = $this->event->getAllEvents();

        if (Auth::user()->role->id == '3' && View::exists('admin.event.index')) {
            return view('admin.event.index', compact('events'));
        } else if (Auth::user()->role->id == '2' && View::exists('superadmin.event.index')) {
            return view('superadmin.event.index', compact('events'));
        } else if (Auth::user()->role->id == '1' && View::exists('serveradmin.event.index')) {
            return view('serveradmin.event.index', compact('events'));
        }
    }

    // Create Event
    public function create()
    {
        if (Auth::user()->role->id == '3' && View::exists('admin.event.create')) {
            return view('admin.event.create');
        } else if (Auth::user()->role->id == '2' && View::exists('superadmin.event.create')) {
            return view('superadmin.event.create');
        } else if (Auth::user()->role->id == '1' && View::exists('serveradmin.event.create')) {
            return view('serveradmin.event.create');
        } else {
            return view('errors.404');
        }
    }

    // Store Event
    public function store(StoreEventRequest $request)
    {
        $this->event->storeEvent($request->validated());

        if (Auth::user()->role->id == '3') {
            return redirect()->route('admin.events.pending')->with('success', __('message.event-success'));
        } else if (Auth::user()->role->id == '2') {
            return redirect()->route('superadmin.events.pending')->with('success', __('message.event-success'));
        } else if (Auth::user()->role->id == '1') {
            return redirect()->route('serveradmin.events.pending')->with('success', __('message.event-success'));
        }
    }

    // Edit Event
    public function edit($id)
    {
        $events = $this->event->getEvent($id);

        if ($events) {
            if (Auth::user()->role->id == '3') {
                return view('admin.event.edit', compact('events'));
            } else if (Auth::user()->role->id == '2') {
                return view('superadmin.event.edit', compact('events'));
            } else if (Auth::user()->role->id == '1') {
                return view('serveradmin.event.edit', compact('events'));
            }
        } else {
            if (Auth::user()->role->id == '3') {
                return redirect()->route('admin.event.index')->with('error', __('message.event-error'));
            } else if (Auth::user()->role->id == '2') {
                return redirect()->route('superadmin.event.index')->with('error', __('message.event-error'));
            } else if (Auth::user()->role->id == '1') {
                return redirect()->route('serveradmin.event.index')->with('error', __('message.event-error'));
            }
        }
    }

    // Update Event
    public function update(UpdateEventRequest $request, $id)
    {
        $this->event->updateEvent($request->validated(), $id);

        if (Auth::user()->role->id == '3') {
            return redirect()->route('admin.events.index')->with('success', __('message.event-update'));
        } else if (Auth::user()->role->id == '2') {
            return redirect()->route('superadmin.events.index')->with('success', __('message.event-update'));
        } else if (Auth::user()->role->id == '1') {
            return redirect()->route('serveradmin.events.index')->with('success', __('message.event-update'));
        }
    }

    // Delete Event
    public function destroy($id)
    {
        $this->event->deleteEvent($id);

        if (Auth::user()->role->id == '3') {
            return redirect()->route('admin.events.index')->with('error', __('message.event-delete'));
        } else if (Auth::user()->role->id == '2') {
            return redirect()->route('superadmin.events.index')->with('error', __('message.event-delete'));
        } else if (Auth::user()->role->id == '1') {
            return redirect()->route('serveradmin.events.index')->with('error', __('message.event-delete'));
        }
    }

    // Delete Event Feature Image
    public function deleteEventImage($id)
    {
        $this->event->deleteEventImage($id);

        if (Auth::user()->role->id == '3') {
            return redirect()->route('admin.events.index')->with('error', __('message.image-delete'));
        } else if (Auth::user()->role->id == '2') {
            return redirect()->route('superadmin.events.index')->with('error', __('message.image-delete'));
        } else if (Auth::user()->role->id == '1') {
            return redirect()->route('serveradmin.events.index')->with('error', __('message.image-delete'));
        }
    }

    // Delete News Multiple Images
    public function deleteEventImages($id)
    {
        $this->event->deleteEventImages($id);

        if (Auth::user()->role->id == '3') {
            return redirect()->route('admin.events.index')->with('error', __('message.image-delete'));
        } else if (Auth::user()->role->id == '2') {
            return redirect()->route('superadmin.events.index')->with('error', __('message.image-delete'));
        } else if (Auth::user()->role->id == '1') {
            return redirect()->route('serveradmin.events.index')->with('error', __('message.image-delete'));
        }
    }

    public function pendingEvent()
    {
        // Display pending event
        $pendingEvent = $this->event->pendingEvent();

        if (Auth::user()->role->id == '3' && View::exists('admin.event.pending')) {
            return view('admin.event.pending', compact('pendingEvent'));
        } else if (Auth::user()->role->id == '2' && View::exists('superadmin.event.pending')) {
            return view('superadmin.event.pending', compact('pendingEvent'));
        } else if (Auth::user()->role->id == '1' && View::exists('serveradmin.event.pending')) {
            return view('serveradmin.event.pending', compact('pendingEvent'));
        }
    }
}
