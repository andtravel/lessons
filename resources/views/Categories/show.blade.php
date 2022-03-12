@extends('layout')
@section('title','Увидеть одну категорию')
@section('content')
    <table>
        <th>title</th>
        <th>description</th>
        <th>content</th>
        <th>created_at</th>
        <th>updated_at</th>
            <tr>
                <td>{{$category->title}}</td>
                <td>{{$category->description}}</td>
                <td>{{$category->content}}</td>
                <td>{{$category->created_at}}</td>
                <td>{{$category->updated_at}}</td>
            </tr>
    </table>
    </br>
    <a href="{{'/'}}">Вернуться на главную страницу</a>
@endsection

