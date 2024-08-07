<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactFormMail extends Mailable
{
    use Queueable, SerializesModels;

    public $formData;

    /**
     * Create a new message instance.
     *
     * @param  array  $formData
     * @return void
     */
    public function __construct($formData)
    {
        $this->formData = $formData;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $newSubject = "New Contact Details";

        return $this->from($this->formData['email'], $this->formData['name'])
            ->subject($newSubject)
            ->markdown('emails.contact-form')
            ->with([
                'name' => $this->formData['name'],
                'email' => $this->formData['email'],
                'message' => $this->formData['message'],
            ]);
    }

}
