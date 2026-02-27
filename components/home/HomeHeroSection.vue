<!--
  ============================================
  HERO SECTION - Sección Principal del Home
  ============================================
  
  ARQUITECTURA:
  - Componente de sección específico para Home
  - Contiene efecto typewriter usando Typed.js
  - Imagen de fondo configurable via props o CSS
  
  DECISIÓN: El efecto typewriter se inicializa en onMounted
  para asegurar que el DOM está listo.
  
  MEJORA: Exposición de props para configuración flexible
-->
<template>
  <section class="hero-bg min-h-screen flex items-center justify-center relative">
    <!-- Overlay Gradient -->
    <div class="absolute inset-0 bg-gradient-to-b from-transparent via-black/20 to-black/40" />
    
    <!-- Content -->
    <div class="relative z-10 text-center text-white px-6 max-w-4xl mx-auto">
      <!-- Animated Headline -->
      <h1 class="font-display text-5xl md:text-7xl font-semibold mb-6 leading-tight">
        <span ref="typedElement" class="typed-text" />
      </h1>
      
      <!-- Subheadline -->
      <p class="text-xl md:text-2xl mb-8 opacity-90 max-w-3xl mx-auto leading-relaxed">
        {{ subtitle }}
      </p>
      
      <!-- CTAs -->
      <div class="flex flex-col sm:flex-row gap-4 justify-center">
        <NuxtLink 
          to="/contact" 
          class="bg-white text-gray-900 px-8 py-4 rounded-sm font-semibold hover:bg-gray-100 transition-colors"
        >
          {{ primaryCta }}
        </NuxtLink>
        <NuxtLink 
          :to="secondaryCtaLink"
          class="border-2 border-white text-white px-8 py-4 rounded-sm font-semibold hover:bg-white hover:text-gray-900 transition-colors"
        >
          {{ secondaryCta }}
        </NuxtLink>
      </div>
    </div>
  </section>
</template>

<script setup lang="ts">
import Typed from 'typed.js'

// ============================================
// PROPS
// ============================================
interface Props {
  headlines?: string[]
  subtitle?: string
  primaryCta?: string
  secondaryCta?: string
  secondaryCtaLink?: string
}

const props = withDefaults(defineProps<Props>(), {
  headlines: () => [
    'Curating the inaccessible',
    'Your bridge to Japan',
    'Unlocking hidden quality',
  ],
  subtitle: 'The most exceptional Japanese suppliers do not advertise in English. We are your key to the locked layer of the market.',
  primaryCta: 'Discuss your access challenge',
  secondaryCta: 'Read our story',
  secondaryCtaLink: '/about',
})

// ============================================
// REFS
// ============================================
const typedElement = ref<HTMLElement | null>(null)
let typedInstance: Typed | null = null

// ============================================
// LIFECYCLE
// ============================================
onMounted(() => {
  if (typedElement.value) {
    typedInstance = new Typed(typedElement.value, {
      strings: props.headlines,
      typeSpeed: 80,
      backSpeed: 50,
      backDelay: 2000,
      startDelay: 500,
      loop: true,
      showCursor: true,
      cursorChar: '|',
    })
  }
})

onUnmounted(() => {
  // Limpiar instancia para evitar memory leaks
  if (typedInstance) {
    typedInstance.destroy()
  }
})
</script>

<style scoped>
/*
  Estilos específicos del Hero
  Los estilos globales de .hero-bg están en assets/scss/partials/_hero.scss
*/
.typed-text {
  min-height: 1.2em;
  display: inline-block;
}

/* Cursor del efecto typewriter */
:deep(.typed-cursor) {
  opacity: 0.7;
  animation: blink 0.7s infinite;
}

@keyframes blink {
  0%, 100% { opacity: 1; }
  50% { opacity: 0; }
}
</style>
