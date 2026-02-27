/**
 * ============================================
 * useTypewriter - Composable para efecto de escritura
 * ============================================
 * 
 * ARQUITECTURA:
 * Wrapper de Typed.js como composable Vue.
 * Maneja inicialización y cleanup automáticamente.
 * 
 * USO:
 * ```vue
 * <template>
 *   <span ref="typedRef"></span>
 * </template>
 * 
 * <script setup>
 * const { typedRef } = useTypewriter({
 *   strings: ['Hello', 'World'],
 *   typeSpeed: 50
 * })
 * </script>
 * ```
 */

import Typed from 'typed.js'

export interface TypewriterOptions {
  strings: string[]
  typeSpeed?: number
  backSpeed?: number
  backDelay?: number
  startDelay?: number
  loop?: boolean
  showCursor?: boolean
  cursorChar?: string
  onComplete?: () => void
  onStringTyped?: (arrayPos: number) => void
}

export function useTypewriter(options: TypewriterOptions) {
  const typedRef = ref<HTMLElement | null>(null)
  let typedInstance: Typed | null = null

  const defaultOptions: Partial<TypewriterOptions> = {
    typeSpeed: 80,
    backSpeed: 50,
    backDelay: 2000,
    startDelay: 500,
    loop: true,
    showCursor: true,
    cursorChar: '|',
  }

  const mergedOptions = { ...defaultOptions, ...options }

  const init = () => {
    if (!typedRef.value) return

    typedInstance = new Typed(typedRef.value, {
      strings: mergedOptions.strings,
      typeSpeed: mergedOptions.typeSpeed,
      backSpeed: mergedOptions.backSpeed,
      backDelay: mergedOptions.backDelay,
      startDelay: mergedOptions.startDelay,
      loop: mergedOptions.loop,
      showCursor: mergedOptions.showCursor,
      cursorChar: mergedOptions.cursorChar,
      onComplete: mergedOptions.onComplete,
      onStringTyped: mergedOptions.onStringTyped,
    })
  }

  const destroy = () => {
    if (typedInstance) {
      typedInstance.destroy()
      typedInstance = null
    }
  }

  const reset = () => {
    destroy()
    init()
  }

  onMounted(() => {
    init()
  })

  onUnmounted(() => {
    destroy()
  })

  return {
    typedRef,
    reset,
    destroy,
  }
}
