<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\MailContactHomeSender;
use Illuminate\Support\Facades\Mail;

class MailContactHomeController extends Controller
{
    public function store(Request $request){
        Mail::to('projet.codingschool@gmail.com')->send(new MailContactHomeSender($request));
        return redirect()->back();
    }    
}
