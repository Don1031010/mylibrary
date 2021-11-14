@extends ('layouts.master')

@section('title', '内容の更新')


@section('content')
    @if ($errors->any())
        <ul id="errors">
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form method="POST" action="/books/{{$book->slug}}" enctype="multipart/form-data" class="max-w-lg mx-auto mt-10 bg-gray-100 border border-gray-200 p-6 rounded-xl">
        @method('PUT')
        @csrf
        
        <div class="flex items-center mb-2">
            <div class="w-1/6 text-left">
                <label class=" mb-2 font-bold text-sm text-gray-700" for="title">書名：</label>
            </div>
            <div class="w-10/12">
                <input type="text" name="title" id="title" value="{{$book->title}}"  class="border border-gray-400 text-sm p-0.5 w-full"> 
            </div>
        </div>

        <div class="flex items-center mb-2">
            <div class="w-1/6 text-left">
                <label class=" mb-2 font-bold text-sm text-gray-700" for="author">著者：</label>
            </div>
            <div class="w-10/12">
                <input type="text" name="author" id="author" value="{{$book->author}}"  class="border border-gray-400 text-sm p-0.5 w-full "> 
            </div>
        </div>

        <div class="flex items-center mb-2">
            <div class="w-1/6 text-left">
                <label class=" mb-2 font-bold text-sm text-gray-700" for="publisher">出版社：</label>
            </div>
            <div class="w-10/12">
                <input type="text" name="publisher" id="publisher" value="{{$book->publisher}}"  class="border border-gray-400 text-sm p-0.5 w-full "> 
            </div>
        </div>

        <div class="flex items-center mb-2">
            <div class="w-1/6 text-left">
                <label class=" mb-2 font-bold text-sm text-gray-700" for="description">概要：</label>
            </div>
            <div class="w-10/12">
                <textarea name="description" id="description" value="{{$book->description}}" class="border border-gray-400 text-sm p-0.5 w-full"></textarea>
            </div>
        </div>

        <div class="flex items-center mb-2">
            <div class="w-1/6 text-left">
                <label class=" mb-2 font-bold text-sm text-gray-700" for="language">言語：</label>
            </div>
            <div class="w-10/12">
                <select name="language" id="language" class="border border-gray-400 text-sm p-0.5 w-full">
                    <option value="English" {{$book->language=="English"?'selected':''}}>English</option>
                    <option value="Japanese" {{$book->language=="Japanese"?'selected':''}}>Japanese</option>
                    <option value="Chinese" {{$book->language=="Chinese"?'selected':''}}>Chinese</option>
                </select>
            </div>
        </div>

        <div class="flex items-center mb-2">
            <div class="w-1/6 text-left">
                <label class=" mb-2 font-bold text-sm text-gray-700" for="category_id">分類：</label>
            </div>
            <div class="w-10/12">
                <select name="category_id" id="category_id" class="border border-gray-400 text-sm p-0.5 w-full">
                    @foreach($categories as $category)
                    <option value="{{$category->id}}" {{$book->category_id==$category->id?'selected':''}}>{{$category->name}}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="flex items-center mb-2">
            <div class="w-1/6 text-left">
                <label class=" mb-2 font-bold text-sm text-gray-700" for="cover_image">表紙画像：</label>
            </div>
            <div class="w-10/12">
                <input type="file" name="cover_image" id="cover_image"  class="text-sm p-0.5 w-full ">
            </div>
        </div>        

        <input type="submit" value="内容を更新" class="mt-4 px-4 py-1 text-xs bg-white text-purple-600 font-semibold rounded-full border border-gray-600 hover:text-white hover:bg-purple-600 hover:border-transparent">
    </form>

    <a href="{{ url()->previous(2) }}">Back</a>
@endsection