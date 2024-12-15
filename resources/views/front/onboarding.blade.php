<x-front.layouts.app-layout>
    <style>
        .business-active {
            background-color: rgb(147, 51, 234);
            color: white;
        }

        .individual-active {
            background-color: rgb(147, 51, 234);
            color: white;
        }

        .inactive {
            background-color: rgb(243, 244, 246);
            color: rgb(107, 114, 128);
        }

        #templates-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 1.5rem;
            padding: 1rem 0;
        }

        .template-option {
            min-height: 300px;
        }
    </style>
    <div class="min-h-screen bg-gray-50 py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-4xl mx-auto bg-white shadow-xl rounded-xl overflow-hidden">
            <div class="px-6 py-8 sm:p-12">
                <div class="text-center mb-10">
                    <h2 class="text-3xl font-extrabold text-gray-900 mb-4">
                        Welcome to ShareTap, {{ auth()->user()->name ?? '' }}!
                    </h2>
                    <p class="text-xl text-gray-600">
                        Let's set up your digital ecosystem in just a few steps
                    </p>
                </div>

                <div class="mb-8">
                    <div class="flex justify-between mb-2">
                        <div class="text-xs text-gray-600">Progress</div>
                        <div class="text-xs text-gray-600" id="progress-text">Step 1 of 3</div>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-2.5">
                        <div class="bg-purple-600 h-2.5 rounded-full transition-all duration-500" id="progress-bar"
                            style="width: 33%"></div>
                    </div>
                </div>

                <form id="onboarding-form" action="{{ route('onboarding.store') }}" method="POST" class="space-y-8">
                    @csrf

                    <!-- Step 1: Business Information -->
                    <div id="step-1" class="onboarding-step">
                        <!-- Type Toggle -->
                        <div class="mb-8">
                            <div class="flex justify-center space-x-4 mb-6">
                                <button type="button" id="business-toggle"
                                    class="px-6 py-3 text-sm font-medium rounded-lg transition-all duration-200 business-active"
                                    onclick="toggleAccountType('business')">
                                    Business Account
                                </button>
                                <button type="button" id="individual-toggle"
                                    class="px-6 py-3 text-sm font-medium rounded-lg transition-all duration-200"
                                    onclick="toggleAccountType('individual')">
                                    Individual Account
                                </button>
                            </div>
                        </div>

                        <!-- Business Form -->
                        <div id="business-form">
                            <h3 class="text-2xl font-semibold text-gray-800 mb-6">
                                Tell Us About Your Business
                            </h3>

                            <div class="grid md:grid-cols-2 gap-6">
                                <div>
                                    <label for="business-name" class="block text-sm font-medium text-gray-700 mb-2">
                                        Business Name
                                    </label>
                                    <input type="text" id="business-name" name="business_name"
                                        class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-purple-500 focus:border-purple-500"
                                        placeholder="Enter your business name" required>
                                </div>

                                <div>
                                    <label for="business-type" class="block text-sm font-medium text-gray-700 mb-2">
                                        Business Type
                                    </label>
                                    <select id="business-type" name="business_type"
                                        class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-purple-500 focus:border-purple-500"
                                        required>
                                        <option value="">Select Business Type</option>
                                        <option value="ecommerce">E-commerce</option>
                                        <option value="service">Service-Based</option>
                                        <option value="portfolio">Portfolio/Freelance</option>
                                        <option value="nonprofit">Non-Profit</option>
                                        <option value="other">Other</option>
                                    </select>
                                </div>
                            </div>

                            <div class="mt-6">
                                <label for="business-description" class="block text-sm font-medium text-gray-700 mb-2">
                                    Brief Business Description
                                </label>
                                <textarea id="business-description" name="business_description"
                                    class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-purple-500 focus:border-purple-500"
                                    rows="4" placeholder="Describe what your business does" required></textarea>
                            </div>
                        </div>

                        <!-- Individual Form -->
                        <div id="individual-form" class="hidden">
                            <h3 class="text-2xl font-semibold text-gray-800 mb-6">
                                Tell Us About Yourself
                            </h3>

                            <div class="grid md:grid-cols-2 gap-6">
                                <div>
                                    <label for="full-name" class="block text-sm font-medium text-gray-700 mb-2">
                                        Full Name
                                    </label>
                                    <input type="text" id="full-name" name="full_name"
                                        class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-purple-500 focus:border-purple-500"
                                        placeholder="Enter your full name">
                                </div>

                                <div>
                                    <label for="profession" class="block text-sm font-medium text-gray-700 mb-2">
                                        Profession/Title
                                    </label>
                                    <input type="text" id="profession" name="profession"
                                        class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-purple-500 focus:border-purple-500"
                                        placeholder="e.g., Freelance Designer, Developer">
                                </div>
                            </div>

                            <div class="mt-6">
                                <label for="specialization" class="block text-sm font-medium text-gray-700 mb-2">
                                    Specialization
                                </label>
                                <select id="specialization" name="specialization"
                                    class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-purple-500 focus:border-purple-500">
                                    <option value="">Select Your Specialization</option>
                                    <option value="developer">Developer</option>
                                    <option value="designer">Designer</option>
                                    <option value="photographer">Photographer</option>
                                    <option value="writer">Writer</option>
                                    <option value="artist">Artist</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>

                            <div class="mt-6">
                                <label for="bio" class="block text-sm font-medium text-gray-700 mb-2">
                                    Professional Bio
                                </label>
                                <textarea id="bio" name="bio"
                                    class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-purple-500 focus:border-purple-500"
                                    rows="4" placeholder="Tell us about yourself, your work, and your interests"></textarea>
                            </div>
                        </div>

                        <input type="hidden" name="account_type" id="account-type" value="business">
                    </div>

                    <!-- Step 2: Website Goals -->
                    <div id="step-2" class="onboarding-step hidden">
                        <h3 class="text-2xl font-semibold text-gray-800 mb-6">
                            What's Your Website Goal?
                        </h3>

                        <div class="grid md:grid-cols-3 gap-6">
                            <!-- Sell Products Option -->
                            <div class="website-goal-option relative">
                                <input type="radio" id="goal-sell" name="website_goal" value="sell"
                                    class="peer hidden">
                                <label for="goal-sell"
                                    class="block p-6 border-2 border-gray-200 rounded-lg cursor-pointer hover:border-purple-500 transition-all duration-200 peer-checked:border-purple-500 peer-checked:bg-purple-50">
                                    <div class="text-center">
                                        <svg class="mx-auto h-12 w-12 text-gray-400 group-hover:text-purple-500"
                                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                                        </svg>
                                        <h4 class="text-lg font-semibold">Sell Products</h4>
                                        <p class="text-sm text-gray-500 mt-2">Create an online store</p>
                                    </div>
                                </label>
                            </div>

                            <!-- Showcase Portfolio Option -->
                            <div class="website-goal-option relative">
                                <input type="radio" id="goal-showcase" name="website_goal" value="showcase"
                                    class="peer hidden">
                                <label for="goal-showcase"
                                    class="block p-6 border-2 border-gray-200 rounded-lg cursor-pointer hover:border-purple-500 transition-all duration-200 peer-checked:border-purple-500 peer-checked:bg-purple-50">
                                    <div class="text-center">
                                        <svg class="mx-auto h-12 w-12 text-gray-400 group-hover:text-purple-500"
                                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.071 0l-.172.171a5 5 0 01-7.07 0z" />
                                        </svg>
                                        <h4 class="text-lg font-semibold">Showcase Portfolio</h4>
                                        <p class="text-sm text-gray-500 mt-2">Highlight your work</p>
                                    </div>
                                </label>
                            </div>

                            <!-- Offer Services Option -->
                            <div class="website-goal-option relative">
                                <input type="radio" id="goal-service" name="website_goal" value="service"
                                    class="peer hidden">
                                <label for="goal-service"
                                    class="block p-6 border-2 border-gray-200 rounded-lg cursor-pointer hover:border-purple-500 transition-all duration-200 peer-checked:border-purple-500 peer-checked:bg-purple-50">
                                    <div class="text-center">
                                        <svg class="mx-auto h-12 w-12 text-gray-400 group-hover:text-purple-500"
                                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                        </svg>
                                        <h4 class="text-lg font-semibold">Offer Services</h4>
                                        <p class="text-sm text-gray-500 mt-2">Book clients online</p>
                                    </div>
                                </label>
                            </div>
                        </div>
                    </div>


                    <!-- Step 3: Template Selection -->
                    <div id="step-3" class="onboarding-step hidden">
                        <h3 class="text-2xl font-semibold text-gray-800 mb-6">
                            Recommended Templates for You
                        </h3>

                        <div class="grid md:grid-cols-3 gap-6" id="templates-container">
                            <!-- Templates will be loaded here dynamically -->
                            <div class="flex items-center justify-center h-48">
                                <div class="animate-spin rounded-full h-12 w-12 border-b-2 border-purple-500"></div>
                            </div>
                        </div>
                    </div>

                    <!-- Navigation Buttons -->
                    <div class="flex justify-between mt-10">
                        <button type="button" id="prev-step"
                            class="hidden px-6 py-3 bg-gray-100 text-gray-700 rounded-md hover:bg-gray-200 transition">
                            Previous
                        </button>
                        <button type="button" id="next-step"
                            class="px-6 py-3 bg-purple-600 text-white rounded-md hover:bg-purple-700 transition">
                            Continue
                        </button>
                        <button type="submit" id="submit-btn"
                            class="hidden px-6 py-3 bg-purple-600 text-white rounded-md hover:bg-purple-700 transition">
                            Finish
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Templates Browse Modal -->
    <div id="templates-modal"
        class="fixed inset-0 bg-gray-600 bg-opacity-50 hidden overflow-y-auto h-full w-full z-50">
        <div class="relative top-5 mx-auto p-5 border w-11/12 max-w-4xl shadow-lg rounded-md bg-white">
            <div class="flex flex-col max-h-[80vh]">
                <!-- Header -->
                <div class="flex justify-between items-center border-b pb-4">
                    <h3 class="text-xl font-semibold text-gray-900">Browse All Templates</h3>
                    <button type="button" onclick="closeTemplatesModal()" class="text-gray-400 hover:text-gray-500">
                        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>

                <!-- Search and Filter -->
                <div class="py-4 border-b">
                    <div class="flex gap-4">
                        <div class="flex-1">
                            <input type="text" id="template-search"
                                class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-purple-500"
                                placeholder="Search templates...">
                        </div>
                        <select id="template-filter"
                            class="px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-purple-500">
                            <option value="">All Categories</option>
                            <option value="business">Business</option>
                            <option value="portfolio">Portfolio</option>
                            <option value="ecommerce">E-commerce</option>
                        </select>
                    </div>
                </div>

                <!-- Templates Grid -->
                <div class="overflow-y-auto py-4" style="max-height: calc(80vh - 180px);">
                    <div id="modal-templates-grid" class="grid grid-cols-2 md:grid-cols-3 gap-4">
                        <!-- Templates will be loaded here -->
                        <div class="col-span-full text-center py-8">
                            <div class="inline-block animate-spin rounded-full h-8 w-8 border-b-2 border-purple-500">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <x-slot:js>
        <script>
            // Define saveFormData as a global function
            function saveFormData() {
                const form = document.getElementById('onboarding-form');
                const formData = {};

                // Collect all form inputs
                const inputs = form.querySelectorAll('input, select, textarea');
                inputs.forEach(input => {
                    if (input.type === 'radio') {
                        if (input.checked) {
                            formData[input.name] = input.value;
                        }
                    } else {
                        formData[input.name] = input.value;
                    }
                });

                localStorage.setItem('onboardingData', JSON.stringify(formData));
                localStorage.setItem('currentStep', currentStep.toString());
            }
            let currentStep = 0;

            document.addEventListener('DOMContentLoaded', function() {
                const steps = document.querySelectorAll('.onboarding-step');
                const prevBtn = document.getElementById('prev-step');
                const nextBtn = document.getElementById('next-step');
                const submitBtn = document.getElementById('submit-btn');
                const progressBar = document.getElementById('progress-bar');
                const progressText = document.getElementById('progress-text');


                // Initialize form data from localStorage
                function initializeFormData() {
                    const savedData = localStorage.getItem('onboardingData');
                    if (savedData) {
                        const formData = JSON.parse(savedData);

                        // Restore account type
                        if (formData.account_type) {
                            toggleAccountType(formData.account_type);
                        }

                        // Restore form fields
                        Object.keys(formData).forEach(key => {
                            const element = document.querySelector(`[name="${key}"]`);
                            if (element) {
                                if (element.type === 'radio') {
                                    const radio = document.querySelector(
                                        `[name="${key}"][value="${formData[key]}"]`);
                                    if (radio) {
                                        radio.checked = true;
                                        radio.dispatchEvent(new Event('change'));
                                    }
                                } else {
                                    element.value = formData[key];
                                }
                            }
                        });

                        // Restore current step
                        const savedStep = localStorage.getItem('currentStep');
                        if (savedStep) {
                            currentStep = parseInt(savedStep);
                            showStep(currentStep);
                        }
                    }
                }

                // Save form data to localStorage
                function saveFormData() {
                    const form = document.getElementById('onboarding-form');
                    const formData = {};

                    // Collect all form inputs
                    const inputs = form.querySelectorAll('input, select, textarea');
                    inputs.forEach(input => {
                        if (input.type === 'radio') {
                            if (input.checked) {
                                formData[input.name] = input.value;
                            }
                        } else {
                            formData[input.name] = input.value;
                        }
                    });

                    localStorage.setItem('onboardingData', JSON.stringify(formData));
                    localStorage.setItem('currentStep', currentStep.toString());
                }

                // Validate form fields
                function validateStep(step) {
                    const errors = [];
                    const form = document.getElementById('onboarding-form');

                    switch (step) {
                        case 0: // Business/Individual Information
                            const accountType = document.getElementById('account-type').value;

                            if (accountType === 'business') {
                                const businessName = form.querySelector('[name="business_name"]').value;
                                const businessType = form.querySelector('[name="business_type"]').value;
                                const businessDescription = form.querySelector('[name="business_description"]').value;

                                if (!businessName.trim()) errors.push('Business name is required');
                                if (!businessType) errors.push('Please select a business type');
                                if (!businessDescription.trim()) {
                                    errors.push('Business description is required');
                                } else if (businessDescription.trim().length < 20) {
                                    errors.push('Business description must be at least 20 characters');
                                }
                            } else {
                                const fullName = form.querySelector('[name="full_name"]').value;
                                const profession = form.querySelector('[name="profession"]').value;
                                const specialization = form.querySelector('[name="specialization"]').value;
                                const bio = form.querySelector('[name="bio"]').value;

                                if (!fullName.trim()) errors.push('Full name is required');
                                if (!profession.trim()) errors.push('Profession is required');
                                if (!specialization) errors.push('Please select a specialization');
                                if (!bio.trim()) {
                                    errors.push('Professional bio is required');
                                } else if (bio.trim().length < 20) {
                                    errors.push('Professional bio must be at least 20 characters');
                                }
                            }
                            break;

                        case 1: // Website Goals
                            const selectedGoal = form.querySelector('input[name="website_goal"]:checked');
                            if (!selectedGoal) errors.push('Please select a website goal');
                            break;

                        case 2: // Template Selection
                            const selectedTemplate = form.querySelector('input[name="website_template"]:checked');
                            if (!selectedTemplate) errors.push('Please select a template');
                            break;
                    }

                    return errors;
                }

                // Show validation errors
                function showErrors(errors) {
                    // Remove any existing error messages
                    const existingErrors = document.querySelectorAll('.error-message');
                    existingErrors.forEach(error => error.remove());

                    if (errors.length > 0) {
                        const errorContainer = document.createElement('div');
                        errorContainer.className = 'bg-red-50 border-l-4 border-red-500 p-4 my-4 error-message';

                        const errorList = document.createElement('ul');
                        errorList.className = 'list-disc pl-4 text-red-700';

                        errors.forEach(error => {
                            const li = document.createElement('li');
                            li.textContent = error;
                            errorList.appendChild(li);
                        });

                        errorContainer.appendChild(errorList);
                        const currentStepElement = document.querySelector('.onboarding-step:not(.hidden)');
                        currentStepElement.insertBefore(errorContainer, currentStepElement.firstChild);
                    }
                }

                // Update progress bar
                function updateProgress() {
                    const progress = ((currentStep + 1) / steps.length) * 100;
                    progressBar.style.width = `${progress}%`;
                    progressText.textContent = `Step ${currentStep + 1} of ${steps.length}`;
                }

                function showStep(stepIndex) {
                    steps.forEach(step => step.classList.add('hidden'));
                    steps[stepIndex].classList.remove('hidden');

                    prevBtn.classList.toggle('hidden', stepIndex === 0);
                    nextBtn.classList.toggle('hidden', stepIndex === steps.length - 1);
                    submitBtn.classList.toggle('hidden', stepIndex !== steps.length - 1);

                    // Load templates when reaching step 3 (index 2)
                    if (stepIndex === 2) {
                        loadRecommendedTemplates();
                    }

                    updateProgress();
                }

                nextBtn.addEventListener('click', function(e) {
                    const errors = validateStep(currentStep);
                    if (errors.length > 0) {
                        showErrors(errors);
                        return;
                    }

                    saveFormData();

                    if (currentStep < steps.length - 1) {
                        currentStep++;
                        showStep(currentStep);
                    }
                });

                prevBtn.addEventListener('click', function() {
                    if (currentStep > 0) {
                        currentStep--;
                        showStep(currentStep);
                        saveFormData();
                    }
                });

                // Form submission
                const form = document.getElementById('onboarding-form');
                form.addEventListener('submit', async function(e) {
                    e.preventDefault();

                    const errors = validateStep(currentStep);
                    if (errors.length > 0) {
                        showErrors(errors);
                        return;
                    }

                    try {
                        const formData = new FormData(form);
                        const response = await fetch(form.action, {
                            method: 'POST',
                            body: formData,
                            headers: {
                                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]')
                                    .content,
                                'Accept': 'application/json'
                            }
                        });

                        const data = await response.json();

                        if (response.ok) {
                            // Clear localStorage
                            localStorage.removeItem('onboardingData');
                            localStorage.removeItem('currentStep');

                            // Show success message if needed
                            if (data.success) {
                                // Redirect to website builder
                                window.location.href = data.redirect;
                            }
                        } else {
                            // Handle validation errors
                            if (response.status === 422) {
                                const errors = Object.values(data.errors).flat();
                                showErrors(errors);
                            } else {
                                throw new Error(data.message || 'Form submission failed');
                            }
                        }
                    } catch (error) {
                        showErrors([error.message]);
                    }
                });

                // Save form data when inputs change
                const formInputs = form.querySelectorAll('input, select, textarea');
                formInputs.forEach(input => {
                    input.addEventListener('change', saveFormData);
                    input.addEventListener('blur', saveFormData);
                });

                // Initialize the form
                initializeFormData();
                updateProgress();


            });
        </script>

        <script>
            // Define setupTemplateSelection function
            function setupTemplateSelection() {
                const templateOptions = document.querySelectorAll('.template-option');
                templateOptions.forEach(option => {
                    const input = option.querySelector('input[type="radio"]');
                    if (!input) return; // Skip for "Browse All" button

                    const label = option.querySelector('label');

                    label.addEventListener('click', function() {
                        // Uncheck all other radio inputs
                        document.querySelectorAll('input[name="website_template"]').forEach(radio => {
                            radio.checked = false;
                        });

                        // Select only this radio input
                        input.checked = true;

                        // Remove active class from all labels
                        templateOptions.forEach(opt => {
                            const optLabel = opt.querySelector('label');
                            if (optLabel) {
                                optLabel.classList.remove('border-purple-500', 'bg-purple-50');
                                optLabel.classList.add('border-gray-200');
                            }
                            // Reset "Select/Selected" text
                            const selectSpan = opt.querySelector('.px-3.py-1.bg-purple-600');
                            if (selectSpan) {
                                selectSpan.textContent = 'Select';
                            }
                            // Remove "Selected" badge
                            const badge = opt.querySelector('.bg-purple-100.text-purple-800');
                            if (badge) {
                                badge.textContent = 'Recommended';
                                badge.classList.remove('bg-purple-100', 'text-purple-800');
                                badge.classList.add('bg-green-100', 'text-green-800');
                            }
                        });

                        // Update this template's UI
                        label.classList.remove('border-gray-200');
                        label.classList.add('border-purple-500', 'bg-purple-50');

                        // Update "Select" to "Selected" text
                        const selectSpan = label.querySelector('.px-3.py-1.bg-purple-600');
                        if (selectSpan) {
                            selectSpan.textContent = 'Selected';
                        }

                        // Update badge to "Selected"
                        const badge = label.querySelector('.bg-green-100.text-green-800');
                        if (badge) {
                            badge.textContent = 'Selected';
                            badge.classList.remove('bg-green-100', 'text-green-800');
                            badge.classList.add('bg-purple-100', 'text-purple-800');
                        }

                        // Save selection to form data
                        saveFormData();
                    });
                });
            }


            function loadRecommendedTemplates() {
                const templatesContainer = document.getElementById('templates-container');
                const selectedTemplateId = document.querySelector('input[name="website_template"]:checked')?.value;

                fetch('{{ route('recommended-templates') }}')
                    .then(response => response.json())
                    .then(templates => {
                        // Store in allTemplates if empty
                        if (allTemplates.length === 0) {
                            allTemplates = [...templates];
                        }

                        let templateHtml = '';

                        // First, add selected template if it exists and isn't in recommended templates
                        if (selectedTemplateId) {
                            const selectedTemplate = allTemplates.find(t => t.id.toString() === selectedTemplateId);
                            if (selectedTemplate && !templates.find(t => t.id.toString() === selectedTemplateId)) {
                                templateHtml += generateTemplateCard(selectedTemplate, true);
                            }
                        }

                        // Add recommended templates
                        templates.forEach(template => {
                            const isSelected = selectedTemplateId === template.id.toString();
                            if (!isSelected || template.id.toString() !== selectedTemplateId) {
                                templateHtml += generateTemplateCard(template, isSelected);
                            }
                        });

                        // Add Browse All button
                        templateHtml += `
                <div class="template-option">
                    <button type="button"
                        onclick="openTemplatesModal()"
                        class="block h-full w-full border-2 border-gray-200 rounded-lg hover:border-purple-500 transition-all duration-200">
                        <div class="flex flex-col items-center justify-center h-full p-6 text-center">
                            <div class="w-16 h-16 bg-purple-100 rounded-full flex items-center justify-center mx-auto mb-4">
                                <svg class="w-8 h-8 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                                </svg>
                            </div>
                            <h4 class="text-lg font-semibold text-purple-600">Browse All Templates</h4>
                            <p class="text-sm text-gray-500 mt-2">Explore our full collection</p>
                        </div>
                    </button>
                </div>
            `;

                        templatesContainer.innerHTML = templateHtml;
                        setupTemplateSelection();
                    })
                    .catch(error => {
                        console.error('Error loading templates:', error);
                        templatesContainer.innerHTML = `
                <div class="col-span-3 text-center text-red-600">
                    <p>Error loading templates. Please try again later.</p>
                </div>
            `;
                    });
            }

            // Preview template function (if not already defined)
            function previewTemplate(fileName) {
                window.open(`{{ url('front/templates/designes/') }}/${fileName}`, '_blank');
            }

            // Call this function when step 3 is shown
            const nextBtn = document.getElementById('next-step');
            nextBtn.addEventListener('click', function() {
                if (currentStep === 1) { // If moving to step 3
                    loadRecommendedTemplates();
                }
            });
        </script>

        <script>
            document.addEventListener('DOMContentLoaded', function() {
                // Remove the previous event listeners for website goals
                const goalOptions = document.querySelectorAll('.website-goal-option');

                goalOptions.forEach(option => {
                    const input = option.querySelector('input[type="radio"]');
                    const label = option.querySelector('label');

                    // Add click event to the label
                    label.addEventListener('click', function() {
                        // Check the radio input
                        input.checked = true;

                        // Remove active class from all labels
                        goalOptions.forEach(opt => {
                            opt.querySelector('label').classList.remove('border-purple-500',
                                'bg-purple-50');
                            opt.querySelector('label').classList.add('border-gray-200');
                        });

                        // Add active class to clicked label
                        label.classList.remove('border-gray-200');
                        label.classList.add('border-purple-500', 'bg-purple-50');
                    });

                    // Add change event to the radio input
                    input.addEventListener('change', function() {
                        if (this.checked) {
                            // Remove active class from all labels
                            goalOptions.forEach(opt => {
                                opt.querySelector('label').classList.remove('border-purple-500',
                                    'bg-purple-50');
                                opt.querySelector('label').classList.add('border-gray-200');
                            });

                            // Add active class to selected label
                            label.classList.remove('border-gray-200');
                            label.classList.add('border-purple-500', 'bg-purple-50');
                        }
                    });
                });

                // Ensure at least one validation before proceeding
                const nextBtn = document.getElementById('next-step');
                nextBtn.addEventListener('click', function(e) {
                    if (currentStep === 1) { // If we're on the website goals step
                        const selectedGoal = document.querySelector('input[name="website_goal"]:checked');
                        if (!selectedGoal) {
                            e.preventDefault();
                            alert('Please select a website goal to continue');
                            return;
                        }
                    }
                });
            });
        </script>

        <script>
            // Add these functions to your script
            let allTemplates = [];
            let filteredTemplates = [];

            function openTemplatesModal() {
                document.getElementById('templates-modal').classList.remove('hidden');
                document.body.style.overflow = 'hidden';
                loadAllTemplates();
            }

            function closeTemplatesModal() {
                document.getElementById('templates-modal').classList.add('hidden');
                document.body.style.overflow = 'auto';
            }

            async function loadAllTemplates() {
                const gridContainer = document.getElementById('modal-templates-grid');

                try {
                    const response = await fetch('{{ route('active-templates') }}');
                    allTemplates = await response.json();
                    filteredTemplates = [...allTemplates];
                    renderTemplates(filteredTemplates);
                } catch (error) {
                    console.error('Error loading templates:', error);
                    gridContainer.innerHTML = `
            <div class="col-span-full text-center text-red-600">
                <p>Error loading templates. Please try again later.</p>
            </div>
        `;
                }
            }

            function renderTemplates(templates) {
                const gridContainer = document.getElementById('modal-templates-grid');
                const selectedTemplateId = document.querySelector('input[name="website_template"]:checked')?.value;

                // Show all templates in modal (removed the filter)
                gridContainer.innerHTML = templates.map(template => {
                    const isSelected = selectedTemplateId === template.id.toString();
                    return `
            <div class="template-card border ${isSelected ? 'border-purple-500 bg-purple-50' : 'border-gray-300'} rounded-lg overflow-hidden transition-all duration-200">
                <img src="{{ asset('${template.path}') }}"
                    alt="${template.name.trim()}"
                    class="w-full h-32 object-cover">
                <div class="p-3">
                    <div class="flex items-center justify-between">
                        <h4 class="font-semibold text-sm">${template.name.trim()}</h4>
                        ${isSelected ? '<span class="text-xs bg-purple-100 text-purple-800 px-2 py-1 rounded">Selected</span>' : ''}
                    </div>
                    <div class="flex justify-between items-center mt-2">
                        <button type="button"
                            onclick="previewTemplate('${template.file_name}')"
                            class="text-sm text-purple-600 hover:text-purple-700">
                            Preview
                        </button>
                        <button type="button"
                            onclick="selectTemplate(${template.id})"
                            class="px-3 py-1 text-sm ${isSelected ? 'bg-purple-200 hover:bg-purple-300' : 'bg-purple-600 hover:bg-purple-700'} text-white rounded transition-colors">
                            ${isSelected ? 'Selected' : 'Select'}
                        </button>
                    </div>
                </div>
            </div>
        `;
                }).join('');
            }


            async function selectTemplate(templateId) {
                // Find the template
                const selectedTemplate = allTemplates.find(t => t.id === templateId);
                if (!selectedTemplate) return;

                // Unselect all templates
                document.querySelectorAll('input[name="website_template"]').forEach(radio => {
                    radio.checked = false;
                });

                // Save template selection
                const templatesContainer = document.getElementById('templates-container');

                // Rebuild recommended templates section with new selection
                fetch('{{ route('recommended-templates') }}')
                    .then(response => response.json())
                    .then(recommendedTemplates => {
                        let templateHtml = '';

                        // Add selected template first if it's not in recommended templates
                        if (!recommendedTemplates.find(t => t.id === selectedTemplate.id)) {
                            templateHtml += generateTemplateCard(selectedTemplate, true, false);
                        }

                        // Add recommended templates
                        recommendedTemplates.forEach(template => {
                            const isThisSelected = template.id === selectedTemplate.id;
                            templateHtml += generateTemplateCard(template, isThisSelected, true);
                        });

                        // Add Browse All button
                        templateHtml += `
                <div class="template-option">
                    <button type="button"
                        onclick="openTemplatesModal()"
                        class="block h-full w-full border-2 border-gray-200 rounded-lg hover:border-purple-500 transition-all duration-200">
                        <div class="flex flex-col items-center justify-center h-full p-6 text-center">
                            <div class="w-16 h-16 bg-purple-100 rounded-full flex items-center justify-center mx-auto mb-4">
                                <svg class="w-8 h-8 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                                </svg>
                            </div>
                            <h4 class="text-lg font-semibold text-purple-600">Browse All Templates</h4>
                            <p class="text-sm text-gray-500 mt-2">Explore our full collection</p>
                        </div>
                    </button>
                </div>
            `;

                        templatesContainer.innerHTML = templateHtml;

                        // Setup template selection handlers
                        setupTemplateSelection();

                        try {
                            // Try to save form data
                            saveFormData();
                        } catch (error) {
                            console.error('Error saving form data:', error);
                        }

                        // Close modal
                        closeTemplatesModal();
                    })
                    .catch(error => {
                        console.error('Error updating templates:', error);
                    });
            }


            function generateTemplateCard(template, isSelected = false, isRecommended = template.is_recommended) {
                return `
        <div class="template-option relative group">
            <input type="radio"
                id="template-${template.id}"
                name="website_template"
                value="${template.id}"
                class="peer hidden"
                ${isSelected ? 'checked' : ''}>
            <label for="template-${template.id}"
                class="block border-2 ${isSelected ? 'border-purple-500 bg-purple-50' : 'border-gray-200'}
                rounded-lg overflow-hidden cursor-pointer hover:border-purple-500 transition-all duration-200
                peer-checked:border-purple-500 peer-checked:bg-purple-50">
                <img src="{{ asset('${template.path}') }}"
                    alt="${template.name.trim()}"
                    class="w-full h-48 object-cover">
                <div class="p-4">
                    <div class="flex items-center justify-between mb-2">
                        <h4 class="text-lg font-semibold">${template.name.trim()}</h4>
                        ${isSelected ?
                            '<span class="bg-purple-100 text-purple-800 text-xs px-2 py-1 rounded">Selected</span>' :
                            (isRecommended ?
                                '<span class="bg-green-100 text-green-800 text-xs px-2 py-1 rounded">Recommended</span>' :
                                '')}
                    </div>
                    <div class="mt-4 flex justify-between items-center">
                        <button type="button"
                            onclick="event.preventDefault(); previewTemplate('${template.file_name}')"
                            class="text-purple-600 font-medium hover:text-purple-700">
                            Preview
                        </button>
                        <span class="px-3 py-1 bg-purple-600 text-white text-sm rounded">
                            ${isSelected ? 'Selected' : 'Select'}
                        </span>
                    </div>
                </div>
            </label>
        </div>
    `;
            }


            // Add search and filter functionality
            document.getElementById('template-search')?.addEventListener('input', function(e) {
                const searchTerm = e.target.value.toLowerCase();
                const filterValue = document.getElementById('template-filter').value;

                filteredTemplates = allTemplates.filter(template => {
                    const matchesSearch = template.name.toLowerCase().includes(searchTerm);
                    const matchesFilter = !filterValue || template.category === filterValue;
                    return matchesSearch && matchesFilter;
                });

                renderTemplates(filteredTemplates);
            });

            document.getElementById('template-filter')?.addEventListener('change', function(e) {
                const filterValue = e.target.value;
                const searchTerm = document.getElementById('template-search').value.toLowerCase();

                filteredTemplates = allTemplates.filter(template => {
                    const matchesSearch = template.name.toLowerCase().includes(searchTerm);
                    const matchesFilter = !filterValue || template.category === filterValue;
                    return matchesSearch && matchesFilter;
                });

                renderTemplates(filteredTemplates);
            });
        </script>
        <!-- Add this JavaScript to your script section -->
        <script>
            function toggleAccountType(type) {
                const businessForm = document.getElementById('business-form');
                const individualForm = document.getElementById('individual-form');
                const businessToggle = document.getElementById('business-toggle');
                const individualToggle = document.getElementById('individual-toggle');
                const accountTypeInput = document.getElementById('account-type');

                if (type === 'business') {
                    businessForm.classList.remove('hidden');
                    individualForm.classList.add('hidden');
                    businessToggle.classList.add('business-active');
                    businessToggle.classList.remove('inactive');
                    individualToggle.classList.remove('individual-active');
                    individualToggle.classList.add('inactive');
                    accountTypeInput.value = 'business';
                } else {
                    businessForm.classList.add('hidden');
                    individualForm.classList.remove('hidden');
                    businessToggle.classList.remove('business-active');
                    businessToggle.classList.add('inactive');
                    individualToggle.classList.add('individual-active');
                    individualToggle.classList.remove('inactive');
                    accountTypeInput.value = 'individual';
                }
            }

            // Initialize the toggle buttons
            document.addEventListener('DOMContentLoaded', function() {
                const businessToggle = document.getElementById('business-toggle');
                const individualToggle = document.getElementById('individual-toggle');

                businessToggle.classList.add('business-active');
                individualToggle.classList.add('inactive');
            });
        </script>
    </x-slot:js>
</x-front.layouts.app-layout>
