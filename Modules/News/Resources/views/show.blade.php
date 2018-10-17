@extends('layouts.master')


@section('content')

    <div class="container-fluid menu">
        <div class="row">

            @include('layouts.menu')

            <div class="nav-edit col-md-9">
                <p>Новость: <strong>{{ $news->headline }}</strong></p>
                <table class="table table-bordered table-responsive">
                    <tr>
                        <td width="25%">Текст</td>
                        <td width="75%">{{$news->text }}</td>
                    </tr>
                    <tr>
                        <td width="25%">Статус</td>
                        <td width="75%">@if ($news->status == 0) Не активен @else Активен @endif </td>
                    </tr>
                    <tr>
                        <td width="25%">Публикация</td>
                        <td width="75%">{{ $news->publication }}</td>
                    </tr>
                </table>
                {{ link_to_route('news.edit', 'Изменить', [$news->id], ['class' => 'btn btn-success btn-xs']) }}
            </div>
        </div>
    </div>

@endsection