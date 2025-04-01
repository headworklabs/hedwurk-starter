<script setup>
    import { Link, usePage } from '@inertiajs/vue3'
    import { User2, ChevronsUpDown, SwatchBook } from 'lucide-vue-next'
    import { SidebarFooter, SidebarGroup, SidebarGroupContent, SidebarMenu, SidebarMenuItem, SidebarMenuButton } from '@/components/ui/sidebar'
    import { DropdownMenu, DropdownMenuContent, DropdownMenuTrigger } from '@/components/ui/dropdown-menu'
    import UserMenuInfo from '@/components/sidebar/UserMenuInfo.vue'
    import UserMenuContent from '@/components/sidebar/UserMenuContent.vue'

    const user = usePage().props.auth.user
    const appEnv = usePage().props.env.app
</script>

<template>
    <SidebarFooter>
        <SidebarGroup
            v-if="appEnv !== 'production'"
            class="p-0">
            <SidebarGroupContent>
                <SidebarMenu>
                    <SidebarMenuItem>
                        <SidebarMenuButton
                            class="text-gray-600 hover:text-gray-800 dark:text-gray-300 dark:hover:text-gray-100"
                            as-child>
                            <Link
                                :href="route('style-guide')"
                                class="rounded-lg px-3 py-0.5 transition hover:bg-gray-700">
                                <SwatchBook />
                                <span>Style Guide</span>
                            </Link>
                        </SidebarMenuButton>
                    </SidebarMenuItem>
                </SidebarMenu>
            </SidebarGroupContent>
        </SidebarGroup>
        <SidebarMenu>
            <SidebarMenuItem>
                <DropdownMenu v-if="user">
                    <DropdownMenuTrigger as-child>
                        <SidebarMenuButton
                            size="lg"
                            class="data-[state=open]:bg-sidebar-accent data-[state=open]:text-sidebar-accent-foreground">
                            <UserMenuInfo :user="user" />
                            <ChevronsUpDown class="ml-auto size-4" />
                        </SidebarMenuButton>
                    </DropdownMenuTrigger>
                    <DropdownMenuContent
                        class="w-[--radix-dropdown-menu-trigger-width] min-w-56 rounded-lg"
                        side="bottom"
                        align="end"
                        :side-offset="4">
                        <UserMenuContent :user="user" />
                    </DropdownMenuContent>
                </DropdownMenu>
                <SidebarMenuButton
                    v-else
                    as-child>
                    <Link
                        :href="route('login')"
                        class="rounded-lg px-3 py-0.5 transition hover:bg-gray-700">
                        <User2 />
                        <span>Account Login</span>
                    </Link>
                </SidebarMenuButton>
            </SidebarMenuItem>
        </SidebarMenu>
    </SidebarFooter>
</template>
