@extends('layouts.master')


@section('content')
<div class="container">
    <div class="row" style="height: 100vh">
        <div class="col-md-6 offset-3" style="top: 30%;">
            <div class="panel-body  text-center">
                {!! Form::open(['method'=>'POST', 'route' => 'login.form'], ['class' => 'q-form g-no-projects']) !!}
                <label for="themeName" class="q-form__label">E-mail:</label>
                <div class="form-group">
                    {!! Form::text('email', NULL, ['class' => 'q-form__input q-form-white']) !!}
                </div>
                <label for="themeName" class="q-form__label">Пароль:</label>
                <div class="form-group">
                    {!! Form::password('password', NULL, ['class' => 'q-form__input q-form-white']) !!}
                </div>
                <div class="form-group">
                    {!! Form::button('Войти', ['type' => 'submit', 'class' => 'q-button _red']) !!}
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@endsection


