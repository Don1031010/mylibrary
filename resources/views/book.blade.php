@extends ('layouts.master')

@section('title')
    {{ $book->title }}
@endsection

@section('content')
        <h2>{{ $book->title }}</h2>
        <p>著者：{{ $book->author }} </p>
        <p>出版社：{{ $book->publisher }} </p>
        <p>言語：{{ $book->language }} </p>
        <a href="/categories/{{$book->category->slug}}"><p>言語：{{ $book->category->name }} </p></a>
        <p>フォーマット：
            @forelse($book->bookfiles as $bookfile)
            <span>{{ $bookfile->format }}</span>
            @empty
            <span>None</span>
            @endforelse
        </p>
        <a href="/">Back</a>
@endsection