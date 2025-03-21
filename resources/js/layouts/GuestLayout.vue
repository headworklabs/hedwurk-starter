<script setup>
    import { Link } from '@inertiajs/vue3'
    import ApplicationLogo from '@/components/ApplicationLogo.vue'
</script>

<template>
    <div class="flex min-h-screen flex-col items-center bg-gray-100 pb-32 pt-12 sm:justify-center sm:pt-0 dark:bg-gray-900">
        <div>
            <Link href="/">
                <ApplicationLogo class="size-16 fill-current text-gray-800" />
            </Link>
        </div>
        <slot />
    </div>
</template>
