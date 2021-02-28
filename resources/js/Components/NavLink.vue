<template>
    <inertia-link :href="href" :class="classes">
        <slot />
    </inertia-link>
</template>

<script>
    export default {
        props: ['href', 'active'],

        computed: {
            classes() {
                return this.active
                            ? 'inline-flex items-center pt-1 font-medium leading-5 text-gray-300 focus:outline-none focus:border-teal-700 transition duration-150 ease-in-out'
                            : 'inline-flex items-center pt-1 font-medium leading-5 text-gray-500 hover:text-gray-700 focus:outline-none focus:text-gray-700 transition duration-150 ease-in-out'
            }
        }
    }
</script>
