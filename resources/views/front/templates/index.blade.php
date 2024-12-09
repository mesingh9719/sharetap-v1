<x-dashboard.layout.master-layout>
    <div x-data="templateSelector()" class="container mx-auto px-4 py-8">
        <h1 class="text-4xl font-bold text-gray-800 mb-2">Choose Your Templates</h1>
        <p class="text-xl text-gray-600 mb-8">Select one or more templates that suit your needs. Click on a card to select/deselect it.</p>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <template x-for="template in templates" :key="template.id">
                <div
                    class="bg-white rounded-xl shadow-lg overflow-hidden transition-all duration-300 transform hover:scale-105 cursor-pointer border-2"
                    :class="{'border-green-500': selectedTemplates.includes(template.id), 'border-transparent': !selectedTemplates.includes(template.id)}"
                >
                    <div class="relative">
                        <img :src="template.image" :alt="template.name" class="w-full h-56 object-cover">
                        <div
                            class="absolute top-0 right-0 m-2 p-1 rounded-full"
                            :class="{'bg-green-500': selectedTemplates.includes(template.id), 'bg-gray-200': !selectedTemplates.includes(template.id)}"
                        >
                            <svg
                                class="w-6 h-6"
                                :class="{'text-white': selectedTemplates.includes(template.id), 'text-gray-400': !selectedTemplates.includes(template.id)}"
                                fill="none"
                                stroke="currentColor"
                                viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg"
                            >
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 x-text="template.name" class="text-2xl font-semibold text-gray-800 mb-2"></h3>
                        <p x-text="template.description" class="text-gray-600 mb-4"></p>
                        <div class="flex justify-between items-center">
                            <button
                                @click.stop="toggleSelection(template.id)"
                                class="px-4 py-2 rounded-lg font-semibold transition-colors duration-300"
                                :class="{'bg-green-500 text-white': selectedTemplates.includes(template.id), 'bg-blue-500 text-white': !selectedTemplates.includes(template.id)}"
                                x-text="selectedTemplates.includes(template.id) ? 'Selected' : 'Select'"
                            ></button>
                            <button
                                @click.stop="openPreview(template)"
                                class="px-4 py-2 bg-gray-200 text-gray-700 rounded-lg font-semibold hover:bg-gray-300 transition-colors duration-300"
                            >
                                Preview
                            </button>
                        </div>
                    </div>
                </div>
            </template>
        </div>

        <div class="mt-12">
            <h2 class="text-3xl font-semibold text-gray-800 mb-4">Selected Templates</h2>
            <div x-show="selectedTemplates.length > 0" class="bg-white rounded-xl shadow-lg p-6">
                <ul class="space-y-2">
                    <template x-for="id in selectedTemplates" :key="id">
                        <li class="flex items-center space-x-2">
                            <svg class="w-5 h-5 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span x-text="templates.find(t => t.id === id).name" class="text-lg text-gray-700"></span>
                        </li>
                    </template>
                </ul>
            </div>
            <p x-show="selectedTemplates.length === 0" class="text-xl text-gray-600">No templates selected yet. Click on the cards above to select templates.</p>
        </div>

        <div class="mt-12">
            <button
                @click="saveSelection"
                class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-6 rounded-lg focus:outline-none focus:shadow-outline transition duration-300 text-lg"
                x-bind:disabled="selectedTemplates.length === 0"
                x-bind:class="{'opacity-50 cursor-not-allowed': selectedTemplates.length === 0}"
            >
                Save Selection
            </button>
        </div>

        <!-- Preview Modal -->
        <div x-show="previewOpen" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50" @click.self="previewOpen = false">
            <div class="bg-white rounded-xl shadow-2xl max-w-3xl w-full mx-4 overflow-hidden" @click.outside="previewOpen = false">
                <div class="relative">
                    <img :src="previewTemplate.image" :alt="previewTemplate.name" class="w-full h-64 object-cover">
                    <button @click="previewOpen = false" class="absolute top-2 right-2 bg-white rounded-full p-2 shadow-md hover:bg-gray-100 transition-colors duration-300">
                        <svg class="w-6 h-6 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>
                <div class="p-6">
                    <h3 x-text="previewTemplate.name" class="text-3xl font-bold text-gray-800 mb-2"></h3>
                    <p x-text="previewTemplate.description" class="text-xl text-gray-600 mb-4"></p>
                    <div class="space-y-4">
                        <div>
                            <h4 class="text-lg font-semibold text-gray-700">Key Features:</h4>
                            <ul class="list-disc list-inside text-gray-600 ml-4">
                                <template x-for="feature in previewTemplate.features" :key="feature">
                                    <li x-text="feature"></li>
                                </template>
                            </ul>
                        </div>
                        <div>
                            <h4 class="text-lg font-semibold text-gray-700">Best For:</h4>
                            <p x-text="previewTemplate.bestFor" class="text-gray-600"></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function templateSelector() {
            return {
                templates: [
                    {
                        id: 1,
                        name: 'Modern Blog Template',
                        description: 'Clean and minimalist design for personal or corporate blogs',
                        image: 'https://via.placeholder.com/800x600.png?text=Modern+Blog+Template',
                        features: ['Responsive design', 'SEO optimized', 'Social media integration', 'Comment system'],
                        bestFor: 'Bloggers, writers, and content creators looking for a sleek and professional platform.'
                    },
                    {
                        id: 2,
                        name: 'E-commerce Powerhouse',
                        description: 'Feature-rich template for online stores and marketplaces',
                        image: 'https://via.placeholder.com/800x600.png?text=E-commerce+Powerhouse',
                        features: ['Product catalog', 'Shopping cart', 'Secure checkout', 'Customer reviews'],
                        bestFor: 'Small to medium-sized businesses looking to establish or expand their online presence.'
                    },
                    {
                        id: 3,
                        name: 'Creative Portfolio Showcase',
                        description: 'Visually stunning template to highlight your best work',
                        image: 'https://via.placeholder.com/800x600.png?text=Creative+Portfolio+Showcase',
                        features: ['Gallery layouts', 'Project details pages', 'Customizable color schemes', 'Contact form'],
                        bestFor: 'Artists, designers, photographers, and other creatives who want to showcase their work professionally.'
                    },
                    {
                        id: 4,
                        name: 'High-Converting Landing Page',
                        description: 'Optimized template to drive conversions and engage visitors',
                        image: 'https://via.placeholder.com/800x600.png?text=High-Converting+Landing+Page',
                        features: ['A/B testing ready', 'Call-to-action optimization', 'Lead capture forms', 'Testimonial sections'],
                        bestFor: 'Marketers and businesses looking to promote a specific product, service, or campaign effectively.'
                    },
                    {
                        id: 5,
                        name: 'Intuitive Admin Dashboard',
                        description: 'Comprehensive template for data visualization and management',
                        image: 'https://via.placeholder.com/800x600.png?text=Intuitive+Admin+Dashboard',
                        features: ['Interactive charts and graphs', 'User management', 'Real-time data updates', 'Customizable widgets'],
                        bestFor: 'Businesses and organizations that need to monitor and analyze data, manage users, or oversee operations.'
                    },
                    {
                        id: 6,
                        name: 'Knowledge Base & Documentation',
                        description: 'Well-structured template for organizing and presenting information',
                        image: 'https://via.placeholder.com/800x600.png?text=Knowledge+Base+%26+Documentation',
                        features: ['Searchable content', 'Categorized articles', 'Version control', 'User feedback system'],
                        bestFor: 'Software companies, educational institutions, or any organization needing to provide comprehensive, organized information to users.'
                    }
                ],
                selectedTemplates: [],
                previewOpen: false,
                previewTemplate: {},

                toggleSelection(id) {
                    if (this.selectedTemplates.includes(id)) {
                        this.selectedTemplates = this.selectedTemplates.filter(templateId => templateId !== id);
                    } else {
                        this.selectedTemplates.push(id);
                    }
                },

                openPreview(template) {
                    this.previewTemplate = template;
                    this.previewOpen = true;
                },

                saveSelection() {
                    const selectedTemplateNames = this.selectedTemplates.map(id => this.templates.find(t => t.id === id).name);
                    alert('Templates saved: ' + selectedTemplateNames.join(', '));
                    // Here you would typically send the selection to the server
                }
            }
        }
    </script>
</x-dashboard.layout.master-layout>
