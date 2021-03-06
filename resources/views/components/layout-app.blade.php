<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ mix('css/app.css', 'build') }}">
</head>
<body class="antialiased min-h-screen flex flex-col">
<x-header></x-header>
<main class="flex-grow bg-nfsu-map bg-no-repeat bg-cover bg-fixed">
    <div class="m-8 px-6 py-4 border-4 border-dashed border-gray-200 rounded-lg text-white">
        {{ $slot }}
    </div>
</main>
<x-footer></x-footer>
<script src="{{ mix('js/app.js', 'build') }}"></script>
</body>
