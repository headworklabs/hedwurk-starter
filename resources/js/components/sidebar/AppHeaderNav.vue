<script setup>
    import { computed } from 'vue'
    import { Link, usePage } from '@inertiajs/vue3'
    import { Breadcrumb, BreadcrumbItem, BreadcrumbLink, BreadcrumbList, BreadcrumbPage, BreadcrumbSeparator } from '@/components/ui/breadcrumb'
    import { DropdownMenu, DropdownMenuContent, DropdownMenuTrigger } from '@/components/ui/dropdown-menu'
    import { SidebarTrigger } from '@/components/ui/sidebar'
    import { Avatar, AvatarFallback, AvatarImage } from '@/components/ui/avatar'
    import UserMenuContent from '@/components/sidebar/UserMenuContent.vue'
    import { useInitials } from '@/composables/useInitials'
    import NotificationsDrawer from './NotificationsDrawer.vue'
    import AppearanceToggle from '../AppearanceToggle.vue'

    const { getInitials } = useInitials()

    const props = defineProps({
        breadcrumbs: {
            type: Array,
            default: () => [],
        },
    })

    const user = usePage().props.auth.user
    const showAvatar = computed(() => user.avatar && user.avatar !== '')
</script>

<template>
    <div
        class="group-has-[[data-collapsible=icon]]/sidebar-wrapper:h-13 sticky left-0 top-0 z-10 flex h-14 w-full shrink-0 items-center justify-between border-b border-sidebar-border/70 bg-white px-6 transition-[width,height] ease-linear md:pl-4 dark:bg-gray-950">
        <div class="flex items-center gap-2">
            <SidebarTrigger class="-ml-1" />
            <Breadcrumb v-if="breadcrumbs.length > 0">
                <BreadcrumbList>
                    <template
                        v-for="(breadcrumb, index) in breadcrumbs"
                        :key="index">
                        <template v-if="!breadcrumb.page">
                            <BreadcrumbSeparator v-if="index > 0" />
                            <BreadcrumbItem>
                                <BreadcrumbLink as-child>
                                    <Link :href="breadcrumb.href"> {{ breadcrumb.title }} </Link>
                                </BreadcrumbLink>
                            </BreadcrumbItem>
                        </template>
                        <template v-else>
                            <BreadcrumbSeparator />
                            <BreadcrumbItem>
                                <BreadcrumbPage> {{ breadcrumb.title }} </BreadcrumbPage>
                            </BreadcrumbItem>
                        </template>
                    </template>
                </BreadcrumbList>
            </Breadcrumb>
        </div>
        <div class="flex items-center gap-3">
            <AppearanceToggle />
            <NotificationsDrawer />
            <template v-if="user">
                <DropdownMenu>
                    <DropdownMenuTrigger as-child>
                        <button
                            type="button"
                            class="ml-2 flex items-center">
                            <Avatar
                                class="h-8 w-8 overflow-hidden rounded-lg transition-colors hover:bg-gray-200 dark:bg-gray-700 dark:hover:bg-gray-600">
                                <AvatarImage
                                    v-if="showAvatar"
                                    :src="user.avatar"
                                    :alt="user.name" />
                                <AvatarFallback class="rounded-lg text-sm text-black dark:text-white">
                                    {{ getInitials(user.name) }}
                                </AvatarFallback>
                            </Avatar>
                        </button>
                    </DropdownMenuTrigger>
                    <DropdownMenuContent
                        class="w-[--radix-dropdown-menu-trigger-width] min-w-56 rounded-lg"
                        side="bottom"
                        align="end">
                        <UserMenuContent :user="user" />
                    </DropdownMenuContent>
                </DropdownMenu>
            </template>
        </div>
    </div>
</template>
