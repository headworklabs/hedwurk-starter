<script setup>
    import AppLayout from '@/layouts/AppLayout.vue'
    import PageContainer from '@/layouts/partials/PageContainer.vue'
    import PageTitle from '@/layouts/partials/PageTitle.vue'
    import Libraries from './partials/Libraries.vue'
    import Colours from './partials/Colours.vue'
    import Buttons from './partials/Buttons.vue'
    import Switches from './partials/Switches.vue'
    import Choices from './partials/Choices.vue'
    import Inputs from './partials/Inputs.vue'
    import Selects from './partials/Selects.vue'
    import Modals from './partials/Modals.vue'
    import Drawers from './partials/Drawers.vue'

    const navItems = [
        { name: 'Style Guide', href: '#style-guide' },
        { name: 'Libraries', href: '#libraries' },
        { name: 'Colours', href: '#colours' },
        { name: 'Buttons', href: '#buttons' },
        { name: 'Switches', href: '#switches' },
        { name: 'Checkboxes', href: '#checkboxes' },
        { name: 'Radios', href: '#radios' },
        { name: 'Inputs', href: '#inputs' },
        { name: 'Selects', href: '#selects' },
        { name: 'Modals', href: '#modals' },
        { name: 'Drawers', href: '#drawers' },
        { name: 'Modals', href: '#modals' },
        { name: 'Drop Downs', href: '#drop-downs' },
        // { name: 'Tooltips', href: '#tooltips' },
        // { name: 'Popovers', href: '#popovers' },
        // { name: 'Toasts', href: '#toasts' },
        // { name: 'Notifications', href: '#notifications' },
        // { name: 'Pagination', href: '#pagination' },
        // { name: 'Tables', href: '#tables' },
        // { name: 'Cards', href: '#cards' },
        // { name: 'Avatars', href: '#avatars' },
        // { name: 'Badges', href: '#badges' },
        // { name: 'Progress Bars', href: '#progress-bars' },
        // { name: 'Spinners', href: '#spinners' },
        // { name: 'Icons', href: '#icons' },
        // { name: 'Typography', href: '#typography' },
        // { name: 'Grid', href: '#grid' },
        // { name: 'Forms', href: '#forms' },
        // { name: 'Alerts', href: '#alerts' },
        // { name: 'Tooltips', href: '#tooltips' },
        // { name: 'Popovers', href: '#popovers' },
        // { name: 'Toasts', href: '#toasts' },
        // { name: 'Notifications', href: '#notifications' },
        // { name: 'Pagination', href: '#pagination' },
        // { name: 'Tables', href: '#tables' },
        // { name: 'Cards', href: '#cards' },
        // { name: 'Avatars', href: '#avatars' },
        // { name: 'Badges', href: '#badges' },
        // { name: 'Progress Bars', href: '#progress-bars' },
        // { name: 'Spinners', href: '#spinners' },
        // { name: 'Icons', href: '#icons' },
    ]
</script>

<template>
    <AppLayout>
        <PageContainer
            class="px-12"
            y="lg">
            <PageTitle title="Style Guide" />
            <div class="flex space-x-12">
                <div class="mt-6 space-y-12">
                    <Libraries />
                    <Colours />
                    <Buttons />
                    <Switches />
                    <Choices />
                    <Inputs />
                    <Selects />
                    <Modals />
                    <Drawers />
                    <!-- <DropDowns /> -->
                </div>
                <div class="hidden w-44 flex-shrink-0 lg:block 2xl:w-52">
                    <div class="fixed top-0 pt-32 text-sm">
                        <h4 class="font-medium">On this page</h4>
                        <ul class="mt-4 space-y-2">
                            <li
                                v-for="item in navItems"
                                :key="item.name">
                                <a
                                    :href="item.href"
                                    class="text-gray-500 transition hover:text-gray-800 dark:hover:text-gray-50">
                                    {{ item.name }}
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </PageContainer>
    </AppLayout>
</template>
