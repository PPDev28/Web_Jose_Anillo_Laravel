<?php

namespace App\Http\Controllers;

use App\Mail\MailSender;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\RedirectResponse;


class EmailController
{
    public function index(Request $request): RedirectResponse
    {
        $name = $request->request->get('name');
        $subject = $request->request->get('subject');
        $email = $request->request->get('email');
        $msg = $request->request->get('message');

        $msg .=  PHP_EOL . "El correo a responder es $email";

        Mail::to(env('EMAIL_TO'))->send(new MailSender($name, $subject, env('MAIL_FROM_ADDRESS'), $msg));

        $request->session()->flash('success', '¡El correo electrónico se ha enviado correctamente!');

        return redirect()->back();
    }
}
