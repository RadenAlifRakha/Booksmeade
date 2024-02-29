<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('Booksmeade') }}Booksmeade</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('img/logo-buku.png') }}">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <div class="flex flex-col items-center justify-center px-6 mx-auto md:h-screen pt:mt-0 white:bg-gray-900">
        <a href="{{ route('beranda') }}"
            class="flex items-center justify-center mb-8 text-2xl font-semibold lg:mb-10 dark:text-white">
            <img src="{{ asset('img/logo-buku.png') }}" class="mr-4" alt="FlowBite Logo" height="100px"
                width="125px">
            <span class="text-gray-700 text-4xl">Booksmeade</span>
        </a>
        <!-- Card -->
        <div class="w-full max-w-xl p-6 space-y-8 sm:p-8 bg-white rounded-lg shadow dark:bg-gray-900">
            <form class="mt-8 space-y-6" action="{{ route('login') }}" method="POST">
                @csrf
                <span class="text-4xl font-bold text-gray-900 dark:text-white">
                    Login
                </span>
                <div class="relative mb-6">
                    <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-4 h-4 text-secondary">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" />
                        </svg>
                    </div>
                    <input type="email" name="email"
                        class="bg-gray-50 border border-gray-300 text-sm rounded-lg block w-full ps-10 p-2.5"
                        placeholder="Email" required>
                </div>
                <div class="relative mb-6">
                    <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-4 h-4 text-secondary">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M15.75 5.25a3 3 0 0 1 3 3m3 0a6 6 0 0 1-7.029 5.912c-.563-.097-1.159.026-1.563.43L10.5 17.25H8.25v2.25H6v2.25H2.25v-2.818c0-.597.237-1.17.659-1.591l6.499-6.499c.404-.404.527-1 .43-1.563A6 6 0 1 1 21.75 8.25Z" />
                        </svg>
                    </div>
                    <input type="password" name="password"
                        class="bg-gray-50 border border-gray-300 text-sm rounded-lg block w-full ps-10 p-2.5"
                        placeholder="Password" required>
                </div>
                <button type="submit"
                    class="text-white bg-blue-900 hover:bg-blue-700 focus:ring-2 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mb-5">Login</button>
                <a href="{{ route('register') }}" class="text-white self-end hover:text-blue-500">Belum punya
                    akun?</a>
            </form>
        </div>
