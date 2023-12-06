<!-- resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Amsterdam buurthuis</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body>

<div class="layout-container bg-gray-100 min-h-screen flex flex-col">

    <header class="bg-gray-800 text-white p-4">
        <img src="/pad/naar/je/logo.png" alt="Logo" class="h-8">
        <nav class="mt-2">
            <ul class="flex">
                <li class="mr-4"><a href="/" class="text-white">Home</a></li>
                <li class="mr-4"><a href="/pagina1" class="text-white">Pagina 1</a></li>
                <li class="mr-4"><a href="/pagina2" class="text-white">Pagina 2</a></li>
            </ul>
        </nav>
    </header>

    <div class="content flex-1 p-4">
        @yield('content')
    </div>

    <footer class="bg-gray-800 text-white p-4">
        <p>&copy; {{ date("Y") }} Uw Bedrijfsnaam. Alle rechten voorbehouden.</p>
    </footer>

</div>

</body>
</html>
