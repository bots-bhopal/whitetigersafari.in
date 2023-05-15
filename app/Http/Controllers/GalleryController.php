<?php

namespace App\Http\Controllers;

use App\Repository\Gallery\GalleryInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\View;

class GalleryController extends Controller
{
    protected $image;

    public function __construct(GalleryInterface $image)
    {
        $this->image = $image;
    }

    public function index()
    {
        $images = $this->image->getAllImages();

        // Show Images
        if (Auth::user()->role->id == '3' && View::exists('admin.gallery.index')) {
            return view('admin.gallery.index', compact('images'));
        } else if (Auth::user()->role->id == '2' && View::exists('superadmin.gallery.index')) {
            return view('superadmin.gallery.index', compact('images'));
        } else if (Auth::user()->role->id == '1' && View::exists('serveradmin.gallery.index')) {
            return view('serveradmin.gallery.index', compact('images'));
        }
    }

    public function create()
    {
        // Create or Upload Image
        if (Auth::user()->role->id == '3' && View::exists('admin.gallery.create')) {
            return view('admin.gallery.create');
        } else if (Auth::user()->role->id == '2' && View::exists('superadmin.gallery.create')) {
            return view('superadmin.gallery.create');
        } else if (Auth::user()->role->id == '1' && View::exists('serveradmin.gallery.create')) {
            return view('serveradmin.gallery.create');
        }
    }

    public function store(Request $request)
    {
        // Store Image
        $this->image->storeImages($request);

        if (Auth::user()->role->id == '3') {
            return Response::json(['success' => __('message.image-success')], 200);
        } else if (Auth::user()->role->id == '2') {
            return Response::json(['success' => __('message.image-success')], 200);
        } else if (Auth::user()->role->id == '1') {
            return Response::json(['success' => __('message.image-success')], 200);
        }
    }

    public function show()
    {
        // View Image
        $images = $this->image->showImages();

        if (Auth::user()->role->id == '3' && View::exists('admin.gallery.show')) {
            return view('admin.gallery.show', compact('images'));
        } else if (Auth::user()->role->id == '2' && View::exists('superadmin.gallery.show')) {
            return view('superadmin.gallery.show', compact('images'));
        } else if (Auth::user()->role->id == '1' && View::exists('serveradmin.gallery.show')) {
            return view('serveradmin.gallery.show', compact('images'));
        }
    }

    public function destroy($id)
    {
        // Delete Image
        $this->image->deleteImages($id);

        if (Auth::user()->role->id == '3') {
            return redirect()->back()->with('error', __('message.image-delete'));
        } else if (Auth::user()->role->id == '2') {
            return redirect()->back()->with('error', __('message.image-delete'));
        } else if (Auth::user()->role->id == '1') {
            return redirect()->back()->with('error', __('message.image-delete'));
        }
    }

    public function pendingImages()
    {
        // Show Pending Images
        $images = $this->image->pendingImages();

        if (Auth::user()->role->id == '3') {
            return view('admin.gallery.pending', compact('images'));
        } else if (Auth::user()->role->id == '2') {
            return view('superadmin.gallery.pending', compact('images'));
        } else if (Auth::user()->role->id == '1') {
            return view('serveradmin.gallery.pending', compact('images'));
        }
    }
}
