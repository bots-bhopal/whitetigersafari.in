<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDocRequest;
use App\Http\Requests\UpdateDocRequest;
use App\Models\Document;
use App\Repository\Document\DocumentInterface;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;

class DocumentController extends Controller
{
    public function docs()
    {
        // $docs = Document::orderBy('id', 'desc')->paginate(9);
        $docs = Document::orderBy('id', 'desc')->published()->latest()->paginate(9);
        return view('docs.docs', compact('docs'));
    }

    protected $document;

    public function __construct(DocumentInterface $document)
    {
        $this->document = $document;
    }

    public function index()
    {
        $documents = $this->document->getAllDocuments();

        // Show Document
        if (Auth::user()->role->id == '3' && View::exists('admin.docs.index')) {
            return view('admin.docs.index', compact('documents'));
        } else if (Auth::user()->role->id == '2' && View::exists('superadmin.docs.index')) {
            return view('superadmin.docs.index', compact('documents'));
        } else if (Auth::user()->role->id == '1' && View::exists('serveradmin.docs.index')) {
            return view('serveradmin.docs.index', compact('documents'));
        }
    }

    // Add Document in DB
    public function create()
    {
        // Add Document
        if (Auth::user()->role->id == '3' && View::exists('admin.docs.create')) {
            return view('admin.docs.create');
        } else if (Auth::user()->role->id == '2' && View::exists('superadmin.docs.create')) {
            return view('superadmin.docs.create');
        } else if (Auth::user()->role->id == '1' && View::exists('serveradmin.docs.create')) {
            return view('serveradmin.docs.create');
        } else {
            return view('errors.404');
        }
    }

    public function store(StoreDocRequest $request)
    {
        // Store Document
        $this->document->storeDocument($request->validated());

        if (Auth::user()->role->id == '3') {
            return redirect()->route('admin.document.pending')->with('success', __('message.docs-success'));
        } else if (Auth::user()->role->id == '2') {
            return redirect()->route('superadmin.document.pending')->with('success', __('message.docs-success'));
        } else if (Auth::user()->role->id == '1') {
            return redirect()->route('serveradmin.document.pending')->with('success', __('message.docs-success'));
        }
    }

    public function edit($id)
    {
        // Document Edit
        $documents = $this->document->getDocument($id);

        if ($documents) {
            if (Auth::user()->role->id == '3') {
                return view('admin.docs.edit', compact('documents'));
            } else if (Auth::user()->role->id == '2') {
                return view('superadmin.docs.edit', compact('documents'));
            } else if (Auth::user()->role->id == '1') {
                return view('serveradmin.docs.edit', compact('documents'));
            }
        } else {
            if (Auth::user()->role->id == '3') {
                return redirect()->route('admin.document.index')->with('error', __('message.docs-error'));
            } else if (Auth::user()->role->id == '2') {
                return redirect()->route('superadmin.document.index')->with('error', __('message.docs-error'));
            } else if (Auth::user()->role->id == '1') {
                return redirect()->route('serveradmin.document.index')->with('error', __('message.docs-error'));
            }
        }
    }

    public function update(UpdateDocRequest $request, $id)
    {
        // Update Document
        $this->document->updateDocument($request->validated(), $id);

        if (Auth::user()->role->id == '3') {
            return redirect()->route('admin.document.index')->with('success', __('message.docs-update'));
        } else if (Auth::user()->role->id == '2') {
            return redirect()->route('superadmin.document.index')->with('success', __('message.docs-update'));
        } else if (Auth::user()->role->id == '1') {
            return redirect()->route('serveradmin.document.index')->with('success', __('message.docs-update'));
        }
    }

    public function destroy($id)
    {
        // Delete Document
        $this->document->deleteDocument($id);

        if (Auth::user()->role->id == '3') {
            return redirect()->route('admin.document.index')->with('error', __('message.docs-delete'));
        } else if (Auth::user()->role->id == '2') {
            return redirect()->route('superadmin.document.index')->with('error', __('message.docs-delete'));
        } else if (Auth::user()->role->id == '1') {
            return redirect()->route('serveradmin.document.index')->with('error', __('message.docs-delete'));
        }
    }

    public function pendingDocuments()
    {
        // Display pending document
        $pendingDocument = $this->document->pendingDocument();

        if (Auth::user()->role->id == '3' && View::exists('admin.docs.pending')) {
            return view('admin.docs.pending', compact('pendingDocument'));
        } else if (Auth::user()->role->id == '2' && View::exists('superadmin.docs.pending')) {
            return view('superadmin.docs.pending', compact('pendingDocument'));
        } else if (Auth::user()->role->id == '1' && View::exists('serveradmin.docs.pending')) {
            return view('serveradmin.docs.pending', compact('pendingDocument'));
        }
    }

    public function download($filename)
    {
        // Download File
        return $this->document->download($filename);
    }
}
