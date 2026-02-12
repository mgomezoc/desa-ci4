# AUDIT_HOME

## a) Outline del PDF (secciones/títulos en orden)
1. Introducción (01)
   - Somos una empresa formada por Ingenieros y Arquitectos con más de 20 años de experiencia.
   - Desarrollamos Ingenierías de valor para proyectos del tipo Industrial, Comercial y Residencial.
2. Objetivos y Filosofía (02)
   - Crecimiento ordenado y mejora continua.
   - Respaldo en control, tiempo, costo y calidad.
   - Ofrecer un paquete para realizar proyectos en todas las fases.
   - Fomentar actitud y disponibilidad del personal.
   - Organización para ofrecer soluciones a requerimientos encomendados.
   - Aplicación de tecnología avanzada.
3. Nuestros Servicios (03)
   - Ingenierías preliminares.
   - Ingeniería estructural.
   - Arquitectura.
   - Ingeniería eléctrica.
   - Ingeniería hidrosanitaria.
4. Especificaciones y Normas (04)
   - ASCE, AASHTO, AISI, AISC, MBMA, FM GLOBAL, IMCA, UBC, AWS, SJI, ACI, PCA, NTC, reglamentos locales y de mayor uso nacional/internacional.
5. Tecnología Aplicada (05)
   - CypeCAD, TEKLA Structures, REVIT, escáner láser 3D.
6. Proyectos (06)
   - Portafolio de proyectos industriales/comerciales/residenciales del PDF.
7. Clientes (07)
   - Relación de clientes mostrados en el PDF.
8. Contacto (08)
   - Calle: Av. Miguel Alemán #106-1, Col. Libertad, Guadalupe, Nuevo León, C.P. 67130.
   - Oficina: 81 31 43 62 92
   - Celular: 81 15 45 04 26
   - Correo: proyectos@desaingenieria.com
   - Sitio: www.desaingenieria.com

## b) Mapeo “Sección PDF -> Sección/ID en HOME”
- Introducción (01) -> `#inicio`
- Objetivos y Filosofía (02) -> `#nosotros`
- Nuestros Servicios (03) -> `#servicios`
- Especificaciones y Normas (04) -> bloque “Especificaciones y Normas” en HOME
- Tecnología Aplicada (05) -> bloque “Tecnología Aplicada” en HOME
- Proyectos (06) -> `#portafolio`
- Clientes (07) -> bloque “Clientes” en HOME
- Contacto (08) -> `#contacto`

## c) Checklist de cobertura
- [x] Introducción (01)
- [x] Objetivos y Filosofía (02)
- [x] Nuestros Servicios (03)
- [x] Especificaciones y Normas (04)
- [x] Tecnología Aplicada (05)
- [x] Proyectos (06)
- [x] Clientes (07)
- [x] Contacto (08)
- [x] Menú y anclas de HOME alineados con secciones reales
- [x] Slider con imágenes (sin video)
- [x] Formulario de contacto con validación server-side
- [x] Envío SMTP reutilizando configuración de CI4 (`service('email')`), con To/CC/Subject solicitados
