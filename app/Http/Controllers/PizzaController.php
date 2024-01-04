<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pizza;
use Illuminate\Support\Facades\DB;

class PizzaController extends Controller
{
    public function food(){

     $pizzas = Pizza::all();



     $pizzas = DB::table('pizzas')
            ->join('size', 'pizzas.size_id', '=', 'size.size_id')
            ->select('pizzas.*', 'size.size_name')
            ->get();

        return view('/food', ['pizzas'=> $pizzas]);
    }
}
