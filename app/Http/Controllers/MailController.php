<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\NewMail;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function submit(Request $req) {
        $name = $req->input('name');
        $tel = $req->input('tel');
        
        Mail::to('ja_artstudio@mail.ru')->send(new NewMail($name, $tel));
        return redirect()->route('home');
    }
}

