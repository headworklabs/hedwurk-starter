<script setup>
    import { ref, computed, watch } from 'vue'
    import { usePage, Link } from '@inertiajs/vue3'
    import { Bell, Trash2 } from 'lucide-vue-next'
    import { Sheet, SheetContent, SheetDescription, SheetHeader, SheetTitle, SheetTrigger } from '@/components/ui/sheet'
    import { Button } from '@/components/ui/button'

    const showRead = ref(true)
    const page = usePage()
    const notifications = ref([...page.props.notifications])
    const unreadNotifications = computed(() => notifications.value.filter((n) => n.read_at === null))

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
        <SheetContent side="right">
            <SheetHeader>
                <SheetTitle>Notifications</SheetTitle>
                <SheetDescription> </SheetDescription>
            </SheetHeader>
            <div class="grid grid-cols-1 gap-4">
                <div
                    v-for="notification in notifications"
                    :key="notification.id"
                    class="rounded-md border border-gray-200 p-4 dark:border-gray-700">
                    <h4>{{ notification.data.title }}</h4>
                    <p class="mt-2 text-xs">{{ notification.data.message }}</p>
                    <div class="mt-3 flex items-center space-x-2">
                        <Button
                            variant="outline"
                            size="sm">
                            <Link
                                :href="route('notifications.update', notification.id)"
                                method="put"
                                as="button"
                                preserve-scroll
                                preserve-state>
                                Mark As Read
                            </Link>
                        </Button>
                        <Button
                            variant="outline"
                            size="sm">
                            <Link
                                :href="route('notifications.destroy', notification.id)"
                                method="delete"
                                as="button"
                                preserve-scroll
                                preserve-state>
                                <Trash2 class="size-2" />
                            </Link>
                        </Button>
                    </div>
                </div>
            </div>
        </SheetContent>
    </Sheet>
</template>
