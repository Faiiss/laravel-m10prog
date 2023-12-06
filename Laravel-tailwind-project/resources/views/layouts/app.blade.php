<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>

<body class="m-0">
        <header class="bg-red-500 text-white py-4">
            <div class="container mx-auto lg:max-w-4xl xl:max-w-6xl flex justify-between items-center">
                <div>
                    <a href="#" class="text-xl font-bold">Mijn Logo</a>
                </div>
                <nav class="hidden lg:flex space-x-4"> <!-- Hide on small screens, show on larger screens -->
                    <a href="#" class="hover:text-gray-300">Home</a>
                    <a href="#" class="hover:text-gray-300">Over Ons</a>
                    <a href="#" class="hover:text-gray-300">Contact</a>
                </nav>
                <!-- Mobile menu button for small screens -->
                <button class="lg:hidden focus:outline-none">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                    </svg>
                </button>
            </div>
        </header>


        <main class="m-0">
            @yield('content')
        </main>

        <footer class="text-center py-4 mt-8 bg-gray-800 text-white">
            &copy; 2023 Jouw Bedrijfsnaam. Alle rechten voorbehouden.
        </footer>
</body>

</html>