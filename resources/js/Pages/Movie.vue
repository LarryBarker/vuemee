<template>
    <app-layout>
        <!-- Movie hero -->
        <MovieHero :image="$page.props.movie.poster_url">
            <div class="relative max-w-6xl mx-auto px-4 sm:px-6">
                <div class="sm:flex relative px-4 py-16 sm:px-6 sm:py-24 lg:py-32 lg:px-1">
                    <div class="mt-4">
                        <img :src="$page.props.movie.poster_url" :alt="$page.props.movie.title" class="shadow-xl" width="310" height="460" />
                    </div>
                    <div class="sm:ml-5 sm:mt-1">
                        <h1 v-text="$page.props.movie.title" class="text-4xl mt-4 sm:text-6xl text-white font-black"></h1>

                        <Review :score="$page.props.movie.getScore" class="h-12 w-12" />

                        <p class="text-gray-300 text-lg font-medium" v-text="$page.props.movie.description" />

                        <dl class="mt-6 flex flex-col sm:flex-row sm:flex-wrap">
                            <dt class="sr-only">Movie runtime</dt>
                            <dd class="flex items-center text-sm text-gray-500 font-medium capitalize sm:mr-6">
                                <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-teal-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                <span v-text="$page.props.movie.runtime" class="text-gray-400" />
                            </dd>
                            <dt class="sr-only">Genre</dt>
                            <dd class="mt-3 flex items-center text-sm text-gray-500 font-medium sm:mr-6 sm:mt-0 capitalize">
                                <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-teal-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z" />
                                </svg>
                                <span v-text="$page.props.movie.genre" class="text-gray-400" />
                            </dd>
                            <dt class="sr-only">Rating</dt>
                            <dd class="mt-3 flex items-center text-sm text-gray-500 font-medium sm:mr-6 sm:mt-0 capitalize">
                                <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-teal-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />
                                </svg>
                                <span v-text="'Rated ' + $page.props.movie.rating" class="text-gray-400" />
                            </dd>
                        </dl>
                    </div>
                </div>
            </div>
        </MovieHero>

        <div class="relative max-w-6xl mx-auto px-4 sm:px-6">
            <h2 class="text-white font-bold text-4xl mb-12">Showings</h2>
            <MovieShowings v-for="(times, date) in showings" :key="times.id" :date="date" :times="times" />
        </div>
    </app-layout>
</template>

<script>
import AppLayout from '@/Layouts/App'
import MovieHero from '@/Components/MovieHero'
import Review from '@/Components/Review'
import MovieShowings from '@/Components/MovieShowings'
export default {
    name: 'Movie',

    components: {
        AppLayout,
        MovieHero,
        Review,
        MovieShowings,
    },

    computed: {
      showings () {
        return this.$page.props.showings
      }
    }
}
</script>
