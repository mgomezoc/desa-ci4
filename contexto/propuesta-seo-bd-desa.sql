-- PROPUESTA SEO + CONTENIDO REUTILIZABLE PARA DESA INGENIERÍA (v2)
-- Alineada a lineamientos CI4/PHP 8.1 del proyecto:
--   * UUID (CHAR 36) para entidades core
--   * Catálogos con AUTO_INCREMENT
--   * Sin FOREIGN KEYS (relaciones por convención *_id)
--   * JSON para payloads flexibles

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- =========================================================
-- 1) CONFIGURACIÓN GENERAL
-- =========================================================
DROP TABLE IF EXISTS site_settings;
CREATE TABLE site_settings (
  id TINYINT UNSIGNED NOT NULL AUTO_INCREMENT,
  company_name VARCHAR(180) NOT NULL,
  slogan VARCHAR(255) NULL,
  phone_office VARCHAR(30) NULL,
  phone_mobile VARCHAR(30) NULL,
  contact_email VARCHAR(120) NULL,
  website_url VARCHAR(255) NULL,
  address_line VARCHAR(255) NULL,
  city VARCHAR(120) NULL,
  state VARCHAR(120) NULL,
  postal_code VARCHAR(12) NULL,
  country VARCHAR(120) NULL DEFAULT 'México',
  options_json JSON NULL,
  created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  updated_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- =========================================================
-- 2) PÁGINAS (core)
-- =========================================================
DROP TABLE IF EXISTS pages;
CREATE TABLE pages (
  id CHAR(36) NOT NULL,
  slug VARCHAR(170) NOT NULL,
  title VARCHAR(190) NOT NULL,
  page_type ENUM('home','service','project','about','contact','blog','legal','landing') NOT NULL DEFAULT 'landing',
  site_mode ENUM('auto','pre','live','post') NOT NULL DEFAULT 'live',
  h1 VARCHAR(190) NULL,
  excerpt TEXT NULL,
  body LONGTEXT NULL,
  content_payload JSON NULL,
  is_visible TINYINT(1) NOT NULL DEFAULT 1,
  service_status ENUM('draft','active','suspended','archived') NOT NULL DEFAULT 'draft',
  published_at DATETIME NULL,
  created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  updated_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (id),
  UNIQUE KEY uq_pages_slug (slug),
  KEY idx_pages_type_status (page_type, service_status, is_visible)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- =========================================================
-- 3) SEO META 1:1 POR PÁGINA (core)
-- =========================================================
DROP TABLE IF EXISTS seo_meta;
CREATE TABLE seo_meta (
  id CHAR(36) NOT NULL,
  page_id CHAR(36) NOT NULL,
  meta_title VARCHAR(190) NOT NULL,
  meta_description VARCHAR(320) NOT NULL,
  canonical_url VARCHAR(255) NULL,
  robots VARCHAR(80) NOT NULL DEFAULT 'index,follow',
  og_title VARCHAR(190) NULL,
  og_description VARCHAR(320) NULL,
  og_image VARCHAR(255) NULL,
  og_type VARCHAR(40) NULL DEFAULT 'website',
  schema_type VARCHAR(80) NULL,
  schema_json JSON NULL,
  created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  updated_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (id),
  UNIQUE KEY uq_seo_meta_page_id (page_id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- =========================================================
-- 4) CATÁLOGOS (AUTO_INCREMENT)
-- =========================================================
DROP TABLE IF EXISTS categories;
CREATE TABLE categories (
  id INT UNSIGNED NOT NULL AUTO_INCREMENT,
  name VARCHAR(120) NOT NULL,
  slug VARCHAR(140) NOT NULL,
  description TEXT NULL,
  is_active TINYINT(1) NOT NULL DEFAULT 1,
  PRIMARY KEY (id),
  UNIQUE KEY uq_categories_slug (slug)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

DROP TABLE IF EXISTS technologies;
CREATE TABLE technologies (
  id INT UNSIGNED NOT NULL AUTO_INCREMENT,
  name VARCHAR(140) NOT NULL,
  tech_type VARCHAR(140) NULL,
  website_url VARCHAR(255) NULL,
  is_active TINYINT(1) NOT NULL DEFAULT 1,
  PRIMARY KEY (id),
  UNIQUE KEY uq_technologies_name (name)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

DROP TABLE IF EXISTS standards;
CREATE TABLE standards (
  id INT UNSIGNED NOT NULL AUTO_INCREMENT,
  code VARCHAR(30) NOT NULL,
  name VARCHAR(255) NULL,
  is_active TINYINT(1) NOT NULL DEFAULT 1,
  PRIMARY KEY (id),
  UNIQUE KEY uq_standards_code (code)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- =========================================================
-- 5) CLIENTES / SERVICIOS / PROYECTOS (core con UUID)
-- =========================================================
DROP TABLE IF EXISTS clients;
CREATE TABLE clients (
  id CHAR(36) NOT NULL,
  name VARCHAR(180) NOT NULL,
  slug VARCHAR(180) NULL,
  logo_path VARCHAR(255) NULL,
  website_url VARCHAR(255) NULL,
  is_featured TINYINT(1) NOT NULL DEFAULT 0,
  is_active TINYINT(1) NOT NULL DEFAULT 1,
  created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  updated_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (id),
  UNIQUE KEY uq_clients_slug (slug),
  KEY idx_clients_featured_active (is_featured, is_active)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

DROP TABLE IF EXISTS services;
CREATE TABLE services (
  id CHAR(36) NOT NULL,
  page_id CHAR(36) NULL,
  name VARCHAR(180) NOT NULL,
  slug VARCHAR(180) NOT NULL,
  short_description TEXT NULL,
  long_description LONGTEXT NULL,
  options_json JSON NULL,
  sort_order INT NOT NULL DEFAULT 0,
  is_visible TINYINT(1) NOT NULL DEFAULT 1,
  service_status ENUM('draft','active','suspended','archived') NOT NULL DEFAULT 'draft',
  created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  updated_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (id),
  UNIQUE KEY uq_services_slug (slug),
  KEY idx_services_page (page_id),
  KEY idx_services_status (service_status, is_visible, sort_order)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

DROP TABLE IF EXISTS projects;
CREATE TABLE projects (
  id CHAR(36) NOT NULL,
  page_id CHAR(36) NULL,
  client_id CHAR(36) NULL,
  category_id INT UNSIGNED NULL,
  slug VARCHAR(180) NOT NULL,
  name VARCHAR(220) NOT NULL,
  location_label VARCHAR(180) NULL,
  city VARCHAR(120) NULL,
  state VARCHAR(120) NULL,
  country VARCHAR(120) NULL DEFAULT 'México',
  area_m2 DECIMAL(12,2) NULL,
  year_executed YEAR NULL,
  short_description TEXT NULL,
  challenge_text TEXT NULL,
  solution_text TEXT NULL,
  result_text TEXT NULL,
  options_json JSON NULL,
  cover_image VARCHAR(255) NULL,
  is_featured TINYINT(1) NOT NULL DEFAULT 0,
  is_visible TINYINT(1) NOT NULL DEFAULT 1,
  service_status ENUM('draft','active','suspended','archived') NOT NULL DEFAULT 'draft',
  published_at DATETIME NULL,
  created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  updated_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (id),
  UNIQUE KEY uq_projects_slug (slug),
  KEY idx_projects_client (client_id),
  KEY idx_projects_category_status (category_id, service_status, is_visible),
  KEY idx_projects_page (page_id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- =========================================================
-- 6) N:N PARA REUSO
-- =========================================================
DROP TABLE IF EXISTS project_services;
CREATE TABLE project_services (
  id BIGINT UNSIGNED NOT NULL AUTO_INCREMENT,
  project_id CHAR(36) NOT NULL,
  service_id CHAR(36) NOT NULL,
  created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (id),
  UNIQUE KEY uq_project_services (project_id, service_id),
  KEY idx_ps_service_id (service_id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

DROP TABLE IF EXISTS project_technologies;
CREATE TABLE project_technologies (
  id BIGINT UNSIGNED NOT NULL AUTO_INCREMENT,
  project_id CHAR(36) NOT NULL,
  technology_id INT UNSIGNED NOT NULL,
  created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (id),
  UNIQUE KEY uq_project_technologies (project_id, technology_id),
  KEY idx_pt_technology_id (technology_id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

DROP TABLE IF EXISTS project_standards;
CREATE TABLE project_standards (
  id BIGINT UNSIGNED NOT NULL AUTO_INCREMENT,
  project_id CHAR(36) NOT NULL,
  standard_id INT UNSIGNED NOT NULL,
  created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (id),
  UNIQUE KEY uq_project_standards (project_id, standard_id),
  KEY idx_pst_standard_id (standard_id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- =========================================================
-- 7) MEDIA Y CONTENIDO MODULAR (core con UUID)
-- =========================================================
DROP TABLE IF EXISTS media_assets;
CREATE TABLE media_assets (
  id CHAR(36) NOT NULL,
  related_type ENUM('page','project','service','client') NOT NULL,
  related_id CHAR(36) NOT NULL,
  media_type ENUM('image','video','document') NOT NULL DEFAULT 'image',
  category VARCHAR(80) NULL,
  file_path VARCHAR(255) NOT NULL,
  alt_text VARCHAR(255) NULL,
  title VARCHAR(180) NULL,
  options_json JSON NULL,
  sort_order INT NOT NULL DEFAULT 0,
  is_primary TINYINT(1) NOT NULL DEFAULT 0,
  is_visible TINYINT(1) NOT NULL DEFAULT 1,
  created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  updated_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (id),
  KEY idx_media_related (related_type, related_id),
  KEY idx_media_category_order (category, sort_order)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

DROP TABLE IF EXISTS content_modules;
CREATE TABLE content_modules (
  id CHAR(36) NOT NULL,
  page_id CHAR(36) NOT NULL,
  module_key VARCHAR(120) NOT NULL,
  module_type ENUM('hero','text','faq','cta','gallery','stats','timeline','custom') NOT NULL,
  title VARCHAR(190) NULL,
  content_payload JSON NOT NULL,
  options_json JSON NULL,
  sort_order INT NOT NULL DEFAULT 0,
  is_enabled TINYINT(1) NOT NULL DEFAULT 1,
  created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  updated_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (id),
  UNIQUE KEY uq_content_modules_page_key (page_id, module_key),
  KEY idx_content_modules_page_order (page_id, sort_order, is_enabled)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- =========================================================
-- 8) FAQ Y REDIRECCIONES
-- =========================================================
DROP TABLE IF EXISTS faq_items;
CREATE TABLE faq_items (
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
  KEY idx_faq_page_order (page_id, sort_order, is_active),
  KEY idx_faq_global_order (is_global, sort_order, is_active)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

DROP TABLE IF EXISTS redirects;
CREATE TABLE redirects (
  id BIGINT UNSIGNED NOT NULL AUTO_INCREMENT,
  old_path VARCHAR(255) NOT NULL,
  new_path VARCHAR(255) NOT NULL,
  http_code SMALLINT NOT NULL DEFAULT 301,
  is_active TINYINT(1) NOT NULL DEFAULT 1,
  created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  updated_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (id),
  UNIQUE KEY uq_redirects_old_path (old_path),
  KEY idx_redirects_active_code (is_active, http_code)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- =========================================================
-- 9) LEADS + UTM (core con UUID)
-- =========================================================
DROP TABLE IF EXISTS leads;
CREATE TABLE leads (
  id CHAR(36) NOT NULL,
  full_name VARCHAR(180) NOT NULL,
  email VARCHAR(180) NULL,
  phone VARCHAR(30) NULL,
  message TEXT NULL,
  service_interest_id CHAR(36) NULL,
  project_interest_id CHAR(36) NULL,
  status ENUM('new','contacted','qualified','won','lost') NOT NULL DEFAULT 'new',
  utm_payload JSON NULL,
  options_json JSON NULL,
  is_active TINYINT(1) NOT NULL DEFAULT 1,
  created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  updated_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (id),
  KEY idx_leads_status_created (status, created_at),
  KEY idx_leads_service_id (service_interest_id),
  KEY idx_leads_project_id (project_interest_id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- =========================================================
-- RECOMENDACIÓN DE RUTAS SEO
-- home: /
-- servicios: /servicios/{slug}
-- proyectos: /proyectos/{slug}
-- categorías: /proyectos/categoria/{slug}
-- =========================================================
