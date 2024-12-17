<x-dashboard.layout.master-layout>
    <div x-data="{ activeTab: 'general' }" class="h-full">
        <!-- Page Header -->
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-2xl font-semibold text-gray-900 dark:text-white">Website Settings</h1>
        </div>

        @if ($errors->any())
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4" role="alert">
                <strong class="font-bold">Holy smokes!</strong>
                <span class="block sm:inline">Something went wrong. Please check your form.</span>
                <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                    <i class="fas fa-times"></i>
                </span>
            </div>
        @endif

        <!-- Main Content -->
        <div class="bg-white dark:bg-gray-800 rounded-lg shadow">
            <!-- Tabs -->
            <div class="border-b border-gray-200 dark:border-gray-700">
                <nav class="flex space-x-8 px-4" aria-label="Tabs">
                    <button @click="activeTab = 'general'"
                            :class="{'border-indigo-500 text-indigo-600 dark:text-indigo-400': activeTab === 'general',
                                    'border-transparent text-gray-500 dark:text-gray-400 hover:text-gray-700 dark:hover:text-gray-300': activeTab !== 'general'}"
                            class="py-4 px-1 border-b-2 font-medium text-sm focus:outline-none">
                        <i class="fas fa-cog mr-2"></i>
                        General
                    </button>
                    <button @click="activeTab = 'branding'"
                            :class="{'border-indigo-500 text-indigo-600 dark:text-indigo-400': activeTab === 'branding',
                                    'border-transparent text-gray-500 dark:text-gray-400 hover:text-gray-700 dark:hover:text-gray-300': activeTab !== 'branding'}"
                            class="py-4 px-1 border-b-2 font-medium text-sm focus:outline-none">
                        <i class="fas fa-paint-brush mr-2"></i>
                        Branding & Colors
                    </button>
                    <button @click="activeTab = 'contact'"
                            :class="{'border-indigo-500 text-indigo-600 dark:text-indigo-400': activeTab === 'contact',
                                    'border-transparent text-gray-500 dark:text-gray-400 hover:text-gray-700 dark:hover:text-gray-300': activeTab !== 'contact'}"
                            class="py-4 px-1 border-b-2 font-medium text-sm focus:outline-none">
                        <i class="fas fa-address-card mr-2"></i>
                        Contact & Social
                    </button>
                </nav>
            </div>

            <form action="{{ route('website.basic-info.update') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="p-6">
                    <!-- General Tab -->
                    <div x-show="activeTab === 'general'" class="space-y-6">
                        <div class="grid gap-6">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">
                                    Site Name
                                </label>
                                <input type="text" name="site_name" value="{{ $basicInfo->site_name }}"
                                       class="block w-full rounded-md border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-white shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">
                                    Tagline
                                </label>
                                <input type="text" name="tagline" value="{{ $basicInfo->tagline }}"
                                       class="block w-full rounded-md border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-white shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">
                                    Footer Text
                                </label>
                                <textarea name="footer_text" rows="4"
                                          class="block w-full rounded-md border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-white shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">{{ $basicInfo->footer_text }}</textarea>
                            </div>
                        </div>
                    </div>

                    <!-- Branding Tab -->
                    <div x-show="activeTab === 'branding'" class="space-y-6">
                        <!-- Logo & Favicon -->
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Logo</label>
                                <div class="mt-1 flex items-center space-x-4">
                                    <div class="w-24 h-24 flex items-center justify-center rounded border border-gray-300 dark:border-gray-600">
                                        @if($basicInfo->logo)
                                            <img src="{{ Storage::url($basicInfo->logo) }}" class="max-h-20 w-auto">
                                        @else
                                            <i class="fas fa-image text-gray-400 text-3xl"></i>
                                        @endif
                                    </div>
                                    <input type="file" name="logo" accept="image/*"
                                           class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-md file:border-0 file:text-sm file:font-semibold file:bg-indigo-50 file:text-indigo-700 hover:file:bg-indigo-100">
                                </div>
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Favicon</label>
                                <div class="mt-1 flex items-center space-x-4">
                                    <div class="w-12 h-12 flex items-center justify-center rounded border border-gray-300 dark:border-gray-600">
                                        @if($basicInfo->favicon)
                                            <img src="{{ Storage::url($basicInfo->favicon) }}" class="max-h-8 w-auto">
                                        @else
                                            <i class="fas fa-star text-gray-400"></i>
                                        @endif
                                    </div>
                                    <input type="file" name="favicon" accept=".ico,image/png"
                                           class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-md file:border-0 file:text-sm file:font-semibold file:bg-indigo-50 file:text-indigo-700 hover:file:bg-indigo-100">
                                </div>
                            </div>
                        </div>

                        <!-- Color Scheme -->
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Primary Color</label>
                                <div class="flex items-center space-x-2">
                                    <input type="color" name="primary_color" value="{{ $basicInfo->primary_color }}"
                                           class="h-9 w-16 rounded border-gray-300 dark:border-gray-600">
                                    <input type="text" value="{{ $basicInfo->primary_color }}"
                                           class="block w-full rounded-md border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-white shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                           readonly>
                                </div>
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Secondary Color</label>
                                <div class="flex items-center space-x-2">
                                    <input type="color" name="secondary_color" value="{{ $basicInfo->secondary_color }}"
                                           class="h-9 w-16 rounded border-gray-300 dark:border-gray-600">
                                    <input type="text" value="{{ $basicInfo->secondary_color }}"
                                           class="block w-full rounded-md border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-white shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                           readonly>
                                </div>
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Accent Color</label>
                                <div class="flex items-center space-x-2">
                                    <input type="color" name="accent_color" value="{{ $basicInfo->accent_color }}"
                                           class="h-9 w-16 rounded border-gray-300 dark:border-gray-600">
                                    <input type="text" value="{{ $basicInfo->accent_color }}"
                                           class="block w-full rounded-md border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-white shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                           readonly>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Contact & Social Tab -->
                    <div x-show="activeTab === 'contact'" class="space-y-6">
                        <!-- Contact Information -->
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">
                                    <i class="fas fa-envelope mr-2"></i>Email
                                </label>
                                <input type="email" name="email" value="{{ $basicInfo->email }}"
                                       class="block w-full rounded-md border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-white shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">
                                    <i class="fas fa-phone mr-2"></i>Phone
                                </label>
                                <input type="text" name="phone" value="{{ $basicInfo->phone }}"
                                       class="block w-full rounded-md border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-white shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                            </div>

                            <div class="md:col-span-2">
                                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">
                                    <i class="fas fa-location-dot mr-2"></i>Address
                                </label>
                                <textarea name="address" rows="3"
                                          class="block w-full rounded-md border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-white shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">{{ $basicInfo->address }}</textarea>
                            </div>

                            <div class="md:col-span-2">
                                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">
                                    <i class="fas fa-map-marker-alt mr-2"></i>Google Maps Link
                                </label>
                                <input type="url" name="google_maps_link" value="{{ $basicInfo->google_maps_link }}"
                                       class="block w-full rounded-md border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-white shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                            </div>
                        </div>

                        <!-- Social Links -->
                        <div class="space-y-4">
                            <h3 class="text-lg font-medium text-gray-900 dark:text-white">Social Media Links</h3>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                @foreach(['facebook', 'twitter', 'instagram', 'linkedin'] as $platform)
                                    <div class="relative">
                                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                            <i class="fab fa-{{ $platform }} text-gray-400"></i>
                                        </div>
                                        <input type="url"
                                               name="social_links[{{ $platform }}]"
                                               value="{{ $basicInfo->social_links[$platform] ?? '' }}"
                                               placeholder="{{ ucfirst($platform) }} URL"
                                               class="block w-full pl-10 rounded-md border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-white shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Fixed Save Button -->
                <div class="border-t border-gray-200 dark:border-gray-700 p-4 bg-gray-50 dark:bg-gray-800 rounded-b-lg">
                    <div class="flex justify-end">
                        <button type="submit"
                                class="inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            <i class="fas fa-save mr-2"></i>
                            Save Changes
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-dashboard.layout.master-layout>
