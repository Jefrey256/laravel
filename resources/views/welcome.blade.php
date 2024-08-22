<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <link href="{{ mix('../resources/css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-cor4 flex flex-col min-h-screen">
    @include('layouts.navbar')

    <div class="container mx-auto mt-10 flex-grow">
        <h1 class="text-cor5 text-4xl font-bold text-center">Bem-vindo a Nelma variedades</h1>
        <p class="text-center mt-4">Este é um exemplo de menu hambúrguer utilizando Tailwind CSS.</p>
        <br>

        <div>
        @include('articles.images')
        </div>
    </div>

    

    <footer class="bg-cor2 p-4">
        <h1 class="text-cor3 p-4 text-center font-bold">Criador Jeredy</h1>
    </footer>

    <script src="{{ mix('../resources/js/menu.js') }}"></script>
</body>
</html>
