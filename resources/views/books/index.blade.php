@extends ('layouts.master')

@section('title', '書籍一覧')

@section('content')
    <div class="flex flex-wrap justify-around items-center">
        @foreach($books as $book)
            @include('partials.bookcard', ['book' => $book])
        @endforeach
    </div>

    {{-- pagination links --}}
    <div class="clear-both mt-1 pb-3">
        {{$books->links()}}
    </div>
@endsection