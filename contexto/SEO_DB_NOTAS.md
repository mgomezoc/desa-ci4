# Recomendación SEO + Base de Datos para DESA (v2)

Tu estrategia **sí es correcta**: dejar el home como "hub" y crear URLs dedicadas por servicio/proyecto.

## Por qué sí funciona para SEO

- Atacas búsquedas específicas con intención alta (ej. "diseño estructural nave industrial en Monterrey").
- Puedes optimizar cada URL con `title`, `description`, `canonical`, `OG` y `schema` de forma independiente.
- Reutilizas datos (clientes, tecnologías, normas, servicios) en múltiples páginas sin duplicar contenido.

## Ajustes clave aplicados en esta versión

1. **Alineado a tu estándar CI4/DB**
   - Entidades core con `CHAR(36)` (UUID): `pages`, `clients`, `services`, `projects`, `media_assets`, `content_modules`, `faq_items`, `leads`.
   - Catálogos con `AUTO_INCREMENT`: `categories`, `technologies`, `standards`.
   - **Sin Foreign Keys**: relaciones por convención (`page_id`, `client_id`, etc.).

2. **Modelo SEO sólido por URL**
   - `pages` + `seo_meta` (1:1 por `page_id`) para controlar metadata por página.

3. **Contenido reutilizable y escalable**
   - N:N: `project_services`, `project_technologies`, `project_standards`.
   - Módulos JSON en `content_modules` para construir secciones sin alterar esquema.

4. **Operación y medición**
   - `redirects` para 301 al separar secciones del home.
   - `leads` con `utm_payload` JSON y estado comercial.

## Archivo actualizado

- `contexto/propuesta-seo-bd-desa.sql`

## Nota práctica

Primero publica páginas de **servicios** y **proyectos destacados** con buen contenido + schema + interlinking interno.
Después migra el resto del contenido del home gradualmente, acompañando con `301`.
