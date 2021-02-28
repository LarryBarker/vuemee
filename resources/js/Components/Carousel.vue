<template>
  <section class="border-t border-transparent">
    <div class="py-12 md:py-20">

      <div class="max-w-6xl mx-auto px-4 sm:px-6">

        <!-- Section header -->
        <slot />

      </div>

      <!-- Carousel -->
      <div class="max-w-6xl mx-auto px-4 sm:px-6">
          <div class="relative w-100 flex flex-wrap items-start content-start">
            <div class="pb-8 flex justify-start items-start content-start overflow-x-scroll overflow-y-hidden space-x-4 whitespace-nowrap">
                <CarouselItem />
                <CarouselItem />
                <CarouselItem />
                <CarouselItem />
                <CarouselItem />
                <CarouselItem />
                <CarouselItem />
            </div>
        </div>
      </div>

    </div>
  </section>
</template>

<script>
import CarouselItem from '@/Components/CarouselItem'

export default {
  name: 'Carousel',

  components: {
      CarouselItem,
  },

  mounted() {

  }
}
</script>
