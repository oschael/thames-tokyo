<!--
  ============================================
  SERVICES PREVIEW SECTION - Vista Previa de Servicios
  ============================================
  
  ARQUITECTURA:
  - Grid de cards de servicio
  - Usa sub-componentes ServiceCard
  - Enlace a página de servicios completa
-->
<template>
  <section class="py-20 px-6">
    <div class="max-w-7xl mx-auto">
      <!-- Section Header -->
      <SectionHeader
        title="How We Turn Risk Into Partnership"
        subtitle="We act as a cultural interface for your business, absorbing the friction and transforming complexity into opportunity."
      />

      <!-- Services Grid -->
      <div class="grid md:grid-cols-3 gap-8 mb-12">
        <ServiceCard
          v-for="(service, index) in services"
          :key="index"
          :title="service.title"
          :description="service.description"
          :icon="service.icon"
          :index="index"
        />
      </div>

      <!-- CTA -->
      <div class="text-center scroll-reveal" :class="{ 'revealed': isRevealed }">
        <NuxtLink 
          to="/services"
          class="inline-flex items-center bg-gray-900 text-white px-8 py-4 rounded-sm font-semibold hover:bg-gray-800 transition-colors group"
        >
          Explore our services
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
// ============================================
// TIPOS
// ============================================
interface Service {
  title: string
  description: string
  icon: 'check' | 'exchange' | 'lightning'
}

// ============================================
// DATOS
// ============================================
const services: Service[] = [
  {
    title: 'Curation & Vetting',
    description: 'Every supplier in our network undergoes rigorous evaluation for quality, reliability, and cultural alignment with your business values.',
    icon: 'check',
  },
  {
    title: 'Cultural Interface',
    description: 'We translate not just language, but business culture, expectations, and unspoken protocols that make or break partnerships.',
    icon: 'exchange',
  },
  {
    title: 'End-to-End Execution',
    description: 'From first handshake to final export, we remain involved to ensure every detail meets both cultural and commercial expectations.',
    icon: 'lightning',
  },
]

// ============================================
// SCROLL REVEAL
// ============================================
const isRevealed = ref(false)

onMounted(() => {
  setTimeout(() => {
    isRevealed.value = true
  }, 300)
})
</script>
