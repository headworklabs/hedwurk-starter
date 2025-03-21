<script setup lang="ts">
    import { SidebarGroup, SidebarGroupContent, SidebarMenu, SidebarMenuButton, SidebarMenuItem } from '@/components/ui/sidebar'

    defineProps({
        items: {
            type: Array,
            required: true,
        },
        class: {
            type: String,
            default: '',
        },
    })
</script>

<template>
    <SidebarGroup :class="`group-data-[collapsible=icon]:p-0 ${$props.class || ''}`">
        <SidebarGroupContent>
            <SidebarMenu>
                <SidebarMenuItem
                    v-for="item in items"
                    :key="item.title">
                    <SidebarMenuButton
                        class="text-gray-600 hover:text-gray-800 dark:text-gray-300 dark:hover:text-gray-100"
                        as-child>
                        <a
                            :href="item.href"
                            target="_blank"
                            rel="noopener noreferrer">
                            <component :is="item.icon" />
                            <span>{{ item.title }}</span>
                        </a>
                    </SidebarMenuButton>
                </SidebarMenuItem>
            </SidebarMenu>
        </SidebarGroupContent>
    </SidebarGroup>
</template>
