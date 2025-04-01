<script setup>
    import AppLogoIcon from '@/components/AppLogoIcon.vue'
    import { Card, CardContent, CardDescription, CardHeader, CardTitle } from '@/components/ui/card'
    import { Link } from '@inertiajs/vue3'

    defineProps({
        title: String,
        description: String,
    })
</script>

<template>
    <div
        class="flex min-h-svh flex-col items-center justify-center gap-6 bg-gray-200 p-6 md:p-10 dark:bg-gray-900"
        style="
            background-image: url('https://images.unsplash.com/photo-1740664865425-1232db85683f?ixid=M3w3MzEzODl8MHwxfHJhbmRvbXx8fHx8fHx8fDE3NDM0OTc4Mjl8&ixlib=rb-4.0.3');
        ">
        <div class="flex w-full max-w-md flex-col gap-6">
            <Link
                :href="route('home')"
                class="flex items-center gap-2 self-center font-medium">
                <div class="flex h-9 w-9 items-center justify-center">
                    <AppLogoIcon class="size-9 fill-current text-black dark:text-white" />
                </div>
            </Link>
            <div class="flex flex-col gap-6">
                <Card class="rounded-xl">
                    <CardHeader class="px-10 pb-0 pt-8 text-center">
                        <CardTitle class="text-xl">{{ title }}</CardTitle>
                        <CardDescription>
                            {{ description }}
                        </CardDescription>
                    </CardHeader>
                    <CardContent class="px-10 py-8">
                        <slot />
                    </CardContent>
                </Card>
            </div>
        </div>
    </div>
</template>
