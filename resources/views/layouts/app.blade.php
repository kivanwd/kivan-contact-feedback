<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact & Feedback</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans">
    <header class="bg-blue-600 text-white p-4">
        <div class="container mx-auto">
            <h1 class="text-2xl font-bold">Contact & Feedback</h1>
            <nav class="mt-2">
                <a href="{{ route('feedback.create') }}" class="mr-4 hover:underline">Submit Feedback</a>
                <a href="{{ route('feedback.index') }}" class="hover:underline">All Feedbacks</a>
            </nav>
        </div>
    </header>

    <main class="container mx-auto mt-6 p-4 bg-white rounded shadow">
        @yield('content')
    </main>

    <footer class="bg-gray-200 text-gray-700 p-4 mt-6 text-center">
        &copy; {{ date('Y') }} Contact & Feedback System
    </footer>
</body>
</html>


