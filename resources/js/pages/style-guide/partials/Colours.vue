<script setup>
    import { ExternalLink } from 'lucide-vue-next'
</script>

<template>
    <div class="space-y-4">
        <h2
            id="colours"
            class="pt-12 text-xl font-medium text-gray-500">
            Colours
        </h2>
        <div class="grid grid-cols-1 gap-4 lg:grid-cols-2 xl:grid-cols-3">
            <a
                href="https://v3.tailwindcss.com/docs/customizing-colors"
                target="_blank"
                class="group relative inline-block rounded-lg border transition hover:border-gray-800 dark:border-gray-700 dark:hover:border-gray-400">
                <div class="h-36 w-full overflow-hidden rounded-t-lg">
                    <img
                        src="https://v3.tailwindcss.com//_next/static/media/social-card-large.a6e71726.jpg"
                        alt="TailwindCSS preview"
                        class="transform object-cover object-center transition group-hover:scale-105" />
                </div>
                <ExternalLink
                    class="absolute right-3 top-3 size-5 text-transparent transition-colors group-hover:text-gray-900"
                    strokeWidth="2" />
                <div class="px-4 pb-3 pt-3">Tailwind Colour Reference</div>
            </a>
            <a
                href="https://ui.shadcn.com/colors"
                target="_blank"
                class="group relative inline-block rounded-lg border transition hover:border-gray-800 dark:border-gray-700 dark:hover:border-gray-400">
                <div class="h-36 w-full overflow-hidden rounded-t-lg">
                    <img
                        src="https://ui.shadcn.com/og?title=Build%20your%20component%20library&description=A%20set%20of%20beautifully-designed%2C%20accessible%20components%20and%20a%20code%20distribution%20platform.%20Works%20with%20your%20favorite%20frameworks.%20Open%20Source.%20Open%20Code."
                        alt="TailwindCSS preview"
                        class="transform object-cover object-center transition group-hover:scale-105" />
                </div>
                <ExternalLink
                    class="absolute right-3 top-3 size-5 text-transparent transition-colors group-hover:text-gray-50"
                    strokeWidth="2" />
                <div class="px-4 pb-3 pt-3">ShadCn HSL Reference</div>
            </a>
            <a
                href="https://redpixelthemes.com/blog/tailwindcss-colors-different-formats/"
                target="_blank"
                class="group relative inline-block rounded-lg border transition hover:border-gray-800 dark:border-gray-700 dark:hover:border-gray-400">
                <div class="h-36 w-full overflow-hidden rounded-t-lg">
                    <img
                        src="https://redpixelthemes.com/previews/tailwind-css-color-palette-in-different-css-color-formats.png"
                        alt="TailwindCSS preview"
                        class="transform object-cover object-center transition group-hover:scale-105" />
                </div>
                <ExternalLink
                    class="absolute right-3 top-3 size-5 text-transparent transition-colors group-hover:text-white"
                    strokeWidth="2" />
                <div class="px-4 pb-3 pt-3">RedPixel TW Reference</div>
            </a>
        </div>
    </div>
</template>
