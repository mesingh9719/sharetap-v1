<!-- Start Header Section -->
<header class="bg-white shadow-md">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8" id="frontHomeTab">
        <div class="flex items-center justify-between h-20">
            <!-- Logo Section -->
            <div class="flex-shrink-0">
                <a href="#" class="flex items-center">
                    <img src="{{ $settings['logo'] }}" alt="company-logo" class="h-12 w-auto" />
                </a>
            </div>

            <!-- Navigation Menu -->
            <div class="hidden lg:flex lg:items-center lg:space-x-6">
                <nav class="flex space-x-4">
                    <a href="{{ asset('') . '#frontHomeTab' }}" class="text-gray-700 hover:text-blue-600 px-3 py-2 rounded-md text-sm font-medium transition duration-150 ease-in-out" aria-current="page">
                        Home
                    </a>
                    <a href="{{ asset('') . '#frontAboutTabUsTab' }}" class="text-gray-700 hover:text-blue-600 px-3 py-2 rounded-md text-sm font-medium transition duration-150 ease-in-out">
                        About us
                    </a>
                    <a href="{{ route('faqs') }}" class="text-gray-700 hover:text-blue-600 px-3 py-2 rounded-md text-sm font-medium transition duration-150 ease-in-out">
                        FAQs
                    </a>
                    <a href="{{ asset('') . '#frontPricingTab' }}" class="text-gray-700 hover:text-blue-600 px-3 py-2 rounded-md text-sm font-medium transition duration-150 ease-in-out">
                        Pricing
                    </a>
                    <a href="{{ asset('') . '#frontContactUsTab' }}" class="text-gray-700 hover:text-blue-600 px-3 py-2 rounded-md text-sm font-medium transition duration-150 ease-in-out">
                        Contact us
                    </a>
                </nav>
            </div>

            <!-- User Authentication Buttons -->
            <div class="hidden lg:flex lg:items-center lg:space-x-4">
                <a href="{{ route('card.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded-md text-sm font-medium hover:bg-blue-700 transition duration-150 ease-in-out" role="button">
                    Create New Card
                </a>
                <a href="{{ route('user.login') }}" class="bg-gray-100 text-gray-700 px-4 py-2 rounded-md text-sm font-medium hover:bg-gray-200 transition duration-150 ease-in-out" role="button">
                    Sign in
                </a>
            </div>

            <!-- Mobile Menu Button -->
            <div class="lg:hidden">
                <button type="button" class="inline-flex items-center justify-center p-2 rounded-md text-gray-700 hover:text-white hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-blue-500 transition duration-150 ease-in-out" aria-controls="mobile-menu" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <!-- Icon when menu is closed -->
                    <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                    <!-- Icon when menu is open -->
                    <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div class="lg:hidden" id="mobile-menu">
        <div class="px-2 pt-2 pb-3 space-y-1">
            <a href="{{ asset('') . '#frontHomeTab' }}" class="block text-gray-700 hover:bg-gray-100 px-3 py-2 rounded-md text-base font-medium transition duration-150 ease-in-out" aria-current="page">
                {{ __('auth.home') }}
            </a>
            <a href="{{ asset('') . '#frontAboutTabUsTab' }}" class="block text-gray-700 hover:bg-gray-100 px-3 py-2 rounded-md text-base font-medium transition duration-150 ease-in-out">
                {{ __('auth.about') }}
            </a>
            <a href="{{ route('faqs') }}" class="block text-gray-700 hover:bg-gray-100 px-3 py-2 rounded-md text-base font-medium transition duration-150 ease-in-out">
                {{ __('messages.faqs.faqs') }}
            </a>
            <a href="{{ asset('') . '#frontPricingTab' }}" class="block text-gray-700 hover:bg-gray-100 px-3 py-2 rounded-md text-base font-medium transition duration-150 ease-in-out">
                {{ __('auth.pricing') }}
            </a>
            <a href="{{ asset('') . '#frontContactUsTab' }}" class="block text-gray-700 hover:bg-gray-100 px-3 py-2 rounded-md text-base font-medium transition duration-150 ease-in-out">
                {{ __('auth.contact') }}
            </a>

            <!-- Authentication Buttons -->
            <a href="{{ route('card.create') }}" class="block bg-blue-600 text-white px-3 py-2 rounded-md text-base font-medium hover:bg-blue-700 transition duration-150 ease-in-out mt-2" role="button">
                Create New Card
            </a>
            <a href="{{ route('user.login') }}" class="block bg-gray-100 text-gray-700 px-3 py-2 rounded-md text-base font-medium hover:bg-gray-200 mt-2 transition duration-150 ease-in-out" role="button">
                {{ __('auth.sign_in') }}
            </a>
        </div>
    </div>
</header>
<!-- End Header Section -->
