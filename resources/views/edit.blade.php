@extends('layouts.master')


@section('content')


    <div class="container-fluid menu">
        <div class="row">

            @include('layouts.menu')

            <div class="nav-edit col-md-9">
                {!! Form::model($user, ['route' => ['user.update', $user->id], 'method' => 'PUT']) !!}
                <label for="themeName" class="q-form__label">Имя:</label>
                <div class="form-group">
                    {!! Form::text('first_name', $user->first_name, ['class' => 'q-form__input q-form-white']) !!}
                </div>

                <label for="themeName" class="q-form__label">Фамилия:</label>
                <div class="form-group">
                    {!! Form::text('last_name', $user->last_name, ['class' => 'q-form__input q-form-white']) !!}
                </div>

                <label for="themeName" class="q-form__label">Пароль:</label>
                <div class="form-group">
                    {!! Form::password('password', NULL, ['class' => 'q-form__input q-form-white']) !!}
                </div>

                <label for="themeName" class="q-form__label">Роль:</label>
                <div class="form-group">
                    {!! Form::select('role', $roleData) !!}
                </div>

                <label for="themeName" class="q-form__label">Статус:</label>
                <div class="form-group">
                    {!! Form::select('status', ['0' => 'Не активен', '1' => 'Активен']) !!}
                </div>
                <div class="form-group">
                    {!! Form::button('Изменить', ['type' => 'submit', 'class' => 'btn btn-primary btn-form']) !!}
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>

@endsection