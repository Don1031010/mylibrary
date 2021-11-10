@extends ('layouts.master')

@section('title', '書籍一覧')

@section('content')
    <div class="">
    @foreach($books as $book)
    <div class="float-left p-4 ml-3 mb-3 shadow-md  bg-gray-100">
        <a href="/books/{{$book->slug}}" >
            <div class="w-56 h-80 bg-no-repeat bg-cover bg-center border border-gray-200" style="background-image:url({{ asset('/storage/' .  $book->cover_image)}});">
            </div>
            <h3 class="w-56 mt-2">{{ $book->title }}</h3>
        </a>
    </div>
    @endforeach
    </div>
    <div class="clear-both">
        {{$books->links()}}

    </div>
@endsection