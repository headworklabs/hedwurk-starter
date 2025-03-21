import { cva } from 'class-variance-authority';

export { default as Button } from './Button.vue';

export const buttonVariants = cva(
  'inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md text-sm font-medium transition-colors focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-gray-950 disabled:pointer-events-none disabled:opacity-50 [&_svg]:pointer-events-none [&_svg]:size-4 [&_svg]:shrink-0 dark:focus-visible:ring-gray-300',
  {
    variants: {
      variant: {
        default:
          'bg-gray-950/90 text-gray-50 shadow hover:bg-gray-950/100 dark:bg-gray-50 dark:text-gray-900 dark:hover:bg-gray-50/90',
        destructive:
          'bg-red-500 text-gray-50 shadow-sm hover:bg-red-600 dark:bg-red-900 dark:text-gray-50 dark:hover:bg-red-900/90',
        outline:
          'border border-gray-200 bg-white shadow-sm hover:bg-gray-100 hover:text-gray-900 dark:border-gray-800 dark:bg-gray-950 dark:hover:bg-gray-800 dark:hover:text-gray-50',
        secondary:
          'bg-gray-200 text-gray-900 shadow-sm hover:bg-gray-300 dark:bg-gray-800 dark:text-gray-50 dark:hover:bg-gray-700/80',
        ghost: 'hover:bg-gray-100 hover:text-gray-900 dark:hover:bg-gray-800 dark:hover:text-gray-50',
        link: 'text-gray-900 underline-offset-4 hover:underline dark:text-gray-50',
      },
      size: {
        default: 'h-8 px-4 py-2',
        xs: 'h-6 rounded px-2',
        sm: 'h-7 rounded-md px-3 text-xs',
        lg: 'h-10 rounded-md px-8',
        icon: 'h-8 w-8',
      },
    },
    defaultVariants: {
      variant: 'default',
      size: 'default',
    },
  },
);
