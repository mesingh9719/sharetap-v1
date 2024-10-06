<template x-for="i in 3">
    <div
        class="border rounded-lg p-6 cursor-pointer hover:shadow-xl transition-shadow duration-300 bg-white"
        :class="{ 'ring-4 ring-indigo-500': $el.querySelector('input').checked }">
        <img :src="`/images/template-${i}.jpg`" alt="Template Preview"
             class="w-full h-48 object-cover rounded mb-4">
        <div class="flex items-center justify-between">
            <label :for="`template-${i}`" x-text="`Template ${i}`"
                   class="font-medium text-lg"></label>
            <input type="radio" :id="`template-${i}`" name="template"
                   :value="`template-${i}`" class="form-radio h-5 w-5 text-indigo-600"
                   required>
        </div>
    </div>
</template>
