<!--
  ============================================
  CONTACT CTA SECTION - Call to Action Final
  ============================================
  
  ARQUITECTURA:
  - Sección de llamada a la acción
  - Fondo oscuro para contraste
  - Dos opciones de contacto
-->
<template>
  <section class="py-20 px-6 bg-gray-900 text-white">
    <div class="max-w-4xl mx-auto text-center">
      <h2 class="font-display text-4xl md:text-5xl font-semibold mb-6">
        {{ title }}
      </h2>
      
      <p class="text-xl mb-8 opacity-90">
        {{ description }}
      </p>
      
      <div class="flex flex-col sm:flex-row gap-4 justify-center">
        <NuxtLink 
          to="/contact"
          class="bg-white text-gray-900 px-8 py-4 rounded-sm font-semibold hover:bg-gray-100 transition-colors"
        >
          {{ primaryCta }}
        </NuxtLink>
        <a 
          :href="`mailto:${contactEmail}`"
          class="border-2 border-white text-white px-8 py-4 rounded-sm font-semibold hover:bg-white hover:text-gray-900 transition-colors"
        >
          {{ secondaryCta }}
        </a>
      </div>
      
      <p class="text-sm opacity-70 mt-6">
        {{ footnote }}
      </p>
    </div>
  </section>
</template>

<script setup lang="ts">
// ============================================
// PROPS
// ============================================
interface Props {
  title?: string
  description?: string
  primaryCta?: string
  secondaryCta?: string
  footnote?: string
}

withDefaults(defineProps<Props>(), {
  title: 'Start a Confidential Conversation',
  description: 'Every successful partnership begins with understanding your unique access challenge. Let\'s discuss how we can unlock Japan\'s hidden market for your business.',
  primaryCta: 'Discuss your access challenge',
  secondaryCta: 'Email Rie directly',
  footnote: 'Rie personally reviews every inquiry within 24 hours',
})

// ============================================
// RUNTIME CONFIG
// ============================================
const config = useRuntimeConfig()
const contactEmail = config.public.contactEmail || 'rie@thamesandtokyo.com'
</script>
