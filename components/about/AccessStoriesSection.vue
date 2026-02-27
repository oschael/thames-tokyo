<!--
  ============================================
  ACCESS STORIES SECTION - Estadísticas y Métricas
  ============================================
  
  ARQUITECTURA:
  - Sección de estadísticas con animación de números
  - Grid layout responsivo
  - CTA a página de contacto
-->
<template>
  <section class="py-20 px-6">
    <div class="max-w-7xl mx-auto">
      <div class="grid lg:grid-cols-2 gap-16 items-center">
        <!-- Left Column -->
        <div class="scroll-reveal" :class="{ 'revealed': isRevealed }">
          <h2 class="font-display text-4xl font-semibold text-gray-900 mb-8">
            Stories from the Invisible Market
          </h2>
          <div class="text-center">
            <div class="text-4xl font-display font-semibold text-gray-900 mb-2">
              {{ metrics[0].value }}
            </div>
            <p class="text-gray-600 mb-6">
              {{ metrics[0].label }}
            </p>
          </div>
        </div>
        
        <!-- Right Column -->
        <div class="scroll-reveal" :class="{ 'revealed': isRevealed }">
          <div class="space-y-8 mb-12">
            <div 
              v-for="(metric, index) in metrics.slice(1)" 
              :key="index"
              class="text-center"
            >
              <div class="text-4xl font-display font-semibold text-gray-900 mb-2">
                {{ metric.value }}
              </div>
              <p class="text-gray-600">
                {{ metric.label }}
              </p>
            </div>
          </div>
          
          <!-- CTA -->
          <div class="text-center">
            <NuxtLink 
              to="/contact"
              class="inline-flex items-center bg-gray-900 text-white px-8 py-4 rounded-sm font-semibold hover:bg-gray-800 transition-colors group"
            >
              Start building your bridge
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
// TIPOS
// ============================================
interface Metric {
  value: string
  label: string
}

// ============================================
// DATOS
// ============================================
const metrics: Metric[] = [
  { value: '15+', label: 'Years of relationship building' },
  { value: '200+', label: 'Exclusive supplier relationships' },
  { value: '98%', label: 'Client satisfaction rate' },
]

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
