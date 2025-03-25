<script setup>
    import { Head } from '@inertiajs/vue3'

    defineProps({
        title: {
            type: String,
            required: true,
        },
        description: String,
    })
</script>

<template>
    <Head :title="title" />
    <div>
        <h1 class="text-3xl font-semibold leading-tight text-gray-800 dark:text-gray-200">{{ title }}</h1>
        <p
            v-if="description"
            class="text-sm text-gray-500">
            {{ description }}
        </p>
    </div>
</template>
