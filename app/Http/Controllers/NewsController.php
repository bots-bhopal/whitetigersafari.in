<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreNewsRequest;
use App\Http\Requests\UpdateNewsRequest;
use App\Repository\News\NewsInterface;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;

class NewsController extends Controller
{
    // Manage News by Admin Portal
    protected $news;

    public function __construct(NewsInterface $news)
    {
        $this->news = $news;
    }

    public function index()
    {
        $newses = $this->news->getAllNewses();

        // Show News
        if (Auth::user()->role->id == '3' && View::exists('admin.news.index')) {
            return view('admin.news.index', compact('newses'));
        } else if (Auth::user()->role->id == '2' && View::exists('superadmin.news.index')) {
            return view('superadmin.news.index', compact('newses'));
        } else if (Auth::user()->role->id == '1' && View::exists('serveradmin.news.index')) {
            return view('serveradmin.news.index', compact('newses'));
        }
    }

    // Add News in DB
    public function create()
    {
        // Create News
        if (Auth::user()->role->id == '3' && View::exists('admin.news.create')) {
            return view('admin.news.create');
        } else if (Auth::user()->role->id == '2' && View::exists('superadmin.news.create')) {
            return view('superadmin.news.create');
        } else if (Auth::user()->role->id == '1' && View::exists('serveradmin.news.create')) {
            return view('serveradmin.news.create');
        } else {
            return view('errors.404');
        }
    }

    public function store(StoreNewsRequest $request)
    {
        // Store News
        $this->news->storeNews($request->validated());

        if (Auth::user()->role->id == '3') {
            return redirect()->route('admin.newses.pending')->with('success', __('message.news-success'));
        } else if (Auth::user()->role->id == '2') {
            return redirect()->route('superadmin.newses.pending')->with('success', __('message.news-success'));
        } else if (Auth::user()->role->id == '1') {
            return redirect()->route('serveradmin.newses.pending')->with('success', __('message.news-success'));
        }
    }

    public function edit($id)
    {
        $newses = $this->news->getNews($id);

        // Edit News
        if ($newses) {
            if (Auth::user()->role->id == '3') {
                return view('admin.news.edit', compact('newses'));
            } else if (Auth::user()->role->id == '2') {
                return view('superadmin.news.edit', compact('newses'));
            } else if (Auth::user()->role->id == '1') {
                return view('serveradmin.news.edit', compact('newses'));
            }
        } else {
            if (Auth::user()->role->id == '3') {
                return redirect()->route('admin.newses.index')->with('error', __('message.news-error'));
            } else if (Auth::user()->role->id == '2') {
                return redirect()->route('superadmin.newses.index')->with('error', __('message.news-error'));
            } else if (Auth::user()->role->id == '1') {
                return redirect()->route('serveradmin.newses.index')->with('error', __('message.news-error'));
            }
        }
    }

    public function update(UpdateNewsRequest $request, $id)
    {
        // Update News
        $this->news->updateNews($request->validated(), $id);

        if (Auth::user()->role->id == '3') {
            return redirect()->route('admin.newses.index')->with('success', __('message.news-update'));
        } else if (Auth::user()->role->id == '2') {
            return redirect()->route('superadmin.newses.index')->with('success', __('message.news-update'));
        } else if (Auth::user()->role->id == '1') {
            return redirect()->route('serveradmin.newses.index')->with('success', __('message.news-update'));
        }
    }

    public function destroy($id)
    {
        // Delete News
        $this->news->deleteNews($id);

        if (Auth::user()->role->id == '3') {
            return redirect()->back()->with('error', __('message.news-delete'));
        } else if (Auth::user()->role->id == '2') {
            return redirect()->back()->with('error', __('message.news-delete'));
        } else if (Auth::user()->role->id == '1') {
            return redirect()->back()->with('error', __('message.news-delete'));
        }
    }


    public function deleteNewsImage($id)
    {
        // Delete News Feature Image
        $this->news->deleteNewsImage($id);

        if (Auth::user()->role->id == '3') {
            return redirect()->route('admin.newses.index')->with('success', 'News image has been deleted successfully.');
        } else if (Auth::user()->role->id == '2') {
            return redirect()->route('superadmin.newses.index')->with('success', 'News image has been deleted successfully.');
        } else if (Auth::user()->role->id == '1') {
            return redirect()->route('serveradmin.newses.index')->with('success', 'News image has been deleted successfully.');
        }
    }

    public function deleteNewsImages($id)
    {
        // Delete News Multiple Images
        $this->news->deleteNewsImages($id);

        if (Auth::user()->role->id == '3') {
            return redirect()->route('admin.newses.index')->with('success', 'Related News image has been deleted successfully.');
        } else if (Auth::user()->role->id == '2') {
            return redirect()->route('superadmin.newses.index')->with('success', 'Related News image has been deleted successfully.');
        } else if (Auth::user()->role->id == '1') {
            return redirect()->route('serveradmin.newses.index')->with('success', 'Related News image has been deleted successfully.');
        }
    }

    public function pendingNews()
    {
        // Display Pending News
        $pendingNews = $this->news->pendingNews();

        if (Auth::user()->role->id == '3' && View::exists('admin.news.pending')) {
            return view('admin.news.pending', compact('pendingNews'));
        } else if (Auth::user()->role->id == '2' && View::exists('superadmin.news.pending')) {
            return view('superadmin.news.pending', compact('pendingNews'));
        } else if (Auth::user()->role->id == '1' && View::exists('serveradmin.news.pending')) {
            return view('serveradmin.news.pending', compact('pendingNews'));
        }
    }
}
