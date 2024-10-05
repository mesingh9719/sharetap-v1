<x-front.layouts.app-layout>
    <section class="relative bg-gradient-to-br from-purple-600 to-indigo-700 py-24 overflow-hidden">
        <div class="container mx-auto px-4 relative z-10">
            <div class="flex flex-col lg:flex-row items-center justify-between">
                <div class="lg:w-1/2 text-center lg:text-left mb-12 lg:mb-0">
                    <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white mb-6 leading-tight animate-fade-in-up">
                        {{ $setting['home_page_title'] ?? 'Revolutionize Your Networking with ShareTap' }}
                    </h1>
                    <p class="text-xl text-gray-100 mb-8 animate-fade-in-up animation-delay-300 max-w-xl mx-auto lg:mx-0">
                        {{ $setting['sub_text'] ?? 'Create, customize, and share your digital business card in seconds. Connect with professionals worldwide and leave a lasting impression.' }}
                    </p>
                    <div class="flex flex-col sm:flex-row justify-center lg:justify-start space-y-4 sm:space-y-0 sm:space-x-4">
                        <a href="{{ route('card.create') }}" class="inline-block bg-gradient-to-r from-yellow-400 to-yellow-300 hover:from-yellow-300 hover:to-yellow-200 text-gray-900 font-bold py-3 px-8 rounded-full transition duration-300 ease-in-out transform hover:scale-105 hover:shadow-lg animate-fade-in-up animation-delay-600" role="button" data-turbo="false">
                            Create Your Card
                        </a>
                        <a href="{{ route('card.templates') }}" class="inline-block bg-white text-purple-600 font-bold py-3 px-8 rounded-full transition duration-300 ease-in-out transform hover:scale-105 hover:shadow-lg animate-fade-in-up animation-delay-800 hover:bg-gray-100" role="button">
                            View Templates
                        </a>
                    </div>
                </div>
                <div class="lg:w-1/2 mt-8 lg:mt-0">
                    <div class="relative mx-auto max-w-md animate-float">
                        <img src="{{ asset('assets/images/hero-section/hero-image.png') }}" alt="Digital Business Card" class="w-full h-auto rounded-lg" />
                        <div class="absolute -top-4 -left-4 w-24 h-24 bg-pink-400 rounded-full mix-blend-multiply filter blur-xl opacity-70 animate-blob"></div>
                        <div class="absolute -bottom-4 -right-4 w-24 h-24 bg-yellow-300 rounded-full mix-blend-multiply filter blur-xl opacity-70 animate-blob animation-delay-2000"></div>
                        <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-32 h-32 bg-purple-500 rounded-full mix-blend-multiply filter blur-xl opacity-70 animate-pulse"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="absolute inset-0 overflow-hidden">
            <div class="absolute left-1/2 top-0 -translate-x-1/2 w-[120%] h-[120%] bg-gradient-to-b from-transparent to-white opacity-10 blur-3xl transform rotate-12"></div>
        </div>
        <div class="hidden lg:block">
            <img src="{{ asset('assets/images/hero-section/shape-1.png') }}" class="absolute top-0 left-0 w-32 opacity-30 animate-pulse" alt="shape">
            <img src="{{ asset('assets/images/hero-section/shape-2.png') }}" class="absolute top-1/4 right-0 w-24 opacity-30 animate-bounce" alt="shape">
            <img src="{{ asset('assets/images/hero-section/shape-3.png') }}" class="absolute bottom-0 left-1/4 w-20 opacity-30 animate-ping" alt="shape">
            <img src="{{ asset('assets/images/hero-section/shape-4.png') }}" class="absolute top-1/2 left-1/3 w-16 opacity-30 animate-spin" alt="shape">
            <img src="{{ asset('assets/images/hero-section/shape-5.png') }}" class="absolute bottom-1/4 right-1/4 w-28 opacity-30 animate-pulse" alt="shape">
            <img src="{{ asset('assets/images/hero-section/shape-6.png') }}" class="absolute top-3/4 left-1/2 w-20 opacity-30 animate-bounce" alt="shape">
            <img src="{{ asset('assets/images/hero-section/shape-7.png') }}" class="absolute bottom-1/3 right-1/3 w-24 opacity-30 animate-ping" alt="shape">
            <img src="{{ asset('assets/images/hero-section/shape-8.png') }}" class="absolute top-1/3 right-1/2 w-16 opacity-30 animate-spin" alt="shape">
        </div>
    </section>
    <x-front.home-template-section />
    <x-front.features-component />
    <x-front.plansSection/>
    <x-front.call-to-action-section/>
    <x-slot:js>
        <script>
            let currentSlide = 0;
            const slider = document.getElementById('featureSlider');
            const slideWidth = document.querySelector('.container').clientWidth;
            const totalSlides = slider.children.length;
        
            function slideFeatures(direction) {
                currentSlide = (currentSlide + direction + totalSlides) % totalSlides;
                slider.style.transform = `translateX(-${currentSlide * slideWidth}px)`;
            }
        
            // Auto-slide every 5 seconds
            setInterval(() => slideFeatures(1), 5000);
        </script>
    </x-slot:js>
</x-front.layouts.app-layout>
