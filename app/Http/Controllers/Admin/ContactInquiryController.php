<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ContactInquiry;

class ContactInquiryController extends Controller
{
    public function index()
    {
        $contactInquiries = ContactInquiry::latest()->paginate(15);
        return view('admin.contact-inquiries.index', compact('contactInquiries'));
    }

    public function show(ContactInquiry $contactInquiry)
    {
        return view('admin.contact-inquiries.show', compact('contactInquiry'));
    }

    public function destroy(ContactInquiry $contactInquiry)
    {
        $contactInquiry->delete();
        return redirect()->route('admin.contact-inquiries.index')->with('success', 'Contact inquiry deleted successfully');
    }
}
