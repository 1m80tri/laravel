<?php

namespace App\Http\Controllers;

use App\Mail\CustomerMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class CustomerSenMailController extends Controller
{
    //

    function sendMail(){
        $data = [
            'key1' => " Gia hạn gói SEO top google của bạn"
        ];

        Mail::to("duytnd99@gmail.com")->send(new CustomerMail($data));
    }
}
