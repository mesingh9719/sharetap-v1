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

<body class="bg-white text-gray-800 min-h-screen">
<div class="max-w-md mx-auto p-4">
    <!-- Header Image -->
    <div class="mb-8">
        <img src="https://images.pexels.com/photos/1001914/pexels-photo-1001914.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Classroom" class="w-full h-48 object-cover rounded-lg">
    </div>

    <!-- Profile Section -->
    <div class="flex items-center mb-6">
        <img src="https://images.pexels.com/photos/415829/pexels-photo-415829.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Amelia Jackson" class="w-24 h-24 rounded-full border-4 border-white shadow-lg">
        <div class="ml-4">
            <h2 class="text-2xl font-bold text-blue-600">Amelia Jackson</h2>
            <p class="text-sm text-gray-600">Preschool Teacher</p>
        </div>
    </div>

    <!-- Description -->
    <p class="text-sm mb-6 text-gray-600">
        Amelia Jackson has been the inspiring preschool teacher at Sunshine Kids for over 5 years. Her passion for early childhood education and creative teaching methods make her a favorite among both kids and parents.
    </p>

    <!-- Social Icons -->
    <div class="flex space-x-2 mb-8">
        <a href="#" class="bg-blue-500 p-2 rounded-full"><i class="fab fa-facebook-f text-white"></i></a>
        <a href="#" class="bg-pink-500 p-2 rounded-full"><i class="fab fa-instagram text-white"></i></a>
        <a href="#" class="bg-blue-400 p-2 rounded-full"><i class="fab fa-twitter text-white"></i></a>
        <a href="#" class="bg-red-500 p-2 rounded-full"><i class="fab fa-youtube text-white"></i></a>
    </div>

    <!-- Contact Button -->
    <button class="w-full bg-green-500 text-white py-3 rounded-full font-bold mb-8 hover:bg-green-600 transition duration-300">Contact</button>

    <!-- Our Services -->
    <div class="mb-8">
        <h3 class="text-xl font-bold mb-4 text-blue-600">Our Services</h3>
        <div class="grid grid-cols-2 gap-4">
            <div class="bg-yellow-100 p-4 rounded-lg text-center">
                <i class="fas fa-puzzle-piece text-yellow-500 text-3xl mb-2"></i>
                <h4 class="font-bold text-gray-800 mb-2">Play-Based Learning</h4>
                <p class="text-xs text-gray-600">Engaging activities that promote cognitive and social development.</p>
            </div>
            <div class="bg-blue-100 p-4 rounded-lg text-center">
                <i class="fas fa-user-graduate text-blue-500 text-3xl mb-2"></i>
                <h4 class="font-bold text-gray-800 mb-2">Qualified Staff</h4>
                <p class="text-xs text-gray-600">Experienced educators dedicated to nurturing young minds.</p>
            </div>
        </div>
    </div>

    <!-- Make an Appointment -->
    <div class="mb-8">
        <h3 class="text-xl font-bold mb-4 text-blue-600">Make an Appointment</h3>
        <div class="bg-gray-100 p-4 rounded-lg">
            <input type="date" class="w-full bg-white rounded-lg p-2 text-gray-800 mb-4 border border-gray-300">
            <div class="grid grid-cols-2 gap-4 mb-4">
                <div class="bg-white p-2 rounded-lg text-center border border-gray-300">
                    <p class="font-bold">8:00 - 10:00</p>
                </div>
                <div class="bg-white p-2 rounded-lg text-center border border-gray-300">
                    <p class="font-bold">10:00 - 12:00</p>
                </div>
                <div class="bg-white p-2 rounded-lg text-center border border-gray-300">
                    <p class="font-bold">13:00 - 15:00</p>
                </div>
                <div class="bg-white p-2 rounded-lg text-center border border-gray-300">
                    <p class="font-bold">15:00 - 17:00</p>
                </div>
            </div>
            <button class="w-full bg-pink-500 text-white py-2 rounded-full font-bold hover:bg-pink-600 transition duration-300">Make an Appointment</button>
        </div>
    </div>

    <!-- Gallery -->
    <div class="mb-8">
        <h3 class="text-xl font-bold mb-4 text-blue-600">Gallery</h3>
        <div class="grid grid-cols-2 gap-4">
            <img src="https://images.pexels.com/photos/8364021/pexels-photo-8364021.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Gallery 1" class="w-full h-32 object-cover rounded-lg">
            <img src="https://images.pexels.com/photos/8535164/pexels-photo-8535164.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Gallery 2" class="w-full h-32 object-cover rounded-lg">
        </div>
    </div>

    <!-- Products -->
    <div class="mb-8">
        <h3 class="text-xl font-bold mb-4 text-blue-600">Products</h3>
        <div class="grid grid-cols-2 gap-4">
            <div class="bg-white p-4 rounded-lg shadow-md">
                <img src="https://images.pexels.com/photos/159865/notepad-pencil-green-black-159865.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Books" class="w-full h-32 object-cover rounded-lg mb-2">
                <h4 class="font-bold mb-1">Books</h4>
                <p class="text-sm text-gray-600">$19.99</p>
            </div>
            <div class="bg-white p-4 rounded-lg shadow-md">
                <img src="https://images.pexels.com/photos/19797271/pexels-photo-19797271/free-photo-of-pink-and-peach-stationery.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Toys" class="w-full h-32 object-cover rounded-lg mb-2">
                <h4 class="font-bold mb-1">Toys</h4>
                <p class="text-sm text-gray-600">$24.99</p>
            </div>
        </div>
    </div>

    <!-- Testimonial -->
    <div class="mb-8">
        <h3 class="text-xl font-bold mb-4 text-blue-600">Testimonial</h3>
        <div class="bg-blue-100 p-4 rounded-lg relative">
            <p class="text-sm italic mb-2 text-gray-700">"My child loves going to Sunshine Kids! The teachers are amazing and the activities are so engaging."</p>
            <p class="text-xs text-gray-600">- Sarah Watson</p>
            <img src="https://images.pexels.com/photos/10472582/pexels-photo-10472582.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Sarah Watson" class="w-12 h-12 rounded-full absolute -top-6 -right-6 border-4 border-white">
        </div>
    </div>

    <!-- Blog -->
    <div class="mb-8">
        <h3 class="text-xl font-bold mb-4 text-blue-600">Blog</h3>
        <div class="space-y-4">
            <div class="flex items-center space-x-4">
                <img src="https://images.pexels.com/photos/1389429/pexels-photo-1389429.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Blog 1" class="w-24 h-24 object-cover rounded-lg">
                <div>
                    <h4 class="font-bold mb-1">Outdoor Play Ideas</h4>
                    <p class="text-sm text-gray-600">Fun activities for preschoolers...</p>
                </div>
            </div>
            <div class="flex items-center space-x-4">
                <img src="https://images.pexels.com/photos/92866/pexels-photo-92866.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Blog 2" class="w-24 h-24 object-cover rounded-lg">
                <div>
                    <h4 class="font-bold mb-1">Healthy Snacks</h4>
                    <p class="text-sm text-gray-600">Nutritious options for growing minds...</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Business Hours -->
    <div class="mb-8">
        <h3 class="text-xl font-bold mb-4 text-blue-600">Business Hours</h3>
        <div class="bg-gray-100 p-4 rounded-lg">
            <ul class="space-y-2">
                <li class="flex justify-between">
                    <span>Monday - Friday</span>
                    <span>8:00 AM - 5:00 PM</span>
                </li>
                <li class="flex justify-between">
                    <span>Saturday</span>
                    <span>9:00 AM - 2:00 PM</span>
                </li>
                <li class="flex justify-between">
                    <span>Sunday</span>
                    <span>Closed</span>
                </li>
            </ul>
        </div>
    </div>

    <!-- QR Code -->
    <div class="mb-8 text-center">
        <img src="{{ asset('assets/images/logo/dummy-qr-code.png') }}" alt="QR Code" class="w-32 h-32 mx-auto mb-2">
        <p class="text-sm text-gray-600">Scan to connect</p>
    </div>

    <!-- Contact Us Form -->
    <div class="mb-8">
        <h3 class="text-xl font-bold mb-4 text-blue-600">Contact Us</h3>
        <form class="space-y-4">
            <input type="text" placeholder="Full Name" class="w-full bg-gray-100 rounded-lg p-2 text-gray-800">
            <input type="email" placeholder="Email Address" class="w-full bg-gray-100 rounded-lg p-2 text-gray-800">
            <textarea placeholder="Your Message" rows="4" class="w-full bg-gray-100 rounded-lg p-2 text-gray-800"></textarea>
            <button type="submit" class="w-full bg-orange-500 text-white py-2 rounded-full font-bold hover:bg-orange-600 transition duration-300">Send Message</button>
        </form>
    </div>

    <!-- Create Your vCard -->
    <div class="text-center">
        <button class="bg-blue-500 text-white py-2 px-4 rounded-full font-bold hover:bg-blue-600 transition duration-300">Create Your vCard</button>
    </div>
</div>

<footer class="bg-blue-600 text-center py-4 mt-8">
    <p class="text-sm text-white">Add to Contacts</p>
</footer>
</body>

</html>
