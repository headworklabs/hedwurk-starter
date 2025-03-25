<script setup>
    import AppLayout from '@/layouts/AppLayout.vue'
    import SettingsLayout from '@/layouts/settings/Layout.vue'
    import PageTitle from '@/layouts/partials/PageTitle.vue'
    import AppearanceTabs from '@/components/AppearanceTabs.vue'

    const breadcrumbItems = [
        {
            title: 'Appearance settings',
            href: '/settings/appearance',
        },
    ]
</script>

<template>
    <AppLayout :breadcrumbs="breadcrumbItems">
        <SettingsLayout>
            <div class="space-y-6">
                <PageTitle
                    title="Appearance settings"
                    description="Update your account's appearance settings" />
                <AppearanceTabs />
            </div>
        </SettingsLayout>
    </AppLayout>
</template>
