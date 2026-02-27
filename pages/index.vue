<!--
  ============================================
  INDEX PAGE - Página Principal (Home)
  ============================================
  
  ARQUITECTURA:
  - Esta página compone todas las secciones del home
  - Cada sección es un componente independiente
  - useHead() define meta tags específicos de esta página
  
  DECISIÓN: Separar cada sección en componentes porque:
  1. Facilita el mantenimiento individual
  2. Permite reutilización (ej: ContactCtaSection en otras páginas)
  3. Mejora la legibilidad del código
  4. Facilita testing unitario
  
  MEJORAS vs HTML original:
  - Meta tags específicos por página
  - Componentes lazy-loadables
  - Código más mantenible
-->
<template>
  <div class="home-page">
    <!-- Hero Section -->
    <!-- pt-0 para compensar el padding del layout ya que el hero es full-screen -->
    <div class="-mt-[73px]">
      <HomeHeroSection />
    </div>

    <!-- Trust Challenge Section -->
    <HomeTrustChallengeSection />

    <!-- Founder Section -->
    <HomeFounderSection />

    <!-- Services Preview Section -->
    <HomeServicesPreviewSection />

    <!-- Delicatessen Teaser Section -->
    <HomeDelicatessenTeaserSection />

    <!-- Access Stories Section -->
    <HomeAccessStoriesSection />

    <!-- Contact CTA Section -->
    <HomeContactCtaSection />
  </div>
</template>

<script setup lang="ts">
// ============================================
// SEO & META TAGS
// ============================================
// useHead() aquí sobrescribe/extiende los meta tags del layout
// Esto es específico para la página home

useHead({
  title: 'Thames&Tokyo - Curating the inaccessible',
  meta: [
    { 
      name: 'description', 
      content: 'Your bridge to Japan\'s hidden market. We unlock access to exclusive Japanese suppliers through cultural expertise and trusted relationships built over 15+ years.' 
    },
    // Open Graph específico para Home
    { property: 'og:title', content: 'Thames&Tokyo - Curating the inaccessible' },
    { property: 'og:description', content: 'Your bridge to Japan\'s hidden market. Access exclusive Japanese suppliers.' },
    { property: 'og:url', content: 'https://thamesandtokyo.com/' },
    // Twitter Cards
    { name: 'twitter:title', content: 'Thames&Tokyo - Curating the inaccessible' },
    { name: 'twitter:description', content: 'Your bridge to Japan\'s hidden market.' },
  ],
})

// ============================================
// SEO - STRUCTURED DATA (Schema.org)
// ============================================
// Agregar datos estructurados para mejor SEO
useHead({
  script: [
    {
      type: 'application/ld+json',
      children: JSON.stringify({
        '@context': 'https://schema.org',
        '@type': 'Organization',
        name: 'Thames&Tokyo',
        description: 'Curating the inaccessible. Your bridge to Japan\'s hidden market.',
        url: 'https://thamesandtokyo.com',
        logo: 'https://thamesandtokyo.com/logo.png',
        founder: {
          '@type': 'Person',
          name: 'Rie Toda Flores',
        },
        sameAs: [
          // Agregar redes sociales cuando estén disponibles
        ],
        contactPoint: {
          '@type': 'ContactPoint',
          email: 'rie@thamesandtokyo.com',
          contactType: 'customer service',
        },
      }),
    },
  ],
})
</script>

<style scoped>
/*
  Estilos específicos de la página Home.
  Los estilos de componentes van en cada componente.
  Los estilos globales van en assets/scss/
*/
.home-page {
  /* Asegurar que el contenido fluya correctamente */
  overflow-x: hidden;
}
</style>
