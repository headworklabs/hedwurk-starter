<script setup>
    import AppHeader from '@/components/AppHeader.vue'

    defineProps({
        breadcrumbs: {
            type: Array,
            default: () => [],
        },
    })
</script>

<template>
    <div class="flex min-h-screen w-full flex-col">
        <AppHeader :breadcrumbs />
        <div class="mx-auto flex h-full w-full max-w-7xl flex-1 flex-col gap-4 rounded-xl">
            <slot />
        </div>
    </div>
</template>
