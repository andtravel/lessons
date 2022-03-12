@extends('layout')
@section('title','Создать категорию')
@section('content')
    <h1>Создание категории</h1>
    <form role="form" action="{{route('categories.store')}}" method="POST">
        @csrf
        <label for="title">Название</label>
        <input type="text" value="category" name="title"></br>
        <label for="description">Описание</label>
        <input type="text" value="description" name="description"></br>
        <label for="content">Полное описание категории</label>
        <input type="textarea" value="content" name="content"></br>
        <button type="submit">Сохранить</button>
    </form>
    </br>
    <a href="{{'/'}}">Вернуться на главную страницу</a>
@endsection
