<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title ?? 'TN Wasur Papua' }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-[#f4f6f2] text-gray-800 antialiased">
    @include('partials.navbar')

    <main>
        {{ $slot ?? '' }}
        @yield('content')
    </main>

    @include('partials.footer')
</body>
</html>
