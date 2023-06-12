<?php

namespace App\Mail;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class WelcomeMail extends Mailable
{
    use Queueable, SerializesModels;
      protected $user;
      protected $type_user;
    protected $msg;
    /**
     * Create a new message instance.
     */
    public function __construct($user , $type_user , $msg)
    {
       
        $this->user = $user;
        $this->type_user = $type_user;
        $this->$msg = $msg;

    }
    
    

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
       
        return new Envelope(
            subject: 'Welcome Mail',
        );
    }

    /**
     * Get the message content definition.
     */
    public function build()
    {        
         return  $this->markdown('emails.welcomeuser')->with([
            'user' => $this->user,
            'type' => $this->type_user,
            'msg' => $this->msg
         ]);
    }

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