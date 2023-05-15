<?php

namespace App\Repository\Document;

use App\Models\Document;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Storage;

use function PHPUnit\Framework\fileExists;

class DocumentRepository implements DocumentInterface
{
    public function getAllDocuments()
    {
        //Show All Documents for admin
        if (Auth::user()->role->id == 3) {
            $user = Auth::user();
            $documents = $user->document()->where('status', '1')->orderBy('id', 'DESC')->get();
            return $documents;
        }

        // Show All Documents for serveradmin and superadmin
        return $documents = Document::where('status', '0')->orderBy('id', 'DESC')->get();
    }

    // Store Document
    public function storeDocument($data)
    {
        // Store Document File
        $file = Request::file('file');
        $newName = sha1(date('YmdHis') . Str::random(30));
        $fileSizeInByte = File::size($file);

        if (fileExists($file)) {
            $newFile = $newName . '.' . $file->getClientOriginalExtension();
            $file->storeAs('public/document/docs', $file->getClientOriginalName());
        }

        $document = Document::create([
            'user_id' => Auth::id(),
            'title' => Request::input('title'),
            'slug' => SlugService::createSlug(Document::class, 'slug', Request::input('title')),
            'original_filename' => basename($file->getClientOriginalName()),
            'filename' => $newFile,
            'file_size' => $fileSizeInByte,
            'file_extension' => $file->getClientOriginalExtension(),
        ]);

        $document->save();

        return $document;
    }

    public function getDocument($id)
    {
        // Edit Document for admin
        if (Auth::user()->role->id == 3) {
            $user = Auth::user();
            $document = $user->document()->find($id);
            return $document;
        }

        // Edit Document for serveradmin and superadmin
        return Document::find($id);
    }

    public function updateDocument($data, $id = null)
    {
        // Update Document
        $document = Document::find($id);

        $document->update([
            'title' => Request::input('title'),
        ]);

        $document->update();

        return $document;
    }

    public function deleteDocument($id)
    {
        // Delete Document
        $document = Document::where('id', $id)->firstOrFail();

        if (!$document) {
            return redirect()->route('document.index')->with('error', 'Document not found !!');
        } else {
            $image = "/public/document/images/" . $document->image;
            if (Storage::exists($image)) {
                Storage::delete($image);
            }

            $file = "/public/document/docs/" . $document->original_filename;
            if (Storage::exists($file)) {
                Storage::delete($file);
            }

            $document = Document::where('id', $id)->firstOrFail();

            if ($document) {
                $document->delete();
                cleanup($document->getTable());
            }

            return $document;
        }
    }

    public function download($filename)
    {
        $file_path = public_path('storage/document/docs/') . $filename;
        if (file_exists($file_path)) {
            // Send Download
            return response()->download($file_path, $filename);
        } else {
            return redirect()->back()->with('error', __('panel.tender-file-not-found'));
        }
    }

    public function pendingDocument()
    {
        // Display only pending document for admin
        if (Auth::user()->role->id == 3) {
            $user = Auth::user();
            $pendingDocument = $user->document()->where('status', '1')->orderBy('id', 'DESC')->get();
            return $pendingDocument;
        }

        // Display only pending document for serveradmin & superadmin
        return $pendingDocument = Document::where('status', '1')->orderBy('id', 'DESC')->get();
    }
}
