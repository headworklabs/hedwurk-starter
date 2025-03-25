<script setup>
    import { Link, useForm, usePage } from '@inertiajs/vue3'
    import AppLayout from '@/layouts/AppLayout.vue'
    import SettingsLayout from '@/layouts/settings/Layout.vue'
    import PageTitle from '@/layouts/partials/PageTitle.vue'
    import { Button } from '@/components/ui/button'
    import { Input } from '@/components/ui/input'
    import { Label } from '@/components/ui/label'
    import InputError from '@/components/forms/InputError.vue'
    import DeleteUser from '@/components/DeleteUser.vue'

    defineProps({
        mustVerifyEmail: Boolean,
        status: String,
    })

    const breadcrumbs = [
        {
            title: 'Profile Info',
            href: '/settings/profile',
        },
    ]

    const page = usePage()
    const user = page.props.auth.user

    const form = useForm({
        name: user.name,
        email: user.email,
    })

    const submit = () => {
        form.patch(route('profile.update'), {
            preserveScroll: true,
        })
    }
</script>

<template>
    <AppLayout :breadcrumbs>
        <SettingsLayout>
            <div class="flex flex-col space-y-6">
                <PageTitle
                    title="Profile Info"
                    description="Update your name and email address" />
                <form
                    @submit.prevent="submit"
                    class="space-y-6">
                    <div class="grid gap-2">
                        <Label for="name">Name</Label>
                        <Input
                            id="name"
                            class="mt-1 block w-full"
                            v-model="form.name"
                            required
                            autocomplete="name"
                            placeholder="Full name" />
                        <InputError
                            class="mt-2"
                            :message="form.errors.name" />
                    </div>
                    <div class="grid gap-2">
                        <Label for="email">Email address</Label>
                        <Input
                            id="email"
                            type="email"
                            class="mt-1 block w-full"
                            v-model="form.email"
                            required
                            autocomplete="username"
                            placeholder="Email address" />
                        <InputError
                            class="mt-2"
                            :message="form.errors.email" />
                    </div>
                    <div v-if="mustVerifyEmail && !user.email_verified_at">
                        <p class="text-muted-foreground -mt-4 text-sm">
                            Your email address is unverified.
                            <Link
                                :href="route('verification.send')"
                                method="post"
                                as="button"
                                class="text-foreground underline decoration-gray-300 underline-offset-4 transition-colors duration-300 ease-out hover:!decoration-current dark:decoration-gray-500">
                                Click here to resend the verification email.
                            </Link>
                        </p>

                        <div
                            v-if="status === 'verification-link-sent'"
                            class="text-green-600 mt-2 text-sm font-medium">
                            A new verification link has been sent to your email address.
                        </div>
                    </div>
                    <div class="flex items-center gap-4">
                        <Button :disabled="form.processing">Save</Button>
                        <Transition
                            enter-active-class="transition ease-in-out"
                            enter-from-class="opacity-0"
                            leave-active-class="transition ease-in-out"
                            leave-to-class="opacity-0">
                            <p
                                v-show="form.recentlySuccessful"
                                class="text-sm text-gray-600">
                                Saved.
                            </p>
                        </Transition>
                    </div>
                </form>
            </div>
            <DeleteUser />
        </SettingsLayout>
    </AppLayout>
</template>
