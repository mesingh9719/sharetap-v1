<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Dashboard</title>

    <script>
        if (localStorage.getItem('darkMode') === 'true' ||
            (!('darkMode' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
        }
    </script>


    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

<body x-data="{
    sidebarOpen: window.innerWidth >= 1024,
    darkMode: localStorage.getItem('darkMode') === 'true' ||
             (!localStorage.getItem('darkMode') && window.matchMedia('(prefers-color-scheme: dark)').matches),
    toggleDarkMode() {
        this.darkMode = !this.darkMode;
        localStorage.setItem('darkMode', this.darkMode);
        if (this.darkMode) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark');
        }
    },
    init() {
        // Initialize dark mode
        if (this.darkMode) {
            document.documentElement.classList.add('dark');
        }

        // Listen for system theme changes
        window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', e => {
            if (!localStorage.getItem('darkMode')) {
                this.darkMode = e.matches;
                document.documentElement.classList.toggle('dark', e.matches);
            }
        });

        // Sidebar handling
        window.addEventListener('resize', () => {
            if (window.innerWidth >= 1024) {
                this.sidebarOpen = true;
            }
        });

        this.$watch('sidebarOpen', value => {
            if (window.innerWidth < 1024) {
                document.body.style.overflow = value ? 'hidden' : 'auto';
            }
        });
    }
}" class="bg-gray-100 font-sans antialiased h-screen overflow-hidden" :class="{ 'dark': darkMode }">
<x-toast />
<div class="flex h-screen overflow-hidden">
    <!-- Add this right after the body tag opens -->
    <div x-show="sidebarOpen" x-transition:enter="transition-opacity ease-linear duration-300"
        x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
        x-transition:leave="transition-opacity ease-linear duration-300" x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0" @click="sidebarOpen = false"
        class="fixed inset-0 bg-gray-900/50 lg:hidden z-40">
    </div>


        <!-- Sidebar -->
        <x-dashboard.layout.aside-bar/>

        <!-- Main Content -->
        <div class="flex-1 flex flex-col min-w-0 overflow-hidden">
            <!-- Header -->
            <x-dashboard.layout.header/>

            <!-- Main Content Area -->
            <main class="flex-1 overflow-y-auto bg-gray-100 dark:bg-gray-900 p-6">
                {{ $slot }}
            </main>
        </div>
    </div>

    <script>
        // Initialize any additional JavaScript functionality here
        const initCharts = () => {
            // Your chart initialization code...
        };

        // Call initialization functions when the DOM is ready
        document.addEventListener('DOMContentLoaded', () => {
            initCharts();
        });
    </script>
</body>

</html>
