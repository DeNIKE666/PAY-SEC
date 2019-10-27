@extends('layouts.payment')

@section('content')
    <form action="#" class="sl-form">
        <div class="form-group">
            <label>Email</label>
            <input type="email" name="email" placeholder="example@gmail.com" required>
        </div>
        <div class="form-group">
            <label>Пароль</label>
            <input type="password"  name="passwprd" placeholder="Введите пароль" required>
        </div>
        <button class="btn btn-filled btn-round"><span class="bh"></span> <span>Войти в аккаунт</span></button>
        <p class="notice">Если еще нет аккауна то <a href="{{ route('register') }}">зарегистрируйтесь</a></p>
    </form>
@endsection
