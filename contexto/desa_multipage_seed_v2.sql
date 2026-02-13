-- DESA Ingeniería - Base de datos multipágina (v2)
-- Fuente: contexto/desa-2026.pdf
-- Objetivo: Soportar arquitectura SEO multipágina dinámica (servicios + portafolio)

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

DROP TABLE IF EXISTS service_technologies;
DROP TABLE IF EXISTS project_technologies;
DROP TABLE IF EXISTS seo_meta;
DROP TABLE IF EXISTS projects;
DROP TABLE IF EXISTS services;
DROP TABLE IF EXISTS technologies;
DROP TABLE IF EXISTS clients;
DROP TABLE IF EXISTS categories;
DROP TABLE IF EXISTS pages;

CREATE TABLE pages (
  id CHAR(36) NOT NULL,
  page_type ENUM('home','service','project','contact','legal') NOT NULL DEFAULT 'service',
  slug VARCHAR(180) NOT NULL,
  title VARCHAR(190) NOT NULL,
  h1 VARCHAR(190) NULL,
  content_payload JSON NULL,
  is_visible TINYINT(1) NOT NULL DEFAULT 1,
  service_status ENUM('draft','active','suspended','archived') NOT NULL DEFAULT 'active',
  created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  updated_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (id),
  UNIQUE KEY uq_pages_slug (slug),
  KEY idx_pages_status (service_status, is_visible)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE seo_meta (
  id CHAR(36) NOT NULL,
  page_id CHAR(36) NOT NULL,
  meta_title VARCHAR(190) NOT NULL,
  meta_description VARCHAR(320) NOT NULL,
  canonical_url VARCHAR(255) NULL,
  robots VARCHAR(50) NOT NULL DEFAULT 'index,follow',
  schema_type VARCHAR(80) NULL,
  created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  updated_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (id),
  UNIQUE KEY uq_seo_meta_page (page_id),
  KEY idx_seo_robots (robots)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE categories (
  id INT UNSIGNED NOT NULL AUTO_INCREMENT,
  name VARCHAR(120) NOT NULL,
  slug VARCHAR(120) NOT NULL,
  is_active TINYINT(1) NOT NULL DEFAULT 1,
  PRIMARY KEY (id),
  UNIQUE KEY uq_categories_slug (slug)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE clients (
  id CHAR(36) NOT NULL,
  name VARCHAR(180) NOT NULL,
  slug VARCHAR(180) NOT NULL,
  is_featured TINYINT(1) NOT NULL DEFAULT 0,
  created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  updated_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (id),
  UNIQUE KEY uq_clients_slug (slug)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE technologies (
  id CHAR(36) NOT NULL,
  name VARCHAR(120) NOT NULL,
  slug VARCHAR(120) NOT NULL,
  tech_type VARCHAR(120) NULL,
  logo_path VARCHAR(255) NULL,
  website_url VARCHAR(255) NULL,
  is_active TINYINT(1) NOT NULL DEFAULT 1,
  created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  updated_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (id),
  UNIQUE KEY uq_tech_slug (slug)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE services (
  id CHAR(36) NOT NULL,
  page_id CHAR(36) NOT NULL,
  slug VARCHAR(180) NOT NULL,
  name VARCHAR(180) NOT NULL,
  short_description TEXT NULL,
  long_description LONGTEXT NULL,
  content_payload JSON NULL,
  is_visible TINYINT(1) NOT NULL DEFAULT 1,
  service_status ENUM('draft','active','suspended','archived') NOT NULL DEFAULT 'active',
  created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  updated_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (id),
  UNIQUE KEY uq_services_slug (slug),
  KEY idx_services_status (service_status, is_visible)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE projects (
  id CHAR(36) NOT NULL,
  page_id CHAR(36) NULL,
  slug VARCHAR(180) NOT NULL,
  name VARCHAR(220) NOT NULL,
  client_id CHAR(36) NULL,
  category_id INT UNSIGNED NULL,
  city VARCHAR(120) NULL,
  state VARCHAR(120) NULL,
  area_m2 DECIMAL(12,2) NULL,
  short_description TEXT NULL,
  cover_image VARCHAR(255) NULL,
  content_payload JSON NULL,
  is_featured TINYINT(1) NOT NULL DEFAULT 0,
  is_visible TINYINT(1) NOT NULL DEFAULT 1,
  service_status ENUM('draft','active','suspended','archived') NOT NULL DEFAULT 'active',
  created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  updated_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (id),
  UNIQUE KEY uq_projects_slug (slug),
  KEY idx_projects_category (category_id),
  KEY idx_projects_status (service_status, is_visible),
  KEY idx_projects_client (client_id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE service_technologies (
  id BIGINT UNSIGNED NOT NULL AUTO_INCREMENT,
  service_id CHAR(36) NOT NULL,
  technology_id CHAR(36) NOT NULL,
  PRIMARY KEY (id),
  UNIQUE KEY uq_service_technologies (service_id, technology_id),
  KEY idx_st_service (service_id),
  KEY idx_st_technology (technology_id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE project_technologies (
  id BIGINT UNSIGNED NOT NULL AUTO_INCREMENT,
  project_id CHAR(36) NOT NULL,
  technology_id CHAR(36) NOT NULL,
  PRIMARY KEY (id),
  UNIQUE KEY uq_project_technologies (project_id, technology_id),
  KEY idx_pt_project (project_id),
  KEY idx_pt_technology (technology_id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Catálogos
INSERT INTO categories (id, name, slug) VALUES
(1, 'Industrial', 'industrial'),
(2, 'Comercial', 'comercial'),
(3, 'Residencial / Urbano', 'residencial-urbano'),
(4, 'Institucional / Deportivo', 'institucional-deportivo'),
(5, 'Servicios Industriales', 'servicios-industriales');

INSERT INTO clients (id, name, slug, is_featured) VALUES
('4e328785-2dca-489d-8528-35f95f1914b1', 'PAGA Desarrollos', 'paga-desarrollos', 1),
('43061dfd-b96c-429e-9cbf-35b74708dd8e', 'SIE Industrial', 'sie-industrial', 1),
('034d055e-5bad-44f8-9f9d-f699949fd315', 'U-ERRE', 'u-erre', 1),
('525d2fe8-97f4-4637-a7ef-f38b39fc4107', 'Valmont Monterrey', 'valmont-monterrey', 1),
('180ad887-ed11-48b8-be6d-8f4d92021130', 'YounChang México', 'younchang-mexico', 1),
('8e8ca548-2eff-4b2a-8390-7f4fdff1a8fd', 'IDEKA', 'ideka', 0),
('8ef83e92-f1e4-48a4-b132-0c3506eb4f57', 'REBASA', 'rebasa', 0),
('f8f32307-728f-426a-acda-08d5099f18d4', 'NIFCO México', 'nifco-mexico', 0),
('804100f8-da8a-4d4e-a061-f6bb0cf69e17', 'VYNMSA', 'vynmsa', 1),
('1cf8f22e-f955-4db5-8ce7-9ed78ef32342', 'Pastelería Lety', 'pasteleria-lety', 1),
('27fe3d25-ff21-4129-b0e9-7dcead4ab3f7', 'Mercedes-Benz', 'mercedes-benz', 1);

INSERT INTO technologies (id, name, slug, tech_type, logo_path) VALUES
('c223f453-88c8-4eb9-b4fd-af4b7784ecee', 'TEKLA Structures', 'tekla-structures', 'Modelado y Detalle', 'assets/images/icon/feature-icon-01.png'),
('97e7cf0f-8f4e-46d9-881e-2f7a44197359', 'CYPE CAD', 'cype-cad', 'Cálculo Estructural', 'assets/images/icon/feature-icon-02.png'),
('7598b925-ff79-443c-b255-0c1f4a93049d', 'STAAD.Pro', 'staad-pro', 'Análisis Estructural', 'assets/images/icon/feature-icon-03.png'),
('76e5a168-25e3-46aa-8237-42b98d5ccfc9', 'ETABS', 'etabs', 'Análisis de Edificios', 'assets/images/icon/feature-icon-04.png'),
('8b32e18a-d850-4cae-a87a-b116eb064a78', 'RAM Connection', 'ram-connection', 'Diseño de Conexiones', 'assets/images/icon/feature-icon-05.png'),
('6935fbb5-38fb-4843-b6a4-70ff3f394156', 'REVIT', 'revit', 'BIM Arquitectura', 'assets/images/icon/feature-icon-06.png'),
('ca4464d5-6b3d-4ff9-aeec-e8ccdd75ed47', 'AutoCAD', 'autocad', 'Dibujo 2D/3D', 'assets/images/icon/feature-icon-07.png');

-- Páginas y servicios
INSERT INTO pages (id, page_type, slug, title, h1, content_payload, service_status) VALUES
('1307ca53-aa20-4535-a373-e6df907ca3fd', 'service', 'servicios/ingenieria-estructural', 'Ingeniería y Diseño Estructural en Monterrey | DESA', 'Ingeniería Estructural', JSON_OBJECT('city', 'Monterrey'), 'active'),
('25af1380-851d-40b8-b15f-819200f1e242', 'service', 'servicios/ingenierias-preliminares', 'Ingenierías Preliminares para Construcción | DESA Monterrey', 'Ingenierías Preliminares', JSON_OBJECT('city', 'Monterrey'), 'active'),
('443df31f-75b9-4f65-a437-48ce7bc6d810', 'service', 'servicios/ingenieria-electrica', 'Ingeniería Eléctrica Industrial en Monterrey | DESA', 'Ingeniería Eléctrica', JSON_OBJECT('city', 'Monterrey'), 'active'),
('4cb9d7b1-faf6-4939-a508-25f17f95f06b', 'service', 'servicios/ingenieria-hidrosanitaria', 'Ingeniería Hidrosanitaria y Pluvial en Monterrey | DESA', 'Ingeniería Hidrosanitaria', JSON_OBJECT('city', 'Monterrey'), 'active'),
('0748d098-579b-44f0-9f50-5b863f166f25', 'service', 'servicios/arquitectura', 'Arquitectura Ejecutiva y Renders 3D en Monterrey | DESA', 'Arquitectura', JSON_OBJECT('city', 'Monterrey'), 'active'),
('5164116a-0fbe-4fcf-a4f0-ee7f6bc4fd8c', 'home', 'proyectos', 'Portafolio de Proyectos de Ingeniería en Monterrey | DESA', 'Proyectos de Ingeniería', JSON_OBJECT('mode', 'index'), 'active');

INSERT INTO services (id, page_id, slug, name, short_description, long_description, content_payload, service_status) VALUES
('dfbb2c74-9c33-4408-a716-e32540e5f822', '1307ca53-aa20-4535-a373-e6df907ca3fd', 'ingenieria-estructural', 'Ingeniería Estructural',
'Diseño estructural asistido por computadora para proyectos residenciales, comerciales e industriales con enfoque en eficiencia y reducción de tiempos de entrega.',
'Incluye diseño y consultoría estructural, ingeniería de detalle con TEKLA Structures, cimentaciones para bases y equipos, memorias de cálculo y planos as-built.',
JSON_OBJECT('deliverables', JSON_ARRAY('Memorias de cálculo', 'Planos as-built', 'Ingeniería de detalle')), 'active'),
('7f333eb4-91bd-4dc8-a94d-f1033557e06d', '25af1380-851d-40b8-b15f-819200f1e242', 'ingenierias-preliminares', 'Ingenierías Preliminares',
'Levantamiento topográfico, escáner láser de construcciones existentes, mecánica de suelos e hidrología.',
'Servicio de soporte técnico para etapa conceptual y anteproyecto con bases confiables para diseño y construcción.',
JSON_OBJECT('focus', 'datos base de diseño'), 'active'),
('f1bf2928-86ff-4dcf-91d6-7b35b4977f45', '443df31f-75b9-4f65-a437-48ce7bc6d810', 'ingenieria-electrica', 'Ingeniería Eléctrica',
'Ingeniería eléctrica de cableado, cuadros de carga, memorias y cálculos de corto circuito e iluminación.',
'Diseño de instalaciones en baja y media tensión con memorias y diagramas para ejecución.',
JSON_OBJECT('specialty', 'industrial y comercial'), 'active'),
('8e288649-fadc-4843-9947-6f4c48f95ff8', '4cb9d7b1-faf6-4939-a508-25f17f95f06b', 'ingenieria-hidrosanitaria', 'Ingeniería Hidrosanitaria',
'Diseño de redes hidrosanitarias y pluviales con memorias y planos isométricos.',
'Soluciones para sistemas hidrosanitarios, pluviales y sanitarios en proyectos industriales y comerciales.',
JSON_OBJECT('scope', 'redes generales y detalles'), 'active'),
('17cab6c0-3bdc-4342-9547-f0b9b905f887', '0748d098-579b-44f0-9f50-5b863f166f25', 'arquitectura', 'Arquitectura',
'Planos arquitectónicos, cortes, elevaciones, renders 3D y proyecto ejecutivo.',
'Incluye cuantificación de materiales y catálogo de conceptos para control de obra y compras.',
JSON_OBJECT('output', JSON_ARRAY('Proyecto ejecutivo', 'Renders', 'Catálogo de conceptos')), 'active');

INSERT INTO service_technologies (service_id, technology_id) VALUES
('dfbb2c74-9c33-4408-a716-e32540e5f822', 'c223f453-88c8-4eb9-b4fd-af4b7784ecee'),
('dfbb2c74-9c33-4408-a716-e32540e5f822', '97e7cf0f-8f4e-46d9-881e-2f7a44197359'),
('dfbb2c74-9c33-4408-a716-e32540e5f822', '7598b925-ff79-443c-b255-0c1f4a93049d'),
('dfbb2c74-9c33-4408-a716-e32540e5f822', '76e5a168-25e3-46aa-8237-42b98d5ccfc9'),
('dfbb2c74-9c33-4408-a716-e32540e5f822', '8b32e18a-d850-4cae-a87a-b116eb064a78'),
('17cab6c0-3bdc-4342-9547-f0b9b905f887', '6935fbb5-38fb-4843-b6a4-70ff3f394156'),
('17cab6c0-3bdc-4342-9547-f0b9b905f887', 'ca4464d5-6b3d-4ff9-aeec-e8ccdd75ed47');

-- Portafolio (extraído del PDF DESA 2026)
INSERT INTO projects (id, slug, name, client_id, category_id, city, state, area_m2, short_description, cover_image, is_featured, service_status) VALUES
('d34ed0d7-5447-4460-b9f5-2f7e4a7024dc', 'plaza-via-puerta-de-hierro', 'Plaza Vía Puerta de Hierro', '4e328785-2dca-489d-8528-35f95f1914b1', 2, 'Monterrey', 'Nuevo León', NULL, 'Diseño estructural de cubiertas y escaleras.', 'assets/images/services/services-thumb-21.png', 1, 'active'),
('a89fb6d1-d3ce-41cd-9f9f-c53590655f9b', 'agencia-mercedes-benz-la-rioja', 'Agencia Mercedes Benz La Rioja', '27fe3d25-ff21-4129-b0e9-7dcead4ab3f7', 2, 'Monterrey', 'Nuevo León', 3500, 'Ingeniería de diseño de estructura metálica de cubierta, mezzanine y escalera.', 'assets/images/services/services-thumb-17.png', 1, 'active'),
('c06e0d53-4905-438c-b72a-a1f8ee766a5f', 'plaza-comercial-andenes-guadalupe', 'Plaza Comercial Andenes Guadalupe', '4e328785-2dca-489d-8528-35f95f1914b1', 2, 'Guadalupe', 'Nuevo León', NULL, 'Diseño estructural de cubierta metálica.', 'assets/images/services/services-thumb-24.png', 0, 'active'),
('268f4461-ce4f-4672-adf9-308ace6ab241', 'plaza-madero', 'Plaza Madero', NULL, 2, 'Monterrey', 'Nuevo León', 1100, 'Diseño estructural de plaza comercial.', 'assets/images/services/services-thumb-31.png', 0, 'active'),
('bb4297a5-aaf8-4f56-abd4-326e4bd54217', 'bar-havana-monterrey', 'Bar Havana Monterrey', NULL, 2, 'Monterrey', 'Nuevo León', NULL, 'Construcción de infraestructura exterior, interior y mobiliario.', 'assets/images/services/services-thumb-10.png', 0, 'active'),
('31797269-c07c-4996-83ce-efda5673c370', 'preparatoria-u-erre', 'Preparatoria U-ERRE', '034d055e-5bad-44f8-9f9d-f699949fd315', 4, 'Monterrey', 'Nuevo León', NULL, 'Diseño estructural de fachada metálica en Campus Valle Alto.', 'assets/images/services/services-thumb-18.png', 1, 'active'),
('19470036-0050-45f4-9dd7-4f9087d68f19', 'deportivo-kia', 'Deportivo KIA', '180ad887-ed11-48b8-be6d-8f4d92021130', 4, 'Pesquería', 'Nuevo León', 1235, 'Diseño de complejo deportivo y palapas (estructural y arquitectónico).', 'assets/images/services/services-thumb-20.png', 1, 'active'),
('d110662f-2951-43ce-a742-cb431ff3e63c', 'comedor-valmont', 'Comedor para Empleados Valmont', '525d2fe8-97f4-4637-a7ef-f38b39fc4107', 1, 'Monterrey', 'Nuevo León', 512, 'Diseño de fachadas para comedor de empleados.', 'assets/images/services/services-thumb-28.png', 0, 'active'),
('6906097a-40e0-4e60-b8e3-c6177f8ea8e5', 'naves-aeropuerto', 'Naves Aeropuerto', '43061dfd-b96c-429e-9cbf-35b74708dd8e', 1, 'Apodaca', 'Nuevo León', 64400, 'Ingeniería de diseño y fabricación de 38 naves industriales.', 'assets/images/services/services-thumb-44.png', 1, 'active'),
('21457e75-181e-4069-893f-c9b8a5f7d7f8', 'nave-expansion-ctr', 'Nave de Expansión CTR', NULL, 1, 'Monterrey', 'Nuevo León', NULL, 'Ingeniería y diseño estructural de nave de expansión.', 'assets/images/services/services-thumb-33.png', 0, 'active'),
('80699559-6713-4079-ab36-a4caac9116f6', 'nave-younchang', 'Nave Younchang', '180ad887-ed11-48b8-be6d-8f4d92021130', 1, 'Monterrey', 'Nuevo León', 10200, 'Ingeniería de diseño y fabricación de nave industrial.', 'assets/images/services/services-thumb-34.png', 1, 'active'),
('8873780b-fd4a-4f3d-a4a3-f2487de38385', 'nave-mantra-rebasa', 'Nave Mantra Rebasa', '8ef83e92-f1e4-48a4-b132-0c3506eb4f57', 1, 'Monterrey', 'Nuevo León', 1150, 'Diseño estructural y fabricación de nave industrial.', 'assets/images/services/services-thumb-35.png', 0, 'active'),
('dcbf4a72-f8f6-46af-864b-1429b0779ff5', 'mezzanine-nifco', 'Mezzanine NIFCO', 'f8f32307-728f-426a-acda-08d5099f18d4', 1, 'Monterrey', 'Nuevo León', NULL, 'Diseño de mezzanine de producción y escalera metálica.', 'assets/images/services/services-thumb-13.png', 0, 'active'),
('f63bb0cc-d5c4-4a7f-9853-55db88ef8e11', 'cubierta-banos-vynmsa', 'Cubierta para Baños VYNMSA', '804100f8-da8a-4d4e-a061-f6bb0cf69e17', 1, 'Monterrey', 'Nuevo León', NULL, 'Diseño de estructura metálica y fabricación.', 'assets/images/services/services-thumb-05.png', 0, 'active'),
('51e4bad0-cf5c-4050-b8e9-f159df0d8ec5', 'ampliacion-anden-pasteleria-lety', 'Ampliación Andén Pastelería Lety', '1cf8f22e-f955-4db5-8ce7-9ed78ef32342', 1, 'Monterrey', 'Nuevo León', NULL, 'Obra civil, estructura y laminación de andén.', 'assets/images/services/services-thumb-15.png', 0, 'active'),
('329c2ffb-7655-47f8-a210-323d77c26eca', 'cimentacion-nave-mantra', 'Cimentación Nave Mantra-Rebasa', '8ef83e92-f1e4-48a4-b132-0c3506eb4f57', 1, 'Monclova', 'Coahuila', NULL, 'Construcción de cimentación para nave industrial.', 'assets/images/services/services-thumb-12.png', 0, 'active'),
('6a6f43e5-e340-44bb-b3c2-ab4f07f4c6aa', 'ampliacion-nave-colombia', 'Ampliación Nave Industrial Colombia', NULL, 5, 'Colombia', 'Nuevo León', NULL, 'Construcción de ante cuarto, verificación de agua potable e instalaciones.', 'assets/images/services/services-thumb-11.png', 0, 'active'),
('90ca4262-daf3-4d8d-bc23-352d49ad27bc', 'canopys-las-huastecas', 'Canopys Las Huastecas', '8e8ca548-2eff-4b2a-8390-7f4fdff1a8fd', 3, 'Santa Catarina', 'Nuevo León', NULL, 'Diseño de cubiertas peatonal y para estacionamiento.', 'assets/images/services/services-thumb-43.png', 0, 'active'),
('f43e5f90-d1ba-414e-bd63-8e5fb2818439', 'departamentos-tulum', 'Departamentos en Tulum', NULL, 3, 'Tulum', 'Quintana Roo', 1124, 'Ingeniería de diseño estructural para edificio de 3 niveles y sótano.', 'assets/images/services/services-thumb-45.png', 0, 'active'),
('dbb11510-f7ea-4f69-a75e-1f870b6405e5', 'casa-campestre-arteaga', 'Casa Campestre', NULL, 3, 'Arteaga', 'Coahuila', NULL, 'Construcción de casa campestre.', 'assets/images/services/services-thumb-25.png', 0, 'active'),
('fa4222dd-39ac-4520-a9ca-6aa4ff127900', 'urbanizacion-los-lienzos', 'Urbanización y Casa Habitación', NULL, 3, 'Apodaca', 'Nuevo León', NULL, 'Construcción de casas habitación, introducción de servicios y urbanización.', 'assets/images/services/services-thumb-08.png', 0, 'active');

INSERT INTO project_technologies (project_id, technology_id)
SELECT p.id, t.id
FROM projects p
JOIN technologies t ON t.slug IN ('tekla-structures', 'cype-cad', 'staad-pro')
WHERE p.category_id IN (1,2,4);

-- SEO META: CTR alto por URL
INSERT INTO seo_meta (id, page_id, meta_title, meta_description, canonical_url, schema_type) VALUES
('00c5ec43-1627-45ea-90f1-9fc6cf785f9a', '1307ca53-aa20-4535-a373-e6df907ca3fd', 'Ingeniería y Diseño Estructural en Monterrey | DESA', 'Diseño estructural en Monterrey para naves, edificios y cimentaciones. Reducimos tiempos de entrega con tecnología avanzada y enfoque en seguridad.', '/servicios/ingenieria-estructural', 'EngineeringService'),
('f4348d64-8a2a-4bf1-91e5-27ad3f6433d8', '25af1380-851d-40b8-b15f-819200f1e242', 'Ingenierías Preliminares para Construcción en Monterrey | DESA', 'Topografía, escáner láser, mecánica de suelos e hidrología para iniciar tu proyecto con datos técnicos confiables.', '/servicios/ingenierias-preliminares', 'Service'),
('f524f4d3-c9a5-4457-93df-9d6537fdf8b8', '443df31f-75b9-4f65-a437-48ce7bc6d810', 'Ingeniería Eléctrica Industrial en Monterrey | DESA', 'Diseño eléctrico con memorias de cálculo, cuadros de carga y diagramas para proyectos industriales y comerciales.', '/servicios/ingenieria-electrica', 'Service'),
('fe34a3af-e4fc-43a2-91f7-d25684329998', '4cb9d7b1-faf6-4939-a508-25f17f95f06b', 'Ingeniería Hidrosanitaria y Pluvial en Monterrey | DESA', 'Diseño de redes hidrosanitarias y pluviales con enfoque en eficiencia operativa y cumplimiento técnico.', '/servicios/ingenieria-hidrosanitaria', 'Service'),
('8723b2cd-a5d5-499c-a094-ada4d2c8f006', '0748d098-579b-44f0-9f50-5b863f166f25', 'Arquitectura Ejecutiva en Monterrey: Planos y Renders | DESA', 'Proyecto ejecutivo, renders 3D y catálogos de conceptos para construir con control técnico y financiero.', '/servicios/arquitectura', 'Service'),
('d5e8d6f4-c9de-4cbe-bf70-d057062da2cc', '5164116a-0fbe-4fcf-a4f0-ee7f6bc4fd8c', 'Portafolio de Proyectos Industriales, Comerciales y Deportivos | DESA', 'Conoce casos reales de diseño estructural y construcción en Monterrey y norte de México.', '/proyectos', 'CollectionPage');

SET FOREIGN_KEY_CHECKS = 1;
