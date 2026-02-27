<!--
  ============================================
  SECTION HEADER - Título y Subtítulo de Sección
  ============================================
  
  ARQUITECTURA:
  - Componente UI reutilizable
  - Se usa en múltiples secciones
  - Incluye animación de scroll reveal
-->
<template>
  <div 
    class="text-center mb-16 scroll-reveal"
    :class="{ 'revealed': isRevealed }"
  >
    <h2 class="font-display text-4xl md:text-5xl font-semibold text-gray-900 mb-6">
      {{ title }}
    </h2>
    <p v-if="subtitle" class="text-xl text-gray-600 max-w-3xl mx-auto">
      {{ subtitle }}
    </p>
  </div>
</template>

<script setup lang="ts">
// ============================================
// PROPS
// ============================================
interface Props {
  title: string
  subtitle?: string
}

defineProps<Props>()

// ============================================
// SCROLL REVEAL
// ============================================
const isRevealed = ref(false)

onMounted(() => {
  // Usar setTimeout para activar después del mount
  setTimeout(() => {
    isRevealed.value = true
  }, 100)
})
</script>
