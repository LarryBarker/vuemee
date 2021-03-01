<template>
    <inertia-link :class="classes">
        <slot />
    </inertia-link>
</template>

<script>
    export default {
        props: ['active'],

        computed: {
            classes() {
                return this.active
                        ? 'block pl-3 pr-4 py-2 border-l-4 border-teal-400 text-base font-medium text-teal-700 focus:outline-none focus:text-teal-800 focus:bg-teal-100 focus:border-teal-700 transition duration-150 ease-in-out'
                        : 'block pl-3 pr-4 py-2 border-l-4 border-transparent text-base font-medium text-gray-600 hover:text-gray-800 hover:bg-gray-50 hover:border-gray-300 focus:outline-none focus:text-gray-800 focus:bg-gray-50 focus:border-gray-300 transition duration-150 ease-in-out'
            }
        }
    }
</script>
