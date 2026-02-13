<?= $this->extend('layouts/main') ?>

<?= $this->section('head') ?>
<link rel="canonical" href="<?= base_url('servicios/' . $service['slug']) ?>">
<?php if (! empty($seo['schema_json'])): ?>
    <script type="application/ld+json">
        <?= is_string($seo['schema_json']) ? trim($seo['schema_json']) : '' ?>
    </script>
<?php endif; ?>
<?= $this->endSection() ?>

<?= $this->section('styles') ?>
<style>
    .service-breadcrumb-fix {
        padding-top: 140px;
    }

    .rs-services-details-thumb img {
        width: 100%;
        height: 420px;
        object-fit: cover;
    }

    .rs-services-details-video .rs-video-bg-thumb {
        min-height: 280px;
    }

    .rs-services-details-faq .accordion-body {
        color: #616161;
    }

    .sidebar-widget.widget-categories-two ul li.active a {
        color: #ea5501;
    }

    .service-cta-thumb img {
        max-width: 260px;
        width: 100%;
    }
</style>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<!-- breadcrumb area start -->
<section class="rs-breadcrumb-area rs-breadcrumb-one p-relative service-breadcrumb-fix">
    <div class="rs-breadcrumb-bg" data-background="<?= base_url('assets/images/bg/breadcrumb-bg-01.png') ?>"></div>
    <div class="container">
        <div class="row">
            <div class="col-xxl-6 col-xl-8 col-lg-8">
                <div class="rs-breadcrumb-content-wrapper">
                    <div class="rs-breadcrumb-title-wrapper">
                        <h1 class="rs-breadcrumb-title"><?= esc($service['name']) ?></h1>
                    </div>
                    <div class="rs-breadcrumb-menu">
                        <nav>
                            <ul>
                                <li><span><a href="<?= base_url('/') ?>">Inicio</a></span></li>
                                <li><span><a href="<?= base_url('/servicios') ?>">Servicios</a></span></li>
                                <li><span><?= esc($service['name']) ?></span></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb area end -->

<!-- services details area start -->
<section class="rs-services-area section-space">
    <div class="container">
        <div class="row g-5">
            <div class="col-xl-8 col-lg-8">
                <div class="rs-services-details-wrapper">
                    <div class="rs-services-details-thumb">
                        <img src="<?= base_url('assets/images/services/details/services-details-01.png') ?>" alt="<?= esc($service['name']) ?>">
                    </div>
                    <h3 class="rs-services-details-title"><?= esc($service['name']) ?></h3>
                    <p class="mb-25 mt-15"><strong><?= esc($service['short_description'] ?? '') ?></strong></p>
                    <p><?= esc($service['long_description'] ?? '') ?></p>

                    <h3 class="rs-services-details-title">Planificación y Estrategia</h3>
                    <p class="mt-20 mb-20">Aplicamos procesos de ingeniería orientados a resultados, control de calidad y cumplimiento normativo.</p>

                    <div class="rs-services-details-feature-list">
                        <div class="rs-list-item has-theme-orange">
                            <ul>
                                <?php if (! empty($technologies)): ?>
                                    <?php foreach ($technologies as $technology): ?>
                                        <li>
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                                                <path d="M12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12C22 17.5228 17.5228 22 12 22ZM12 20C16.4183 20 20 16.4183 20 12C20 7.58172 16.4183 4 12 4C7.58172 4 4 7.58172 4 12C4 16.4183 7.58172 20 12 20ZM11.0026 16L6.75999 11.7574L8.17421 10.3431L11.0026 13.1716L16.6595 7.51472L18.0737 8.92893L11.0026 16Z"></path>
                                            </svg>
                                            <?= esc($technology['name']) ?>
                                        </li>
                                    <?php endforeach; ?>
                                <?php else: ?>
                                    <li><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                                            <path d="M12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12C22 17.5228 17.5228 22 12 22ZM12 20C16.4183 20 20 16.4183 20 12C20 7.58172 16.4183 4 12 4C7.58172 4 4 7.58172 4 12C4 16.4183 7.58172 20 12 20ZM11.0026 16L6.75999 11.7574L8.17421 10.3431L11.0026 13.1716L16.6595 7.51472L18.0737 8.92893L11.0026 16Z"></path>
                                        </svg>Planeación técnica y documentación de proyecto</li>
                                    <li><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                                            <path d="M12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12C22 17.5228 17.5228 22 12 22ZM12 20C16.4183 20 20 16.4183 20 12C20 7.58172 16.4183 4 12 4C7.58172 4 4 7.58172 4 12C4 16.4183 7.58172 20 12 20ZM11.0026 16L6.75999 11.7574L8.17421 10.3431L11.0026 13.1716L16.6595 7.51472L18.0737 8.92893L11.0026 16Z"></path>
                                        </svg>Control de calidad y cumplimiento normativo</li>
                                <?php endif; ?>
                            </ul>
                        </div>
                    </div>

                    <p class="mb-20">Diseñamos soluciones integrales para proyectos industriales, comerciales y residenciales, priorizando seguridad, funcionalidad y tiempos de ejecución.</p>
                    <h3 class="rs-services-details-title mb-15">¿Tienes preguntas?</h3>
                    <p>Revisa las preguntas frecuentes relacionadas con este servicio.</p>

                    <div class="rs-services-details-faq">
                        <div class="rs-faq-content rs-accordion-one">
                            <div class="accordion-wrapper">
                                <div class="accordion" id="accordionServiceFaq">
                                    <?php if (! empty($faqs)): ?>
                                        <?php foreach ($faqs as $index => $faq): ?>
                                            <?php $itemId = 'faq-' . ($index + 1); ?>
                                            <div class="rs-accordion-item">
                                                <h6 class="accordion-header" id="heading-<?= esc($itemId) ?>">
                                                    <button class="accordion-button <?= $index > 0 ? 'collapsed' : '' ?>" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-<?= esc($itemId) ?>" aria-expanded="<?= $index === 0 ? 'true' : 'false' ?>" aria-controls="collapse-<?= esc($itemId) ?>">
                                                        <?= str_pad((string) ($index + 1), 2, '0', STR_PAD_LEFT) ?>. <?= esc($faq['question']) ?>
                                                        <span class="accordion-btn"></span>
                                                    </button>
                                                </h6>
                                                <div id="collapse-<?= esc($itemId) ?>" class="accordion-collapse collapse <?= $index === 0 ? 'show' : '' ?>" data-bs-parent="#accordionServiceFaq">
                                                    <div class="accordion-body"><?= esc($faq['answer']) ?></div>
                                                </div>
                                            </div>
                                        <?php endforeach; ?>
                                    <?php else: ?>
                                        <p>Actualmente no hay preguntas frecuentes configuradas para este servicio.</p>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="rs-services-details-cta mt-4">
                        <div class="rs-services-details-cta-bg-thumb" data-background="<?= base_url('assets/images/bg/cta-bg-08.png') ?>"></div>
                        <div class="rs-services-details-cta-content">
                            <h3 class="rs-services-details-title mb-40">Estamos listos para ayudarte con tu proyecto</h3>
                            <div class="rs-services-details-btn">
                                <a class="rs-btn has-theme-orange has-icon has-bg" href="<?= base_url('/#contacto') ?>">Explorar más
                                    <span class="icon-box">
                                        <svg class="icon-first" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                                            <path d="M31.71,15.29l-10-10L20.29,6.71,28.59,15H0v2H28.59l-8.29,8.29,1.41,1.41,10-10A1,1,0,0,0,31.71,15.29Z"></path>
                                        </svg>
                                        <svg class="icon-second" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                                            <path d="M31.71,15.29l-10-10L20.29,6.71,28.59,15H0v2H28.59l-8.29,8.29,1.41,1.41,10-10A1,1,0,0,0,31.71,15.29Z"></path>
                                        </svg>
                                    </span>
                                </a>
                            </div>
                        </div>
                        <div class="rs-services-details-cta-thumb service-cta-thumb">
                            <img src="<?= base_url('assets/images/services/details/services-details-02.png') ?>" alt="CTA servicio">
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-lg-4">
                <div class="rs-sidebar-wrapper rs-sidebar-sticky">
                    <div class="sidebar-widget widget-categories-two has-content-none mb-30">
                        <h5 class="mb-25 sidebar-widget-title">Nuestros Servicios</h5>
                        <ul>
                            <?php foreach ($services as $sidebarService): ?>
                                <li class="<?= $sidebarService['slug'] === $service['slug'] ? 'active' : '' ?>">
                                    <a href="<?= base_url('/servicios/' . $sidebarService['slug']) ?>">
                                        <?= esc($sidebarService['name']) ?>
                                        <i class="ri-arrow-right-line"></i>
                                    </a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>

                    <div class="sidebar-widget widget-cta mb-30">
                        <div class="sidebar-widget-cta-thumb" data-background="<?= base_url('assets/images/bg/cta-bg-09.png') ?>"></div>
                        <div class="sidebar-widget-content">
                            <h3 class="sidebar-widget-title has-large has-border">¿Tienes un<br>proyecto en<br>mente?</h3>
                            <div class="sidebar-widget-btn">
                                <a class="rs-btn has-theme-orange has-icon has-bg" href="<?= base_url('/#contacto') ?>">Hablemos
                                    <span class="icon-box">
                                        <svg class="icon-first" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                                            <path d="M31.71,15.29l-10-10L20.29,6.71,28.59,15H0v2H28.59l-8.29,8.29,1.41,1.41,10-10A1,1,0,0,0,31.71,15.29Z"></path>
                                        </svg>
                                        <svg class="icon-second" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                                            <path d="M31.71,15.29l-10-10L20.29,6.71,28.59,15H0v2H28.59l-8.29,8.29,1.41,1.41,10-10A1,1,0,0,0,31.71,15.29Z"></path>
                                        </svg>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- services details area end -->
<?= $this->endSection() ?>