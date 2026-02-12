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

    <?= $this->renderSection('head') ?>
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
        <div class="rs-header-area rs-header-one">
            <div class="container-fluid g-0">
                <div class="rs-header-inner">
                    <div class="rs-header-left">
                        <div class="rs-header-logo-wrapper">
                            <div class="rs-header-logo">
                                <a href="<?= base_url('/') ?>"><img src="<?= base_url('assets/images/logo/logo-orange.png') ?>" alt="DESA Ingeniería"></a>
                            </div>
                        </div>
                    </div>
                    <div class="rs-header-menu">
                        <nav id="mobile-menu" class="main-menu">
                            <ul class="multipage-menu">
                                <li><a href="#inicio">Inicio</a></li>
                                <li><a href="#nosotros">Nosotros</a></li>
                                <li><a href="#servicios">Servicios</a></li>
                                <li><a href="#tecnologia">Tecnología</a></li>
                                    <li><a href="#proyectos">Proyectos</a></li>
                                    <li><a href="#clientes">Clientes</a></li>
                                <li><a href="#contacto">Contacto</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="rs-header-right">
                        <div class="rs-header-btn">
                            <a class="rs-btn has-theme-orange has-icon has-bg" href="#contacto">Solicitar propuesta
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
    </header>

    <main>
        <?= $this->renderSection('content') ?>
    </main>

    <footer class="rs-footer-area rs-footer-one black-bg">
        <div class="rs-footer-bg-thumb" data-background="<?= base_url('assets/images/bg/footer-bg-01.png') ?>"></div>
        <div class="container">
            <div class="rs-footer-wrapper">
                <div class="rs-footer-item">
                    <div class="rs-footer-widget footer-1-col-1">
                        <div class="rs-footer-widget-logo">
                            <a href="<?= base_url('/') ?>"><img src="<?= base_url('assets/images/logo/logo-orange-white.png') ?>" alt="DESA Ingeniería"></a>
                        </div>
                        <div class="rs-footer-widget-content">
                            <p class="rs-footer-widget-description">
                                Soluciones Integrales en Construcción. Desarrollamos Ingenierías de valor para proyectos Industriales, Comerciales y Residenciales.
                            </p>
                            <div class="rs-footer-widget-stroke-text">
                                <h3 class="rs-footer-stroke-text">Más de 20 años</h3>
                            </div>
                            <div class="rs-footer-copyright underline">
                                <p>© <span id="year"></span> DESA Ingeniería. Sitio web: <a href="https://www.desaingenieria.com" target="_blank" rel="noopener">www.desaingenieria.com</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="rs-footer-item">
                    <div class="rs-footer-widget footer-1-col-2">
                        <h5 class="rs-footer-widget-title">Enlaces</h5>
                        <div class="rs-footer-widget-content">
                            <div class="rs-footer-widget-links">
                                <ul>
                                    <li><a href="#">Introducción</a></li>
                                    <li><a href="#">Objetivos y Filosofía</a></li>
                                    <li><a href="#">Nuestros Servicios</a></li>
                                    <li><a href="#">Especificaciones y Normas</a></li>
                                    <li><a href="#tecnologia">Tecnología</a></li>
                                    <li><a href="#proyectos">Proyectos</a></li>
                                    <li><a href="#clientes">Clientes</a></li>
                                    <li><a href="#contacto">Contacto</a></li>
                                    <li><a href="tel:+528131436292">81 31 43 62 92</a></li>
                                    <li><a href="tel:+528115450426">81 15 45 04 26</a></li>
                                    <li><a href="mailto:proyectos@desaingenieria.com">proyectos@desaingenieria.com</a></li>
                                    <li><a href="#contacto">Av. Miguel Alemán #106-1, Guadalupe, Nuevo León</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="rs-footer-item">
                    <div class="rs-footer-widget footer-1-col-3">
                        <h5 class="rs-footer-widget-title">Contacto</h5>
                        <div class="rs-footer-widget-content">
                            <p class="descrip">Av. Miguel Alemán #106-1 Col. Libertad, Guadalupe, Nuevo León. C.P. 67130.</p>
                            <form action="#contacto">
                                <div class="rs-footer-subscribe-input">
                                    <input type="email" placeholder="proyectos@desaingenieria.com" aria-label="Correo DESA Ingeniería">
                                </div>
                            </form>
                            <div class="rs-footer-btn">
                                <a class="rs-btn has-theme-orange has-icon has-bg" href="#contacto">Ir a contacto
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
