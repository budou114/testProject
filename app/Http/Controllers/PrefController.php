<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrefController extends Controller
{
    public function index(){
        // 例として京都を選択
        $prefId = 26;

        return view('sample', compact('prefId'));
    }
}
