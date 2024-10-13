<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    @vite('resources/css/app.css')
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script>
    <title>John Doe | Full Stack Developer</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body class="bg-gradient-to-br from-gray-900 to-gray-800 text-gray-300 font-inter">
<div class="container mx-auto px-4 sm:px-6 lg:px-8 py-8 sm:py-12">
    <header class="flex flex-col sm:flex-row justify-between items-center mb-16" x-data="{ mobileMenuOpen: false }">
        <div class="flex justify-between items-center w-full sm:w-auto">
            <div class="text-3xl font-bold text-emerald-400 hover:text-emerald-300 transition-colors duration-300">&lt;JD /&gt;</div>
            <button @click="mobileMenuOpen = !mobileMenuOpen" class="sm:hidden text-emerald-400 hover:text-emerald-300">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                </svg>
            </button>
        </div>
        <nav class="hidden sm:flex space-x-6">
            <a href="#about" class="text-gray-300 hover:text-emerald-400 transition duration-300">About</a>
            <a href="#skills" class="text-gray-300 hover:text-emerald-400 transition duration-300">Skills</a>
            <a href="#portfolio" class="text-gray-300 hover:text-emerald-400 transition duration-300">Portfolio</a>
            <a href="#experience" class="text-gray-300 hover:text-emerald-400 transition duration-300">Experience</a>
            <a href="#contact" class="text-gray-300 hover:text-emerald-400 transition duration-300">Contact</a>
        </nav>
        <nav x-show="mobileMenuOpen" class="sm:hidden mt-4 flex flex-col space-y-2 w-full">
            <a href="#about" class="text-gray-300 hover:text-emerald-400 transition duration-300 py-2 px-4 bg-gray-800 rounded">About</a>
            <a href="#skills" class="text-gray-300 hover:text-emerald-400 transition duration-300 py-2 px-4 bg-gray-800 rounded">Skills</a>
            <a href="#portfolio" class="text-gray-300 hover:text-emerald-400 transition duration-300 py-2 px-4 bg-gray-800 rounded">Portfolio</a>
            <a href="#experience" class="text-gray-300 hover:text-emerald-400 transition duration-300 py-2 px-4 bg-gray-800 rounded">Experience</a>
            <a href="#contact" class="text-gray-300 hover:text-emerald-400 transition duration-300 py-2 px-4 bg-gray-800 rounded">Contact</a>
        </nav>
    </header>

    <main>
        <section id="about" class="mb-24 sm:mb-32 relative p-6 overflow-hidden" data-aos="fade-up">
            <div class="absolute top-0 right-0 -z-10">
                <div class="w-72 h-72 bg-emerald-500 rounded-full mix-blend-multiply filter blur-xl opacity-20 animate-blob"></div>
                <div class="w-72 h-72 bg-blue-500 rounded-full mix-blend-multiply filter blur-xl opacity-20 animate-blob animation-delay-2000"></div>
                <div class="w-72 h-72 bg-purple-500 rounded-full mix-blend-multiply filter blur-xl opacity-20 animate-blob animation-delay-4000"></div>
            </div>
            <h1 class="text-6xl sm:text-7xl md:text-8xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-emerald-400 via-blue-500 to-purple-500 mb-8 leading-tight">Hello, I'm John Doe</h1>
            <p class="text-xl sm:text-2xl md:text-3xl text-gray-300 max-w-3xl leading-relaxed mb-12">A passionate full stack developer crafting scalable web applications and intuitive user interfaces. Let's innovate together!</p>
            <div class="flex flex-wrap gap-10 items-center mb-16">
                <i class="fab fa-react text-7xl text-blue-400 animate-spin-slow hover:text-blue-300 transition-all duration-300 transform hover:scale-110"></i>
                <i class="fab fa-node-js text-7xl text-green-500 animate-bounce hover:text-green-400 transition-all duration-300 transform hover:scale-110"></i>
                <i class="fab fa-js-square text-7xl text-yellow-400 animate-pulse hover:text-yellow-300 transition-all duration-300 transform hover:scale-110"></i>
                <i class="fab fa-python text-7xl text-blue-500 animate-bounce hover:text-blue-400 transition-all duration-300 transform hover:scale-110"></i>
                <i class="fab fa-docker text-7xl text-blue-400 animate-pulse hover:text-blue-300 transition-all duration-300 transform hover:scale-110"></i>
            </div>
            <a href="#contact" class="inline-block bg-gradient-to-r from-emerald-400 to-blue-500 text-white font-bold py-4 px-8 rounded-full hover:from-emerald-500 hover:to-blue-600 transition-all duration-300 transform hover:-translate-y-1 hover:scale-105 hover:shadow-lg text-lg">Let's Connect</a>
        </section>

        <section id="skills" class="mb-24 sm:mb-32">
            <h2 class="text-3xl sm:text-4xl md:text-5xl font-bold text-white mb-12 sm:mb-16 text-center" data-aos="fade-up">My Skills</h2>
            <div class="grid grid-cols-2 md:grid-cols-3 gap-8 sm:gap-12">
                <div class="bg-gradient-to-br from-gray-800 to-gray-700 p-8 rounded-xl text-center shadow-lg transform hover:scale-105 transition-all duration-300" data-aos="zoom-in" data-aos-delay="100">
                    <i class="fab fa-js text-6xl text-yellow-400 mb-4"></i>
                    <h3 class="text-emerald-400 text-xl sm:text-2xl font-semibold">JavaScript</h3>
                    <p class="text-gray-400 mt-2">ES6+, Async/Await</p>
                </div>
                <div class="bg-gradient-to-br from-gray-800 to-gray-700 p-8 rounded-xl text-center shadow-lg transform hover:scale-105 transition-all duration-300" data-aos="zoom-in" data-aos-delay="200">
                    <i class="fab fa-react text-6xl text-blue-400 mb-4"></i>
                    <h3 class="text-emerald-400 text-xl sm:text-2xl font-semibold">React</h3>
                    <p class="text-gray-400 mt-2">Redux, Hooks</p>
                </div>
                <div class="bg-gradient-to-br from-gray-800 to-gray-700 p-8 rounded-xl text-center shadow-lg transform hover:scale-105 transition-all duration-300" data-aos="zoom-in" data-aos-delay="300">
                    <i class="fab fa-node-js text-6xl text-green-500 mb-4"></i>
                    <h3 class="text-emerald-400 text-xl sm:text-2xl font-semibold">Node.js</h3>
                    <p class="text-gray-400 mt-2">Express, API Development</p>
                </div>
                <div class="bg-gradient-to-br from-gray-800 to-gray-700 p-8 rounded-xl text-center shadow-lg transform hover:scale-105 transition-all duration-300" data-aos="zoom-in" data-aos-delay="400">
                    <i class="fab fa-python text-6xl text-blue-500 mb-4"></i>
                    <h3 class="text-emerald-400 text-xl sm:text-2xl font-semibold">Python</h3>
                    <p class="text-gray-400 mt-2">Django, Data Analysis</p>
                </div>
                <div class="bg-gradient-to-br from-gray-800 to-gray-700 p-8 rounded-xl text-center shadow-lg transform hover:scale-105 transition-all duration-300" data-aos="zoom-in" data-aos-delay="500">
                    <i class="fas fa-database text-6xl text-blue-400 mb-4"></i>
                    <h3 class="text-emerald-400 text-xl sm:text-2xl font-semibold">SQL</h3>
                    <p class="text-gray-400 mt-2">MySQL, PostgreSQL</p>
                </div>
                <div class="bg-gradient-to-br from-gray-800 to-gray-700 p-8 rounded-xl text-center shadow-lg transform hover:scale-105 transition-all duration-300" data-aos="zoom-in" data-aos-delay="600">
                    <i class="fas fa-leaf text-6xl text-green-500 mb-4"></i>
                    <h3 class="text-emerald-400 text-xl sm:text-2xl font-semibold">MongoDB</h3>
                    <p class="text-gray-400 mt-2">Aggregation, Indexing</p>
                </div>
            </div>
        </section>

        <section id="portfolio" class="mb-24 sm:mb-32">
            <h2 class="text-3xl sm:text-4xl md:text-5xl font-bold text-white mb-8 sm:mb-12 text-center" data-aos="fade-up">Portfolio</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8">
                <div class="bg-gradient-to-br from-gray-800 to-gray-700 p-6 rounded-lg shadow-lg hover:shadow-xl transition duration-300 transform hover:-translate-y-2" data-aos="fade-up" data-aos-delay="100">
                    <h3 class="text-xl sm:text-2xl font-semibold text-emerald-400 mb-4">E-commerce Platform</h3>
                    <p class="text-gray-400 mb-4">A fully responsive e-commerce solution built with React, Node.js, and MongoDB. Features include user authentication, product management, and secure payment integration.</p>
                    <div class="flex flex-wrap gap-2">
                        <span class="bg-gray-700 text-emerald-400 px-2 py-1 rounded text-sm">React</span>
                        <span class="bg-gray-700 text-emerald-400 px-2 py-1 rounded text-sm">Node.js</span>
                        <span class="bg-gray-700 text-emerald-400 px-2 py-1 rounded text-sm">MongoDB</span>
                    </div>
                </div>
                <div class="bg-gradient-to-br from-gray-800 to-gray-700 p-6 rounded-lg shadow-lg hover:shadow-xl transition duration-300 transform hover:-translate-y-2" data-aos="fade-up" data-aos-delay="100">
                    <h3 class="text-xl sm:text-2xl font-semibold text-emerald-400 mb-4">Task Management App</h3>
                    <p class="text-gray-400 mb-4">A collaborative task management application using Vue.js and Firebase. Includes real-time updates, task assignment, and progress tracking features.</p>
                    <div class="flex flex-wrap gap-2">
                        <span class="bg-gray-700 text-emerald-400 px-2 py-1 rounded text-sm">Vue.js</span>
                        <span class="bg-gray-700 text-emerald-400 px-2 py-1 rounded text-sm">Firebase</span>
                        <span class="bg-gray-700 text-emerald-400 px-2 py-1 rounded text-sm">Vuex</span>
                    </div>
                </div>
                <div class="bg-gradient-to-br from-gray-800 to-gray-700 p-6 rounded-lg shadow-lg hover:shadow-xl transition duration-300 transform hover:-translate-y-2" data-aos="fade-up" data-aos-delay="100">
                    <h3 class="text-xl sm:text-2xl font-semibold text-emerald-400 mb-4">AI-powered Chatbot</h3>
                    <p class="text-gray-400 mb-4">An intelligent chatbot leveraging natural language processing, built with Python and TensorFlow. Integrated with a customer service platform for automated support.</p>
                    <div class="flex flex-wrap gap-2">
                        <span class="bg-gray-700 text-emerald-400 px-2 py-1 rounded text-sm">Python</span>
                        <span class="bg-gray-700 text-emerald-400 px-2 py-1 rounded text-sm">TensorFlow</span>
                        <span class="bg-gray-700 text-emerald-400 px-2 py-1 rounded text-sm">NLP</span>
                    </div>
                </div>
            </div>
        </section>

        <section id="experience" class="mb-24 sm:mb-32">
            <h2 class="text-3xl sm:text-4xl md:text-5xl font-bold text-white mb-8 sm:mb-12 text-center" data-aos="fade-up">Experience</h2>
            <div class="space-y-8 sm:space-y-12">
                <div class="bg-gradient-to-br from-gray-800 to-gray-700 p-6 sm:p-8 rounded-lg shadow-lg" data-aos="fade-up" data-aos-delay="100">
                    <h3 class="text-2xl sm:text-3xl font-semibold text-emerald-400 mb-4">Senior Full Stack Developer</h3>
                    <p class="text-gray-400 mb-4 text-lg sm:text-xl">TechCorp Inc. | 2019 - Present</p>
                    <ul class="list-disc list-inside text-gray-300 space-y-2">
                        <li>Led development of scalable web applications using React and Node.js</li>
                        <li>Implemented CI/CD pipelines, improving deployment efficiency by 40%</li>
                        <li>Mentored junior developers and conducted code reviews</li>
                    </ul>
                </div>
                <div class="bg-gradient-to-br from-gray-800 to-gray-700 p-6 sm:p-8 rounded-lg shadow-lg" data-aos="fade-up" data-aos-delay="100">
                    <h3 class="text-2xl sm:text-3xl font-semibold text-emerald-400 mb-4">Full Stack Developer</h3>
                    <p class="text-gray-400 mb-4 text-lg sm:text-xl">WebSolutions Co. | 2016 - 2019</p>
                    <ul class="list-disc list-inside text-gray-300 space-y-2">
                        <li>Developed and maintained multiple client websites using various technologies</li>
                        <li>Optimized database queries, resulting in 30% faster load times</li>
                        <li>Collaborated with design team to implement responsive UI/UX designs</li>
                    </ul>
                </div>
            </div>
        </section>

        <section id="contact" class="mb-24 sm:mb-32">
            <h2 class="text-3xl sm:text-4xl md:text-5xl font-bold text-white mb-8 sm:mb-12 text-center" data-aos="fade-up">Contact Me</h2>
            <form class="max-w-lg mx-auto bg-gradient-to-br from-gray-800 to-gray-700 p-6 sm:p-8 rounded-lg shadow-lg" data-aos="fade-up" data-aos-delay="100">
                <div class="mb-4">
                    <label for="name" class="block text-gray-400 mb-2">Name</label>
                    <input type="text" id="name" name="name" class="w-full bg-gray-800 rounded px-3 py-2 text-gray-300 focus:outline-none focus:ring-2 focus:ring-emerald-400" required>
                </div>
                <div class="mb-4">
                    <label for="email" class="block text-gray-400 mb-2">Email</label>
                    <input type="email" id="email" name="email" class="w-full bg-gray-800 rounded px-3 py-2 text-gray-300 focus:outline-none focus:ring-2 focus:ring-emerald-400" required>
                </div>
                <div class="mb-4">
                    <label for="message" class="block text-gray-400 mb-2">Message</label>
                    <textarea id="message" name="message" rows="4" class="w-full bg-gray-800 rounded px-3 py-2 text-gray-300 focus:outline-none focus:ring-2 focus:ring-emerald-400" required></textarea>
                </div>
                <button type="submit" class="w-full bg-gradient-to-r from-emerald-500 to-blue-500 text-white px-6 py-3 rounded-lg text-lg font-semibold hover:from-emerald-600 hover:to-blue-600 transition duration-300 transform hover:-translate-y-1">Send Message</button>
            </form>
        </section>
    </main>
</div>

<script>
    AOS.init({
        duration: 1000,
        once: true,
    });
</script>
</body>

</html>
