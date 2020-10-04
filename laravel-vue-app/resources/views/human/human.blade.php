@extends('layouts.humanapp')

@section('title', 'ルイーダの店')

@section('menubar')
  @parent
  インデックスページ
@endsection

@section('content')
  <p>ここがルイーダの店です。</p>
  <p>旅する仲間と出会えます</p>
  <p>これは、<middleware>google.com</middleware>へのリンクです</p>
  <p>これは、<middleware>yahoo.co.jp</middleware>へのリンクです</p>
@endsection

@section('footer')
copyright 2020 shota_hirakawa
@endsection