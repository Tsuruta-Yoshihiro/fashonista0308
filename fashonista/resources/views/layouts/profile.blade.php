<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!--CSRF Token-->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        
        {{--各ページごとにtitleタグをいれる@yield--}}
        <title>@yield('title')</title>
        
        <!--Scripts-->
        <script src="{{ secure_asset('js/app.js') }}" defer></script>
        
        <!--Fonts-->
        <link rel="dns-prefetch" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
        
        <!--Style-->
        <link href="{{ secure_asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ secure_asset('css/profile.css') }}" rel="stylesheet">
    </head>
    <body>
        <div id="app">
            {{-- 画面上部に表示するナビゲーションバー。--}}
            <nav class="navbar navbar-extend-md navbar-dark navbar-Fashonista">
                <div class="container">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Fashonista') }}
                    </a>
                    <button class="navbar-toggler" type="button" data-toggler="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                        
                        </ul>
                        
                        <ul class="navbar-nav ml-auto">
                            
                        </ul>
                    </div>
                </div>
            </nav>
            {{--ナビゲーションバ--}}
            
            <main class="py-4">
                {{--コンテンツをここに入れるため@yieldで空けておく。--}}
                @yield('content')
            </main>
        </div>
    </body>
</html>