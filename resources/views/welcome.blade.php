<!-- resources/views/welcome.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-50">

    <div class="flex flex-col justify-center items-center min-h-screen py-6 sm:px-6 lg:px-8">
        <!-- Logo or Welcome Text -->
        <div class="text-center mb-6">
            <h1 class="text-4xl font-semibold text-gray-800">Welcome</h1>
            <p class="mt-2 text-lg text-gray-600">Masuk untuk mengakses aplikasi.</p>
        </div>

        <!-- Navigation for Login/Register -->
        <header class="w-full lg:max-w-4xl max-w-[335px] text-sm mb-6">
            @if (Route::has('login'))
                <nav class="flex items-center justify-center gap-4">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="inline-block px-6 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">
                            Dashboard
                        </a>
                    @else
                        <a href="{{ route('login') }}" class="inline-block px-6 py-2 bg-blue-300 text-white rounded-lg hover:bg-indigo-700">
                            Log in
                        </a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="inline-block px-6 py-2 bg-green-400 text-white rounded-lg hover:bg-green-700">
                                Register
                            </a>
                        @endif
                    @endauth
                </nav>
            @endif
        </header>
</body>
</html>
