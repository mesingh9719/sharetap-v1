<x-front.layouts.app-layout>
    <div class="min-h-screen bg-gray-50 py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-7xl mx-auto">
            <!-- Header -->
            <div class="text-center mb-12">
                <h1 class="text-4xl font-bold text-gray-900 mb-4">Choose Your Perfect Template</h1>
                <p class="text-xl text-gray-600">Start with a professional template and customize it to match your brand</p>
            </div>

            <!-- Filter Bar -->
            <div class="bg-white rounded-lg shadow-sm mb-8 p-4">
                <div class="flex flex-wrap gap-4 items-center">
                    <div class="flex-1">
                        <select class="w-full md:w-48 border border-gray-300 rounded-md shadow-sm py-2 px-3">
                            <option value="">All Categories</option>
                            <option value="business">Business</option>
                            <option value="portfolio">Portfolio</option>
                            <option value="ecommerce">E-commerce</option>
                            <option value="blog">Blog</option>
                        </select>
                    </div>
                    <div class="flex gap-2">
                        <button class="px-4 py-2 bg-white border border-gray-300 rounded-md hover:bg-gray-50">Latest</button>
                        <button class="px-4 py-2 bg-white border border-gray-300 rounded-md hover:bg-gray-50">Popular</button>
                    </div>
                </div>
            </div>

            <!-- Templates Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Template Card -->
                <div class="bg-white rounded-lg overflow-hidden shadow-sm hover:shadow-md transition">
                    <img src="/api/placeholder/400/300" alt="Business Template" class="w-full h-48 object-cover" />
                    <div class="p-6">
                        <div class="flex items-center justify-between mb-4">
                            <h3 class="text-lg font-semibold">Business Pro</h3>
                            <span class="bg-purple-100 text-purple-800 text-xs px-2 py-1 rounded">Popular</span>
                        </div>
                        <p class="text-gray-600 text-sm mb-4">Professional template for business websites with customizable sections</p>
                        <div class="flex items-center justify-between">
                            <button class="text-purple-600 hover:text-purple-700 font-medium">Preview</button>
                            <button class="px-4 py-2 bg-purple-600 text-white rounded hover:bg-purple-700">Use Template</button>
                        </div>
                    </div>
                </div>

                <!-- Add more template cards... -->
            </div>

            <!-- Load More -->
            <div class="text-center mt-12">
                <button class="px-6 py-3 bg-white border border-gray-300 rounded-md hover:bg-gray-50 text-gray-600">
                    Load More Templates
                </button>
            </div>
        </div>
    </div>

    <x-slot:js>
        <script>
            // Add template preview functionality
            document.querySelectorAll('.template-option, .bg-white.rounded-lg').forEach(template => {
                const previewBtn = template.querySelector('button:first-of-type');
                if (previewBtn) {
                    previewBtn.addEventListener('click', () => {
                        // Show preview modal
                        // Implement preview functionality
                    });
                }
            });
        </script>
    </x-slot:js>
</x-front.layouts.app-layout>
