<script setup>
    import { Link } from '@inertiajs/vue3'
    import { Button } from '@/components/ui/button'
    import AppLayout from '@/layouts/AppLayout.vue'
    import PageTitle from '@/layouts/partials/PageTitle.vue'
    import PageContainer from '@/layouts/partials/PageContainer.vue'

    const breadcrumbs = [
        {
            title: 'Dashboard',
            href: '/dashboard',
        },
    ]
</script>

<template>
    <AppLayout :breadcrumbs>
        <PageContainer y="lg">
            <PageTitle title="Dashboard" />
            <p class="mt-4 pr-24 text-sm">Build something...</p>
            <nav class="mt-6 flex items-center space-x-4">
                <Button as-child>
                    <Link :href="route('dashboard')">Dashboard</Link>
                </Button>
            </nav>
        </PageContainer>
    </AppLayout>
</template>
