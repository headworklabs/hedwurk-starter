<script setup>
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
        <PageContainer y="xl">
            <PageTitle title="Dashboard" />
            <p class="mt-4 pr-24 text-sm">Build something...</p>
        </PageContainer>
    </AppLayout>
</template>
