<div>
    <!-- Plans Section -->
    <section class="py-24 bg-gray-100 border-t border-b border-gray-200">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto mb-16 text-center">
                <h2 class="text-3xl font-bold text-gray-800 mb-2">Plans</h2>
                <div class="w-16 h-1 bg-indigo-600 mx-auto mb-4"></div>
                <p class="text-gray-600">Choose the plan that suits your needs</p>
            </div>
            <div class="flex flex-col lg:flex-row items-center justify-between">
                @foreach ($plans as $plan)
                    <div class="w-full lg:w-1/3 px-4 mb-8 lg:mb-0">
                        <div class="bg-white rounded-lg shadow-lg p-8">
                            <h3 class="text-xl font-semibold text-gray-800 mb-2">{{ $plan->name }}</h3>
                            <p class="text-gray-600 mb-4">{{ $plan->description }}</p>
                            <div class="flex items center justify-between mb-4">
                                <span class="text-gray-600">Price</span>
                                <span class="text-gray-800 font-semibold">${{ number_format($plan->price, 2) }}</span>
                            </div>
                            <div class="flex items center justify-between mb-4">
                                <span class="text-gray-600">Users</span>
                                <span class="text-gray-800 font-semibold">{{ $plan->users }}</span>
                            </div>
                            <div class="flex items center justify-between mb-4">
                                <span class="text-gray-600">Cards</span>
                                <span class="text-gray-800 font-semibold">{{ $plan->cards }}</span>
                            </div>
                            <div class="flex items center justify-between mb-4">
                                <span class="text-gray-600">Templates</span>
                                <span class="text-gray-800 font-semibold">{{ $plan->templates }}</span>
                            </div>
                            <div class="flex items center justify-between mb-4">
                                <span class="text-gray-600">Features</span>
                                <span class="text-gray-800 font-semibold">{{ $plan->features }}</span>
                            </div>
                            <a href="{{ route('register') }}" class="inline-block bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-3 px-8 rounded-full transition duration-300 ease-in-out transform hover:scale-105 hover:shadow-lg" role="button">
                                Get Started
                            </a>
                        </div>  
                    </div>
                @endforeach
            </div>
        </div>
    </section>
</div>