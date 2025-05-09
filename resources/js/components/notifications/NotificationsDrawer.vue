<script setup>
    import { ref, computed, watch } from 'vue'
    import { usePage } from '@inertiajs/vue3'
    import { Bell, CircleCheckBig } from 'lucide-vue-next'
    import { Switch } from '@/components/ui/switch'
    import { Label } from '@/components/ui/label'
    import { Sheet, SheetContent, SheetHeader, SheetTitle, SheetTrigger } from '@/components/ui/sheet'
    import Notification from './Notification.vue'

    const showRead = ref(false)
    const page = usePage()
    const notifications = ref([...page.props.notifications])
    const unreadNotifications = computed(() => notifications.value.filter((n) => n.read_at === null))
    const readNotifications = computed(() => notifications.value.filter((n) => n.read_at !== null))
    const showEmpty = computed(() => {
        if (notifications.value.length === 0) return true
        if (unreadNotifications.value.length > 0) return false
        if (showRead.value) return readNotifications.value.length === 0
        return true
    })

    watch(
        () => page.props.notifications,
        (newNotifications) => (notifications.value = [...newNotifications]),
    )
</script>

<template>
    <Sheet>
        <SheetTrigger>
            <button
                type="button"
                class="group relative flex items-center rounded-full p-1.5 text-gray-700 transition-colors hover:bg-gray-100 hover:text-gray-900 dark:text-gray-300 dark:hover:bg-gray-700 dark:hover:text-white">
                <Bell class="size-4" />
                <span
                    v-if="unreadNotifications.length"
                    class="absolute right-1.5 top-1 inline-flex size-1.5 transform rounded-full bg-blue-500">
                </span>
            </button>
        </SheetTrigger>
        <SheetContent
            side="right"
            :show-close="false"
            class="gap-2 p-2">
            <SheetHeader class="px-4 pt-4">
                <div class="flex items-center justify-between">
                    <SheetTitle class="font-medium">Notifications</SheetTitle>
                    <div
                        v-if="notifications.length"
                        class="flex items-center gap-x-1.5">
                        <Label
                            for="show-read"
                            class="text-xs text-gray-500 transition-colors hover:text-gray-800 dark:text-gray-400 dark:hover:text-gray-50">
                            show read
                        </Label>
                        <Switch
                            v-model="showRead"
                            id="show-read" />
                    </div>
                </div>
            </SheetHeader>
            <div class="flex flex-col overflow-y-auto px-4 pb-12">
                <div
                    v-if="showEmpty"
                    class="flex flex-col items-center space-y-2 rounded-lg border border-gray-100 bg-gray-50 px-4 py-12 text-sm text-gray-500 dark:border-gray-800 dark:bg-gray-900">
                    <CircleCheckBig
                        class="size-8"
                        stroke-width="1.5" />
                    <p>You're all caught up.</p>
                </div>
                <div
                    v-else
                    class="grid grid-cols-1 gap-3">
                    <Notification
                        v-for="notification in unreadNotifications"
                        :key="notification.id"
                        :notification />
                    <template v-if="showRead">
                        <Notification
                            v-for="notification in readNotifications"
                            :key="notification.id"
                            :notification />
                    </template>
                </div>
            </div>
        </SheetContent>
    </Sheet>
</template>
