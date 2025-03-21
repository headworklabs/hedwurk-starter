<script setup lang="ts">
    import { computed } from 'vue'
    import { useInitials } from '@/composables/useInitials'
    import { Avatar, AvatarFallback, AvatarImage } from '@/components/ui/avatar'

    const props = defineProps({
        user: {
            type: Object as () => Props['user'],
            required: true,
        },
        showEmail: {
            type: Boolean,
            default: false,
        },
    })

    const { getInitials } = useInitials()

    const showAvatar = computed(() => props.user.avatar && props.user.avatar !== '')
</script>

<template>
    <Avatar class="h-8 w-8 overflow-hidden rounded-lg">
        <AvatarImage
            v-if="showAvatar"
            :src="user.avatar"
            :alt="user.name" />
        <AvatarFallback class="rounded-lg text-black dark:text-white">
            {{ getInitials(user.name) }}
        </AvatarFallback>
    </Avatar>

    <div class="grid flex-1 text-left text-sm leading-tight">
        <span class="truncate font-medium">{{ user.name }}</span>
        <span
            v-if="showEmail"
            class="text-muted-foreground truncate text-xs"
            >{{ user.email }}</span
        >
    </div>
</template>
