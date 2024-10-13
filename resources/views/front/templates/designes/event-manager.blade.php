<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    @vite('resources/css/app.css')
    <!-- Add Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body class="bg-black text-white">
<div class="max-w-md mx-auto p-4">
    <!-- Header Image -->
    <div class="relative h-48 mb-16">
        <img src="https://img.freepik.com/free-vector/abstract-watercolor-background_23-2149069668.jpg?t=st=1728817892~exp=1728821492~hmac=504a04984213a80fd5dd9f71c0d1d0536e81aef5876fa7e6c339bcaf068b78db&w=1380" alt="Event" class="w-full h-full object-cover rounded-t-lg">
        <div class="absolute -bottom-12 left-4 flex items-center">
            <img src="https://images.pexels.com/photos/415829/pexels-photo-415829.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Profile" class="w-24 h-24 rounded-full border-4 border-black">
            <div class="ml-4">
                <h2 class="text-3xl font-extrabold text-white drop-shadow-[0_2px_4px_rgba(0,0,0,0.8)]">Software Developer</h2>
                <p class="text-orange-500">Vanessa Joe</p>
            </div>
        </div>
    </div>

    <!-- Description -->
    <p class="text-sm mb-6">
        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
    </p>

    <!-- Social Icons -->
    <div class="flex justify-between mb-8">
        <a href="#" class="text-orange-500"><i class="fab fa-facebook-f"></i></a>
        <a href="#" class="text-orange-500"><i class="fab fa-whatsapp"></i></a>
        <a href="#" class="text-orange-500"><i class="fab fa-linkedin-in"></i></a>
        <a href="#" class="text-orange-500"><i class="fab fa-instagram"></i></a>
        <a href="#" class="text-orange-500"><i class="fab fa-twitter"></i></a>
    </div>

    <!-- Contact -->
    <h3 class="text-xl font-bold mb-4 relative">
        <span class="bg-orange-500 absolute left-0 top-0 bottom-0 w-1"></span>
        <span class="ml-3">Contact</span>
    </h3>
    <div class="grid grid-cols-2 gap-4 mb-8">
        <div class="flex items-center bg-gray-800 p-3 rounded-lg">
            <i class="fas fa-envelope text-orange-500 mr-3"></i>
            <div>
                <p class="text-xs text-gray-400">E-mail address</p>
                <p class="text-sm">jackie@gmail.com</p>
            </div>
        </div>
        <div class="flex items-center bg-gray-800 p-3 rounded-lg">
            <i class="fas fa-phone text-orange-500 mr-3"></i>
            <div>
                <p class="text-xs text-gray-400">Mobile Number</p>
                <p class="text-sm">+1 4078461474</p>
            </div>
        </div>
        <div class="flex items-center bg-gray-800 p-3 rounded-lg">
            <i class="fas fa-birthday-cake text-orange-500 mr-3"></i>
            <div>
                <p class="text-xs text-gray-400">Date of Birth</p>
                <p class="text-sm">12th June, 1990</p>
            </div>
        </div>
        <div class="flex items-center bg-gray-800 p-3 rounded-lg">
            <i class="fas fa-map-marker-alt text-orange-500 mr-3"></i>
            <div>
                <p class="text-xs text-gray-400">Location</p>
                <p class="text-sm">New York, USA</p>
            </div>
        </div>
    </div>

    <!-- Our Services -->
    <h3 class="text-xl font-bold mb-4">Our Services</h3>
    <div class="space-y-4 mb-8">
        <div class="flex items-start bg-gray-800 p-4 rounded-lg">
            <i class="fas fa-laptop text-orange-500 mr-4 mt-1"></i>
            <div>
                <h4 class="font-bold mb-2">Web Design</h4>
                <p class="text-sm text-gray-300">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
            </div>
        </div>
        <div class="flex items-start bg-gray-800 p-4 rounded-lg">
            <i class="fas fa-paint-brush text-orange-500 mr-4 mt-1"></i>
            <div>
                <h4 class="font-bold mb-2">Branding Design</h4>
                <p class="text-sm text-gray-300">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
            </div>
        </div>
    </div>

    <!-- Products -->
    <h3 class="text-xl font-bold mb-4 relative">
        <span class="bg-orange-500 absolute left-0 top-0 bottom-0 w-1"></span>
        <span class="ml-3">Our Products</span>
    </h3>
    <div class="grid grid-cols-2 gap-4 mb-8">
        <div class="bg-gray-800 p-4 rounded-lg">
            <img src="https://images.pexels.com/photos/2173382/pexels-photo-2173382.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Product 1" class="w-full h-32 object-cover rounded-lg mb-2">
            <h4 class="font-bold mb-1">Product 1</h4>
            <p class="text-sm text-gray-300">$19.99</p>
        </div>
        <div class="bg-gray-800 p-4 rounded-lg">
            <img src="https://images.pexels.com/photos/92866/pexels-photo-92866.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Product 2" class="w-full h-32 object-cover rounded-lg mb-2">
            <h4 class="font-bold mb-1">Product 2</h4>
            <p class="text-sm text-gray-300">$24.99</p>
        </div>
    </div>

    <!-- Testimonials -->
    <h3 class="text-xl font-bold mb-4 relative">
        <span class="bg-orange-500 absolute left-0 top-0 bottom-0 w-1"></span>
        <span class="ml-3">Testimonials</span>
    </h3>
    <div class="space-y-4 mb-8">
        <div class="bg-gray-800 p-4 rounded-lg">
            <p class="text-sm italic mb-2">"Excellent service! Highly recommended."</p>
            <p class="text-xs text-orange-500">- John Doe</p>
        </div>
        <div class="bg-gray-800 p-4 rounded-lg">
            <p class="text-sm italic mb-2">"Professional and timely. Great experience!"</p>
            <p class="text-xs text-orange-500">- Jane Smith</p>
        </div>
    </div>

    <!-- Business Hours -->
    <h3 class="text-xl font-bold mb-4 relative">
        <span class="bg-orange-500 absolute left-0 top-0 bottom-0 w-1"></span>
        <span class="ml-3">Business Hours</span>
    </h3>
    <div class="bg-gray-800 p-4 rounded-lg mb-8">
        <ul class="space-y-2">
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
        <span class="bg-orange-500 absolute left-0 top-0 bottom-0 w-1"></span>
        <span class="ml-3">Contact Us</span>
    </h3>
    <form class="space-y-4 mb-8">
        <div>
            <label for="name" class="block text-sm font-medium mb-1">Name</label>
            <input type="text" id="name" name="name" class="w-full bg-gray-800 rounded-lg p-2 text-white">
        </div>
        <div>
            <label for="email" class="block text-sm font-medium mb-1">Email</label>
            <input type="email" id="email" name="email" class="w-full bg-gray-800 rounded-lg p-2 text-white">
        </div>
        <div>
            <label for="message" class="block text-sm font-medium mb-1">Message</label>
            <textarea id="message" name="message" rows="4" class="w-full bg-gray-800 rounded-lg p-2 text-white"></textarea>
        </div>
        <button type="submit" class="w-full bg-orange-500 text-white py-2 rounded-lg font-bold">Send Message</button>
    </form>

    <!-- Make an Appointment -->
    <button class="w-full bg-orange-500 text-white py-3 rounded-lg font-bold">Make an Appointment</button>
</div>
</body>

</html>
