<template>
    <header class="absolute w-full z-30">
        <FlashMessage />
        <div class="max-w-6xl mx-auto px-4 sm:px-6">
            <div class="flex items-center justify-between h-20">

                <div class="flex-shrink-0 mr-5">
                    <inertia-link href="/">
                        <breeze-application-logo />
                    </inertia-link>
                </div>

                <div class="flex">
                    <!-- Navigation Links -->
                    <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                        <div v-if="$page.props.auth.user" class="md:flex md:items-center md:space-x-6">
                            <breeze-nav-link :href="route('dashboard')" :active="route().current('dashboard')" class="text-base font-medium text-white hover:text-gray-300">
                                Dashboard
                            </breeze-nav-link>
                            <breeze-nav-link :href="route('logout')" method="post" as="button" class="text-base font-medium text-white hover:text-gray-300">
                                Log Out
                            </breeze-nav-link>
                        </div>
                        <div v-else class="md:flex md:items-center md:space-x-6">
                            <a :href="route('login')" class="text-base font-medium text-white hover:text-gray-300">
                                Log in
                            </a>
                            <a :href="route('register')" class="inline-flex items-center px-4 py-2 border border-transparent text-base font-medium rounded-md text-white bg-teal-600 hover:bg-teal-700">
                                Register
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Hamburger -->
                <div class="-mr-2 flex items-center sm:hidden">
                    <button @click="showingNavigationDropdown = ! showingNavigationDropdown" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 bg-gray-800 hover:text-gray-500 hover:bg-gray-800 focus:outline-none focus:bg-gray-800 focus:text-gray-500 transition duration-150 ease-in-out">
                        <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                            <path :class="{'hidden': showingNavigationDropdown, 'inline-flex': ! showingNavigationDropdown }" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                            <path :class="{'hidden': ! showingNavigationDropdown, 'inline-flex': showingNavigationDropdown }" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>

            </div>
        </div>

        <!-- Responsive Navigation Menu -->
        <div :class="{'block': showingNavigationDropdown, 'hidden': ! showingNavigationDropdown}" class="sm:hidden bg-gray-800">
            <div v-if="$page.props.auth.user">
                <div class="pt-2 pb-3 space-y-1">
                    <breeze-responsive-nav-link :href="route('dashboard')" :active="route().current('dashboard')">
                        Dashboard
                    </breeze-responsive-nav-link>
                </div>

                <!-- Responsive Settings Options -->
                <div class="pt-4 pb-1 border-t border-gray-900">
                    <div class="flex items-center px-4">
                        <div class="font-medium text-base text-gray-300 mr-2">{{ $page.props.auth.user.name }}</div>
                        <div class="font-medium text-sm text-gray-500">{{ $page.props.auth.user.email }}</div>
                    </div>

                    <div class="mt-3 space-y-1">
                        <breeze-responsive-nav-link :href="route('logout')" method="post" as="button">
                            Log Out
                        </breeze-responsive-nav-link>
                    </div>
                </div>
            </div>
            <div v-else>
                <div class="pt-2 pb-3 space-y-1">
                    <breeze-responsive-nav-link :href="route('register')">
                        Register
                    </breeze-responsive-nav-link>
                    <breeze-responsive-nav-link :href="route('login')">
                        Login
                    </breeze-responsive-nav-link>
                </div>
            </div>
        </div>
    </header>
</template>

<script>
    import BreezeApplicationLogo from '@/Components/ApplicationLogo'
    import BreezeNavLink from '@/Components/NavLink'
    import BreezeResponsiveNavLink from '@/Components/ResponsiveNavLink'
    import FlashMessage from '@/Components/FlashMessage'

    export default {
        components: {
            BreezeApplicationLogo,
            BreezeNavLink,
            BreezeResponsiveNavLink,
            FlashMessage,
        },

        data() {
            return {
                showingNavigationDropdown: false,
            }
        },
    }
</script>
