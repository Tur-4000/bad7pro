@extends('manage.layouts.manage-app')

@section('content')

    <div class="row justify-content-center mt-5">
        <div class="col-8">

            @include('flash::message')

            @if ($errors->any())
                @foreach ($errors->all() as $error)
                    <div class="alert alert-danger" role="alert">
                        {{ $error }}
                    </div>
                @endforeach
            @endif

            <div class="card">
                <h3 class="card-header">{{ $role->name }}</h3>
                <div class="card-body">
                    <h4 class="card-title"><b>GuardName:</b> {{ $role->guard_name }}</h4>
                    <h4 class="card-text"><b>Разрешения:</b>
                        @foreach($role->permissions as $permission)
                            <span class="badge badge-info">{{ $permission->name }} </span>
                        @endforeach
                    </h4>
                </div>
            </div>

        </div>
        <div class="col-4">
            <div class="card">
                <div class="card-body">
                    <p class="card-text">Создана: {{ Date::parse($role->created_at)->format('j M Y г.') }}</p>
                    <p class="card-text">Изменена: {{ Date::parse($role->updated_at)->format('j M Y г.') }}</p>
                </div>
            </div>
            <div class="card mt-3">
                <div class="card-body">
                    <a href="{{ route('manage.role.edit', $role) }}" class="btn btn-primary">
                        <i class="fas fa-user-edit"></i>
                        Редактировать
                    </a>
                </div>
            </div>
        </div>
    </div>

@endsection