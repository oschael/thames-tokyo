import type { Config } from 'tailwindcss'

export default <Config>{
  // ============================================
  // TAILWIND CSS - Thames & Tokyo Configuration
  // ============================================
  
  content: [
    './components/**/*.{js,vue,ts}',
    './layouts/**/*.vue',
    './pages/**/*.vue',
    './plugins/**/*.{js,ts}',
    './app.vue',
    './error.vue',
  ],

  theme: {
    extend: {
      // ============================================
      // CUSTOM COLORS - Matching SCSS Variables
      // ============================================
      colors: {
        primary: '#2C2C2C',
        secondary: '#F8F6F2',
        accent: '#B85450',
        supporting: '#8A9B8A',
        text: '#1A1A1A',
      },

      // ============================================
      // TYPOGRAPHY
      // ============================================
      fontFamily: {
        sans: ['Inter', 'system-ui', 'sans-serif'],
        display: ['Crimson Text', 'Georgia', 'serif'],
      },

      // ============================================
      // SPACING
      // ============================================
      spacing: {
        '18': '4.5rem',
        '22': '5.5rem',
      },

      // ============================================
      // SHADOWS
      // ============================================
      boxShadow: {
        'soft': '0 4px 12px rgba(0, 0, 0, 0.1)',
        'medium': '0 8px 24px rgba(0, 0, 0, 0.12)',
        'strong': '0 20px 40px rgba(0, 0, 0, 0.15)',
      },

      // ============================================
      // ANIMATIONS
      // ============================================
      animation: {
        'fade-in': 'fadeIn 0.6s ease-out',
        'slide-up': 'slideUp 0.6s ease-out',
        'slide-down': 'slideDown 0.3s ease-out',
      },
      keyframes: {
        fadeIn: {
          '0%': { opacity: '0' },
          '100%': { opacity: '1' },
        },
        slideUp: {
          '0%': { opacity: '0', transform: 'translateY(30px)' },
          '100%': { opacity: '1', transform: 'translateY(0)' },
        },
        slideDown: {
          '0%': { opacity: '0', transform: 'translateY(-10px)' },
          '100%': { opacity: '1', transform: 'translateY(0)' },
        },
      },

      // ============================================
      // TRANSITIONS
      // ============================================
      transitionDuration: {
        '400': '400ms',
        '600': '600ms',
      },
    },
  },

  plugins: [],
}
