<x-front.layouts.app-layout>
    <!-- Additional information -->
    <div class="mt-16 max-w-4xl mx-auto overflow-hidden">
        <div class="px-6 py-8">
            <h2 class="text-3xl font-bold mb-6 text-gray-800 text-center">Why Create a Digital Card?</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div
                    class="flex items-start space-x-4 bg-blue-50 p-4 rounded-lg transition-all duration-300 hover:shadow-md">
                    <svg class="w-8 h-8 text-blue-500 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                         xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M8 16l2.879-2.879m0 0a3 3 0 104.243-4.242 3 3 0 00-4.243 4.242zM21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    <div>
                        <h3 class="font-semibold text-lg text-blue-700 mb-2">Easy Sharing</h3>
                        <p class="text-gray-700">Instantly share your contact information with anyone, anywhere, at any
                            time.</p>
                    </div>
                </div>
                <div
                    class="flex items-start space-x-4 bg-green-50 p-4 rounded-lg transition-all duration-300 hover:shadow-md">
                    <svg class="w-8 h-8 text-green-500 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                         xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207"></path>
                    </svg>
                    <div>
                        <h3 class="font-semibold text-lg text-green-700 mb-2">Professional Showcase</h3>
                        <p class="text-gray-700">Highlight your professional profile and social media presence in one
                            place.</p>
                    </div>
                </div>
                <div
                    class="flex items-start space-x-4 bg-yellow-50 p-4 rounded-lg transition-all duration-300 hover:shadow-md">
                    <svg class="w-8 h-8 text-yellow-500 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                         xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    <div>
                        <h3 class="font-semibold text-lg text-yellow-700 mb-2">Eco-Friendly</h3>
                        <p class="text-gray-700">A sustainable, paperless alternative to traditional business cards.</p>
                    </div>
                </div>
                <div
                    class="flex items-start space-x-4 bg-purple-50 p-4 rounded-lg transition-all duration-300 hover:shadow-md">
                    <svg class="w-8 h-8 text-purple-500 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                         xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"></path>
                    </svg>
                    <div>
                        <h3 class="font-semibold text-lg text-purple-700 mb-2">Real-Time Updates</h3>
                        <p class="text-gray-700">Keep your information current with instant updates anytime.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="max-w-6xl mx-auto overflow-hidden">

        <div class="p-8 sm:p-12">
            <form action="{{ route('card.store') }}" method="POST" enctype="multipart/form-data"
                  x-data="{ step: 1, progress: 25 }">
                @csrf
                <div class="mb-10">
                    <div class="relative pt-1">
                        <div class="flex mb-2 items-center justify-between">
                            <div>
                                    <span
                                        class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-indigo-600 bg-indigo-200">
                                        Progress
                                    </span>
                            </div>
                            <div class="text-right">
                                <span class="text-xs font-semibold inline-block text-indigo-600"
                                      x-text="`${progress}%`"></span>
                            </div>
                        </div>
                        <div class="overflow-hidden h-2 mb-4 text-xs flex rounded bg-indigo-200">
                            <div :style="`width: ${progress}%`"
                                 class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-indigo-500 transition-all duration-500 ease-in-out"></div>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-lg shadow-inner p-8">
                    <!-- Step 1: Personal Information -->
                    <div x-show="step === 1" x-transition:enter="transition ease-out duration-300"
                         x-transition:enter-start="opacity-0 transform scale-90"
                         x-transition:enter-end="opacity-100 transform scale-100">
                        <h2 class="text-3xl font-bold mb-6 text-indigo-800">Step 1: Personal Information</h2>
                        <p class="text-gray-600 mb-8">Let's start with some basic information about you.</p>
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-8">
                            <div>
                                <label for="full_name" class="block mb-2 font-medium text-gray-700">Full Name</label>
                                <input type="text" id="full_name" name="full_name"
                                       class="w-full px-4 py-3 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 transition duration-150 ease-in-out"
                                       required>
                            </div>
                            <div>
                                <label for="date_of_birth" class="block mb-2 font-medium text-gray-700">Date of
                                    Birth</label>
                                <input type="date" id="date_of_birth" name="date_of_birth"
                                       class="w-full px-4 py-3 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 transition duration-150 ease-in-out"
                                       required>
                            </div>
                            <div>
                                <label class="block mb-2 font-medium text-gray-700">Gender</label>
                                <select name="gender"
                                        class="w-full px-4 py-3 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 transition duration-150 ease-in-out"
                                        required>
                                    <option value="">Select Gender</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>
                            <div>
                                <label for="profession" class="block mb-2 font-medium text-gray-700">Profession</label>
                                <input type="text" id="profession" name="profession"
                                       class="w-full px-4 py-3 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 transition duration-150 ease-in-out"
                                       required>
                            </div>
                        </div>
                    </div>

                    <!-- Step 2: Contact Information -->
                    <div x-show="step === 2" x-transition:enter="transition ease-out duration-300"
                         x-transition:enter-start="opacity-0 transform scale-90"
                         x-transition:enter-end="opacity-100 transform scale-100">
                        <h2 class="text-3xl font-bold mb-6 text-indigo-800">Step 2: Contact Information</h2>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                            <div>
                                <label for="email" class="block mb-2 font-medium text-gray-700">Email</label>
                                <input type="email" id="email" name="email"
                                       class="w-full px-4 py-3 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 transition duration-150 ease-in-out"
                                       required>
                            </div>
                            <div>
                                <label for="phone" class="block mb-2 font-medium text-gray-700">Phone Number</label>
                                <input type="tel" id="phone" name="phone"
                                       class="w-full px-4 py-3 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 transition duration-150 ease-in-out"
                                       required>
                            </div>
                            <div>
                                <label for="alternate_email" class="block mb-2 font-medium text-gray-700">Alternate
                                    Email</label>
                                <input type="email" id="alternate_email" name="alternate_email"
                                       class="w-full px-4 py-3 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 transition duration-150 ease-in-out">
                            </div>
                            <div>
                                <label for="location" class="block mb-2 font-medium text-gray-700">Location</label>
                                <input type="text" id="location" name="location"
                                       class="w-full px-4 py-3 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 transition duration-150 ease-in-out"
                                       required>
                            </div>
                        </div>
                    </div>

                    <!-- Step 3: Choose Template -->
                    <div x-show="step === 3" x-transition:enter="transition ease-out duration-300"
                         x-transition:enter-start="opacity-0 transform scale-90"
                         x-transition:enter-end="opacity-100 transform scale-100">
                        <h2 class="text-3xl font-bold mb-6 text-indigo-800">Step 3: Choose Template</h2>
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                            <x-front.template-selection/>
                        </div>
                    </div>

                    <!-- Step 4: Profile Picture and Social Media -->
                    <div x-show="step === 4" x-transition:enter="transition ease-out duration-300"
                         x-transition:enter-start="opacity-0 transform scale-90"
                         x-transition:enter-end="opacity-100 transform scale-100"
                         class="bg-white shadow-lg rounded-lg p-8">
                        <h2 class="text-3xl font-bold mb-8 text-indigo-800 text-center">Step 4: Profile Picture and Social Media</h2>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
                            <div x-data="imageUploadHandler()" class="space-y-8">
                                <!-- Profile Picture Upload -->
                                <div>
                                    <label for="profile_picture" class="block mb-2 font-semibold text-gray-700">Profile Picture</label>
                                    <div
                                        class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-lg hover:border-indigo-500 transition-colors duration-300 cursor-pointer"
                                        @click="selectFile('profile')">
                                        <div class="space-y-1 text-center" x-show="!profileImagePreview">
                                            <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                                                <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                            <div class="flex text-sm text-gray-600">
                    <span class="relative cursor-pointer bg-white rounded-md font-medium text-indigo-600 hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                        Upload a file
                    </span>
                                                <p class="pl-1">or drag and drop</p>
                                            </div>
                                            <p class="text-xs text-gray-500">PNG, JPG, GIF up to 10MB</p>
                                        </div>
                                        <div x-show="profileImagePreview">
                                            <img :src="profileImagePreview" alt="Profile Picture Preview" class="w-full h-32 object-cover rounded-lg">
                                        </div>
                                    </div>
                                </div>

                                <!-- Cover Picture Upload -->
                                <div>
                                    <label for="cover_picture" class="block mb-2 font-semibold text-gray-700">Cover Picture</label>
                                    <div
                                        class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-lg hover:border-indigo-500 transition-colors duration-300 cursor-pointer"
                                        @click="selectFile('cover')">
                                        <div class="space-y-1 text-center" x-show="!coverImagePreview">
                                            <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                                                <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                            <div class="flex text-sm text-gray-600">
                    <span class="relative cursor-pointer bg-white rounded-md font-medium text-indigo-600 hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                        Upload a file
                    </span>
                                                <p class="pl-1">or drag and drop</p>
                                            </div>
                                            <p class="text-xs text-gray-500">PNG, JPG, GIF up to 10MB</p>
                                        </div>
                                        <div x-show="coverImagePreview">
                                            <img :src="coverImagePreview" alt="Cover Picture Preview" class="w-full h-32 object-cover rounded-lg">
                                        </div>
                                    </div>
                                </div>

                                <!-- Separate File Inputs for Profile and Cover -->
                                <input type="file" id="profileFileInput" class="hidden" accept="image/*" @change="handleFileSelect('profile', $event)" x-ref="profileFileInput">
                                <input type="file" id="coverFileInput" class="hidden" accept="image/*" @change="handleFileSelect('cover', $event)" x-ref="coverFileInput">
                            </div>


                            <!-- Social Media Inputs -->
                            <div>
                                <h3 class="text-2xl font-semibold text-gray-900 mb-6">Social Media Profiles</h3>
                                <div class="space-y-6">
                                    <div class="relative">
                                        <label for="linkedin" class="block text-sm font-medium text-gray-700 mb-2">LinkedIn Profile</label>
                                        <div class="mt-1 relative rounded-md shadow-sm">
                                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                                <svg class="h-5 w-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                                                    <path d="M6.29 18.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0020 3.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.073 4.073 0 01.8 7.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 010 16.407a11.616 11.616 0 006.29 1.84"/>
                                                </svg>
                                            </div>
                                            <input type="url" id="linkedin" name="linkedin"
                                                   class="focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-10 pr-3 py-3 sm:text-sm border-gray-300 rounded-md transition duration-150 ease-in-out"
                                                   placeholder="https://linkedin.com/in/username">
                                        </div>
                                    </div>

                                    <div class="relative">
                                        <label for="twitter" class="block text-sm font-medium text-gray-700 mb-2">Twitter Profile</label>
                                        <div class="mt-1 relative rounded-md shadow-sm">
                                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                                <svg class="h-5 w-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                                                    <path d="M6.29 18.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0020 3.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.073 4.073 0 01.8 7.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 010 16.407a11.616 11.616 0 006.29 1.84"/>
                                                </svg>
                                            </div>
                                            <input type="url" id="twitter" name="twitter"
                                                   class="focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-10 pr-3 py-3 sm:text-sm border-gray-300 rounded-md transition duration-150 ease-in-out"
                                                   placeholder="https://twitter.com/username">
                                        </div>
                                    </div>

                                    <div class="relative">
                                        <label for="facebook" class="block text-sm font-medium text-gray-700 mb-2">Facebook Profile</label>
                                        <div class="mt-1 relative rounded-md shadow-sm">
                                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                                <svg class="h-5 w-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                                                    <path fill-rule="evenodd" d="M20 10c0-5.523-4.477-10-10-10S0 4.477 0 10c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V10h2.54V7.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V10h2.773l-.443 2.89h-2.33v6.988C16.343 19.128 20 14.991 20 10z" clip-rule="evenodd"/>
                                                </svg>
                                            </div>
                                            <input type="url" id="facebook" name="facebook"
                                                   class="focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-10 pr-3 py-3 sm:text-sm border-gray-300 rounded-md transition duration-150 ease-in-out"
                                                   placeholder="https://facebook.com/username">
                                        </div>
                                    </div>

                                    <div class="relative">
                                        <label for="instagram" class="block text-sm font-medium text-gray-700 mb-2">Instagram Profile</label>
                                        <div class="mt-1 relative rounded-md shadow-sm">
                                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                                <svg class="h-5 w-5 text-gray-400" fill="currentColor" viewBox="0 0 24 24">
                                                    <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                                                </svg>
                                            </div>
                                            <input type="url" id="instagram" name="instagram"
                                                   class="focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-10 pr-3 py-3 sm:text-sm border-gray-300 rounded-md transition duration-150 ease-in-out"
                                                   placeholder="https://instagram.com/username">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Navigation buttons -->
                    <div class="mt-12 flex justify-between">
                        <button type="button" x-show="step > 1" @click="step--; progress -= 25"
                                class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-3 px-6 rounded-lg transition-colors duration-300 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-opacity-50">
                            Previous
                        </button>
                        <button type="button" x-show="step < 4" @click="step++; progress += 25"
                                class="bg-indigo-500 hover:bg-indigo-600 text-white font-bold py-3 px-6 rounded-lg transition-colors duration-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-opacity-50">
                            Next
                        </button>
                        <button type="submit" x-show="step === 4"
                                class="bg-green-500 hover:bg-green-600 text-white font-bold py-3 px-6 rounded-lg transition-colors duration-300 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-opacity-50">
                            Create Card
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <x-slot:js>
        <script>
            function imageUploadHandler() {
                return {
                    profileImagePreview: null,
                    coverImagePreview: null,

                    selectFile(type) {
                        if (type === 'profile') {
                            this.$refs.profileFileInput.click();
                        } else if (type === 'cover') {
                            this.$refs.coverFileInput.click();
                        }
                    },

                    handleFileSelect(type, event) {
                        const file = event.target.files[0];
                        if (file && file.type.startsWith('image/')) {
                            const reader = new FileReader();
                            reader.onload = (e) => {
                                if (type === 'profile') {
                                    this.profileImagePreview = e.target.result;
                                } else if (type === 'cover') {
                                    this.coverImagePreview = e.target.result;
                                }
                            };
                            reader.readAsDataURL(file);
                        }
                        // Reset the input value to allow re-selecting the same file if needed
                        event.target.value = '';
                    },
                };
            }
        </script>
    </x-slot:js>
</x-front.layouts.app-layout>
