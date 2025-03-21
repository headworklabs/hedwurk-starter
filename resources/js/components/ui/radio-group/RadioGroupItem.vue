<script setup>
import { cn } from '@/lib/utils';
import { Check } from 'lucide-vue-next';
import { RadioGroupIndicator, RadioGroupItem, useForwardProps } from 'reka-ui';
import { computed } from 'vue';

const props = defineProps({
  id: { type: String, required: false },
  value: { type: [String, Number, Object, null], required: false },
  disabled: { type: Boolean, required: false },
  asChild: { type: Boolean, required: false },
  as: { type: null, required: false },
  name: { type: String, required: false },
  required: { type: Boolean, required: false },
  class: { type: null, required: false },
});

const delegatedProps = computed(() => {
  const { class: _, ...delegated } = props;

  return delegated;
});

const forwardedProps = useForwardProps(delegatedProps);
</script>

<template>
  <RadioGroupItem
    v-bind="forwardedProps"
    :class="
      cn(
        'peer aspect-square h-4 w-4 shrink-0 rounded-full border border-gray-400 shadow focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-gray-800 disabled:cursor-not-allowed disabled:opacity-50 data-[state=checked]:bg-gray-800 data-[state=checked]:text-gray-50 data-[state=checked]:border-gray-800 dark:border-gray-700 dark:focus-visible:ring-gray-300 dark:data-[state=checked]:bg-gray-50 dark:data-[state=checked]:text-gray-900 dark:data-[state=checked]:border-gray-50',
        props.class,
      )
    "
  >
    <RadioGroupIndicator class="flex items-center justify-center">
      <Check class="h-3.5 w-3.5 text-gray-50 dark:text-gray-900" />
    </RadioGroupIndicator>
  </RadioGroupItem>
</template>
