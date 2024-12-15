<x-front.layouts.app-layout>
    <section class="relative bg-gradient-to-br from-purple-600 to-indigo-700 py-24 overflow-hidden">
        <div class="container mx-auto px-4 relative z-10">
            <div class="flex flex-col lg:flex-row items-center justify-between">
                <div class="lg:w-1/2 text-center lg:text-left mb-12 lg:mb-0">
                    <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white mb-6 leading-tight animate-fade-in-up">
                        Build Your Digital Ecosystem Without Coding
                    </h1>
                    <p class="text-xl text-gray-100 mb-8 animate-fade-in-up animation-delay-300 max-w-xl mx-auto lg:mx-0">
                        Create websites, manage customers, and grow your business with ShareTap's all-in-one no-code platform. No IT team required.
                    </p>
                    <div class="flex flex-col sm:flex-row justify-center lg:justify-start space-y-4 sm:space-y-0 sm:space-x-4">
                        <a href="{{ route('card.create') }}" class="inline-block bg-gradient-to-r from-yellow-400 to-yellow-300 hover:from-yellow-300 hover:to-yellow-200 text-gray-900 font-bold py-3 px-8 rounded-full transition duration-300 ease-in-out transform hover:scale-105 hover:shadow-lg animate-fade-in-up animation-delay-600" role="button">
                            Start Building Now
                        </a>
                        <a href="{{ route('card.templates') }}" class="inline-block bg-white text-purple-600 font-bold py-3 px-8 rounded-full transition duration-300 ease-in-out transform hover:scale-105 hover:shadow-lg animate-fade-in-up animation-delay-800 hover:bg-gray-100" role="button">
                            Explore Templates
                        </a>
                    </div>
                </div>
                <div class="lg:w-1/2 mt-8 lg:mt-0">
                    <div class="relative mx-auto max-w-md animate-float">
                        <img src="{{ asset('assets/images/hero-section/no-code-platform.png') }}" alt="No-Code Website Builder" class="w-full h-auto rounded-lg shadow-2xl" />
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- New Features Section -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-800 mb-4">Unleash Your Business Potential</h2>
                <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                    Transform your digital presence with our powerful, no-code platform designed for entrepreneurs and businesses.
                </p>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition-all duration-300">
                    <div class="bg-purple-100 p-4 rounded-full inline-block mb-4">
                        <svg class="w-12 h-12 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-3 text-gray-800">No-Code Website Builder</h3>
                    <p class="text-gray-600 mb-4">
                        Create stunning websites, online stores, and portfolios without writing a single line of code.
                    </p>
                    <ul class="text-sm text-gray-500 space-y-2">
                        <li>✓ 100+ Professional Templates</li>
                        <li>✓ Drag & Drop Interface</li>
                        <li>✓ Mobile Responsive Design</li>
                    </ul>
                </div>

                <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition-all duration-300">
                    <div class="bg-green-100 p-4 rounded-full inline-block mb-4">
                        <svg class="w-12 h-12 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-3 text-gray-800">Dynamic Business Solutions</h3>
                    <p class="text-gray-600 mb-4">
                        Instantly transform your business ideas into fully functional online platforms.
                    </p>
                    <ul class="text-sm text-gray-500 space-y-2">
                        <li>✓ AI-Powered Design</li>
                        <li>✓ Integrated Payment Gateways</li>
                        <li>✓ SEO Optimization</li>
                    </ul>
                </div>

                <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition-all duration-300">
                    <div class="bg-blue-100 p-4 rounded-full inline-block mb-4">
                        <svg class="w-12 h-12 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-3 text-gray-800">Customer Management</h3>
                    <p class="text-gray-600 mb-4">
                        Connect and manage customers effortlessly without hiring an IT team.
                    </p>
                    <ul class="text-sm text-gray-500 space-y-2">
                        <li>✓ CRM Integration</li>
                        <li>✓ Live Chat Support</li>
                        <li>✓ Customer Analytics</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="bg-gradient-to-r from-purple-600 to-indigo-700 py-16 text-center">
        <div class="container mx-auto px-4">
            <h2 class="text-4xl font-bold text-white mb-6">Ready to Transform Your Business?</h2>
            <p class="text-xl text-gray-100 mb-8 max-w-2xl mx-auto">
                Join thousands of entrepreneurs who've revolutionized their online presence with ShareTap's no-code platform.
            </p>
            <div class="flex justify-center space-x-4">
                <a href="{{ route('user.signup') }}" class="bg-white text-purple-600 font-bold py-3 px-8 rounded-full hover:bg-gray-100 transition duration-300">
                    Get Started Free
                </a>
                <a href="#" class="border-2 border-white text-white font-bold py-3 px-8 rounded-full hover:bg-white hover:text-purple-600 transition duration-300">
                    Watch Demo
                </a>
            </div>
        </div>
    </section>
</x-front.layouts.app-layout>
