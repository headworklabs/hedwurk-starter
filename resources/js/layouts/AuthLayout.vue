<!--
    @NOTE: This is the customisable layout for the auth screens.
    Modify AuthLayout.vue import target to change the layout of your application.
    Options:
    - AuthSimpleLayout.vue (default)
    - AuthCardLayout.vue
    - AuthSplitLayout.vue
-->

<script setup>
    import AuthLayout from '@/layouts/auth/AuthCardLayout.vue'

    defineProps({
        title: String,
        description: String,
    })
</script>

<template>
    <AuthLayout
        :title="title"
        :description="description">
        <slot />
    </AuthLayout>
</template>
