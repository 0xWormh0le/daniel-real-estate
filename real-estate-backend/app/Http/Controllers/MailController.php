<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Mail;

use App\Http\Requests;
use App\Http\Controllers\Controller;


class MailController extends Controller
{
    public function basic_email() {
        $data = array('name'=>"Virat Gandhi");
        
        Mail::send(['text'=>'mail'], $data, function($message) {
            $message->to('abc@gmail.com', 'Tutorials Point')->subject
                ('Laravel Basic Testing Mail');
            $message->from('xyz@gmail.com','Virat Gandhi');
        });
        echo "Basic Email Sent. Check your inbox.";
    }
    public function html_email(Request $request) {
        $to = $request->post("to");
        $cc = $request->post("cc");
        $subject = $request->post("subject");
        $htmlText = $request->post("htmlText");

        $from_name = "goodStar";
        $from = "gloweve1220@gmail.com";

        Mail::send('mail.reminder', compact('to', 'from', 'subject'), function ($message) use ($from, $to, $subject)
        {
            $message->from($from, 'goodStar');
            $message->to($to);
            $message->subject($subject);
        });

        echo "HTML Email Sent. Check your inbox.";
    }

    public function attachment_email() {
        $data = array('name'=>"Virat Gandhi");
        Mail::send('mail', $data, function($message) {
            $message->to('abc@gmail.com', 'Tutorials Point')->subject
                ('Laravel Testing Mail with Attachment');
            $message->attach('C:\laravel-master\laravel\public\uploads\image.png');
            $message->attach('C:\laravel-master\laravel\public\uploads\test.txt');
            $message->from('xyz@gmail.com','Virat Gandhi');
        });
        echo "Email Sent with attachment. Check your inbox.";
    }
}
