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
    .service-hero-card { border: 1px solid rgba(244, 162, 97, .24); border-radius: 12px; padding: 1.5rem; background: rgba(9,6,16,.65); }
    .geo-fast-facts { border: 1px solid rgba(244, 162, 97, .26); border-radius: 12px; padding: 1rem; background: rgba(8, 6, 18, .72); }
    .geo-fast-facts ul { margin: 0; padding-left: 1rem; }
    .tech-pill { border: 1px solid rgba(244, 162, 97, .28); border-radius: 999px; padding: .5rem .9rem; display:inline-block; margin: .35rem .35rem 0 0; }
    .faq-panel details { border: 1px solid rgba(244, 162, 97, .2); border-radius: 10px; padding: .85rem 1rem; margin-bottom: .75rem; background: rgba(11, 7, 20, .65); }
    .faq-panel summary { cursor: pointer; font-weight: 600; }
    .sticky-cta { position: fixed; right: 1rem; bottom: 1rem; z-index: 99; }
</style>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<section class="rs-breadcrumb-area p-relative" style="padding: 120px 0 40px;">
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= base_url('/') ?>">Home</a></li>
                <li class="breadcrumb-item"><a href="<?= base_url('/#servicios') ?>">Servicios</a></li>
                <li class="breadcrumb-item active" aria-current="page"><?= esc($service['name']) ?></li>
            </ol>
        </nav>
    </div>
</section>

<section class="rs-services-area section-space-bottom">
    <div class="container">
        <div class="row g-4">
            <div class="col-xl-8">
                <article class="service-hero-card">
                    <header>
                        <h1 class="rs-section-title"><?= esc($service['name']) ?></h1>
                        <p><?= esc($service['short_description']) ?></p>
                    </header>

                    <section aria-labelledby="detalle-servicio-title">
                        <h2 id="detalle-servicio-title" class="h4">Alcance del servicio</h2>
                        <p><?= esc($service['long_description']) ?></p>
                    </section>

                    <section aria-labelledby="tecnologias-servicio-title" class="mt-4">
                        <h2 id="tecnologias-servicio-title" class="h4">Tecnologías que usamos</h2>
                        <?php if (! empty($technologies)): ?>
                            <?php foreach ($technologies as $technology): ?>
                                <span class="tech-pill"><?= esc($technology['name']) ?></span>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <p>Próximamente agregaremos más tecnologías vinculadas a este servicio.</p>
                        <?php endif; ?>
                    </section>
                </article>
            </div>

            <div class="col-xl-4">
                <aside class="geo-fast-facts" aria-labelledby="fast-facts-title">
                    <h2 id="fast-facts-title" class="h5 rs-section-title">Fast Facts</h2>
                    <ul>
                        <li><strong>Normas:</strong> AISC, AWS, IMCA</li>
                        <li><strong>Software:</strong> TEKLA, CYPE CAD, ETABS</li>
                        <li><strong>Ubicación:</strong> Monterrey, Nuevo León</li>
                        <li><strong>Cobertura:</strong> Proyectos industriales, comerciales y residenciales</li>
                    </ul>
                </aside>
            </div>
        </div>

        <section class="faq-panel mt-4" aria-labelledby="faq-title">
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

<a class="rs-btn has-theme-orange has-icon has-bg sticky-cta" href="<?= base_url('/#contacto') ?>">
    Cotizar Proyecto
    <span class="icon-box">
        <svg class="icon-first" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"><path d="M31.71,15.29l-10-10L20.29,6.71,28.59,15H0v2H28.59l-8.29,8.29,1.41,1.41,10-10A1,1,0,0,0,31.71,15.29Z"></path></svg>
        <svg class="icon-second" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"><path d="M31.71,15.29l-10-10L20.29,6.71,28.59,15H0v2H28.59l-8.29,8.29,1.41,1.41,10-10A1,1,0,0,0,31.71,15.29Z"></path></svg>
    </span>
</a>
<?= $this->endSection() ?>
