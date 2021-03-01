<template>
    <h3 class="text-white font-bold text-2xl mb-4">{{ this.date }}</h3>

    <div class="grid grid-cols-1 gap-4 sm:grid-cols-3 mb-8">

        <Showtime v-for="time in times" :key="time.id" :time="time.show_time" :tickets="time.remaining_tickets" />

    </div>
</template>

<script>
import Showtime from '@/Components/Showtime'
export default {
    name: 'MovieShowings',

    components: {
        Showtime
    },

    props: ['date', 'times'],

    mounted () {
    },

    computed: {
    }
}
</script>
