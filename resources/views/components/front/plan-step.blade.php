@foreach ($plans as $item)
<div class="bg-white rounded-lg shadow-lg overflow-hidden transform transition duration-500 hover:scale-105">
    <div class="px-6 py-8">
      <h3 class="text-2xl font-semibold text-gray-900 text-center">{{ $item->name ?? '' }}</h3>
      <p class="mt-4 text-gray-500 text-center">{{ $item->description }}</p>
      <p class="mt-8 text-center">
        <span class="text-4xl font-extrabold text-gray-900">{{ $item->price }}</span>
        <span class="text-base font-medium text-gray-500">/month</span>
      </p>
      <ul class="mt-8 space-y-4">
        <li class="flex items-center">
          <svg class="h-6 w-6 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
          <span class="ml-3 text-base text-gray-700">{{ $item->nfc_cards ?? '' }} Digital Cards</span>
        </li>
        <li class="flex items-center">
          <svg class="h-6 w-6 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
          <span class="ml-3 text-base text-gray-700">{{ $item->available_templates ?? 0 }} Templates</span>
        </li>
        <li class="flex items-center">
          <svg class="h-6 w-6 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
          <span class="ml-3 text-base text-gray-700">Standard Support</span>
        </li>
        <li class="flex items-center">
          @if($item->is_appointment_scheduling == 1)
            <svg class="h-6 w-6 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
          @else
            <svg class="h-6 w-6 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
          @endif
          <span class="ml-3 text-base text-gray-700">Appointment Scheduling</span>
        </li>
        <li class="flex items-center">
          @if($item->is_product_listing == 1)
            <svg class="h-6 w-6 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
          @else
            <svg class="h-6 w-6 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
          @endif
          <span class="ml-3 text-base text-gray-700">Product Listing</span>
        </li>
        <li class="flex items-center">
          @if($item->is_service_listing == 1)
            <svg class="h-6 w-6 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
          @else
            <svg class="h-6 w-6 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
          @endif
          <span class="ml-3 text-base text-gray-700">Service Listing</span>
        </li>
        <li class="flex items-center">
          @if($item->is_testimonials == 1)
            <svg class="h-6 w-6 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
          @else
            <svg class="h-6 w-6 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
          @endif
          <span class="ml-3 text-base text-gray-700">Testimonials</span>
        </li>
      </ul>
    </div>
    <div class="px-6 py-8 bg-gray-50">
      <button type="button" 
              class="w-full bg-indigo-600 text-white py-3 px-4 rounded-md hover:bg-indigo-700 transition duration-300 ease-in-out focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 focus:ring-offset-gray-100"
              onclick="document.getElementById('selectedPlanId').value = '{{ $item->id }}';">
        Select Plan
      </button>
    </div>
  </div>
@endforeach
<input type="hidden" id="selectedPlanId" name="selected_plan_id" value="">