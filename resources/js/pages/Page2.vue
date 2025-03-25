<script setup>
    import AppLayout from '@/layouts/AppLayout.vue'
    import PageTitle from '@/layouts/partials/PageTitle.vue'
    import PageContainer from '@/layouts/partials/PageContainer.vue'

    const breadcrumbs = [
        {
            title: 'Page 2',
            href: '/page-2',
        },
    ]
</script>

<template>
    <AppLayout :breadcrumbs>
        <PageContainer>
            <PageTitle title="Page 2" />
            <p class="mt-4 pr-24 text-sm">Build something...</p>
        </PageContainer>
    </AppLayout>
</template>
