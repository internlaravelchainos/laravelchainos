<?php

namespace App\Http\Controllers;
use App\Mail\Demo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SendMailController extends Controller
{
    //
    function sendmail() {
        $data = [
            'title' => 'Xin chào!',
            'content' => 'Tôi biết bạn là người đẹp trai'
        ];
        Mail::to('hungfabregas4@gmail.com')->send(new Demo($data));
    }
}
