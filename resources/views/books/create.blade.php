@extends ('layouts.master')

@section('title', '新規追加')


@section('content')
    <img src="/storage/cover/P4uuLkubtYWiMcbECqAIJ0ZoLO9wLPlm7QR5B26I.jpg" alt="">
    <form method="POST" action="/books" enctype="multipart/form-data">
        @csrf
        書名：<input type="text" name="title"> <br>
        著者：<input type="text" name="author"><br>
        出版社：<input type="text" name="publisher"><br>
        言語：
        <select name="language">
            <option value="English">English</option>
            <option value="Japanese">Japanese</option>
            <option value="Chinese">Chinese</option>
        </select><br>
        分類：
        <select name="category_id">
            @foreach($categories as $category)
            <option value="{{$category->id}}">{{$category->name}}</option>
            @endforeach
        </select><br>
        
        表紙画像：<input type="file" name="cover_image"><br><br>

        <input type="submit" value="新規追加"><br><br>
    </form>

    <a href="/">Back</a>
@endsection