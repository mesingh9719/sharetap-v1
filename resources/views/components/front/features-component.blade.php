<div>
 <!-- Feature Section -->
<section class="py-24 bg-gray-100 border-t border-b border-gray-200">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto mb-16 text-center">
            <h2 class="text-3xl font-bold text-gray-800 mb-2">Features</h2>
            <div class="w-16 h-1 bg-indigo-600 mx-auto mb-4"></div>
            <p class="text-gray-600">Discover what makes our digital business cards stand out</p>
        </div>
        
        <div class="relative  rounded-lg p-8">
            <div class="feature-slider overflow-hidden">
                <div class="flex transition-transform duration-300 ease-in-out" id="featureSlider">
                    @foreach ($features as $feature)
                        <div class="w-full md:w-1/2 lg:w-1/3 flex-shrink-0 px-4">
                            <div class="mb-8">
                                <div class="bg-purple-100 rounded-full w-16 h-16 flex items-center justify-center mb-4 mx-auto">
                                    <svg class="w-8 h-8 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <!-- Replace with appropriate icon path for each feature -->
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z"></path>
                                    </svg>
                                </div>
                                <h3 class="text-xl font-semibold text-gray-800 mb-2 text-center">{{ $feature->name }}</h3>
                                <p class="text-gray-600 text-center">{{ $feature->description }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <button class="absolute top-1/2 -left-4 transform -translate-y-1/2 bg-indigo-600 text-white rounded-full p-2 shadow-lg focus:outline-none hover:bg-purple-700 transition duration-300" onclick="slideFeatures(-1)">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
            </button>
            <button class="absolute top-1/2 -right-4 transform -translate-y-1/2 bg-indigo-600 text-white rounded-full p-2 shadow-lg focus:outline-none hover:bg-purple-700 transition duration-300" onclick="slideFeatures(1)">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
            </button>
        </div>
    </div>
</section>


</div>