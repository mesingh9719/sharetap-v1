<div>
    <!-- Plans Section -->
    <section class="py-24 bg-gradient-to-b from-white to-indigo-50">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto mb-16 text-center">
                <h2 class="text-5xl font-extrabold text-indigo-900 mb-4">Choose Your Perfect Plan</h2>
                <div class="w-32 h-1 bg-indigo-600 mx-auto mb-8"></div>
                <p class="text-xl text-indigo-700 leading-relaxed">Unlock the power of creativity with our flexible pricing options tailored to your needs</p>
            </div>
            <div class="flex flex-wrap justify-center gap-8">
                @foreach ($plans as $plan)
                    <div class="w-full md:w-96 transform hover:-translate-y-2 transition-all duration-300">
                        <div class="bg-white rounded-3xl shadow-2xl overflow-hidden border border-indigo-100">
                            <div class="p-8 bg-gradient-to-r from-indigo-600 to-purple-600 text-white relative">
                                @if($plan->is_popular)
                                    <span class="absolute top-0 right-0 bg-yellow-400 text-indigo-900 text-xs font-bold px-3 py-1 rounded-bl-lg">Most Popular</span>
                                @endif
                                <h3 class="text-3xl font-bold mb-2">{{ $plan->name }}</h3>
                                <p class="text-indigo-100 mb-6 text-lg">{{ $plan->description }}</p>
                                <div class="text-5xl font-extrabold mb-2">${{ number_format($plan->price, 2) }}<span class="text-2xl font-normal">/mo</span></div>
                            </div>
                            <div class="p-8">
                                <ul class="space-y-4">
                                    @foreach(['users', 'cards', 'templates', 'features'] as $feature)
                                        <li class="flex items-center">
                                            <svg class="w-6 h-6 text-green-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                                            <span class="text-lg"><strong>{{ $plan->$feature }}</strong> {{ ucfirst($feature) }}</span>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="p-8 bg-indigo-50">
                                <a href="#" class="block w-full bg-indigo-600 hover:bg-indigo-700 text-white text-center font-bold py-4 px-6 rounded-xl transition duration-300 ease-in-out transform hover:scale-105 hover:shadow-lg text-lg" role="button">
                                    Get Started Now
                                </a>
                            </div>
                        </div>  
                    </div>
                @endforeach
            </div>
        </div>
    </section>
</div>