<script setup>
    import AppLayout from '@/layouts/AppLayout.vue'
    import PageTitle from '@/layouts/partials/PageTitle.vue'
    import PageContainer from '@/layouts/partials/PageContainer.vue'

    const breadcrumbs = [
        {
            title: 'Page 1',
            href: '/page-1',
        },
    ]
</script>

<template>
    <AppLayout :breadcrumbs>
        <PageContainer>
            <PageTitle title="Page 1" />
            <p class="mt-4 pr-24 text-sm">Build something...</p>
        </PageContainer>
    </AppLayout>
</template>
