<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MailController extends Controller
{
    //
    public function SendEmailView(){
       return view('reset password.check-email-page',[
            "title" => "Check Your Email"
        ]);
    }
}
