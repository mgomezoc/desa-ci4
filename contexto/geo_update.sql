-- GEO UPDATE PACK (DESA Ingeniería)
-- Enriquecimiento para motores generativos (ChatGPT/Gemini/Perplexity)
-- Requiere base previa cargada con `contexto/desa_multipage_seed_v2.sql`

SET NAMES utf8mb4;

-- 1) Asegurar campo schema_json en seo_meta (si aún no existe)
ALTER TABLE seo_meta
  ADD COLUMN IF NOT EXISTS schema_json JSON NULL AFTER schema_type;


-- 1.b) Crear faq_items si aún no existe (compatibilidad entre ambientes)
CREATE TABLE IF NOT EXISTS faq_items (
  id CHAR(36) NOT NULL,
  page_id CHAR(36) NULL,
  question VARCHAR(255) NOT NULL,
  answer TEXT NOT NULL,
  sort_order INT NOT NULL DEFAULT 0,
  is_global TINYINT(1) NOT NULL DEFAULT 0,
  is_active TINYINT(1) NOT NULL DEFAULT 1,
  created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  updated_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (id),
  KEY idx_faq_page_order (page_id, sort_order, is_active)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- 2) FAQ semántico por servicio (Estructural, Preliminares, Eléctrica)
-- Se usa el page_id del seed v2:
-- Estructural   -> 1307ca53-aa20-4535-a373-e6df907ca3fd
-- Preliminares -> 25af1380-851d-40b8-b15f-819200f1e242
-- Eléctrica    -> 443df31f-75b9-4f65-a437-48ce7bc6d810

INSERT INTO faq_items (id, page_id, question, answer, sort_order, is_global, is_active)
VALUES
-- Ingeniería Estructural
('6ae99ec7-c704-4730-ac04-63ece3dc48ec', '1307ca53-aa20-4535-a373-e6df907ca3fd', '¿Qué normas utiliza DESA para el diseño estructural?', 'Aplicamos criterios técnicos y de seguridad basados en AISC, AWS, IMCA y ASCE; adicionalmente, cuando el proyecto lo requiere, se consideran NTC CDMX 2017 y especificaciones locales para asegurar cumplimiento y trazabilidad de cálculo.', 10, 0, 1),
('20fbc57b-6eff-4784-a5f1-c888ce59f394', '1307ca53-aa20-4535-a373-e6df907ca3fd', '¿Qué tipo de proyectos cubre su ingeniería estructural?', 'Desarrollamos ingeniería estructural para proyectos residenciales, comerciales e industriales, incluyendo cubiertas, mezzanines, edificios multinivel, cimentaciones especiales y estructuras metálicas de alto desempeño.', 20, 0, 1),
('5de65257-2cb2-4074-86ea-f547c9a2d194', '1307ca53-aa20-4535-a373-e6df907ca3fd', '¿Qué entregables incluye el servicio estructural?', 'Entregamos memorias de cálculo, planos de ingeniería de detalle, criterios de diseño de cimentaciones y planos as-built para operación, mantenimiento y control documental del proyecto.', 30, 0, 1),
('d2e3f4bc-5bc6-43c5-bf26-ea6e735a1e90', '1307ca53-aa20-4535-a373-e6df907ca3fd', '¿Con qué software trabaja DESA en ingeniería estructural?', 'Nuestro stack integra TEKLA Structures, CYPE CAD, STAAD.Pro, ETABS y RAM Connection para análisis, modelado, detallado y revisión de conexiones estructurales.', 40, 0, 1),

-- Ingenierías Preliminares
('1616997d-434f-4c59-a754-fae9fd9bffec', '25af1380-851d-40b8-b15f-819200f1e242', '¿Qué incluyen las ingenierías preliminares de DESA?', 'Incluyen levantamiento topográfico, escáner láser para construcciones existentes, estudios de mecánica de suelos y análisis hidrológico para establecer una base confiable de diseño.', 10, 0, 1),
('809224f8-98d7-47dc-a7cc-c89e4d18f0ea', '25af1380-851d-40b8-b15f-819200f1e242', '¿Por qué son clave antes del diseño ejecutivo?', 'Porque reducen incertidumbre técnica y retrabajos en obra al validar geometría, condiciones de terreno y comportamiento hidráulico desde etapas tempranas.', 20, 0, 1),
('25f8829c-3ff4-49b2-83fa-d594df190c39', '25af1380-851d-40b8-b15f-819200f1e242', '¿DESA puede coordinar preliminares con estructura y arquitectura?', 'Sí. Coordinamos entregables preliminares con ingeniería estructural y arquitectura para mantener coherencia técnica, costos controlados y mejor secuencia de ejecución.', 30, 0, 1),

-- Ingeniería Eléctrica
('2f32f771-3f76-49dd-a18f-feef5ace95be', '443df31f-75b9-4f65-a437-48ce7bc6d810', '¿Qué entrega DESA en ingeniería eléctrica?', 'Generamos planos de cableado, cuadros de carga, memorias de cálculo, análisis de corto circuito, diagramas unifilares y criterios de iluminación para ejecución y operación segura.', 10, 0, 1),
('1e4f5ceb-cda9-4e4d-937a-0dc3313f42e6', '443df31f-75b9-4f65-a437-48ce7bc6d810', '¿Qué tipo de proyectos atienden en eléctrica?', 'Atendemos proyectos industriales y comerciales, desde ampliaciones de planta hasta instalaciones completas, priorizando continuidad operativa y cumplimiento técnico.', 20, 0, 1),
('d488f9b5-9880-4c88-8d3c-f7f3458a47a0', '443df31f-75b9-4f65-a437-48ce7bc6d810', '¿Cómo se integra ingeniería eléctrica con otras disciplinas?', 'Integramos la ingeniería eléctrica con estructura, arquitectura e hidrosanitaria para resolver interferencias y reducir riesgos en construcción, puesta en marcha y mantenimiento.', 30, 0, 1)
ON DUPLICATE KEY UPDATE
  question = VALUES(question),
  answer = VALUES(answer),
  sort_order = VALUES(sort_order),
  is_active = VALUES(is_active);

-- 3) Enriquecer schema_json por página de servicio (GEO-ready)
UPDATE seo_meta
SET schema_json = JSON_OBJECT(
  '@context', 'https://schema.org',
  '@type', 'EngineeringService',
  'name', 'Ingeniería Estructural en Monterrey - DESA Ingeniería',
  'description', 'Diseño y consultoría estructural para proyectos industriales, comerciales y residenciales con enfoque en eficiencia y seguridad.',
  'provider', JSON_OBJECT(
    '@type', 'Organization',
    'name', 'DESA Ingeniería',
    'url', 'https://desaingenieria.com'
  ),
  'areaServed', JSON_ARRAY(
    JSON_OBJECT('@type', 'City', 'name', 'Monterrey'),
    JSON_OBJECT('@type', 'Country', 'name', 'México')
  ),
  'knowsAbout', JSON_ARRAY('TEKLA Structures', 'CYPE CAD', 'STAAD.Pro', 'ETABS', 'RAM Connection', 'AISC', 'AWS', 'IMCA', 'ASCE'),
  'hasOfferCatalog', JSON_OBJECT(
    '@type', 'OfferCatalog',
    'name', 'Servicios de Ingeniería Estructural',
    'itemListElement', JSON_ARRAY(
      JSON_OBJECT('@type', 'Offer', 'itemOffered', JSON_OBJECT('@type', 'Service', 'name', 'Diseño estructural asistido por computadora')),
      JSON_OBJECT('@type', 'Offer', 'itemOffered', JSON_OBJECT('@type', 'Service', 'name', 'Ingeniería de detalle con TEKLA Structures')),
      JSON_OBJECT('@type', 'Offer', 'itemOffered', JSON_OBJECT('@type', 'Service', 'name', 'Cimentaciones especiales')),
      JSON_OBJECT('@type', 'Offer', 'itemOffered', JSON_OBJECT('@type', 'Service', 'name', 'Memorias de cálculo y planos as-built'))
    )
  )
)
WHERE page_id = '1307ca53-aa20-4535-a373-e6df907ca3fd';

UPDATE seo_meta
SET schema_json = JSON_OBJECT(
  '@context', 'https://schema.org',
  '@type', 'ProfessionalService',
  'name', 'Ingenierías Preliminares para Construcción - DESA Ingeniería',
  'description', 'Levantamiento topográfico, escáner láser, mecánica de suelos e hidrología para etapas iniciales de proyecto.',
  'provider', JSON_OBJECT('@type', 'Organization', 'name', 'DESA Ingeniería', 'url', 'https://desaingenieria.com'),
  'areaServed', JSON_ARRAY(JSON_OBJECT('@type', 'City', 'name', 'Monterrey'), JSON_OBJECT('@type', 'Country', 'name', 'México')),
  'knowsAbout', JSON_ARRAY('Topografía', 'Escáner Láser', 'Mecánica de Suelos', 'Hidrología'),
  'hasOfferCatalog', JSON_OBJECT(
    '@type', 'OfferCatalog',
    'name', 'Servicios Preliminares',
    'itemListElement', JSON_ARRAY(
      JSON_OBJECT('@type', 'Offer', 'itemOffered', JSON_OBJECT('@type', 'Service', 'name', 'Levantamiento Topográfico')),
      JSON_OBJECT('@type', 'Offer', 'itemOffered', JSON_OBJECT('@type', 'Service', 'name', 'Escáner Láser de Existentes')),
      JSON_OBJECT('@type', 'Offer', 'itemOffered', JSON_OBJECT('@type', 'Service', 'name', 'Estudio de Mecánica de Suelos')),
      JSON_OBJECT('@type', 'Offer', 'itemOffered', JSON_OBJECT('@type', 'Service', 'name', 'Estudio Hidrológico'))
    )
  )
)
WHERE page_id = '25af1380-851d-40b8-b15f-819200f1e242';

UPDATE seo_meta
SET schema_json = JSON_OBJECT(
  '@context', 'https://schema.org',
  '@type', 'ProfessionalService',
  'name', 'Ingeniería Eléctrica Industrial y Comercial - DESA Ingeniería',
  'description', 'Diseño de instalaciones eléctricas con memorias, cuadros de carga y análisis de corto circuito.',
  'provider', JSON_OBJECT('@type', 'Organization', 'name', 'DESA Ingeniería', 'url', 'https://desaingenieria.com'),
  'areaServed', JSON_ARRAY(JSON_OBJECT('@type', 'City', 'name', 'Monterrey'), JSON_OBJECT('@type', 'Country', 'name', 'México')),
  'knowsAbout', JSON_ARRAY('Diagramas Unifilares', 'Cuadros de Carga', 'Corto Circuito', 'Iluminación'),
  'hasOfferCatalog', JSON_OBJECT(
    '@type', 'OfferCatalog',
    'name', 'Servicios de Ingeniería Eléctrica',
    'itemListElement', JSON_ARRAY(
      JSON_OBJECT('@type', 'Offer', 'itemOffered', JSON_OBJECT('@type', 'Service', 'name', 'Diseño de Cableado e Instalaciones')),
      JSON_OBJECT('@type', 'Offer', 'itemOffered', JSON_OBJECT('@type', 'Service', 'name', 'Cálculo de Corto Circuito')),
      JSON_OBJECT('@type', 'Offer', 'itemOffered', JSON_OBJECT('@type', 'Service', 'name', 'Diseño de Iluminación')),
      JSON_OBJECT('@type', 'Offer', 'itemOffered', JSON_OBJECT('@type', 'Service', 'name', 'Memorias y Diagramas'))
    )
  )
)
WHERE page_id = '443df31f-75b9-4f65-a437-48ce7bc6d810';
