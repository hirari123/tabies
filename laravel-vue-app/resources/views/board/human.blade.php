@extends('layouts.humanapp')

@section('title', 'Board.human')

@section('menubar')
  @parent
  ボード・ページ
@endsection

@section('content')
  <table>
    <tr><th>Data</th></tr>
      @foreach($items as $item)
        <tr>
          <td>{{$item->getData()}}</td>
        </tr>
      @endforeach
  </table>
@endsection

@section('footer')
coypyright 2020 hirakawa.
@endsection