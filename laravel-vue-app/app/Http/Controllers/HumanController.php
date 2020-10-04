<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class HumanController extends Controller
{
    public function human(Request $request)
    {
        return view('human.human', ['msg'=>'フォームを入力：']);
    }

    public function post(Request $request)
    {
        $validate_rule = [
            'name' => 'required',
            'mail' => 'email',
            'age' => 'numeric|between:0,150',
        ];
        $this->validate($request, $validate_rule);
        return view('human.human', ['msg'=>'正しく入力されました!!']);
    }
}
