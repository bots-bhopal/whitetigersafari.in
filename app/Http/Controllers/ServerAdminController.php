<?php

namespace App\Http\Controllers;

use App\Models\Document;
use App\Models\Event;
use App\Models\Gallery;
use App\Models\News;
use App\Models\Tender;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\View;

class ServerAdminController extends Controller
{
    public function index()
    {
        $users = User::where('role_id', '3')->get();

        if (Auth::user()->role->id == '2' && View::exists('superadmin.admin.dashboard')) {
            return view('superadmin.admin.dashboard')->with('users', $users);
        } else if (Auth::user()->role->id == '1' && View::exists('serveradmin.admin.dashboard')) {
            return view('serveradmin.admin.dashboard')->with('users', $users);
        }
    }

    public function editUserRole($id)
    {
        $user_roles = User::where('id', $id)->where('role_id', '=', '3')->first();

        if ($user_roles) {
            if (Auth::user()->role->id == '2' && View::exists('superadmin.admin.edit')) {
                return view('superadmin.admin.edit')->with('user_roles', $user_roles);
            } else if (Auth::user()->role->id == '1' && View::exists('serveradmin.admin.edit')) {
                return view('serveradmin.admin.edit')->with('user_roles', $user_roles);
            }
        } else {
            if(session('locale') == 'en'){
                return redirect()->back()->with('error', 'You are not authorized to access another user profile.');
            }

            if(session('locale') == 'hi'){
                return redirect()->back()->with('error', 'आप किसी अन्य उपयोगकर्ता प्रोफ़ाइल तक पहुंचने के लिए अधिकृत नहीं हैं।');
            }
        }
    }

    public function updateUserRole(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:50',
            'email' => 'required|max:50',
            'roles' => 'required'
        ]);

        if ($validator->fails()) {
            if (Auth::user()->role->id == '2') {
                return redirect('superadmin/role-edit/' . $id)->withErrors($validator)->withInput();
            } else if (Auth::user()->role->id == '1') {
                return redirect('serveradmin/role-edit/' . $id)->withErrors($validator)->withInput();
            }
        } else {
            $user = User::find($id);
            $user->role_id = $request->input('roles');
            $user->name = $request->input('name');
            $user->update();

            if (Auth::user()->role->id == '2') {
                return redirect()->route('superadmin.adminList')->with('success', 'User Role has been updated successfully.');
            } else if (Auth::user()->role->id == '1') {
                return redirect()->route('serveradmin.adminList')->with('success', 'User Role has been updated successfully.');
            }
        }
    }

    function deleteUserRole($id)
    {
        $user = User::where('id', $id)->firstOrFail();
        if ($user) {
            $user->delete();
            cleanup($user->getTable());
        }
        // User::where('id', $id)->delete();
        return redirect()->back()->with('success', 'User has been deleted successfully.');
    }

    // For Superadmin
    public function superAdminList()
    {
        $admins = User::where('role_id', '2')->get();

        if (Auth::user()->role->id == '1' && View::exists('serveradmin.superadmin.dashboard')) {
            return view('serveradmin.superadmin.dashboard')->with('admins', $admins);
        }
    }

    public function editSuperAdminRole($id)
    {
        $user_roles = User::where('id', $id)->where('role_id', '=', '2')->first();

        if ($user_roles) {
            if (Auth::user()->role->id == '1' && View::exists('serveradmin.superadmin.edit')) {
                return view('serveradmin.superadmin.edit')->with('user_roles', $user_roles);
            }
        } else {
            if(session('locale') == 'en'){
                return redirect()->back()->with('error', 'You are not authorized to access another user profile.');
            }

            if(session('locale') == 'hi'){
                return redirect()->back()->with('error', 'आप किसी अन्य उपयोगकर्ता प्रोफ़ाइल तक पहुंचने के लिए अधिकृत नहीं हैं।');
            }
        }
    }

    public function updateSuperAdminRole(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:50',
            'email' => 'required|max:50',
            'roles' => 'required'
        ]);

        if ($validator->fails()) {
            if (Auth::user()->role->id == '1') {
                return redirect('serveradmin/superadmin-role-edit/' . $id)->withErrors($validator)->withInput();
            }
        } else {
            $user = User::find($id);
            $user->role_id = $request->input('roles');
            $user->name = $request->input('name');
            $user->update();

            if (Auth::user()->role->id == '1') {
                return redirect()->route('serveradmin.superAdminList')->with('success', 'User Role has been updated successfully.');
            }
        }
    }

    public function changeUserStatus(Request $request)
    {
        $user = User::find($request->user_id);
        $user->status = $request->status;
        $user->save();

        if ($user->status == 0) {
            return response()->json(['message' => 'User account has been actived successfully.']);
        } else if ($user->status == 1) {
            return response()->json(['message' => 'User account has been deactived successfully.']);
        } else {
            return response()->json(['message' => 'Something went wrong !!']);
        }
    }

    public function changeNewsStatus(Request $request)
    {
        $news = News::find($request->news_id);
        $news->status = $request->status;
        $news->save();

        if ($news->status == 0) {
            return response()->json(['message' => 'News has been approved successfully.']);
        } else if ($news->status == 1) {
            return response()->json(['message' => 'News has been unpublished.']);
        } else {
            return response()->json(['message' => 'Something went wrong !!']);
        }
    }

    public function changeEventStatus(Request $request)
    {
        $event = Event::find($request->event_id);
        $event->status = $request->status;
        $event->save();

        if ($event->status == 0) {
            return response()->json(['message' => 'Event has been approved successfully.']);
        } else if ($event->status == 1) {
            return response()->json(['message' => 'Event has been unpublished.']);
        } else {
            return response()->json(['message' => 'Something went wrong !!']);
        }
    }

    public function changeTenderStatus(Request $request)
    {
        $tender = Tender::find($request->id);
        $tender->status = $request->status;
        $tender->save();

        if ($tender->status == 0) {
            return response()->json(['message' => 'Tender has been approved successfully.']);
        } else if ($tender->status == 1) {
            return response()->json(['message' => 'Tender has been unpublished.']);
        } else {
            return response()->json(['message' => 'Something went wrong !!']);
        }
    }

    public function changeDocumentStatus(Request $request)
    {
        $document = Document::find($request->id);
        $document->status = $request->status;
        $document->save();

        if ($document->status == 0) {
            return response()->json(['message' => 'Document has been approved successfully.']);
        } else if ($document->status == 1) {
            return response()->json(['message' => 'Document has been unpublished.']);
        } else {
            return response()->json(['message' => 'Something went wrong !!']);
        }
    }

    public function changeImageStatus(Request $request)
    {
        $image = Gallery::find($request->id);
        $image->status = $request->status;
        $image->save();

        if ($image->status == 0) {
            return response()->json(['message' => 'Image has been approved successfully.']);
        } else if ($image->status == 1) {
            return response()->json(['message' => 'Image has been unpublished.']);
        } else {
            return response()->json(['message' => 'Something went wrong !!']);
        }
    }
}
