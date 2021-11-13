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

    <form method="POST" action="/books/{{$book->slug}}" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        
        書名：<input type="text" name="title" value="{{$book->title}}"> <br>
        著者：<input type="text" name="author" value="{{$book->author}}"><br>
        出版社：<input type="text" name="publisher" value="{{$book->publisher}}"><br>
        概要：<textarea name="description" value="{{$book->description}}"></textarea><br>
        言語：
        <select name="language">
            <option value="English" {{$book->language=="English"?'selected':''}}>English</option>
            <option value="Japanese" {{$book->language=="Japanese"?'selected':''}}>Japanese</option>
            <option value="Chinese" {{$book->language=="Chinese"?'selected':''}}>Chinese</option>
        </select><br>
        分類：
        <select name="category_id">
            @foreach($categories as $category)
            <option value="{{$category->id}}" {{$book->category_id==$category->id?'selected':''}}>{{$category->name}}</option>
            @endforeach
        </select><br>
        
        表紙画像：<input type="file" name="cover_image" value="{{$book->cover_image}}"><br><br>

        <input type="submit" value="内容を更新"><br><br>
    </form>

    <a href="{{ url()->previous(2) }}">Back</a>
@endsection