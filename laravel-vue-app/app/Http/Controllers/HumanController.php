<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class HumanController extends Controller
{
    public function human(Request $request)
    {
        return view('human.human');
    }

    public function post(Request $request)
    {
        return view('human.human', ['fst'=>$request->fst]);
    }
}
