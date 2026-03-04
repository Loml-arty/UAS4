<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>layout</title>
</head>
<body>
    <x-header></x-header>
    <x-sidebar></x-sidebar>
    <main>{{ $slot }}</main>
    <x-footer></x-footer>
</body>
</html>