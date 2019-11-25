@extends('manage.layouts.manage-app')

@section('content')

    <div class="row">
        <div class="col-10">
            <h1>Заявки</h1>
        </div>
    </div>

    <table class="table table-hover mt-1 mx-0">
        <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Имя</th>
            <th scope="col">Компания</th>
            <th scope="col">Текст запроса</th>
            <th scope="col">Контатная информaция</th>
            <th scope="col">Примечание</th>
        </tr>
        </thead>
        <tbody>
        @foreach($orders as $item)
            <tr>
                <th scope="row"><a href="{{ route('manage.order.show', $item) }}">{{ $item->id }}</a></th>
                <td>{{ $item->name }}</td>
                <td>{{ $item->company }}</td>
                <td>{{ $item->description }}</td>
                <td>{{ $item->contact }}</td>
                <td>{{ $item->note }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>

    {{ $orders->links() }}

@endsection
