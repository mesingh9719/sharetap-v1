<div>
    <!-- Plans Section -->
    <section class="py-24 bg-gradient-to-b from-white to-indigo-50">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto mb-16 text-center">
                <h2 class="text-4xl font-extrabold text-indigo-900 mb-4">Choose Your Perfect Plan</h2>
                <div class="w-24 h-1 bg-indigo-600 mx-auto mb-6"></div>
                <p class="text-xl text-indigo-700">Unlock the power of creativity with our flexible pricing options</p>
            </div>
            <div class="flex flex-wrap justify-center gap-8">
                @foreach ($plans as $plan)
                    <div class="w-full md:w-96 transform hover:-translate-y-2 transition-all duration-300">
                        <div class="bg-white rounded-2xl shadow-xl overflow-hidden">
                            <div class="p-8 bg-gradient-to-r from-indigo-600 to-purple-600 text-white">
                                <h3 class="text-2xl font-bold mb-2">{{ $plan->name }}</h3>
                                <p class="text-indigo-100 mb-4">{{ $plan->description }}</p>
                                <div class="text-4xl font-extrabold mb-2">${{ number_format($plan->price, 2) }}<span class="text-xl font-normal">/mo</span></div>
                            </div>
                            <div class="p-8">
                                <ul class="space-y-4">
                                    <li class="flex items-center">
                                        <svg class="w-5 h-5 text-indigo-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                                        <span><strong>{{ $plan->users }}</strong> Users</span>
                                    </li>
                                    <li class="flex items-center">
                                        <svg class="w-5 h-5 text-indigo-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                                        <span><strong>{{ $plan->cards }}</strong> Cards</span>
                                    </li>
                                    <li class="flex items-center">
                                        <svg class="w-5 h-5 text-indigo-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                                        <span><strong>{{ $plan->templates }}</strong> Templates</span>
                                    </li>
                                    <li class="flex items-center">
                                        <svg class="w-5 h-5 text-indigo-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                                        <span><strong>{{ $plan->features }}</strong> Features</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="p-8 bg-indigo-50">
                                <a href="#" class="block w-full bg-indigo-600 hover:bg-indigo-700 text-white text-center font-bold py-3 px-4 rounded-lg transition duration-300 ease-in-out transform hover:scale-105 hover:shadow-lg" role="button">
                                    Get Started
                                </a>
                            </div>
                        </div>  
                    </div>
                @endforeach
            </div>
        </div>
    </section>
</div>