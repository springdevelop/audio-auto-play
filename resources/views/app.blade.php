<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Audio</title>
        <!-- Fonts -->
        <!-- <link href="{{ asset('/css/app.css') }}" rel="stylesheet"> -->
        <link href="{{ asset('/css/admin.css') }}" rel="stylesheet">
    </head>
    <body >
        <div id="app">
            <router-view></router-view>
        </div>
        <script type="text/javascript" src="{{asset('js/app.js') }}"></script>
    </body>
</html>
