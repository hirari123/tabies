@extends('layouts.humanapp')

@section('title', 'Person.human')

@section('menubar')
  @parent
  インデックスページ
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
copyright 2020 hirakara.
@endsection