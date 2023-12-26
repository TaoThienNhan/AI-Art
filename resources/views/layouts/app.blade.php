<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8" />

    <meta name="application-name" content="{{ config('app.name') }}" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>{{ config('app.name') }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        body {
            background-color: #2e303d;
        }
    </style>
</head>

<body>
@include('components.header')
    <div id="app" class="container-fluid">
        <main class="py-4">
            @yield('content')
        </main>
    </div>
@include('components.footer')
</body>
</html>