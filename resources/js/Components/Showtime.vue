<template>
    <div class="relative bg-gray-800 px-6 py-5 shadow-sm flex items-center space-x-3 hover:border-gray-400 focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-teal-500">
        <div class="flex-1 min-w-0 text-center">
            <a @click="store" class="focus:outline-none">
                <span class="absolute inset-0" aria-hidden="true"></span>
                <p class="text-xl font-bold text-white">
                    {{ time }}
                </p>
                <p class="text-md text-gray-500 truncate">
                    {{ tickets }} tickets available
                </p>
                <p class="text-md text-gray-100 truncate inline-flex">
                    Purchase
                    <svg class="w-4 h-4 ml-2 mt-1 text-teal-500 font-bold rotate-45" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18 18" fill="currentColor">
                        <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                </p>
            </a>
        </div>
    </div>
</template>

<script>
export default {
    name: 'Showtime',

    props: ['time', 'tickets', 'showing'],

    data() {
        return {
            form: this.$inertia.form({
                showing_id: this.showing.id,
            }),
        }
    },
    methods: {
        store() {
            console.log(this.showing.id)
            this.form.post(this.route('tickets.store'))
        },
    },
}
</script>
