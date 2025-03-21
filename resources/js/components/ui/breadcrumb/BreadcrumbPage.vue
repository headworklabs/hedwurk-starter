<script setup>
import { cn } from '@/lib/utils';

const props = defineProps({
  class: { type: null, required: false },
});
</script>

<template>
  <span
    role="link"
    aria-disabled="true"
    aria-current="page"
    :class="cn('font-normal text-gray-950 dark:text-gray-50', props.class)"
  >
    <slot />
  </span>
</template>
