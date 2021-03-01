<template>
    <div class="flex flex-col min-h-screen overflow-hidden">

        <Header />

        <div class="min-h-screen bg-gray-900">

            <!-- Page Content -->
            <main class="flex-grow">

                <slot />
            </main>

        </div>

    </div>
</template>

<script>
    import Header from '@/Components/Header'
    import HeroIllustration from '@/Components/HeroIllustration'
    import FlashMessage from '@/Components/FlashMessage'

    export default {
        components: {
            Header,
            HeroIllustration,
            FlashMessage,
        },
    }
</script>
