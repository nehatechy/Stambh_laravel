<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Mail\ContactInquiryMail;
use App\Models\ContactInquiry;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        $request->validate([
            'full_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'contact_number' => 'required|string|max:50',
            'project_type' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        $inquiry = ContactInquiry::create($request->only([
            'full_name',
            'email',
            'contact_number',
            'project_type',
            'message',
        ]));

        Mail::to(env('CLIENT_EMAIL'))
            ->send(new ContactInquiryMail($inquiry));

        return redirect()->to('/thank-you');;
    }
}
