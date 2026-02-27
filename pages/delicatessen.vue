<!--
  ============================================
  DELICATESSEN PAGE - Página de Productos
  ============================================
  
  Placeholder para la página Delicatessen.
  Implementar catálogo completo según necesidad.
-->
<template>
  <div class="delicatessen-page">
    <!-- Hero -->
    <section class="hero-secondary py-20 px-6">
      <div class="max-w-4xl mx-auto text-center">
        <h1 class="font-display text-4xl md:text-5xl font-semibold mb-6">
          Delicatessen
        </h1>
        <p class="text-xl opacity-90 max-w-2xl mx-auto">
          A curated selection of exceptional Japanese products.
        </p>
      </div>
    </section>

    <!-- Products -->
    <HomeDelicatessenTeaserSection />

    <!-- Contact CTA -->
    <HomeContactCtaSection 
      title="Interested in our products?"
      description="Contact us for availability and wholesale inquiries."
    />
  </div>
</template>

<script setup lang="ts">
useHead({
  title: 'Delicatessen - Thames&Tokyo',
  meta: [
    { name: 'description', content: 'Discover our curated selection of exceptional Japanese products from exclusive suppliers.' },
  ],
})
</script>

<style scoped>
.hero-secondary {
  background-color: #1f2937;
  color: white;
}
</style>
