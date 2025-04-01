<script setup>
    import { Button } from '@/components/ui/button'
    import { ArrowRight } from 'lucide-vue-next'
</script>

<template>
    <div class="space-y-4">
        <h2
            id="buttons"
            class="pt-12 text-xl font-medium text-gray-500">
            Buttons
        </h2>
        <div class="grid grid-cols-1 gap-4 sm:grid-cols-3 lg:grid-cols-6">
            <Button variant="default">Button</Button>
            <Button variant="secondary"> Secondary </Button>
            <Button variant="destructive"> Destructive </Button>
            <Button variant="outline"> Outline </Button>
            <Button variant="ghost"> Ghost </Button>
            <Button variant="link"> Link </Button>
            <Button
                variant="outline"
                class="px-2">
                <ArrowRight class="size-4" />
            </Button>
            <Button disabled>Disabled</Button>
        </div>
    </div>
</template>
