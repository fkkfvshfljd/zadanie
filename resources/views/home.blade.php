@extends('layouts.app')

@section('title')
    Home
@endsection

@section('content')



    <form action="{{ route('order_form') }}" method="post">
        @csrf
        <div class="form-group">
            <input type="text" class="form-control" name="name" placeholder="Имя">
            <input type="tel" class="form-control" name="phone" placeholder="Телефон">
            <input type="email" class="form-control" name="email" placeholder="Email">
            <textarea name="subject"  class="form-control" placeholder="Сообщение"></textarea>
            <button type="submit" class="btn
            btn-success">Отправить</button>

        </div>

    </form>
@endsection
