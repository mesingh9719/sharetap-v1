<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Celebrity Portfolio - Elegant & Mobile Responsive</title>
    @vite('resources/css/app.css')
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" />
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Poppins:wght@300;400;500;600&display=swap');

        body {
            font-family: 'Poppins', sans-serif;
            background-color: #1a1a1a;
        }

        .gradient-text {
            background: linear-gradient(90deg, #fbbf24, #f59e0b);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .hero-text {
            font-family: 'Playfair Display', serif;
        }
    </style>
</head>

<body class="bg-black text-white">
<!-- Navigation -->
<nav x-data="{ open: false }" class="bg-black bg-opacity-50 fixed w-full z-50 shadow-sm">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex items-center">
                <a href="#" class="text-2xl md:text-3xl font-bold gradient-text">CelebrityName</a>
                <div class="hidden md:ml-10 md:flex space-x-8">
                    <a href="#" class="text-gray-300 hover:text-white">Home</a>
                    <a href="#" class="text-gray-300 hover:text-white">About</a>
                    <a href="#" class="text-gray-300 hover:text-white">Portfolio</a>
                    <a href="#" class="text-gray-300 hover:text-white">Press</a>
                    <a href="#" class="text-gray-300 hover:text-white">Contact</a>
                </div>
            </div>
            <div class="md:hidden flex items-center">
                <button @click="open = !open" class="text-gray-400 focus:outline-none">
                    <svg class="h-6 w-6" x-show="!open" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                    </svg>
                    <svg class="h-6 w-6" x-show="open" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
    <div x-show="open" class="md:hidden bg-black">
        <div class="px-2 pt-2 pb-3 space-y-1">
            <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-gray-300 hover:text-white">Home</a>
            <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-gray-300 hover:text-white">About</a>
            <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-gray-300 hover:text-white">Portfolio</a>
            <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-gray-300 hover:text-white">Press</a>
            <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-gray-300 hover:text-white">Contact</a>
        </div>
    </div>
</nav>

<!-- Hero Section -->
<section class="relative h-screen flex items-center justify-center">
    <img src="https://images.unsplash.com/photo-1727784891998-58db0d9249ac?q=80&w=1966&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Celebrity Image" class="absolute inset-0 object-cover w-full h-full opacity-40">
    <div class="relative z-10 text-center px-4 md:px-0">
        <h1 class="text-4xl md:text-6xl font-bold gradient-text hero-text" data-aos="fade-up">Celebrity Name</h1>
        <p class="mt-4 text-gray-200 text-sm md:text-lg" data-aos="fade-up" data-aos-delay="200">An exclusive look into my world.</p>
        <a href="#" class="mt-6 inline-block px-6 py-2 md:px-8 md:py-3 bg-yellow-500 text-black font-semibold rounded-full hover:bg-yellow-600 transition duration-300" data-aos="fade-up" data-aos-delay="400">Explore Portfolio</a>
    </div>
</section>

<!-- About Section -->
<section class="py-12 md:py-16 px-4 md:px-6 bg-gray-900">
    <div class="max-w-5xl mx-auto">
        <h2 class="text-3xl md:text-4xl font-bold gradient-text text-center mb-6">About Me</h2>
        <p class="text-gray-300 text-center leading-relaxed" data-aos="fade-up">
            Welcome to my world! I am a celebrity/influencer with a passion for sharing my journey, achievements, and experiences. Explore my portfolio to see my work, press features, and more about my story.
        </p>
    </div>
</section>

<!-- Portfolio Section -->
<section class="py-12 md:py-16 px-4 md:px-6 bg-black">
    <div class="max-w-7xl mx-auto">
        <h2 class="text-3xl md:text-4xl font-bold gradient-text text-center mb-8">Portfolio</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8" data-aos="fade-up">
            <img src="https://images.unsplash.com/photo-1727784891998-58db0d9249ac?q=80&w=1966&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Portfolio Image" class="rounded-lg shadow-lg hover:shadow-2xl transition duration-300">
            <img src="https://images.unsplash.com/photo-1727784892059-c85b4d9f763c?q=80&w=2080&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Portfolio Image" class="rounded-lg shadow-lg hover:shadow-2xl transition duration-300">
            <img src="https://images.unsplash.com/photo-1728646995850-3f437859535e?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Portfolio Image" class="rounded-lg shadow-lg hover:shadow-2xl transition duration-300">
            <img src="https://images.unsplash.com/photo-1727784892009-f3cf06199b65?q=80&w=1932&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Portfolio Image" class="rounded-lg shadow-lg hover:shadow-2xl transition duration-300">
            <img src="https://images.unsplash.com/photo-1727075571736-9286894238ff?q=80&w=1887&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Portfolio Image" class="rounded-lg shadow-lg hover:shadow-2xl transition duration-300">
            <img src="https://images.unsplash.com/photo-1727686679920-79be3ffe07d8?q=80&w=1887&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Portfolio Image" class="rounded-lg shadow-lg hover:shadow-2xl transition duration-300">
        </div>
    </div>
</section>

<!-- Contact Section -->
<section class="py-12 md:py-16 px-4 md:px-6 bg-gray-900">
    <div class="max-w-3xl mx-auto">
        <h2 class="text-3xl md:text-4xl font-bold gradient-text text-center mb-8">Get In Touch</h2>
        <form class="space-y-4" data-aos="fade-up">
            <input type="text" placeholder="Full Name" class="w-full px-4 py-2 bg-gray-800 text-white rounded-md focus:outline-none">
            <input type="email" placeholder="Email Address" class="w-full px-4 py-2 bg-gray-800 text-white rounded-md focus:outline-none">
            <textarea placeholder="Message" class="w-full px-4 py-2 bg-gray-800 text-white rounded-md focus:outline-none"></textarea>
            <button type="submit" class="w-full py-3 bg-yellow-500 text-black font-bold rounded-md hover:bg-yellow-600 transition duration-300">Send Message</button>
        </form>
    </div>
</section>

<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
<script>
    AOS.init();
</script>
</body>

</html>
