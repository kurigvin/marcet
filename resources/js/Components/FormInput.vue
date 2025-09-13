<template>
    <div class="flex flex-col">
        <label class="mb-1 font-medium">{{ label }}</label>
        <input
            :type="type"
            :value="modelValue"
            @input="$emit('update:modelValue', $event.target.value)"
            class="border rounded px-3 py-2 focus:ring focus:ring-primary"
        />
    </div>
</template>

<script setup>
defineProps({
    label: String,
    type: { type: String, default: 'text' },
    modelValue: String,
})
</script>
