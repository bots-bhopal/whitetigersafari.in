<?php

namespace App\Http\Controllers;

use App\Models\Document;
use App\Models\Event;
use App\Models\Gallery;
use App\Models\News;
use App\Models\Tender;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        // Display Info For English Language
        // $user = Auth::user();
        $news_count = News::where('status', '0')->count();
        $event_count = Event::where('status', '0')->count();
        $tender_count = Tender::where('status', '0')->count();
        $docs_count = Document::where('status', '0')->count();
        $gallery_count = Gallery::where('status', '0')->count();
        $pending_news = News::where('status', '1')->count();
        $pending_event = Event::where('status', '1')->count();
        $pending_tenders = Tender::where('status', '1')->count();
        $pending_docs = Document::where('status', '1')->count();
        $pending_images = Gallery::where('status', '1')->count();
        $users = User::where('role_id', '3')->get();


        if (Auth::user()->role->id == 1) {
            return view('serveradmin.dashboard.dashboard', compact('news_count', 'event_count', 'tender_count', 'docs_count', 'gallery_count', 'pending_news', 'pending_event', 'pending_tenders', 'pending_docs', 'pending_images', 'users'));
        }

        if (Auth::user()->role->id == 2) {
            return view('superadmin.dashboard.dashboard', compact('news_count', 'event_count', 'tender_count', 'docs_count', 'gallery_count', 'pending_news', 'pending_event', 'pending_tenders', 'pending_docs', 'pending_images', 'users'));
        }

        if (Auth::user()->role->id == 3) {
            return view('admin.dashboard.dashboard', compact('news_count', 'event_count', 'tender_count', 'docs_count', 'gallery_count', 'pending_news', 'pending_event', 'pending_tenders', 'pending_docs', 'pending_images'));
        }
    }
}
