<aside class="bg-white dark:bg-gray-900 w-64 min-h-screen flex flex-col transition-all duration-300 ease-in-out fixed lg:relative lg:translate-x-0" :class="{ '-translate-x-full': !sidebarOpen }">
    <div class="flex items-center justify-between p-4 border-b dark:border-gray-700">
        <h2 class="text-2xl font-semibold text-gray-800 dark:text-white">Admin Panel</h2>
        <button @click="sidebarOpen = false" class="text-gray-500 hover:text-gray-800 dark:text-gray-400 dark:hover:text-white lg:hidden">
            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
        </button>
    </div>

    <nav class="flex-1 overflow-y-auto">
        <ul class="p-4 space-y-4">
            <!-- Dashboard Link -->
            <li>
                <a href="#" class="flex items-center p-3 text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 rounded-lg transition-colors duration-200">
                    <i class="fas fa-tachometer-alt mr-4 text-lg"></i>
                    <span class="text-sm">Dashboard</span>
                </a>
            </li>
            <!-- Users Link -->
            <li>
                <a href="{{ route('templates') }}" class="flex items-center p-3 text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 rounded-lg transition-colors duration-200">
                    <i class="fas fa-users mr-4 text-lg"></i>
                    <span class="text-sm">Templates</span>
                </a>
            </li>
            <!-- Products Link -->
            <li>
                <a href="#" class="flex items-center p-3 text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 rounded-lg transition-colors duration-200">
                    <i class="fas fa-shopping-cart mr-4 text-lg"></i>
                    <span class="text-sm">Products</span>
                </a>
            </li>
            <!-- Analytics Link -->
            <li>
                <a href="#" class="flex items-center p-3 text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 rounded-lg transition-colors duration-200">
                    <i class="fas fa-chart-bar mr-4 text-lg"></i>
                    <span class="text-sm">services</span>
                </a>
            </li>
            <!-- Settings Link -->
            <li>
                <a href="#" class="flex items-center p-3 text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 rounded-lg transition-colors duration-200">
                    <i class="fas fa-cog mr-4 text-lg"></i>
                    <span class="text-sm">Settings</span>
                </a>
            </li>
        </ul>
    </nav>
</aside>
