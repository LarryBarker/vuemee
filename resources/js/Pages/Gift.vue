<template>
    <app-layout>
        <section>
            <div class="pt-32 pb-10 md:pt-40 md:pb-16">
                <div class="text-center">
                    <h1 class="text-4xl tracking-tight font-extrabold text-white sm:text-5xl md:text-6xl">
                        <span class="block xl:inline">Send a gift</span>
                    </h1>
                    <p class="mt-3 max-w-md mx-auto text-base text-gray-500 sm:text-lg md:mt-5 md:text-xl md:max-w-3xl">
                        Send your ticket to a friend.
                    </p>
                </div>
            </div>
        </section>

        <!-- Gift form -->
        <form @submit.prevent="store" class="max-w-xl mx-auto">
            <div class="flex flex-wrap -mx-3 mb-5">
                <div class="w-full px-3 mb-4 md:mb-0">
                    <label for="name" class="block text-gray-300 text-lg font-medium mb-1">Name <span v-if="required" class="text-red-600">*</span></label>
                    <input
                        v-model="form.name"
                        id="name"
                        ref="input"
                        class="bg-gray-800 border border-gray-600 focus:border-gray-500 w-full p-3 text-white  text-lg focus:ring-2 focus:ring-gray-500"
                        type="text"
                        placeholder="Enter their name"
                        required
                        autofocus
                    />
                    <div v-if="form.errors.name" class="text-red-400">{{ form.errors.name }}</div>
                </div>
            </div>

            <div class="flex flex-wrap -mx-3 mb-5">
                <div class="w-full px-3">
                    <label for="name" class="block text-gray-300 text-lg font-medium mb-1">Email <span v-if="required" class="text-red-600">*</span></label>
                    <input
                        v-model="form.email"
                        id="name"
                        ref="input"
                        class="bg-gray-800 border border-gray-600 focus:border-gray-500 w-full p-3 text-white  text-lg focus:ring-2 focus:ring-gray-500"
                        type="email"
                        placeholder="Enter their email address"
                        required
                        autofocus
                    />
                    <div v-if="form.errors.email" class="text-red-400">{{ form.errors.email }}</div>
                </div>
            </div>

            <div class="flex flex-wrap -mx-3 mt-6">
                <div class="w-full px-3">
                    <button class="px-4 py-3 text-white bg-teal-500 hover:bg-teal-400 w-full flex items-center justify-center">
                        <span>Send gift</span>
                        <svg class="w-3 h-3 flex-shrink-0 mt-px ml-2" viewBox="0 0 12 12" xmlns="http://www.w3.org/2000/svg">
                            <path class="fill-current" d="M6.602 11l-.875-.864L9.33 6.534H0v-1.25h9.33L5.727 1.693l.875-.875 5.091 5.091z" />
                        </svg>
                    </button>
                </div>
            </div>
        </form>
    </app-layout>
</template>

<script>
import AppLayout from '@/Layouts/App'
import TextInput from '@/Components/Inputs/Text'
export default {
    components: {
        AppLayout,
        TextInput
    },
    remember: 'form',
    data() {
        return {
            form: this.$inertia.form({
                name: null,
                email: null,
                ticket_id: (new URLSearchParams(window.location.search)).get('ticket_id')
            }),
        }
    },
    methods: {
        store() {
            console.log(window.location.search['ticket_id']);
            this.form.post(this.route('gifts.store'))
        },
    },
}
</script>
