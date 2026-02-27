<!--
  ============================================
  THE FOOTER - Componente de Pie de Página
  ============================================
  
  ARQUITECTURA:
  - Componente singleton usado en layout default
  - Contiene información de copyright y branding
  - Puede expandirse con enlaces adicionales
  
  MEJORAS:
  - Año dinámico con computed
  - Datos de configuración centralizados
-->
<template>
  <footer class="py-8 px-6 bg-white border-t border-gray-200">
    <div class="max-w-7xl mx-auto text-center">
      <!-- Logo -->
      <NuxtLink 
        to="/"
        class="font-display text-xl font-semibold text-gray-900 mb-4 inline-block hover:opacity-80 transition-opacity"
      >
        Thames&Tokyo
      </NuxtLink>

      <!-- Copyright -->
      <p class="text-gray-600 text-sm">
        © {{ currentYear }} Thames&Tokyo. Curating the inaccessible.
      </p>

      <!-- Optional: Legal Links -->
      <div class="mt-4 flex justify-center space-x-6 text-sm text-gray-500">
        <NuxtLink 
          to="/privacy" 
          class="hover:text-gray-900 transition-colors"
        >
          Privacy Policy
        </NuxtLink>
        <NuxtLink 
          to="/terms" 
          class="hover:text-gray-900 transition-colors"
        >
          Terms of Service
        </NuxtLink>
      </div>
    </div>
  </footer>
</template>

<script setup lang="ts">
// ============================================
// COMPUTED PROPERTIES
// ============================================
// Año dinámico para el copyright
const currentYear = computed(() => new Date().getFullYear())
</script>
