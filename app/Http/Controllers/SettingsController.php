<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateAdminPasswordRequest;
use App\Http\Requests\UpdatePasswordRequest;
use App\Http\Requests\UpdateProfileRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\View;

class SettingsController extends Controller
{
    public function index()
    {
        if (Auth::check() && Auth::user()->role->id == '3') {
            return view('admin.profile.profile');
        }

        if (Auth::check() && Auth::user()->role->id == '2') {
            return view('superadmin.profile.profile');
        }

        if (Auth::check() && Auth::user()->role->id == '1') {
            return view('serveradmin.profile.profile');
        }
    }

    public function changePassword()
    {
        if (Auth::check() && Auth::user()->role->id == '3') {
            return view('admin.profile.password');
        }

        if (Auth::check() && Auth::user()->role->id == '2') {
            return view('superadmin.profile.password');
        }

        if (Auth::check() && Auth::user()->role->id == '1') {
            return view('serveradmin.profile.password');
        }
    }

    public function updateProfile(UpdateProfileRequest $request)
    {
        $user = User::findOrFail(Auth::id());

        if ($user->role_id == '1') {
            $user->update([
                'name' => $request->name,
                'email' => $request->email
            ]);
        }

        $user->update([
            'name' => $request->name,
        ]);

        $user->update($request->validated());

        if (session('locale') == 'en') {
            return redirect()->back()->with('success', 'Profile Successfully Updated.');
        }

        if (session('locale') == 'hi') {
            return redirect()->back()->with('success', 'प्रोफ़ाइल सफलतापूर्वक अपडेट की गई।');
        }
    }

    public function updatePassword(UpdatePasswordRequest $request)
    {
        $hashedPassword = Auth::user()->password;
        if (Hash::check($request->old_password, $hashedPassword)) {
            if (!Hash::check($request->password, $hashedPassword)) {
                $user = User::find(Auth::id());
                $user->password = Hash::make($request->password);
                $user->update();
                // Auth::logout();

                return redirect()->route('login');
            } else {
                if (session('locale') == 'en') {
                    return redirect()->back()->with('error', 'New password cannot be the same as old password.');
                }

                if (session('locale') == 'hi') {
                    return redirect()->back()->with('error', 'नया पासवर्ड पुराने पासवर्ड जैसा नहीं हो सकता।');
                }
            }
            Auth::logoutOtherDevices($request->password);
        } else {
            if (session('locale') == 'en') {
                return redirect()->back()->with('error', 'Current password do not match.');
            }

            if (session('locale') == 'hi') {
                return redirect()->back()->with('error', 'वर्तमान पासवर्ड मेल नहीं खाता।');
            }
        }
    }

    public function adminChangePassword($id)
    {
        $user = User::where('id', $id)->where('role_id', '=', '3')->first();

        if ($user) {
            if (Auth::check() && Auth::user()->role->id == '2') {
                return view('superadmin.admin.password', compact('user'));
            } else if (Auth::check() && Auth::user()->role->id == '1') {
                return view('serveradmin.admin.password', compact('user'));
            }
        } else {
            if (session('locale') == 'en') {
                return redirect()->back()->with('error', 'You are not authorized to access another user profile.');
            }

            if (session('locale') == 'hi') {
                return redirect()->back()->with('error', 'आप किसी अन्य उपयोगकर्ता प्रोफ़ाइल तक पहुंचने के लिए अधिकृत नहीं हैं।');
            }
        }
    }

    public function adminUpdatePassword(UpdateAdminPasswordRequest $request, $id)
    {
        $user = User::where('id', $id)->where('role_id', '=', '3')->first();
        $user->password = Hash::make($request->password);
        $user->update();
        // Auth::logout();

        if (Auth::check() && Auth::user()->role->id == '1') {
            if (session('locale') == 'en') {
                return redirect()->route('serveradmin.adminList')->with('success', 'Password Successfully Changed.');
            }

            if (session('locale') == 'hi') {
                return redirect()->route('serveradmin.adminList')->with('success', 'पासवर्ड सफलतापूर्वक बदल दिया है।');
            }
        }

        if (Auth::check() && Auth::user()->role->id == '2') {
            if (session('locale') == 'en') {
                return redirect()->route('superadmin.adminList')->with('success', 'Password Successfully Changed.');
            }

            if (session('locale') == 'hi') {
                return redirect()->route('superadmin.adminList')->with('success', 'पासवर्ड सफलतापूर्वक बदल दिया है।');
            }
        }

        Auth::logoutOtherDevices($request->password);

        return redirect()->route('login');
    }

    public function superAdminChangePassword($id)
    {
        $user = User::where('id', $id)->where('role_id', '=', '2')->first();

        if ($user) {
            if (Auth::user()->role->id == '1' && View::exists('serveradmin.superadmin.password')) {
                return view('serveradmin.superadmin.password', compact('user'));
            }
        } else {
            if (session('locale') == 'en') {
                return redirect()->back()->with('error', 'You are not authorized to access another user profile.');
            }

            if (session('locale') == 'hi') {
                return redirect()->back()->with('error', 'आप किसी अन्य उपयोगकर्ता प्रोफ़ाइल तक पहुंचने के लिए अधिकृत नहीं हैं।');
            }
        }
    }

    public function superAdminUpdatePassword(UpdateAdminPasswordRequest $request, $id)
    {
        $user = User::where('id', $id)->where('role_id', '=', '2')->first();
        $user->password = Hash::make($request->password);
        $user->update();
        // Auth::logout();

        if (Auth::check() && Auth::user()->role->id == '1') {
            if (session('locale') == 'en') {
                return redirect()->route('serveradmin.superAdminList')->with('success', 'Password Successfully Changed.');
            }

            if (session('locale') == 'hi') {
                return redirect()->route('serveradmin.superAdminList')->with('success', 'पासवर्ड सफलतापूर्वक बदल दिया है।');
            }
        }

        Auth::logoutOtherDevices($request->password);

        return redirect()->route('login');
    }
}
