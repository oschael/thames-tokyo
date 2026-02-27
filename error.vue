<!--
  ============================================
  ERROR PAGE - Página de Error Global
  ============================================
  
  ARQUITECTURA:
  - Maneja errores 404, 500, etc.
  - Se muestra automáticamente cuando hay un error
  - Proporciona navegación de vuelta al inicio
-->
<template>
  <div class="min-h-screen flex items-center justify-center bg-secondary px-6">
    <div class="text-center max-w-md">
      <!-- Error Code -->
      <h1 class="font-display text-8xl font-bold text-gray-900 mb-4">
        {{ error?.statusCode || '404' }}
      </h1>
      
      <!-- Error Message -->
      <h2 class="font-display text-2xl font-semibold text-gray-700 mb-4">
        {{ errorTitle }}
      </h2>
      
      <p class="text-gray-600 mb-8">
        {{ errorMessage }}
      </p>
      
      <!-- Actions -->
      <div class="flex flex-col sm:flex-row gap-4 justify-center">
        <NuxtLink 
          to="/"
          class="bg-gray-900 text-white px-8 py-4 rounded-sm font-semibold hover:bg-gray-800 transition-colors"
        >
          Return to Home
        </NuxtLink>
        <button 
          class="border-2 border-gray-900 text-gray-900 px-8 py-4 rounded-sm font-semibold hover:bg-gray-900 hover:text-white transition-colors"
          @click="handleError"
        >
          Try Again
        </button>
      </div>
    </div>
  </div>
</template>

<script setup lang="ts">
import type { NuxtError } from '#app'

// ============================================
// PROPS
// ============================================
const props = defineProps<{
  error: NuxtError
}>()

// ============================================
// COMPUTED
// ============================================
const errorTitle = computed(() => {
  if (props.error?.statusCode === 404) {
    return 'Page Not Found'
  }
  if (props.error?.statusCode === 500) {
    return 'Server Error'
  }
  return 'Something Went Wrong'
})

const errorMessage = computed(() => {
  if (props.error?.statusCode === 404) {
    return 'The page you\'re looking for doesn\'t exist or has been moved.'
  }
  if (props.error?.statusCode === 500) {
    return 'We\'re experiencing technical difficulties. Please try again later.'
  }
  return props.error?.message || 'An unexpected error occurred.'
})

// ============================================
// METHODS
// ============================================
const handleError = () => {
  clearError({ redirect: '/' })
}

// ============================================
// SEO
// ============================================
useHead({
  title: `${props.error?.statusCode || 'Error'} - Thames&Tokyo`,
})
</script>
