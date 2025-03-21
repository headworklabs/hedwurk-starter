<script setup>
    import { Link } from '@inertiajs/vue3'

    defineProps({
        href: {
            type: String,
            required: true,
        },
        tabindex: {
            type: Number,
            default: 0,
        },
        method: {
            type: String,
            default: 'get',
        },
        as: {
            type: String,
            default: 'a',
        },
    })
</script>

<template>
    <Link
        :href="href"
        :tabindex="tabindex"
        :method="method"
        :as="as"
        class="text-foreground underline decoration-gray-300 underline-offset-4 transition-colors duration-300 ease-out hover:!decoration-current dark:decoration-gray-500">
        <slot />
    </Link>
</template>
