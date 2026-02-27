<!--
  ============================================
  THE NAVBAR - Componente de Navegación Principal
  ============================================
  
  ARQUITECTURA:
  - Componente global usado en el layout default
  - Prefijo "The" indica singleton (solo una instancia)
  - Contiene lógica de menú móvil auto-contenida
  - Usa NuxtLink para navegación SPA optimizada
  
  MEJORAS VS HTML ORIGINAL:
  - NuxtLink en lugar de <a> para pre-fetching automático
  - Estado reactivo del menú móvil
  - Clase activa automática con route matching
  - Accesibilidad mejorada (aria-labels, roles)
-->
<template>
  <nav 
    class="fixed top-0 w-full bg-white/90 backdrop-blur-md z-50 border-b border-gray-200"
    role="navigation"
    aria-label="Main navigation"
  >
    <div class="max-w-7xl mx-auto px-6 py-4">
      <div class="flex justify-between items-center">
        <!-- Logo -->
        <NuxtLink 
          to="/" 
          class="font-display text-2xl font-semibold text-gray-900"
          aria-label="Thames&Tokyo - Home"
        >
          Thames&Tokyo
        </NuxtLink>

        <!-- Desktop Navigation -->
        <div class="hidden md:flex space-x-8">
          <NuxtLink 
            v-for="link in navigationLinks" 
            :key="link.to"
            :to="link.to"
            class="nav-link transition-colors"
            :class="isActive(link.to) ? 'text-gray-900 font-medium' : 'text-gray-600 hover:text-gray-900'"
            :aria-current="isActive(link.to) ? 'page' : undefined"
          >
            {{ link.label }}
          </NuxtLink>
        </div>

        <!-- Mobile Menu Button -->
        <button 
          class="md:hidden p-2 -mr-2"
          :aria-expanded="isMobileMenuOpen"
          aria-controls="mobile-menu"
          aria-label="Toggle mobile menu"
          @click="toggleMobileMenu"
        >
          <svg 
            class="w-6 h-6 transition-transform"
            :class="{ 'rotate-90': isMobileMenuOpen }"
            fill="none" 
            stroke="currentColor" 
            viewBox="0 0 24 24"
          >
            <path 
              v-if="!isMobileMenuOpen"
              stroke-linecap="round" 
              stroke-linejoin="round" 
              stroke-width="2" 
              d="M4 6h16M4 12h16M4 18h16"
            />
            <path 
              v-else
              stroke-linecap="round" 
              stroke-linejoin="round" 
              stroke-width="2" 
              d="M6 18L18 6M6 6l12 12"
            />
          </svg>
        </button>
      </div>

      <!-- Mobile Menu -->
      <Transition name="slide-down">
        <div 
          v-show="isMobileMenuOpen"
          id="mobile-menu"
          class="md:hidden bg-white border-t border-gray-200 py-4 mt-4"
        >
          <div class="space-y-4">
            <NuxtLink 
              v-for="link in navigationLinks" 
              :key="link.to"
              :to="link.to"
              class="block px-2 py-2 rounded-md transition-colors"
              :class="isActive(link.to) ? 'text-gray-900 font-medium bg-gray-50' : 'text-gray-600 hover:text-gray-900 hover:bg-gray-50'"
              @click="closeMobileMenu"
            >
              {{ link.label }}
            </NuxtLink>
          </div>
        </div>
      </Transition>
    </div>
  </nav>
</template>

<script setup lang="ts">
// ============================================
// TIPOS
// ============================================
interface NavigationLink {
  to: string
  label: string
}

// ============================================
// DATOS DE NAVEGACIÓN
// ============================================
// Centralizado para fácil mantenimiento
const navigationLinks: NavigationLink[] = [
  { to: '/', label: 'Home' },
  { to: '/about', label: 'About' },
  { to: '/services', label: 'Services' },
  { to: '/delicatessen', label: 'Delicatessen' },
  { to: '/contact', label: 'Contact' },
]

// ============================================
// ESTADO REACTIVO
// ============================================
const isMobileMenuOpen = ref(false)
const route = useRoute()

// ============================================
// MÉTODOS
// ============================================
const toggleMobileMenu = () => {
  isMobileMenuOpen.value = !isMobileMenuOpen.value
}

const closeMobileMenu = () => {
  isMobileMenuOpen.value = false
}

// Determina si un enlace está activo
const isActive = (path: string): boolean => {
  if (path === '/') {
    return route.path === '/'
  }
  return route.path.startsWith(path)
}

// ============================================
// WATCHERS
// ============================================
// Cerrar menú móvil al cambiar de ruta
watch(() => route.path, () => {
  closeMobileMenu()
})

// Cerrar menú móvil al hacer scroll
onMounted(() => {
  window.addEventListener('scroll', closeMobileMenu)
})

onUnmounted(() => {
  window.removeEventListener('scroll', closeMobileMenu)
})
</script>

<style scoped>
/* Transición del menú móvil */
.slide-down-enter-active,
.slide-down-leave-active {
  transition: all 0.3s ease;
}

.slide-down-enter-from,
.slide-down-leave-to {
  opacity: 0;
  transform: translateY(-10px);
}
</style>
