@foreach ($plans as $item)
<div class="bg-white rounded-lg shadow-lg overflow-hidden transform transition duration-500 hover:scale-105">
    <div class="px-6 py-8">
        <h3 class="text-2xl font-semibold text-gray-900 text-center">{{ $item->name ?? 'Plan' }}</h3>
        <p class="mt-4 text-gray-500 text-center">{{ $item->description }}</p>
        <p class="mt-8 text-center">
            <span class="text-4xl font-extrabold text-gray-900">{{ $item->price }}</span>
            <span class="text-base font-medium text-gray-500">/month</span>
        </p>
        <ul class="mt-8 space-y-4">
            @php
                $features = [
                    [$item->nfc_cards . ' Digital Cards', true],
                    [$item->available_templates . ' Templates', true],
                    ['Standard Support', true],
                    ['Appointment Scheduling', $item->is_appointment_scheduling],
                    ['Product Listing', $item->is_product_listing],
                    ['Service Listing', $item->is_service_listing],
                    ['Testimonials', $item->is_testimonials],
                ];
            @endphp
            @foreach ($features as [$text, $condition])
                <li class="flex items-center">
                    <svg class="h-6 w-6 {{ $condition ? 'text-green-500' : 'text-red-500' }}" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="{{ $condition ? 'M5 13l4 4L19 7' : 'M6 18L18 6M6 6l12 12' }}"></path>
                    </svg>
                    <span class="ml-3 text-base text-gray-700">{{ $text }}</span>
                </li>
            @endforeach
        </ul>
    </div>
    <div class="px-6 py-8 bg-gray-50">
        <button type="button" 
                class="w-full py-3 px-4 rounded-md transition duration-300 ease-in-out focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 focus:ring-offset-gray-100 plan-select-btn bg-indigo-600 text-white hover:bg-indigo-700"
                onclick="selectPlan(this, '{{ $item->id }}', '{{ $item->available_templates }}')">
            Select Plan
        </button>
    </div>
</div>
@endforeach

<script>
function selectPlan(button, planId, availableTemplates) {
    localStorage.setItem('selectedPlanId', planId);
    localStorage.setItem('availableTemplates', availableTemplates);
    
    // Remove the 'selected' class from all buttons
    document.querySelectorAll('.plan-select-btn').forEach(btn => {
        btn.classList.remove('bg-green-600', 'hover:bg-green-700');
        btn.classList.add('bg-indigo-600', 'hover:bg-indigo-700');
        btn.textContent = 'Select Plan';
    });

    // Add the 'selected' class to the clicked button
    button.classList.remove('bg-indigo-600', 'hover:bg-indigo-700');
    button.classList.add('bg-green-600', 'hover:bg-green-700');
    button.textContent = 'Selected';

    console.log('Selected Plan ID:', planId);
    console.log('Available Templates:', availableTemplates);

    // Add a hidden input field to the form
    var form = document.querySelector('form');
    var hiddenInput = document.createElement('input');
    hiddenInput.type = 'hidden';
    hiddenInput.name = 'selected_plan_id';
    hiddenInput.value = planId;
    form.appendChild(hiddenInput);
}
</script>
