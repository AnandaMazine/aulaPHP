<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    // function da rota
    public function index(){
        return view('index');
    }
}
