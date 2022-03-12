@extends('layout')
@section('title','Редактор')
@section('content')
<form role="form" method="post" action="{{ route('categories.update', ['category' => $category->id]) }}">
    @csrf
    @method('PUT')
    <div>
        <div>
            <label for="title">Название</label>
            <input type="text" name="title"
                   class="form-control @error('title') is-invalid @enderror" id="title"
                   value="{{ $category->title }}">
        </div>
        <div>
            <label for="description">Краткое описание</label>
            <input type="text" name="description"
                   class="form-control @error('content') is-invalid @enderror" id="description"
                   value="{{ $category->description }}">
        </div>
        <div>
            <label for="content">Полное описание</label>
            <input type="text" name="content"
                   class="form-control @error('content') is-invalid @enderror" id="content"
                   value="{{ $category->content }}">
        </div>
    </div>
    <!-- /.card-body -->

    <div>
        <button type="submit" name="{{route('categories.update',['category' => $category->id])}}">Сохранить</button>
    </div>
</form>
</br>
<a href="{{'/'}}">Вернуться на главную страницу</a>
@endsection    
