<script setup>
    import AppLayout from '@/layouts/AppLayout.vue'
    import PageContainer from '@/layouts/partials/PageContainer.vue'
    import { Button } from '@/components/ui/button'
    import { Input } from '@/components/ui/input'
    import { Label } from '@/components/ui/label'
    import { FloatLabel } from '@/components/ui/float-label'
    import { Checkbox } from '@/components/ui/checkbox'
    import { RadioGroup, RadioGroupItem } from '@/components/ui/radio-group'
    import { Switch } from '@/components/ui/switch'
    import { Form } from '@/components/ui/form'
    import { ArrowRight } from 'lucide-vue-next'
</script>

<template>
    <AppLayout>
        <PageContainer>
            <PageTitle title="Style Guide" />
            <div class="mt-6 flex flex-col gap-12">
                <div>
                    <h2 class="text-xl font-medium">Buttons</h2>
                    <div class="flex gap-4">
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
                <div>
                    <h2 class="text-xl font-medium">Switches</h2>
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
                <div>
                    <h2 class="text-xl font-medium">Checkboxes</h2>
                    <div class="mt-4 flex items-center space-x-2">
                        <Checkbox id="checkbox" />
                        <Label for="checkbox">Check me</Label>
                    </div>
                </div>
                <div>
                    <h2 class="text-xl font-medium">Buttons</h2>
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
                <div>
                    <h2 class="text-xl font-medium">Inputs</h2>
                    <div class="mt-4">
                        <Label for="input1">Input</Label>
                        <Input id="input1" />
                    </div>
                    <div class="relative mt-6">
                        <Input id="input2" />
                        <FloatLabel for="input2"> Float Input </FloatLabel>
                    </div>
                </div>
            </div>
        </PageContainer>
    </AppLayout>
</template>
