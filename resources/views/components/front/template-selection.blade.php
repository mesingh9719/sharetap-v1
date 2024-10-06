@foreach($templates as $template)
    <div
        class="border rounded-lg p-6 cursor-pointer hover:shadow-xl transition-shadow duration-300 bg-white"
        :class="{ 'ring-4 ring-indigo-500': $loop->iteration == 1 }">
        <img src="{{ asset($template->path) ?? '' }}" alt="Template Preview"
             class="w-full h-48 object-cover rounded mb-4">
        <div class="flex items-center justify-between">
            <label for="template-{{ $template->id }}" class="font-medium text-lg">{{ 'Template ' . $template->id }}</label>
            <input type="radio" id="template-{{ $template->id }}" name="template"
                   value="template-{{ $template->id }}" class="form-radio h-5 w-5 text-indigo-600"
                   required>
        </div>
    </div>
@endforeach