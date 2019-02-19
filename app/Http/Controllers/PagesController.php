<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function new(){
        // return "this is new controller";
        return view('new');
    }

    // public function index(){
    //     return view('todos'); 
    // }
}
