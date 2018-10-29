<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactNotification extends Mailable
{
    use Queueable, SerializesModels;

    protected $full_name;
    protected $mail_address;
    protected $message;

    /**
     * ContactNotification constructor.
     * @param $info
     */
    public function __construct($info)
    {
        $this->full_name    = $info['full_name'];
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
            ->with(['full_name' => $this->full_name, 'mail_address' => $this->mail_address, 'text' => nl2br($this->message)])
            ->view('contact_notification');
    }
}
