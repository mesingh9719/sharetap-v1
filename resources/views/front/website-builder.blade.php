<x-front.layouts.app-layout>
    <div class="min-h-screen bg-gray-100">
        <!-- Header -->
        <nav class="bg-white shadow-sm fixed top-0 left-0 right-0 z-50">
            <div class="mx-auto px-4">
                <div class="flex justify-between h-16 items-center">
                    <div class="flex items-center">
                        <span class="text-xl font-bold text-purple-600">ShareTap Builder</span>
                        <div class="ml-6 flex space-x-3">
                            <button id="undoBtn" class="p-2 text-gray-500 hover:bg-gray-100 rounded" disabled>
                                <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 10h10a8 8 0 018 8v2M3 10l6 6m-6-6l6-6" />
                                </svg>
                            </button>
                            <button id="redoBtn" class="p-2 text-gray-500 hover:bg-gray-100 rounded" disabled>
                                <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M21 10h-10a8 8 0 00-8 8v2M21 10l-6 6m6-6l-6-6" />
                                </svg>
                            </button>
                            <button id="deviceDesktop" class="p-2 text-purple-600 hover:bg-gray-100 rounded">
                                <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                            </button>
                            <button id="deviceTablet" class="p-2 text-gray-500 hover:bg-gray-100 rounded">
                                <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 18h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z" />
                                </svg>
                            </button>
                            <button id="deviceMobile" class="p-2 text-gray-500 hover:bg-gray-100 rounded">
                                <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z" />
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="flex items-center space-x-4">
                        <button id="seoButton" class="px-4 py-2 bg-green-600 text-white rounded hover:bg-green-700">
                            SEO Settings
                        </button>
                        <button id="previewBtn" class="px-4 py-2 bg-gray-600 text-white rounded hover:bg-gray-700">
                            Preview
                        </button>
                        <button id="saveBtn" class="px-4 py-2 bg-purple-600 text-white rounded hover:bg-purple-700">
                            Save
                        </button>
                        <div class="relative inline-block">
                            <button id="exportButton"
                                class="px-4 py-2 bg-purple-600 text-white rounded hover:bg-purple-700">
                                Export
                            </button>
                            <div id="exportDropdown"
                                class="hidden absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg">
                                <div class="py-1">
                                    <button
                                        class="block w-full text-left px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"
                                        data-format="html">Export as HTML</button>
                                    <button
                                        class="block w-full text-left px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"
                                        data-format="zip">Export as ZIP</button>
                                    <button
                                        class="block w-full text-left px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"
                                        data-format="json">Export as JSON</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>

        <!-- Main Content Area -->
        <div class="pt-16 flex h-screen">
            <!-- Left Sidebar -->
            <div class="w-64 bg-white border-r flex flex-col h-full">
                <div class="p-4 border-b">
                    <h2 class="font-semibold text-gray-800">Elements</h2>
                </div>
                <div class="flex-1 overflow-y-auto p-4">
                    <div class="space-y-4">
                        <!-- Sections -->
                        <div class="element-group">
                            <h3 class="text-sm font-medium text-gray-500 mb-2">Layout Sections</h3>
                            <div class="space-y-2">
                                <div class="element-item p-3 bg-gray-50 rounded cursor-move" draggable="true"
                                    data-type="hero">
                                    Hero Section
                                </div>
                                <div class="element-item p-3 bg-gray-50 rounded cursor-move" draggable="true"
                                    data-type="features">
                                    Features Grid
                                </div>
                                <div class="element-item p-3 bg-gray-50 rounded cursor-move" draggable="true"
                                    data-type="about">
                                    About Section
                                </div>
                                <div class="element-item p-3 bg-gray-50 rounded cursor-move" draggable="true"
                                    data-type="testimonials">
                                    Testimonials
                                </div>
                                <div class="element-item p-3 bg-gray-50 rounded cursor-move" draggable="true"
                                    data-type="contact">
                                    Contact Form
                                </div>
                                <div class="element-item p-3 bg-gray-50 rounded cursor-move" draggable="true"
                                    data-type="customGrid">
                                    Custom Grid
                                </div>
                            </div>
                        </div>

                        <!-- Components -->
                        <div class="element-group">
                            <h3 class="text-sm font-medium text-gray-500 mb-2">Components</h3>
                            <div class="space-y-2">
                                <div class="element-item p-3 bg-gray-50 rounded cursor-move" draggable="true"
                                    data-type="button">
                                    Button
                                </div>
                                <div class="element-item p-3 bg-gray-50 rounded cursor-move" draggable="true"
                                    data-type="image">
                                    Image
                                </div>
                                <div class="element-item p-3 bg-gray-50 rounded cursor-move" draggable="true"
                                    data-type="text">
                                    Text Block
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Preview Area -->
            <div class="flex-1 bg-gray-100 overflow-hidden">
                <div id="preview-container" class="h-full overflow-y-auto">
                    <div id="preview-frame" class="bg-white mx-auto transition-all duration-300"
                        style="width: 100%; max-width: 1200px;">
                        <div id="drop-zone" class="min-h-screen p-4">
                            <!-- Template content will be here -->
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Sidebar -->
            <div class="w-80 bg-white border-l flex flex-col h-full">
                <div class="p-4 border-b">
                    <h2 class="font-semibold text-gray-800">Properties</h2>
                </div>
                <div class="flex-1 overflow-y-auto p-4">
                    <div id="element-properties" class="space-y-6">
                        <!-- Style Properties -->
                        <div class="property-group">
                            <h3 class="text-sm font-medium text-gray-500 mb-3">Style</h3>
                            <div class="space-y-4">
                                <!-- Colors -->
                                <div>
                                    <label class="block text-sm text-gray-600 mb-2">Color Scheme</label>
                                    <div class="grid grid-cols-6 gap-2">
                                        <button class="w-8 h-8 rounded-full bg-purple-600"
                                            data-color="purple"></button>
                                        <button class="w-8 h-8 rounded-full bg-blue-600" data-color="blue"></button>
                                        <button class="w-8 h-8 rounded-full bg-green-600" data-color="green"></button>
                                        <button class="w-8 h-8 rounded-full bg-red-600" data-color="red"></button>
                                        <button class="w-8 h-8 rounded-full bg-yellow-600"
                                            data-color="yellow"></button>
                                        <button class="w-8 h-8 rounded-full bg-gray-600" data-color="gray"></button>
                                    </div>
                                </div>

                                <!-- Typography -->
                                <div>
                                    <label class="block text-sm text-gray-600 mb-2">Font Family</label>
                                    <select class="w-full border rounded-md p-2">
                                        <option value="sans">Sans Serif</option>
                                        <option value="serif">Serif</option>
                                        <option value="mono">Monospace</option>
                                    </select>
                                </div>

                                <!-- Size -->
                                <div>
                                    <label class="block text-sm text-gray-600 mb-2">Size</label>
                                    <input type="range" class="w-full" min="0" max="100"
                                        value="50">
                                </div>
                            </div>
                        </div>

                        <!-- Content Properties -->
                        <div class="property-group">
                            <h3 class="text-sm font-medium text-gray-500 mb-3">Content</h3>
                            <div class="space-y-4">
                                <div>
                                    <label class="block text-sm text-gray-600 mb-2">Text Content</label>
                                    <textarea class="w-full border rounded-md p-2" rows="4"></textarea>
                                </div>
                                <div>
                                    <label class="block text-sm text-gray-600 mb-2">Link URL</label>
                                    <input type="text" class="w-full border rounded-md p-2">
                                    </div< /div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Preview Modal -->
            <div id="preview-modal" class="fixed inset-0 bg-black bg-opacity-50 z-50 hidden">
                <div class="absolute inset-0 flex items-center justify-center p-4">
                    <div class="bg-white rounded-lg shadow-xl w-full max-w-6xl h-full max-h-[90vh] flex flex-col">
                        <div class="p-4 border-b flex justify-between items-center">
                            <h3 class="text-lg font-semibold">Preview</h3>
                            <button id="close-preview" class="text-gray-500 hover:text-gray-700">
                                <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </button>
                        </div>
                        <div class="flex-1 overflow-auto p-4">
                            <div id="preview-content" class="bg-white mx-auto"></div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Template Selection Modal -->
            <div id="template-modal" class="fixed inset-0 bg-black bg-opacity-50 z-50">
                <div class="absolute inset-0 flex items-center justify-center p-4">
                    <div class="bg-white rounded-lg shadow-xl w-full max-w-6xl h-full max-h-[90vh] flex flex-col">
                        <div class="p-4 border-b flex justify-between items-center">
                            <h3 class="text-lg font-semibold">Choose a Template</h3>
                            <button id="close-template" class="text-gray-500 hover:text-gray-700">×</button>
                        </div>
                        <div class="flex-1 overflow-auto p-4">
                            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                                <!-- Business Template -->
                                <div class="border rounded-lg overflow-hidden hover:shadow-lg transition-shadow">
                                    <img src="/api/placeholder/400/300" alt="Business Template"
                                        class="w-full h-48 object-cover">
                                    <div class="p-4">
                                        <h4 class="font-semibold mb-2">Business Website</h4>
                                        <p class="text-sm text-gray-600 mb-4">Professional template with sections for
                                            services, about, team, and contact.</p>
                                        <button
                                            class="px-4 py-2 bg-purple-600 text-white rounded hover:bg-purple-700 w-full"
                                            onclick="selectTemplate('business')">Use Template</button>
                                    </div>
                                </div>

                                <!-- Portfolio Template -->
                                <div class="border rounded-lg overflow-hidden hover:shadow-lg transition-shadow">
                                    <img src="/api/placeholder/400/300" alt="Portfolio Template"
                                        class="w-full h-48 object-cover">
                                    <div class="p-4">
                                        <h4 class="font-semibold mb-2">Portfolio Showcase</h4>
                                        <p class="text-sm text-gray-600 mb-4">Perfect for creatives with gallery,
                                            projects, and testimonials.</p>
                                        <button
                                            class="px-4 py-2 bg-purple-600 text-white rounded hover:bg-purple-700 w-full"
                                            onclick="selectTemplate('portfolio')">Use Template</button>
                                    </div>
                                </div>

                                <!-- Restaurant Template -->
                                <div class="border rounded-lg overflow-hidden hover:shadow-lg transition-shadow">
                                    <img src="/api/placeholder/400/300" alt="Restaurant Template"
                                        class="w-full h-48 object-cover">
                                    <div class="p-4">
                                        <h4 class="font-semibold mb-2">Restaurant Site</h4>
                                        <p class="text-sm text-gray-600 mb-4">Features menu, gallery, about, and
                                            reservation sections.</p>
                                        <button
                                            class="px-4 py-2 bg-purple-600 text-white rounded hover:bg-purple-700 w-full"
                                            onclick="selectTemplate('restaurant')">Use Template</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <x-slot:js>
            <script>
                class TemplateBuilder {
                    constructor() {
                        this.history = [];
                        this.currentStep = -1;
                        this.selectedElement = null;
                        this.initializeTemplates();
                        this.initialize();
                    }

                    initializeTemplates() {
                        // Define template presets
                        this.templatePresets = {
                            business: {
                                sections: [
                                    {
                                        type: 'hero',
                                        content: `
                                            <div class="text-center py-20 bg-gradient-to-r from-purple-600 to-blue-600">
                                                <h1 class="text-4xl font-bold text-white mb-4" contenteditable="true">Business Name</h1>
                                                <p class="text-xl text-white mb-8" contenteditable="true">Your Professional Business Solution</p>
                                                <button class="bg-white text-purple-600 px-8 py-3 rounded-full font-bold hover:bg-gray-100">Get Started</button>
                                            </div>
                                        `
                                    },
                                    {
                                        type: 'features',
                                        content: `
                                            <div class="py-16 px-4 bg-white">
                                                <div class="max-w-6xl mx-auto">
                                                    <h2 class="text-3xl font-bold text-center mb-12" contenteditable="true">Our Services</h2>
                                                    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                                                        <div class="p-6 bg-gray-50 rounded-lg">
                                                            <h3 class="text-xl font-bold mb-4" contenteditable="true">Service 1</h3>
                                                            <p class="text-gray-600" contenteditable="true">Description of your service</p>
                                                        </div>
                                                        <div class="p-6 bg-gray-50 rounded-lg">
                                                            <h3 class="text-xl font-bold mb-4" contenteditable="true">Service 2</h3>
                                                            <p class="text-gray-600" contenteditable="true">Description of your service</p>
                                                        </div>
                                                        <div class="p-6 bg-gray-50 rounded-lg">
                                                            <h3 class="text-xl font-bold mb-4" contenteditable="true">Service 3</h3>
                                                            <p class="text-gray-600" contenteditable="true">Description of your service</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        `
                                    },
                                    {
                                        type: 'contact',
                                        content: `
                                            <div class="py-16 px-4 bg-gray-50">
                                                <div class="max-w-xl mx-auto">
                                                    <h2 class="text-3xl font-bold text-center mb-8" contenteditable="true">Contact Us</h2>
                                                    <form class="space-y-4">
                                                        <input type="text" placeholder="Name" class="w-full p-3 rounded border">
                                                        <input type="email" placeholder="Email" class="w-full p-3 rounded border">
                                                        <textarea placeholder="Message" class="w-full p-3 rounded border" rows="4"></textarea>
                                                        <button type="button" class="w-full bg-purple-600 text-white py-3 rounded font-bold hover:bg-purple-700">Send Message</button>
                                                    </form>
                                                </div>
                                            </div>
                                        `
                                    }
                                ]
                            }
                        };
                    }

                    initialize() {
                        this.setupEventListeners();
                        this.setupDragDrop();
                        this.addToHistory();
                    }

                    setupEventListeners() {
                        // Handle template selection
                        const templateButtons = document.querySelectorAll('[onclick*="selectTemplate"]');
                        templateButtons.forEach(button => {
                            button.addEventListener('click', (e) => {
                                e.preventDefault();
                                const templateId = button.getAttribute('onclick').split("'")[1];
                                this.loadTemplate(templateId);
                            });
                        });

                        // Handle preview button
                        const previewBtn = document.getElementById('previewBtn');
                        if (previewBtn) {
                            previewBtn.addEventListener('click', () => this.showPreview());
                        }

                        // Handle preview close
                        const closePreview = document.getElementById('close-preview');
                        if (closePreview) {
                            closePreview.addEventListener('click', () => this.hidePreview());
                        }
                    }

                    setupDragDrop() {
                        const dropZone = document.getElementById('drop-zone');
                        const elements = document.querySelectorAll('.element-item');

                        if (dropZone && elements) {
                            elements.forEach(element => {
                                element.setAttribute('draggable', true);
                                element.addEventListener('dragstart', (e) => {
                                    e.dataTransfer.setData('text/plain', element.dataset.type);
                                });
                            });

                            dropZone.addEventListener('dragover', (e) => e.preventDefault());
                            dropZone.addEventListener('drop', (e) => {
                                e.preventDefault();
                                const type = e.dataTransfer.getData('text/plain');
                                this.addElement(type);
                            });
                        }
                    }

                    loadTemplate(templateId) {
                        const template = this.templatePresets[templateId];
                        if (!template) {
                            console.log('Template not found, using default template');
                            return;
                        }

                        const dropZone = document.getElementById('drop-zone');
                        if (!dropZone) return;

                        // Clear existing content
                        dropZone.innerHTML = '';

                        // Add template sections
                        template.sections.forEach(section => {
                            const element = document.createElement('div');
                            element.className = 'builder-element relative p-4 border-2 border-dashed border-gray-300 hover:border-purple-500 mb-4';
                            element.innerHTML = section.content + this.createElementControls();
                            dropZone.appendChild(element);
                        });

                        // Hide template modal
                        const modal = document.getElementById('template-modal');
                        if (modal) modal.classList.add('hidden');

                        this.addToHistory();
                    }

                    addElement(type) {
                        const dropZone = document.getElementById('drop-zone');
                        if (!dropZone) return;

                        const element = document.createElement('div');
                        element.className = 'builder-element relative p-4 border-2 border-dashed border-gray-300 hover:border-purple-500 mb-4';

                        // Add dummy content based on type
                        element.innerHTML = `
                            <div class="p-4 bg-gray-50 rounded">
                                <h3 class="text-lg font-bold mb-2" contenteditable="true">New ${type} Section</h3>
                                <p contenteditable="true">Click to edit this ${type} content</p>
                            </div>
                        ` + this.createElementControls();

                        dropZone.appendChild(element);
                        this.addToHistory();
                    }

                    createElementControls() {
                        return `
                            <div class="absolute top-2 right-2 flex space-x-2 bg-white rounded-lg shadow p-1">
                                <button class="p-1 hover:text-purple-600" onclick="moveElement(this, 'up')">↑</button>
                                <button class="p-1 hover:text-purple-600" onclick="moveElement(this, 'down')">↓</button>
                                <button class="p-1 hover:text-red-600" onclick="deleteElement(this)">×</button>
                            </div>
                        `;
                    }

                    showPreview() {
                        const modal = document.getElementById('preview-modal');
                        const content = document.getElementById('preview-content');
                        if (modal && content) {
                            content.innerHTML = document.getElementById('drop-zone').innerHTML;
                            modal.classList.remove('hidden');
                        }
                    }

                    hidePreview() {
                        const modal = document.getElementById('preview-modal');
                        if (modal) {
                            modal.classList.add('hidden');
                        }
                    }

                    addToHistory() {
                        const content = document.getElementById('drop-zone').innerHTML;
                        this.currentStep++;
                        this.history = this.history.slice(0, this.currentStep);
                        this.history.push(content);
                        this.updateHistoryButtons();
                    }

                    updateHistoryButtons() {
                        const undoBtn = document.getElementById('undoBtn');
                        const redoBtn = document.getElementById('redoBtn');

                        if (undoBtn) undoBtn.disabled = this.currentStep <= 0;
                        if (redoBtn) redoBtn.disabled = this.currentStep >= this.history.length - 1;
                    }
                }

                // Global functions
                window.moveElement = function(button, direction) {
                    const element = button.closest('.builder-element');
                    const parent = element.parentNode;

                    if (direction === 'up' && element.previousElementSibling) {
                        parent.insertBefore(element, element.previousElementSibling);
                    } else if (direction === 'down' && element.nextElementSibling) {
                        parent.insertBefore(element.nextElementSibling, element);
                    }
                };

                window.deleteElement = function(button) {
                    if (confirm('Are you sure you want to delete this section?')) {
                        button.closest('.builder-element').remove();
                    }
                };

                // Initialize the builder
                document.addEventListener('DOMContentLoaded', () => {
                    window.builder = new TemplateBuilder();
                });
                </script>
            </x-slot:js>

</x-front.layouts.app-layout>
