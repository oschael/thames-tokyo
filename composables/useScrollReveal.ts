/**
 * ============================================
 * useScrollReveal - Composable para animaciones de scroll
 * ============================================
 * 
 * ARQUITECTURA:
 * Este composable encapsula la lógica de Intersection Observer
 * para revelar elementos al hacer scroll. Reemplaza el código
 * vanilla JS del archivo main.js original.
 * 
 * USO:
 * ```vue
 * <template>
 *   <div ref="elementRef" :class="{ 'revealed': isRevealed }">
 *     Content
 *   </div>
 * </template>
 * 
 * <script setup>
 * const { elementRef, isRevealed } = useScrollReveal()
 * </script>
 * ```
 */

export interface ScrollRevealOptions {
  threshold?: number
  rootMargin?: string
  once?: boolean
}

export function useScrollReveal(options: ScrollRevealOptions = {}) {
  const {
    threshold = 0.1,
    rootMargin = '0px 0px -50px 0px',
    once = true,
  } = options

  const elementRef = ref<HTMLElement | null>(null)
  const isRevealed = ref(false)

  let observer: IntersectionObserver | null = null

  const observe = () => {
    if (!elementRef.value) return

    observer = new IntersectionObserver(
      (entries) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting) {
            isRevealed.value = true
            
            // Si once es true, dejar de observar después de revelar
            if (once && observer) {
              observer.unobserve(entry.target)
            }
          } else if (!once) {
            isRevealed.value = false
          }
        })
      },
      {
        threshold,
        rootMargin,
      }
    )

    observer.observe(elementRef.value)
  }

  const unobserve = () => {
    if (observer && elementRef.value) {
      observer.unobserve(elementRef.value)
      observer.disconnect()
      observer = null
    }
  }

  onMounted(() => {
    observe()
  })

  onUnmounted(() => {
    unobserve()
  })

  return {
    elementRef,
    isRevealed,
    observe,
    unobserve,
  }
}

/**
 * Versión para múltiples elementos
 * Útil para listas de cards o grids
 */
export function useScrollRevealMultiple(
  count: number,
  options: ScrollRevealOptions & { staggerDelay?: number } = {}
) {
  const { staggerDelay = 100, ...observerOptions } = options
  
  const elements = ref<(HTMLElement | null)[]>(Array(count).fill(null))
  const revealed = ref<boolean[]>(Array(count).fill(false))

  onMounted(() => {
    elements.value.forEach((el, index) => {
      if (!el) return

      const observer = new IntersectionObserver(
        (entries) => {
          entries.forEach((entry) => {
            if (entry.isIntersecting) {
              // Aplicar delay escalonado
              setTimeout(() => {
                revealed.value[index] = true
              }, index * staggerDelay)
              
              observer.unobserve(entry.target)
            }
          })
        },
        {
          threshold: observerOptions.threshold || 0.1,
          rootMargin: observerOptions.rootMargin || '0px 0px -50px 0px',
        }
      )

      observer.observe(el)
    })
  })

  return {
    elements,
    revealed,
    setElement: (index: number, el: HTMLElement | null) => {
      elements.value[index] = el
    },
  }
}
