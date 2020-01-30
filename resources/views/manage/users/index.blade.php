@extends('manage.layouts.manage-app')

@section('content')

    <div class="row justify-content-between">
        <div class="col-6">
            <h1>Пользователи</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <a href="{{ route('manage.user.create') }}" class="btn btn-outline-success btn-sm float-right">
                Добавить пользователя</a>
        </div>
    </div>

    <table class="table table-hover mt-1 mx-0">
        <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Имя</th>
            <th scope="col">eMail</th>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $item)
            <tr>
                <th scope="row">
                    <a href="{{ route('manage.user.show', $item) }}">{{ $item->id }}</a>
                </th>
                <td>{{ $item->name }}</td>
                <td>{{ $item->email }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>

    {{ $users->links() }}

@endsection