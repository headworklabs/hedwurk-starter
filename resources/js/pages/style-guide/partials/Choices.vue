<script setup>
    import { Checkbox } from '@/components/ui/checkbox'
    import { RadioGroup, RadioGroupItem } from '@/components/ui/radio-group'
    import { Label } from '@/components/ui/label'
</script>

<template>
    <div>
        <h2
            id="checkboxes"
            class="pt-12 text-xl font-medium text-gray-500">
            Checkboxes
        </h2>
        <div class="mt-4 flex items-center space-x-2">
            <Checkbox id="checkbox" />
            <Label for="checkbox">Check me</Label>
        </div>
    </div>
    <div>
        <h2
            id="radios"
            class="pt-12 text-xl font-medium text-gray-500">
            Radios
        </h2>
        <RadioGroup class="mt-4">
            <div class="flex items-center space-x-2">
                <RadioGroupItem
                    value="option1"
                    id="option1" />
                <Label for="option1">Default</Label>
            </div>
            <div class="flex items-center space-x-2">
                <RadioGroupItem
                    value="option2"
                    id="option2" />
                <Label for="option2">Not Default</Label>
            </div>
        </RadioGroup>
    </div>
</template>
