<script setup>
    import { Link } from '@inertiajs/vue3'
    import { Breadcrumb, BreadcrumbItem, BreadcrumbLink, BreadcrumbList, BreadcrumbPage, BreadcrumbSeparator } from '@/components/ui/breadcrumb'
    import { SidebarTrigger } from '@/components/ui/sidebar'
    import AppearanceToggle from '@/components/AppearanceToggle.vue'

    defineProps({
        breadcrumbs: {
            type: Array,
            default: () => [],
        },
    })
</script>

<template>
    <div class="flex items-center justify-between p-3 pl-4 pr-6">
        <div class="flex items-center space-x-4">
            <SidebarTrigger />
            <Breadcrumb
                v-if="breadcrumbs.length > 0"
                class="mt-0.5">
                <BreadcrumbList>
                    <template
                        v-for="(breadcrumb, index) in breadcrumbs"
                        :key="index">
                        <template v-if="!breadcrumb.page">
                            <BreadcrumbSeparator v-if="index > 0" />
                            <BreadcrumbItem>
                                <BreadcrumbLink as-child>
                                    <Link :href="breadcrumb.url"> {{ breadcrumb.title }} </Link>
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
        <AppearanceToggle />
    </div>
</template>
