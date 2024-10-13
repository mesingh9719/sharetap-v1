<div id="step4" class="step" style="display: none;">
                        <h2 class="text-3xl font-bold mb-6 text-indigo-800">Step 4: Choose Template</h2>
                        <p class="mb-4 text-red-600" id="templateWarning"></p>
                        <div class="mb-6 flex justify-center">
                            <button type="button" id="randomTemplatesBtn"
                                class="bg-indigo-500 hover:bg-indigo-600 text-white font-bold py-2 px-4 rounded-lg transition-colors duration-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-opacity-50">
                                Select <span id="availableTemplatesCount"></span> Random Templates
                            </button>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-8" id="templateContainer">
                            @foreach ($templates as $template)
                                <div class="border rounded-lg p-6 cursor-pointer hover:shadow-xl transition-shadow duration-300 bg-white template-item"
                                    data-template-id="{{ $template->id }}">
                                    <img src="{{ asset($template->path) ?? '' }}" alt="Template Preview"
                                        class="w-full h-48 object-cover rounded mb-4">
                                    <div class="flex items-center justify-between">
                                        <label for="template-{{ $template->id }}"
                                            class="font-medium text-lg">{{ 'Template ' . $template->id }}</label>
                                        <input type="checkbox" id="template-{{ $template->id }}" name="templates[]"
                                            value="{{ $template->id }}"
                                            class="form-checkbox h-5 w-5 text-indigo-600 template-checkbox">
                                    </div>
                                </div>
                            @endforeach
    </div>
</div>
    