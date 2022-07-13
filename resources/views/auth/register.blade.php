@extends('app')

@section('title')
    @lang('cart.registraziya')
@endsection
@section('navbar')
    @parent

@endsection

@section('content')
    <div class="container-fluid">
    <div class="row d-flex justify-content-center h-auto">
        <div class="col col-md-8 col-sm-6 border rounded m-3 mt-5  p-4 ">
            <!-- Validation Errors -->
            <x-auth-validation-errors class="mb-4" :errors="$errors" />

            <h1 class="display-6">@lang('cart.registraziya')</h1>
            <form method="POST" action="{{ route('register') }}">
                @csrf

                <!-- Name -->


                <div class="mb-3">
                    <label for="name" class="form-label">@lang('cart.your_name')</label>
                    <input  type="text" name="name" class="form-control" id="name" required autofocus>

                </div>


                <div class="mb-3">
                    <label for="last_name" class="form-label">@lang('cart.your_famile')</label>
                    <input  type="text" name="last_name" class="form-control" id="last_name" required autofocus>

                </div>





                <!-- Email Address -->

                <div class="mb-3">
                    <label for="email" class="form-label">@lang('cart.mail')</label>
                    <input  type="email" name="email" class="form-control" id="email" required>

                </div>

                <!-- Phone -->

                <div class="mb-3">
                    <label for="phone" class="form-label">@lang('cart.telefon')</label>
                    <input   name="phone" class="form-control" id="phone"  required>

                </div>


                <!-- Password -->


                <div class="mb-3">
                    <label for="password" class="form-label">@lang('cart.pasword')</label>
                    <input type="password" class="form-control" id="password"  name="password" required autocomplete="new-password">
                </div>

                <!-- Confirm Password -->


                <div class="mb-3">
                    <label for="password_confirmation" class="form-label">@lang('cart.podtverdite_pasword')</label>
                    <input type="password" class="form-control" id="password_confirmation"  name="password_confirmation" required autocomplete="password_confirmation">
                </div>




                <div class="row">


                    <div class="col-12   text-sm-end">

                        <a class="btn btn-light d-inline-block d-sm-inline-block mb-3 mb-sm-0 me-2" href="{{ route('login') }}">
                            @lang('cart.and_auth')
                        </a>



                        <button type="submit" class="btn btn-primary  d-block d-sm-inline">@lang('cart.zaregestrirovatsya')</button>
                    </div>
                </div>



            </form>
        </div>
    </div>


    </div>
@endsection


