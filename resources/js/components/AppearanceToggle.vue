<script setup>
    import { useAppearance } from '@/composables/useAppearance'
    import { Monitor, Moon, Sun } from 'lucide-vue-next'

    const { appearance, updateAppearance } = useAppearance()

    function toggleAppearance() {
        if (appearance.value === 'light') {
            updateAppearance('dark')
        } else if (appearance.value === 'dark') {
            updateAppearance('system')
        } else {
            updateAppearance('light')
        }
    }
</script>

<template>
    <button
        @click="toggleAppearance"
        class="flex items-center rounded-full p-1.5 text-gray-700 transition-colors hover:bg-gray-100 hover:text-gray-900 dark:text-gray-300 dark:hover:bg-gray-700 dark:hover:text-white">
        <Sun
            v-if="appearance === 'light'"
            class="size-4" />
        <Moon
            v-if="appearance === 'dark'"
            class="size-4" />
        <Monitor
            v-if="appearance === 'system'"
            class="size-4" />
    </button>
</template>
