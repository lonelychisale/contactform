<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactFormEmail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $name;
    public $message;
    public $subject;
    public $senderEmail;

    public function __construct($name,$message, $subject,$senderEmail)
    {
        $this->message = $message;
        $this->subject = $subject;
        $this->senderEmail = $senderEmail;
        $this->name = $name;
      
        $senderEmail = $this->senderEmail ?: env('DEFAULT_SENDER_EMAIL');

    }

   public function build()
{
    
    return $this->subject($this->subject)
                ->from($this->senderEmail)
                ->view('emails.contact-form', [
                     'cf_subject' => $this->subject,
                     'cf_message' => $this->message,
                     'cf_name' =>$this->name,
                     'cf_senderemail'=>$this->senderEmail,
    ]);

       
}





    
    
}
