@extends ('layouts.master')

@section('title', '書籍一覧')

@section('content')
    @foreach($books as $book)
    <div>
        <a href="/books/{{$book->slug}}"><h2>{{ $book->title }}</h2></a>
        <p>著者：{{ $book->author }}</p>
        <p>出版社：{{ $book->publisher }}</p>
        <p>言語：{{ $book->language }}</p>
        <p>分類：{{ $book->category->name }}</p>
        <p>フォーマット：
            @forelse($book->bookfiles as $bookfile)
            <span>{{ $bookfile->format }}</span>
            @empty
            <span>None</span>
            @endforelse
        </p>
        <p>{{$book->user->name}}によってライブラリに追加された</p>

    </div>
    <hr>
    @endforeach
@endsection