<template>
    <app-layout>
        <!-- Hero illustration -->
        <div class="relative max-w-6xl mx-auto h-0 pointer-events-none -z-1" aria-hidden="true">
            <HeroIllustration />
        </div>

        <Hero />

        <Carousel>
            <div class="max-w-3xl mx-auto text-center pb-12 md:pb-16">
                <h1 class="h2 text-7xl font-black text-white mb-4">Popular Movies</h1>
                <p class="text-xl text-gray-600">Browse our most popular movies rated by viewers just like you!</p>
            </div>
        </Carousel>

        <Carousel>
            <div class="max-w-3xl mx-auto text-center pb-12 md:pb-16">
                <h1 class="h2 text-7xl font-black text-white mb-4">Now Showing</h1>
                <p class="text-xl text-gray-600">Find a showtime for movies not yet rated.</p>
            </div>
        </Carousel>

    </app-layout>
</template>

<script>
    import AppLayout from '@/Layouts/App'
    import HeroIllustration from '@/Components/HeroIllustration'
    import Hero from '@/Components/Hero'
    import Carousel from '@/Components/Carousel'

    export default {
        components: {
            AppLayout,
            HeroIllustration,
            Hero,
            Carousel,
        }
    }
</script>
