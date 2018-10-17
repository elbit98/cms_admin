@extends('layouts.master')


@section('content')

    <div class="container-fluid menu">
        <div class="row">

            @include('layouts.menu')

            <div class="nav-edit col-md-9">
                {!! Form::open(['method'=>'POST', 'route' => 'user.store']) !!}
                <label for="themeName" class="q-form__label">E-mail:</label>
                <div class="form-group">
                    {!! Form::text('email', NULL, ['class' => 'q-form__input q-form-white']) !!}
                </div>

                <label for="themeName" class="q-form__label">Имя:</label>
                <div class="form-group">
                    {!! Form::text('first_name', NULL, ['class' => 'q-form__input q-form-white']) !!}
                </div>

                <label for="themeName" class="q-form__label">Фамилия:</label>
                <div class="form-group">
                    {!! Form::text('last_name', NULL, ['class' => 'q-form__input q-form-white']) !!}
                </div>
                <label for="themeName" class="q-form__label">Пароль:</label>
                <div class="form-group">
                    {!! Form::password('password', NULL, ['class' => 'q-form__input q-form-white']) !!}
                </div>

                <label for="themeName" class="q-form__label">Роль:</label>
                <div class="form-group">
                    {!! Form::select('size', $roleData) !!}
                </div>

                <label for="themeName" class="q-form__label">Статус:</label>
                <div class="form-group">
                    {!! Form::select('size', ['0' => 'Не активен', '1' => 'Активен']) !!}
                </div>
                <div class="form-group">
                    {!! Form::button('Создать', ['type' => 'submit', 'class' => 'btn btn-primary']) !!}
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>

@endsection