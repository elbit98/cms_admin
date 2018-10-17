@extends('layouts.master')


@section('content')

    <div class="container-fluid menu">
        <div class="row">

            @include('layouts.menu')
            {{--['headline', 'publication', 'author', 'text', 'status']--}}
            <div class="nav-edit col-md-9">
                {!! Form::open(['method'=>'POST', 'route' => 'news.store']) !!}
                <label for="themeName" class="q-form__label">Заголовок</label>
                <div class="form-group">
                    {!! Form::text('headline', NULL, ['class' => 'q-form__input q-form-white']) !!}
                </div>

                <label for="themeName" class="q-form__label">Текст</label>
                <div class="form-group">
                    {!! Form::textarea('text', NULL, ['class' => 'q-form__input q-form-white']) !!}
                </div>

                <label for="themeName" class="q-form__label">Статус</label>
                <div class="form-group">
                    {!! Form::select('status', ['0' => 'Не активен', '1' => 'Активен']) !!}
                </div>

                <label for="themeName" class="q-form__label">Публикация</label>
                <div class="form-group">
                    {!! Form::text('publication', NULL, ['id' => 'datepicker',"data-date-format" => "yyyy/mm/dd", 'class' => 'q-form__input q-form-white']) !!}
                </div>
                <div class="form-group">
                    {!! Form::button('Создать', ['type' => 'submit', 'class' => 'btn btn-primary']) !!}
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.min.js"></script>

    <script>
        $(function() {
            $("#datepicker").datepicker({

            });
        });
    </script>

@endsection

