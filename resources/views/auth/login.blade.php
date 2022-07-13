@extends('app')

@section('title')

@endsection



@section('content')
    <div class="row d-flex justify-content-center h-auto">
        <div class="col col-md-8 col-sm-6 border rounded m-3 mt-5  p-4 ">
            <!-- Session Status -->
            <x-auth-session-status class="mb-4" :status="session('status')" />

            <!-- Validation Errors -->
            <x-auth-validation-errors class="mb-4" :errors="$errors" />
            <h1 class="display-6">@lang('auth.auth_title')</h1>
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <!-- Email Address -->
                <div class="mb-3">
                    <label for="email" class="form-label">@lang('main.mail')</label>
                    <input  type="email" name="email" class="form-control" id="email" required autofocus aria-describedby="emailHelp">

                </div>

                <!-- Password -->

                <div class="mb-3">
                    <label for="password" class="form-label">Пароль</label>
                    <input type="password" class="form-control" id="password"  name="password" required autocomplete="current-password">
                </div>




                <!-- Remember Me -->

                <div class="row">
                    <div class=" col-12 col-sm-6  mb-3 mb-sm-0">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" name="remember" id="remember_me">
                            <label class="form-check-label" for="remember_me">@lang('main.rememberme')</label>
                        </div>
                    </div>

                    <div class="col-12 col-sm-6  text-sm-end">
                        @if (Route::has('password.request'))
                            <a class="btn btn-light d-inline-block d-sm-inline-block mb-3 mb-sm-0 me-2" href="{{ route('password.request') }}">
                                @lang('main.resetpass')
                            </a>
                        @endif


                        <button type="submit" class="btn btn-primary  d-block d-sm-inline">@lang('cart.voiti')</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
