<?php

namespace App\Http\Controllers;

use App\Mail\MailSender;
use App\Models\Email;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function store(Request $request){
        Mail::to('tanghekevin1@gmail.com')->send(new MailSender($request));
        $store = new Email;
        $store->mail = $request->mail;
        $store->email_subject_id = $request->email_subject_id;
        $store->content = $request->content;
        $store->save();

        return redirect()->back();
    }
}
