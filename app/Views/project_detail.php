<?= $this->extend('layouts/main') ?>

<?= $this->section('styles') ?>
<style>
    .project-breadcrumb-fix { padding-top: 140px; }
    .rs-portfolio-details-thumb img { width: 100%; height: 420px; object-fit: cover; }
    .rs-sidebar-wrapper .sidebar-widget-client-item { display: flex; gap: 14px; margin-bottom: 16px; }
    .rs-sidebar-wrapper .sidebar-widget-icon { width: 32px; }
    .related-project-thumb img { width: 100%; height: 180px; object-fit: cover; }
    .sidebar-project-list li.active a { color: #ea5501; }
</style>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<!-- breadcrumb area start -->
<section class="rs-breadcrumb-area rs-breadcrumb-one p-relative project-breadcrumb-fix">
    <div class="rs-breadcrumb-bg" data-background="<?= base_url('assets/images/bg/breadcrumb-bg-01.png') ?>"></div>
    <div class="container">
        <div class="row">
            <div class="col-xxl-6 col-xl-8 col-lg-8">
                <div class="rs-breadcrumb-content-wrapper">
                    <div class="rs-breadcrumb-title-wrapper">
                        <h1 class="rs-breadcrumb-title"><?= esc($project['name']) ?></h1>
                    </div>
                    <div class="rs-breadcrumb-menu">
                        <nav>
                            <ul>
                                <li><span><a href="<?= base_url('/') ?>">Inicio</a></span></li>
                                <li><span><a href="<?= base_url('/proyectos') ?>">Proyectos</a></span></li>
                                <li><span>Detalle del proyecto</span></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb area end -->

<!-- portfolio area start -->
<section class="rs-portfolio-area section-space">
    <div class="container">
        <div class="row g-5">
            <div class="col-xl-8 col-lg-8">
                <div class="rs-portfolio-details-wrapper">
                    <div class="rs-portfolio-details-thumb mb-40">
                        <img src="<?= esc($project['primary_image_url'] ?? base_url('assets/images/portfolio/details/portfolio-details-thumb-01.png'), 'attr') ?>" alt="<?= esc($project['name']) ?>">
                    </div>
                    <div class="rs-portfolio-details-content">
                        <h3 class="rs-portfolio-details-title"><?= esc($project['name']) ?></h3>
                        <p class="description"><?= esc($project['short_description'] ?? '') ?></p>
                        <p>Proyecto desarrollado por DESA Ingeniería con enfoque en planeación, ingeniería de detalle y control de calidad durante cada etapa.</p>


                        <h3 class="rs-portfolio-details-title">Características del proyecto</h3>
                        <p class="mb-20 mt-15">Características principales implementadas durante la ejecución.</p>
                        <div class="rs-portfolio-details-feature-list mb-40">
                            <div class="rs-list-item has-theme-orange">
                                <ul>
                                    <?php if (! empty($technologies)): ?>
                                        <?php foreach ($technologies as $technology): ?>
                                            <li>
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12C22 17.5228 17.5228 22 12 22ZM12 20C16.4183 20 20 16.4183 20 12C20 7.58172 16.4183 4 12 4C7.58172 4 4 7.58172 4 12C4 16.4183 7.58172 20 12 20ZM11.0026 16L6.75999 11.7574L8.17421 10.3431L11.0026 13.1716L16.6595 7.51472L18.0737 8.92893L11.0026 16Z"></path></svg>
                                                <?= esc($technology['name']) ?>
                                            </li>
                                        <?php endforeach; ?>
                                    <?php else: ?>
                                        <li><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12C22 17.5228 17.5228 22 12 22ZM12 20C16.4183 20 20 16.4183 20 12C20 7.58172 16.4183 4 12 4C7.58172 4 4 7.58172 4 12C4 16.4183 7.58172 20 12 20ZM11.0026 16L6.75999 11.7574L8.17421 10.3431L11.0026 13.1716L16.6595 7.51472L18.0737 8.92893L11.0026 16Z"></path></svg>Documentación técnica completa</li>
                                        <li><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12C22 17.5228 17.5228 22 12 22ZM12 20C16.4183 20 20 16.4183 20 12C20 7.58172 16.4183 4 12 4C7.58172 4 4 7.58172 4 12C4 16.4183 7.58172 20 12 20ZM11.0026 16L6.75999 11.7574L8.17421 10.3431L11.0026 13.1716L16.6595 7.51472L18.0737 8.92893L11.0026 16Z"></path></svg>Sistema de control de calidad</li>
                                    <?php endif; ?>
                                </ul>
                            </div>
                        </div>


                        <?php if (! empty($project['gallery_image_urls'])): ?>
                            <h3 class="rs-portfolio-details-title">Galería del proyecto</h3>
                            <div class="portfolio-details-thumb-wrapper mb-30">
                                <div class="row g-4">
                                    <?php foreach (array_slice($project['gallery_image_urls'], 0, 6) as $galleryImage): ?>
                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                                            <div class="rs-portfolio-details-thumb related-project-thumb">
                                                <img src="<?= esc($galleryImage, 'attr') ?>" alt="<?= esc($project['name']) ?>">
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        <?php endif; ?>

                        <?php if (! empty($relatedProjects)): ?>
                            <div class="portfolio-details-thumb-wrapper mb-30">
                                <div class="row g-5">
                                    <?php foreach (array_slice($relatedProjects, 0, 2) as $related): ?>
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                            <div class="rs-portfolio-details-thumb related-project-thumb">
                                                <a href="<?= base_url('/proyectos/' . $related['slug']) ?>">
                                                    <img src="<?= esc($related['primary_image_url'] ?? base_url('assets/images/portfolio/details/portfolio-details-thumb-02.png'), 'attr') ?>" alt="<?= esc($related['name']) ?>">
                                                </a>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        <?php endif; ?>

                        <p>Proyecto ubicado en <?= esc(trim(($project['city'] ?? '') . ', ' . ($project['state'] ?? ''), ', ') ?: 'N/D') ?>, ejecutado con enfoque en tiempos, costo y calidad.</p>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-lg-4">
                <div class="rs-sidebar-wrapper rs-sidebar-sticky">
                    <div class="sidebar-widget widget-project mb-30">
                        <h5 class="sidebar-widget-title">Información del proyecto</h5>
                        <p class="mb-0">Resumen técnico y comercial del proyecto.</p>
                        <div class="sidebar-widget-client-wrapper">
                            <div class="sidebar-widget-client-item">
                                <div class="sidebar-widget-icon"><i class="ri-user-line"></i></div>
                                <div class="sidebar-widget-info"><span>Cliente</span><h6><?= esc($project['client_name'] ?? 'N/D') ?></h6></div>
                            </div>
                            <div class="sidebar-widget-client-item">
                                <div class="sidebar-widget-icon"><i class="ri-price-tag-3-line"></i></div>
                                <div class="sidebar-widget-info"><span>Categoría</span><h6><?= esc($project['category_name'] ?? 'N/D') ?></h6></div>
                            </div>
                            <div class="sidebar-widget-client-item">
                                <div class="sidebar-widget-icon"><i class="ri-map-pin-line"></i></div>
                                <div class="sidebar-widget-info"><span>Ubicación</span><h6><?= esc(trim(($project['city'] ?? '') . ', ' . ($project['state'] ?? ''), ', ') ?: 'N/D') ?></h6></div>
                            </div>
                            <div class="sidebar-widget-client-item">
                                <div class="sidebar-widget-icon"><i class="ri-ruler-line"></i></div>
                                <div class="sidebar-widget-info"><span>Área</span><h6><?= $project['area_m2'] ? number_format((float) $project['area_m2'], 0) . ' m²' : 'N/D' ?></h6></div>
                            </div>
                        </div>
                    </div>

                    <div class="sidebar-widget widget-categories-two has-content-none mb-30">
                        <h5 class="mb-25 sidebar-widget-title">Otros Proyectos</h5>
                        <ul class="sidebar-project-list">
                            <?php foreach ($projects as $sidebarProject): ?>
                                <li class="<?= $sidebarProject['slug'] === $project['slug'] ? 'active' : '' ?>">
                                    <a href="<?= base_url('/proyectos/' . $sidebarProject['slug']) ?>">
                                        <?= esc($sidebarProject['name']) ?>
                                        <i class="ri-arrow-right-line"></i>
                                    </a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>

                    <div class="sidebar-widget widget-cta mb-30">
                        <div class="sidebar-widget-cta-thumb" data-background="<?= base_url('assets/images/bg/cta-bg-09.png') ?>"></div>
                        <div class="sidebar-widget-content">
                            <h3 class="sidebar-widget-title has-large has-border">¿Tienes un <br> proyecto en <br> mente?</h3>
                            <div class="sidebar-widget-btn">
                                <a class="rs-btn has-theme-orange has-icon has-bg" href="<?= base_url('/#contacto') ?>">Hablemos
                                    <span class="icon-box">
                                        <svg class="icon-first" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"><path d="M31.71,15.29l-10-10L20.29,6.71,28.59,15H0v2H28.59l-8.29,8.29,1.41,1.41,10-10A1,1,0,0,0,31.71,15.29Z"></path></svg>
                                        <svg class="icon-second" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"><path d="M31.71,15.29l-10-10L20.29,6.71,28.59,15H0v2H28.59l-8.29,8.29,1.41,1.41,10-10A1,1,0,0,0,31.71,15.29Z"></path></svg>
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
<!-- portfolio area end -->
<?= $this->endSection() ?>
