<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\News;
use App\Models\Gallery;

class MainController extends Controller
{
    // Display Top Three News in Home Page
    public function home()
    {
        $news = News::orderBy('id', 'desc')->published()->latest()->take(3)->get();
        $events = Event::orderBy('id', 'desc')->published()->latest()->take(3)->get();

        return view('main.home', compact('news', 'events'));
    }

    // Display Newses with pagination
    public function newses()
    {
        $newses = News::orderBy('id', 'desc')->published()->latest()->paginate(3);
        return view('news.newses', compact('newses'));
    }

    // Display Single News in Detail
    public function news_details($slug)
    {
        $newses = News::where('slug', $slug)->published()->first();

        if ($newses) {
            return view('news.news-detail', compact('newses'));
        } else {
            return view('errors.404');
        }
    }

    // Display Events with pagination
    public function events()
    {
        $events = Event::orderBy('id', 'desc')->published()->latest()->paginate(3);
        return view('event.events', compact('events'));
    }

    // Display Single Event in Detail
    public function event_details($slug)
    {
        $events = Event::where('slug', $slug)->published()->first();

        if ($events) {
            return view('event.event-detail', compact('events'));
        } else {
            return view('errors.404');
        }
    }

    // Display All Images in Home Page
    public function fetchAllImages()
    {
        $images = Gallery::orderBy('id', 'DESC')->published()->latest()->paginate(24);
        return view('main.gallery', compact('images'));
    }

    // Calculate bytesToHuman format
    public static function bytesToHuman($bytes)
    {
        $units = ['B', 'KB', 'MB', 'GB'];

        for ($i = 0; $bytes > 1024; $i++) {
            $bytes /= 1024;
        }

        return round($bytes, 2) . ' ' . $units[$i];
    }

    // Education Programs
    public function educationPrograms()
    {
        return view('news.education');
    }

    // Events Happenings
    public function eventsHappenings()
    {
        return view('news.events-happening');
    }

    // Training Programs
    public function trainingPrograms()
    {
        return view('news.training-program');
    }

    public function construction()
    {
        return view('main.error');
    }

    public function contact()
    {
        return view('main.contact');
    }
}
