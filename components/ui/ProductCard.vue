<!--
  ============================================
  PRODUCT CARD - Card de Producto
  ============================================
  
  ARQUITECTURA:
  - Componente reutilizable para productos
  - Usado en carrusel y grids
  - Lazy loading de imágenes
-->
<template>
  <div class="product-card bg-white rounded-lg shadow-lg overflow-hidden">
    <!-- Image -->
    <img 
      :src="image" 
      :alt="name"
      class="w-full h-48 object-cover"
      loading="lazy"
    >
    
    <!-- Content -->
    <div class="p-6">
      <h3 class="font-display text-xl font-semibold mb-2">
        {{ name }}
      </h3>
      
      <p class="text-gray-600 text-sm mb-4">
        {{ description }}
      </p>
      
      <div class="flex justify-between items-center">
        <span class="text-gray-500 text-sm">
          {{ origin }}
        </span>
        <span class="text-gray-900 font-semibold">
          {{ price }}
        </span>
      </div>
    </div>
  </div>
</template>

<script setup lang="ts">
// ============================================
// PROPS
// ============================================
interface Props {
  name: string
  description: string
  origin: string
  price: string
  image: string
}

defineProps<Props>()
</script>

<style scoped>
.product-card {
  transition: transform 0.3s ease;
}

.product-card:hover {
  transform: translateY(-4px);
}
</style>
