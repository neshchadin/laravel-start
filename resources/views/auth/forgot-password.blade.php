@extends('app')

@section('title', 'Восстановление пароля')

@section('navbar')
    @parent

@endsection

@section('content')
    <div class="row d-flex justify-content-center h-auto">
        <div class="col col-md-8 col-sm-6 border rounded m-3 mt-5  p-4">



            <h1 class="display-6">Восстановление пароля</h1>

            <p> Забыли Ваш пароль? Без проблем. Просто сообщите нам свой адрес электронной почты,
                и мы отправим вам ссылку для сброса пароля, которая позволит вам выбрать новый.</p>


            <!-- Session Status -->
            <x-auth-session-status class="mb-4" :status="session('status')" />

            <!-- Validation Errors -->
            <x-auth-validation-errors class="mb-4" :errors="$errors" />

            <form method="POST" action="{{ route('password.email') }}">
                @csrf

                <!-- Email Address -->
                <div class="mb-3">
                    <label for="email" class="form-label">Почта</label>
                    <input  type="email" name="email" class="form-control" id="email" required autofocus>

                </div>

                <div class="row">


                    <div class="col-12   text-sm-end">

                        <button type="submit" class="btn btn-primary  d-block d-sm-inline">Сбросить пароль</button>
                    </div>
                </div>

            </form>

        </div>
    </div>

@endsection
