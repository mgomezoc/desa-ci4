<?= $this->extend('layouts/main') ?>

<?= $this->section('styles') ?>
<style>
    .filter-wrap { display: flex; flex-wrap: wrap; gap: .5rem; }
    .project-card { border: 1px solid rgba(244, 162, 97, .2); border-radius: 10px; padding: 1rem; height: 100%; background: rgba(9,6,16,.68); }
    .project-meta { font-size: .92rem; opacity: .85; }
</style>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<section class="rs-portfolio-area section-space-top section-space-bottom">
    <div class="container">
        <header class="mb-4">
            <h1 class="rs-section-title">Proyectos de Ingeniería</h1>
            <p>Explora nuestro portafolio filtrando por categoría.</p>
        </header>

        <nav class="filter-wrap mb-4" aria-label="Filtros de categoría">
            <a class="rs-btn has-theme-orange <?= $active_category ? '' : 'has-bg' ?>" href="<?= base_url('/proyectos') ?>">Todos</a>
            <?php foreach ($categories as $category): ?>
                <a class="rs-btn has-theme-orange <?= (int) $active_category === (int) $category['id'] ? 'has-bg' : '' ?>" href="<?= base_url('/proyectos?category_id=' . $category['id']) ?>">
                    <?= esc($category['name']) ?>
                </a>
            <?php endforeach; ?>
        </nav>

        <div class="row g-4">
            <?php foreach ($projects as $project): ?>
                <div class="col-xl-4 col-md-6">
                    <article class="project-card">
                        <img src="<?= base_url($project['cover_image'] ?: 'assets/images/services/services-thumb-02.png') ?>" alt="<?= esc($project['name']) ?>" class="img-fluid mb-3">
                        <h2 class="h5"><?= esc($project['name']) ?></h2>
                        <p class="project-meta mb-1"><strong>Cliente:</strong> <?= esc($project['client_name'] ?? 'N/D') ?></p>
                        <p class="project-meta mb-1"><strong>Área:</strong> <?= $project['area_m2'] ? number_format((float) $project['area_m2'], 0) . ' m²' : 'N/D' ?></p>
                        <p class="project-meta mb-0"><strong>Ubicación:</strong> <?= esc(trim(($project['city'] ?? '') . ', ' . ($project['state'] ?? ''), ', ')) ?: 'N/D' ?></p>
                    </article>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<?= $this->endSection() ?>
