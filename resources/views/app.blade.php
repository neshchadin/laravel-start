<!doctype html>
<html lang="">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>
    <meta name="Description" CONTENT="@yield('description')">
    <link href="/css/bootstrap/bootstrap.min.css" rel="stylesheet" >
    @livewireStyles
    @yield('jsonltd')


</head>
<body class="">


@section('navbar')

    @if (Route::has('login'))
        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
            @auth
                <a href="{{ url('/dashboard') }}" class="btn btn-light">Dashboard</a>
            @else
                <a href="{{ route('login') }}" class="btn btn-light">Log in</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="btn btn-light">Register</a>
                @endif
            @endauth
        </div>
    @endif

                @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)

                    <a rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}" type="button" class="btn btn-light @if($localeCode == LaravelLocalization::getCurrentLocale()) active @endif">
                        <span>{{ $properties['native'] }}</span>
                    </a>


                @endforeach






@show





@if ($errors->any())
    <div class="container-xxl">
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    </div>
@endif








    @yield('content')




@section('script')
    <script src="/js/bootstrap/bootstrap.bundle.min.js" ></script>
    @livewireScripts


@show
</body>
</html>
