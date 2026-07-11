<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Admin - TN Wasur Papua</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gradient-to-br from-green-900 to-green-800 min-h-screen flex items-center justify-center px-4">
    <div class="w-full max-w-sm">
        <div class="text-center mb-6 text-white">
            <span class="text-4xl">🌿</span>
            <h1 class="text-xl font-bold mt-2">Taman Nasional Wasur Papua Selatan</h1>
            <p class="text-green-100 text-sm">PANEL LOGIN ADMIN</p>
        </div>

        <div class="bg-white rounded-2xl shadow-lg p-6">
            @if ($errors->any())
                <div class="mb-4 bg-red-50 border border-red-200 text-red-600 text-sm px-4 py-3 rounded-lg">
                    {{ $errors->first() }}
                </div>
            @endif

            <form method="POST" action="{{ route('login') }}" class="space-y-4">
                @csrf

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                    <input type="email" name="email" value="{{ old('email') }}" required autofocus
                           class="w-full border border-gray-300 rounded-lg px-3 py-2 text-sm focus:ring-2 focus:ring-green-500 focus:border-green-500">
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Password</label>
                    <input type="password" name="password" required
                           class="w-full border border-gray-300 rounded-lg px-3 py-2 text-sm focus:ring-2 focus:ring-green-500 focus:border-green-500">
                </div>

                <div class="flex items-center gap-2">
                    <input type="checkbox" name="remember" id="remember" class="rounded border-gray-300 text-green-600">
                    <label for="remember" class="text-sm text-gray-600">Ingat saya</label>
                </div>

                <button type="submit" class="w-full bg-green-600 hover:bg-green-700 text-white font-medium text-sm py-2.5 rounded-lg transition">
                    Masuk
                </button>
            </form>
        </div>

        <p class="text-center text-green-100 text-xs mt-4">
            <a href="{{ route('beranda') }}" class="hover:underline">&larr; Kembali ke website</a>
        </p>
    </div>
</body>
</html>
