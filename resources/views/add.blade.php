@extends('layouts.layout')
@section('title')
    Добавление задачи
@endsection
@section('content')
<div class="container my-4">
    <h3 class="text-center">Добавление задачи</h3>
    <div class="row d-flex justify-content-center">
        <div class="col-md-4">

            @if ($errors->any())
                @include('alerts.errorform')
            @endif

            <div class="border border-2 rounded border-info p-4">
                <form method="post" action="{{route('todos.store')}}">
                @csrf
                @method('POST')
                    <div class="mb-3">
                        <label for="name" class="form-label">Задача</label>
                        <input type="text" class="form-control" id="name" aria-describedby="nameHelp" name="name">
                        <div id="nameHelp" class="form-text">Введите название задачи</div>
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Описание</label>
                        <input type="text" class="form-control" id="description" aria-describedby="nameHelp" name="description">
                        <div id="nameHelp" class="form-text">Введите описание задачи</div>
                    </div>
{{--                    <input name="check" type="hidden" value="0">--}}
                    <button type="submit" class="btn btn-info">Создать</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
