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

                        <MovieMetaData :movie="$page.props.movie" />
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
import MovieMetaData from '@/Components/MovieMetaData'
export default {
    name: 'Movie',

    components: {
        AppLayout,
        MovieHero,
        Review,
        MovieShowings,
        MovieMetaData,
    },

    computed: {
      showings () {
        return this.$page.props.showings
      }
    }
}
</script>
