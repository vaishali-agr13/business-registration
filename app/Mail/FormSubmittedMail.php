<?php 
namespace App\Mail;
use Illuminate\Mail\Mailable;

class FormSubmittedMail extends Mailable
{
    public $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function build()
    {
        return $this->subject('Form Submitted Successfully')
                    ->view('emails.form_submitted');
    }
}