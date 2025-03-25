<script setup>
    import { usePage } from '@inertiajs/vue3'
    import { SidebarProvider, SidebarInset } from '@/components/ui/sidebar'
    import AppSidebar from '@/components/sidebar/AppSidebar.vue'
    import AppHeaderNav from '@/components/sidebar/AppHeaderNav.vue'

    defineProps({
        breadcrumbs: {
            type: Array,
            default: () => [],
        },
    })

    const isOpen = usePage().props.sidebarOpen
</script>

<template>
    <SidebarProvider :default-open="isOpen">
        <AppSidebar />
        <SidebarInset>
            <AppHeaderNav :breadcrumbs />
            <div>
                <slot />
            </div>
        </SidebarInset>
    </SidebarProvider>
</template>
