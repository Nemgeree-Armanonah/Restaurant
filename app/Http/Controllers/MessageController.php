<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;

class MessageController extends Controller
{

    public function store(){

//      Validation
        request()-> validate([
            'first_name' => 'required|string|max:10',
            'last_name' => 'required|string|max:10',
            'email' => 'required|email|unique:message',
            'message' => 'required|string|max:255',
            'phone' => 'numeric|min:10'
        ]);

        $message = new Message;
        $message ->first_name = request('first_name');
        $message ->last_name = request('last_name');
        $message ->email = request('email');
        $message ->phone = request('phone');
        $message ->message = request('message');
        $message ->save();

        return redirect('/')->with('message','Thanks for your Feedback');
    }
}
