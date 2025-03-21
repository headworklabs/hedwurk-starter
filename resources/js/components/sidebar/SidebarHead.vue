<script setup>
    import { Link } from '@inertiajs/vue3'
    import { SidebarHeader, SidebarMenu, SidebarMenuItem, SidebarMenuButton } from '@/components/ui/sidebar'
</script>

<template>
    <SidebarHeader>
        <SidebarMenu>
            <SidebarMenuItem>
                <SidebarMenuButton
                    size="lg"
                    as-child>
                    <Link :href="route('quickstart')">
                        <div class="flex aspect-square size-8 items-center justify-center rounded-md bg-gray-900 dark:bg-gray-200">
                            <!-- prettier-ignore -->
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50" class="size-5 fill-current text-white dark:text-black">
                                <path fill="currentColor" d="M7.948 31.166a4.947 4.947 0 0 0-2.262-.058 18.76 18.76 0 0 1-.712-5.113A19.013 19.013 0 0 1 17.34 8.215a6.982 6.982 0 0 1-.355-2 21.018 21.018 0 0 0-14.011 19.78c.001 1.998.292 3.985.863 5.9a4.989 4.989 0 0 0 5.317 8.43 5 5 0 0 0-1.206-9.159ZM46.124 34.701a5 5 0 1 0-8.59 4.562 18.933 18.933 0 0 1-25.65 1.378 6.97 6.97 0 0 1-1.543 1.3 20.892 20.892 0 0 0 28.782-1.449 4.992 4.992 0 0 0 7-5.786v-.005ZM28.935 5.612a5 5 0 1 0-.252 2A18.834 18.834 0 0 1 42.69 29.148a6.987 6.987 0 0 1 1.915.692 20.89 20.89 0 0 0-15.67-24.228Z" />
                            </svg>
                        </div>
                        <div class="ml-1 grid flex-1 text-left text-sm">
                            <span class="truncate font-semibold leading-none text-gray-800 dark:text-gray-50">LODSER</span>
                        </div>
                    </Link>
                </SidebarMenuButton>
            </SidebarMenuItem>
        </SidebarMenu>
    </SidebarHeader>
</template>
