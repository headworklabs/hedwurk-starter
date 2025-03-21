<script setup>
    import { useColorMode } from '@vueuse/core'
    import { SunIcon, MoonIcon, ComputerDesktopIcon } from '@heroicons/vue/24/outline'

    const mode = useColorMode()

    function toggleAppearance() {
        if (mode.value === 'light') {
            mode.value = 'dark'
        } else if (mode.value === 'dark') {
            mode.value = 'auto'
        } else {
            mode.value = 'light'
        }
    }
</script>

<template>
    <button
        @click="toggleAppearance"
        class="flex items-center">
        <SunIcon
            v-if="mode === 'light'"
            class="h-4 w-4 text-gray-600 dark:text-gray-200" />
        <MoonIcon
            v-if="mode === 'dark'"
            class="h-4 w-4 text-gray-600 dark:text-gray-200" />
        <ComputerDesktopIcon
            v-if="mode === 'auto'"
            class="h-4 w-4 text-gray-600 dark:text-gray-200" />
    </button>
</template>
