<!--
    @NOTE: This is the customisable layout for the application.
    Modify AppLayout.vue import target to change the layout of your application.
    Options:
    - AppSidebarLayout.vue (default)
    - AppHeaderLayout.vue
-->

<script setup>
    import { useColorMode } from '@vueuse/core'
    import AppLayout from './app/AppSidebarLayout.vue'

    defineProps({
        breadcrumbs: {
            type: Array,
            default: () => [],
        },
    })

    const mode = useColorMode()
</script>

<template>
    <AppLayout :breadcrumbs>
        <slot />
    </AppLayout>
</template>
