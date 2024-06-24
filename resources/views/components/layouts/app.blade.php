<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? 'MP teste' }}</title>

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body>
        @if (auth()->check())
            <x-layouts.navigation />
        @endif
        <main class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
            {{ $slot }}
        </main>
    </body>
</html>
