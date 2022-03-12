@extends('layout')
@section('title','Редактор постов')
@section('content')
    <form role="form" method="post" action="{{ route('posts.update', ['post' => $post->id]) }}">
        @csrf
        @method('PUT')
        <div>
            <div>
                <label for="title">Название</label>
                <input type="text" name="title"
                       class="form-control @error('title') is-invalid @enderror" id="title"
                       value="{{ $post->title }}">
            </div>
            <div>
                <label for="title">Рисунок</label>
                <input type="text" name="image"
                       class="form-control @error('image') is-invalid @enderror" id="image"
                       value="{{ $post->image }}">
            </div>
            <div>
                <label for="description">Краткое описание</label>
                <input type="text" name="description"
                       class="form-control @error('description') is-invalid @enderror" id="description"
                       value="{{ $post->description }}">
            </div>
            <div>
                <label for="content">Полный текст поста</label>
                <input type="text" name="content"
                       class="form-control @error('content') is-invalid @enderror" id="content"
                       value="{{ $post->content }}">
            </div>
            <div>
                <label for="category_id">Выбрать категорию</label>
                <select name="category_id">
                    {{$categories = App\Models\Category::all()}}
                    @foreach($categories as $category)
                        <option value="{{$category->id}}">{{$category->title}}</option>
                    @endforeach
                </select></br>
            </div>
        </div>
        <!-- /.card-body -->

        <div>
            <button type="submit" name="{{route('posts.update',['post' => $post->id])}}">Сохранить</button>
        </div>
    </form>
    </br>
    <a href="{{'/'}}">Вернуться на главную страницу</a>
@endsection

