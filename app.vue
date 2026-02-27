<!--
  ============================================
  APP.VUE - Root Component
  ============================================
  
  ARQUITECTURA:
  - Este es el componente raíz de la aplicación Nuxt 3
  - Contiene <NuxtLayout> que renderiza el layout activo
  - <NuxtPage> se renderiza dentro del layout
  
  DECISIÓN: Mantener app.vue limpio y delegar
  la estructura al layout para mejor separación de responsabilidades.
-->
<template>
  <NuxtLayout>
    <NuxtPage />
  </NuxtLayout>
</template>

<script setup lang="ts">
// ============================================
// SCRIPT SETUP - Lógica del componente raíz
// ============================================

// useHead aquí aplica a TODAS las páginas
// Lo usamos solo para meta tags globales que no cambian
// Los meta tags específicos van en cada página o layout
</script>

<style>
/* 
  ============================================
  TRANSICIONES DE PÁGINA
  ============================================
  Definidas aquí para aplicar a todas las páginas.
  Configuradas en nuxt.config.ts con pageTransition.
*/
.page-enter-active,
.page-leave-active {
  transition: opacity 0.3s ease, transform 0.3s ease;
}

.page-enter-from {
  opacity: 0;
  transform: translateY(10px);
}

.page-leave-to {
  opacity: 0;
  transform: translateY(-10px);
}

/* Layout transitions */
.layout-enter-active,
.layout-leave-active {
  transition: opacity 0.2s ease;
}

.layout-enter-from,
.layout-leave-to {
  opacity: 0;
}
</style>
