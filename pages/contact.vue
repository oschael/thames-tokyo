<!--
  ============================================
  CONTACT PAGE - Página de Contacto
  ============================================
  
  ARQUITECTURA:
  - Página con formulario de contacto
  - Validación del lado del cliente
  - Preparada para integración con API/backend
-->
<template>
  <div class="contact-page">
    <!-- Hero -->
    <section class="hero-secondary py-20 px-6">
      <div class="max-w-4xl mx-auto text-center">
        <h1 class="font-display text-4xl md:text-5xl font-semibold mb-6">
          Start a Conversation
        </h1>
        <p class="text-xl opacity-90 max-w-2xl mx-auto">
          Every successful partnership begins with understanding your unique access challenge.
        </p>
      </div>
    </section>

    <!-- Contact Form Section -->
    <section class="py-20 px-6">
      <div class="max-w-4xl mx-auto">
        <div class="grid md:grid-cols-2 gap-16">
          <!-- Form -->
          <div>
            <h2 class="font-display text-2xl font-semibold text-gray-900 mb-8">
              Send us a message
            </h2>

            <form @submit.prevent="handleSubmit" class="space-y-6">
              <!-- Name -->
              <div class="form-group">
                <label for="name" class="form-label">Full Name *</label>
                <input id="name" v-model="form.name" type="text" class="form-input" :class="{ 'error': errors.name }"
                  placeholder="Your full name" required>
                <p v-if="errors.name" class="form-error">{{ errors.name }}</p>
              </div>

              <!-- Email -->
              <div class="form-group">
                <label for="email" class="form-label">Email Address *</label>
                <input id="email" v-model="form.email" type="email" class="form-input"
                  :class="{ 'error': errors.email }" placeholder="your@email.com" required>
                <p v-if="errors.email" class="form-error">{{ errors.email }}</p>
              </div>

              <!-- Company -->
              <div class="form-group">
                <label for="company" class="form-label">Company</label>
                <input id="company" v-model="form.company" type="text" class="form-input"
                  placeholder="Your company name">
              </div>

              <!-- Message -->
              <div class="form-group">
                <label for="message" class="form-label">Message *</label>
                <textarea id="message" v-model="form.message" class="form-input min-h-[150px] resize-y"
                  :class="{ 'error': errors.message }" placeholder="Tell us about your access challenge..." required />
                <p v-if="errors.message" class="form-error">{{ errors.message }}</p>
              </div>

              <!-- Submit -->
              <button type="submit" class="submit-btn" :disabled="isSubmitting">
                <span v-if="!isSubmitting">Send Message</span>
                <span v-else class="loading-text">
                  <span class="loading-spinner" />
                  Sending...
                </span>
              </button>
            </form>

            <!-- Success Message -->
            <div v-if="isSuccess" class="mt-8 p-6 bg-green-50 border border-green-200 rounded-lg">
              <h3 class="text-green-800 font-semibold mb-2">Message Sent!</h3>
              <p class="text-green-700">
                Thank you for reaching out. Rie will personally review your inquiry within 24 hours.
              </p>
            </div>
          </div>

          <!-- Contact Info -->
          <div>
            <h2 class="font-display text-2xl font-semibold text-gray-900 mb-8">
              Or reach us directly
            </h2>

            <div class="space-y-8">
              <!-- Email -->
              <div class="contact-info-card">
                <h3 class="font-display text-lg font-semibold mb-2">Email</h3>
                <a :href="`mailto:${contactEmail}`" class="text-accent hover:underline">
                  {{ contactEmail }}
                </a>
                <p class="text-gray-500 text-sm mt-2">
                  Rie personally reviews every inquiry
                </p>
              </div>

              <!-- Response Time -->
              <div class="contact-info-card">
                <h3 class="font-display text-lg font-semibold mb-2">Response Time</h3>
                <p class="text-gray-600">
                  We typically respond within 24 hours during business days.
                </p>
              </div>

              <!-- Confidentiality -->
              <div class="contact-info-card">
                <h3 class="font-display text-lg font-semibold mb-2">Confidentiality</h3>
                <p class="text-gray-600">
                  All inquiries are treated with strict confidentiality. We never share your information with third
                  parties.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Contact CTA -->
    <ContactCtaSection title="Ready to discuss your needs?"
      description="We're here to help you navigate Japan's hidden market." />
  </div>
</template>

<script setup lang="ts">
import type { ContactFormData, ContactFormErrors } from '~/types'

// ============================================
// SEO
// ============================================
useHead({
  title: 'Contact - Thames&Tokyo',
  meta: [
    { name: 'description', content: 'Get in touch with Thames&Tokyo. Start a confidential conversation about your Japan sourcing needs.' },
  ],
})

// ============================================
// CONFIG
// ============================================
const { config } = useSiteConfig()
const contactEmail = config.contactEmail

// ============================================
// STATE
// ============================================
const form = reactive<ContactFormData>({
  name: '',
  email: '',
  company: '',
  message: '',
})

const errors = reactive<ContactFormErrors>({})
const isSubmitting = ref(false)
const isSuccess = ref(false)

// ============================================
// VALIDATION
// ============================================
const validateForm = (): boolean => {
  // Reset errors
  errors.name = undefined
  errors.email = undefined
  errors.message = undefined

  let isValid = true

  if (!form.name.trim()) {
    errors.name = 'Name is required'
    isValid = false
  }

  if (!form.email.trim()) {
    errors.email = 'Email is required'
    isValid = false
  } else if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(form.email)) {
    errors.email = 'Please enter a valid email address'
    isValid = false
  }

  if (!form.message.trim()) {
    errors.message = 'Message is required'
    isValid = false
  } else if (form.message.length < 10) {
    errors.message = 'Message must be at least 10 characters'
    isValid = false
  }

  return isValid
}

// ============================================
// SUBMIT HANDLER
// ============================================
const handleSubmit = async () => {
  if (!validateForm()) return

  isSubmitting.value = true
  isSuccess.value = false

  try {
    // TODO: Integrar con API/backend
    // Por ahora, simular envío
    await new Promise(resolve => setTimeout(resolve, 1500))

    // Éxito
    isSuccess.value = true

    // Reset form
    form.name = ''
    form.email = ''
    form.company = ''
    form.message = ''
  } catch (error) {
    console.error('Error submitting form:', error)
    // TODO: Mostrar mensaje de error al usuario
  } finally {
    isSubmitting.value = false
  }
}
</script>

<style scoped>
.hero-secondary {
  background-color: #1f2937;
  color: white;
}

.contact-info-card {
  background-color: white;
  padding: 1.5rem;
  border-radius: 0.5rem;
  box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
}

.text-accent {
  color: #B85450;
}
</style>
