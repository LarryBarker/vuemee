<template>
    <div class="w-full absolute">
        <div v-if="isVisible && $page.props.flash.success" class="my-8 flex items-center justify-between bg-teal-500 shadow-lg max-w-md mx-auto">
            <div class="flex items-center">
                <svg class="ml-4 mr-2 flex-shrink-0 w-5 h-5 text-teal-900" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 5v2m0 4v2m0 4v2M5 5a2 2 0 00-2 2v3a2 2 0 110 4v3a2 2 0 002 2h14a2 2 0 002-2v-3a2 2 0 110-4V7a2 2 0 00-2-2H5z" />
                </svg>
                <div class="py-4 text-white text-sm font-medium">
                    {{ $page.props.flash.success }}
                </div>
            </div>
            <button type="button" class="group mr-2 p-2" @click="isVisible = false">
                <svg class="block w-5 h-5 text-teal-900" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>
        <div v-if="isVisible && ($page.props.flash.error || Object.keys($page.props.errors).length > 0)" class="my-8 flex items-center justify-between bg-red-400 shadow-lg max-w-md mx-auto">
            <div class="flex items-center">
                <svg class="ml-4 mr-2 flex-shrink-0 w-5 h-5 text-red-900" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                </svg>
                <div v-if="$page.props.flash.error" class="py-4 text-white text-sm font-medium">
                    {{ $page.props.flash.error }}
                </div>
                <div v-else class="py-4 text-white text-sm font-medium">
                    There was a problem with your request. Please try again.
                </div>
            </div>
            <button type="button" class="group mr-2 p-2" @click="isVisible = false">
                <svg class="block w-5 h-5 text-red-900" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            isVisible: true,
        }
    },
    watch: {
        '$page.props.flash': {
            deep: true,
            handler() {
                this.isVisible = true
            },
        },
    },
}
</script>
