<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactSendmail extends Mailable
{
    use Queueable, SerializesModels;

    private $name;
    private $email;
    private $body;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($input)
    {
        $this->name = $input['name'];
        $this->email = $input['email'];
        $this->body = $input['body'];
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
        ->from('mycinemareview.matamura@gmail.com')
        ->subject('お問い合わせを受信しました。')
        ->view('contactMail')
        ->with([
          'name' => $this-> name,
          'email' => $this-> email,
          'body' => $this-> body,
        ]);
    }
}
