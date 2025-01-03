<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{ asset('build/assets/app-dclBg7_d.css') }}">
    {{-- @vite('resources/css/app.css') --}}
</head>
<body>
    <!-- Navbar -->
    <div class="bg-gray-100 p-6 shadow-md fixed top-0 left-0 w-full z-50">
        <div class="mx-auto flex justify-between items-center max-w-4xl">
            <!-- Tombol Kembali -->
            <a href="javascript:history.go(-1)" 
               class="flex items-center text-md md:text-lg font-bold hover:text-zinc-400 space-x-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                </svg>
            </a>

            <!-- Logo -->
            <a href="{{ route('login') }}" class="text-md md:text-lg font-bold hover:text-zinc-400">
                Tumuwoto Log
            </a>

            <!-- Search Form -->
            <form class="relative md:w-2/3 w-1/2" action="{{ route('search') }}" method="GET">
                <input 
                    type="search" 
                    name="q" 
                    placeholder="Cari Kata" 
                    class="w-full pl-4 pr-10 py-2 border border-gray-400 rounded-full focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-purple-500"
                    required
                >
                <button 
                    type="submit" 
                    class="absolute right-3 top-1/2 transform -translate-y-1/2 text-gray-500 focus:outline-none">
                    <svg 
                    class="w-6 h-6" 
                    aria-hidden="true" 
                    xmlns="http://www.w3.org/2000/svg" 
                    fill="none" 
                    viewBox="0 0 24 24"
                    >
                    <path 
                        stroke="currentColor" 
                        strokeLinecap="round" 
                        strokeLinejoin="round" 
                        strokeWidth="2" 
                        d="m21 21-5-5m0-7A7 7 0 1 1 3 10a7 7 0 0 1 13 0Z"
                    />
                    </svg>
                </button>
            </form>
        </div>
    </div>

    <!-- Main Content -->
    <div class="mt-24">
        @yield('content')
    </div>
</body>

</html>