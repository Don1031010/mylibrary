@extends ('layouts.master')

@section('title', '書籍一覧')

@section('content')
    @foreach($books as $book)
    <div class="book-card">
        <div class="cover-image" style="background-image:url({{ asset('/storage/' .  $book->cover_image)}});">
        </div>
        <div class="book-info">
            <a href="/books/{{$book->slug}}"><h3>{{ $book->title }}</h3></a>
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
            <p>作成by：{{$book->user->name}}</p>

            <div class="buttons">
                <a href="/books/{{$book->slug}}/edit">書籍内容の更新</a>
            </div>
        </div>
    </div>
    <hr>
    @endforeach
@endsection