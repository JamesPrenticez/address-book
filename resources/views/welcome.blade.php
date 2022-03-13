<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Address Book</title>
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="{{ asset('css/app.css')}}" ref="stylesheet">
    </head>
    <body>
        <div id="app"></div>
    </body>
    <script src="{{ mix('/js/app.js') }}"></script>
</html>
