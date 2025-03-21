<script setup>
    defineProps<{
        title: string
        description?: string
    }>()
</script>

<template>
    <div class="mb-8 space-y-0.5">
        <h2 class="text-xl font-semibold tracking-tight">{{ title }}</h2>
        <p
            v-if="description"
            class="text-muted-foreground text-sm">
            {{ description }}
        </p>
    </div>
</template>
