<header class="bg-white dark:bg-gray-900 shadow-md sticky top-0 z-50">
    <div class=" mx-auto px-6 py-4 flex items-center justify-between">
        <div class="flex items-center space-x-4">
            <button @click="sidebarOpen = !sidebarOpen" class="text-gray-500 hover:text-gray-800 dark:text-gray-400 dark:hover:text-white focus:outline-none">
                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>
            <h1 class="text-xl font-semibold text-gray-800 dark:text-white">Dashboard</h1>
        </div>

        <div class="flex items-center space-x-6">
            <!-- User Profile Dropdown -->
            <div class="relative" x-data="{ open: false }">
                <button @click="open = !open" class="flex items-center space-x-2 focus:outline-none">
                    <img src="https://via.placeholder.com/40" alt="User Avatar" class="w-10 h-10 rounded-full">
                    <span class="text-gray-800 dark:text-white text-sm">John Doe</span>
                </button>
                <div x-show="open" @click.away="open = false" class="absolute right-0 mt-2 w-48 bg-white dark:bg-gray-800 rounded-md shadow-lg py-2">
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 rounded-md transition-colors">Profile</a>
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 rounded-md transition-colors">Settings</a>
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 rounded-md transition-colors">Logout</a>
                </div>
            </div>

            <!-- Dark Mode Toggle -->
            <button @click="darkMode = !darkMode" class="text-gray-500 hover:text-gray-800 dark:text-gray-400 dark:hover:text-white focus:outline-none">
                <i class="fas" :class="{ 'fa-sun': !darkMode, 'fa-moon': darkMode }"></i>
            </button>
        </div>
    </div>
</header>
