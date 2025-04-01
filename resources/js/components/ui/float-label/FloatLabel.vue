<script setup>
import { cn } from '@/lib/utils';
import { Label } from 'reka-ui';
import { computed } from 'vue';

const props = defineProps({
  for: { type: String, required: false },
  asChild: { type: Boolean, required: false },
  as: { type: null, required: false },
  class: { type: null, required: false },
});

const delegatedProps = computed(() => {
  const { class: _, ...delegated } = props;

  return delegated;
});
</script>

<template>
  <Label
    v-bind="delegatedProps"
    :class="
      cn(
        'font-medium leading-none cursor-pointer select-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70 absolute left-2 top-0 -mt-2 bg-gray-100 dark:bg-gray-950 px-1.5 text-xs',
        props.class,
      )
    "
  >
    <slot />
  </Label>
</template>
