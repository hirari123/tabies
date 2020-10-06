<?php

namespace App\Http\Controllers;

use Validator;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

use App\Http\Requests\HumanRequest;

class HumanController extends Controller
{
    public function human(Request $request)
    {
        return view('human.human', ['msg'=>'フォームを入力してください。']);
    }

    public function post(HumanRequest $request)
    {
        return view('human.human', ['msg'=>'正しく入力されました!!']);
    }
}
