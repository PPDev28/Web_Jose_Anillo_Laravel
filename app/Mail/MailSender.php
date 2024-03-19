<?php

namespace App\Mail;

use Illuminate\Mail\Mailable;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;


class MailSender extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct(
        private readonly string $name,
        private readonly string $sub,
        private readonly string $emailFrom,
        private readonly string $msg) {}

    public function build(): MailSender
    {
        return $this->view('emails.contactEmail')
            ->from($this->emailFrom)
            ->subject($this->sub)
            ->with([
                'name' => $this->name,
                'msg' => $this->msg]);
    }
}
