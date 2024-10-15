<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>John Doe - Web Developer</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
</head>

<body x-data="{ darkMode: false }" :class="{ 'dark': darkMode }" class="bg-gray-50 dark:bg-gray-900 font-sans text-gray-800 dark:text-gray-200 transition-colors duration-300">
    <!-- Header -->
    <header class="bg-white dark:bg-gray-800 shadow-md p-4 sticky top-0 z-10 transition-colors duration-300">
        <nav class="container mx-auto flex justify-between items-center">
            <a href="#" class="text-2xl font-bold text-indigo-600 dark:text-indigo-400">John Doe</a>
            <ul class="hidden md:flex space-x-6">
                <li><a href="#about" class="hover:text-indigo-600 dark:hover:text-indigo-400 transition duration-300">About</a></li>
                <li><a href="#skills" class="hover:text-indigo-600 dark:hover:text-indigo-400 transition duration-300">Skills</a></li>
                <li><a href="#projects" class="hover:text-indigo-600 dark:hover:text-indigo-400 transition duration-300">Projects</a></li>
                <li><a href="#contact" class="hover:text-indigo-600 dark:hover:text-indigo-400 transition duration-300">Contact</a></li>
            </ul>
            <div class="flex items-center space-x-4">
                <button @click="darkMode = !darkMode" class="p-2 rounded-full bg-gray-200 dark:bg-gray-700 transition duration-300">
                    <i class="fas" :class="darkMode ? 'fa-sun' : 'fa-moon'"></i>
                </button>
                <button class="md:hidden" id="menu-toggle">
                    <i class="fas fa-bars"></i>
                </button>
            </div>
        </nav>
    </header>

    <!-- Mobile Menu -->
    <div class="md:hidden bg-white dark:bg-gray-800 text-gray-800 dark:text-gray-200 p-4 hidden transition-colors duration-300" id="mobile-menu">
        <ul class="space-y-2">
            <li><a href="#about" class="block hover:text-indigo-600 dark:hover:text-indigo-400">About</a></li>
            <li><a href="#skills" class="block hover:text-indigo-600 dark:hover:text-indigo-400">Skills</a></li>
            <li><a href="#projects" class="block hover:text-indigo-600 dark:hover:text-indigo-400">Projects</a></li>
            <li><a href="#contact" class="block hover:text-indigo-600 dark:hover:text-indigo-400">Contact</a></li>
        </ul>
    </div>

    <!-- Hero Section -->
    <section class="bg-gradient-to-r from-indigo-500 to-purple-600 text-white py-20 relative overflow-hidden">
        <div class="absolute inset-0 opacity-10">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none" class="h-full w-full">
                <g fill-rule="evenodd"><circle cx="25" cy="25" r="25"/><circle cx="75" cy="75" r="25"/></g>
            </svg>
        </div>
        <div class="container mx-auto px-4 text-center relative z-10">
            <h1 class="text-4xl md:text-6xl font-bold mb-4 animate-fade-in-up">Welcome to My Portfolio</h1>
            <p class="text-xl mb-8 animate-fade-in-up animation-delay-200">I'm a passionate web developer creating amazing digital experiences</p>
            <a href="#contact" class="bg-white text-indigo-600 font-bold py-3 px-6 rounded-full hover:bg-indigo-100 transition duration-300 animate-fade-in-up animation-delay-400">Get in Touch</a>
        </div>
    </section>

    <!-- Main Content -->
    <main class="container mx-auto px-4 py-12">
        <!-- About Section -->
        <section id="about" class="mb-20">
            <h2 class="text-3xl font-bold mb-8 text-center">About Me</h2>
            <div class="bg-white dark:bg-gray-800 shadow-lg rounded-lg p-8 flex flex-col md:flex-row items-center transition-colors duration-300">
                <img src="https://via.placeholder.com/300" alt="John Doe" class="w-48 h-48 rounded-full mb-6 md:mb-0 md:mr-8">
                <div>
                    <p class="text-gray-700 dark:text-gray-300 mb-4">Hi, I'm John Doe, a web developer with 5 years of experience in creating responsive and user-friendly websites. I'm passionate about clean code, intuitive design, and staying up-to-date with the latest web technologies.</p>
                    <p class="text-gray-700 dark:text-gray-300">When I'm not coding, you can find me hiking in the mountains or experimenting with new recipes in the kitchen.</p>
                </div>
            </div>
        </section>

        <!-- Skills Section -->
        <section id="skills" class="mb-20">
            <h2 class="text-3xl font-bold mb-8 text-center">Skills</h2>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                <div class="bg-white dark:bg-gray-800 shadow-md rounded-lg p-6 text-center hover:shadow-lg transition duration-300 transform hover:-translate-y-1">
                    <i class="fab fa-html5 text-5xl text-orange-500 mb-4"></i>
                    <p class="font-semibold">HTML5</p>
                </div>
                <div class="bg-white dark:bg-gray-800 shadow-md rounded-lg p-6 text-center hover:shadow-lg transition duration-300 transform hover:-translate-y-1">
                    <i class="fab fa-css3-alt text-5xl text-blue-500 mb-4"></i>
                    <p class="font-semibold">CSS3</p>
                </div>
                <div class="bg-white dark:bg-gray-800 shadow-md rounded-lg p-6 text-center hover:shadow-lg transition duration-300 transform hover:-translate-y-1">
                    <i class="fab fa-js text-5xl text-yellow-500 mb-4"></i>
                    <p class="font-semibold">JavaScript</p>
                </div>
                <div class="bg-white dark:bg-gray-800 shadow-md rounded-lg p-6 text-center hover:shadow-lg transition duration-300 transform hover:-translate-y-1">
                    <i class="fab fa-react text-5xl text-blue-400 mb-4"></i>
                    <p class="font-semibold">React</p>
                </div>
            </div>
        </section>

        <!-- Projects Section -->
        <section id="projects" class="mb-20">
            <h2 class="text-3xl font-bold mb-8 text-center">Projects</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-white dark:bg-gray-800 shadow-lg rounded-lg overflow-hidden hover:shadow-xl transition duration-300 transform hover:-translate-y-1">
                    <img src="https://via.placeholder.com/600x400" alt="Project 1" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="font-bold text-xl mb-2">E-commerce Website</h3>
                        <p class="text-gray-700 dark:text-gray-300 mb-4">A fully responsive e-commerce platform built with React and Node.js.</p>
                        <a href="#" class="text-indigo-600 dark:text-indigo-400 font-semibold hover:text-indigo-800 dark:hover:text-indigo-200">View Project</a>
                    </div>
                </div>
                <div class="bg-white dark:bg-gray-800 shadow-lg rounded-lg overflow-hidden hover:shadow-xl transition duration-300 transform hover:-translate-y-1">
                    <img src="https://via.placeholder.com/600x400" alt="Project 2" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="font-bold text-xl mb-2">Task Management App</h3>
                        <p class="text-gray-700 dark:text-gray-300 mb-4">A productivity app developed using Vue.js and Firebase.</p>
                        <a href="#" class="text-indigo-600 dark:text-indigo-400 font-semibold hover:text-indigo-800 dark:hover:text-indigo-200">View Project</a>
                    </div>
                </div>
                <div class="bg-white dark:bg-gray-800 shadow-lg rounded-lg overflow-hidden hover:shadow-xl transition duration-300 transform hover:-translate-y-1">
                    <img src="https://via.placeholder.com/600x400" alt="Project 3" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="font-bold text-xl mb-2">Weather Dashboard</h3>
                        <p class="text-gray-700 dark:text-gray-300 mb-4">A weather app that provides real-time forecasts using a third-party API.</p>
                        <a href="#" class="text-indigo-600 dark:text-indigo-400 font-semibold hover:text-indigo-800 dark:hover:text-indigo-200">View Project</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Contact Section -->
        <section id="contact">
            <h2 class="text-3xl font-bold mb-8 text-center">Get in Touch</h2>
            <form class="bg-white dark:bg-gray-800 shadow-lg rounded-lg p-8 max-w-2xl mx-auto transition-colors duration-300">
                <div class="mb-6">
                    <label for="name" class="block text-gray-700 dark:text-gray-300 font-semibold mb-2">Name</label>
                    <input type="text" id="name" name="name" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 dark:bg-gray-700 dark:border-gray-600 dark:text-white" required>
                </div>
                <div class="mb-6">
                    <label for="email" class="block text-gray-700 dark:text-gray-300 font-semibold mb-2">Email</label>
                    <input type="email" id="email" name="email" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 dark:bg-gray-700 dark:border-gray-600 dark:text-white" required>
                </div>
                <div class="mb-6">
                    <label for="message" class="block text-gray-700 dark:text-gray-300 font-semibold mb-2">Message</label>
                    <textarea id="message" name="message" rows="4" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 dark:bg-gray-700 dark:border-gray-600 dark:text-white" required></textarea>
                </div>
                <button type="submit" class="bg-indigo-600 text-white font-bold py-3 px-6 rounded-lg hover:bg-indigo-700 transition duration-300 w-full">Send Message</button>
            </form>
        </section>
    </main>

    <!-- Footer -->
    <footer class="bg-gray-800 dark:bg-gray-900 text-white py-8 transition-colors duration-300">
        <div class="container mx-auto px-4 text-center">
            <div class="flex justify-center space-x-6 mb-4">
                <a href="#" class="hover:text-indigo-400 transition duration-300"><i class="fab fa-github text-2xl"></i></a>
                <a href="#" class="hover:text-indigo-400 transition duration-300"><i class="fab fa-linkedin text-2xl"></i></a>
                <a href="#" class="hover:text-indigo-400 transition duration-300"><i class="fab fa-twitter text-2xl"></i></a>
            </div>
            <p>&copy; 2023 John Doe. All rights reserved.</p>
        </div>
    </footer>

    <script>
        // Toggle mobile menu
        const menuToggle = document.getElementById('menu-toggle');
        const mobileMenu = document.getElementById('mobile-menu');

        menuToggle.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });

        // Add animation classes
        document.addEventListener('DOMContentLoaded', () => {
            const animatedElements = document.querySelectorAll('.animate-fade-in-up');
            animatedElements.forEach((el, index) => {
                el.style.animationDelay = `${index * 200}ms`;
            });
        });
    </script>
</body>

</html>
