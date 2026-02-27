# Public Assets

Este directorio contiene archivos estáticos que se sirven directamente desde la raíz del sitio.

## Estructura esperada:

```
public/
├── favicon.ico
├── apple-touch-icon.png
├── og-image.jpg           # Imagen Open Graph (1200x630)
├── robots.txt
└── img/
    ├── hero-bridge.jpg    # Imagen del hero
    ├── founder-rie.jpg    # Foto de la fundadora
    ├── yatsuhashi.jpg     # Producto
    ├── niigata-rice.jpg   # Producto
    └── yuzu-grove.jpg     # Producto
```

## Cómo copiar las imágenes:

Desde el directorio `www/assets/img/`, copia todas las imágenes a `public/img/`:

```bash
# Windows PowerShell
Copy-Item -Path "..\www\assets\img\*" -Destination ".\public\img\" -Recurse

# Windows CMD
xcopy "..\www\assets\img\*" ".\public\img\" /E /I

# Linux/Mac
cp -r ../www/assets/img/* ./public/img/
```
