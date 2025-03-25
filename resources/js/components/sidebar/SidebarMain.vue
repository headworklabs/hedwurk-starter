<script setup>
    import { Link, usePage } from '@inertiajs/vue3'
    import { LayoutGrid, Squircle } from 'lucide-vue-next'
    import {
        SidebarContent,
        SidebarGroup,
        SidebarGroupContent,
        SidebarGroupLabel,
        SidebarMenu,
        SidebarMenuButton,
        SidebarMenuItem,
    } from '@/components/ui/sidebar'

    const page = usePage()

    const navItems = [
        {
            title: 'Dashboard',
            url: '/dashboard',
            icon: LayoutGrid,
        },
        {
            title: 'Page 1',
            url: '/page-1',
            icon: Squircle,
        },
        {
            title: 'Page 2',
            url: '/page-2',
            icon: Squircle,
        },
    ]
</script>

<template>
    <SidebarContent>
        <SidebarGroup>
            <SidebarGroupLabel>Platform</SidebarGroupLabel>
            <SidebarGroupContent>
                <SidebarMenu>
                    <SidebarMenuItem
                        v-for="item in navItems"
                        :key="item.title">
                        <SidebarMenuButton
                            as-child
                            :is-active="item.href === page.url">
                            <Link :href="item.url">
                                <component :is="item.icon" />
                                <span>{{ item.title }}</span>
                            </Link>
                        </SidebarMenuButton>
                    </SidebarMenuItem>
                </SidebarMenu>
            </SidebarGroupContent>
        </SidebarGroup>
    </SidebarContent>
</template>
