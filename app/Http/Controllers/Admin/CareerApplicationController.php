<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CareerApplication;

class CareerApplicationController extends Controller
{
    public function index()
    {
        $applications = CareerApplication::with('career')->latest()->get();
        return view('admin.career_applications.index', compact('applications'));
    }

    public function show(CareerApplication $application)
    {
        return view('admin.career_applications.show', compact('application'));
    }

    public function destroy(CareerApplication $application)
    {
        $application->delete();
        return redirect()->back()->with('success', 'Application deleted');
    }
}