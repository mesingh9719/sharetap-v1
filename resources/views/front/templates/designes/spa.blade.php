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
        }
    </style>
</head>

<body class="bg-gradient-to-b from-teal-900 to-teal-800 text-white min-h-screen">
<div class="max-w-md mx-auto p-4">
    <!-- Header Image and Profile -->
    <div class="relative mb-24">
        <!-- Cover Image -->
        <div class="h-64 bg-cover bg-center rounded-t-lg shadow-lg" style="background-image: url('https://images.pexels.com/photos/1389429/pexels-photo-1389429.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1');"></div>

        <!-- Profile Section -->
        <div class="absolute bottom-0 left-1/2 transform -translate-x-1/2 translate-y-1/2 text-center">
            <img src="https://images.pexels.com/photos/2173382/pexels-photo-2173382.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Profile" class="w-32 h-32 rounded-full border-4 border-white mx-auto mb-4 shadow-lg">
            <h2 class="text-2xl font-bold mb-1">Ezra Miller</h2>
            <p class="text-sm text-gray-300">Hair Stylist at Abc Salon</p>
        </div>
    </div>

    <!-- Description -->
    <p class="text-sm mb-6 text-gray-300 text-center italic">
        "Transforming hair, one client at a time. With over 10 years of experience, I'm passionate about creating styles that make you feel confident and beautiful."
    </p>

    <!-- Social Icons -->
    <div class="flex justify-center space-x-4 mb-8">
        <a href="#" class="bg-gray-700 p-3 rounded-full hover:bg-orange-400 transition duration-300"><i class="fab fa-facebook-f text-white"></i></a>
        <a href="#" class="bg-gray-700 p-3 rounded-full hover:bg-orange-400 transition duration-300"><i class="fab fa-whatsapp text-white"></i></a>
        <a href="#" class="bg-gray-700 p-3 rounded-full hover:bg-orange-400 transition duration-300"><i class="fab fa-linkedin-in text-white"></i></a>
        <a href="#" class="bg-gray-700 p-3 rounded-full hover:bg-orange-400 transition duration-300"><i class="fab fa-instagram text-white"></i></a>
        <a href="#" class="bg-gray-700 p-3 rounded-full hover:bg-orange-400 transition duration-300"><i class="fab fa-twitter text-white"></i></a>
    </div>

    <!-- Contact -->
    <h3 class="text-xl font-bold mb-4 relative">
        <span class="bg-orange-400 absolute left-0 top-0 bottom-0 w-1"></span>
        <span class="ml-3">Contact</span>
    </h3>
    <div class="grid grid-cols-2 gap-4 mb-8">
        <div class="flex items-center bg-gray-800 p-3 rounded-lg hover:bg-gray-700 transition duration-300">
            <i class="fas fa-envelope text-orange-400 mr-3 text-xl"></i>
            <div>
                <p class="text-xs text-gray-400">E-mail address</p>
                <p class="text-sm">ezra@abcsalon.com</p>
            </div>
        </div>
        <div class="flex items-center bg-gray-800 p-3 rounded-lg hover:bg-gray-700 transition duration-300">
            <i class="fas fa-phone text-orange-400 mr-3 text-xl"></i>
            <div>
                <p class="text-xs text-gray-400">Mobile Number</p>
                <p class="text-sm">+1 (407) 846-1474</p>
            </div>
        </div>
        <div class="flex items-center bg-gray-800 p-3 rounded-lg hover:bg-gray-700 transition duration-300">
            <i class="fas fa-birthday-cake text-orange-400 mr-3 text-xl"></i>
            <div>
                <p class="text-xs text-gray-400">Date of Birth</p>
                <p class="text-sm">June 12, 1990</p>
            </div>
        </div>
        <div class="flex items-center bg-gray-800 p-3 rounded-lg hover:bg-gray-700 transition duration-300">
            <i class="fas fa-map-marker-alt text-orange-400 mr-3 text-xl"></i>
            <div>
                <p class="text-xs text-gray-400">Location</p>
                <p class="text-sm">New York, USA</p>
            </div>
        </div>
    </div>

    <!-- Our Services -->
    <h3 class="text-xl font-bold mb-4 relative">
        <span class="bg-orange-400 absolute left-0 top-0 bottom-0 w-1"></span>
        <span class="ml-3">Our Services</span>
    </h3>
    <div class="grid grid-cols-2 gap-4 mb-8">
        <div class="bg-white p-4 rounded-lg text-center shadow-lg hover:shadow-xl transition duration-300">
            <i class="fas fa-spa text-orange-400 text-3xl mb-2"></i>
            <h4 class="font-bold text-teal-900 mb-2">Hair Spa</h4>
            <p class="text-sm text-gray-600">Revitalize your hair with our luxurious spa treatment.</p>
        </div>
        <div class="bg-white p-4 rounded-lg text-center shadow-lg hover:shadow-xl transition duration-300">
            <i class="fas fa-cut text-orange-400 text-3xl mb-2"></i>
            <h4 class="font-bold text-teal-900 mb-2">Hair Cut</h4>
            <p class="text-sm text-gray-600">Get a stylish new look with our expert cutting services.</p>
        </div>
    </div>

    <!-- Products -->
    <h3 class="text-xl font-bold mb-4 relative">
        <span class="bg-orange-400 absolute left-0 top-0 bottom-0 w-1"></span>
        <span class="ml-3">Our Products</span>
    </h3>
    <div class="grid grid-cols-2 gap-4 mb-8">
        <div class="bg-white p-4 rounded-lg">
            <img src="https://images.pexels.com/photos/2173382/pexels-photo-2173382.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Product 1" class="w-full h-32 object-cover rounded-lg mb-2">
            <h4 class="font-bold mb-1 text-teal-900">Product 1</h4>
            <p class="text-sm text-gray-600">$19.99</p>
        </div>
        <div class="bg-white p-4 rounded-lg">
            <img src="https://images.pexels.com/photos/92866/pexels-photo-92866.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Product 2" class="w-full h-32 object-cover rounded-lg mb-2">
            <h4 class="font-bold mb-1 text-teal-900">Product 2</h4>
            <p class="text-sm text-gray-600">$24.99</p>
        </div>
    </div>

    <!-- Testimonials -->
    <h3 class="text-xl font-bold mb-4 relative">
        <span class="bg-orange-400 absolute left-0 top-0 bottom-0 w-1"></span>
        <span class="ml-3">Testimonials</span>
    </h3>
    <div class="space-y-4 mb-8">
        <div class="bg-gray-800 p-4 rounded-lg">
            <p class="text-sm italic mb-2 text-gray-300">"Excellent service! Highly recommended."</p>
            <p class="text-xs text-orange-400">- John Doe</p>
        </div>
        <div class="bg-gray-800 p-4 rounded-lg">
            <p class="text-sm italic mb-2 text-gray-300">"Professional and timely. Great experience!"</p>
            <p class="text-xs text-orange-400">- Jane Smith</p>
        </div>
    </div>

    <!-- Business Hours -->
    <h3 class="text-xl font-bold mb-4 relative">
        <span class="bg-orange-400 absolute left-0 top-0 bottom-0 w-1"></span>
        <span class="ml-3">Business Hours</span>
    </h3>
    <div class="bg-gray-800 p-4 rounded-lg mb-8">
        <ul class="space-y-2 text-gray-300">
            <li class="flex justify-between">
                <span>Monday - Friday</span>
                <span>9:00 AM - 6:00 PM</span>
            </li>
            <li class="flex justify-between">
                <span>Saturday</span>
                <span>10:00 AM - 4:00 PM</span>
            </li>
            <li class="flex justify-between">
                <span>Sunday</span>
                <span>Closed</span>
            </li>
        </ul>
    </div>

    <!-- Contact Us -->
    <h3 class="text-xl font-bold mb-4 relative">
        <span class="bg-orange-400 absolute left-0 top-0 bottom-0 w-1"></span>
        <span class="ml-3">Contact Us</span>
    </h3>
    <form class="space-y-4 mb-8">
        <div>
            <label for="name" class="block text-sm font-medium mb-1 text-gray-300">Name</label>
            <input type="text" id="name" name="name" class="w-full bg-gray-700 rounded-lg p-2 text-white">
        </div>
        <div>
            <label for="email" class="block text-sm font-medium mb-1 text-gray-300">Email</label>
            <input type="email" id="email" name="email" class="w-full bg-gray-700 rounded-lg p-2 text-white">
        </div>
        <div>
            <label for="message" class="block text-sm font-medium mb-1 text-gray-300">Message</label>
            <textarea id="message" name="message" rows="4" class="w-full bg-gray-700 rounded-lg p-2 text-white"></textarea>
        </div>
        <button type="submit" class="w-full bg-orange-400 text-white py-2 rounded-lg font-bold">Send Message</button>
    </form>

    <!-- Make an Appointment -->
    <h3 class="text-xl font-bold mb-4 relative">
        <span class="bg-orange-400 absolute left-0 top-0 bottom-0 w-1"></span>
        <span class="ml-3">Make an Appointment</span>
    </h3>
    <div class="bg-gray-800 p-4 rounded-lg mb-8 shadow-lg">
        <input type="date" class="w-full bg-gray-700 rounded-lg p-2 text-white mb-4">
        <select class="w-full bg-gray-700 rounded-lg p-2 text-white mb-4">
            <option value="">Select a service</option>
            <option value="haircut">Haircut</option>
            <option value="coloring">Hair Coloring</option>
            <option value="styling">Hair Styling</option>
            <option value="spa">Hair Spa</option>
        </select>
        <button class="w-full bg-orange-400 text-white py-2 rounded-lg font-bold hover:bg-orange-500 transition duration-300">Book Now</button>
    </div>
</div>

<footer class="bg-teal-950 text-center py-4 mt-8">
    <p class="text-sm text-gray-400">&copy; 2023 Abc Salon. All rights reserved.</p>
</footer>
</body>

</html>
