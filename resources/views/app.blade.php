<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link href="{{ mix('css/app.css') }}" rel="stylesheet" type="text/css">
    </head>
    <body>
      <div id="app">
          <navigation></navigation>
          <router-view></router-view>
      </div><!-- #app -->
        <script src="{{ mix('js/app.js') }}"></script>
    </body>
</html>
