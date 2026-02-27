<!--
  ============================================
  TRUST CARD - Card Expandible
  ============================================
  
  ARQUITECTURA:
  - Componente reutilizable para cards expandibles
  - Recibe props del componente padre
  - Emite eventos para manejar estado de expansión
  
  MEJORA:
  - Accesibilidad completa con ARIA
  - Transiciones suaves
  - Iconos dinámicos
-->
<template>
  <div 
    class="trust-card bg-white/60 p-8 rounded-lg cursor-pointer"
    :class="{ 'expanded': isExpanded }"
    role="button"
    :aria-expanded="isExpanded"
    tabindex="0"
    @click="$emit('toggle')"
    @keydown.enter="$emit('toggle')"
    @keydown.space.prevent="$emit('toggle')"
  >
    <div class="mb-6">
      <!-- Icon -->
      <div class="w-12 h-12 bg-gray-900 rounded-full flex items-center justify-center mb-4">
        <component :is="iconComponent" class="w-6 h-6 text-white" />
      </div>
      
      <!-- Title -->
      <h3 class="font-display text-2xl font-semibold mb-4">
        {{ title }}
      </h3>
      
      <!-- Description -->
      <p class="text-gray-600 mb-4">
        {{ description }}
      </p>
      
      <!-- Expandable Details -->
      <Transition name="expand">
        <div v-show="isExpanded" class="details-content">
          <p class="text-gray-600">
            {{ details }}
          </p>
        </div>
      </Transition>
    </div>
    
    <!-- Toggle Indicator -->
    <span class="text-sm text-gray-500 font-medium">
      {{ isExpanded ? 'Click to collapse ←' : 'Click to learn more →' }}
    </span>
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
  details: string
  icon: 'language' | 'visibility' | 'warning'
  isExpanded: boolean
}

const props = defineProps<Props>()

// ============================================
// EMITS
// ============================================
defineEmits<{
  toggle: []
}>()

// ============================================
// ICONOS
// ============================================
// Iconos como componentes funcionales inline
const icons = {
  language: () => h('svg', { fill: 'none', stroke: 'currentColor', viewBox: '0 0 24 24' }, [
    h('path', { 
      'stroke-linecap': 'round', 
      'stroke-linejoin': 'round', 
      'stroke-width': '2', 
      d: 'M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z' 
    }),
  ]),
  visibility: () => h('svg', { fill: 'none', stroke: 'currentColor', viewBox: '0 0 24 24' }, [
    h('path', { 'stroke-linecap': 'round', 'stroke-linejoin': 'round', 'stroke-width': '2', d: 'M15 12a3 3 0 11-6 0 3 3 0 016 0z' }),
    h('path', { 'stroke-linecap': 'round', 'stroke-linejoin': 'round', 'stroke-width': '2', d: 'M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z' }),
  ]),
  warning: () => h('svg', { fill: 'none', stroke: 'currentColor', viewBox: '0 0 24 24' }, [
    h('path', { 'stroke-linecap': 'round', 'stroke-linejoin': 'round', 'stroke-width': '2', d: 'M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-2.5L13.732 4c-.77-.833-1.964-.833-2.732 0L3.732 16.5c-.77.833.192 2.5 1.732 2.5z' }),
  ]),
}

const iconComponent = computed(() => icons[props.icon])
</script>

<style scoped>
/* Transición de expansión */
.expand-enter-active,
.expand-leave-active {
  transition: all 0.3s ease;
  overflow: hidden;
}

.expand-enter-from,
.expand-leave-to {
  opacity: 0;
  max-height: 0;
}

.expand-enter-to,
.expand-leave-from {
  opacity: 1;
  max-height: 200px;
}

.details-content {
  padding-top: 0.5rem;
}
</style>
