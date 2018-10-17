@extends('layouts.master')


@section('content')


    <div class="container-fluid menu">
        <div class="row">

            @include('layouts.menu')

            <div class="nav-edit col-md-9">
                <a href="{{ URL('user/create') }}" class="btn btn-info btn-xs">Create</a>
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">ФИО</th>
                        <th scope="col">E-mail</th>
                        <th scope="col">Роль</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <th><a href="{{ URL('user/'.$user->id) }}">{{ $user->full_name }}</a></th>
                            <td>{{ $user->email }}</td>
                            <td>
                                @foreach ($user->getRoleNames() as $role)
                                    {{ $role }}
                                @endforeach
                            </td>

                            <td>{{ link_to_route('user.edit', 'Изменить', [$user->id], ['class' => 'btn btn-success btn-xs']) }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                {{ $users->links() }}
            </div>
        </div>
    </div>

@endsection