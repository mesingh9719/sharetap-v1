<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    @vite('resources/css/app.css')
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script>
</head>
<body class="bg-blue-100 text-gray-800">

<div class="max-w-4xl mx-auto">
    <nav x-data="{ open: false }" class="bg-white shadow-md">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16">
                <div class="flex items-center">
                    <div class="flex-shrink-0">
                        <img class="h-8 w-24" src="{{ asset('assets/images/logo/clinic-logo.svg') }}" alt="Clinic Logo">
                    </div>
                    <div class="hidden md:block">
                        <div class="ml-10 flex items-baseline space-x-4">
                            <a href="#" class="text-gray-600 hover:bg-blue-200 hover:text-blue-800 px-3 py-2 rounded-md text-sm font-medium">Home</a>
                            <a href="#services" class="text-gray-600 hover:bg-blue-200 hover:text-blue-800 px-3 py-2 rounded-md text-sm font-medium">Services</a>
                            <a href="#doctors" class="text-gray-600 hover:bg-blue-200 hover:text-blue-800 px-3 py-2 rounded-md text-sm font-medium">Doctors</a>
                            <a href="#testimonials" class="text-gray-600 hover:bg-blue-200 hover:text-blue-800 px-3 py-2 rounded-md text-sm font-medium">Testimonials</a>
                            <a href="#contact" class="text-gray-600 hover:bg-blue-200 hover:text-blue-800 px-3 py-2 rounded-md text-sm font-medium">Contact</a>
                        </div>
                    </div>
                </div>
                <div class="-mr-2 flex md:hidden">
                    <button @click="open = !open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-blue-800 hover:bg-blue-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-blue-800 focus:ring-white">
                        <span class="sr-only">Open main menu</span>
                        <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                        <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <div x-show="open" class="md:hidden">
            <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
                <a href="#" class="text-gray-600 hover:bg-blue-200 hover:text-blue-800 block px-3 py-2 rounded-md text-base font-medium">Home</a>
                <a href="#services" class="text-gray-600 hover:bg-blue-200 hover:text-blue-800 block px-3 py-2 rounded-md text-base font-medium">Services</a>
                <a href="#doctors" class="text-gray-600 hover:bg-blue-200 hover:text-blue-800 block px-3 py-2 rounded-md text-base font-medium">Doctors</a>
                <a href="#testimonials" class="text-gray-600 hover:bg-blue-200 hover:text-blue-800 block px-3 py-2 rounded-md text-base font-medium">Testimonials</a>
                <a href="#contact" class="text-gray-600 hover:bg-blue-200 hover:text-blue-800 block px-3 py-2 rounded-md text-base font-medium">Contact</a>
            </div>
        </div>
    </nav>
    <!-- Header -->
    <header class="relative mb-12 mt-6">
        <img src="{{ asset('assets/img/templates/clinic-cover.jpg') }}" alt="Clinic Cover" class="w-full h-96 object-cover rounded-lg shadow-md">
        <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center">
            <div class="text-center text-white">
                <h1 class="text-5xl font-bold mb-2">HealthCare Clinic</h1>
                <p class="text-2xl">Your Health, Our Priority</p>
            </div>
        </div>
    </header>

    <!-- About -->
    <section id="about" class="mb-12">
        <h2 class="text-2xl font-semibold mb-4">About Us</h2>
        <p class="text-gray-600">
            HealthCare Clinic is a state-of-the-art medical facility dedicated to providing comprehensive and compassionate care to our patients. With a team of experienced doctors and cutting-edge technology, we strive to deliver the highest quality healthcare services to our community.
        </p>
    </section>

    <!-- Services -->
    <section class="mb-12" id="services">
        <h2 class="text-2xl font-semibold mb-4">Our Services</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            @foreach(['General Medicine', 'Pediatrics', 'Cardiology'] as $service)
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <div class="text-4xl mb-4 text-blue-500">
                        @if($service == 'General Medicine')
                            🩺
                        @elseif($service == 'Pediatrics')
                            👶
                        @else
                            ❤️
                        @endif
                    </div>
                    <h3 class="text-xl font-semibold mb-2">{{ $service }}</h3>
                    <p class="text-gray-600">Our experienced doctors provide comprehensive care for patients of all ages, focusing on prevention, diagnosis, and treatment of various health conditions.</p>
                </div>
            @endforeach
        </div>
    </section>

    <!-- Doctors -->
    <section class="mb-12" id="doctors">
        <h2 class="text-2xl font-semibold mb-4">Our Doctors</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            @foreach(['Dr. John Smith', 'Dr. Sarah Johnson', 'Dr. Michael Lee'] as $doctor)
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <img src="{{ asset('path/to/'.$doctor.'.jpg') }}" alt="{{ $doctor }}" class="w-full h-48 object-cover mb-4 rounded">
                    <h3 class="text-xl font-semibold mb-2">{{ $doctor }}</h3>
                    <p class="text-gray-600 mb-4">Specializing in Internal Medicine with over 10 years of experience.</p>
                    <button class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded">
                        Book Appointment
                    </button>
                </div>
            @endforeach
        </div>
    </section>

    <!-- Testimonials -->
    <section class="mb-12" id="testimonials">
        <h2 class="text-2xl font-semibold mb-4">Patient Testimonials</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            @foreach(['Alice Brown', 'Robert Wilson'] as $patient)
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <div class="flex items-center mb-4">
                        <img src="{{ asset('path/to/'.$patient.'.jpg') }}" alt="{{ $patient }}" class="w-12 h-12 rounded-full mr-4">
                        <div>
                            <h3 class="font-semibold">{{ $patient }}</h3>
                            <div class="text-yellow-500">★★★★★</div>
                        </div>
                    </div>
                    <p class="text-gray-600">"The care I received at HealthCare Clinic was exceptional. The doctors were knowledgeable, caring, and took the time to listen to my concerns. I highly recommend this clinic to anyone seeking quality healthcare."</p>
                </div>
            @endforeach
        </div>
    </section>

    <!-- Business Hours -->
    <section class="mb-12" id="business-hours">
        <h2 class="text-2xl font-semibold mb-4">Clinic Hours</h2>
        <div class="bg-white p-6 rounded-lg shadow-md">
            <table class="w-full">
                <tbody>
                @foreach(['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'] as $day)
                    <tr>
                        <td class="py-2 pr-4 font-semibold">{{ $day }}</td>
                        <td class="py-2">
                            @if($day == 'Sunday')
                                Closed
                            @elseif($day == 'Saturday')
                                9:00 AM - 1:00 PM
                            @else
                                8:00 AM - 6:00 PM
                            @endif
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </section>

    <!-- Contact -->
    <section id="contact" class="mb-12">
        <h2 class="text-2xl font-semibold mb-4">Contact Us</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div class="flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-4 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                </svg>
                <div>
                    <p class="text-sm text-gray-600">Email Address</p>
                    <p>info@healthcareclinic.com</p>
                </div>
            </div>
            <div class="flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-4 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                </svg>
                <div>
                    <p class="text-sm text-gray-600">Phone Number</p>
                    <p>+1 (555) 123-4567</p>
                </div>
            </div>
            <div class="flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-4 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                </svg>
                <div>
                    <p class="text-sm text-gray-600">Location</p>
                    <p>123 Health Street, Medical City, HC 12345</p>
                </div>
            </div>
        </div>
    </section>
</div>
</body>

</html>
