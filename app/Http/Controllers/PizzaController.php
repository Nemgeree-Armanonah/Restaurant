<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pizza;
use Illuminate\Support\Facades\DB;

class PizzaController extends Controller
{
    public function food(){

     $pizzas = Pizza::all();

        return view('/food', ['pizzas'=> $pizzas]);
    }
}
