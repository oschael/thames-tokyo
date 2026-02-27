/**
 * ============================================
 * TYPES - Definiciones de TypeScript
 * ============================================
 * Tipos compartidos en toda la aplicación.
 * Nuxt auto-importa estos tipos.
 */

// ============================================
// NAVIGATION
// ============================================
export interface NavigationLink {
  to: string
  label: string
  external?: boolean
}

// ============================================
// PRODUCTS
// ============================================
export interface Product {
  id: string
  name: string
  description: string
  origin: string
  price: string
  image: string
  category?: string
  available?: boolean
}

// ============================================
// SERVICES
// ============================================
export interface Service {
  id: string
  title: string
  description: string
  details?: string
  icon: string
}

// ============================================
// TESTIMONIALS
// ============================================
export interface Testimonial {
  id: string
  quote: string
  author: string
  company?: string
  role?: string
  image?: string
}

// ============================================
// CONTACT FORM
// ============================================
export interface ContactFormData {
  name: string
  email: string
  company?: string
  message: string
  inquiryType?: 'general' | 'partnership' | 'supplier' | 'other'
}

export interface ContactFormErrors {
  name?: string
  email?: string
  company?: string
  message?: string
}

// ============================================
// METRICS
// ============================================
export interface Metric {
  value: string | number
  label: string
  suffix?: string
}

// ============================================
// TRUST CHALLENGES
// ============================================
export interface TrustChallenge {
  title: string
  description: string
  details: string
  icon: 'language' | 'visibility' | 'warning'
}

// ============================================
// API RESPONSES
// ============================================
export interface ApiResponse<T> {
  success: boolean
  data?: T
  error?: string
  message?: string
}
