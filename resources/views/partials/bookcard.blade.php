<div class="p-4 mb-4 shadow-md  bg-gray-100">
    <a href="/books/{{$book->slug}}" >
        <div class="w-56 h-80 bg-no-repeat bg-cover bg-center border border-gray-200" style="background-image:url({{ asset('/storage/' .  $book->cover_image)}});">
        </div>
        <h3 class="w-56 mt-2">{{ $book->title }}</h3>
    </a>
</div>