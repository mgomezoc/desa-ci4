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

    .rs-services-three .rs-services-thumb img {
        width: 100%;
        height: 220px;
        object-fit: cover;
        border-radius: 8px 8px 0 0;
    }

    .rs-services-three .rs-services-item {
        height: 100%;
    }

    .geo-fast-facts {
        border: 1px solid rgba(244, 162, 97, .26);
        border-radius: 12px;
        padding: 20px;
        background: rgba(8, 6, 18, .72);
    }

    .geo-fast-facts ul {
        margin: 0;
        padding-left: 18px;
    }

    .faq-panel details {
        border: 1px solid rgba(244, 162, 97, .2);
        border-radius: 10px;
        padding: .85rem 1rem;
        margin-bottom: .75rem;
        background: rgba(11, 7, 20, .65);
    }

    .faq-panel summary {
        cursor: pointer;
        font-weight: 600;
    }

    .sticky-cta {
        position: fixed;
        right: 1rem;
        bottom: 1rem;
        z-index: 99;
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
                                <li><span><a href="<?= base_url('/') ?>">Home</a></span></li>
                                <li><span><a href="<?= base_url('/servicios/ingenieria-estructural') ?>">Servicios</a></span></li>
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

<!-- services area start -->
<section class="rs-services-area rs-services-three section-space has-theme-orange">
    <div class="container">
        <div class="row g-5">
            <div class="col-xl-8">
                <div class="rs-services-wrapper">
                    <div class="rs-services-item">
                        <div class="rs-services-thumb">
                            <img src="<?= base_url('assets/images/services/services-thumb-02.png') ?>" alt="<?= esc($service['name']) ?>">
                        </div>
                        <div class="rs-services-content">
                            <h5 class="rs-services-title"><?= esc($service['name']) ?></h5>
                            <p class="descrip"><?= esc($service['short_description']) ?></p>
                            <p class="descrip"><?= esc($service['long_description']) ?></p>
                            <div class="rs-services-number"></div>
                            <div class="rs-services-btn-wrapper">
                                <div class="rs-services-text-btn underline">
                                    <a class="rs-text-btn" href="<?= base_url('/#contacto') ?>">Solicitar cotización</a>
                                </div>
                                <a class="rs-square-btn has-icon has-light-bg" href="<?= base_url('/#contacto') ?>" aria-label="Cotizar <?= esc($service['name']) ?>">
                                    <span class="icon-box">
                                        <svg class="icon-first" xmlns="http://www.w3.org/2000/svg" width="12" height="10" viewBox="0 0 12 10" fill="none"><path fill-rule="evenodd" clip-rule="evenodd" d="M0 5C0 4.60551 0.319797 4.28571 0.714286 4.28571L8.98985 4.28571L5.92349 1.21936C5.64455 0.940417 5.64455 0.488155 5.92349 0.209209C6.20244 -0.0697365 6.6547 -0.0697365 6.93365 0.209209L11.2194 4.49492C11.4983 4.77387 11.4983 5.22613 11.2194 5.50508L6.93365 9.79079C6.6547 10.0697 6.20244 10.0697 5.92349 9.79079C5.64455 9.51184 5.64455 9.05958 5.92349 8.78064L8.98985 5.71429L0.714286 5.71429C0.319797 5.71429 0 5.39449 0 5Z" fill="#616161"></path></svg>
                                        <svg class="icon-second" xmlns="http://www.w3.org/2000/svg" width="12" height="10" viewBox="0 0 12 10" fill="none"><path fill-rule="evenodd" clip-rule="evenodd" d="M0 5C0 4.60551 0.319797 4.28571 0.714286 4.28571L8.98985 4.28571L5.92349 1.21936C5.64455 0.940417 5.64455 0.488155 5.92349 0.209209C6.20244 -0.0697365 6.6547 -0.0697365 6.93365 0.209209L11.2194 4.49492C11.4983 4.77387 11.4983 5.22613 11.2194 5.50508L6.93365 9.79079C6.6547 10.0697 6.20244 10.0697 5.92349 9.79079C5.64455 9.51184 5.64455 9.05958 5.92349 8.78064L8.98985 5.71429L0.714286 5.71429C0.319797 5.71429 0 5.39449 0 5Z" fill="#616161"></path></svg>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-4">
                <aside class="geo-fast-facts" aria-labelledby="fast-facts-title">
                    <h5 id="fast-facts-title" class="rs-services-title">Fast Facts</h5>
                    <ul>
                        <li><strong>Normas:</strong> AISC, AWS, IMCA</li>
                        <li><strong>Software:</strong> TEKLA, CYPE CAD, ETABS</li>
                        <li><strong>Ubicación:</strong> Monterrey, Nuevo León</li>
                        <li><strong>Cobertura:</strong> Proyectos industriales, comerciales y residenciales</li>
                    </ul>
                </aside>
            </div>
        </div>

        <?php if (! empty($technologies)): ?>
            <div class="row g-4 mt-4 process-counts">
                <?php foreach ($technologies as $technology): ?>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="rs-services-wrapper">
                            <div class="rs-services-item">
                                <div class="rs-services-thumb">
                                    <img src="<?= base_url($technology['logo_path'] ?: 'assets/images/services/services-thumb-08.png') ?>" alt="<?= esc($technology['name']) ?>">
                                </div>
                                <div class="rs-services-content">
                                    <h5 class="rs-services-title"><?= esc($technology['name']) ?></h5>
                                    <p class="descrip"><?= esc($technology['slug'] ?? 'Tecnología aplicada') ?></p>
                                    <div class="rs-services-number"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>

        <section class="faq-panel mt-5" aria-labelledby="faq-title">
            <h2 id="faq-title" class="rs-section-title">Preguntas frecuentes</h2>
            <?php if (! empty($faqs)): ?>
                <?php foreach ($faqs as $faq): ?>
                    <details>
                        <summary><?= esc($faq['question']) ?></summary>
                        <p class="mt-2 mb-0"><?= esc($faq['answer']) ?></p>
                    </details>
                <?php endforeach; ?>
            <?php else: ?>
                <p>Actualmente no hay preguntas frecuentes configuradas para este servicio.</p>
            <?php endif; ?>
        </section>
    </div>
</section>
<!-- services area end -->

<a class="rs-btn has-theme-orange has-icon has-bg sticky-cta" href="<?= base_url('/#contacto') ?>">
    Cotizar Proyecto
    <span class="icon-box">
        <svg class="icon-first" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"><path d="M31.71,15.29l-10-10L20.29,6.71,28.59,15H0v2H28.59l-8.29,8.29,1.41,1.41,10-10A1,1,0,0,0,31.71,15.29Z"></path></svg>
        <svg class="icon-second" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"><path d="M31.71,15.29l-10-10L20.29,6.71,28.59,15H0v2H28.59l-8.29,8.29,1.41,1.41,10-10A1,1,0,0,0,31.71,15.29Z"></path></svg>
    </span>
</a>

<?= $this->endSection() ?>
