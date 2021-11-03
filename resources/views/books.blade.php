<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="app.css">
    <title>Document</title>
</head>
<body>
    @foreach($books as $book)
    <div>
        <a href="/books/{{$book->slug}}"><h2>{{ $book->title }}</h2></a>
        <p>著者：{{ $book->author }}</p>
        <p>出版社：{{ $book->publisher }}</p>
        <p>言語：{{ $book->language }}</p>
        <p>分類：{{ $book->category->name }}</p>
        <p>{{$book->user->name}}によってライブラリに追加された</p>

    </div>
    <hr>
    @endforeach
</body>
</html>