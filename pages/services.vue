<!--
  ============================================
  SERVICES PAGE - Página de Servicios
  ============================================
  
  Placeholder para la página Services.
  Implementar contenido completo según necesidad.
-->
<template>
  <div class="services-page">
    <!-- Hero -->
    <section class="hero-secondary py-20 px-6">
      <div class="max-w-4xl mx-auto text-center">
        <h1 class="font-display text-4xl md:text-5xl font-semibold mb-6">
          Our Services
        </h1>
        <p class="text-xl opacity-90 max-w-2xl mx-auto">
          How we turn your access challenges into successful partnerships.
        </p>
      </div>
    </section>

    <!-- Services Section -->
    <HomeServicesPreviewSection />

    <!-- Contact CTA -->
    <HomeContactCtaSection />
  </div>
</template>

<script setup lang="ts">
useHead({
  title: 'Services - Thames&Tokyo',
  meta: [
    { name: 'description', content: 'Explore our services: curation, cultural interface, and end-to-end execution for accessing Japan\'s exclusive suppliers.' },
  ],
})
</script>

<style scoped>
.hero-secondary {
  background-color: #1f2937;
  color: white;
}
</style>
