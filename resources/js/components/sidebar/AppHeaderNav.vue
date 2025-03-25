<script setup>
    import { Link } from '@inertiajs/vue3'
    import { Breadcrumb, BreadcrumbItem, BreadcrumbLink, BreadcrumbList, BreadcrumbPage, BreadcrumbSeparator } from '@/components/ui/breadcrumb'
    import { SidebarTrigger } from '@/components/ui/sidebar'

    defineProps({
        breadcrumbs: {
            type: Array,
            default: () => [],
        },
    })
</script>

<template>
    <div
        class="flex h-16 shrink-0 items-center gap-2 border-b border-sidebar-border/70 px-6 transition-[width,height] ease-linear group-has-[[data-collapsible=icon]]/sidebar-wrapper:h-12 md:px-4">
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
    </div>
</template>
