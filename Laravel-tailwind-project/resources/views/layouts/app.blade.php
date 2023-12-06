<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.x"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>
</head>

<body class="m-0" x-data="{ isOpen: false }">
    <header class="bg-primary-50 p-4">
        <div class="container mx-auto flex justify-between items-center">
            <div class="text-white text-xl font-bold">
                <img class="header-logo" src="{{ asset('images/logo-gemeente-amsterdam.png') }}" alt="drie kruisjes onderelkaar ">
            </div>

            <div class="lg:hidden">
                <button id="menu-toggle" class="text-white focus:outline-none">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                    </svg>
                </button>
            </div>

            <div class="hidden lg:flex space-x-4">
                <a href="#" class="text-white">Home</a>
                <a href="#" class="text-white">About</a>
                <a href="#" class="text-white">Services</a>
                <a href="#" class="text-white">Contact</a>
            </div>
        </div>
    </header>

    <div id="mobile-menu" class="lg:hidden fixed inset-0 bg-gray-800 bg-opacity-75 hidden flex-col">
        <div class="flex justify-end p-4">
            <button id="close-menu" class="text-white focus:outline-none">
                <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
        </div>
        <div class="flex flex-col items-center h-full">
            <div class="flex flex-col items-center text-white space-y-4">
                <a href="#" class="text-white">Home</a>
                <a href="#" class="text-white">About</a>
                <a href="#" class="text-white">Services</a>
                <a href="#" class="text-white">Contact</a>
            </div>
        </div>
    </div>


    <script>
        // Add JavaScript for menu toggle
        document.getElementById('menu-toggle').addEventListener('click', function() {
            document.getElementById('mobile-menu').classList.toggle('hidden');
        });

        document.getElementById('close-menu').addEventListener('click', function() {
            document.getElementById('mobile-menu').classList.add('hidden');
        });
    </script>


    <main>
        @yield('content')
    </main>

    <footer class="text-center py-4 mt-8 bg-gray-800 text-white">
        &copy; 2023 Jouw Bedrijfsnaam. Alle rechten voorbehouden.
    </footer>
</body>

</html>