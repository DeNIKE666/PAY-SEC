@extends('layouts.dashboard')

@section('content')

    <h3 class="text-5 font-weight-700 d-flex admin-heading">Создание сделки</h3>

    <div class="bg-white">
        <div class="row">
            <div class="col-md-12">
                <div class="bg-light form-box">

                    <form id="form-send-money" method="post">
                        <div class="form-group row">
                            <div class="col-6">
                                <label for="title">Название</label>
                                <input type="text" name="title" class="form-control" id="title" placeholder="Название сделки" value="{{ old('title') }}">
                            </div>

                            <div class="col-6">
                                <label for="seller">Ссылка на продавца</label>
                                <input type="text" class="form-control" name="seller" id="seller" placeholder="{{ url()->current() }}/ALEX5533" value="{{ old('seller') }}" >
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="description">Описание</label>
                            <textarea class="form-control" name="description" rows="4" id="description"  placeholder="Описание"> {{ old('description') }}</textarea>
                        </div>

                        <button type="submit" class="btn btn-default btn-center btn-block">
                            <span class="bh"></span>
                            <span>Создать сделку</span>
                        </button>
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection
