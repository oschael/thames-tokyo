<!--
  ============================================
  TRUST CHALLENGE SECTION - ¿Por qué el acceso es difícil?
  ============================================
  
  ARQUITECTURA:
  - Sección con cards expandibles
  - Usa composable para animaciones de scroll
  - Cards como sub-componentes para reutilización
  
  MEJORA vs HTML original:
  - Lógica de expansión manejada con Vue reactivity
  - Accesibilidad mejorada con aria-expanded
-->
<template>
  <section class="py-20 px-6">
    <div class="max-w-7xl mx-auto">
      <!-- Section Header -->
      <SectionHeader
        title="Why Access Is the Real Challenge"
        subtitle="True quality in Japan is rarely loud. The best suppliers do not compete for attention; they wait for the right introduction."
      />
      
      <!-- Trust Cards Grid -->
      <div class="grid md:grid-cols-3 gap-8">
        <TrustCard
          v-for="(card, index) in trustChallenges"
          :key="index"
          :title="card.title"
          :description="card.description"
          :details="card.details"
          :icon="card.icon"
          :is-expanded="expandedCard === index"
          @toggle="toggleCard(index)"
        />
      </div>
    </div>
  </section>
</template>

<script setup lang="ts">
// ============================================
// TIPOS
// ============================================
interface TrustChallenge {
  title: string
  description: string
  details: string
  icon: 'language' | 'visibility' | 'warning'
}

// ============================================
// DATOS
// ============================================
const trustChallenges: TrustChallenge[] = [
  {
    title: 'Language & Protocol Barriers',
    description: 'The most exclusive suppliers operate in Japanese only, with business protocols that require cultural fluency to navigate successfully.',
    details: 'Without proper cultural context, even fluent Japanese speakers can misread the subtle signals that indicate trustworthiness and long-term partnership potential.',
    icon: 'language',
  },
  {
    title: 'The Invisible Quality Layer',
    description: 'What appears premium to Western eyes often represents the accessible surface level, not the true artisanal quality reserved for insiders.',
    details: 'The finest producers reserve their best products for established relationships, creating a hidden market layer that never appears in export catalogs or trade shows.',
    icon: 'visibility',
  },
  {
    title: 'The Cost of Cultural Misreading',
    description: 'A single cultural misstep can permanently close doors to the very suppliers you need most, making first impressions irreversible.',
    details: 'Japanese business culture values long-term relationships over short-term gains. Without proper introduction and cultural understanding, even well-funded approaches can fail permanently.',
    icon: 'warning',
  },
]

// ============================================
// ESTADO
// ============================================
const expandedCard = ref<number | null>(null)

// ============================================
// MÉTODOS
// ============================================
const toggleCard = (index: number) => {
  if (expandedCard.value === index) {
    expandedCard.value = null
  } else {
    expandedCard.value = index
  }
}
</script>
