<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ContactInquiry;

class DashboardController extends Controller
{
    public function index()
    {
        $newInquiriesCount = ContactInquiry::count();
        return view('admin.dashboard', compact('newInquiriesCount'));
    }
}
