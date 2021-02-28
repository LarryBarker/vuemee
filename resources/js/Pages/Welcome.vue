<template>
    <app-layout>
        <!-- Hero illustration -->
        <div class="relative max-w-6xl mx-auto h-0 pointer-events-none -z-1" aria-hidden="true">
            <HeroIllustration />
        </div>

        <Hero />

    </app-layout>
</template>

<script>
    import AppLayout from '@/Layouts/App'
    import HeroIllustration from '@/Components/HeroIllustration'
    import Hero from '@/Components/Hero'

    export default {
        components: {
            AppLayout,
            HeroIllustration,
            Hero,
        }
    }
</script>
