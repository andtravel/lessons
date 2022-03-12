@extends('layout')
@section('title','Увидеть посты')
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
        @foreach ($posts as $post)
            <tr>
                <td>{{$post->id}}</td>
                <td>{{$post->title}}</td>
                <td>{{$post->image}}</td>
                <td>{{$post->description}}</td>
                <td>{{$post->content}}</td>
                <td>{{$post->category_id}}</td>
                <td>{{$post->created_at}}</td>
                <td>{{$post->updated_at}}</td>
                <td>
                    <a href="{{ route('posts.edit', ['post' => $post->id]) }}">
                        <i>Редактировать</i>
                    </a>
                </td>
                <td>
                    <form action="{{ route('posts.destroy', ['post' => $post->id]) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit"
                                onclick="return confirm('Подтвердите удаление')">
                            <i>Удалить</i>
                        </button>
                    </form>
                </td>
                <td>
                    <a href="{{ route('posts.show', ['post' => $post->id]) }}">
                        <i>Посмотреть</i>
                    </a>
                </td>
            </tr>
        @endforeach
    </table>
    </br>
    <a href="{{'/'}}">Вернуться на главную страницу</a>
    </br>
    <a href="{{'posts/create'}}">Создать новую запись</a>
@endsection

