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
        $items = DB::table('articles')->get();
        return view('human.human', ['items' => $items]);
    }

    public function post(Request $request)
    {
        $items = DB::select('select * from articles');
        return view('human.human', ['items' => $items]);
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

    public function edit(Request $request)
    {
        $param = ['id' => $request->id];
        $item = DB::select('select * from articles where id = :id', $param);
        return view('human.edit', ['form' => $item[0]]);
    }

    public function update(Request $request)
    {
        $param = [
            'id' => $request->id,
            'name' => $request->name,
            'mail' => $request->mail,
            'age' => $request->age
        ];

        DB::update('update articles set name =:name, mail = :mail, age = :age where id = :id', $param);
        return redirect('/human');
    }

    public function del(Request $request)
    {
        $param = ['id' => $request->id];
        $item = DB::select('select * from articles where id = :id', $param);
        return view('human.del', ['form' => $item[0]]);
    }

    public function remove(Request $request)
    {
        $param = ['id' => $request->id];
        DB::delete('delete from articles where id = :id', $param);
        return redirect('/human');
    }

    public function show(Request $request)
    {
        $name = $request->name;
        $items = DB::table('articles')
            ->where('name', 'like', '%' . $name . '%')
            ->orWhere('mail', 'like', '%' .$name . '%')
            ->get();
        return view('human.show', ['item' => $items]);
    }

    public function rest(Request $request)
    {
        return view('human.rest');
    }
}
