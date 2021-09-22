@extends('layouts.layout')
@section('title')
    Список задач
@endsection
@section('content')
<body>
    <div class="container my-4">
    <div class="row d-flex justify-content-center">
        <div class="col-md-6 border border-2 rounded border-info p-4">
            <h1>Список задач</h1>
            <div>
			    <table class="table table-hover">
			        <thead>
			        <tr>
			            <th scope="col">#</th>
			            <th scope="col">Имя</th>
                        <th scope="col">Статус</th>
			            <th scope="col">Удалить</th>
			            <th scope="col">Редактировать</th>
			        </tr>
			        </thead>
			        <tbody>
			        <tr>
			            <th scope="row">1</th>
			            <td>Задача один</td>
                        <td class="alert-danger"><i class="bi bi-emoji-angry"></i></td>
			            <td><i class="bi bi-trash"></i></td>
			            <td><i class="bi bi-pencil-square"></i></td>
			        </tr>
			        <tr>
			            <th scope="row">2</th>
			            <td>Задача два</td>
                        <td class=" alert-info"><i class="bi bi-emoji-smile"></i></td>
			            <td><i class="bi bi-trash"></i></td>
			            <td><i class="bi bi-pencil-square"></i></td>
			        </tr>
			        </tbody>
			    </table>
			</div>
            <div>
                <nav aria-label="Page navigation example">
                    <ul class="pagination">
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>
@endsection