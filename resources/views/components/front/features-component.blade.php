<section class="py-24 bg-gradient-to-br from-purple-700 to-indigo-800 relative overflow-hidden text-white">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto mb-16 text-center">
            <h2 class="text-5xl font-bold mb-4 animate-fade-in-up">Features</h2>
            <div class="w-24 h-1 bg-yellow-400 mx-auto mb-6"></div>
            <p class="text-xl text-gray-200 animate-fade-in-up animation-delay-300">Discover what makes our digital business cards stand out</p>
        </div>
        
        <div class="relative overflow-hidden">
            <div class="flex transition-transform duration-300 ease-in-out" id="featureSlider">
                @foreach ($features as $feature)
                    <div class="w-full md:w-1/2 lg:w-1/3 flex-shrink-0 px-6">
                        <div class="mb-8 transform hover:scale-105 transition-transform duration-300">
                            <div class="text-yellow-400 mb-6 mx-auto">
                                <svg class="w-16 h-16 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <!-- Replace with appropriate icon path for each feature -->
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z"></path>
                                </svg>
                            </div>
                            <h3 class="text-2xl font-semibold mb-3 text-center">{{ $feature->name }}</h3>
                            <p class="text-gray-300 text-center leading-relaxed">{{ $feature->description }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
            <button class="absolute top-1/2 left-2 transform -translate-y-1/2 bg-yellow-400 text-purple-800 rounded-full p-3 focus:outline-none hover:bg-white transition duration-300" onclick="slideFeatures(-1)">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
            </button>
            <button class="absolute top-1/2 right-2 transform -translate-y-1/2 bg-yellow-400 text-purple-800 rounded-full p-3 focus:outline-none hover:bg-white transition duration-300" onclick="slideFeatures(1)">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
            </button>
        </div>
    </div>

    <!-- Decorative Elements -->
    <div class="absolute top-0 left-0 w-full h-full overflow-hidden pointer-events-none">
        <div class="absolute top-1/4 left-0 w-64 h-64 bg-purple-500 rounded-full mix-blend-soft-light filter blur-3xl opacity-30 animate-pulse"></div>
        <div class="absolute bottom-1/4 right-0 w-64 h-64 bg-indigo-500 rounded-full mix-blend-soft-light filter blur-3xl opacity-30 animate-pulse animation-delay-1000"></div>
    </div>
</section>

