<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-commerce - @yield('title')</title>
@vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
<body class="bg-gray-100 text-gray-800">
    {{-- Navbar --}}
    <nav class="bg-blue-800 text-white p-4 shadow-md">
        <div class="container mx-auto flex justify-between items-center">
            <a href="/" class="text-2xl font-bold">E-commerce</a>
            <div class="space-x-6 text-base">
                <a href="{{ route('products.index') }}" class="hover:underline">Products</a>
                <a href="{{ route('categories.index') }}" class="hover:underline">Categories</a>
                <a href="{{ route('brands.index') }}" class="hover:underline">Brands</a>
            </div>
        </div>
    </nav>

    {{-- Content --}}
    <div class="container mx-auto py-6">
        @if (session('success'))
            <div class="bg-green-100 border border-green-300 text-green-800 px-4 py-3 rounded mb-4 shadow">
                {{ session('success') }}
            </div>
        @endif

        <div class="bg-white p-6 rounded-lg shadow-md">
            @yield('content')
        </div>
    </div>
</body>
</html>
