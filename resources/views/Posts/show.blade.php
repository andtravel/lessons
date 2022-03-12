@extends('layout')
@section('title','Увидеть один пост')
@section('content')
    <table>
        <th>id</th>
        <th>title</th>
        <th>image</th>
        <th>description</th>
        <th>content</th>
        <th>category_id</th>
        <th>created_at</th>
        <th>updated_at</th>
        <tr>
            <td>{{$post->id}}</td>
            <td>{{$post->title}}</td>
            <td>{{$post->image}}</td>
            <td>{{$post->description}}</td>
            <td>{{$post->content}}</td>
            <td>{{$post->category_id}}</td>
            <td>{{$post->created_at}}</td>
            <td>{{$post->updated_at}}</td>
        </tr>
    </table>
    </br>
    <a href="{{'/'}}">Вернуться на главную страницу</a>
@endsection
