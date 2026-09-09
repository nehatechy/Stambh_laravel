<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Mail\ContactInquiryMail;
use App\Models\ContactInquiry;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ServiceController extends Controller
{
    public function structuralAudit()
    {
        return view('front.services.structural-audit');
    }

    public function industrialStructural()
    {
        return view('front.services.industrial-structural');
    }

    public function pebDesign()
    {
        return view('front.services.peb-design');
    }

    public function dprPreparation()
    {
        return view('front.services.dpr-preparation');
    }

    public function bimModelling()
    {
        return view('front.services.bim-modelling');
    }

    public function submitInquiry(Request $request)
    {
        $request->validate([
            'full_name' => 'nullable|string|max:255',
            'email' => 'required_without:contact_number|nullable|email|max:255',
            'contact_number' => 'required_without:email|nullable|string|max:50',
            'service_type' => 'required|string|max:255',
            'drawing_file' => 'nullable|file|mimes:pdf,dwg,zip,rar,png,jpg,jpeg|max:20480',
        ]);

        $fullMessage = "Service Requested: " . $request->input('service_type', 'General Service') . "\n";

        if ($request->filled('building_age')) {
            $fullMessage .= "Building Age: " . $request->input('building_age') . "\n";
        }
        if ($request->filled('building_size')) {
            $fullMessage .= "Building Size: " . $request->input('building_size') . "\n";
        }
        if ($request->filled('specific_concern')) {
            $fullMessage .= "Specific Concern: " . $request->input('specific_concern') . "\n";
        }
        if ($request->filled('crane_capacity')) {
            $fullMessage .= "Crane Capacity: " . $request->input('crane_capacity') . "\n";
        }
        if ($request->filled('floor_loading')) {
            $fullMessage .= "Floor Loading: " . $request->input('floor_loading') . "\n";
        }
        if ($request->filled('expansion_plans')) {
            $fullMessage .= "Expansion Plans: " . $request->input('expansion_plans') . "\n";
        }
        if ($request->filled('funding_source')) {
            $fullMessage .= "Funding Source: " . $request->input('funding_source') . "\n";
        }
        if ($request->filled('project_stage')) {
            $fullMessage .= "Project Stage: " . $request->input('project_stage') . "\n";
        }
        if ($request->filled('software_format')) {
            $fullMessage .= "Software/Format Needed: " . $request->input('software_format') . "\n";
        }
        if ($request->filled('target_timeline')) {
            $fullMessage .= "Target Timeline: " . $request->input('target_timeline') . "\n";
        }
        if ($request->filled('project_description')) {
            $fullMessage .= "Project Details: " . $request->input('project_description') . "\n";
        }

        if ($request->hasFile('drawing_file')) {
            $filePath = $request->file('drawing_file')->store('drawings', 'public');
            $fullMessage .= "\nAttached Drawing: " . asset('storage/' . $filePath) . "\n";
        }

        $inquiry = ContactInquiry::create([
            'full_name' => $request->input('full_name') ?: 'Website Visitor',
            'email' => $request->input('email') ?: 'not-provided@stambhaconsultants.com',
            'contact_number' => $request->input('contact_number') ?: 'N/A',
            'project_type' => $request->input('service_type'),
            'message' => trim($fullMessage),
        ]);

        if (env('CLIENT_EMAIL')) {
            try {
                Mail::to(env('CLIENT_EMAIL'))->send(new ContactInquiryMail($inquiry));
            } catch (\Exception $e) {
                // Ignore mail sending error in dev
            }
        }

        return redirect()->to('/thank-you');
    }
}
