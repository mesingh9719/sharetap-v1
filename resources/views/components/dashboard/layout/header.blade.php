<header class="flex-shrink-0 bg-white dark:bg-gray-800 border-b dark:border-gray-700 shadow">
    <div class="flex items-center justify-between px-4 py-3">
        <div class="flex items-center space-x-4">
            <!-- Toggle button -->
            <button @click="sidebarOpen = !sidebarOpen"
                class="text-gray-500 hover:text-gray-800 dark:text-gray-400 dark:hover:text-white focus:outline-none">
                <i class="fas fa-bars text-xl"></i>
            </button>
            <h1 class="text-xl font-semibold text-gray-800 dark:text-white">Dashboard</h1>
        </div>

        <div class="flex items-center space-x-4">
            <!-- User Dropdown -->
            <div x-data="{ open: false }" class="relative">
                <button @click="open = !open"
                    class="flex items-center space-x-3 focus:outline-none group">
                    <img src="https://via.placeholder.com/40" alt="User Avatar"
                        class="w-8 h-8 rounded-full">
                    <span class="text-sm font-medium text-gray-700 dark:text-gray-300">
                        {{ auth()->user()->name }}
                    </span>
                    <i class="fas fa-chevron-down text-gray-500 dark:text-gray-400 text-sm"></i>
                </button>

                <div x-show="open"
                    @click.away="open = false"
                    x-transition:enter="transition ease-out duration-100"
                    x-transition:enter-start="transform opacity-0 scale-95"
                    x-transition:enter-end="transform opacity-100 scale-100"
                    x-transition:leave="transition ease-in duration-75"
                    x-transition:leave-start="transform opacity-100 scale-100"
                    x-transition:leave-end="transform opacity-0 scale-95"
                    class="absolute right-0 mt-2 w-48 bg-white dark:bg-gray-800 rounded-lg shadow-lg py-1 z-50">
                    <a href="#"
                        class="flex items-center px-4 py-2 text-sm text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700">
                        <i class="fas fa-user w-4 mr-3"></i>
                        Profile
                    </a>
                    <a href="#"
                        class="flex items-center px-4 py-2 text-sm text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700">
                        <i class="fas fa-cog w-4 mr-3"></i>
                        Settings
                    </a>
                    <a href="#"
                        class="flex items-center px-4 py-2 text-sm text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700">
                        <i class="fas fa-sign-out-alt w-4 mr-3"></i>
                        Logout
                    </a>
                </div>
            </div>

            <!-- Dark Mode Toggle -->
            <button @click="toggleDarkMode()"
            class="text-gray-500 hover:text-gray-800 dark:text-gray-400 dark:hover:text-white focus:outline-none w-8 h-8 flex items-center justify-center rounded-full hover:bg-gray-100 dark:hover:bg-gray-700 transition-colors">
            <i class="fas transition-transform duration-500"
               :class="darkMode ? 'fa-sun rotate-180' : 'fa-moon rotate-0'"></i>
        </button>
        </div>
    </div>
</header>
