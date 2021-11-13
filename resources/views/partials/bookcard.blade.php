<div class="m-2 shadow-md overflow-hidden">
    <a href="/books/{{$book->slug}}" >
        <img src="{{ asset('/storage/' .  $book->cover_image)}}" title="{{ $book->title }}"
        class="w-32 h-48 object-cover border border-gray-200 rounded">
        {{-- <div class="w-32 h-48 bg-no-repeat bg-cover bg-center border border-gray-200" style="background-image:url({{ asset('/storage/' .  $book->cover_image)}});">
        </div> --}}
        {{-- <h3 class="mt-1 text-xs">{{ $book->title }}</h3> --}}
    </a>
</div>