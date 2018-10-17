@extends('layouts.master')


@section('content')

    <div class="container-fluid menu">
        <div class="row">

            @include('layouts.menu')

            <div class="nav-edit col-md-9">
                <a href="{{ URL('news/create') }}" class="btn btn-info btn-xs">Create</a>
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">Заголовок</th>
                        <th scope="col">Публикация</th>
                        <th scope="col">Автор</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($news as $item)
                        <tr>
                            <th><a href="{{ URL('news/'.$item->id) }}">{{ $item->headline }}</a></th>
                            <td>{{ $item->publication }}</td>
                            <td>{{ $item->author }}</td>
                            <td>{{ link_to_route('news.edit', 'Изменить', [$item->id], ['class' => 'btn btn-success btn-xs']) }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                {{ $news->links() }}
            </div>
        </div>
    </div>

@endsection