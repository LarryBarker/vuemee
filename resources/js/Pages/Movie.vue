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
                                <span v-text="$page.props.movie.length" class="text-gray-400" />
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
            <h3 class="text-white font-bold text-2xl mb-4">Sunday, February 28</h3>
            <div class="grid grid-cols-1 gap-4 sm:grid-cols-3">
                <div class="relative bg-gray-800 px-6 py-5 shadow-sm flex items-center space-x-3 hover:border-gray-400 focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-teal-500">
                    <div class="flex-1 min-w-0 text-center">
                        <a href="#" class="focus:outline-none">
                            <span class="absolute inset-0" aria-hidden="true"></span>
                            <p class="text-xl font-bold text-white">
                                1:15pm
                            </p>
                            <p class="text-md text-gray-500 truncate">
                                20 tickets available
                            </p>
                            <p class="text-md text-gray-100 truncate inline-flex">
                                Purchase
                                <svg class="w-4 h-4 ml-2 mt-1 text-teal-500 font-bold rotate-45" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18 18" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </p>
                        </a>
                    </div>
                </div>

                <div class="relative bg-gray-800 px-6 py-5 shadow-sm flex items-center space-x-3 hover:border-gray-400 focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-teal-500">
                    <div class="flex-1 min-w-0 text-center">
                        <a href="#" class="focus:outline-none">
                            <span class="absolute inset-0" aria-hidden="true"></span>
                            <p class="text-xl font-bold text-white">
                                1:15pm
                            </p>
                            <p class="text-md text-gray-500 truncate">
                                20 tickets available
                            </p>
                            <p class="text-md text-gray-100 truncate inline-flex">
                                Purchase
                                <svg class="w-4 h-4 ml-2 mt-1 text-teal-500 font-bold rotate-45" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18 18" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </p>
                        </a>
                    </div>
                </div>

                <div class="relative bg-gray-800 px-6 py-5 shadow-sm flex items-center space-x-3 hover:border-gray-400 focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-teal-500">
                    <div class="flex-1 min-w-0 text-center">
                        <a href="#" class="focus:outline-none">
                            <span class="absolute inset-0" aria-hidden="true"></span>
                            <p class="text-xl font-bold text-white">
                                1:15pm
                            </p>
                            <p class="text-md text-gray-500 truncate">
                                20 tickets available
                            </p>
                            <p class="text-md text-gray-100 truncate inline-flex">
                                Purchase
                                <svg class="w-4 h-4 ml-2 mt-1 text-teal-500 font-bold rotate-45" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18 18" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </p>
                        </a>
                    </div>
                </div>

                <div class="relative bg-gray-800 px-6 py-5 shadow-sm flex items-center space-x-3 hover:border-gray-400 focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-teal-500">
                    <div class="flex-1 min-w-0 text-center">
                        <a href="#" class="focus:outline-none">
                            <span class="absolute inset-0" aria-hidden="true"></span>
                            <p class="text-xl font-bold text-white">
                                1:15pm
                            </p>
                            <p class="text-md text-gray-500 truncate">
                                20 tickets available
                            </p>
                            <p class="text-md text-gray-100 truncate inline-flex">
                                Purchase
                                <svg class="w-4 h-4 ml-2 mt-1 text-teal-500 font-bold rotate-45" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18 18" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </app-layout>
</template>

<script>
import AppLayout from '@/Layouts/App'
import MovieHero from '@/Components/MovieHero'
import Review from '@/Components/Review'
export default {
    name: 'Movie',

    components: {
        AppLayout,
        MovieHero,
        Review,
    }
}
</script>
