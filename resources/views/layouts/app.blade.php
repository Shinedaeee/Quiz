<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
<<<<<<< HEAD
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz App</title>

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        body {
            background: #f4f4f7;
        }
    </style>
</head>
<body class="text-gray-800">

    <!-- NAVBAR -->
    <header class="bg-white shadow">
        <div class="max-w-4xl mx-auto px-4 py-4 flex items-center justify-between">
            <a href="{{ route('home') }}" class="text-xl font-semibold hover:text-blue-600">
                🧠 Quiz App
            </a>
        </div>
    </header>

    <!-- MAIN CONTENT -->
    <main class="max-w-4xl mx-auto px-4 py-8">
        @yield('content')
    </main>

    <!-- FOOTER -->
    <footer class="text-center text-sm text-gray-500 py-6">
        © {{ date('Y') }} Quiz App
    </footer>

=======
    <title>Quiz App</title>
</head>
<body style="font-family: Arial; margin: 0; padding: 30px;">
    @yield('content')
>>>>>>> 5c19296a6e7f22dae81376a2f83748d87c378b08
</body>
</html>
