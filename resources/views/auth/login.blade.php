@extends('layouts.payment')

@section('title' , 'Авторизация')

@section('content')
    <form action="{{ route('login') }}" method="POST" class="sl-form">

        @csrf

        <div class="content-box">
            <h2>АВТОРИЗАЦИЯ</h2>
            <p>Войдите в личный кабинет для использования сервиса</p>
        </div>

        <div class="form-group">
            <label>Email</label>
            <input type="email" name="email" placeholder="example@gmail.com" value="{{ old('email') }}" autofocus>
        </div>

        <div class="form-group">
            <label>Пароль</label>
            <input type="password"  name="password" placeholder="Введите пароль">
        </div>

        <button type="submit" class="btn btn-filled btn-round"><span class="bh"></span>
            <span>Войти в аккаунт</span>
        </button>

        <p class="notice">Если еще нет аккауна то <a href="{{ route('register') }}">зарегистрируйтесь</a></p>
    </form>
@endsection
