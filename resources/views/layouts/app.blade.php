<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased">

    <!-- Loading Screen -->
    <div id="loading-screen" class="fixed inset-0 backdrop-blur-3xl flex flex-col items-center justify-center z-50">
        <div class="w-16 h-16 border-4 border-primary border-t-transparent rounded-full animate-spin"></div>
        {{-- <p class="mt-4 text-blue-600 font-semibold text-lg">Loading...</p> --}}
    </div>

    <x-nav-bar />
    <main id="content">
        {{ $slot }}
    </main>
    <x-footer />
</body>
<style>
    .fade-out {
        opacity: 0;
        transition: opacity 0.2s ease-out;
    }
</style>
<script>
    window.onload = function() {
        const loader = document.getElementById("loading-screen");
        const content = document.getElementById("content");

        // Add fade-out class
        loader.classList.add("fade-out");

        // Wait for fade-out to complete, then hide loader and show content
        setTimeout(() => {
            loader.style.display = "none";
            content.classList.remove("hidden");
            document.dispatchEvent(new Event("onloaded"))
        }, 100); // Matches the CSS transition duration
    };
</script>

</html>
