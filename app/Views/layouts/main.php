<!doctype html>
<html class="no-js" lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?= $meta_title ?? 'DESA Ingeniería | Proyectos Industriales, Comerciales y Residenciales' ?></title>
    <meta name="description" content="<?= $meta_desc ?? 'Ingeniería de valor, diseño estructural y construcción. Más de 20 años de experiencia en proyectos industriales y comerciales.' ?>">
    <meta name="keywords" content="Ingeniería Civil, Diseño Estructural, Topografía, Construcción Industrial, Monterrey">

    <meta property="og:type" content="website" />
    <meta property="og:title" content="<?= $meta_title ?? 'DESA Ingeniería' ?>" />
    <meta property="og:description" content="<?= $meta_desc ?? '' ?>" />
    <meta property="og:image" content="<?= base_url('assets/images/logo/logo-orange.png') ?>" />

    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url('assets/images/favicon.png') ?>">

    <link rel="stylesheet" href="<?= base_url('assets/css/vendor/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/vendor/animate.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/plugins/swiper.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/plugins/nice-select.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/plugins/nouislider.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/vendor/magnific-popup.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/vendor/odometer.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/vendor/fontawesome-pro.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/vendor/spacing.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/vendor/remixicon.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/main.css') ?>">

    <?= $this->renderSection('styles') ?>
</head>

<body class="rs-smoother-yes">

    <div id="pre-load">
        <div id="loader" class="loader">
            <div class="loader-container">
                <div class="loader-icon"><img src="<?= base_url('assets/images/favicon.png') ?>" alt="DESA Ingeniería"></div>
            </div>
        </div>
    </div>

    <header>
        <div class="rs-header-area rs-header-one rs-sticky-header" id="rs-sticky-header">
        </div>
    </header>

    <main>
        <?= $this->renderSection('content') ?>
    </main>

    <footer class="rs-footer-area rs-footer-one black-bg">
    </footer>

    <div class="backtotop-wrap cursor-pointer">
        <svg class="backtotop-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>

    <script src="<?= base_url('assets/js/vendor/jquery-3.7.1.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/plugins/waypoints.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/vendor/bootstrap.bundle.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/plugins/meanmenu.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/plugins/swiper.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/plugins/wow.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/vendor/magnific-popup.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/vendor/isotope.pkgd.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/vendor/imagesloaded.pkgd.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/plugins/nice-select.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/plugins/jarallax.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/vendor/ajax-form.js') ?>"></script>
    <script src="<?= base_url('assets/js/plugins/easypie.js') ?>"></script>
    <script src="<?= base_url('assets/js/plugins/headding-title.js') ?>"></script>
    <script src="<?= base_url('assets/js/plugins/lenis.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/plugins/gsap.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/plugins/rs-anim-int.js') ?>"></script>
    <script src="<?= base_url('assets/js/plugins/rs-scroll-trigger.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/plugins/rs-splitText.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/plugins/jquery.lettering.js') ?>"></script>
    <script src="<?= base_url('assets/js/plugins/parallax-effect.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/plugins/jquery.appear.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/plugins/marquee.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/plugins/chart.umd.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/plugins/nouislider.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/vendor/purecounter.js') ?>"></script>
    <script src="<?= base_url('assets/js/vendor/odometer.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/main.js') ?>"></script>

    <?= $this->renderSection('scripts') ?>
</body>

</html>