<!-- resources/views/auth/register.blade.php -->
<x-front.layouts.app-layout>
    <div
        class="min-h-screen bg-gradient-to-br from-purple-600 to-indigo-700 flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-md w-full space-y-8 bg-white rounded-xl shadow-2xl p-10">
            <!-- Logo -->
            <div class="text-center">
                <img class="mx-auto h-12 w-auto" src="{{ asset('images/logo.svg') }}" alt="ShareTap">
                <h2 class="mt-6 text-3xl font-extrabold text-gray-900">
                    Create Your ShareTap Account
                </h2>
                <p class="mt-2 text-sm text-gray-600">
                    Start building your digital ecosystem in minutes
                </p>
            </div>

            <form id="registration-form" class="mt-8 space-y-6" method="POST">
                @csrf

                <!-- Form Fields with Better Validation UI -->
                <div class="space-y-4">
                    <div class="relative">
                        <input id="full-name" name="name" type="text" required
                            class="peer w-full px-3 py-2 border border-gray-300 rounded-md placeholder-transparent focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent"
                            placeholder="Full Name">
                        <label for="full-name"
                            class="absolute left-2 -top-5 text-sm text-gray-600 peer-placeholder-shown:text-gray-400 peer-placeholder-shown:top-2 peer-placeholder-shown:left-3 transition-all peer-focus:-top-5 peer-focus:left-2 peer-focus:text-purple-600">
                            Full Name
                        </label>
                        <p class="mt-1 hidden text-sm text-red-600" id="name-error"></p>
                    </div>

                    <div class="relative">
                        <input id="email-address" name="email" type="email" required
                            class="peer w-full px-3 py-2 border border-gray-300 rounded-md placeholder-transparent focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent"
                            placeholder="Email address">
                        <label for="email-address"
                            class="absolute left-2 -top-5 text-sm text-gray-600 peer-placeholder-shown:text-gray-400 peer-placeholder-shown:top-2 peer-placeholder-shown:left-3 transition-all peer-focus:-top-5 peer-focus:left-2 peer-focus:text-purple-600">
                            Email Address
                        </label>
                        <p class="mt-1 hidden text-sm text-red-600" id="email-error"></p>
                    </div>

                    <div class="relative">
                        <input id="password" name="password" type="password" required
                            class="peer w-full px-3 py-2 border border-gray-300 rounded-md placeholder-transparent focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent"
                            placeholder="Password">
                        <label for="password"
                            class="absolute left-2 -top-5 text-sm text-gray-600 peer-placeholder-shown:text-gray-400 peer-placeholder-shown:top-2 peer-placeholder-shown:left-3 transition-all peer-focus:-top-5 peer-focus:left-2 peer-focus:text-purple-600">
                            Password
                        </label>
                        <p class="mt-1 hidden text-sm text-red-600" id="password-error"></p>
                    </div>

                    <div class="relative">
                        <input id="password_confirmation" name="password_confirmation" type="password" required
                            class="peer w-full px-3 py-2 border border-gray-300 rounded-md placeholder-transparent focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent"
                            placeholder="Confirm Password">
                        <label for="password_confirmation"
                            class="absolute left-2 -top-5 text-sm text-gray-600 peer-placeholder-shown:text-gray-400 peer-placeholder-shown:top-2 peer-placeholder-shown:left-3 transition-all peer-focus:-top-5 peer-focus:left-2 peer-focus:text-purple-600">
                            Confirm Password
                        </label>
                        <p class="mt-1 hidden text-sm text-red-600" id="password-confirmation-error"></p>
                    </div>
                </div>

                <!-- Password Requirements -->
                <div class="text-xs text-gray-500 space-y-1 mb-4">
                    <p id="req-length" class="flex items-center">
                        <span class="mr-2">◯</span> At least 8 characters
                    </p>
                    <p id="req-letter" class="flex items-center">
                        <span class="mr-2">◯</span> At least one letter
                    </p>
                    <p id="req-number" class="flex items-center">
                        <span class="mr-2">◯</span> At least one number
                    </p>
                    <p id="req-special" class="flex items-center">
                        <span class="mr-2">◯</span> At least one special character
                    </p>
                </div>

                <!-- Terms Checkbox -->
                <div class="flex items-center">
                    <input id="terms" name="terms" type="checkbox" required
                        class="h-4 w-4 text-purple-600 focus:ring-purple-500 border-gray-300 rounded">
                    <label for="terms" class="ml-2 block text-sm text-gray-900">
                        I agree to the
                        <a href="#" class="text-purple-600 hover:text-purple-500">Terms of Service</a>
                        and
                        <a href="#" class="text-purple-600 hover:text-purple-500">Privacy Policy</a>
                    </label>
                </div>
                <p class="mt-1 hidden text-sm text-red-600" id="terms-error"></p>

                <!-- Submit Button -->
                <div>
                    <button type="submit" id="submit-btn"
                        class="group relative w-full flex justify-center py-3 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-gradient-to-r from-purple-500 to-indigo-600 hover:from-purple-600 hover:to-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-purple-500 transition duration-300 ease-in-out transform hover:scale-105 disabled:opacity-50 disabled:cursor-not-allowed"
                        disabled>
                        <span class="absolute left-0 inset-y-0 flex items-center pl-3">
                            <svg class="h-5 w-5 text-purple-300 group-hover:text-purple-400"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z"
                                    clip-rule="evenodd" />
                            </svg>
                        </span>
                        Create Account
                    </button>
                </div>
            </form>

            <div class="relative my-4">
                <div class="absolute inset-0 flex items-center">
                    <div class="w-full border-t border-gray-300"></div>
                </div>
                <div class="relative flex justify-center text-sm">
                    <span class="px-2 bg-white text-gray-500">
                        Or continue with
                    </span>
                </div>
            </div>

            <div class="grid grid-cols-3 gap-3">
                <div>
                    <a href="#"
                        class="w-full inline-flex justify-center py-2 px-4 border border-gray-300 rounded-md shadow-sm bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
                        <span class="sr-only">Sign in with Google</span>
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M12.24 10.285V14.4h6.806c-.275 1.765-2.056 5.174-6.806 5.174-4.095 0-7.439-3.389-7.439-7.574s3.345-7.574 7.439-7.574c2.33 0 3.891.989 4.785 1.849l3.254-3.138C18.189 1.186 15.479 0 12.24 0c-6.635 0-12 5.365-12 12s5.365 12 12 12c6.926 0 11.52-4.869 11.52-11.726 0-.788-.085-1.39-.189-1.989H12.24z" />
                        </svg>
                    </a>
                </div>
                <div>
                    <a href="#"
                        class="w-full inline-flex justify-center py-2 px-4 border border-gray-300 rounded-md shadow-sm bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
                        <span class="sr-only">Sign in with Facebook</span>
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M22.675 0h-21.35c-.732 0-1.325.593-1.325 1.325v21.351c0 .731.593 1.324 1.325 1.324h11.495v-9.294h-3.128v-3.622h3.128v-2.671c0-3.1 1.893-4.788 4.659-4.788 1.325 0 2.463.099 2.795.143v3.24l-1.918.001c-1.504 0-1.794.715-1.794 1.763v2.313h3.588l-.467 3.622h-3.121v9.294h6.116c.73 0 1.323-.593 1.323-1.325v-21.35c0-.732-.593-1.325-1.325-1.325z" />
                        </svg>
                    </a>
                </div>
                <div>
                    <a href="#"
                        class="w-full inline-flex justify-center py-2 px-4 border border-gray-300 rounded-md shadow-sm bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
                        <span class="sr-only">Sign in with LinkedIn</span>
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>


        <script>
            // Add this JavaScript to replace your existing script
            document.addEventListener('DOMContentLoaded', function() {
                const form = document.getElementById('registration-form');
                const nameInput = document.getElementById('full-name');
                const emailInput = document.getElementById('email-address');
                const passwordInput = document.getElementById('password');
                const confirmPasswordInput = document.getElementById('password_confirmation');
                const termsCheckbox = document.getElementById('terms');
                const submitBtn = document.getElementById('submit-btn');

                // Password requirements elements
                const reqLength = document.getElementById('req-length');
                const reqLetter = document.getElementById('req-letter');
                const reqNumber = document.getElementById('req-number');
                const reqSpecial = document.getElementById('req-special');

                // Validation states
                let validations = {
                    name: false,
                    email: false,
                    password: false,
                    passwordMatch: false,
                    terms: false
                };

                // Helper to show error
                function showError(element, message) {
                    const errorElement = document.getElementById(`${element.name}-error`);
                    if (errorElement) {
                        errorElement.textContent = message;
                        errorElement.classList.remove('hidden');
                        element.classList.add('border-red-500');
                        element.classList.remove('border-green-500', 'border-gray-300');
                    }
                }

                // Helper to show success
                function showSuccess(element) {
                    const errorElement = document.getElementById(`${element.name}-error`);
                    if (errorElement) {
                        errorElement.classList.add('hidden');
                        element.classList.remove('border-red-500');
                        element.classList.add('border-green-500');
                    }
                }

                // Helper to reset validation state
                function resetValidation(element) {
                    const errorElement = document.getElementById(`${element.name}-error`);
                    if (errorElement) {
                        errorElement.classList.add('hidden');
                        element.classList.remove('border-red-500', 'border-green-500');
                        element.classList.add('border-gray-300');
                    }
                }

                // Validate name
                function validateName() {
                    const name = nameInput.value.trim();
                    const nameRegex = /^[A-Za-z\s]{2,50}$/;

                    if (name === '') {
                        showError(nameInput, 'Name is required');
                        validations.name = false;
                    } else if (!nameRegex.test(name)) {
                        showError(nameInput, 'Name should only contain letters and spaces (2-50 characters)');
                        validations.name = false;
                    } else {
                        showSuccess(nameInput);
                        validations.name = true;
                    }
                    updateSubmitButton();
                }

                // Validate email
                function validateEmail() {
                    const email = emailInput.value.trim();
                    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

                    if (email === '') {
                        showError(emailInput, 'Email is required');
                        validations.email = false;
                    } else if (!emailRegex.test(email)) {
                        showError(emailInput, 'Please enter a valid email address');
                        validations.email = false;
                    } else {
                        showSuccess(emailInput);
                        validations.email = true;
                    }
                    updateSubmitButton();
                }

                // Validate password
                function validatePassword() {
                    const password = passwordInput.value;
                    const requirements = {
                        length: password.length >= 8,
                        letter: /[A-Za-z]/.test(password),
                        number: /\d/.test(password),
                        special: /[@$!%*#?&]/.test(password)
                    };

                    // Update requirement indicators
                    reqLength.firstElementChild.textContent = requirements.length ? '✓' : '◯';
                    reqLength.classList.toggle('text-green-600', requirements.length);

                    reqLetter.firstElementChild.textContent = requirements.letter ? '✓' : '◯';
                    reqLetter.classList.toggle('text-green-600', requirements.letter);

                    reqNumber.firstElementChild.textContent = requirements.number ? '✓' : '◯';
                    reqNumber.classList.toggle('text-green-600', requirements.number);

                    reqSpecial.firstElementChild.textContent = requirements.special ? '✓' : '◯';
                    reqSpecial.classList.toggle('text-green-600', requirements.special);

                    validations.password = Object.values(requirements).every(Boolean);

                    if (!validations.password) {
                        showError(passwordInput, 'Password must meet all requirements');
                    } else {
                        showSuccess(passwordInput);
                    }
                    validatePasswordMatch();
                    updateSubmitButton();
                }

                // Validate password match
                function validatePasswordMatch() {
                    if (confirmPasswordInput.value === '') {
                        resetValidation(confirmPasswordInput);
                        validations.passwordMatch = false;
                    } else if (confirmPasswordInput.value !== passwordInput.value) {
                        showError(confirmPasswordInput, 'Passwords do not match');
                        validations.passwordMatch = false;
                    } else {
                        showSuccess(confirmPasswordInput);
                        validations.passwordMatch = true;
                    }
                    updateSubmitButton();
                }

                // Validate terms
                function validateTerms() {
                    validations.terms = termsCheckbox.checked;
                    const errorElement = document.getElementById('terms-error');

                    if (!validations.terms) {
                        errorElement.textContent = 'You must accept the Terms of Service';
                        errorElement.classList.remove('hidden');
                    } else {
                        errorElement.classList.add('hidden');
                    }
                    updateSubmitButton();
                }

                // Update submit button state
                function updateSubmitButton() {
                    const isValid = Object.values(validations).every(Boolean);
                    submitBtn.disabled = !isValid;
                    submitBtn.classList.toggle('opacity-50', !isValid);
                    submitBtn.classList.toggle('cursor-not-allowed', !isValid);
                }

                // Event listeners for real-time validation
                nameInput.addEventListener('input', validateName);
                nameInput.addEventListener('blur', validateName);

                emailInput.addEventListener('input', validateEmail);
                emailInput.addEventListener('blur', validateEmail);

                passwordInput.addEventListener('input', validatePassword);
                passwordInput.addEventListener('blur', validatePassword);

                confirmPasswordInput.addEventListener('input', validatePasswordMatch);
                confirmPasswordInput.addEventListener('blur', validatePasswordMatch);

                termsCheckbox.addEventListener('change', validateTerms);

                // Form submission
                form.addEventListener('submit', async function(e) {
                    e.preventDefault();

                    if (!Object.values(validations).every(Boolean)) {
                        return;
                    }

                    submitBtn.disabled = true;
                    submitBtn.innerHTML = `
            <svg class="animate-spin -ml-1 mr-3 h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
            </svg>
            Creating account...
        `;

                    try {
                        const formData = new FormData(form);
                        const response = await fetch('{{ route('user.register') }}', {
                            method: 'POST',
                            body: formData,
                            headers: {
                                'X-CSRF-TOKEN': '{{ csrf_token() }}',
                                'Accept': 'application/json'
                            }
                        });

                        const data = await response.json();

                        if (!response.ok) {
                            if (data.errors) {
                                Object.keys(data.errors).forEach(key => {
                                    const errorElement = document.getElementById(`${key}-error`);
                                    if (errorElement) {
                                        errorElement.textContent = data.errors[key][0];
                                        errorElement.classList.remove('hidden');
                                    }
                                });
                            }
                            submitBtn.disabled = false;
                            submitBtn.innerHTML = 'Create Account';
                            return;
                        }

                        window.location.href = data.redirect;

                    } catch (error) {
                        console.error('Error:', error);
                        submitBtn.disabled = false;
                        submitBtn.innerHTML = 'Create Account';
                    }
                });
            });
        </script>

</x-front.layouts.app-layout>
