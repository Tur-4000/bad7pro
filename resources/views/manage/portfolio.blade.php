@extends('manage.layouts.manage-app')

@section('content')

    <div class="row">
        <div class="col-10">
            <h1>Наши работы</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <a href="{{ route('manage.portfolio.create') }}" class="btn btn-outline-success btn-sm float-right">
                Добавить материал</a>
        </div>
    </div>


    <table class="table table-hover mt-1">
        <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Заголовок</th>
            <th scope="col">Описание</th>
            <th scope="col">Тип</th>
            <th scope="col">Дата</th>
            <th scope="col">URL</th>
        </tr>
        </thead>
        <tbody>
@foreach($portfolio as $item)
        <tr>
            <th scope="row">{{ $item->id }}</th>
            <td>{{ $item->title }}</td>
            <td>{{ $item->description }}</td>
            <td>{{ $item->type }}</td>
            <td>{{ $item->date }}</td>
            <td>{{ $item->url }}</td>
        </tr>
@endforeach
        </tbody>
    </table>
@endsection
