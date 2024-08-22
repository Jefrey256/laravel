<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>{{config('app.name',"laravel")}}</title>
  <link href="{{ mix('css/app.css') }}" rel="stylesheet">
  </head>
  <body class="bg-gray-100 font-sans leading-normal tracking-normal">
    <div id="app">
      @yield('content')
    </div>
    <script src="{{ mix('js/app.js') }}"></script>
  </body>
</html>