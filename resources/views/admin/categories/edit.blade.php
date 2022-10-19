@extends('admin.layouts.app')

@section('content')
    <div>
        <h1 class="display-6">Создание категории</h1>
    </div>
    <hr>
    <div class="col-md-6">
        @if($errors->messages())
            @foreach($errors->messages() as $message)
                @foreach($message as $value)
                    <div class="alert alert-danger">{{ $value }}</div>
                @endforeach
            @endforeach
        @endif
        <form action="{{route('categories.update', $category)}}" method="post">
            @csrf
            @method('PUT')
            <div class="input-group mb-3">
                <span class="input-group-text" id="name">Название</span>
                <input type="text" value="{{$category->name}}" required name="name" placeholder="Категория 1" class="form-control" aria-label="Название категории" aria-describedby="inputGroup-sizing-default">
            </div>
            <div class="input-group mb-3">
                <button class="btn btn-primary">Обновить</button>
            </div>
        </form>
    </div>
@endsection
