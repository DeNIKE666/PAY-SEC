@extends('layouts.payment')

@section('title' , 'Регистрация')

@section('content')
    <form action="{{ route('register') }}" method="POST" class="sl-form">

        @csrf

        <div class="content-box">
            <h2>Регистрация</h2>
            <p>Заполните все необходимые поля и создайте свой аккаунт!</p>
        </div>

        <div class="form-group">
            <label>Имя</label>
            <input type="text" name="name" placeholder="Ваше имя" value="{{ old('name') }}" autofocus>
        </div>

        <div class="form-group">
            <label>Email</label>
            <input type="email" name="email" placeholder="example@gmail.com" value="{{ old('email') }}" autofocus>
        </div>

        <div class="form-group">
            <label>Пароль</label>
            <input type="password"  name="password" placeholder="Введите пароль">
        </div>

        <button type="submit" class="btn btn-filled btn-round">
            <span class="bh"></span>
            <span>ЗАРЕГИСТРИРОВАТЬСЯ</span>
        </button>

        <p class="notice">Если у вас уже есть аккаунт <a href="{{ route('login') }}">войдите</a></p>

    </form>
@endsection
