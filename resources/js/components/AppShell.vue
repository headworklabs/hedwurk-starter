<script setup>
    import { onMounted, ref } from 'vue'
    import { SidebarProvider } from '@/components/ui/sidebar'

    defineProps({
        variant: String, // 'header' | 'sidebar'
    })

    const isOpen = ref(true)

    onMounted(() => {
        isOpen.value = localStorage.getItem('sidebar') !== 'false'
    })

    const handleSidebarChange = (open) => {
        isOpen.value = open
        localStorage.setItem('sidebar', String(open))
    }
</script>

<template>
    <div
        v-if="variant === 'header'"
        class="flex min-h-screen w-full flex-col">
        <slot />
    </div>
    <SidebarProvider
        v-else
        :default-open="isOpen"
        :open="isOpen"
        @update:open="handleSidebarChange">
        <slot />
    </SidebarProvider>
</template>
