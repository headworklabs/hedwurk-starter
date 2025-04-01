<script setup>
    import { ExternalLink } from 'lucide-vue-next'

    const links = [
        {
            'Front End': [
                { label: 'Vue JS', url: 'https://vuejs.org/' },
                { label: 'Vite', url: 'https://vite.dev/' },
                { label: 'VueUse', url: 'https://vueuse.org/' },
                { label: 'Inertia JS', url: 'https://inertiajs.com/' },
                { label: 'Tailwind CSS v3', url: 'https://v3.tailwindcss.com/' },
                { label: 'ShadCn Vue', url: 'https://www.shadcn-vue.com/' },
                { label: 'Lucide Vue', url: 'https://lucide.dev/icons/' },
                { label: 'VeeValidate', url: 'https://vee-validate.logaretm.com/v4/' },
            ],
        },
        {
            'Back End': [
                { label: 'Laravel Framework', url: 'https://laravel.com/' },
                { label: 'Laravel Cashier', url: 'https://laravel.com/docs/12.x/billing' },
                { label: 'Laravel Telescope', url: 'https://laravel.com/docs/12.x/telescope' },
                { label: 'Laravel Horizon', url: 'https://laravel.com/docs/12.x/horizon' },
                { label: 'Laravel Nova', url: 'https://nova.laravel.com/' },
                { label: 'Faker PHP', url: 'https://fakerphp.github.io/formatters/numbers-and-strings/' },
                { label: 'DrawSQL DB', url: 'https://drawsql.app/' },
                { label: 'Blueprint', url: 'https://blueprint.laravelshift.com/docs/getting-started/' },
            ],
        },
        {
            Providers: [
                { label: 'Laravel Cloud', url: 'https://cloud.laravel.com/' },
                { label: 'Laravel Forge', url: 'https://forge.laravel.com/' },
                { label: 'Digital Ocean', url: 'https://www.digitalocean.com/' },
                { label: 'AWS', url: 'https://aws.amazon.com/' },
                { label: 'WorkOS', url: 'https://workos.com/' },
                { label: 'Mailtrap', url: 'https://mailtrap.io/' },
                { label: 'Cloudflare', url: 'https://www.cloudflare.com/' },
                { label: 'Stripe', url: 'https://stripe.com/' },
            ],
        },
    ]
</script>

<template>
    <div class="space-y-4">
        <h2
            id="libraries"
            class="pt-12 text-xl font-medium text-gray-500">
            Libraries
        </h2>
        <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 lg:grid-cols-3">
            <div
                v-for="(group, i) in links"
                :key="i">
                <div
                    v-for="[category, items] in Object.entries(group)"
                    :key="category"
                    class="flex flex-col space-y-2">
                    <h3>{{ category }}</h3>
                    <a
                        v-for="link in items"
                        :key="link.url"
                        :href="link.url"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="flex items-center gap-3 rounded-lg border px-3 py-2 transition hover:border-gray-800 hover:bg-gray-50 dark:border-gray-700 dark:hover:border-gray-400 dark:hover:bg-gray-800">
                        <img
                            :src="`https://www.google.com/s2/favicons?domain_url=${link.url}&sz=32`"
                            :alt="link.name + ' favicon'"
                            alt="favicon"
                            class="h-5 w-5 rounded-sm" />
                        <span class="text-sm font-medium">{{ link.label }}</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</template>
