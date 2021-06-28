<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Boostrap 5</title>
    <link rel="stylesheet" href='/css/app.css'>
    <script src='/js/app.js'></script>
</head>

<body>

        {{ $slot }}

</body>

</html>