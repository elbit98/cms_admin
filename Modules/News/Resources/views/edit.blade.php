@extends('layouts.master')


@section('content')


    <div class="container-fluid menu">
        <div class="row">

            @include('layouts.menu')

            <div class="nav-edit col-md-9">
                {!! Form::model($news, ['route' => ['news.update', $news->id], 'method' => 'PUT']) !!}
                <label for="themeName" class="q-form__label">Заголовок</label>
                <div class="form-group">
                    {!! Form::text('headline', $news->headline, ['class' => 'q-form__input q-form-white']) !!}
                </div>

                <label for="themeName" class="q-form__label">Текст</label>
                <div class="form-group">
                    {!! Form::textarea('text', $news->text, ['class' => 'q-form__input q-form-white']) !!}
                </div>

                <label for="themeName" class="q-form__label">Статус</label>
                <div class="form-group">
                    {!! Form::select('status', ['0' => 'Не активен', '1' => 'Активен']) !!}
                </div>

                <label for="themeName" class="q-form__label">Публикация</label>
                <div class="form-group">
                    {!! Form::text('publication', $news->publication, ['id' => 'datepicker',"data-date-format" => "yyyy/mm/dd", 'class' => 'q-form__input q-form-white']) !!}
                </div>
                <div class="form-group">
                    {!! Form::button('Изменить', ['type' => 'submit', 'class' => 'btn btn-primary btn-form']) !!}
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>

@endsection