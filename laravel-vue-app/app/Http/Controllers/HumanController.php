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
        $items = DB::select('select * from articles');
        return view('human.human', ['items'=>$items]);
    }

    public function post(Request $request)
    {
        $items = DB::select('select * from articles');
        return view('human.human', ['items'=>$items]);
    }

    public function add(Request $request)
    {
        return view('human.add');
    }

    public function create(Request $request)
    {
        $param = [
            'name' => $request->name,
            'mail' => $request->mail,
            'age' => $request->age,
        ];

        DB::insert('insert into articles(name, mail, age) values(:name, :mail, :age)', $param);

        return redirect('/human');
    }
}
