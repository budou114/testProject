<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrefController extends Controller
{
    public function index(){
        $r = "2";
        return view('sample');
    }
}
