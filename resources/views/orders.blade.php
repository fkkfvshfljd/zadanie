@extends('layouts.app')

@section('title')
    Заявки
@endsection

@section('content')
    <h1>Все заявки</h1>

    @foreach($data as $el)
        <div class="card mb-2">
            <ul>
                <li><strong>Имя:</strong> {{$el->name}}</li>
                <li><strong>Телефон:</strong> {{$el->phone}}</li>
                <li><strong>Email:</strong> {{$el->email}}</li>
                <li><strong>Сообщение:</strong> {{$el->subject}}</li>
            </ul>
        </div>
    @endforeach
@endsection
