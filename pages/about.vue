<!--
  ============================================
  ABOUT PAGE - Página Acerca de
  ============================================
  
  Placeholder para la página About.
  Implementar contenido completo según necesidad.
-->
<template>
  <div class="about-page">
    <!-- Hero -->
    <section class="hero-secondary py-20 px-6">
      <div class="max-w-4xl mx-auto text-center">
        <h1 class="font-display text-4xl md:text-5xl font-semibold mb-6">
          Our Story
        </h1>
        <p class="text-xl opacity-90 max-w-2xl mx-auto">
          Built on trust, powered by cultural understanding.
        </p>
      </div>
    </section>

    <!-- Content placeholder -->
    <section class="py-20 px-6">
      <div class="max-w-4xl mx-auto prose">
        <p class="text-xl text-gray-600">
          Contenido de la página About próximamente...
        </p>
      </div>
    </section>

    <!-- Contact CTA -->
    <HomeContactCtaSection />
  </div>
</template>

<script setup lang="ts">
useHead({
  title: 'About - Thames&Tokyo',
  meta: [
    { name: 'description', content: 'Learn about Thames&Tokyo and our mission to bridge Western businesses with Japan\'s hidden market.' },
  ],
})
</script>

<style scoped>
.hero-secondary {
  background-color: #1f2937;
  color: white;
}
</style>
