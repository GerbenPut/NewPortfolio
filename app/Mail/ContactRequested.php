<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactRequested extends Mailable
{
    use Queueable, SerializesModels;

    protected $data = [];

    /**
     * Create a new message instance.
     *
     * @param array $data
     */
    public function __construct(array $data)
    {
        $data['msg'] = $data['message'];
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
            ->subject("Contact")
            ->from(env('CONTACT_EMAIL_FROM'))
            ->view('email.contact', $this->data);
    }
}
