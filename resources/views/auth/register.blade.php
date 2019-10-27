@extends('layouts.payment')

@section('content')
    <form action="#" class="sl-form">

        <div class="form-group">
            <label>Имя</label>
            <input type="email" name="name" placeholder="Ваше имя" required>
        </div>

        <div class="form-group">
            <label>Email</label>
            <input type="email" name="email" placeholder="example@gmail.com" required>
        </div>

        <div class="form-group">
            <label>Пароль</label>
            <input type="password"  name="password" placeholder="Введите пароль" required>
        </div>

        <button class="btn btn-filled btn-round"><span class="bh"></span> <span>ЗАРЕГИСТРИРОВАТЬСЯ</span></button>

        <p class="notice">Если у вас уже есть аккаунт <a href="{{ route('register') }}">войдите</a></p>

    </form>
@endsection
