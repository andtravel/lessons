@extends('layout')
@section('title','Главная страница')
@section('content')
<header>
    <h1>Привет, это Главная страница Учебно-тренировочного сайта по изучению Laravel</h1>
    <h2>Категории</h2>
    <ul>
        <li><a href="{{'categories/create'}}">Создать</a></li>
        <li><a href="{{'categories'}}">Читать</a></li>
{{--        <li><a href="{{'categories/update'}}">Обновить</a></li>--}}
{{--        <li><a href="{{'categories/edit/{$id}'}}">Редактировать</a></li>--}}
{{--        <li><a href="{{'categories/delete'}}">Удалить</a></li>--}}
    </ul>
    <h2>Посты</h2>
    <ul>
        <li><a href="{{'posts/create'}}">Создать</a></li>
        <li><a href="{{'posts'}}">Читать</a></li>
        {{--<li><a href="#">Обновить</a></li>
        <li><a href="#">Редактировать</a></li>
        <li><a href="#">Удалить</a></li>--}}
    </ul>
</header>
@endsection
