@extends('layouts.layout')
@section('title')
    Редактирование задачи
@endsection
@section('content')
    <div class="container my-4">
        <h3 class="text-center">Редактирование задачи</h3>
        <div class="row d-flex justify-content-center">
            <div class="col-md-4">
                <div class="border border-2 rounded border-info p-4">
                    <form method="post" action="{{route('todos.update', $todos->id)}}">

                        <div class="mb-3">
                            <label for="name" class="form-label">Задача</label>
                            <input type="text" class="form-control" id="name" aria-describedby="nameHelp" name="name" value="{{$todos->name}}">
                            <div id="nameHelp" class="form-text">Введите название задачи</div>
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label">Описание</label>
                            <input type="text" class="form-control" id="description" aria-describedby="nameHelp" name="description"  value="{{$todos->description}}">
                            <div id="nameHelp" class="form-text">Введите описание задачи</div>
                        </div>
                        <button type="submit" class="btn btn-info">Сохранить</button>

                        @method('PATCH')
                        @csrf
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
