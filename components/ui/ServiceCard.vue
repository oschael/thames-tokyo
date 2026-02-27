<!--
  ============================================
  SERVICE CARD - Card de Servicio Individual
  ============================================
  
  ARQUITECTURA:
  - Componente UI reutilizable
  - Iconos SVG inline
  - Animación escalonada basada en index
-->
<template>
  <div 
    class="text-center scroll-reveal"
    :class="{ 'revealed': isRevealed }"
  >
    <!-- Icon -->
    <div class="w-16 h-16 bg-gray-900 rounded-full flex items-center justify-center mx-auto mb-6">
      <component :is="iconComponent" class="w-8 h-8 text-white" />
    </div>
    
    <!-- Title -->
    <h3 class="font-display text-2xl font-semibold mb-4">
      {{ title }}
    </h3>
    
    <!-- Description -->
    <p class="text-gray-600">
      {{ description }}
    </p>
  </div>
</template>

<script setup lang="ts">
import { h } from 'vue'

// ============================================
// PROPS
// ============================================
interface Props {
  title: string
  description: string
  icon: 'check' | 'exchange' | 'lightning'
  index?: number
}

const props = withDefaults(defineProps<Props>(), {
  index: 0,
})

// ============================================
// ICONOS
// ============================================
const icons = {
  check: () => h('svg', { fill: 'none', stroke: 'currentColor', viewBox: '0 0 24 24' }, [
    h('path', { 
      'stroke-linecap': 'round', 
      'stroke-linejoin': 'round', 
      'stroke-width': '2', 
      d: 'M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z' 
    }),
  ]),
  exchange: () => h('svg', { fill: 'none', stroke: 'currentColor', viewBox: '0 0 24 24' }, [
    h('path', { 
      'stroke-linecap': 'round', 
      'stroke-linejoin': 'round', 
      'stroke-width': '2', 
      d: 'M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4' 
    }),
  ]),
  lightning: () => h('svg', { fill: 'none', stroke: 'currentColor', viewBox: '0 0 24 24' }, [
    h('path', { 
      'stroke-linecap': 'round', 
      'stroke-linejoin': 'round', 
      'stroke-width': '2', 
      d: 'M13 10V3L4 14h7v7l9-11h-7z' 
    }),
  ]),
}

const iconComponent = computed(() => icons[props.icon])

// ============================================
// SCROLL REVEAL CON DELAY
// ============================================
const isRevealed = ref(false)

onMounted(() => {
  // Staggered animation based on index
  setTimeout(() => {
    isRevealed.value = true
  }, 100 + props.index * 150)
})
</script>
