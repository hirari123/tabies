@extends('layouts.humanapp')

@section('title', 'ルイーダの店')

@section('menubar')
  @parent
  インデックスページ
@endsection

@section('content')
  <p>ここがルイーダの店です。</p>
  <p>旅する仲間と出会えます</p>

  <p>{{$msg}}</p>
  @if (count($errors) > 0)
    <p>入力に問題があります。再入力して下さい。</p>
  @endif

  <form action="/human" method="POST">
    <table>
      @csrf

      @if ($errors->has('msg'))
      <tr><th>ERROR</th><td>{{$errors->first('msg')}}</td></tr>
      @endif
      <tr><th>Message: </th><td><input type="text" name="msg" value="{{old('msg')}}"></td></tr>
      <tr><th></th><td><input type="submit" value="送信する"></td></tr>

    </table>
  </form>
  @endsection

@section('footer')
copyright 2020 shota_hirakawa
@endsection