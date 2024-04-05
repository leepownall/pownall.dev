<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name') }}</title>

    @vite(['resources/css/app.css'])

    <meta name="google-site-verification" content="OwrZfqKUBnoxk2mTCy-vBsxdTzU026g3YFohQ3pFPYY">

    {{ $meta }}
</head>
<body class="antialiased text-zinc-800 leading-relaxed hyphens-auto">
    <header class="mt-6 sm:mt-8 px-4 sm:px-8 mx-auto max-w-3xl">
        <h1><a href="/" class="font-semibold">Lee Pownall</a></h1>
    </header>
    <div class="mt-6 sm:mt-8 px-4 pb-4 sm:px-8 mx-auto max-w-3xl">
        {{ $slot }}
    </div>
</body>
</html>
