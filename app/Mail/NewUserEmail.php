<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Queue\SerializesModels;

class NewUserEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $data;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    // public function build()
    // {
    //     return $this->subject('User Create Report')
    //     ->view('email.newUserEmail')
    //     ->from(get_settings('smtp_user'),
    //     get_settings('system_title'));
    // }

    public function content(): Content
    {
        return new Content(
            view: 'email.newUserEmail',
            with: ['system_title' => get_settings('system_title')],
        );

    }
}
