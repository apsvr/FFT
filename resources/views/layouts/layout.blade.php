<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/authentic.css') }}">
    <title>Flower Fairy Tale</title>
</head>
<body>
    <a href="/home" class="title">Flower Fairy Tale</a>
    <section class="form-input">
        @yield('name-page')
        @yield('form-page')
    </section>
</body>
</html>