<?php

namespace App\Http\Controllers;

use App\Board;
use Illuminate\Http\Request;

class BoardController extends Controller
{
    //レコードの一覧表示
    public function human(Request $request)
    {
        $items = Board::all();
        return view('board.human', ['items' => $items]);
    }

    //新規投稿
    public function add(Request $request)
    {
        return view('board.add');
    }

    public function create(Request $request)
    {
        // バリデーションの実行
        $this->validate($request, Board::$rules);
        // Boardインスタンスの作成
        $board = new Board;
        // 値を用意する
        $form = $request->all();
        unset($form['_token']);
        // インスタンスに値を設定して保存
        $board->fill($form)->save();
        return redirect('/board');
    }
}
