@extends('layout.header')

@section('content')
    <div class="card">
        <div class="card-body">
            @if(count($data) > 0)
                <table class="table table-striped">
                    <thead>
                        <th>id</th>
                        <th>Текст</th>
                        <th>Никнейм</th>
                        <th>Рандом</th>
                        <th>Создание</th>
                        <th>Обновление</th>
                    </thead>
                    <tbody>
                        @foreach($data as $item)
                        <tr>
                            <td>{{$item->id}}</td>
                            <td>{{$item->text}}</td>
                            <td>{{$item->nickname}}</td>
                            <td>{{$item->random}}</td>
                            <td>{{$item->created_at}}</td>
                            <td>{{$item->updated_at}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                {{$data->links()}}
            @else
                <div class="row mt-2">
                    <div class="col">
                        <div class="alert alert-info">
                            Таблица Data пуста.
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </div>
@endsection