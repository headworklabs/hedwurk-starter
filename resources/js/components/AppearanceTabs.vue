<script setup>
    import { useAppearance } from '@/composables/useAppearance'
    import { Monitor, Moon, Sun } from 'lucide-vue-next'

    const { class: containerClass = '' } = defineProps({
        class: String,
    })

    const { appearance, updateAppearance } = useAppearance()

    const tabs = [
        { value: 'light', Icon: Sun, label: 'Light' },
        { value: 'dark', Icon: Moon, label: 'Dark' },
        { value: 'system', Icon: Monitor, label: 'System' },
    ]
</script>

<template>
    <div :class="['inline-flex gap-1 rounded-lg bg-gray-100 p-1 dark:bg-gray-800', containerClass]">
        <button
            v-for="{ value, Icon, label } in tabs"
            :key="value"
            @click="updateAppearance(value)"
            :class="[
                'flex items-center rounded-md px-3.5 py-1.5 transition-colors',
                appearance === value
                    ? 'bg-white shadow-sm dark:bg-gray-700 dark:text-gray-100'
                    : 'text-gray-500 hover:bg-gray-200/60 hover:text-black dark:text-gray-400 dark:hover:bg-gray-700/60',
            ]">
            <component
                :is="Icon"
                class="-ml-1 h-4 w-4" />
            <span class="ml-1.5 text-sm">{{ label }}</span>
        </button>
    </div>
</template>
