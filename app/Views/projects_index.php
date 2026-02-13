<?= $this->extend('layouts/main') ?>

<?= $this->section('styles') ?>
<style>
    .projects-breadcrumb-fix {
        padding-top: 150px;
    }

    .projects-filter-wrap {
        display: flex;
        flex-wrap: wrap;
        gap: 8px;
        margin-bottom: 20px;
    }

    .projects-filter-wrap .rs-btn {
        min-height: 44px;
        padding: 0 18px;
        line-height: 44px;
    }

    .rs-portfolio-six .rs-portfolio-thumb {
        min-height: 250px;
        background-size: cover;
        background-position: center;
        border-radius: 8px 8px 0 0;
    }

    .rs-portfolio-six .rs-portfolio-content {
        background: #262631;
        border-radius: 0 0 8px 8px;
        padding: 18px;
    }

    .rs-portfolio-six .rs-portfolio-title {
        margin-bottom: 8px;
    }

    .rs-portfolio-meta {
        color: rgba(255, 255, 255, 0.75);
        font-size: 13px;
        line-height: 1.6;
        margin-bottom: 12px;
    }

    .rs-portfolio-tag span {
        display: inline-block;
        margin-right: 8px;
        margin-bottom: 8px;
        padding: 4px 10px;
        border: 1px solid rgba(255,255,255,.18);
        border-radius: 999px;
        font-size: 12px;
        color: #fff;
    }
</style>
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<!-- breadcrumb area start -->
<section class="rs-breadcrumb-area rs-breadcrumb-one p-relative projects-breadcrumb-fix">
    <div class="rs-breadcrumb-bg" data-background="<?= base_url('assets/images/bg/breadcrumb-bg-01.png') ?>"></div>
    <div class="container">
        <div class="row">
            <div class="col-xxl-6 col-xl-8 col-lg-8">
                <div class="rs-breadcrumb-content-wrapper">
                    <div class="rs-breadcrumb-title-wrapper">
                        <h1 class="rs-breadcrumb-title">Proyectos de Ingeniería</h1>
                    </div>
                    <div class="rs-breadcrumb-menu">
                        <nav>
                            <ul>
                                <li><span><a href="<?= base_url('/') ?>">Home</a></span></li>
                                <li><span>Proyectos</span></li>
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
<section class="rs-portfolio-area rs-portfolio-six section-space has-theme-orange">
    <div class="container">
        <p class="mb-3">Explora nuestro portafolio filtrando por categoría.</p>

        <nav class="projects-filter-wrap" aria-label="Filtros de categoría">
            <a class="rs-btn has-theme-orange <?= $active_category ? '' : 'has-bg' ?>" href="<?= base_url('/proyectos') ?>">Todos</a>
            <?php foreach ($categories as $category): ?>
                <a class="rs-btn has-theme-orange <?= (int) $active_category === (int) $category['id'] ? 'has-bg' : '' ?>" href="<?= base_url('/proyectos?category_id=' . $category['id']) ?>">
                    <?= esc($category['name']) ?>
                </a>
            <?php endforeach; ?>
        </nav>

        <div class="row g-5 process-counts">
            <?php foreach ($projects as $index => $project): ?>
                <?php
                    $cover = $project['primary_image_url'] ?? base_url('assets/images/portfolio/portfolio-thumb-41.png');
                    $delay = ltrim(number_format(0.3 + (($index % 8) * 0.1), 1), '0');
                    $location = trim(($project['city'] ?? '') . ', ' . ($project['state'] ?? ''), ', ');
                ?>
                <div class="col-xl-6 col-lg-6 col-md-6">
                    <div class="rs-portfolio-item wow fadeInUp" data-wow-delay="<?= $delay ?>s" data-wow-duration="1s">
                        <div class="rs-portfolio-thumb" data-background="<?= esc($cover, 'attr') ?>"></div>
                        <div class="rs-portfolio-content">
                            <div class="rs-portfolio-number"></div>
                            <h5 class="rs-portfolio-title">
                                <a href="<?= base_url('/proyectos/' . $project['slug']) ?>"><?= esc($project['name']) ?></a>
                            </h5>

                            <div class="rs-portfolio-meta">
                                <div><strong>Cliente:</strong> <?= esc($project['client_name'] ?? 'N/D') ?></div>
                                <div><strong>Área:</strong> <?= $project['area_m2'] ? number_format((float) $project['area_m2'], 0) . ' m²' : 'N/D' ?></div>
                                <div><strong>Ubicación:</strong> <?= esc($location ?: 'N/D') ?></div>
                            </div>

                            <div class="rs-portfolio-tag">
                                <span><?= esc($project['category_name'] ?? 'Proyecto') ?></span>
                            </div>

                            <div class="rs-services-btn-wrapper">
                                <div class="rs-portfolio-text-btn">
                                    <a class="rs-text-btn" href="<?= base_url('/proyectos/' . $project['slug']) ?>">View Details</a>
                                </div>
                                <a class="rs-square-btn has-icon" href="<?= base_url('/proyectos/' . $project['slug']) ?>" aria-label="Ver detalles de <?= esc($project['name']) ?>">
                                    <span class="icon-box">
                                        <svg class="icon-first" xmlns="http://www.w3.org/2000/svg" width="12" height="10" viewBox="0 0 12 10" fill="none">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M0 5C0 4.60551 0.319797 4.28571 0.714286 4.28571L8.98985 4.28571L5.92349 1.21936C5.64455 0.940417 5.64455 0.488155 5.92349 0.209209C6.20244 -0.0697365 6.6547 -0.0697365 6.93365 0.209209L11.2194 4.49492C11.4983 4.77387 11.4983 5.22613 11.2194 5.50508L6.93365 9.79079C6.6547 10.0697 6.20244 10.0697 5.92349 9.79079C5.64455 9.51184 5.64455 9.05958 5.92349 8.78064L8.98985 5.71429L0.714286 5.71429C0.319797 5.71429 0 5.39449 0 5Z" fill="#616161"></path>
                                        </svg>
                                        <svg class="icon-second" xmlns="http://www.w3.org/2000/svg" width="12" height="10" viewBox="0 0 12 10" fill="none">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M0 5C0 4.60551 0.319797 4.28571 0.714286 4.28571L8.98985 4.28571L5.92349 1.21936C5.64455 0.940417 5.64455 0.488155 5.92349 0.209209C6.20244 -0.0697365 6.6547 -0.0697365 6.93365 0.209209L11.2194 4.49492C11.4983 4.77387 11.4983 5.22613 11.2194 5.50508L6.93365 9.79079C6.6547 10.0697 6.20244 10.0697 5.92349 9.79079C5.64455 9.51184 5.64455 9.05958 5.92349 8.78064L8.98985 5.71429L0.714286 5.71429C0.319797 5.71429 0 5.39449 0 5Z" fill="#616161"></path>
                                        </svg>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<!-- portfolio area end -->

<?= $this->endSection() ?>
