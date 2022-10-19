@extends('admin.layouts.app')

@section('content')
    <div>
        <h1 class="display-6">Создание пользователя</h1>
    </div>
    <hr>
    <div class="col-md-6">

        <form action="{{route('users.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="input-group mb-3">
                <span class="input-group-text" id="name">Имя Фамилия</span>
                <input type="text" name="name" required placeholder="Иванов Иван" class="form-control">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="email">Email</span>
                <input type="email" name="email" required placeholder="example@gmail.com" class="form-control">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="name">Пароль</span>
                <input type="password" required name="password" class="form-control">
            </div>
            <div class="input-group mb-3">
                <label class="input-group-text" for="inputGroupSelect01">Права</label>
                <select class="form-select" required name="roles[]" id="inputGroupSelect01" multiple>
                    @foreach($roles as $role)
                        <option value="{{$role->id}}">{{$role->name}}</option>
                    @endforeach
                </select>
            </div>
            <h4>Аватар</h4>
            <div class="input-group mb-3">
                <input type="file" name="avatar" class="form-control" id="inputGroupFile02">
            </div>
            <div class="input-group mb-3">
                <button class="btn btn-primary">Создать</button>
            </div>
        </form>
    </div>
@endsection
