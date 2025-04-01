<script setup>
    import { cva } from 'class-variance-authority'
    import { cn } from '@/lib/utils'

    const props = defineProps({
        x: { type: null, required: false },
        y: { type: null, required: false },
        class: { type: null, required: false },
    })

    const containerVariants = cva('w-full px-4 mx-auto', {
        variants: {
            x: {
                default: '',
                xs: 'lg:max-w-xl',
                sm: 'lg:max-w-2xl',
                md: 'lg:max-w-3xl',
                lg: 'lg:max-w-5xl',
                xl: 'lg:max-w-7xl',
            },
            y: {
                default: 'py-6',
                none: 'py-0',
                xs: 'py-2',
                sm: 'py-4',
                lg: 'py-16',
                xl: 'py-20',
            },
        },
        defaultVariants: {
            x: 'default',
            y: 'default',
        },
    })
</script>

<template>
    <main :class="cn(containerVariants({ x, y }), props.class)">
        <slot />
    </main>
</template>
