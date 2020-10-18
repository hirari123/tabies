@extends('layouts.humanapp')

@section('title', 'ルイーダの店')

@section('menubar')
  @parent
  インデックスページ
@endsection

@section('content')
  <p>ここがルイーダの店です。</p>
  <p>旅する仲間と出会えます</p>

  <table>
    <tr><th>Name</th><th>Mail</th><th>Age</th></tr>
    @foreach ($items as $item)
      <tr>
        <td>{{$item->name}}</td>
        <td>{{$item->mail}}</td>
        <td>{{$item->age}}</td>
      </tr>
    @endforeach
  </table>
@endsection

@section('footer')
  copyright 2020 shota_hirakawa
@endsection