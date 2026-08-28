<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Career;
use App\Models\CareerApplication;
use App\Mail\CareerApplicationMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class CareerController extends Controller
{
    public function list()
    {
        $careers = Career::where('status', 'active')->latest()->get();
        return view('front.career', compact('careers'));
    }

    public function apply(Request $request)    {
        $request->validate([
            'career_id' => 'required|exists:careers,id',
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|string|max:20',
            'applied_for' => 'required|string',
            'cover_message' => 'nullable|string',
            'resume' => 'required|file|mimes:pdf,doc,docx|max:5120', // max 5MB
        ]);

        $data = $request->all();

        if ($request->hasFile('resume')) {
            $data['resume'] = $request->file('resume')->store('resumes', 'public');
        }

        $application = CareerApplication::create($data);

        // Send email to client
        Mail::to(env('CLIENT_EMAIL'))->send(new CareerApplicationMail($application));    

        return redirect()->to('/thank-you');
    }
}