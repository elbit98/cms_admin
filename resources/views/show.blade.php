@extends('layouts.master')


@section('content')

    <div class="container-fluid menu">
        <div class="row">

            @include('layouts.menu')

            <div class="nav-edit col-md-9">
                <p>ФИО: <strong>{{ $user->full_name }}</strong></p>
                <table class="table table-bordered table-responsive">
                    <tr>
                        <td width="25%">E-mail</td>
                        <td width="75%">{{$user->email }}</td>
                    </tr>
                    <tr>
                        <td width="25%">Роль</td>
                        <td width="75%">
                            @foreach ($user->getRoleNames() as $role)
                                {{ $role }}
                            @endforeach</td>
                    </tr>
                    <tr>
                        <td width="25%">Статус</td>
                        <td width="75%">@if ($user->status == 0) Не активен @else Активен @endif</td>
                    </tr>
                </table>
                {{ link_to_route('user.edit', 'Изменить', [$user->id], ['class' => 'btn btn-success btn-xs']) }}
            </div>
        </div>
    </div>

@endsection