<!--
    @NOTE: This is the customisable sidebar component.
    Modify Sidebar variant="{type}" as 'sidebar' || 'floating' || 'inset'
    CHeck ShadCn for more info: https://www.shadcn-vue.com/docs/components/sidebar.html
-->

<script setup>
    import SidebarHead from './SidebarHead.vue'
    import SidebarMain from './SidebarMain.vue'
    import SidebarFoot from './SidebarFoot.vue'
    import { Sidebar } from '@/components/ui/sidebar'
</script>

<template>
    <Sidebar
        variant="sidebar"
        collapsible="icon">
        <SidebarHead />
        <SidebarMain />
        <SidebarFoot />
    </Sidebar>
</template>
