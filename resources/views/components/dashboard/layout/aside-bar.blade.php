<aside x-show="sidebarOpen"
x-transition:enter="transform transition-transform duration-300"
x-transition:enter-start="-translate-x-full"
x-transition:enter-end="translate-x-0"
x-transition:leave="transform transition-transform duration-300"
x-transition:leave-start="translate-x-0"
x-transition:leave-end="-translate-x-full"
class="fixed inset-y-0 left-0 z-50 w-64 bg-white dark:bg-gray-800 shadow-lg lg:relative lg:translate-x-0 flex flex-col">

<!-- Sidebar Header - Fixed at top -->
<div class="flex-shrink-0 flex items-center justify-between p-4 border-b dark:border-gray-700">
<h2 class="text-xl font-bold text-gray-800 dark:text-white">Admin Panel</h2>
<button @click="sidebarOpen = false" class="lg:hidden text-gray-500 hover:text-gray-800 dark:text-gray-400 dark:hover:text-white">
<i class="fas fa-times text-xl"></i>
</button>
</div>

<!-- Navigation - Scrollable Area -->
<nav class="flex-1 overflow-y-auto">
<div class="space-y-2 p-4">
<!-- Dashboard Link -->
<a href="#" class="flex items-center px-4 py-3 text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 rounded-lg transition-colors group">
    <i class="fas fa-tachometer-alt w-6 h-6 mr-3"></i>
    <span class="text-sm font-medium">Dashboard</span>
</a>

<!-- Templates Link -->
<a href="{{ route('templates.index') }}" class="flex items-center px-4 py-3 text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 rounded-lg transition-colors group">
    <i class="fas fa-users w-6 h-6 mr-3"></i>
    <span class="text-sm font-medium">Templates</span>
</a>

<!-- Products Link -->
<a href="#" class="flex items-center px-4 py-3 text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 rounded-lg transition-colors group">
    <i class="fas fa-shopping-cart w-6 h-6 mr-3"></i>
    <span class="text-sm font-medium">Products</span>
</a>

<!-- Services Link -->
<a href="#" class="flex items-center px-4 py-3 text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 rounded-lg transition-colors group">
    <i class="fas fa-chart-bar w-6 h-6 mr-3"></i>
    <span class="text-sm font-medium">Services</span>
</a>

<!-- Settings Link -->
<a href="{{ route('website.basic-info.index') }}" class="flex items-center px-4 py-3 text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 rounded-lg transition-colors group">
    <i class="fas fa-cog w-6 h-6 mr-3"></i>
    <span class="text-sm font-medium">Settings</span>
</a>

<!-- Add more menu items to test scrolling -->
<a href="#" class="flex items-center px-4 py-3 text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 rounded-lg transition-colors group">
    <i class="fas fa-users w-6 h-6 mr-3"></i>
    <span class="text-sm font-medium">Users</span>
</a>

<a href="#" class="flex items-center px-4 py-3 text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 rounded-lg transition-colors group">
    <i class="fas fa-bell w-6 h-6 mr-3"></i>
    <span class="text-sm font-medium">Notifications</span>
</a>

<a href="#" class="flex items-center px-4 py-3 text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 rounded-lg transition-colors group">
    <i class="fas fa-file w-6 h-6 mr-3"></i>
    <span class="text-sm font-medium">Reports</span>
</a>
</div>
</nav>

<!-- Optional: Fixed Bottom Section -->
<div class="flex-shrink-0 p-4 border-t dark:border-gray-700">
<div class="flex items-center space-x-3">
<img src="https://via.placeholder.com/40" alt="User" class="w-8 h-8 rounded-full">
<div class="flex-1">
    <h4 class="text-sm font-medium text-gray-800 dark:text-white">
        {{ auth()->user()->name }}
    </h4>
    <p class="text-xs text-gray-500 dark:text-gray-400">Administrator</p>
</div>
</div>
</div>
</aside>
