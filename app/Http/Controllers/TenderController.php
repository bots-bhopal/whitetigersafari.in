<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTenderRequest;
use App\Http\Requests\updateTenderRequest;
use App\Models\Tender;
use App\Repository\Tender\TenderInterface;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;

class TenderController extends Controller
{
    public function tenders()
    {
        // $tenders = Tender::orderBy('id', 'desc')->paginate(9);
        $tenders = Tender::orderBy('id', 'desc')->published()->latest()->paginate(9);
        return view('tender.tender', compact('tenders'));
    }

    //Manage Tender by Admin Panel
    protected $tender;

    public function __construct(TenderInterface $tender)
    {
        $this->tender = $tender;
    }

    public function index()
    {
        $tenders = $this->tender->getAllTenders();

        // Show Tender
        if (Auth::user()->role->id == '3' && View::exists('admin.tender.index')) {
            return view('admin.tender.index', compact('tenders'));
        } else if (Auth::user()->role->id == '2' && View::exists('superadmin.tender.index')) {
            return view('superadmin.tender.index', compact('tenders'));
        } else if (Auth::user()->role->id == '1' && View::exists('serveradmin.tender.index')) {
            return view('serveradmin.tender.index', compact('tenders'));
        }
    }

    // Add Tender in DB
    public function create()
    {
        // Add Tender
        if (Auth::user()->role->id == '3' && View::exists('admin.tender.create')) {
            return view('admin.tender.create');
        } else if (Auth::user()->role->id == '2' && View::exists('superadmin.tender.create')) {
            return view('superadmin.tender.create');
        } else if (Auth::user()->role->id == '1' && View::exists('serveradmin.tender.create')) {
            return view('serveradmin.tender.create');
        } else {
            return view('errors.404');
        }
    }

    public function store(StoreTenderRequest $request)
    {
        // Store Tender
        $this->tender->storeTender($request->validated());

        if (Auth::user()->role->id == '3') {
            return redirect()->route('admin.tender.pending')->with('success', __('message.tender-success'));
        } else if (Auth::user()->role->id == '2') {
            return redirect()->route('superadmin.tender.pending')->with('success', __('message.tender-success'));
        } else if (Auth::user()->role->id == '1') {
            return redirect()->route('serveradmin.tender.pending')->with('success', __('message.tender-success'));
        }
    }

    public function edit($id)
    {
        // Tender Edit
        $tenders = $this->tender->getTender($id);

        if ($tenders) {
            if (Auth::user()->role->id == '3') {
                return view('admin.tender.edit', compact('tenders'));
            } else if (Auth::user()->role->id == '2') {
                return view('superadmin.tender.edit', compact('tenders'));
            } else if (Auth::user()->role->id == '1') {
                return view('serveradmin.tender.edit', compact('tenders'));
            }
        } else {
            if (Auth::user()->role->id == '3') {
                return redirect()->route('admin.tender.index')->with('error', __('message.tender-error'));
            } else if (Auth::user()->role->id == '2') {
                return redirect()->route('superadmin.tender.index')->with('error', __('message.tender-error'));
            } else if (Auth::user()->role->id == '1') {
                return redirect()->route('serveradmin.tender.index')->with('error', __('message.tender-error'));
            }
        }
    }

    public function update(updateTenderRequest $request, $id)
    {
        // Update Tender
        $this->tender->updateTender($request->validated(), $id);

        if (Auth::user()->role->id == '3') {
            return redirect()->route('admin.tender.index')->with('success', __('message.tender-update'));
        } else if (Auth::user()->role->id == '2') {
            return redirect()->route('superadmin.tender.index')->with('success', __('message.tender-update'));
        } else if (Auth::user()->role->id == '1') {
            return redirect()->route('serveradmin.tender.index')->with('success', __('message.tender-update'));
        }
    }

    public function destroy($id)
    {
        // Delete Tender
        $this->tender->deleteTender($id);

        if (Auth::user()->role->id == '3') {
            return redirect()->back()->with('error', __('message.tender-delete'));
        } else if (Auth::user()->role->id == '2') {
            return redirect()->back()->with('error', __('message.tender-delete'));
        } else if (Auth::user()->role->id == '1') {
            return redirect()->back()->with('error', __('message.tender-delete'));
        }
    }

    public function pendingTenders()
    {
        // Display pending tender
        $pendingTender = $this->tender->pendingTender();

        if (Auth::user()->role->id == '3' && View::exists('admin.tender.pending')) {
            return view('admin.tender.pending', compact('pendingTender'));
        } else if (Auth::user()->role->id == '2' && View::exists('superadmin.tender.pending')) {
            return view('superadmin.tender.pending', compact('pendingTender'));
        } else if (Auth::user()->role->id == '1' && View::exists('serveradmin.tender.pending')) {
            return view('serveradmin.tender.pending', compact('pendingTender'));
        }
    }

    public function download($filename)
    {
        // Download File
        return $this->tender->download($filename);
    }
}
