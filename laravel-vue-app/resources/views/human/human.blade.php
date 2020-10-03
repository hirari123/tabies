<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>冒険の書</title>
  <style>
    body { font-size:16pt; color:#999; }
    h1 { font-size: 50pt; text-align: right; color: #f5f5f5; margin: -20px 0 -30px; letter-spacing: -4pt; }
  </style>
</head>
<body>
    <h1>旅人の書</h1>
    <p>&#064;ギニュー特戦隊の例</p>
    <ol>
      @foreach($data as $item)
      @if($loop->first)
      <p>※データ一覧</p>
      <ul>
      @endif
      <li>No,{{$loop->iteration}}. {{$item}}</li>
      @if($loop->last)
      </ul>
      <p>--ここまで</p>
      @endif
      @endforeach
    </ol>
    <form action="/human" method="POST">
      @csrf
      <input type="text" name="fst">
      <input type="submit">
    </form>
</body>
</html>