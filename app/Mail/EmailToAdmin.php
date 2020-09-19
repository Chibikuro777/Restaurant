<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class EmailToAdmin extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($input)
    {
        $this->input = $input;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $first_name = $this->input['first_name'];
        $last_name  = $this->input['last_name'];

        return $this->view('emails.email_to_admin')
            ->from('test@example.com')
            ->subject('You have a new booking!')
            ->with([
                'first_name' => $first_name,
                'last_name'  => $last_name,
            ]);
    }
}
