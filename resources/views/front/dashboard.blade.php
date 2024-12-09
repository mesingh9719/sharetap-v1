<x-dashboard.layout.master-layout>
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-2xl font-semibold text-gray-800 dark:text-white mb-6">Dashboard Overview</h1>

        <!-- Stats Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
            <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md p-6">
                <div class="flex items-center justify-between">
                    <h2 class="text-xl font-semibold text-gray-800 dark:text-white">Total Users</h2>
                    <i class="fas fa-users text-blue-500 text-3xl"></i>
                </div>
                <p class="text-3xl font-bold text-gray-800 dark:text-white mt-4">1,234</p>
                <p class="text-green-500 text-sm mt-2">
                    <i class="fas fa-arrow-up mr-1"></i>
                    <span>12% increase</span>
                </p>
            </div>
            <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md p-6">
                <div class="flex items-center justify-between">
                    <h2 class="text-xl font-semibold text-gray-800 dark:text-white">Total Revenue</h2>
                    <i class="fas fa-dollar-sign text-green-500 text-3xl"></i>
                </div>
                <p class="text-3xl font-bold text-gray-800 dark:text-white mt-4">$54,321</p>
                <p class="text-green-500 text-sm mt-2">
                    <i class="fas fa-arrow-up mr-1"></i>
                    <span>8% increase</span>
                </p>
            </div>
            <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md p-6">
                <div class="flex items-center justify-between">
                    <h2 class="text-xl font-semibold text-gray-800 dark:text-white">New Orders</h2>
                    <i class="fas fa-shopping-bag text-purple-500 text-3xl"></i>
                </div>
                <p class="text-3xl font-bold text-gray-800 dark:text-white mt-4">89</p>
                <p class="text-red-500 text-sm mt-2">
                    <i class="fas fa-arrow-down mr-1"></i>
                    <span>3% decrease</span>
                </p>
            </div>
            <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md p-6">
                <div class="flex items-center justify-between">
                    <h2 class="text-xl font-semibold text-gray-800 dark:text-white">Visitor Traffic</h2>
                    <i class="fas fa-chart-line text-yellow-500 text-3xl"></i>
                </div>
                <p class="text-3xl font-bold text-gray-800 dark:text-white mt-4">12,543</p>
                <p class="text-green-500 text-sm mt-2">
                    <i class="fas fa-arrow-up mr-1"></i>
                    <span>18% increase</span>
                </p>
            </div>
        </div>

        <!-- Charts -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-8">
            <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md p-6">
                <h2 class="text-xl font-semibold text-gray-800 dark:text-white mb-4">Revenue Overview</h2>
                <canvas id="revenueChart"></canvas>
            </div>
            <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md p-6">
                <h2 class="text-xl font-semibold text-gray-800 dark:text-white mb-4">User Growth</h2>
                <canvas id="userGrowthChart"></canvas>
            </div>
        </div>

        <!-- Recent Activity -->
        <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md p-6">
            <h2 class="text-xl font-semibold text-gray-800 dark:text-white mb-4">Recent Activity</h2>
            <div class="overflow-x-auto">
                <table class="w-full text-left">
                    <thead>
                        <tr class="bg-gray-100 dark:bg-gray-700">
                            <th class="px-4 py-2 text-gray-600 dark:text-gray-400">User</th>
                            <th class="px-4 py-2 text-gray-600 dark:text-gray-400">Action</th>
                            <th class="px-4 py-2 text-gray-600 dark:text-gray-400">Date</th>
                            <th class="px-4 py-2 text-gray-600 dark:text-gray-400">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="border-b dark:border-gray-700">
                            <td class="px-4 py-2 text-gray-800 dark:text-gray-300">John Doe</td>
                            <td class="px-4 py-2 text-gray-800 dark:text-gray-300">Created a new project</td>
                            <td class="px-4 py-2 text-gray-800 dark:text-gray-300">2023-05-15</td>
                            <td class="px-4 py-2"><span class="bg-green-200 text-green-800 py-1 px-2 rounded-full text-xs">Completed</span></td>
                        </tr>
                        <tr class="border-b dark:border-gray-700">
                            <td class="px-4 py-2 text-gray-800 dark:text-gray-300">Jane Smith</td>
                            <td class="px-4 py-2 text-gray-800 dark:text-gray-300">Updated user profile</td>
                            <td class="px-4 py-2 text-gray-800 dark:text-gray-300">2023-05-14</td>
                            <td class="px-4 py-2"><span class="bg-yellow-200 text-yellow-800 py-1 px-2 rounded-full text-xs">Pending</span></td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 text-gray-800 dark:text-gray-300">Mike Johnson</td>
                            <td class="px-4 py-2 text-gray-800 dark:text-gray-300">Deleted a task</td>
                            <td class="px-4 py-2 text-gray-800 dark:text-gray-300">2023-05-13</td>
                            <td class="px-4 py-2"><span class="bg-red-200 text-red-800 py-1 px-2 rounded-full text-xs">Cancelled</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-dashboard.layout.master-layout>
