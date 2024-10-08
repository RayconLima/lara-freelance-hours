<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ config('app.name') .' | '. $title ?? 'Page Title' }}</title>
    <link rel="icon" type="image/x-icon" href="/favicon.ico">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
</head>
<body class="bg-[#070715] flex flex-col min-h-full text-[#C3C3D1]">
<x-ui.navbar/>
<main class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 w-full py-[40px]">
    {{ $slot }}
</main>
</body>
</html>