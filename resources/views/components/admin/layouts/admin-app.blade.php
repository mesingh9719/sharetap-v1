<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }} Admin</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap">

    <!-- Styles -->
    @vite('resources/css/app.css')

    {{ $css ?? '' }}

    <!-- AlpineJS -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
</head>
<body class="font-sans antialiased bg-gray-50">
    <div x-data="{ sidebarOpen: false }" class="flex h-screen bg-gray-100">
        <!-- Sidebar -->
        <div :class="sidebarOpen ? 'block' : 'hidden'" @click="sidebarOpen = false" class="fixed inset-0 z-20 transition-opacity bg-black opacity-50 lg:hidden"></div>
        <x-admin.layouts.sidebar />
        <div class="flex flex-col flex-1 overflow-hidden">
            <!-- Top Navigation -->
            <x-admin.layouts.navbar />

            <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-100">
                <div class="container px-6 py-8 mx-auto">
                    <h3 class="text-3xl font-medium text-gray-700">Dashboard</h3>

                    <div class="mt-8">
                        {{ $slot }}
                    </div>
                </div>
            </main>
        </div>
    </div>
</body>
</html>
