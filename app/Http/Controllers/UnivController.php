<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UnivController extends Controller
{
    //Universal Functions

    public function index(){
        return view('app.index');
    }
}
