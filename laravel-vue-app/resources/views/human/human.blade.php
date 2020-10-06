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

      <tr><th>name: </th><td><input type="text" name="name" value="{{old('name')}}"></td></tr>
      @error('name')
        <tr><th>ERROR</th><td>{{$message}}</td></tr>
      @enderror

      <tr><th>mail: </th><td><input type="text" name="mail" value="{{old('mail')}}"></td></tr>
      @error('mail')
      <tr><th>ERROR</th><td>{{$message}}</td></tr>
      @enderror

      <tr><th>age: </th><td><input type="text" name="age" value="{{old('age')}}"></td></tr>
      @error('age')
      <tr><th>ERROR</th><td>{{$message}}</td></tr>
      @enderror

      <tr><th></th><td><input type="submit" value="send"></td></tr>
    </table>
  </form>
  @endsection

@section('footer')
copyright 2020 shota_hirakawa
@endsection