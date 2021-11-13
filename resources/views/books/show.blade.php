@extends ('layouts.master')

@section('title')
    {{ $book->title }}
@endsection

@section('content')
<div class="md:flex max-w-md mx-auto">
    <img src="{{ asset('/storage/' .  $book->cover_image)}}" alt="{{ $book->title }}" title="{{ $book->title }}"
    class="w-36 h-52 object-fit border border-gray-200 rounded mx-auto mb-2">
    {{-- <div class="w-36 h-52 bg-no-repeat bg-cover bg-center border border-gray-200" style="background-image:url({{ asset('/storage/' .  $book->cover_image)}});">
    </div> --}}
    <div class="md:ml-8 text-gray-600" >
        <h3 class="text-gray-800 text-lg text-center md:text-left font-bold mb-2">{{ $book->title }}</h3>
        <p>著者：{{ $book->author }} </p>
        <p>出版社：{{ $book->publisher }} </p>
        <p>言語：{{ $book->language }} </p>
        
        <p>分類：<a href="/categories/{{$book->category->slug}}" class="hover:underline">{{ $book->category->name }} </a>
        </p>
        <p>書籍データ：
            @forelse($book->bookfiles as $bookfile)
            <span class="inline-block px-2 pb-1 pt-0.5 text-xs border rounded-full">{{ $bookfile->format }}</span>
            @empty
            <span>None</span>
            @endforelse
        </p>
        <div class="flex flex-col flex-grow-0 md:block mt-4 text-blue-500">
            <a href="/" class="px-4 py-1 mb-2 text-xs text-center border rounded-full border-purple-200 text-purple-600 hover:text-white hover:bg-purple-600 hover:border-transparent">
                書籍データ追加</a>
            <a href="/books/{{$book->slug}}/edit"
                class="md:ml-4 px-4 py-1 text-xs text-center border rounded-full border-purple-200 text-purple-600 hover:text-white hover:bg-purple-600 hover:border-transparent">
                内容の修正</a>
        </div>
    </div>
</div>
<a href="{{ url()->previous() }}">Back</a>
@endsection