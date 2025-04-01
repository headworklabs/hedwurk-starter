<script setup>
    import { Switch } from '@/components/ui/switch'
    import { Label } from '@/components/ui/label'
</script>

<template>
    <div>
        <h2
            id="switches"
            class="pt-12 text-xl font-medium text-gray-500">
            Switches
        </h2>
        <div class="mt-4 flex flex-col space-y-2">
            <div class="flex items-center space-x-2">
                <Switch id="airplane-mode" />
                <Label for="airplane-mode">Airplane Mode</Label>
            </div>
            <div class="flex items-center space-x-2">
                <Switch id="hairplane-mode" />
                <Label for="hairplane-mode">Hairplane Mode</Label>
            </div>
            <div class="flex items-center space-x-2">
                <Switch
                    id="scareplane-mode"
                    disabled />
                <Label for="scareplane-mode">Scareplane Mode</Label>
            </div>
        </div>
    </div>
</template>
