<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Alex Fitness - Personal Trainer & Fitness Influencer</title>
    @vite('resources/css/app.css')
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" />
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap');

        body {
            font-family: 'Poppins', sans-serif;
        }

        .gradient-text {
            background: linear-gradient(45deg, #3b82f6, #2563eb);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
    </style>
</head>

<body class="bg-gray-100 text-gray-800">
<nav x-data="{ open: false }" class="bg-white shadow-md">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16">
            <div class="flex items-center">
                <div class="flex-shrink-0">
                    <span class="text-2xl font-bold text-blue-600">AF</span>
                </div>
                <div class="hidden md:block">
                    <div class="ml-10 flex items-baseline space-x-4">
                        <a href="#home"
                           class="text-gray-600 hover:text-blue-600 px-3 py-2 rounded-md text-sm font-medium transition duration-300">Home</a>
                        <a href="#about"
                           class="text-gray-600 hover:text-blue-600 px-3 py-2 rounded-md text-sm font-medium transition duration-300">About</a>
                        <a href="#services"
                           class="text-gray-600 hover:text-blue-600 px-3 py-2 rounded-md text-sm font-medium transition duration-300">Services</a>
                        <a href="#content"
                           class="text-gray-600 hover:text-blue-600 px-3 py-2 rounded-md text-sm font-medium transition duration-300">Content</a>
                        <a href="#contact"
                           class="text-gray-600 hover:text-blue-600 px-3 py-2 rounded-md text-sm font-medium transition duration-300">Contact</a>
                    </div>
                </div>
            </div>
            <div class="-mr-2 flex md:hidden">
                <button @click="open = !open"
                        class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-blue-600 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-blue-500">
                    <span class="sr-only">Open main menu</span>
                    <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                         stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <div x-show="open" class="md:hidden bg-white">
        <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
            <a href="#home"
               class="text-gray-600 hover:text-blue-600 block px-3 py-2 rounded-md text-base font-medium transition duration-300">Home</a>
            <a href="#about"
               class="text-gray-600 hover:text-blue-600 block px-3 py-2 rounded-md text-base font-medium transition duration-300">About</a>
            <a href="#services"
               class="text-gray-600 hover:text-blue-600 block px-3 py-2 rounded-md text-base font-medium transition duration-300">Services</a>
            <a href="#content"
               class="text-gray-600 hover:text-blue-600 block px-3 py-2 rounded-md text-base font-medium transition duration-300">Content</a>
            <a href="#contact"
               class="text-gray-600 hover:text-blue-600 block px-3 py-2 rounded-md text-base font-medium transition duration-300">Contact</a>
        </div>
    </div>
</nav>

<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
    <!-- Hero Section -->
    <section id="home" class="relative overflow-hidden mb-20">
        <div class="absolute inset-0 bg-gradient-to-br from-blue-600 to-purple-700 transform skew-y-3"></div>
        <div class="relative z-10 text-center py-20">
            <h1 class="text-6xl font-extrabold mb-4 text-white tracking-tight">
                    <span class="bg-clip-text text-transparent bg-gradient-to-r from-yellow-400 to-pink-500">
                        Alex Fitness
                    </span>
            </h1>
            <p class="text-2xl mb-8 text-blue-100">Personal Trainer & Fitness Influencer</p>
            <div class="relative inline-block">
                <img src="{{ asset('assets/img/templates/vcard20.png') }}" alt="Alex Fitness"
                     class="rounded-full w-64 h-64 mx-auto mb-8 object-cover border-4 border-white shadow-2xl transform hover:rotate-3 transition duration-300">
                <div class="absolute -top-4 -right-4 bg-yellow-400 text-blue-800 rounded-full p-3 shadow-lg">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
            </div>
            <a href="#contact"
               class="bg-white text-blue-600 font-bold py-3 px-8 rounded-full hover:bg-blue-100 transition duration-300 inline-block transform hover:scale-110 hover:rotate-3 shadow-lg">
                Get in Touch
            </a>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="mb-20">
        <h2 class="text-5xl font-extrabold mb-10 text-center">
                <span class="bg-clip-text text-transparent bg-gradient-to-r from-blue-500 to-purple-600">
                    About Me
                </span>
        </h2>
        <div class="bg-white p-8 rounded-2xl shadow-2xl hover:shadow-3xl transition duration-300 transform hover:-translate-y-2">
            <div class="flex flex-col md:flex-row items-center">
                <div class="md:w-1/2 mb-6 md:mb-0">
                    <img src="{{ asset('assets/images/hero-section/shape-6.png') }}" alt="Alex in action" class="rounded-lg shadow-lg">
                </div>
                <div class="md:w-1/2 md:pl-8">
                    <p class="mb-4 text-gray-700 leading-relaxed">Hey there! I'm Alex, a certified personal trainer and fitness influencer
                        with a passion for helping people transform their lives through health and wellness.</p>
                    <p class="mb-4 text-gray-700 leading-relaxed">With over <span class="font-bold text-blue-600">500K followers</span> across social media platforms, I share daily
                        workout tips, nutrition advice, and motivation to inspire my community to reach their fitness goals.
                    </p>
                    <p class="text-gray-700 leading-relaxed">My approach combines science-based training methods with a focus on sustainable
                        lifestyle changes. Whether you're a beginner or an athlete, I'm here to guide you on your fitness
                        journey!</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="mb-20">
        <h2 class="text-5xl font-extrabold mb-10 text-center">
                <span class="bg-clip-text text-transparent bg-gradient-to-r from-blue-500 to-purple-600">
                    My Services
                </span>
        </h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="bg-gradient-to-br from-blue-100 to-blue-200 p-1 rounded-2xl shadow-lg hover:shadow-xl transition duration-300 transform hover:scale-105">
                <div class="bg-white p-6 rounded-xl h-full flex flex-col justify-between">
                    <div>
                        <div class="text-blue-600 mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold mb-4 text-blue-600">1:1 Personal Training</h3>
                        <p class="text-gray-700">Customized workout plans and nutrition guidance tailored to your specific
                            goals and lifestyle.</p>
                    </div>
                    <a href="#" class="mt-4 inline-block text-blue-600 hover:text-blue-800 font-semibold">Learn More →</a>
                </div>
            </div>
            <div class="bg-gradient-to-br from-purple-100 to-purple-200 p-1 rounded-2xl shadow-lg hover:shadow-xl transition duration-300 transform hover:scale-105">
                <div class="bg-white p-6 rounded-xl h-full flex flex-col justify-between">
                    <div>
                        <div class="text-purple-600 mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold mb-4 text-purple-600">Online Coaching</h3>
                        <p class="text-gray-700">Remote training programs with weekly check-ins, form corrections, and
                            progress tracking.</p>
                    </div>
                    <a href="#" class="mt-4 inline-block text-purple-600 hover:text-purple-800 font-semibold">Learn More →</a>
                </div>
            </div>
            <div class="bg-gradient-to-br from-pink-100 to-pink-200 p-1 rounded-2xl shadow-lg hover:shadow-xl transition duration-300 transform hover:scale-105">
                <div class="bg-white p-6 rounded-xl h-full flex flex-col justify-between">
                    <div>
                        <div class="text-pink-600 mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold mb-4 text-pink-600">Fitness Workshops</h3>
                        <p class="text-gray-700">Group sessions and seminars on various fitness topics, perfect for
                            corporate events or retreats.</p>
                    </div>
                    <a href="#" class="mt-4 inline-block text-pink-600 hover:text-pink-800 font-semibold">Learn More →</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Content Section -->
    <section id="content" class="mb-20">
        <h2 class="text-5xl font-extrabold mb-10 text-center">
                <span class="bg-clip-text text-transparent bg-gradient-to-r from-blue-500 to-purple-600">
                    Featured Content
                </span>
        </h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div class="bg-white p-6 rounded-2xl shadow-lg hover:shadow-xl transition duration-300 transform hover:scale-105">
                <h3 class="text-xl font-semibold mb-4 text-blue-600">Latest YouTube Video</h3>
                <div class="aspect-w-16 aspect-h-9 mb-4">
                    <img src="{{ asset('path/to/youtube-thumbnail.jpg') }}" alt="YouTube Thumbnail"
                         class="object-cover rounded-xl">
                </div>
                <p class="text-gray-700 font-semibold">10-Minute HIIT Workout for Busy Professionals</p>
                <a href="#" class="mt-4 inline-block text-blue-600 hover:text-blue-800 font-semibold">Watch Now →</a>
            </div>
            <div class="bg-white p-6 rounded-2xl shadow-lg hover:shadow-xl transition duration-300 transform hover:scale-105">
                <h3 class="text-xl font-semibold mb-4 text-purple-600">Featured Instagram Post</h3>
                <div class="aspect-w-1 aspect-h-1 mb-4">
                    <img src="{{ asset('path/to/instagram-post.jpg') }}" alt="Instagram Post"
                         class="object-cover rounded-xl">
                </div>
                <p class="text-gray-700 font-semibold">5 Quick and Healthy Breakfast Ideas for Weight Loss</p>
                <a href="#" class="mt-4 inline-block text-purple-600 hover:text-purple-800 font-semibold">View Post →</a>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="mb-20">
        <h2 class="text-5xl font-extrabold mb-10 text-center">
                <span class="bg-clip-text text-transparent bg-gradient-to-r from-blue-500 to-purple-600">
                    Get in Touch
                </span>
        </h2>
        <div class="bg-white p-8 rounded-2xl shadow-2xl hover:shadow-3xl transition duration-300">
            <form class="space-y-6">
                <div>
                    <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Name</label>
                    <input type="text" id="name" name="name"
                           class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition duration-200">
                </div>
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                    <input type="email" id="email" name="email"
                           class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition duration-200">
                </div>
                <div>
                    <label for="message" class="block text-sm font-medium text-gray-700 mb-1">Message</label>
                    <textarea id="message" name="message" rows="4"
                              class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition duration-200"></textarea>
                </div>
                <div>
                    <button type="submit"
                            class="w-full bg-gradient-to-r from-blue-500 to-purple-600 text-white font-bold py-3 px-4 rounded-lg hover:from-blue-600 hover:to-purple-700 transition duration-300 transform hover:scale-105">
                        Send Message
                    </button>
                </div>
            </form>
        </div>
    </section>
</div>

<footer class="bg-gray-800 py-8 text-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <div class="flex justify-center space-x-6 mb-4">
            <a href="#" class="text-gray-400 hover:text-white transition duration-300">
                <span class="sr-only">Instagram</span>
                <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                    <path fill-rule="evenodd"
                          d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098  3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"
                          clip-rule="evenodd" />
                </svg>
            </a>
            <a href="#" class="text-gray-400 hover:text-white transition duration-300">
                <span class="sr-only">Twitter</span>
                <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                    <path
                        d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" />
                </svg>
            </a>
            <a href="#" class="text-gray-400 hover:text-white transition duration-300">
                <span class="sr-only">YouTube</span>
                <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                    <path fill-rule="evenodd"
                          d="M19.812 5.418c.861.23 1.538.907 1.768 1.768C21.998 8.746 22 12 22 12s0 3.255-.418 4.814a2.504 2.504 0 0 1-1.768 1.768c-1.56.419-7.814.419-7.814.419s-6.255 0-7.814-.419a2.505 2.505 0 0 1-1.768-1.768C2 15.255 2 12 2 12s0-3.255.417-4.814a2.507 2.507 0 0 1 1.768-1.768C5.744 5 11.998 5 11.998 5s6.255 0 7.814.418ZM15.194 12 10 15V9l5.194 3Z"
                          clip-rule="evenodd" />
                </svg>
            </a>
        </div>
        <p class="text-gray-400">&copy; 2023 Alex Fitness. All rights reserved.</p>
    </div>
</footer>

<script>
    AOS.init({
        duration: 1000,
        once: true,
    });
</script>
</body>

</html>
