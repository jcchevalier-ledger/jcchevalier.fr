<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

/**
 * Class ContactMail
 *
 * @package App\Mail
 */
class ContactMail extends Mailable
{
    use Queueable, SerializesModels;
    
    /**
     * @var String
     */
    private $body;
    /**
     * @var String
     */
    private $sender;
    
    /**
     * Create a new mail instance, with a specific body
     *
     * @param array $data
     */
    public function __construct(array $data)
    {
        $this->body = $data['body'];
        $this->sender = $data['email'];
    }
    
    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from(env('MAIL_CONTACT'))
                    ->subject('Someone contacted you !')
                    ->replyTo($this->sender)
                    ->view('emails.contact')
                    ->with(
                        [
                            'body' => $this->body,
                        ]
                    );
    }
}
