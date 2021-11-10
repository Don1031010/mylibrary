@extends ('layouts.master')

@section('title')
    {{ $book->title }}
@endsection

@section('content')
<div class="flex p-4">
    <div class="w-36 h-52 bg-no-repeat bg-cover bg-center border border-gray-200" style="background-image:url({{ asset('/storage/' .  $book->cover_image)}});">
    </div>
    <div class="ml-8">
        <h3 class="text-indigo-600 text-xl font-bold mb-1">{{ $book->title }}</h3>
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
        <div class="mt-2 text-blue-500">
            <a href="/books/{{$book->slug}}/edit">書籍内容の更新</a>
        </div>
    </div>
    <a href="/">Back</a>
</div>
@endsection