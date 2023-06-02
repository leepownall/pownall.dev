<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name') }}</title>

    @vite(['resources/css/app.css'])
    <livewire:styles />

    <meta name="description" content="A PHP Developer from the West Midlands. I specialise in Laravel and focus on writing clean, maintainable, and testable code.">
    <meta name="google-site-verification" content="OwrZfqKUBnoxk2mTCy-vBsxdTzU026g3YFohQ3pFPYY">
</head>
<body class="antialiased">
    {{ $slot }}
    <livewire:scripts />
</body>
</html>
