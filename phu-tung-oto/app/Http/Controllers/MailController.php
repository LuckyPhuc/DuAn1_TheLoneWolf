<?php

namespace App\Http\Controllers;

use App\Mail\Mail_demo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    function sendmail()
    {
        Mail::to('bmtck0000@gmail.com')->send(new Mail_demo);
    }
}
