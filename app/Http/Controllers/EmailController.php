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

        $to = 'correoJoseAnillo@gmail.com';

        Mail::to($to)->send(new MailSender($name, $subject, $email, $msg));

        $request->session()->flash('success', '¡El correo electrónico se ha enviado correctamente!');

        return redirect()->back();
    }
}
