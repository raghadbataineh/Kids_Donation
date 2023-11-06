<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;
    public $details;
    public $content;
    /**
     * Create a new message instance.
     */
    public function __construct($details = "", $content = "")
    {
        $this->details = $details;
        $this->content = $content;
    }

    /**
     * Get the message envelope.
     */
public function build()
{
    if ($this->content === "Thanks for your donation") {
        return $this->subject('Thank you for your donation')
                    ->view('pages.email.contactMail', ['content' => $this->content]);
    } else if ($this->details === session('emailToAll')) {
            return $this->subject(session('emailToAll'))
                ->view('pages.email.contactMail', ['content' => $this->content]);
    } else {
        return $this->subject('Contact us')
                    ->view('pages.email.contactMail', ['content' => $this->content]);
    }
}

    // public function envelope(): Envelope
    // {
    //     return new Envelope(
    //         subject: 'Contact Mail',
    //     );
    // }

    /**
     * Get the message content definition.
     */
    // public function content(): Content
    // {
    //     return new Content(
    //         view: 'emails.contactMail',
    //     );
    // }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
