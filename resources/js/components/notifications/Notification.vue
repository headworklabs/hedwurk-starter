<script setup>
    import { Link } from '@inertiajs/vue3'
    import { Button } from '@/components/ui/button'

    defineProps({
        notification: {
            type: Object,
            required: true,
        },
    })
</script>

<template>
    <div
        class="group relative rounded-md border p-4 transition-colors"
        :class="
            notification.read_at === null
                ? 'border-gray-300 bg-gray-100 hover:border-gray-500 hover:bg-gray-200 dark:border-gray-600 dark:bg-gray-800 dark:hover:bg-gray-700'
                : 'border-gray-100 bg-transparent dark:border-gray-800'
        ">
        <h4>{{ notification.data.title }}</h4>
        <p class="mt-2 text-xs">{{ notification.data.message }}</p>
        <Button
            variant="outline"
            class="mt-3"
            as-child>
            <Link :href="notification.data.action">Action</Link>
        </Button>
        <Link
            v-if="notification.read_at === null"
            :href="route('notifications.update', notification.id)"
            method="put"
            as="button"
            preserve-scroll
            preserve-state
            class="absolute right-2 top-1">
            <span class="inline-flex size-3 rounded-full bg-gray-500/50 transition-colors group-hover:bg-gray-800 dark:group-hover:bg-gray-50"></span>
        </Link>
        <Link
            v-else
            :href="route('notifications.destroy', notification.id)"
            method="delete"
            as="button"
            preserve-scroll
            preserve-state
            class="absolute right-2 top-1">
            <span class="inline-flex size-3 rounded-full bg-red-500/30 transition-colors hover:bg-red-500/100 group-hover:bg-red-500/80"></span>
        </Link>
    </div>
</template>
