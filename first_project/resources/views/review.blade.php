@extends('layout')

@section('title')Отзывы@endsection

@section('main_content')
    <h2>Форма добавления отзыва</h2>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>
                        {{  $error  }}
                    </li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="post" action="/review/check">
        @csrf
        <label for="email"></label><input type="email" name="email" id="email" placeholder="Введите email" class="form-control"><br>
        <label for="subject"></label><input type="text" name="subject" id="subject" placeholder="Введите отзыв" class="form-control"><br>
        <label for="message"></label><textarea name="message" id="message" class="form-control" placeholder="Введите сообщение"></textarea><br>
        <button type="submit" class="btn btn-success">Отправить</button>
    </form>
    <br>
    <h3>Все отзывы</h3>
    @foreach($reviews as $el)
        <div class="alert alert-warning">
            <h4>{{ $el->subject }}</h4>
            <b>{{  $el->email  }}</b>
            <p>{{  $el->message  }}</p>
        </div>
    @endforeach
@endsection
