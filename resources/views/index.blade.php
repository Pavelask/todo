@extends('layouts.layout')
@section('title')
    Список задач
@endsection
@section('content')
<body>
    <div class="container my-4">
    <div class="row d-flex justify-content-center">
        <div class="col-md-6 border border-2 rounded border-info p-4">
            <div>
                <h1>Список задач</h1>
            </div>
            <div>
                <button type="button" class="btn btn-link">
                    <i class="bi bi-newspaper link-dark"></i><a href="{{route('todos.create')}}">Создать новую заметку</a>
                </button>
                @include('alerts.success')
            </div>
            <div>
			    <table class="table table-hover">
			        <thead>
			        <tr>
			            <th scope="col">#</th>
			            <th scope="col">Имя</th>
                        <th scope="col">Статус</th>
                        <th scope="col">Редактировать</th>
                        <th scope="col">Удалить</th>
			        </tr>
			        </thead>
			        <tbody>
                    @foreach($List as $Todo)
                        <tr>
                            <th scope="row">{{$Todo->id}}</th>
                            <td>
                                <p>{{$Todo->name}}</p>
{{--                                <p>{{$Todo->description}}</p>--}}
                            </td>
                            <td class="alert-danger"><i class="bi bi-emoji-angry"></i></td>
                            <td><a href="todos/{{$Todo->id}}/edit"><i class="bi bi-pencil-square"></i></a></td>
                            <td><a href="{{route('todos.destroy', $Todo->id)}}"><i class="bi bi-trash"></i></a></td>
                        </tr>
                    @endforeach
{{--			        <tr>--}}
{{--			            <th scope="row">1</th>--}}
{{--			            <td>Задача один</td>--}}
{{--                        <td class="alert-danger"><i class="bi bi-emoji-angry"></i></td>--}}
{{--			            <td><i class="bi bi-trash"></i></td>--}}
{{--			            <td><i class="bi bi-pencil-square"></i></td>--}}
{{--			        </tr>--}}
{{--			        <tr>--}}
{{--			            <th scope="row">2</th>--}}
{{--			            <td>Задача два</td>--}}
{{--                        <td class=" alert-info"><i class="bi bi-emoji-smile"></i></td>--}}
{{--			            <td><i class="bi bi-trash"></i></td>--}}
{{--			            <td><i class="bi bi-pencil-square"></i></td>--}}
{{--			        </tr>--}}
			        </tbody>
			    </table>
			</div>
            <div>
                <nav aria-label="Page navigation example">
                    {{-- Pagination --}}
                    <div class="d-flex justify-content-center">
                        {!! $List->links() !!}
                    </div>
                </nav>
            </div>
        </div>
    </div>
</div>
@endsection
