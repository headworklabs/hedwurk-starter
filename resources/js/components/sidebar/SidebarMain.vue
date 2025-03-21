<script setup>
    import { Link, usePage } from '@inertiajs/vue3'
    import { LayoutGrid, List, WholeWord } from 'lucide-vue-next'
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
            title: 'Quickstart',
            url: '/quickstart',
            icon: LayoutGrid,
        },
        {
            title: 'Substance Lists',
            url: '/dsls',
            icon: List,
        },
        {
            title: 'String Encoder',
            url: '/encoder',
            icon: WholeWord,
        },
    ]
</script>

<template>
    <SidebarContent>
        <SidebarGroup>
            <SidebarGroupLabel>Tools</SidebarGroupLabel>
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
