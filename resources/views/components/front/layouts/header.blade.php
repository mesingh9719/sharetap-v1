<header class="sticky top-0 z-50 w-full border-b bg-white ">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex h-16 items-center justify-between">
            <div class="flex items-center">
                <a href="{{ url('/') }}" class="flex-shrink-0">
                    <img class="h-8 w-auto" src="{{ $settings['site_logo'] ? asset($settings['site_logo']) : '' }}" alt="{{ config('app.name', 'Laravel') }} Logo">
                </a>
                <nav class="hidden md:ml-6 md:flex md:space-x-8">
                    <a href="{{ url('/#frontHomeTab') }}" class="text-gray-900 hover:bg-gray-50 hover:text-blue-600 px-3 py-2 rounded-md text-sm font-medium">Home</a>
                    <a href="{{ url('/#frontAboutTabUsTab') }}" class="text-gray-900 hover:bg-gray-50 hover:text-blue-600 px-3 py-2 rounded-md text-sm font-medium">About us</a>
                    <a href="{{ route('faqs') }}" class="text-gray-900 hover:bg-gray-50 hover:text-blue-600 px-3 py-2 rounded-md text-sm font-medium">FAQs</a>
                    <a href="{{ url('/#frontPricingTab') }}" class="text-gray-900 hover:bg-gray-50 hover:text-blue-600 px-3 py-2 rounded-md text-sm font-medium">Pricing</a>
                    <a href="{{ url('/#frontContactUsTab') }}" class="text-gray-900 hover:bg-gray-50 hover:text-blue-600 px-3 py-2 rounded-md text-sm font-medium">Contact us</a>
                </nav>
            </div>
            <div class="hidden md:flex md:items-center md:space-x-4">
                <a href="{{ route('card.create') }}" class="bg-blue-600 text-white hover:bg-blue-700 px-4 py-2 rounded-md text-sm font-medium transition duration-150 ease-in-out">
                    Create New Card
                </a>
                <a href="{{ route('user.login') }}" class="bg-gray-100 text-gray-700 hover:bg-gray-200 px-4 py-2 rounded-md text-sm font-medium transition duration-150 ease-in-out">
                    Sign in
                </a>
            </div>
            <div class="flex md:hidden">
                <button type="button" class="text-gray-500 hover:text-gray-600 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-blue-500" aria-controls="mobile-menu" aria-expanded="false" id="mobile-menu-button">
                    <span class="sr-only">Open main menu</span>
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile menu, show/hide based on menu state. -->
    <div class="md:hidden hidden" id="mobile-menu">
        <div class="px-2 pt-2 pb-3 space-y-1">
            <a href="{{ url('/#frontHomeTab') }}" class="text-gray-900 hover:bg-gray-50 hover:text-blue-600 block px-3 py-2 rounded-md text-base font-medium">Home</a>
            <a href="{{ url('/#frontAboutTabUsTab') }}" class="text-gray-900 hover:bg-gray-50 hover:text-blue-600 block px-3 py-2 rounded-md text-base font-medium">About us</a>
            <a href="{{ route('faqs') }}" class="text-gray-900 hover:bg-gray-50 hover:text-blue-600 block px-3 py-2 rounded-md text-base font-medium">FAQs</a>
            <a href="{{ url('/#frontPricingTab') }}" class="text-gray-900 hover:bg-gray-50 hover:text-blue-600 block px-3 py-2 rounded-md text-base font-medium">Pricing</a>
            <a href="{{ url('/#frontContactUsTab') }}" class="text-gray-900 hover:bg-gray-50 hover:text-blue-600 block px-3 py-2 rounded-md text-base font-medium">Contact us</a>
            <div class="mt-4 space-y-2">
                <a href="{{ route('card.create') }}" class="w-full bg-blue-600 text-white hover:bg-blue-700 px-4 py-2 rounded-md text-base font-medium transition duration-150 ease-in-out inline-block text-center">
                    Create New Card
                </a>
                <a href="{{ route('user.login') }}" class="w-full bg-gray-100 text-gray-700 hover:bg-gray-200 px-4 py-2 rounded-md text-base font-medium transition duration-150 ease-in-out inline-block text-center">
                    Sign in
                </a>
            </div>
        </div>
    </div>
</header>

