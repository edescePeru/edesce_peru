<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendConfirmationEmail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $id;
    public $status;
    public $given_name;
    public $surname;
    public $email_address;

    public function __construct($data)
    {
        $this->id = $data['id'];
        $this->status = $data['status'];
        $this->given_name = $data['payer']['name']['given_name'];
        $this->surname = $data['payer']['name']['surname'];
        $this->email_address = $data['payer']['email_address'];
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mail.sendConfirmationMail');
    }
}
