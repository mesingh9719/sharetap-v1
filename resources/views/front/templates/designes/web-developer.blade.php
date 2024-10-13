<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    @vite('resources/css/app.css')
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script>
    <title>John Doe | UI/UX Developer</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .gradient-bg {
            background: linear-gradient(90deg, #4F46E5, #7C3AED);
        }
    </style>
</head>

<body class="font-inter bg-gray-50">
<header class="relative">
    <div class="cover-image h-80 bg-cover bg-center" style="background-image: url('https://images.pexels.com/photos/1765033/pexels-photo-1765033.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1');"></div>
    <div class="profile-info absolute bottom-0 left-1/2 transform -translate-x-1/2 translate-y-1/2 text-cente">
        <img src="https://images.pexels.com/photos/943084/pexels-photo-943084.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="John Doe" class="profile-picture w-40 h-40 rounded-full border-4 border-indigo-500 mx-auto mb-4">
        <h1 class="text-3xl font-bold text-gray-800">John Doe</h1>
        <p class="text-xl text-indigo-600">UI/UX Developer</p>
    </div>
</header>

<nav class="gradient-bg py-4 mt-32 sticky top-0 z-10">
    <ul class="flex justify-center space-x-8">
        <li><a href="#about" class="text-white hover:text-indigo-200 transition duration-300">About</a></li>
        <li><a href="#services" class="text-white hover:text-indigo-200 transition duration-300">Services</a></li>
        <li><a href="#portfolio" class="text-white hover:text-indigo-200 transition duration-300">Portfolio</a></li>
        <li><a href="#testimonials" class="text-white hover:text-indigo-200 transition duration-300">Testimonials</a></li>
        <li><a href="#contact" class="text-white hover:text-indigo-200 transition duration-300">Contact</a></li>
    </ul>
</nav>

<main class="container mx-auto px-4 py-12">
    <section id="about" class="mb-16" data-aos="fade-up">
        <h2 class="text-4xl font-bold mb-6 text-center text-gray-800">About Me</h2>
        <p class="mb-6 text-lg text-gray-600 max-w-3xl mx-auto text-center">I'm a passionate UI/UX developer with 5+ years of experience creating intuitive and visually appealing digital experiences. My goal is to bridge the gap between user needs and business objectives through thoughtful design and efficient code.</p>
        <div class="basic-info grid grid-cols-1 md:grid-cols-3 gap-6 max-w-3xl mx-auto">
            <div class="bg-white p-4 rounded-lg shadow-md text-center">
                <i class="fas fa-map-marker-alt text-2xl text-indigo-500 mb-2"></i>
                <p>New York, NY</p>
            </div>
            <div class="bg-white p-4 rounded-lg shadow-md text-center">
                <i class="fas fa-envelope text-2xl text-indigo-500 mb-2"></i>
                <p>john@example.com</p>
            </div>
            <div class="bg-white p-4 rounded-lg shadow-md text-center">
                <i class="fas fa-phone text-2xl text-indigo-500 mb-2"></i>
                <p>(123) 456-7890</p>
            </div>
        </div>
    </section>

    <section id="services" class="mb-16" data-aos="fade-up">
        <h2 class="text-4xl font-bold mb-8 text-center text-gray-800">My Services</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="service-item p-6 bg-white rounded-lg shadow-md transition duration-300 hover:shadow-lg hover:transform hover:-translate-y-1">
                <i class="fas fa-paint-brush text-4xl mb-4 text-indigo-500"></i>
                <h3 class="text-2xl font-semibold mb-3 text-gray-800">UI Design</h3>
                <p class="text-gray-600">Creating visually stunning and intuitive user interfaces that captivate and engage.</p>
            </div>
            <div class="service-item p-6 bg-white rounded-lg shadow-md transition duration-300 hover:shadow-lg hover:transform hover:-translate-y-1">
                <i class="fas fa-users text-4xl mb-4 text-indigo-500"></i>
                <h3 class="text-2xl font-semibold mb-3 text-gray-800">UX Research</h3>
                <p class="text-gray-600">Conducting in-depth user research to inform and enhance design decisions.</p>
            </div>
            <div class="service-item p-6 bg-white rounded-lg shadow-md transition duration-300 hover:shadow-lg hover:transform hover:-translate-y-1">
                <i class="fas fa-code text-4xl mb-4 text-indigo-500"></i>
                <h3 class="text-2xl font-semibold mb-3 text-gray-800">Front-end Development</h3>
                <p class="text-gray-600">Implementing designs with clean, efficient, and responsive code.</p>
            </div>
        </div>
    </section>

    <section id="portfolio" class="mb-16" data-aos="fade-up">
        <h2 class="text-4xl font-bold mb-8 text-center text-gray-800">My Portfolio</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="portfolio-item bg-white rounded-lg overflow-hidden shadow-md transition duration-300 hover:shadow-lg">
                <img src="https://images.pexels.com/photos/8250924/pexels-photo-8250924.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Project 1" class="w-full h-56 object-cover">
                <div class="p-6">
                    <h3 class="text-2xl font-semibold mb-2 text-gray-800">Project 1</h3>
                    <p class="text-gray-600 mb-4">An innovative web application designed to streamline workflow and boost productivity.</p>
                    <a href="#" class="text-indigo-500 font-semibold hover:text-indigo-600 transition duration-300">View Project <i class="fas fa-arrow-right ml-1"></i></a>
                </div>
            </div>
            <div class="portfolio-item bg-white rounded-lg overflow-hidden shadow-md transition duration-300 hover:shadow-lg">
                <img src="https://images.pexels.com/photos/12914430/pexels-photo-12914430.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Project 2" class="w-full h-56 object-cover">
                <div class="p-6">
                    <h3 class="text-2xl font-semibold mb-2 text-gray-800">Project 2</h3>
                    <p class="text-gray-600 mb-4">A responsive e-commerce platform with a focus on user experience and conversion optimization.</p>
                    <a href="#" class="text-indigo-500 font-semibold hover:text-indigo-600 transition duration-300">View Project <i class="fas fa-arrow-right ml-1"></i></a>
                </div>
            </div>
            <!-- Add one more portfolio item for balance -->
            <div class="portfolio-item bg-white rounded-lg overflow-hidden shadow-md transition duration-300 hover:shadow-lg">
                <img src="https://images.pexels.com/photos/196644/pexels-photo-196644.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Project 3" class="w-full h-56 object-cover">
                <div class="p-6">
                    <h3 class="text-2xl font-semibold mb-2 text-gray-800">Project 3</h3>
                    <p class="text-gray-600 mb-4">A mobile app redesign that significantly improved user engagement and retention rates.</p>
                    <a href="#" class="text-indigo-500 font-semibold hover:text-indigo-600 transition duration-300">View Project <i class="fas fa-arrow-right ml-1"></i></a>
                </div>
            </div>
        </div>
    </section>

    <section id="testimonials" class="mb-16" data-aos="fade-up">
        <h2 class="text-4xl font-bold mb-8 text-center text-gray-800">Testimonials</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div class="testimonial-item p-6 bg-white rounded-lg shadow-md transition duration-300 hover:shadow-lg">
                <i class="fas fa-quote-left text-4xl mb-4 text-indigo-500"></i>
                <p class="mb-4 text-gray-600">"John is an exceptional UI/UX developer. His attention to detail and user-centric approach resulted in a significant improvement in our app's usability."</p>
                <div class="flex items-center">
                    <img src="https://randomuser.me/api/portraits/women/65.jpg" alt="Jane Smith" class="w-12 h-12 rounded-full mr-4">
                    <div>
                        <p class="font-semibold text-gray-800">Jane Smith</p>
                        <p class="text-sm text-gray-600">CEO of TechCorp</p>
                    </div>
                </div>
            </div>
            <div class="testimonial-item p-6 bg-white rounded-lg shadow-md transition duration-300 hover:shadow-lg">
                <i class="fas fa-quote-left text-4xl mb-4 text-indigo-500"></i>
                <p class="mb-4 text-gray-600">"Working with John was a pleasure. He quickly understood our needs and delivered a beautiful, functional design that exceeded our expectations."</p>
                <div class="flex items-center">
                    <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Mike Johnson" class="w-12 h-12 rounded-full mr-4">
                    <div>
                        <p class="font-semibold text-gray-800">Mike Johnson</p>
                        <p class="text-sm text-gray-600">Founder of StartupX</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="business-hours" class="mb-16" data-aos="fade-up">
        <h2 class="text-4xl font-bold mb-8 text-center text-gray-800">Business Hours</h2>
        <div class="max-w-2xl mx-auto bg-white rounded-lg shadow-md p-6">
            <ul class="space-y-4">
                <li class="flex justify-between items-center border-b pb-2">
                    <span class="font-semibold text-gray-800">Monday - Friday</span>
                    <span class="text-indigo-600">9:00 AM - 5:00 PM</span>
                </li>
                <li class="flex justify-between items-center border-b pb-2">
                    <span class="font-semibold text-gray-800">Saturday</span>
                    <span class="text-indigo-600">10:00 AM - 2:00 PM</span>
                </li>
                <li class="flex justify-between items-center">
                    <span class="font-semibold text-gray-800">Sunday</span>
                    <span class="text-red-500">Closed</span>
                </li>
            </ul>
        </div>
    </section>

    <section id="contact" class="mb-16" data-aos="fade-up">
        <h2 class="text-4xl font-bold mb-8 text-center text-gray-800">Contact Me</h2>
        <form class="max-w-2xl mx-auto bg-white rounded-lg shadow-md p-8">
            <div class="mb-6">
                <label for="name" class="block mb-2 text-sm font-medium text-gray-700">Name</label>
                <input type="text" id="name" name="name" class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500" required>
            </div>
            <div class="mb-6">
                <label for="email" class="block mb-2 text-sm font-medium text-gray-700">Email</label>
                <input type="email" id="email" name="email" class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500" required>
            </div>
            <div class="mb-6">
                <label for="message" class="block mb-2 text-sm font-medium text-gray-700">Message</label>
                <textarea id="message" name="message" rows="4" class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500" required></textarea>
            </div>
            <button type="submit" class="w-full bg-indigo-600 text-white px-6 py-3 rounded-md font-semibold hover:bg-indigo-700 transition duration-300">Send Message</button>
        </form>
    </section>

    <section id="qr-code" class="mb-16 text-center" data-aos="fade-up">
        <h2 class="text-4xl font-bold mb-8 text-gray-800">Scan My QR Code</h2>
        <div class="bg-white rounded-lg shadow-md p-8 inline-block">
            <img src="{{ asset('assets/images/logo/dummy-qr-code.png') }}" alt="QR Code" class="w-48 h-48 mx-auto">
            <p class="mt-4 text-gray-600">Scan this QR code to save my contact information</p>
        </div>
    </section>
</main>

<footer class="gradient-bg text-white py-12">
    <div class="container mx-auto px-4">
        <div class="social-links flex justify-center space-x-6 mb-6">
            <a href="#" aria-label="LinkedIn" class="text-3xl hover:text-indigo-200 transition duration-300"><i class="fab fa-linkedin"></i></a>
            <a href="#" aria-label="GitHub" class="text-3xl hover:text-indigo-200 transition duration-300"><i class="fab fa-github"></i></a>
            <a href="#" aria-label="Dribbble" class="text-3xl hover:text-indigo-200 transition duration-300"><i class="fab fa-dribbble"></i></a>
            <a href="#" aria-label="Behance" class="text-3xl hover:text-indigo-200 transition duration-300"><i class="fab fa-behance"></i></a>
        </div>
        <p class="text-center text-lg">&copy; 2023 John Doe. All rights reserved.</p>
    </div>
</footer>

<script>
    // Initialize AOS (Animate on Scroll)
    AOS.init({
        duration: 1000,
        once: true,
    });

    // Smooth scrolling for navigation links
    document.querySelectorAll('nav a').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            document.querySelector(this.getAttribute('href')).scrollIntoView({
                behavior: 'smooth'
            });
        });
    });
</script>
</body>

</html>
