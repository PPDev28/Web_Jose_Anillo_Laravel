<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class EmailController
{
    public function index(Request $request)
    {
        $name = $request->request->get('name');
        $subject = $request->request->get('subject');
        $email = $request->request->get('email');
        $msg = $request->request->get('message');

        dd($name, $subject, $email, $msg);
    }
}
