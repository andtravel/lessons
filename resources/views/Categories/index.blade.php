@extends('layout')
@section('title','Увидеть категории')
@section('content')
    <table>
        <th>id</th>
        <th>title</th>
        <th>description</th>
        <th>content</th>
        <th>created_at</th>
        <th>updated_at</th>
        @foreach ($categories as $category)
            <tr>
                <td>{{$category->id}}</td>
                <td>{{$category->title}}</td>
                <td>{{$category->description}}</td>
                <td>{{$category->content}}</td>
                <td>{{$category->created_at}}</td>
                <td>{{$category->updated_at}}</td>
                <td>
                    <a href="{{ route('categories.edit', ['category' => $category->id]) }}">
                        <i>Редактировать</i>
                    </a>
                </td>
                <td>
                    <form action="{{ route('categories.destroy', ['category' => $category->id]) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit"
                                onclick="return confirm('Подтвердите удаление')">
                            <i>Удалить</i>
                        </button>
                    </form>
                </td>
                <td>
                    <a href="{{ route('categories.show', ['category' => $category->id]) }}">
                        <i>Посмотреть</i>
                    </a>
                </td>
            </tr>
        @endforeach
    </table>
    </br>
    {{ $posts = App\Models\Post::all() }}
    <a href="{{'/'}}">Вернуться на главную страницу</a>
    </br>
    <a href="{{'categories/create'}}">Создать новую категорию</a>
    </br>


    @foreach($categories as $category)
        <div>
            <h2>{{$category->title}}</h2>
        </div>
            @foreach($posts as $post)
                @if ($category->id == $post->category_id)
                    <div>
                        <h3>{{$post->title}}</h3>
                        <p>{{$post->content}}</p>
                    </div>
                @endif
            @endforeach

    @endforeach
@endsection







