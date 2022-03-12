@extends('layout')
@section('title','Создать пост')
@section('content')
    <h1>Создание поста</h1>
    <form role="form" action="{{route('posts.store')}}" method="POST">
        @csrf
        <label for="title">Название</label>
        <input type="text" value="title" name="title"></br>
        <label for="image">Рисунок</label>
        <input type="text" value="image" name="image"></br>
        <label for="description">Описание</label>
        <input type="text" value="description" name="description"></br>
        <label for="content">Полный текст поста</label>
        <input type="textarea" value="content" name="content"></br>
        <label for="category_id">Выбрать категорию</label>
        <select name="category_id">
            {{$categories = App\Models\Category::all()}}
            @foreach($categories as $category)
                <option value="{{$category->id}}">{{$category->title}}</option>
            @endforeach
        </select></br>
        <button type="submit">Сохранить</button>
    </form>
    </br>
    <a href="{{'/'}}">Вернуться на главную страницу</a>
@endsection

