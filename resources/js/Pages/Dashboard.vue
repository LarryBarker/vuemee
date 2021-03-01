<template>
    <app-layout>
        <div class="py-12">
            <div class="relative max-w-6xl mx-auto px-4 sm:px-6">
                <div class="mt-20">
                    <h1 class="text-white text-5xl font-black mb-8">My Tickets</h1>
                    <UserTickets :tickets="$page.props.tickets" />
                </div>

                <div class="mt-20">
                    <h1 class="text-white text-5xl font-black mb-8">My Reviews</h1>
                    <UserReviews :reviews="$page.props.reviews" />
                </div>
            </div>
        </div>
    </app-layout>
</template>

<script>
    import AppLayout from '@/Layouts/App'
    import UserTickets from '@/Components/UserTickets'
    import UserReviews from '@/Components/UserReviews'

    export default {
        components: {
            AppLayout,
            UserTickets,
            UserReviews,
        },
    }
</script>
