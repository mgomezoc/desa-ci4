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

    <style>
        @media (max-width: 767px) {
            .rs-footer-one .rs-footer-widget-links ul {
                grid-template-columns: 1fr;
                gap: 12px;
            }

            .rs-footer-one .rs-footer-widget-links ul li a,
            .rs-footer-one .descrip,
            .rs-footer-one .rs-footer-copyright p {
                overflow-wrap: anywhere;
                word-break: break-word;
            }

            .rs-breadcrumb-one .rs-breadcrumb-title {
                font-size: 32px;
                line-height: 1.2;
            }
        }

        @media (max-width: 420px) {
            .rs-breadcrumb-one .rs-breadcrumb-title {
                font-size: 28px;
            }
        }
    </style>

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

    <div id="rs-mouse">
        <div id="cursor-ball"></div>
    </div>

    <header>
        <div class="rs-header-area rs-header-one rs-sticky-header" id="rs-sticky-header">
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
                                <li><a href="<?= base_url('/') ?>">Inicio</a></li>
                                <li><a href="<?= base_url('/#nosotros') ?>">Nosotros</a></li>
                                <li><a href="<?= base_url('/servicios') ?>">Servicios</a></li>
                                <li><a href="<?= base_url('/#tecnologia') ?>">Tecnología</a></li>
                                <li><a href="<?= base_url('/proyectos') ?>">Proyectos</a></li>
                                <li><a href="<?= base_url('/#clientes') ?>">Clientes</a></li>
                                <li><a href="<?= base_url('/#contacto') ?>">Contacto</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="rs-header-right">
                        <div class="rs-header-btn">
                            <a class="rs-btn has-theme-orange has-icon has-bg" href="#contacto">Contáctanos
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
                        <div class="rs-header-hamburger">
                            <div class="sidebar-toggle">
                                <a class="bar-icon" href="javascript:void(0)">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="21" height="20" viewBox="0 0 21 20" fill="none">
                                        <path d="M8.55566 11H1.55566C1.29045 11 1.03609 11.1054 0.848557 11.2929C0.661021 11.4804 0.555664 11.7348 0.555664 12V19C0.555664 19.2652 0.661021 19.5196 0.848557 19.7071C1.03609 19.8946 1.29045 20 1.55566 20H8.55566C8.82088 20 9.07523 19.8946 9.26277 19.7071C9.45031 19.5196 9.55566 19.2652 9.55566 19V12C9.55566 11.7348 9.45031 11.4804 9.26277 11.2929C9.07523 11.1054 8.82088 11 8.55566 11ZM7.55566 18H2.55566V13H7.55566V18ZM19.5557 0H12.5557C12.2904 0 12.0361 0.105357 11.8486 0.292893C11.661 0.48043 11.5557 0.734784 11.5557 1V8C11.5557 8.26522 11.661 8.51957 11.8486 8.70711C12.0361 8.89464 12.2904 9 12.5557 9H19.5557C19.8209 9 20.0752 8.89464 20.2628 8.70711C20.4503 8.51957 20.5557 8.26522 20.5557 8V1C20.5557 0.734784 20.4503 0.48043 20.2628 0.292893C20.0752 0.105357 19.8209 0 19.5557 0ZM18.5557 7H13.5557V2H18.5557V7ZM19.5557 11H12.5557C12.2904 11 12.0361 11.1054 11.8486 11.2929C11.661 11.4804 11.5557 11.7348 11.5557 12V19C11.5557 19.2652 11.661 19.5196 11.8486 19.7071C12.0361 19.8946 12.2904 20 12.5557 20H19.5557C19.8209 20 20.0752 19.8946 20.2628 19.7071C20.4503 19.5196 20.5557 19.2652 20.5557 19V12C20.5557 11.7348 20.4503 11.4804 20.2628 11.2929C20.0752 11.1054 19.8209 11 19.5557 11ZM18.5557 18H13.5557V13H18.5557V18ZM8.55566 0H1.55566C1.29045 0 1.03609 0.105357 0.848557 0.292893C0.661021 0.48043 0.555664 0.734784 0.555664 1V8C0.555664 8.26522 0.661021 8.51957 0.848557 8.70711C1.03609 8.89464 1.29045 9 1.55566 9H8.55566C8.82088 9 9.07523 8.89464 9.26277 8.70711C9.45031 8.51957 9.55566 8.26522 9.55566 8V1C9.55566 0.734784 9.45031 0.48043 9.26277 0.292893C9.07523 0.105357 8.82088 0 8.55566 0ZM7.55566 7H2.55566V2H7.55566V7Z" fill="#616161"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Mobile header -->
        <div class="rs-header-area rs-header-one">
            <div class="container-fluid g-0">
                <div class="rs-header-inner">
                    <div class="rs-header-left">
                        <div class="rs-header-logo-wrapper">
                            <div class="rs-header-logo">
                                <a href="<?= base_url('/') ?>"><img src="<?= base_url('assets/images/logo/logo-orange.png') ?>" alt="DESA Ingeniería logo"></a>
                            </div>
                        </div>
                    </div>
                    <div class="rs-header-menu">
                        <nav id="mobile-menu-two" class="main-menu">
                            <ul class="multipage-menu">
                                <li><a href="<?= base_url('/') ?>">Inicio</a></li>
                                <li><a href="<?= base_url('/#nosotros') ?>">Nosotros</a></li>
                                <li><a href="<?= base_url('/servicios') ?>">Servicios</a></li>
                                <li><a href="<?= base_url('/#tecnologia') ?>">Tecnología</a></li>
                                <li><a href="<?= base_url('/proyectos') ?>">Proyectos</a></li>
                                <li><a href="<?= base_url('/#clientes') ?>">Clientes</a></li>
                                <li><a href="<?= base_url('/#contacto') ?>">Contacto</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="rs-header-right">
                        <div class="rs-header-btn">
                            <a class="rs-btn has-theme-orange has-icon has-bg" href="#contacto">Contáctanos
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
                        <div class="rs-header-hamburger">
                            <div class="sidebar-toggle">
                                <a class="bar-icon" href="javascript:void(0)">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="21" height="20" viewBox="0 0 21 20" fill="none">
                                        <path d="M8.55566 11H1.55566C1.29045 11 1.03609 11.1054 0.848557 11.2929C0.661021 11.4804 0.555664 11.7348 0.555664 12V19C0.555664 19.2652 0.661021 19.5196 0.848557 19.7071C1.03609 19.8946 1.29045 20 1.55566 20H8.55566C8.82088 20 9.07523 19.8946 9.26277 19.7071C9.45031 19.5196 9.55566 19.2652 9.55566 19V12C9.55566 11.7348 9.45031 11.4804 9.26277 11.2929C9.07523 11.1054 8.82088 11 8.55566 11ZM7.55566 18H2.55566V13H7.55566V18ZM19.5557 0H12.5557C12.2904 0 12.0361 0.105357 11.8486 0.292893C11.661 0.48043 11.5557 0.734784 11.5557 1V8C11.5557 8.26522 11.661 8.51957 11.8486 8.70711C12.0361 8.89464 12.2904 9 12.5557 9H19.5557C19.8209 9 20.0752 8.89464 20.2628 8.70711C20.4503 8.51957 20.5557 8.26522 20.5557 8V1C20.5557 0.734784 20.4503 0.48043 20.2628 0.292893C20.0752 0.105357 19.8209 0 19.5557 0ZM18.5557 7H13.5557V2H18.5557V7ZM19.5557 11H12.5557C12.2904 11 12.0361 11.1054 11.8486 11.2929C11.661 11.4804 11.5557 11.7348 11.5557 12V19C11.5557 19.2652 11.661 19.5196 11.8486 19.7071C12.0361 19.8946 12.2904 20 12.5557 20H19.5557C19.8209 20 20.0752 19.8946 20.2628 19.7071C20.4503 19.5196 20.5557 19.2652 20.5557 19V12C20.5557 11.7348 20.4503 11.4804 20.2628 11.2929C20.0752 11.1054 19.8209 11 19.5557 11ZM18.5557 18H13.5557V13H18.5557V18ZM8.55566 0H1.55566C1.29045 0 1.03609 0.105357 0.848557 0.292893C0.661021 0.48043 0.555664 0.734784 0.555664 1V8C0.555664 8.26522 0.661021 8.51957 0.848557 8.70711C1.03609 8.89464 1.29045 9 1.55566 9H8.55566C8.82088 9 9.07523 8.89464 9.26277 8.70711C9.45031 8.51957 9.55566 8.26522 9.55566 8V1C9.55566 0.734784 9.45031 0.48043 9.26277 0.292893C9.07523 0.105357 8.82088 0 8.55566 0ZM7.55566 7H2.55566V2H7.55566V7Z" fill="#616161"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Offcanvas area start -->
    <div class="fix">
        <div class="offcanvas-area" data-lenis-prevent>
            <div class="offcanvas-wrapper">
                <div class="offcanvas-content">
                    <div class="offcanvas-top d-flex justify-content-between align-items-center mb-20">
                        <div class="offcanvas-logo">
                            <a class="logo-black" href="<?= base_url('/') ?>">
                                <img src="<?= base_url('assets/images/logo/logo-orange.png') ?>" alt="DESA Ingeniería logo">
                            </a>
                        </div>
                        <div class="offcanvas-close">
                            <button class="offcanvas-close-icon animation--flip">
                                <span class="offcanvas-m-lines"><span class="offcanvas-m-line line--1"></span><span class="offcanvas-m-line line--2"></span><span class="offcanvas-m-line line--3"></span></span>
                            </button>
                        </div>
                    </div>
                    <div class="offcanvas-about mb-30 d-none d-sm-block">
                        <p>Somos una empresa formada por Ingenieros y Arquitectos con más de 20 años de experiencia. Desarrollamos Ingenierías de valor para proyectos del tipo Industrial, Comercial y Residencial.</p>
                    </div>
                    <div class="offcanvas-gallery d-none d-sm-block">
                        <div class="offcanvas-gallery-thumb-wrapper">
                            <div class="offcanvas-popup-thumb">
                                <a class="popup-image" href="<?= base_url('assets/images/offcanvas/offcanvas-1.jpg') ?>">
                                    <img src="<?= base_url('assets/images/offcanvas/offcanvas-1.jpg') ?>" alt="Proyecto DESA">
                                </a>
                            </div>
                            <div class="offcanvas-popup-thumb">
                                <a class="popup-image" href="<?= base_url('assets/images/offcanvas/offcanvas-2.jpg') ?>">
                                    <img src="<?= base_url('assets/images/offcanvas/offcanvas-2.jpg') ?>" alt="Proyecto DESA">
                                </a>
                            </div>
                            <div class="offcanvas-popup-thumb">
                                <a class="popup-image" href="<?= base_url('assets/images/offcanvas/offcanvas-3.png') ?>">
                                    <img src="<?= base_url('assets/images/offcanvas/offcanvas-3.png') ?>" alt="Proyecto DESA">
                                </a>
                            </div>
                            <div class="offcanvas-popup-thumb">
                                <a class="popup-image" href="<?= base_url('assets/images/offcanvas/offcanvas-4.png') ?>">
                                    <img src="<?= base_url('assets/images/offcanvas/offcanvas-4.png') ?>" alt="Proyecto DESA">
                                </a>
                            </div>
                            <div class="offcanvas-popup-thumb">
                                <a class="popup-image" href="<?= base_url('assets/images/offcanvas/offcanvas-5.jpg') ?>">
                                    <img src="<?= base_url('assets/images/offcanvas/offcanvas-5.jpg') ?>" alt="Proyecto DESA">
                                </a>
                            </div>
                            <div class="offcanvas-popup-thumb">
                                <a class="popup-image" href="<?= base_url('assets/images/offcanvas/offcanvas-6.png') ?>">
                                    <img src="<?= base_url('assets/images/offcanvas/offcanvas-6.png') ?>" alt="Proyecto DESA">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="mobile-menu">
                        <div class="rs-offcanvas-menu mb-25">
                            <nav></nav>
                        </div>
                    </div>
                    <div class="offcanvas-contact mb-30">
                        <h4 class="offcanvas-title-meta">Contacto</h4>
                        <ul>
                            <li class="d-flex align-items-center gap-15">
                                <div class="offcanvas-contact-icon"><i class="ri-map-pin-line"></i></div>
                                <div class="offcanvas-contact-text"><a href="#">Av. Miguel Alemán #106-1 Col. Libertad, Guadalupe, Nuevo León C.P. 67130</a></div>
                            </li>
                            <li class="d-flex align-items-center gap-15">
                                <div class="offcanvas-contact-icon"><i class="ri-phone-line"></i></div>
                                <div class="offcanvas-contact-text"><a href="tel:8131436292">81 31 43 62 92</a></div>
                            </li>
                            <li class="d-flex align-items-center gap-15">
                                <div class="offcanvas-contact-icon"><i class="ri-mail-line"></i></div>
                                <div class="offcanvas-contact-text"><a href="mailto:proyectos@desaingenieria.com">proyectos@desaingenieria.com</a></div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="offcanvas-overlay"></div>
    <div class="offcanvas-overlay-white"></div>
    <!-- Offcanvas area end -->

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
                                    <li><a href="<?= base_url('/servicios') ?>">Nuestros Servicios</a></li>
                                    <li><a href="#">Especificaciones y Normas</a></li>
                                    <li><a href="<?= base_url('/#tecnologia') ?>">Tecnología</a></li>
                                    <li><a href="<?= base_url('/proyectos') ?>">Proyectos</a></li>
                                    <li><a href="<?= base_url('/#clientes') ?>">Clientes</a></li>
                                    <li><a href="<?= base_url('/#contacto') ?>">Contacto</a></li>
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