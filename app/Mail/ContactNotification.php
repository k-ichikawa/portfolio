<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactNotification extends Mailable
{
    use Queueable, SerializesModels;

    protected $name;
    protected $mail_address;
    protected $message;

    /**
     * ContactNotification constructor.
     * @param $info
     */
    public function __construct($info)
    {
        $this->name         = $info['name'];
        $this->mail_address = $info['mail_address'];
        $this->message      = $info['message'];
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
            ->from('ichikawa.kenta0219@gmail.com')
            ->subject('【portfolio】問い合わせが届いています')
            ->with(['name' => $this->name, 'mail_address' => $this->mail_address, 'text' => nl2br($this->message)])
            ->view('contact_notification');
    }
}
