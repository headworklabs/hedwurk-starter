<script setup lang="ts">
    import { SidebarInset } from '@/components/ui/sidebar'
    import { computed } from 'vue'

    const props = defineProps({
        variant: String, // 'header' | 'sidebar'
        class: String,
    })
    const className = computed(() => props.class)
</script>

<template>
    <SidebarInset
        v-if="props.variant === 'sidebar'"
        :class="className">
        <slot />
    </SidebarInset>
    <main
        v-else
        class="mx-auto flex h-full w-full max-w-7xl flex-1 flex-col gap-4 rounded-xl"
        :class="className">
        <slot />
    </main>
</template>
