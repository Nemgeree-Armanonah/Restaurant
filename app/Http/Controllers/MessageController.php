<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MessageController extends Controller
{

    public function store(){
        $first_name = request('first_name');
        $last_name = request('last_name');
        $email = request('email');
        $phone = request('phone');
        $message = request('message');

        dump($first_name);
    }
}
