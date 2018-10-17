@extends('layouts.master')

@section('content')

    <div class="container-fluid menu">
        <div class="row">

            @include('layouts.menu')

            <div class="nav-edit col-md-9">
                {!! Form::open(['method'=>'POST', 'route' => 'roles.store']) !!}
                <label for="themeName" class="q-form__label">Название:</label>
                <div class="form-group">
                    {!! Form::text('name', NULL, ['class' => 'q-form__input q-form-white']) !!}
                </div>

                <label for="themeName" class="q-form__label">Разрешения</label>

                <p><strong>Новости</strong></p>

                {!! Form::checkbox('news_checkbox[]', 'create_news') !!}
                <label for="themeName" class="q-form__label">Добавить</label>

                {!! Form::checkbox('news_checkbox[]', 'edit_news') !!}
                <label for="themeName" class="q-form__label">Изменить</label>

                {!! Form::checkbox('news_checkbox[]', 'delete_news') !!}
                <label for="themeName" class="q-form__label">Удалить</label>

                {!! Form::checkbox('news_checkbox[]', 'see_news') !!}
                <label for="themeName" class="q-form__label">Просмотр</label>

                <p><strong>Пользователи</strong></p>

                {!! Form::checkbox('user_checkbox[]', 'create_user') !!}
                <label for="themeName" class="q-form__label">Добавить</label>

                {!! Form::checkbox('user_checkbox[]', 'edit_user') !!}
                <label for="themeName" class="q-form__label">Изменить</label>

                {!! Form::checkbox('user_checkbox[]', 'delete_user') !!}
                <label for="themeName" class="q-form__label">Удалить</label>

                {!! Form::checkbox('user_checkbox[]', 'see_user') !!}
                <label for="themeName" class="q-form__label">Просмотр</label>


                <div class="form-group">
                    {!! Form::button('Сохранить', ['type' => 'submit', 'class' => 'btn btn-primary btn-form']) !!}
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>

@endsection