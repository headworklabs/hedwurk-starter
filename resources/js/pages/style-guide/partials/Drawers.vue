<script setup>
    import { ref } from 'vue'
    import { Link } from '@inertiajs/vue3'
    import { Button } from '@/components/ui/button'
</script>

<template>
    <div class="space-y-4">
        <h2
            id="drawers"
            class="pt-12 text-xl font-medium text-gray-500">
            Drawers
        </h2>
        <div class="grid grid-cols-1 gap-4 sm:grid-cols-3 lg:grid-cols-6">
            <Button
                variant="default"
                as-child>
                <Link
                    href="/testing/notifications"
                    method="post"
                    as="button"
                    preserve-scroll>
                    <span>Send Notification</span>
                </Link>
            </Button>
        </div>
    </div>
</template>
