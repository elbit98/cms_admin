@extends('layouts.master')


@section('content')

    <div class="container-fluid menu">
        <div class="row">

            @include('layouts.menu')

            <div class="nav-edit col-md-9">
               <p>Роль: {{ $role->name }}</p>
                <strong>Права:</strong>
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col"></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($role->getAllPermissions() as $permission)
                        <tr>
                            <th>{{ $permission->name }}</th>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                {{ link_to_route('roles.edit', 'Изменить', [$role->id], ['class' => 'btn btn-success btn-xs']) }}
            </div>
        </div>
    </div>

@endsection