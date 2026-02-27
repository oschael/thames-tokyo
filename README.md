# Thames & Tokyo - Nuxt 3 Application

> **Curating the inaccessible** - Your bridge to Japan's hidden market.

## 📋 Tabla de Contenidos

- [Descripción](#descripción)
- [Requisitos Previos](#requisitos-previos)
- [Instalación](#instalación)
- [Desarrollo Local](#desarrollo-local)
- [Estructura del Proyecto](#estructura-del-proyecto)
- [Arquitectura y Decisiones Técnicas](#arquitectura-y-decisiones-técnicas)
- [Despliegue a Producción](#despliegue-a-producción)
- [Mejores Prácticas Implementadas](#mejores-prácticas-implementadas)
- [Troubleshooting](#troubleshooting)

---

## Descripción

Este proyecto es una migración profesional de un sitio HTML estático a **Nuxt 3**, siguiendo las mejores prácticas modernas de desarrollo web. El sitio presenta la empresa Thames & Tokyo, especializada en conectar negocios con proveedores exclusivos japoneses.

## Requisitos Previos

Asegúrate de tener instalado:

- **Node.js**: v18.0.0 o superior (recomendado v20.x LTS)
- **npm**: v9.0.0 o superior (o pnpm/yarn)

Verificar versiones:
```bash
node --version
npm --version
```

## Instalación

1. **Navegar al directorio del proyecto:**
   ```bash
   cd nuxt-app
   ```

2. **Instalar dependencias:**
   ```bash
   npm install
   ```

3. **Configurar variables de entorno:**
   ```bash
   cp .env.example .env
   ```
   Edita `.env` con tus valores específicos.

4. **Copiar imágenes desde el proyecto original:**
   ```bash
   # Crear directorio de imágenes públicas
   mkdir -p public/img
   
   # Copiar imágenes desde el proyecto HTML original
   cp -r ../www/assets/img/* public/img/
   ```

## Desarrollo Local

### Iniciar servidor de desarrollo:

```bash
npm run dev
```

El sitio estará disponible en: **http://localhost:3000**

### Comandos disponibles:

| Comando | Descripción |
|---------|-------------|
| `npm run dev` | Servidor de desarrollo con HMR |
| `npm run build` | Construir para producción |
| `npm run preview` | Preview de build de producción |
| `npm run generate` | Generar sitio estático (SSG) |
| `npm run lint` | Ejecutar ESLint |
| `npm run typecheck` | Verificar tipos TypeScript |

---

## Estructura del Proyecto

```
nuxt-app/
├── app.vue                    # Componente raíz
├── error.vue                  # Página de error global
├── nuxt.config.ts             # Configuración de Nuxt
├── tailwind.config.ts         # Configuración de Tailwind CSS
├── tsconfig.json              # Configuración de TypeScript
├── package.json               # Dependencias y scripts
│
├── assets/
│   └── scss/
│       ├── main.scss          # Punto de entrada de estilos
│       ├── vars/
│       │   └── _variables.scss # Variables del design system
│       ├── partials/
│       │   ├── _base.scss     # Estilos base/reset
│       │   ├── _typography.scss
│       │   ├── _navigation.scss
│       │   ├── _hero.scss
│       │   ├── _cards.scss
│       │   ├── _forms.scss
│       │   ├── _components.scss
│       │   └── _animations.scss
│       └── pages/
│           └── _contact.scss
│
├── components/
│   ├── TheNavbar.vue          # Navegación principal
│   ├── TheFooter.vue          # Pie de página
│   ├── home/                  # Componentes específicos del Home
│   │   ├── HeroSection.vue
│   │   ├── TrustChallengeSection.vue
│   │   ├── FounderSection.vue
│   │   ├── ServicesPreviewSection.vue
│   │   ├── DelicatessenTeaserSection.vue
│   │   ├── AccessStoriesSection.vue
│   │   └── ContactCtaSection.vue
│   └── ui/                    # Componentes UI reutilizables
│       ├── SectionHeader.vue
│       ├── TrustCard.vue
│       ├── ServiceCard.vue
│       └── ProductCard.vue
│
├── composables/               # Lógica reutilizable
│   ├── useScrollReveal.ts
│   ├── useTypewriter.ts
│   └── useSiteConfig.ts
│
├── layouts/
│   └── default.vue            # Layout principal
│
├── pages/
│   └── index.vue              # Página de inicio
│
├── public/                    # Archivos estáticos
│   └── img/                   # Imágenes (copiar desde www/assets/img)
│
└── types/
    └── index.ts               # Definiciones de TypeScript
```

---

## Arquitectura y Decisiones Técnicas

### 1. Separación de Responsabilidades

| Capa | Responsabilidad | Ejemplo |
|------|-----------------|---------|
| **Layouts** | Estructura común (nav, footer) | `layouts/default.vue` |
| **Pages** | Contenido específico por ruta + SEO | `pages/index.vue` |
| **Components** | UI reutilizable | `components/ui/TrustCard.vue` |
| **Composables** | Lógica de negocio compartida | `composables/useScrollReveal.ts` |

### 2. ¿Por qué cada parte va donde va?

#### **Layout (`default.vue`)**
- Contiene la estructura común: `<TheNavbar>`, `<slot>`, `<TheFooter>`
- Se aplica automáticamente a todas las páginas
- **Razón**: Evita repetir código en cada página

#### **Page (`pages/index.vue`)**
- Compone las secciones del home usando componentes
- Define meta tags específicos con `useHead()`
- **Razón**: Mantiene la página como orquestador, no como implementación

#### **Components (`components/home/`)**
- Cada sección es un componente independiente
- Prefijo por dominio (`home/`, `ui/`)
- **Razón**: Facilita testing, mantenimiento y reutilización

#### **Composables (`composables/`)**
- Encapsulan lógica compleja (Intersection Observer, Typed.js)
- Son auto-importados por Nuxt
- **Razón**: Evita duplicación y mejora testabilidad

### 3. Manejo del `<head>`

```
nuxt.config.ts    → Meta tags globales (charset, viewport, favicon)
layouts/default   → Meta tags comunes a todas las páginas del layout
pages/index.vue   → Meta tags específicos de la página (title, description)
```

### 4. Scripts Externos

| Script | Ubicación | Razón |
|--------|-----------|-------|
| Google Fonts | `nuxt.config.ts` (módulo) | Mejor performance, preconnect automático |
| Typed.js | Componente (`HeroSection.vue`) | Solo se usa en el hero |
| Splide | Componente (`DelicatessenTeaserSection.vue`) | Solo se usa en el carrusel |
| Tailwind CSS | `nuxt.config.ts` (módulo) | Estilos globales |

### 5. Estilos: Global vs Scoped

| Tipo | Ubicación | Uso |
|------|-----------|-----|
| **Global** | `assets/scss/` | Variables, reset, clases utilitarias |
| **Scoped** | `<style scoped>` en componentes | Estilos específicos del componente |

---

## Despliegue a Producción

### Opción 1: Sitio Estático (SSG) - Recomendado

Ideal para hosting en Netlify, Vercel, o cualquier CDN.

```bash
# Generar sitio estático
npm run generate

# Los archivos estarán en .output/public/
```

#### Despliegue en Netlify:

1. Conectar repositorio a Netlify
2. Configurar build:
   - **Build command**: `npm run generate`
   - **Publish directory**: `.output/public`
3. Configurar variables de entorno en Netlify dashboard

#### Despliegue en Vercel:

```bash
# Instalar Vercel CLI
npm i -g vercel

# Desplegar
vercel
```

### Opción 2: Server-Side Rendering (SSR)

Para aplicaciones que necesitan datos dinámicos.

```bash
# Construir para producción
npm run build

# Iniciar servidor de producción
node .output/server/index.mjs
```

#### Variables de Entorno para Producción:

```env
NUXT_PUBLIC_SITE_URL=https://thamesandtokyo.com
NUXT_PUBLIC_CONTACT_EMAIL=rie@thamesandtokyo.com
```

### Checklist Pre-Producción

- [ ] Verificar todas las imágenes en `public/img/`
- [ ] Configurar `.env` con valores de producción
- [ ] Verificar meta tags y Open Graph
- [ ] Agregar favicon y apple-touch-icon
- [ ] Configurar analytics (opcional)
- [ ] Verificar sitemap.xml (usar `@nuxtjs/sitemap`)
- [ ] Probar en múltiples navegadores
- [ ] Verificar accesibilidad (Lighthouse)
- [ ] Configurar redirects si es necesario

---

## Mejores Prácticas Implementadas

### ✅ SEO
- Meta tags dinámicos por página
- Open Graph y Twitter Cards
- Datos estructurados (Schema.org)
- URLs semánticas

### ✅ Performance
- Lazy loading de imágenes
- Code splitting automático
- Preconnect de Google Fonts
- CSS crítico inline

### ✅ Accesibilidad
- ARIA labels en navegación
- Focus visible para teclado
- Respeto por `prefers-reduced-motion`
- Contraste de colores adecuado

### ✅ Mantenibilidad
- TypeScript estricto
- Componentes pequeños y enfocados
- Composables para lógica reutilizable
- Variables SCSS centralizadas

### ✅ Correcciones del HTML Original

| Problema Original | Corrección Aplicada |
|-------------------|---------------------|
| CDN de Tailwind en `<head>` | Módulo `@nuxtjs/tailwindcss` |
| Scripts inline | Composables Vue |
| Links `<a href="*.html">` | `<NuxtLink to="/">` (SPA) |
| Año hardcodeado en copyright | `computed(() => new Date().getFullYear())` |
| Menú móvil creado con JS | Componente Vue reactivo |

---

## Troubleshooting

### Error: "Cannot find module '@nuxtjs/tailwindcss'"
```bash
npm install @nuxtjs/tailwindcss --save-dev
```

### Error: "SCSS syntax error"
Verificar que `sass` esté instalado:
```bash
npm install sass --save-dev
```

### Imágenes no cargan
1. Verificar que las imágenes estén en `public/img/`
2. Las rutas deben ser absolutas: `/img/hero-bridge.jpg`

### Hot reload no funciona
```bash
# Limpiar cache y reiniciar
rm -rf .nuxt node_modules/.cache
npm run dev
```

---

## 📄 Licencia

© 2025 Thames & Tokyo. Todos los derechos reservados.

---

## 🤝 Contribución

Para contribuir al proyecto:

1. Crear una rama: `git checkout -b feature/nueva-funcionalidad`
2. Commit con mensajes descriptivos
3. Push y crear Pull Request

---

**Desarrollado con ❤️ usando Nuxt 3**
