<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    @vite('resources/css/app.css')
    <!-- Add Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body class="bg-gray-100 font-sans">
<div class="max-w-md mx-auto bg-white shadow-lg rounded-lg overflow-hidden">
    <!-- Profile Header -->
    <div class="relative h-40 bg-gray-200">
        <!-- Hexagon pattern background (you'll need to add this image) -->
        <div class="absolute inset-0 opacity-10 bg-cover bg-center" style="background-image: url('path/to/hexagon-pattern.png');"></div>
        <!-- Profile image -->
        <img src="path/to/doctor-image.jpg" alt="Doctor" class="absolute bottom-0 left-1/2 transform -translate-x-1/2 translate-y-1/2 w-32 h-32 rounded-full border-4 border-white object-cover">
    </div>

    <!-- Profile Info -->
    <div class="pt-16 pb-8 text-center">
        <h2 class="text-2xl font-bold text-gray-800">Pallavi Hegde</h2>
        <p class="text-sm text-gray-600">Doctor at Doctored</p>
        <p class="mt-2 text-sm text-gray-500 px-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type.</p>
    </div>

    <!-- Social Media Icons -->
    <div class="flex justify-center space-x-4 mb-6">
        <a href="#" class="text-gray-400 hover:text-blue-500"><i class="fab fa-facebook-f"></i></a>
        <a href="#" class="text-gray-400 hover:text-green-500"><i class="fab fa-whatsapp"></i></a>
        <a href="#" class="text-gray-400 hover:text-blue-700"><i class="fab fa-linkedin-in"></i></a>
        <a href="#" class="text-gray-400 hover:text-pink-500"><i class="fab fa-instagram"></i></a>
        <a href="#" class="text-gray-400 hover:text-blue-400"><i class="fab fa-twitter"></i></a>
    </div>

    <!-- Contact Information -->
    <div class="grid grid-cols-2 gap-4 px-4 mb-6">
        <div class="bg-blue-900 text-white p-3 rounded-lg flex items-center">
            <i class="fas fa-envelope mr-3"></i>
            <div>
                <p class="text-xs">E-mail address</p>
                <p class="text-sm font-semibold">jackie@gmail.com</p>
            </div>
        </div>
        <div class="bg-blue-900 text-white p-3 rounded-lg flex items-center">
            <i class="fas fa-phone-alt mr-3"></i>
            <div>
                <p class="text-xs">Mobile Number</p>
                <p class="text-sm font-semibold">+1 4078481474</p>
            </div>
        </div>
        <div class="bg-blue-900 text-white p-3 rounded-lg flex items-center">
            <i class="fas fa-birthday-cake mr-3"></i>
            <div>
                <p class="text-xs">Date of Birth</p>
                <p class="text-sm font-semibold">12th June, 1990</p>
            </div>
        </div>
        <div class="bg-blue-900 text-white p-3 rounded-lg flex items-center">
            <i class="fas fa-map-marker-alt mr-3"></i>
            <div>
                <p class="text-xs">Location</p>
                <p class="text-sm font-semibold">New York, USA</p>
            </div>
        </div>
    </div>

    <!-- Appointment Section -->
    <div class="px-4 mb-6">
        <h3 class="text-xl font-bold text-center mb-4">Make an Appointment</h3>
        <div class="mb-4">
            <label class="block text-sm font-medium text-gray-700 mb-1">Date:</label>
            <input type="date" class="w-full p-2 border rounded-lg">
        </div>
        <div class="mb-4">
            <label class="block text-sm font-medium text-gray-700 mb-1">Hour:</label>
            <div class="grid grid-cols-2 gap-2">
                <button class="bg-white text-blue-900 border border-blue-900 rounded-lg py-2">8:10 - 20:00</button>
                <button class="bg-white text-blue-900 border border-blue-900 rounded-lg py-2">8:10 - 20:00</button>
                <button class="bg-white text-blue-900 border border-blue-900 rounded-lg py-2">8:10 - 20:00</button>
                <button class="bg-white text-blue-900 border border-blue-900 rounded-lg py-2">8:10 - 20:00</button>
            </div>
        </div>
        <button class="w-full bg-blue-900 text-white py-2 rounded-lg font-semibold">Make an Appointment</button>
    </div>

    <!-- Our Services Section -->
    <div class="px-4 mb-6">
        <h3 class="text-xl font-bold mb-4">Our Services</h3>
        <div class="grid grid-cols-2 gap-4">
            <div class="bg-gray-100 p-3 rounded-lg text-center">
                <i class="fas fa-stethoscope text-blue-900 text-2xl mb-2"></i>
                <p class="text-sm">General Check-up</p>
            </div>
            <div class="bg-gray-100 p-3 rounded-lg text-center">
                <i class="fas fa-heartbeat text-blue-900 text-2xl mb-2"></i>
                <p class="text-sm">Cardiology</p>
            </div>
            <div class="bg-gray-100 p-3 rounded-lg text-center">
                <i class="fas fa-brain text-blue-900 text-2xl mb-2"></i>
                <p class="text-sm">Neurology</p>
            </div>
            <div class="bg-gray-100 p-3 rounded-lg text-center">
                <i class="fas fa-tooth text-blue-900 text-2xl mb-2"></i>
                <p class="text-sm">Dental Care</p>
            </div>
        </div>
    </div>

    <!-- Products Section -->
    <div class="px-4 mb-6">
        <h3 class="text-xl font-bold mb-4">Our Products</h3>
        <div class="grid grid-cols-2 gap-4">
            <div class="bg-gray-100 p-3 rounded-lg text-center">
                <i class="fas fa-pills text-blue-900 text-2xl mb-2"></i>
                <p class="text-sm">Vitamins</p>
            </div>
            <div class="bg-gray-100 p-3 rounded-lg text-center">
                <i class="fas fa-band-aid text-blue-900 text-2xl mb-2"></i>
                <p class="text-sm">First Aid Kits</p>
            </div>
            <div class="bg-gray-100 p-3 rounded-lg text-center">
                <i class="fas fa-thermometer text-blue-900 text-2xl mb-2"></i>
                <p class="text-sm">Thermometers</p>
            </div>
            <div class="bg-gray-100 p-3 rounded-lg text-center">
                <i class="fas fa-heartbeat text-blue-900 text-2xl mb-2"></i>
                <p class="text-sm">Blood Pressure Monitors</p>
            </div>
        </div>
    </div>

    <!-- Testimonials Section -->
    <div class="px-4 mb-6">
        <h3 class="text-2xl font-bold mb-6 text-center text-blue-900">What Our Patients Say</h3>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div class="bg-white p-6 rounded-lg shadow-md transition-transform hover:scale-105">
                <div class="flex items-center mb-4">
                    <img src="https://via.placeholder.com/50" alt="John Doe" class="w-12 h-12 rounded-full mr-4">
                    <div>
                        <p class="font-semibold text-blue-900">John Doe</p>
                        <p class="text-sm text-gray-600">Patient</p>
                    </div>
                </div>
                <p class="text-gray-700 italic">"Dr. Hegde is an excellent doctor. Very knowledgeable and caring. I couldn't be more satisfied with the treatment I received."</p>
                <div class="mt-4 text-yellow-400">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-md transition-transform hover:scale-105">
                <div class="flex items-center mb-4">
                    <img src="https://via.placeholder.com/50" alt="Jane Smith" class="w-12 h-12 rounded-full mr-4">
                    <div>
                        <p class="font-semibold text-blue-900">Jane Smith</p>
                        <p class="text-sm text-gray-600">Patient</p>
                    </div>
                </div>
                <p class="text-gray-700 italic">"I highly recommend this clinic. The staff is friendly and professional. The care I received was top-notch."</p>
                <div class="mt-4 text-yellow-400">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>
        </div>
    </div>

    <!-- Business Hours Section -->
    <div class="px-4 mb-8 bg-white rounded-lg shadow-md p-6">
        <h3 class="text-2xl font-bold mb-6 text-blue-900 border-b pb-2">Business Hours</h3>
        <ul class="space-y-4">
            <li class="flex justify-between items-center hover:bg-gray-100 p-2 rounded transition duration-300">
                <span class="font-medium text-gray-800">Monday - Friday</span>
                <span class="text-blue-900 font-semibold">9:00 AM - 6:00 PM</span>
            </li>
            <li class="flex justify-between items-center hover:bg-gray-100 p-2 rounded transition duration-300">
                <span class="font-medium text-gray-800">Saturday</span>
                <span class="text-blue-900 font-semibold">10:00 AM - 4:00 PM</span>
            </li>
            <li class="flex justify-between items-center hover:bg-gray-100 p-2 rounded transition duration-300">
                <span class="font-medium text-gray-800">Sunday</span>
                <span class="text-red-600 font-semibold">Closed</span>
            </li>
        </ul>
    </div>

    <!-- Contact Us Section -->
    <div class="px-4 mb-8 bg-white rounded-lg shadow-md p-6">
        <h3 class="text-2xl font-bold mb-6 text-blue-900 border-b pb-2">Contact Us</h3>
        <form class="space-y-4">
            <div>
                <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Name</label>
                <input type="text" id="name" name="name" class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-300">
            </div>
            <div>
                <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                <input type="email" id="email" name="email" class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-300">
            </div>
            <div>
                <label for="message" class="block text-sm font-medium text-gray-700 mb-1">Message</label>
                <textarea id="message" name="message" rows="4" class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-300"></textarea>
            </div>
            <button type="submit" class="w-full bg-blue-900 text-white py-3 rounded-lg font-semibold hover:bg-blue-800 transition duration-300 transform hover:scale-105">Send Message</button>
        </form>
    </div>
</div>
</body>

</html>
