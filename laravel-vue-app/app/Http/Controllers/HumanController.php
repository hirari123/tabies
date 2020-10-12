<?php

namespace App\Http\Controllers;

use Validator;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

use Illuminate\Support\Facades\DB;
use App\Http\Requests\HumanRequest;

class HumanController extends Controller
{
    public function human(Request $request)
    {
        $item = DB::select('select * from p');
        return view('human.human', ['item'=>$item]);
    }

    public function post(Request $request)
    {
        $validate_rule = [
            'msg' =>'required',
        ];

        $this->validate($request, $validate_rule);
        $msg = $request->msg;
        $response = response()->view('human.human', ['msg'=>'「' . $msg . '」をクッキーに保存しました。']);
        $response->cookie('msg', $msg, 100);
        return $response;
    }
}
