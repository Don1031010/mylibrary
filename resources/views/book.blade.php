<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>{{ $book->title }}</title>
</head>
<body>
    <div>
        <h2>{{ $book->title }}</h2>
        <p>著者：{{ $book->author }} </p>
        <p>出版社：{{ $book->publisher }} </p>
        <p>言語：{{ $book->language }} </p>
        <a href="/categories/{{$book->category->slug}}"><p>言語：{{ $book->category->name }} </p></a>
        <a href="/">Back</a>
    </div>
</body>
</html>