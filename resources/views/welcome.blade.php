<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-stone-900">
    <div class="h-screen grid grid-cols-1 gap-4 content-center ">
        <h1 class="text-lg  text-stone-50 uppercase  hover:text-violet-600 text-center  dark:text-slate-400">
            Exchange-a-gram
        </h1>
        <div class="flex justify-center space-x-6 text-sm">
            <!--<a class="bg-slate-900 hover:bg-slate-700 focus:outline-none focus:ring-2 focus:ring-slate-400 focus:ring-offset-2 focus:ring-offset-slate-50 text-white font-semibold h-12 px-6 rounded-lg w-full flex items-center justify-center sm:w-auto dark:bg-sky-500 dark:highlight-white/20 dark:hover:bg-sky-400"
                href="/home">Homepage</a>-->
                <a href="{{ route('login') }}" class="text-blue-500 hover:text-blue-300 text-base">Login</a>
                <p class="text-blue-500 text-base">&#x7C;</p>
                <a href="{{ route('register') }}" class="text-blue-500 hover:text-blue-300 text-base">Sign Up</a>
        </div>
    </div>
</body>
</html>
