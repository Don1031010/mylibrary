<div class="h-24 px-8 py-6">
    <div class="flex justify-between">
        <div class="uppercase text-lg text-black font-bold"><a href="/">MyLibrary</a></div>
        <ul class="flex text-gray-500">
            {{-- <li>Home</li> --}}
            <li class=""">Audiobook</li>
            <li class="ml-6">eBooks</li>
            {{-- <li class="ml-6">Language</li> --}}
            <li class="ml-6"><a href="/books/create">Add Book</a></li>
        </ul>
        <div id="user-status">
            @auth
                
            @else    

            @endauth
        </div>
    </div>
</div>