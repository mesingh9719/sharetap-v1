<x-front.layouts.app-layout>
    <div class="min-h-screen bg-gray-50 flex items-center justify-center">
        <div id="construction-container" class="text-center transition-all duration-500 ease-in-out">
            <!-- Loading Stage -->
            <div id="loading-stage" class="opacity-100 transition-opacity duration-300">
                <div class="animate-pulse mb-8">
                    <svg class="mx-auto h-24 w-24 text-purple-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 4a2 2 0 114 0v1a1 1 0 001 1h3a1 1 0 011 1v3a1 1 0 01-1 1h-1a2 2 0 100 4h1a1 1 0 011 1v3a1 1 0 01-1 1h-3a1 1 0 01-1-1v-1a2 2 0 10-4 0v1a1 1 0 01-1 1H7a1 1 0 01-1-1v-3a1 1 0 00-1-1H4a1 1 0 01-1-1v-3a1 1 0 011-1h1a2 2 0 100-4H4a1 1 0 01-1-1V7a1 1 0 011-1h3a1 1 0 001-1V4z" />
                    </svg>
                </div>
                <h1 class="text-3xl font-bold text-gray-900 mb-4">Building Your Website</h1>
                <p class="text-xl text-gray-600">Preparing your custom template...</p>
            </div>

            <!-- Preview Stage (Initially Hidden) -->
            <div id="preview-stage" class="hidden opacity-0 transition-opacity duration-500">
                <div class="bg-white rounded-lg shadow-xl p-8 max-w-md mx-auto">
                    <div class="text-center">
                        <svg class="mx-auto h-24 w-24 text-green-500 mb-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <h2 class="text-2xl font-bold text-gray-900 mb-4">Template Ready!</h2>
                        <p class="text-gray-600 mb-6">Your website template is now prepared and customized.</p>
                        <a href="{{ route('dashboard') }}" class="px-6 py-3 bg-purple-600 text-white rounded-md hover:bg-purple-700 transition">
                            Go to Dashboard
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script>
        document.addEventListener('DOMContentLoaded', function() {
            setTimeout(() => {
                const loadingStage = document.getElementById('loading-stage');
                const previewStage = document.getElementById('preview-stage');

                loadingStage.classList.add('opacity-0');
                setTimeout(() => {
                    loadingStage.classList.add('hidden');
                    previewStage.classList.remove('hidden');
                    setTimeout(() => {
                        previewStage.classList.remove('opacity-0');
                    }, 50);
                }, 500);
            }, 3000);
        });
    </script>

</x-front.layouts.app-layout>
