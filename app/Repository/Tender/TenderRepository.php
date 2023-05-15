<?php

namespace App\Repository\Tender;

use App\Models\Tender;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Storage;

use function PHPUnit\Framework\fileExists;

class TenderRepository implements TenderInterface
{
    public function getAllTenders()
    {
        // Show All Tenders for admin
        if (Auth::user()->role->id == 3) {
            $user = Auth::user();
            $tenders = $user->tender()->where('status', '0')->orderBy('id', 'DESC')->get();
            return $tenders;
        }

        // Show All Tenders for serveradmin & superadmin
        return $tenders = Tender::where('status', '0')->orderBy('id', 'DESC')->get();
    }

    public function storeTender($data)
    {
        $file = Request::file('file');
        $name = sha1(date('YmdHis') . Str::random(30));
        $fileSizeInByte = File::size($file);

        // Store Tender
        if (fileExists($file)) {
            $newFile = $name . '.' . $file->getClientOriginalExtension();
            $file->storeAs('public/tender_documents', $file->getClientOriginalName());
        }

        $tender = Tender::create([
            'user_id' => Auth::id(),
            'title' => Request::input('title'),
            'slug' => SlugService::createSlug(Tender::class, 'slug', Request::input('title')),
            'description' => Request::input('description'),
            'last_date' => Request::input('date'),
            'original_filename' => basename($file->getClientOriginalName()),
            'filename' => $newFile,
            'file_size' => $fileSizeInByte,
            'file_extension' => $file->getClientOriginalExtension(),
        ]);

        $tender->save();

        return $tender;
    }

    public function getTender($id)
    {
        // Edit Tender for admin
        if (Auth::user()->role->id == 3) {
            $user = Auth::user();
            $tender = $user->tender()->find($id);
            return $tender;
        }

        // Edit Tender
        return Tender::find($id);
    }

    public function updateTender($data, $id = null)
    {
        // Update Tender
        $tender = Tender::find($id);

        $tender->update([
            'title' => Request::input('title'),
            'description' => Request::input('description'),
            'last_date' => Request::input('date'),
        ]);

        $tender->update();

        return $tender;
    }

    public function deleteTender($id)
    {
        // Delete Tender
        $tender = Tender::where('id', $id)->firstOrFail();

        if (!$tender) {
            return redirect()->route('tender.index')->with('error', 'Tender not found.');
        } else {
            $file_path = "/public/tender_documents/" . $tender->original_filename;
            if (Storage::exists($file_path)) {
                Storage::delete($file_path);
            }

            $tender = Tender::where('id', $id)->firstOrFail();

            if ($tender) {
                $tender->delete();
                cleanup($tender->getTable());
            }

            return $tender;
        }
    }

    public function download($filename)
    {
        $file_path = public_path('storage/tender_documents/') . $filename;
        if (file_exists($file_path)) {
            // Send Download
            return response()->download($file_path, $filename);
        } else {
            // Error
            return redirect()->route('tender.index')->with('error', __('panel.tender-file-not-found'));
        }
    }

    public function pendingTender()
    {
        // Display only pending tender for admin
        if (Auth::user()->role->id == 3) {
            $user = Auth::user();
            $pendingTender = $user->tender()->where('status', '1')->orderBy('id', 'DESC')->get();
            return $pendingTender;
        }

        // Display only pending tender for serveradmin & superadmin
        return $pendingTender = Tender::where('status', '1')->orderBy('id', 'DESC')->get();
    }
}
