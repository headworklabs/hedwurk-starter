<script setup>
    import SidebarHead from './SidebarHead.vue'
    import SidebarMain from './SidebarMain.vue'
    import SidebarFoot from './SidebarFoot.vue'
    import { Sidebar } from '@/components/ui/sidebar'
</script>

<template>
    <Sidebar
        variant="inset"
        collapsible="icon">
        <SidebarHead />
        <SidebarMain />
        <SidebarFoot />
    </Sidebar>
</template>
