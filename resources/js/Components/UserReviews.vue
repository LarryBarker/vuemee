<template>
    <div class="overflow-hidden">
        <ul class="divide-y divide-gray-200 space-y-4">
            <li v-for="review in reviews" :key="review.id" class="bg-gray-800 shadow">
                <div class="block hover:bg-gray-700">
                    <div class="flex items-center px-4 py-4 sm:px-6">
                        <div class="min-w-0 flex-1 flex items-center">
                            <div class="flex-shrink-0">
                                <img class="h-32 w-24" :src="review.movie.poster_url" :alt="review.movie.title">
                            </div>
                            <div class="min-w-0 flex-1 px-4 md:grid md:grid-cols-2 md:gap-4">
                                <div>
                                    <p class="text-xl font-bold text-white truncate">{{ review.movie.title }}</p>
                                    <Review :score="review.score" :movieId="review.movie.id" />
                                    <p class="text-md font-medium text-gray-300 truncate">{{ review.movie.description }}</p>
                                    <p class="mt-2 flex items-center text-sm text-gray-500">
                                        <MovieMetaData :movie="review.movie" />
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div>
                            <!-- Heroicon name: solid/chevron-right -->
                            <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                            </svg>
                        </div>
                    </div>
                </div>
            </li>

        </ul>
    </div>
</template>

<script>
import Review from '@/Components/Review'
import MovieMetaData from '@/Components/MovieMetaData'

export default {
    components: {
        Review,
        MovieMetaData
    },

    props: ['reviews']
}
</script>
