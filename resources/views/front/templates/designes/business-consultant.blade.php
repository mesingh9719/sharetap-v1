<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    @vite('resources/css/app.css')
    <!-- Add Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Add custom fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f0f0f0;
        }
    </style>
</head>

<body class="bg-gray-100 text-gray-800 min-h-screen">
<div class="max-w-md mx-auto bg-white shadow-lg">
    <!-- Header Image -->
    <div class="relative">
        <img src="https://images.pexels.com/photos/28626107/pexels-photo-28626107/free-photo-of-chrysler-building-in-new-york-city-skyline.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Header" class="w-full h-48 object-cover">
        <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black to-transparent p-4">
            <h1 class="text-white text-2xl font-bold">Leslie Alexander</h1>
            <p class="text-white text-sm">Business Consultant</p>
        </div>
    </div>

    <!-- Profile Section -->
    <div class="p-4">
        <div class="flex items-center justify-between mb-4">
            <img src="https://images.pexels.com/photos/10472582/pexels-photo-10472582.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Leslie Alexander" class="w-24 h-24 rounded-full border-4 border-white shadow-lg">
            <div class="flex space-x-2">
                <a href="#" class="bg-blue-500 p-2 rounded-full"><i class="fab fa-facebook-f text-white"></i></a>
                <a href="#" class="bg-red-500 p-2 rounded-full"><i class="fab fa-instagram text-white"></i></a>
                <a href="#" class="bg-blue-400 p-2 rounded-full"><i class="fab fa-linkedin-in text-white"></i></a>
                <a href="#" class="bg-blue-300 p-2 rounded-full"><i class="fab fa-twitter text-white"></i></a>
                <a href="#" class="bg-red-600 p-2 rounded-full"><i class="fab fa-youtube text-white"></i></a>
            </div>
        </div>

        <!-- Contact Information -->
        <div class="space-y-2 mb-4">
            <div class="flex items-center">
                <i class="fas fa-envelope text-orange-500 mr-2"></i>
                <span>leslie@example.com</span>
            </div>
            <div class="flex items-center">
                <i class="fas fa-phone text-orange-500 mr-2"></i>
                <span>+1 (555) 000-0000</span>
            </div>
            <div class="flex items-center">
                <i class="fas fa-globe text-orange-500 mr-2"></i>
                <span>www.example.com</span>
            </div>
            <div class="flex items-center">
                <i class="fas fa-map-marker-alt text-orange-500 mr-2"></i>
                <span>New York, USA</span>
            </div>
        </div>

        <!-- Our Services -->
        <div class="mb-6">
            <h3 class="text-xl font-bold mb-4 text-gray-800">Our Services</h3>
            <div class="grid grid-cols-2 gap-4">
                <div class="bg-orange-100 p-4 rounded-lg text-center">
                    <i class="fas fa-chart-line text-orange-500 text-3xl mb-2"></i>
                    <h4 class="font-bold text-gray-800 mb-2">Strategy Consulting</h4>
                    <p class="text-xs text-gray-600">Expert guidance for business growth and optimization.</p>
                </div>
                <div class="bg-blue-100 p-4 rounded-lg text-center">
                    <i class="fas fa-bullhorn text-blue-500 text-3xl mb-2"></i>
                    <h4 class="font-bold text-gray-800 mb-2">Marketing Consulting</h4>
                    <p class="text-xs text-gray-600">Innovative strategies to boost your market presence.</p>
                </div>
            </div>
        </div>

        <!-- Make an Appointment -->
        <div class="mb-6">
            <h3 class="text-xl font-bold mb-4 text-gray-800">Make an Appointment</h3>
            <div class="bg-gray-100 p-4 rounded-lg">
                <input type="date" class="w-full bg-white rounded-lg p-2 text-gray-800 mb-4 border border-gray-300">
                <div class="grid grid-cols-2 gap-4 mb-4">
                    <div class="bg-white p-2 rounded-lg text-center border border-gray-300">
                        <p class="font-bold">09:00 - 10:00</p>
                    </div>
                    <div class="bg-white p-2 rounded-lg text-center border border-gray-300">
                        <p class="font-bold">10:00 - 11:00</p>
                    </div>
                    <div class="bg-white p-2 rounded-lg text-center border border-gray-300">
                        <p class="font-bold">11:00 - 12:00</p>
                    </div>
                    <div class="bg-white p-2 rounded-lg text-center border border-gray-300">
                        <p class="font-bold">12:00 - 13:00</p>
                    </div>
                </div>
                <button class="w-full bg-orange-500 text-white py-2 rounded-full font-bold hover:bg-orange-600 transition duration-300">Make Appointment</button>
            </div>
        </div>

        <!-- Gallery -->
        <div class="mb-6">
            <h3 class="text-xl font-bold mb-4 text-gray-800">Gallery</h3>
            <div class="grid grid-cols-2 gap-4">
                <img src="https://images.pexels.com/photos/19797271/pexels-photo-19797271/free-photo-of-pink-and-peach-stationery.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Gallery 1" class="w-full h-32 object-cover rounded-lg">
                <img src="https://images.pexels.com/photos/8364021/pexels-photo-8364021.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Gallery 2" class="w-full h-32 object-cover rounded-lg">
            </div>
        </div>

        <!-- Testimonials -->
        <div class="mb-6">
            <h3 class="text-xl font-bold mb-4 text-gray-800">Testimonials</h3>
            <div class="bg-gray-100 p-4 rounded-lg relative">
                <p class="text-sm italic mb-2 text-gray-700">"Leslie's consulting services have been invaluable to our company's growth. Her insights and strategies have helped us achieve remarkable results."</p>
                <p class="text-xs text-gray-600">- John Doe, CEO</p>
                <img src="https://images.pexels.com/photos/1516680/pexels-photo-1516680.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="John Doe" class="w-12 h-12 rounded-full absolute -top-6 -right-6 border-4 border-white">
            </div>
        </div>

        <!-- Products -->
        <div class="mb-6">
            <h3 class="text-xl font-bold mb-4 text-gray-800">Products</h3>
            <div class="grid grid-cols-2 gap-4">
                <div class="bg-white p-4 rounded-lg shadow-md">
                    <img src="https://images.pexels.com/photos/28626107/pexels-photo-28626107/free-photo-of-chrysler-building-in-new-york-city-skyline.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="E-Book" class="w-full h-32 object-cover rounded-lg mb-2">
                    <h4 class="font-bold mb-1">E-Book</h4>
                    <p class="text-sm text-gray-600">$19.99</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow-md">
                    <img src="https://images.pexels.com/photos/92866/pexels-photo-92866.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Video Course" class="w-full h-32 object-cover rounded-lg mb-2">
                    <h4 class="font-bold mb-1">Video Course</h4>
                    <p class="text-sm text-gray-600">$49.99</p>
                </div>
            </div>
        </div>

        <!-- Blog -->
        <div class="mb-6">
            <h3 class="text-xl font-bold mb-4 text-gray-800">Blog</h3>
            <div class="space-y-4">
                <div class="flex items-center space-x-4">
                    <img src="https://images.pexels.com/photos/8364021/pexels-photo-8364021.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Blog 1" class="w-24 h-24 object-cover rounded-lg">
                    <div>
                        <h4 class="font-bold mb-1">Business Strategy</h4>
                        <p class="text-sm text-gray-600">Tips for developing effective...</p>
                    </div>
                </div>
                <div class="flex items-center space-x-4">
                    <img src="https://images.pexels.com/photos/1001914/pexels-photo-1001914.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Blog 2" class="w-24 h-24 object-cover rounded-lg">
                    <div>
                        <h4 class="font-bold mb-1">Marketing Trends</h4>
                        <p class="text-sm text-gray-600">Latest trends in digital marketing...</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Business Hours -->
        <div class="mb-6">
            <h3 class="text-xl font-bold mb-4 text-gray-800">Business Hours</h3>
            <div class="bg-gray-100 p-4 rounded-lg">
                <ul class="space-y-2">
                    <li class="flex justify-between">
                        <span>Monday</span>
                        <span>09:00 AM - 05:00 PM</span>
                    </li>
                    <li class="flex justify-between">
                        <span>Tuesday</span>
                        <span>09:00 AM - 05:00 PM</span>
                    </li>
                    <!-- ... other days ... -->
                </ul>
            </div>
        </div>

        <!-- QR Code -->
        <div class="mb-6 text-center">
            <img src="{{ asset('assets/images/logo/dummy-qr-code.png') }}"  alt="QR Code" class="w-32 h-32 mx-auto mb-2">
            <button class="bg-orange-500 text-white py-2 px-4 rounded-full font-bold hover:bg-orange-600 transition duration-300">Save Contact</button>
        </div>

        <!-- Contact Us Form -->
        <div class="mb-6">
            <h3 class="text-xl font-bold mb-4 text-gray-800">Contact Us</h3>
            <form class="space-y-4">
                <input type="text" placeholder="Full Name" class="w-full bg-gray-100 rounded-lg p-2 text-gray-800">
                <input type="email" placeholder="Email Address" class="w-full bg-gray-100 rounded-lg p-2 text-gray-800">
                <input type="tel" placeholder="Phone Number" class="w-full bg-gray-100 rounded-lg p-2 text-gray-800">
                <textarea placeholder="Your Message" rows="4" class="w-full bg-gray-100 rounded-lg p-2 text-gray-800"></textarea>
                <button type="submit" class="w-full bg-orange-500 text-white py-2 rounded-full font-bold hover:bg-orange-600 transition duration-300">Send Message</button>
            </form>
        </div>

        <!-- Create Your vCard -->
        <div class="text-center mb-6">
            <a href="#" class="bg-blue-500 text-white py-2 px-4 rounded-full font-bold hover:bg-blue-600 transition duration-300">Create Your vCard</a>
        </div>
    </div>
</div>

<footer class="bg-orange-500 text-center py-4 mt-8">
    <p class="text-sm text-white">Add to Contacts</p>
</footer>
</body>

</html>
