@extends('layouts.master')


@section('content')
    <div class="container-fluid menu">
        <div class="row">

            @include('layouts.menu')

            <div class="nav-edit col-md-9">
                <a href="{{ URL('roles/create') }}" class="btn btn-info btn-xs">Добавить</a>
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">Название</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($roles as $role)
                        <tr>
                            <th><a href="{{ URL('roles/'.$role->id) }}">{{ $role->name }}</a></th>
                            <td>Пользователей на должности: {{ count($role->users) }}</td>
                            <td>{{ link_to_route('roles.edit', 'Изменить', [$role->id], ['class' => 'btn btn-success btn-xs']) }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection