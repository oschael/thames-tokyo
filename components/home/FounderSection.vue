<!--
  ============================================
  FOUNDER SECTION - Presentación de la Fundadora
  ============================================
  
  ARQUITECTURA:
  - Sección de presentación con imagen y texto
  - Grid layout responsivo
  - Uso de scroll reveal para animaciones
-->
<template>
  <section class="py-20 px-6 bg-white">
    <div class="max-w-7xl mx-auto">
      <div class="grid lg:grid-cols-2 gap-16 items-center">
        <!-- Image -->
        <div class="scroll-reveal" :class="{ 'revealed': isRevealed }">
          <img 
            :src="imageSrc" 
            :alt="imageAlt"
            class="w-full h-96 object-cover rounded-lg shadow-lg"
            loading="lazy"
          >
        </div>
        
        <!-- Content -->
        <div class="scroll-reveal" :class="{ 'revealed': isRevealed }">
          <h2 class="font-display text-4xl font-semibold text-gray-900 mb-8">
            {{ title }}
          </h2>
          
          <div class="space-y-6">
            <div 
              v-for="(point, index) in bulletPoints" 
              :key="index"
              class="flex items-start space-x-4"
            >
              <div class="w-2 h-2 bg-gray-900 rounded-full mt-3 flex-shrink-0" />
              <p class="text-lg text-gray-700" v-html="point" />
            </div>
          </div>
          
          <div class="mt-8">
            <NuxtLink 
              :to="ctaLink"
              class="inline-flex items-center text-gray-900 font-semibold hover:text-gray-600 transition-colors group"
            >
              {{ ctaText }}
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
      </div>
    </div>
  </section>
</template>

<script setup lang="ts">
// ============================================
// PROPS
// ============================================
interface Props {
  title?: string
  bulletPoints?: string[]
  imageSrc?: string
  imageAlt?: string
  ctaText?: string
  ctaLink?: string
}

withDefaults(defineProps<Props>(), {
  title: 'Your Bridge to Japan\'s Hidden Market',
  bulletPoints: () => [
    '<strong>Rie Toda Flores</strong> has spent years consulting for global firms in the most rigorous and highly regulated sectors, building relationships with Japan\'s most exclusive suppliers.',
    'Fluent in both Japanese business culture and Western expectations, she serves as the cultural interface that transforms risk into partnership.',
    'Her network spans from 200-year-old confectionery houses in Kyoto to cutting-edge manufacturers in Tokyo, each relationship built on trust and mutual respect.',
  ],
  imageSrc: '/img/founder-rie.jpg',
  imageAlt: 'Rie Toda Flores - Founder',
  ctaText: 'Read Rie\'s full story',
  ctaLink: '/about',
})

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
