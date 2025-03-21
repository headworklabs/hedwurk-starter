<script setup>
    import AppShell from '@/components/AppShell.vue'
    import AppHeader from '@/components/AppHeader.vue'
    import AppContent from '@/components/AppContent.vue'

    defineProps({
        breadcrumbs: {
            type: Array,
            default: () => [],
        },
    })
</script>

<template>
    <AppShell class="flex-col">
        <AppHeader :breadcrumbs="breadcrumbs" />
        <AppContent>
            <slot />
        </AppContent>
    </AppShell>
</template>
