<?php
namespace App\Repository\Gallery;

use App\Models\Gallery;
use App\Repository\Gallery\GalleryInterface;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Storage;


class GalleryRepository implements GalleryInterface
{
    // Get the storage disk path
    private $image_path;

    public function __construct()
    {
        $this->image_path = Storage::disk('public')->path('gallery');
    }

    public function getAllImages()
    {
        // Show All Images for admin
        if (Auth::user()->role->id == 3) {
            $user = Auth::user();
            $images = $user->image()->where('status', '0')->orderBy('id', 'DESC')->get();
            return $images;
        }

        // Show All Images for serveradmin & superadmin
        return $images = Gallery::where('status', '0')->orderBy('id', 'DESC')->get();
    }

    public function storeImages($data)
    {
        $images = Request::file('file');

        if (!is_array($images)) {
            $images = [$images];
        }

        if (!is_dir($this->image_path)) {
            mkdir($this->image_path, 0777);
        }

        for ($i = 0; $i < count($images); $i++) {
            $image = $images[$i];
            $name = sha1(date('YmdHis') . Str::random(30));
            $save_name = $name . '.' . $image->getClientOriginalExtension();
            $save_extension = $image->getClientOriginalExtension();
            $fileSizeInByte = File::size($image);

            $image->move($this->image_path, $save_name);

            $upload = new Gallery();
            $upload->user_id = Auth::id();
            $upload->original_filename = pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME);
            $upload->filename = $save_name;
            $upload->file_extension = $save_extension;
            $upload->file_size = $fileSizeInByte;
            $upload->save();
        }
        return Response::json(['success' => __('message.image-success')], 200);
    }

    public function showImages()
    {
        // Show Images only admin
        if (Auth::user()->role->id == '3') {
            $user = Auth::user();
            $images = $user->image()->orderBy('id', 'DESC')->paginate(6);
            return $images;
        }

        // Show Images only serveradmin and superadmin
        return $images = Gallery::orderBy('id', 'DESC')->paginate(6);
    }

    public function deleteImages($id)
    {
        // Delete Image
        $images = Gallery::where('id', $id)->first();

        if (!$images) {
            return redirect()->back()->with('error', __('message.image-error'));
        } else {
            $delImage = Gallery::where('id', $id)->firstOrFail();

            if ($delImage) {
                $delImage->delete();
                cleanup($delImage->getTable());
            }

            $image = "/public/gallery/" . $images->filename;
            if (Storage::exists($image)) {
                Storage::delete($image);
            }

            return $images;
        }
    }

    public function pendingImages()
    {
        // Shwo only pending image for admin
        if (Auth::user()->role->id == 3) {
            $user = Auth::user();
            $pendingImage = $user->image()->where('status', '1')->orderBy('id', 'DESC')->get();
            return $pendingImage;
        }

        // Show only pending image for serveradmin & superadmin
        return $pendingImage = Gallery::where('status', '1')->orderBy('id', 'DESC')->get();
    }
}
?>
