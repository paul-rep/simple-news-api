<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta content="News" name="keywords">
        <meta content="News" name="description">

        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <title>Laravel</title>

    </head>
    <body>
        <div id="app">
            <App></App>
        </div>
    </body>
    <script src="{{mix('js/app.js')}}"></script>
</html>
