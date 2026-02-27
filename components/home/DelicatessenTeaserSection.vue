<!--
  ============================================
  DELICATESSEN TEASER SECTION - Carrusel de Productos
  ============================================
  
  ARQUITECTURA:
  - Carrusel usando Splide.js via Vue-Splide
  - Productos como data configurable
  - Lazy loading de imágenes
-->
<template>
  <section class="py-20 px-6 bg-white">
    <div class="max-w-7xl mx-auto">
      <!-- Section Header -->
      <SectionHeader
        title="Taste the Access"
        subtitle="A small selection of products sourced through our network, demonstrating the quality we unlock for clients."
      />

      <!-- Product Carousel -->
      <ClientOnly>
        <Splide :options="splideOptions" aria-label="Featured Products">
          <SplideSlide v-for="(product, index) in products" :key="index">
            <ProductCard
              :name="product.name"
              :description="product.description"
              :origin="product.origin"
              :price="product.price"
              :image="product.image"
            />
          </SplideSlide>
        </Splide>
        
        <template #fallback>
          <!-- SSR Fallback: Grid estático -->
          <div class="grid md:grid-cols-3 gap-8">
            <ProductCard
              v-for="(product, index) in products.slice(0, 3)"
              :key="index"
              :name="product.name"
              :description="product.description"
              :origin="product.origin"
              :price="product.price"
              :image="product.image"
            />
          </div>
        </template>
      </ClientOnly>

      <!-- CTA -->
      <div class="text-center mt-12 scroll-reveal" :class="{ 'revealed': isRevealed }">
        <NuxtLink 
          to="/delicatessen"
          class="inline-flex items-center text-gray-900 font-semibold hover:text-gray-600 transition-colors group"
        >
          View Collection
          <svg 
            class="w-4 h-4 ml-2 transition-transform group-hover:translate-x-1" 
            fill="none" 
            stroke="currentColor" 
            viewBox="0 0 24 24"
          >
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
          </svg>
        </NuxtLink>
      </div>
    </div>
  </section>
</template>

<script setup lang="ts">
import { Splide, SplideSlide } from '@splidejs/vue-splide'

// ============================================
// TIPOS
// ============================================
interface Product {
  name: string
  description: string
  origin: string
  price: string
  image: string
}

// ============================================
// DATOS
// ============================================
const products: Product[] = [
  {
    name: 'Izutsu Yatsuhashi',
    description: 'Traditional Kyoto cinnamon cookies from a 210-year-old confectionery',
    origin: 'Kyoto, Japan',
    price: '£28',
    image: '/img/yatsuhashi.jpg',
  },
  {
    name: 'Niigata No Hoshi',
    description: 'Star-shaped rice crackers made from 100% local Niigata rice',
    origin: 'Niigata, Japan',
    price: '£22',
    image: '/img/niigata-rice.jpg',
  },
  {
    name: 'Kagura-no-Sato Yuzu Kosho',
    description: 'Organic green yuzu and chili paste from Miyazaki',
    origin: 'Miyazaki, Japan',
    price: '£35',
    image: '/img/yuzu-grove.jpg',
  },
]

// ============================================
// SPLIDE OPTIONS
// ============================================
const splideOptions = {
  type: 'loop',
  perPage: 3,
  perMove: 1,
  gap: '2rem',
  autoplay: true,
  interval: 4000,
  pauseOnHover: true,
  pagination: true,
  arrows: true,
  breakpoints: {
    768: {
      perPage: 1,
      gap: '1rem',
    },
    1024: {
      perPage: 2,
      gap: '1.5rem',
    },
  },
}

// ============================================
// SCROLL REVEAL
// ============================================
const isRevealed = ref(false)

onMounted(() => {
  setTimeout(() => {
    isRevealed.value = true
  }, 200)
})
</script>
