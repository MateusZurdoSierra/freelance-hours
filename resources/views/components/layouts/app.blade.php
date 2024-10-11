<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'FreelanceHours' }}</title>
    @vite('resources/css/app.css')
    @livewireStyles
</head>
<body class="bg-[#070715] flex flex-col min-h-screen text-[#C3C3D1]">
    <x-ui.navbar />
    <main class="flex-grow">
        {{ $slot }}
    </main>
</body>
</html>
