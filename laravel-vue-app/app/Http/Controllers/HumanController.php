<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class HumanController extends Controller
{
    public function human()
    {
        $data = ['リクーム', 'バータ', 'ジース', 'グルド', 'ギニュー', ];
        return view('human.human', ['data'=>$data]);
    }

    public function post(Request $request)
    {
        return view('human.human', ['fst'=>$request->fst]);
    }
}
