<x-front.layouts.app-layout>
    <x-front.create-card-page-info-section/>
    <div class="max-w-6xl mx-auto overflow-hidden">
        <div class="p-8 sm:p-12">
            <form action="{{ route('card.store') }}" method="POST" enctype="multipart/form-data" id="cardForm">
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
                                    id="progressText">20%</span>
                            </div>
                        </div>
                        <div class="overflow-hidden h-2 mb-4 text-xs flex rounded bg-indigo-200">
                            <div id="progressBar"
                                class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-indigo-500 transition-all duration-500 ease-in-out"
                                style="width: 20%">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-lg shadow-inner p-8">
                    <!-- Step 1: Choose a Plan -->
                    <div id="step1" class="step">
                        <h2 class="text-3xl font-bold mb-6 text-indigo-800">Step 1: Choose a Plan</h2>
                        <p class="text-gray-600 mb-8">Select a plan that aligns with your goals. Explore our packages
                            below to find the perfect fit for you.</p>
                        <div class="bg-gray-100 py-12 px-4 sm:px-6 lg:px-8">
                            <div class="max-w-7xl mx-auto">
                                <div class="text-center mb-12">
                                    <h2 class="text-3xl font-extrabold text-gray-900 sm:text-4xl">
                                        Choose the Right Plan for You
                                    </h2>
                                    <p class="mt-4 text-xl text-gray-600">
                                        Simple, transparent pricing that grows with you
                                    </p>
                                </div>
                                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                                    <x-front.plan-step />
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Step 2: Personal Information -->
                    <div id="step2" class="step" style="display: none;">
                        <h2 class="text-3xl font-bold mb-6 text-indigo-800">Step 2: Personal Information</h2>
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
                                <label for="profession"
                                    class="block mb-2 font-medium text-gray-700">Profession</label>
                                <input type="text" id="profession" name="profession"
                                    class="w-full px-4 py-3 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 transition duration-150 ease-in-out">
                            </div>
                        </div>
                    </div>

                    <!-- Step 3: Contact Information -->
                    <div id="step3" class="step" style="display: none;">
                        <h2 class="text-3xl font-bold mb-6 text-indigo-800">Step 3: Contact Information</h2>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                            <div>
                                <label for="email" class="block mb-2 font-medium text-gray-700">Email</label>
                                <input type="email" id="email" name="email"
                                    class="w-full px-4 py-3 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 transition duration-150 ease-in-out"
                                    required>
                            </div>
                            <div>
                                <label for="phone" class="block mb-2 font-medium text-gray-700">Phone
                                    Number</label>
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
                                    class="w-full px-4 py-3 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 transition duration-150 ease-in-out">
                            </div>
                        </div>
                    </div>

                    <!-- Step 4: Choose Template -->
                    <x-front.template-selection />

                    <!-- Step 5: Profile Picture and Social Media -->
                    <div id="step5" class="step" style="display: none;">
                        <h2 class="text-3xl font-bold mb-8 text-indigo-800 text-center">Step 5: Profile Picture and
                            Social Media</h2>
                        <x-front.profile-picture-setup />
                    </div>

                    <!-- Navigation buttons -->
                    <div class="mt-12 flex justify-between">
                        <button type="button" id="prevBtn" style="display: none;"
                            class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-3 px-6 rounded-lg transition-colors duration-300 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-opacity-50">
                            Previous
                        </button>
                        <button type="button" id="nextBtn"
                            class="bg-indigo-500 hover:bg-indigo-600 text-white font-bold py-3 px-6 rounded-lg transition-colors duration-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-opacity-50">
                            Next
                        </button>
                        <button type="submit" id="submitBtn" style="display: none;"
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
            $(document).ready(function() {
                let currentStep = 1;
                const totalSteps = 5;
                let selectedTemplates = [];
                let availableTemplates = 0;

                function updateProgress() {
                    const progress = (currentStep / totalSteps) * 100;
                    $('#progressBar').css('width', progress + '%');
                    $('#progressText').text(progress + '%');
                }

                function showStep(step) {
                    $('.step').hide();
                    $('#step' + step).show();
                    updateProgress();

                    if (step > 1) {
                        $('#prevBtn').show();
                    } else {
                        $('#prevBtn').hide();
                    }

                    if (step === totalSteps) {
                        $('#nextBtn').hide();
                        $('#submitBtn').show();
                    } else {
                        $('#nextBtn').show();
                        $('#submitBtn').hide();
                    }

                    if (step === 4) {
                        availableTemplates = parseInt(localStorage.getItem('availableTemplates') || '0');
                        $('#availableTemplatesCount').text(availableTemplates);
                        updateTemplateSelection();
                    }
                }

                function updateTemplateSelection() {
                    $('.template-item').each(function() {
                        const checkbox = $(this).find('.template-checkbox');
                        if (checkbox.prop('checked')) {
                            $(this).addClass('ring-4 ring-indigo-500');
                        } else {
                            $(this).removeClass('ring-4 ring-indigo-500');
                        }
                    });

                    if (selectedTemplates.length >= availableTemplates) {
                        $('#templateWarning').text(
                            'You have reached the maximum selection. Please unselect one template before choosing another.'
                        );
                    } else {
                        $('#templateWarning').text('');
                    }
                }

                $('#nextBtn').click(function() {
                    if (currentStep < totalSteps) {
                        currentStep++;
                        showStep(currentStep);
                    }
                });

                $('#prevBtn').click(function() {
                    if (currentStep > 1) {
                        currentStep--;
                        showStep(currentStep);
                    }
                });

                $('.template-item').click(function() {
                    const templateId = $(this).data('template-id');
                    const checkbox = $(this).find('.template-checkbox');

                    if (checkbox.prop('checked')) {
                        checkbox.prop('checked', false);
                        $(this).removeClass('ring-4 ring-indigo-500');
                        selectedTemplates = selectedTemplates.filter(id => id !== templateId);
                    } else {
                        if (selectedTemplates.length >= availableTemplates) {
                            $('#templateWarning').text(
                                'You have reached the maximum selection. Please unselect one template before choosing another.'
                            );
                            return;
                        }
                        checkbox.prop('checked', true);
                        $(this).addClass('ring-4 ring-indigo-500');
                        selectedTemplates.push(templateId);
                    }

                    updateTemplateSelection();
                });

                $('#randomTemplatesBtn').click(function() {
                    const allTemplates = @json($templates->pluck('id'));
                    selectedTemplates = [];
                    $('.template-item').removeClass('ring-4 ring-indigo-500');
                    $('.template-checkbox').prop('checked', false);

                    while (selectedTemplates.length < availableTemplates) {
                        const randomId = allTemplates[Math.floor(Math.random() * allTemplates.length)];
                        if (!selectedTemplates.includes(randomId)) {
                            selectedTemplates.push(randomId);
                            $(`#template-${randomId}`).prop('checked', true);
                            $(`#template-${randomId}`).closest('.template-item').addClass(
                                'ring-4 ring-indigo-500');
                        }
                    }

                    updateTemplateSelection();
                });

                $('#cardForm').submit(function(e) {
                    e.preventDefault();
                    // Add any form validation here if needed
                    this.submit();
                });

                // Updated image preview function
                function previewImage(event, previewId) {
                    const file = event.target.files[0];
                    if (file) {
                        const reader = new FileReader();

                        reader.onload = function(e) {
                            const previewElement = document.getElementById(previewId);
                            previewElement.innerHTML =
                                `<img src="${e.target.result}" class="object-cover w-full h-full rounded-lg" alt="Preview">`;

                            // Hide the default content
                            const defaultContent = previewElement.querySelectorAll('svg, p');
                            defaultContent.forEach(el => el.style.display = 'none');
                        }

                        reader.readAsDataURL(file);
                    }
                }

                // Attach event listeners for file inputs
                $('#profile_picture, #cover_picture').on('change', function(event) {
                    const previewId = this.id === 'profile_picture' ? 'profile-preview' : 'cover-preview';
                    previewImage(event, previewId);
                });

                // Initialize the form
                showStep(currentStep);
            });
        </script>
    </x-slot:js>
</x-front.layouts.app-layout>
