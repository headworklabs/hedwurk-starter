<script setup>
    import { Input } from '@/components/ui/input'
    import { Label } from '@/components/ui/label'
    import { FloatLabel } from '@/components/ui/float-label'
</script>

<template>
    <div>
        <h2
            id="inputs"
            class="pt-12 text-xl font-medium text-gray-500">
            Inputs
        </h2>
        <div class="mt-4">
            <Label for="input1">Input</Label>
            <Input id="input1" />
        </div>
        <div class="relative mt-6">
            <Input id="input2" />
            <FloatLabel
                for="input2"
                class="bg-white">
                Float Input
            </FloatLabel>
        </div>
        <div class="relative mt-6">
            <Input
                id="input3"
                placeholder=" "
                class="peer h-12 pb-0.5 pt-[1.1rem]" />
            <FloatLabel
                for="input3"
                class="left-0 top-[0.9rem] ml-px bg-transparent px-3 text-gray-800 transition-colors duration-100 peer-placeholder-shown:text-gray-500 peer-focus:text-gray-900 dark:peer-focus:text-gray-50">
                Full Name
            </FloatLabel>
        </div>
    </div>
</template>
