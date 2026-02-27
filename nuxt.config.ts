// https://nuxt.com/docs/api/configuration/nuxt-config
export default defineNuxtConfig({
  // ============================================
  // NUXT 3 CONFIGURATION - Thames & Tokyo
  // ============================================

  // Habilitar devtools para desarrollo
  devtools: { enabled: true },

  // Configuración de compatibilidad
  compatibilityDate: '2024-12-01',

  // ============================================
  // MÓDULOS
  // ============================================
  modules: [
    '@nuxtjs/tailwindcss',
    '@nuxtjs/google-fonts',
  ],

  // ============================================
  // GOOGLE FONTS
  // ============================================
  // Movido de <link> en el <head> a un módulo para mejor performance
  googleFonts: {
    families: {
      Inter: [300, 400, 500, 600, 700],
      'Crimson Text': {
        wght: [400, 600],
        ital: [400],
      },
    },
    display: 'swap', // Evita FOUT (Flash of Unstyled Text)
    preconnect: true,
    prefetch: true,
  },

  // ============================================
  // CSS GLOBAL
  // ============================================
  // Los estilos globales se cargan aquí
  css: [
    '~/assets/scss/main.scss',
    '@splidejs/splide/css', // Estilos de Splide carousel
  ],

  // ============================================
  // VITE CONFIGURATION
  // ============================================
  vite: {
    css: {
      preprocessorOptions: {
        scss: {
          // Permite importar variables globales en todos los componentes
          additionalData: `@use "~/assets/scss/vars/_variables" as *;`,
        },
      },
    },
  },

  // ============================================
  // APP CONFIGURATION
  // ============================================
  app: {
    // Meta tags globales y configuración de head
    head: {
      htmlAttrs: {
        lang: 'en',
      },
      charset: 'utf-8',
      viewport: 'width=device-width, initial-scale=1',
      title: 'Thames&Tokyo - Curating the inaccessible',
      meta: [
        { name: 'description', content: 'Your bridge to Japan\'s hidden market. We unlock access to exclusive Japanese suppliers through cultural expertise and trusted relationships.' },
        { name: 'format-detection', content: 'telephone=no' },
        // Open Graph
        { property: 'og:type', content: 'website' },
        { property: 'og:site_name', content: 'Thames&Tokyo' },
        { property: 'og:title', content: 'Thames&Tokyo - Curating the inaccessible' },
        { property: 'og:description', content: 'Your bridge to Japan\'s hidden market. We unlock access to exclusive Japanese suppliers.' },
        { property: 'og:image', content: '/og-image.jpg' },
        // Twitter Card
        { name: 'twitter:card', content: 'summary_large_image' },
        { name: 'twitter:title', content: 'Thames&Tokyo - Curating the inaccessible' },
        { name: 'twitter:description', content: 'Your bridge to Japan\'s hidden market.' },
      ],
      link: [
        { rel: 'icon', type: 'image/x-icon', href: '/favicon.ico' },
        { rel: 'apple-touch-icon', sizes: '180x180', href: '/apple-touch-icon.png' },
      ],
    },
    // Transiciones de página
    pageTransition: { name: 'page', mode: 'out-in' },
    layoutTransition: { name: 'layout', mode: 'out-in' },
  },

  // ============================================
  // RUNTIME CONFIG
  // ============================================
  // Variables de entorno accesibles en el cliente
  runtimeConfig: {
    // Variables privadas (solo servidor)
    apiSecret: '',
    // Variables públicas (cliente y servidor)
    public: {
      siteUrl: process.env.NUXT_PUBLIC_SITE_URL || 'https://thamesandtokyo.com',
      contactEmail: 'rie@thamesandtokyo.com',
    },
  },

  // ============================================
  // TYPESCRIPT
  // ============================================
  typescript: {
    strict: true,
    typeCheck: true,
  },

  // ============================================
  // COMPONENTES AUTO-IMPORT
  // ============================================
  // Nuxt auto-importa componentes por defecto
  // Esta configuración extiende el comportamiento
  components: [
    {
      path: '~/components',
      pathPrefix: false, // No agregar prefijo de carpeta al nombre del componente
    },
  ],

  // ============================================
  // NITRO (SERVER ENGINE)
  // ============================================
  nitro: {
    // Pre-renderizar páginas estáticas
    prerender: {
      routes: ['/'],
      crawlLinks: true,
      failOnError: false, // No fallar por rutas que aún no existen (ej: /terms, /privacy)
    },
    // Compresión
    compressPublicAssets: true,
  },

  // ============================================
  // EXPERIMENTAL FEATURES
  // ============================================
  experimental: {
    // Mejora el payload de hidratación
    payloadExtraction: true,
    // Mejora el tree-shaking de componentes
    componentIslands: true,
  },
})
