<div x-data="{
    subdomain: '',
    suggestions: [],
    message: '',
    messageType: '',
    loading: false,
    debounceTimeout: null,

    async checkSubdomain() {
        if (this.debounceTimeout) clearTimeout(this.debounceTimeout);

        if (!this.subdomain) {
            this.suggestions = [];
            this.message = '';
            return;
        }

        this.debounceTimeout = setTimeout(async () => {
            this.loading = true;
            try {
                const response = await fetch(`/api/subdomain/check?subdomain=${this.subdomain}`);
                const data = await response.json();

                this.suggestions = data.suggestions;
                this.message = data.message;
                this.messageType = data.available ? 'success' : 'error';
            } catch (error) {
                this.message = 'Error checking subdomain';
                this.messageType = 'error';
            }
            this.loading = false;
        }, 500);
    }
}">
    <div class="space-y-4">
        <div class="relative">
            <input type="text"
                   x-model="subdomain"
                   @input="checkSubdomain()"
                   class="block w-full rounded-md border-gray-300 pr-36 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                   placeholder="Enter desired subdomain">

            <div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none text-gray-500">
                .{{ config('app.domain') }}
            </div>
        </div>

        <!-- Loading State -->
        <div x-show="loading" class="text-sm text-gray-500">
            <i class="fas fa-spinner fa-spin"></i> Checking availability...
        </div>

        <!-- Message -->
        <div x-show="message"
             x-text="message"
             :class="{
                 'text-green-600': messageType === 'success',
                 'text-red-600': messageType === 'error'
             }"
             class="text-sm">
        </div>

        <!-- Suggestions -->
        <div x-show="suggestions.length > 0" class="space-y-2">
            <p class="text-sm text-gray-600">Available alternatives:</p>
            <div class="flex flex-wrap gap-2">
                <template x-for="suggestion in suggestions" :key="suggestion">
                    <button @click="subdomain = suggestion; checkSubdomain()"
                            class="px-3 py-1 text-sm bg-indigo-50 text-indigo-700 rounded-md hover:bg-indigo-100 transition-colors"
                            x-text="suggestion">
                    </button>
                </template>
            </div>
        </div>
    </div>
</div>
