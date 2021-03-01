<template>
    <div class="flex-shrink-0 w-100 h-auto relative transition-transform max-w-xs">
        <img class="transition-opacity duration-300" src="http://via.placeholder.com/310x460" width="310" height="460" alt="Carousel item 01" />
        <div class="absolute inset-0 flex flex-col transition-opacity duration-300 translate-z-0">
            <div class="flex flex-grow">
                <a :href="route('movies', movie.slug)" class="px-4 py-2 font-medium inline-flex items-center justify-center border border-transparent rounded leading-snug transition duration-150 ease-in-out text-white bg-teal-500 hover:bg-teal-400 mx-auto self-center">View Showings</a>
            </div>
        </div>
        <div class="relative z-30">
            <p class="text-white text-xl font-bold">
                {{ movie.title }}
            </p>

            <p class="text-gray-300 text-sm font-medium">
                {{ movie.next_showing.show_date }} {{ movie.next_showing.show_time }}
            </p>
            <Review :score="movie.score" />
        </div>
    </div>
</template>

<script>
import Review from '@/Components/Review'
export default {
    name: 'CarouselItem',

    components: {
        Review
    },

    props: ['movie'],

    data: (vm) => ({
        score: 3,
    }),
}
</script>
