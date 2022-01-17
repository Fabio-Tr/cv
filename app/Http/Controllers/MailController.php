<?php

namespace App\Http\Controllers;

use App\Mail\InfoRequest;
use Illuminate\Http\Request;
use App\Http\Requests\StoreRequest;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function store(StoreRequest $req)
    {


        $user = $req->input('name');
        $email = $req->input('email');
        $message = $req->input('message');
        $contact = compact('email', 'user', 'message');


        Mail::to('inviomailsitotest@gmail.com')->send(new InfoRequest($contact));


        return redirect(route('homepage'))->with('message', 'Grazie per il messaggio! Ti ricontatterò al più presto.');
    }

}
