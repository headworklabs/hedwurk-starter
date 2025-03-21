<script setup>
    import { Link, usePage } from '@inertiajs/vue3'
    import { User2, ChevronsUpDown } from 'lucide-vue-next'
    import { SidebarFooter, SidebarMenu, SidebarMenuItem, SidebarMenuButton } from '@/components/ui/sidebar'
    import { DropdownMenu, DropdownMenuContent, DropdownMenuItem, DropdownMenuTrigger } from '@/components/ui/dropdown-menu'
    import UserMenuInfo from '@/components/sidebar/UserMenuInfo.vue'
    import UserMenuContent from '@/components/sidebar/UserMenuContent.vue'

    const page = usePage()
    const user = page.props.auth.user
</script>

<template>
    <SidebarFooter>
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
                        <span>Admin Login</span>
                    </Link>
                </SidebarMenuButton>
            </SidebarMenuItem>
        </SidebarMenu>
    </SidebarFooter>
</template>
