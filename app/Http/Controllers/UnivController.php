<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\FaultCatr;

class UnivController extends Controller
{
    //Universal Functions

    public function index(){
        return view('app.index');
    }

    public function printer(){
        return view('app.printer');
    }

    public function pc(){
        return view('app.pc');
    }

    public function addProb(){
        return view('main.add-problem');
    }

}
