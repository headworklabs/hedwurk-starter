<script setup>
    import { usePage } from '@inertiajs/vue3'
    import { useColorMode } from '@vueuse/core'
    import { SidebarProvider, SidebarInset } from '@/components/ui/sidebar'
    import AppSidebar from '@/components/sidebar/AppSidebar.vue'
    import HeaderNav from './partials/HeaderNav.vue'

    defineProps({
        breadcrumbs: {
            type: Array,
            default: () => [],
        },
    })

    const mode = useColorMode()
    const isOpen = usePage().props.sidebarOpen
</script>

<template>
    <SidebarProvider :default-open="isOpen">
        <AppSidebar />
        <SidebarInset>
            <HeaderNav :breadcrumbs />
            <div class="p-6">
                <slot />
            </div>
        </SidebarInset>
    </SidebarProvider>
</template>
