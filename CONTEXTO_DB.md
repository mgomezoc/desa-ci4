# CONTEXTO_DB

## Esquema multipágina SEO (DESA)

Archivos SQL de referencia:
- Archivo único recomendado: `contexto/desa_db_full_setup.sql`
- Alternativa legacy: `contexto/desa_multipage_seed_v2.sql` + `contexto/geo_update.sql`

### Tablas core
- `pages`
- `seo_meta`
- `services`
- `projects`
- `clients`
- `technologies`

### Tablas de apoyo
- `categories`
- `service_technologies`
- `project_technologies`
- `faq_items` (FAQ semántica por página)

## Criterios técnicos aplicados
- UUID `CHAR(36)` para entidades core.
- Catálogo `categories` con `AUTO_INCREMENT`.
- Sin foreign keys físicas; relaciones lógicas por `*_id`.
- `content_payload` JSON para contenido flexible.
- `seo_meta.schema_json` para JSON-LD dinámico renderizado desde BD.
- Índices por `slug`, `status`, `category_id` para SEO y listados.
