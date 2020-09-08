<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class contactMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function build()
    {
        $data = $this->data;
        // dd($data);
        $address = 'brinTechSolutions@gmail.com';
        $subject = 'Contact From Brin Website';
        $name = $data['name'];
        $email = $data['email'];

        return $this->view('emails.contact')
                    ->from($address, $name)
                    ->cc($address, $name)
                    ->bcc($address, $name)
                    ->replyTo($email, $name)
                    ->subject($subject)
                    ->with($data);
    }
}
