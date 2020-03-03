<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data = [])
    {
        //
        $this->data['nama'] = $data['nama'];
        $this->data['email'] = $data['email'];
        $this->data['phone'] = $data['phone'];
        $this->data['project'] = $data['project'];
        $this->data['pesan'] = $data['pesan'];

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->
            subject("Contact Mail")->
            view('mail.contact', $this->data);
    }
}
