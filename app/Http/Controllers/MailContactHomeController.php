<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\MailContactHomeSender;
use Illuminate\Support\Facades\Mail;
use App\Models\MailContctHome;

class MailContactHomeController extends Controller
{
    public function store(Request $request){
        $newEntry = new MailContctHome;
        $newEntry->name = $request->name;
        $newEntry->email = $request->email;
        $newEntry->subject = $request->subject;
        $newEntry->message = $request->message;
        $newEntry->save();
        Mail::to('admin@admin.com')->send(new MailContactHomeSender($request));
        return redirect()->back();
    }    
}
