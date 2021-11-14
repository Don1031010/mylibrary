@extends ('layouts.master')

@section('title', '新規追加')


@section('content')
    @if ($errors->any())
        <ul id="errors">
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form method="POST" action="/books" enctype="multipart/form-data" class="max-w-2xl mx-auto">
        @csrf
        <div class="mb-3">
            <label for="" class="block mb-2 font-bold text-gray-700 text-sm" for="title"><span class="text-red-600 font-bold">*</span>書名：</label>
            <input type="text" name="title" id="title" class="border border-gray-400 p-1 w-full text-sm"> 
        </div>
        
        <div class="mb-3">
            <label for="" class="block mb-2 font-bold text-gray-700 text-sm" for="author"><span class="text-red-600 font-bold">*</span>著者：</label>
            <input type="text" name="author" id="author" class="border border-gray-400 p-1 w-full text-sm"> 
        </div>
        
        <div class="mb-3">
            <label for="" class="block mb-2 font-bold text-gray-700 text-sm" for="publisher">出版社：</label>
            <input type="text" name="publisher" id="publisher" class="border border-gray-400 p-1 w-full text-sm"> 
        </div>

        <div class="mb-3">
            <label for="" class="block mb-2 font-bold text-gray-700 text-sm" for="language"><span class="text-red-600 font-bold">*</span>言語：</label>
            <select name="language" id="language"  class="border border-gray-400 p-1 w-full text-sm">
                <option value="English">English</option>
                <option value="Japanese">Japanese</option>
                <option value="Chinese">Chinese</option>
            </select><br>
        </div>

        <div class="mb-3">
            <label for="" class="block mb-2 font-bold text-gray-700 text-sm" for="category_id"><span class="text-red-600 font-bold">*</span>分類：</label>
            <select name="category_id" id="category_id"  class="border border-gray-400 p-1 w-full text-sm">
                @foreach($categories as $category)
                <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
            </select>
        </div>
        
        <div class="mb-3">
            <label for="" class="block mb-2 font-bold text-gray-700 text-sm" for="cover_image">表紙画像：</label>
            <input type="file" name="cover_image" id="cover_image" class=" text-sm">
        </div>

        <input type="submit" value="新規追加" class="mt-4 px-4 py-1 text-sm bg-white border border-black rounded-xl hover:text-white hover:bg-gray-700 hover:border-transparent cursor-pointer">
    </form>

    <a href="/">Back</a>
@endsection