<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Hedwurk Starter</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="antialiased text-gray-900 dark:text-gray-50 bg-gray-100 dark:bg-gray-900">
        <div class="container mx-auto p-4">
            <h1 class="text-3xl font-bold mb-4">Welcome to Hedwurk Starter</h1>
            <p class="text-gray-700 dark:text-gray-300">Build something...</p>
        </div>
    </body>
</html>
