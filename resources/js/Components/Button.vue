<template>
    <button
        :class="['px-4 py-2 rounded font-semibold', variantClasses[variant]]"
        @click="$emit('click')"
    >
        <slot />
    </button>
</template>

<script setup>
defineProps({
    variant: { type: String, default: 'primary' },
})

const variantClasses = {
    primary: 'bg-primary text-white hover:bg-indigo-600',
    secondary: 'bg-secondary text-white hover:bg-yellow-500',
    outline: 'border border-gray-300 text-gray-700 hover:bg-gray-100',
}
</script>
