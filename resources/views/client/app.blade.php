<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="CustomEyes.me">
        <meta name="robots" content="index,follow">
        <meta name="keywords" content="gjej, dok, doktor, shiqpri, spital, otorinolaringolog, krdiolog, aplikacion, mjekesi, customeyes, app, imazheri, hiperbarike, kirurgji, ortopedike, onkologj, gastrohepatologji, toksikologe, semundje, real, time, shpejt, ">
        <meta name="description" content="gjejDOK është aplikacioni që ju ndihmon të gjeni sa më thjesht dhe sa më shpejt një doktor. Thjesht zgjidhni rajonin dhe trajtimin për të cilin ju keni nevojë dhe menjëherë ju shfaqet një listë me mjekë të specializuar në atë fushë. Nëpërmjet gjejDOK ju do të njiheni më mirë me mjekun, duke marr informacion rreth edukimit, specializimit, eksperiencës si dhe të kontaktoni direkt me të. Me këtë aplikacion kontakti i pacientit me mjekun është më i thjesht."/>
        <meta property="og:locale" content="en_GB" />
        <meta property="og:type" content="website" />
        <meta property="og:title" content="GjejDok" />
        <meta property="og:description" content="gjejDOK është aplikacioni që ju ndihmon të gjeni sa më thjesht dhe sa më shpejt një doktor. Thjesht zgjidhni rajonin dhe trajtimin për të cilin ju keni nevojë dhe menjëherë ju shfaqet një listë me mjekë të specializuar në atë fushë. Nëpërmjet gjejDOK ju do të njiheni më mirë me mjekun, duke marr informacion rreth edukimit, specializimit, eksperiencës si dhe të kontaktoni direkt me të. Me këtë aplikacion kontakti i pacientit me mjekun është më i thjesht." />
        <meta property="og:url" content="http://www.gjejdok.com/" />
        <meta property="og:site_name" content="GjejDok" />
        <meta property="og:image" content="http://www.gjejdok.com/images/fb.jpg" />

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.description', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link href="{{ asset('client/css/app.css') }}" rel="stylesheet">
        @stack('styles')

        <link rel="icon" type="image/png" href="{{asset('client/images/favicon')}}" sizes="32x32" />
    </head>
    <body class="index">
        <header class='navigation' role='banner'>
            <div class='navigation-wrapper'>
                <a class='logo' href='{{ url('/') }}'>
                    <img alt='Gjej Dok' src='{{asset('client/images/logo.png')}}'>
                </a>
                <nav role='navigation'>
                    <ul class='navigation-menu show' id='js-navigation-menu'>
                        @guest
                            <li class='nav-link'>
                                <a class='navigation-link' href='#features' id='feature-link'>Veçori</a>
                            </li>
                            <li class='nav-link'>
                                <a class='navigation-link' href='#download'>Shkarko</a>
                            </li>
                            <li class="nav-link login-li">
                                <a class="login" href="{{ route('login') }}">Logohu</a>
                            </li>
                            @if(Route::currentRouteName() != 'register')
                                <li class="nav-link signup-li">
                                    <a class="signup" href="{{ route('register') }}">Regjistrohu</a>
                                </li>
                            @endif
                        @else
                            <li class='nav-link'>
                                <a class='navigation-link'>Hey {{ Auth::user()->name }} !</a>
                            </li>
                            <li class="nav-link signup-li">
                                <a class="signup"  href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Dil</a>
                            </li>
                        @endguest
                    </ul>
                </nav>
            </div>
        </header>
        @yield('content')
        @if (Auth::check())
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        @endif
        <footer class='footer' role='contentinfo'>
            <div class='footer-table-cell'>
                @if(Route::currentRouteName() != 'register')
                <p class='footer-copyright footer-header'>  <a class='login' href='{{ route('register') }}'>Regjistrohu Tani</a></p>
                @endif
                <div class="margintop"></div>
                <p class='footer-copyright footer-header'>&copy; <script>document.write(new Date().getFullYear())</script> GjejDok | Developed by: <a href="http://customeyes.me/" target="_blank"><img src="http://www.gjejdok.com/images/customeyes.png"/></a></p>
            </div>
        </footer>

        <!-- Scripts -->
        <script src="{{ asset('client/js/app.js') }}" defer></script>
        @stack('scripts')
    </body>
</html>
