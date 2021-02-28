<template>
    <div class="mx-auto">
        <div class="relative sm:overflow-hidden">

            <div class="absolute inset-0">
                <img class="h-full w-full object-cover opacity-40" :src="this.image" :alt="$page.props.movie.title">
                <div class="absolute inset-0 bg-gradient-to-t from-gray-900 to-transparent opacity-80" style="mix-blend-mode: multiply;"></div>
            </div>

            <slot />

        </div>
    </div>
</template>

<script>
    export default {
        name: 'MovieHero',

        props: ['image'],
    }
</script>
