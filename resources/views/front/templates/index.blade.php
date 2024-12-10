<x-dashboard.layout.master-layout>
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-4xl font-bold text-gray-800 mb-2">Choose Your Templates</h1>
        <p class="text-xl text-gray-600 mb-8">Select one or more templates that suit your needs. Click on a card to
            select/deselect it.</p>

            @if (session('success'))
            <div x-data="{ show: true }" x-show="show" x-init="setTimeout(() => show = false, 5000)"
                 class="mb-8 mx-4 sm:mx-auto sm:max-w-xl md:max-w-2xl"
                 x-transition:enter="transition ease-out duration-300"
                 x-transition:enter-start="opacity-0 transform translate-y-2"
                 x-transition:enter-end="opacity-100 transform translate-y-0"
                 x-transition:leave="transition ease-in duration-300"
                 x-transition:leave-start="opacity-100 transform translate-y-0"
                 x-transition:leave-end="opacity-0 transform translate-y-2">
                <div class="flex items-center justify-between bg-green-50 border-l-4 border-green-400 p-4 rounded-r-lg shadow-md">
                    <div class="flex items-center">
                        <svg class="h-6 w-6 text-green-400 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <span class="text-green-700 font-medium">{{ session('success') }}</span>
                    </div>
                    <button @click="show = false" class="text-green-400 hover:text-green-600 focus:outline-none">
                        <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>
        @endif

        @if (session('error'))
            <div x-data="{ show: true }" x-show="show" x-init="setTimeout(() => show = false, 5000)"
                 class="mb-8 mx-4 sm:mx-auto sm:max-w-xl md:max-w-2xl"
                 x-transition:enter="transition ease-out duration-300"
                 x-transition:enter-start="opacity-0 transform translate-y-2"
                 x-transition:enter-end="opacity-100 transform translate-y-0"
                 x-transition:leave="transition ease-in duration-300"
                 x-transition:leave-start="opacity-100 transform translate-y-0"
                 x-transition:leave-end="opacity-0 transform translate-y-2">
                <div class="flex items-center justify-between bg-red-50 border-l-4 border-red-400 p-4 rounded-r-lg shadow-md">
                    <div class="flex items-center">
                        <svg class="h-6 w-6 text-red-400 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <span class="text-red-700 font-medium">{{ session('error') }}</span>
                    </div>
                    <button @click="show = false" class="text-red-400 hover:text-red-600 focus:outline-none">
                        <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>
        @endif

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @php
                $activeTemplateId = auth()->user()->userTemplate->template_id ?? null;
                $selectedTemplates = $selectedTemplates ?? []; // Add a variable for pre-selected templates if applicable
            @endphp

            {{-- Display the active template first --}}
            @if ($activeTemplateId)
                @foreach ($templates as $template)
                    @if ($template->id == $activeTemplateId)
                        <div
                            class="bg-blue-100 border-blue-500 border-2 rounded-xl shadow-lg overflow-hidden transition-all duration-300 transform hover:scale-105 cursor-pointer">
                            <div class="relative">
                                <img src="{{ asset($template->path) }}" alt="{{ $template->name }}"
                                    class="w-full h-56 object-cover">
                            </div>
                            <div class="p-6">
                                <h3 class="text-2xl font-semibold text-gray-800 mb-2">{{ $template->name }}</h3>
                                <p class="text-gray-600 mb-4">{{ $template->description }}</p>
                                <div class="flex justify-between items-center">
                                    <span class="px-4 py-2 bg-green-500 text-white rounded-lg font-semibold">
                                        Active Template
                                    </span>
                                    <button
                                        class="px-4 py-2 bg-gray-200 text-gray-700 rounded-lg font-semibold hover:bg-gray-300 transition-colors duration-300">
                                        Preview
                                    </button>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            @endif

            {{-- Display other templates --}}
            @foreach ($templates as $template)
                @if ($template->id != $activeTemplateId)
                    <div
                        class="bg-white rounded-xl shadow-lg overflow-hidden transition-all duration-300 transform hover:scale-105 cursor-pointer border-2
                        @if (in_array($template->id, $selectedTemplates)) border-green-500 @else border-transparent @endif">
                        <div class="relative">
                            <img src="{{ asset($template->path) }}" alt="{{ $template->name }}"
                                class="w-full h-56 object-cover">
                        </div>
                        <div class="p-6">
                            <h3 class="text-2xl font-semibold text-gray-800 mb-2">{{ $template->name }}</h3>
                            <p class="text-gray-600 mb-4">{{ $template->description }}</p>
                            <div class="flex justify-between items-center">
                                @if (in_array($template->id, $selectedTemplates))
                                    <span class="px-4 py-2 bg-green-500 text-white rounded-lg font-semibold">
                                        Selected
                                    </span>
                                @else
                                    <form action="{{ route('templates.update', $activeTemplateId) }}" method="post">
                                        @csrf
                                        @method('put')
                                        <input type="hidden" name="template_id" value="{{ $template->id }}">
                                        <button
                                            class="px-4 py-2 bg-blue-500 text-white rounded-lg font-semibold hover:bg-blue-600 transition-colors duration-300">
                                            Select
                                        </button>
                                    </form>
                                @endif
                                <button
                                    class="px-4 py-2 bg-gray-200 text-gray-700 rounded-lg font-semibold hover:bg-gray-300 transition-colors duration-300 previewBtn"
                                    data-id="{{ $template->id }}">
                                    Preview
                                </button>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
    </div>

    {{-- Preview Modal --}}
    <div id="preview-modal" class="fixed inset-0 bg-black bg-opacity-75 z-50 hidden flex items-center justify-center">
        {{-- Modal Container --}}
        <div class="bg-white rounded-lg shadow-lg w-[90%] max-w-4xl max-h-[90%] relative">
            {{-- Close Button --}}
            <button onclick="closePreview()"
                class="absolute top-3 right-3 bg-red-500 text-white rounded-full w-8 h-8 flex items-center justify-center hover:bg-red-600 transition">
                ✕
            </button>

            {{-- Modal Content --}}
            <div class="overflow-auto max-h-[80vh] p-4">
                <img id="preview-image" src="" alt="Template Preview" class="w-full object-contain">
            </div>
        </div>
    </div>


    {{-- Preview Modal Script --}}
    <script>
        // Close Preview Modal
        function closePreview() {
            document.getElementById('preview-modal').classList.add('hidden');
        }

        // Open Preview Modal with AJAX
        document.querySelectorAll('.previewBtn').forEach(btn => {
            btn.addEventListener('click', function() {
                const templateId = this.getAttribute('data-id');
                const url = `/templates/${templateId}`;

                fetch(url)
                    .then(response => response.json())
                    .then(data => {
                        // Update modal content
                        document.getElementById('preview-image').src = data.path;

                        // Show modal
                        document.getElementById('preview-modal').classList.remove('hidden');
                    })
                    .catch(error => {
                        console.error('Error fetching template data:', error);
                        alert('Could not load template preview.');
                    });
            });
        });

        document.getElementById('preview-modal').addEventListener('click', function(e) {
            if (e.target.id === 'preview-modal') {
                closePreview();
            }
        });
    </script>
</x-dashboard.layout.master-layout>
