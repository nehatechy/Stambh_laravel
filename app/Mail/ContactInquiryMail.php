<?php

namespace App\Mail;

use App\Models\ContactInquiry;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactInquiryMail extends Mailable
{
    use Queueable, SerializesModels;

    public ContactInquiry $inquiry;

    public function __construct(ContactInquiry $inquiry)
    {
        $this->inquiry = $inquiry;
    }

    public function build()
    {
        return $this->subject('New Contact Inquiry from ' . $this->inquiry->full_name)
                    ->view('emails.contact_inquiry');
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'New Contact Inquiry',
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.contact_inquiry',
        );
    }
}
