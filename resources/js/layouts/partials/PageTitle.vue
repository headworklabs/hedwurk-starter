<script setup>
    import { Head } from '@inertiajs/vue3'

    defineProps({
        title: String,
    })
</script>

<template>
    <Head :title="title" />
    <h1 class="text-3xl font-semibold leading-tight text-gray-800 dark:text-gray-200">{{ title }}</h1>
</template>
