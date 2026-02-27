<!--
  ============================================
  DEFAULT LAYOUT
  ============================================
  
  ARQUITECTURA:
  Este layout contiene:
  - TheNavbar (navegación fija)
  - <slot> (contenido de la página)
  - TheFooter (pie de página)
  
  DECISIÓN: El layout DEFAULT contiene la estructura
  común de todas las páginas públicas. Si tuvieras
  un panel de administración, crearías layouts/admin.vue
-->
<template>
  <div class="layout-wrapper min-h-screen flex flex-col">
    <!-- Navigation -->
    <TheNavbar />

    <!-- Main Content -->
    <main class="flex-grow pt-[73px]">
      <!-- pt-[73px] compensa la altura del navbar fijo -->
      <slot />
    </main>

    <!-- Footer -->
    <TheFooter />
  </div>
</template>

<script setup lang="ts">
// ============================================
// LAYOUT CONFIGURATION
// ============================================

// useHead en el layout aplica a todas las páginas que usen este layout
// Útil para configuraciones comunes que no van en nuxt.config.ts
useHead({
  // Configuración adicional del body
  bodyAttrs: {
    class: 'antialiased',
  },
})

// Inyectar configuración de runtime para componentes hijos
const config = useRuntimeConfig()

// Proveer datos globales a componentes hijos si es necesario
provide('siteConfig', {
  contactEmail: config.public.contactEmail,
  siteUrl: config.public.siteUrl,
})
</script>

<style scoped>
/*
  NOTA: Los estilos scoped solo aplican a este layout
  Los estilos globales están en assets/scss/main.scss
*/
.layout-wrapper {
  /* Fallback background en caso de que los estilos globales no carguen */
  background-color: #f8f6f2;
}
</style>
