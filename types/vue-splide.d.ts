declare module '@splidejs/vue-splide' {
  import type { DefineComponent } from 'vue'

  export const Splide: DefineComponent<Record<string, unknown>, Record<string, unknown>, unknown>
  export const SplideSlide: DefineComponent<Record<string, unknown>, Record<string, unknown>, unknown>
  export const SplideTrack: DefineComponent<Record<string, unknown>, Record<string, unknown>, unknown>
}
