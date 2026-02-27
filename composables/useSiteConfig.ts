/**
 * ============================================
 * useSiteConfig - Composable para configuración del sitio
 * ============================================
 * 
 * ARQUITECTURA:
 * Centraliza el acceso a la configuración del sitio.
 * Útil para datos que se usan en múltiples componentes.
 */

export interface SiteConfig {
  name: string
  tagline: string
  contactEmail: string
  siteUrl: string
  founder: {
    name: string
    title: string
  }
  social: {
    linkedin?: string
    twitter?: string
    instagram?: string
  }
}

export function useSiteConfig() {
  const config = useRuntimeConfig()

  const siteConfig: SiteConfig = {
    name: 'Thames&Tokyo',
    tagline: 'Curating the inaccessible',
    contactEmail: config.public.contactEmail as string || 'rie@thamesandtokyo.com',
    siteUrl: config.public.siteUrl as string || 'https://thamesandtokyo.com',
    founder: {
      name: 'Rie Toda Flores',
      title: 'Founder & Managing Director',
    },
    social: {
      // Agregar redes sociales cuando estén disponibles
      linkedin: undefined,
      twitter: undefined,
      instagram: undefined,
    },
  }

  return {
    config: siteConfig,
    // Helpers
    getContactUrl: () => `mailto:${siteConfig.contactEmail}`,
    getFullUrl: (path: string) => `${siteConfig.siteUrl}${path}`,
  }
}
