<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<main>
<!-- banner area start -->
<section class="rs-banner-area rs-banner-one p-relative rs-swiper">
    <div class="rs-banner-shape">
        <img src="<?= base_url('assets/images/shape/half-arrow.png') ?>" alt="TODO: no visible en PDF">
    </div>
    <div class="rs-banner-slider-wrapper">
        <div class="swiper" data-clone-slides="false" data-loop="true" data-speed="1800" data-autoplay="true" data-dots-dynamic="false" data-hover-pause="true" data-effect="fade" data-delay="4500" data-item="1" data-item-xl="1" data-item-lg="1" data-item-md="1" data-item-sm="1" data-item-xs="1" data-item-mobile="1" data-margin="30" data-margin-xl="30" data-margin-lg="30" data-margin-md="30" data-margin-sm="30" data-margin-xs="30" data-margin-mobile="30">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="rs-banner-item-wrapper">
                        <div class="rs-banner-bg-thumb" data-background="<?= base_url('assets/images/bg/banner-bg-01.png') ?>"></div>
                        <div class="container">
                            <div class="row">
                                <div class="col-xxl-8 col-xl-9 col-lg-10">
                                    <div class="rs-banner-item">
                                        <div class="rs-banner-content">
                                            <span class="rs-section-subtitle">Introducción</span>
                                            <h1 class="rs-banner-title">DESA INGENIERÍA</h1>
                                            <div class="rs-banner-descrip">
                                                <p>Soluciones Integrales en Construcción. Desarrollamos Ingenierías de valor para proyectos Industriales, Comerciales y Residenciales.</p>
                                            </div>
                                            <div class="rs-banner-btn">
                                                <a class="rs-btn has-theme-orange has-icon has-bg" href="#contacto">Contáctanos
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
                </div>

                <div class="swiper-slide">
                    <div class="rs-banner-item-wrapper">
                        <div class="rs-banner-bg-thumb" data-background="<?= base_url('assets/images/bg/banner-bg-02.png') ?>"></div>
                        <div class="container">
                            <div class="row">
                                <div class="col-xxl-8 col-xl-9 col-lg-10">
                                    <div class="rs-banner-item">
                                        <div class="rs-banner-content">
                                            <h2 class="rs-banner-title">Más de 20 años de experiencia</h2>
                                            <div class="rs-banner-descrip">
                                                <p>Empresa formada por Ingenieros y Arquitectos expertos en diseño estructural y construcción.</p>
                                            </div>
                                            <div class="rs-banner-btn">
                                                <a class="rs-btn has-theme-orange has-icon has-bg" href="#portafolio">Ver Proyectos
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
                </div>
            </div>
            <div class="rs-swiper-dot rs-banner-dot"></div>
        </div>
    </div>
</section>
<!-- banner area end -->

<!-- feature area start -->
<section class="rs-feature-area section-space rs-feature-one">
    <div class="container">
        <div class="row g-5 justify-content-center section-title-space align-items-center">
            <div class="col-xxl-7 col-xl-8 col-lg-8">
                <div class="rs-section-title-wrapper text-center">
                    <span class="rs-section-subtitle has-theme-orange">
                        <svg xmlns="http://www.w3.org/2000/svg" width="11" height="15" viewBox="0 0 11 15" fill="none">
                            <path d="M3.14286 10L0 15L8.78104e-07 0L3.14286 5V10Z" fill="#EA5501"></path>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M6.28571 10L3.14286 15L3.14286 10L4.71428 7.5L3.14286 5L3.14286 0L6.28571 5L6.28571 10ZM6.28571 10L7.85714 7.5L6.28571 5V0L11 7.5L6.28571 15V10Z" fill="#EA5501"></path>
                        </svg>
                        Tecnología Aplicada
                    </span>
                    <h2 class="rs-section-title rs-split-text-enable split-in-fade">Tecnología Aplicada</h2>
                </div>
            </div>
        </div>
        <div class="row g-5 process-counts">
            <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="rs-feature-item wow fadeInUp" data-wow-delay=".3s" data-wow-duration="1s">
                    <div class="rs-feature-icon">
                        <img src="<?= base_url('assets/images/icon/feature-icon-01.png') ?>" alt="Eficiencia">
                    </div>
                    <h5 class="rs-feature-title">Eficiencia</h5>
                    <div class="rs-feature-descrip">
                        <p>Reducimos los tiempos de entrega contando con la última tecnología en software de ingeniería.</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="rs-feature-item wow fadeInUp" data-wow-delay=".5s" data-wow-duration="1s">
                    <div class="rs-feature-icon">
                        <img src="<?= base_url('assets/images/icon/feature-icon-02.png') ?>" alt="Ingeniería de Valor">
                    </div>
                    <h5 class="rs-feature-title">Ingeniería de Valor</h5>
                    <div class="rs-feature-descrip">
                        <p>Proyectos eficientes e ingeniosos tomando en cuenta la seguridad e integridad.</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="rs-feature-item wow fadeInUp" data-wow-delay=".7s" data-wow-duration="1s">
                    <div class="rs-feature-icon">
                        <img src="<?= base_url('assets/images/icon/feature-icon-03.png') ?>" alt="Tecnología Avanzada">
                    </div>
                    <h5 class="rs-feature-title">Tecnología Avanzada</h5>
                    <div class="rs-feature-descrip">
                        <p>Implementamos CypeCAD, TEKLA Structures, REVIT y Escáner Láser 3D.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- feature area end -->

<!-- about area start -->
<section class="rs-about-area section-space-bottom rs-about-one">
    <div class="container">
        <div class="row g-5">
            <div class="col-xl-7 col-lg-7">
                <div class="rs-section-title-wrapper">
                    <span class="rs-section-subtitle has-theme-orange justify-content-start">
                        <svg xmlns="http://www.w3.org/2000/svg" width="11" height="15" viewBox="0 0 11 15" fill="none">
                            <path d="M3.14286 10L0 15L8.78104e-07 0L3.14286 5V10Z" fill="#EA5501"></path>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M6.28571 10L3.14286 15L3.14286 10L4.71428 7.5L3.14286 5L3.14286 0L6.28571 5L6.28571 10ZM6.28571 10L7.85714 7.5L6.28571 5V0L11 7.5L6.28571 15V10Z" fill="#EA5501"></path>
                        </svg>
                        Objetivos y Filosofía
                    </span>
                    <h2 class="rs-section-title rs-split-text-enable split-in-fade">Objetivos y Filosofía</h2>
                </div>
            </div>
            <div class="col-xl-5 col-lg-5">
                <div class="rs-about-content">
                    <div class="rs-about-description">
                        <p class="descrip-1">Nuestro objetivo es que nuestros clientes se sientan con la confianza que sus proyectos se realizan de forma eficiente.</p>
                        <p class="descrip-2">Buscamos un crecimiento ordenado, implementando un sistema de mejora continua que tome en consideración las exigencias cambiantes del mercado.</p>
                    </div>
                    <div class="rs-about-list wow fadeInUp" data-wow-delay=".3s">
                        <ul>
                            <li>Diseño estructural asistido por computadora.</li>
                            <li>Asesoría y Consultoría Constructiva.</li>
                            <li>Supervisión de Obra Civil Industrial.</li>
                        </ul>
                    </div>
                    <div class="rs-about-btn">
                        <a class="rs-btn has-theme-orange has-icon has-bg" href="#contacto">Contáctanos
                            <span class="icon-box">
                                <svg class="icon-first" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"><path d="M31.71,15.29l-10-10L20.29,6.71,28.59,15H0v2H28.59l-8.29,8.29,1.41,1.41,10-10A1,1,0,0,0,31.71,15.29Z"></path></svg>
                                <svg class="icon-second" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"><path d="M31.71,15.29l-10-10L20.29,6.71,28.59,15H0v2H28.59l-8.29,8.29,1.41,1.41,10-10A1,1,0,0,0,31.71,15.29Z"></path></svg>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="rs-about-thumb wow fadeInUp" data-wow-delay=".3s" data-wow-duration="1s">
                    <div class="rs-about-bg-thumb" data-background="<?= base_url('assets/images/about/about-thumb-01.png') ?>"></div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- about area end -->

<!-- services area start -->
<section class="rs-services-area section-space-top rs-services-one primary-bg p-relative">
    <div class="rs-services-shape">
        <img src="<?= base_url('assets/images/shape/wave-shape-01.png') ?>" alt="TODO: no visible en PDF">
    </div>
    <div class="container">
        <div class="row g-5 section-title-space align-items-center">
            <div class="col-xl-7 col-lg-7">
                <div class="rs-section-title-wrapper">
                    <span class="rs-section-subtitle has-theme-orange justify-content-start">Nuestros Servicios</span>
                    <h2 class="rs-section-title wow fadeInUp" data-wow-delay=".4s">Nuestros Servicios</h2>
                </div>
            </div>
            <div class="col-xl-5 col-lg-5">
                <div class="rs-services-btn">
                    <a class="rs-btn has-bg-transparent has-icon has-bg" href="#contacto">Contacto
                        <span class="icon-box">
                            <svg class="icon-first" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"><path d="M31.71,15.29l-10-10L20.29,6.71,28.59,15H0v2H28.59l-8.29,8.29,1.41,1.41,10-10A1,1,0,0,0,31.71,15.29Z"></path></svg>
                            <svg class="icon-second" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"><path d="M31.71,15.29l-10-10L20.29,6.71,28.59,15H0v2H28.59l-8.29,8.29,1.41,1.41,10-10A1,1,0,0,0,31.71,15.29Z"></path></svg>
                        </span>
                    </a>
                </div>
            </div>
        </div>
        <div class="row g-5">
            <div class="col-xxl-3 col-xl-4 col-lg-4">
                <div class="rs-services-tab">
                    <nav aria-label="Categorías de servicios">
                        <ul class="nav nav-pills" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="pills-item-one-tab" data-bs-toggle="pill" data-bs-target="#pills-item-one" type="button" role="tab" aria-controls="pills-item-one" aria-selected="true">Ingenierías Preliminares <span class="rs-services-icon"><i class="ri-arrow-right-line"></i></span></button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-item-two-tab" data-bs-toggle="pill" data-bs-target="#pills-item-two" type="button" role="tab" aria-controls="pills-item-two" aria-selected="false">Ingeniería Estructural <span class="rs-services-icon"><i class="ri-arrow-right-line"></i></span></button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-item-three-tab" data-bs-toggle="pill" data-bs-target="#pills-item-three" type="button" role="tab" aria-controls="pills-item-three" aria-selected="false">Arquitectura <span class="rs-services-icon"><i class="ri-arrow-right-line"></i></span></button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-item-four-tab" data-bs-toggle="pill" data-bs-target="#pills-item-four" type="button" role="tab" aria-controls="pills-item-four" aria-selected="false">Instalaciones <span class="rs-services-icon"><i class="ri-arrow-right-line"></i></span></button>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="col-xxl-9 col-xl-8 col-lg-8">
                <div class="rs-services-tab-wrapper">
                    <div class="tab-content rs-services-tab-anim" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-item-one" role="tabpanel" aria-labelledby="pills-item-one-tab" tabindex="0">
                            <div class="rs-services-tab-content-wrapper p-relative">
                                <div class="row g-5 align-items-center">
                                    <div class="col-xl-6 col-lg-6">
                                        <div class="rs-services-tab-content-thumb has-clip">
                                            <img src="<?= base_url('assets/images/services/services-thumb-01.png') ?>" alt="Ingenierías Preliminares">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6">
                                        <div class="rs-services-tab-content">
                                            <h3 class="rs-services-tab-title">Ingenierías Preliminares</h3>
                                            <div class="rs-services-tab-list">
                                                <ul>
                                                    <li>Levantamiento Topográfico</li>
                                                    <li>Construcciones Existentes con Escáner Láser</li>
                                                    <li>Estudios de mecánica de suelos</li>
                                                    <li>Estudios hidrológicos</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-item-two" role="tabpanel" aria-labelledby="pills-item-two-tab" tabindex="0">
                            <div class="rs-services-tab-content-wrapper p-relative">
                                <div class="row g-5 align-items-center">
                                    <div class="col-xl-6 col-lg-6">
                                        <div class="rs-services-tab-content-thumb has-clip">
                                            <img src="<?= base_url('assets/images/services/services-thumb-02.png') ?>" alt="Ingeniería Estructural">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6">
                                        <div class="rs-services-tab-content">
                                            <h3 class="rs-services-tab-title">Ingeniería Estructural</h3>
                                            <div class="rs-services-tab-list">
                                                <ul>
                                                    <li>Diseño de naves industriales</li>
                                                    <li>Edificios multiniveles</li>
                                                    <li>Cimentaciones de equipos y prensas</li>
                                                    <li>Maquila de planos con TEKLA Structures</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-item-three" role="tabpanel" aria-labelledby="pills-item-three-tab" tabindex="0">
                            <div class="rs-services-tab-content-wrapper p-relative">
                                <div class="row g-5 align-items-center">
                                    <div class="col-xl-6 col-lg-6">
                                        <div class="rs-services-tab-content-thumb has-clip">
                                            <img src="<?= base_url('assets/images/services/services-thumb-03.png') ?>" alt="Arquitectura">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6">
                                        <div class="rs-services-tab-content">
                                            <h3 class="rs-services-tab-title">Arquitectura</h3>
                                            <div class="rs-services-tab-list">
                                                <ul>
                                                    <li>Planos Arquitectónicos</li>
                                                    <li>Proyectos Ejecutivos</li>
                                                    <li>Renders 3D</li>
                                                    <li>Recorridos virtuales</li>
                                                    <li>Catálogo de Conceptos</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-item-four" role="tabpanel" aria-labelledby="pills-item-four-tab" tabindex="0">
                            <div class="rs-services-tab-content-wrapper p-relative">
                                <div class="row g-5 align-items-center">
                                    <div class="col-xl-6 col-lg-6">
                                        <div class="rs-services-tab-content-thumb has-clip">
                                            <img src="<?= base_url('assets/images/services/services-thumb-04.png') ?>" alt="Instalaciones">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6">
                                        <div class="rs-services-tab-content">
                                            <h3 class="rs-services-tab-title">Instalaciones</h3>
                                            <div class="rs-services-tab-list">
                                                <ul>
                                                    <li>Ingeniería Eléctrica (Media y baja tensión)</li>
                                                    <li>Ingeniería Hidrosanitaria (Pluvial, Sanitario)</li>
                                                    <li>Sistemas contra incendio</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- services area end -->

<!-- work step area start -->
<section class="rs-work-step-area rs-work-step-one section-space-bottom primary-bg">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <h2 class="rs-work-step-section-title">Especificaciones y Normas</h2>
            </div>
        </div>
        <div class="rs-work-step-wrapper">
            <div class="row g-5 process-counts">
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="rs-work-step-item wow fadeInUp" data-wow-delay=".3s" data-wow-duration="1s">
                        <h5 class="rs-work-step-title">AISC / IMCA</h5>
                        <div class="rs-work-step-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" height="512" viewBox="0 0 512 512" width="512"><path d="m246.222 279.354v-210.019c0-4.418-3.582-8-8-8-59.12 0-114.701 23.022-156.505 64.827s-64.827 97.386-64.827 156.506 23.023 114.701 64.827 156.505 97.385 64.827 156.505 64.827 114.702-23.023 156.505-64.827c3.124-3.124 3.124-8.189 0-11.313zm-8 208.646c-113.221 0-205.333-92.112-205.333-205.333 0-110.54 87.808-200.958 197.333-205.179v205.179c0 2.122.843 4.157 2.343 5.657l145.084 145.084c-38.055 35.266-87.255 54.592-139.427 54.592zm248.889-231.111h-213.333c-3.236 0-6.153 1.949-7.391 4.938s-.554 6.43 1.734 8.718l150.849 150.85c1.562 1.562 3.609 2.343 5.657 2.343s4.095-.781 5.657-2.343c41.804-41.804 64.827-97.385 64.827-156.505 0-4.419-3.582-8.001-8-8.001zm-62.591 147.428-131.428-131.428h185.867c-1.872 49.188-20.982 95.324-54.439 131.428zm-150.742-166.984h213.333c4.418 0 8-3.582 8-8 0-59.12-23.022-114.702-64.827-156.506s-97.386-64.827-156.506-64.827c-4.418 0-8 3.582-8 8v213.333c0 4.418 3.582 8 8 8zm8-213.179c106.868 4.118 193.061 90.311 197.179 197.179h-197.179z"></path></svg>
                        </div>
                        <div class="rs-work-step-descrip">
                            <p>American Institute of Steel Construction &amp; Instituto Mexicano de la Construcción en Acero.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="rs-work-step-item wow fadeInUp" data-wow-delay=".5s" data-wow-duration="1s">
                        <h5 class="rs-work-step-title">AWS / SJI</h5>
                        <div class="rs-work-step-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path clip-rule="evenodd" d="m193.99 213.76c17.27 0 31.32-14.05 31.32-31.32s-14.05-31.32-31.32-31.32-31.32 14.05-31.32 31.32 14.05 31.32 31.32 31.32zm0-52.64c11.75 0 21.32 9.56 21.32 21.32 0 11.75-9.56 21.32-21.32 21.32s-21.32-9.56-21.32-21.32c.01-11.75 9.57-21.32 21.32-21.32zm-49.53 2.36-9.43.88c-5.82.54-10.3 4.98-10.9 10.79-.52 5.03-.5 10.12.06 15.15.65 5.81 5.17 10.21 10.99 10.71l9.44.8c.69.06 1.02.49 1.16.84s.23.88-.22 1.42l-6.05 7.28c-3.73 4.5-3.76 10.8-.08 15.34 3.19 3.93 6.81 7.52 10.77 10.68 4.56 3.64 10.87 3.56 15.33-.21l7.24-6.1c.53-.45 1.06-.37 1.41-.23s.78.46.85 1.16l.88 9.43c.54 5.82 4.98 10.3 10.79 10.9 2.42.25 4.86.38 7.3.38 2.62 0 5.24-.15 7.85-.43 5.81-.65 10.21-5.17 10.71-10.99l.8-9.44c.06-.7.49-1.02.84-1.16s.88-.23 1.42.22l7.29 6.05c4.5 3.73 10.8 3.77 15.34.08 3.93-3.19 7.52-6.81 10.68-10.77 3.64-4.56 3.56-10.87-.21-15.33l-6.1-7.24c-.45-.53-.37-1.06-.23-1.41s.46-.78 1.16-.85l9.43-.88c5.82-.54 10.3-4.98 10.9-10.79.52-5.03.5-10.12-.06-15.15-.65-5.81-5.17-10.21-10.99-10.71l-9.44-.8c-.7-.06-1.02-.49-1.16-.84-.15-.35-.23-.88.22-1.42l6.05-7.29c3.73-4.5 3.77-10.8.08-15.34-3.19-3.93-6.81-7.52-10.77-10.68-4.56-3.64-10.87-3.56-15.33.21l-7.24 6.1c-.53.45-1.06.38-1.41.23-.35-.14-.78-.46-.85-1.16l-.88-9.43c-.54-5.82-4.98-10.3-10.79-10.9-5.03-.52-10.12-.5-15.15.06-5.81.65-10.21 5.17-10.7 10.99l-.8 9.44c-.06.7-.49 1.02-.84 1.16-.35.15-.88.23-1.42-.22l-7.29-6.05c-4.5-3.73-10.8-3.76-15.34-.08-3.93 3.19-7.52 6.81-10.68 10.77-3.64 4.57-3.56 10.87.21 15.33l6.1 7.24c.45.53.37 1.06.23 1.41-.15.35-.47.78-1.17.85z" fill-rule="evenodd"></path></svg>
                        </div>
                        <div class="rs-work-step-descrip">
                            <p>American Welding Society &amp; Steel Joist Institute.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="rs-work-step-item wow fadeInUp" data-wow-delay=".7s" data-wow-duration="1s">
                        <h5 class="rs-work-step-title">Reglamentos Locales</h5>
                        <div class="rs-work-step-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64"><g data-name="23 Computer repair" id="_23_Computer_repair"><g><path d="M25,23a1,1,0,0,0-1,1V46H2V36H21a1,1,0,0,0,0-2H2V24H12a1,1,0,0,0,0-2H2V13a1,1,0,0,1,1-1h8a1,1,0,0,0,0-2H3a3,3,0,0,0-3,3V55a1,1,0,0,0,2,0V48H24V61a1,1,0,0,1-1,1H3a1,1,0,0,1-1-1V59a1,1,0,0,0-2,0v2a3,3,0,0,0,3,3H23a3,3,0,0,0,3-3V24A1,1,0,0,0,25,23Z"></path><path d="M61,21H29a1,1,0,0,0,0,2H61a1,1,0,0,1,1,1V47H29a1,1,0,0,0,0,2H62v3a1,1,0,0,1-1,1H29a1,1,0,0,0,0,2H40.613l-1.561,4.684A1,1,0,0,0,40,61h8a1,1,0,0,0,.948-1.316L47.387,55H61a3,3,0,0,0,3-3V24A3,3,0,0,0,61,21ZM46.612,59H41.388l1.332-4h2.56Z"></path><path d="M42,39a1,1,0,0,0,.707-.293l7-7a1,1,0,0,0-1.414-1.414L42,36.586l-2.293-2.293a1,1,0,0,0-1.414,1.414l3,3A1,1,0,0,0,42,39Z"></path></g></g></svg>
                        </div>
                        <div class="rs-work-step-descrip">
                            <p>NTC CDMX 2017, CFE y Normas Oficiales Mexicanas (NOM).</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- work step area end -->

<!-- project area start -->
<section id="portafolio" class="rs-portfolio-area section-space-top rs-portfolio-one rs-swiper">
    <div class="container">
        <div class="row g-5 section-title-space align-items-end">
            <div class="col-xxl-7 col-xl-8 col-lg-8">
                <div class="rs-section-title-wrapper">
                    <span class="rs-section-subtitle has-theme-orange justify-content-start">
                        <svg xmlns="http://www.w3.org/2000/svg" width="11" height="15" viewBox="0 0 11 15" fill="none">
                            <path d="M3.14286 10L0 15L8.78104e-07 0L3.14286 5V10Z" fill="#EA5501"></path>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M6.28571 10L3.14286 15L3.14286 10L4.71428 7.5L3.14286 5L3.14286 0L6.28571 5L6.28571 10ZM6.28571 10L7.85714 7.5L6.28571 5V0L11 7.5L6.28571 15V10Z" fill="#EA5501"></path>
                        </svg>
                        Proyectos
                    </span>
                    <h2 class="rs-section-title">Proyectos</h2>
                </div>
            </div>
            <div class="col-xxl-5 col-xl-4 col-lg-4">
                <div class="rs-portfolio-navigation">
                    <button class="swiper-button-prev rs-swiper-btn has-bg-light"><i class="fa-regular fa-arrow-left"></i></button>
                    <button class="swiper-button-next rs-swiper-btn has-bg-light"><i class="fa-regular fa-arrow-right"></i></button>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="rs-portfolio-slider-wrapper">
                    <div class="swiper has-space" data-clone-slides="false" data-loop="true" data-speed="1500" data-autoplay="true" data-dots-dynamic="false" data-hover-pause="true" data-effect="false" data-delay="2500" data-item="4" data-item-xl="3" data-item-lg="3" data-item-md="2" data-item-sm="1" data-item-xs="1" data-item-mobile="1" data-margin="30" data-margin-xl="30">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="rs-portfolio-item">
                                    <div class="rs-portfolio-thumb has-clip-path">
                                        <img src="<?= base_url('assets/images/project/project-01.png') ?>" alt="Agencia Mercedes Benz La Rioja">
                                    </div>
                                    <div class="rs-portfolio-content">
                                        <div class="rs-portfolio-tag"><a href="#portafolio">Comercial / Estructural</a></div>
                                        <h4 class="rs-portfolio-title underline has-white"><a href="#portafolio">Agencia Mercedes Benz La Rioja</a></h4>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="rs-portfolio-item">
                                    <div class="rs-portfolio-thumb has-clip-path">
                                        <img src="<?= base_url('assets/images/project/project-02.png') ?>" alt="Plaza Vía Puerta de Hierro">
                                    </div>
                                    <div class="rs-portfolio-content">
                                        <div class="rs-portfolio-tag"><a href="#portafolio">Comercial / Estructural</a></div>
                                        <h4 class="rs-portfolio-title underline has-white"><a href="#portafolio">Plaza Vía Puerta de Hierro</a></h4>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="rs-portfolio-item">
                                    <div class="rs-portfolio-thumb has-clip-path">
                                        <img src="<?= base_url('assets/images/project/project-03.png') ?>" alt="Naves Aeropuerto">
                                    </div>
                                    <div class="rs-portfolio-content">
                                        <div class="rs-portfolio-tag"><a href="#portafolio">Industrial - 64,400 m²</a></div>
                                        <h4 class="rs-portfolio-title underline has-white"><a href="#portafolio">Naves Aeropuerto</a></h4>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="rs-portfolio-item">
                                    <div class="rs-portfolio-thumb has-clip-path">
                                        <img src="<?= base_url('assets/images/project/project-04.png') ?>" alt="Deportivo KIA">
                                    </div>
                                    <div class="rs-portfolio-content">
                                        <div class="rs-portfolio-tag"><a href="#portafolio">Recreativo - Pesquería</a></div>
                                        <h4 class="rs-portfolio-title underline has-white"><a href="#portafolio">Deportivo KIA</a></h4>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="rs-portfolio-item">
                                    <div class="rs-portfolio-thumb has-clip-path">
                                        <img src="<?= base_url('assets/images/project/project-05.png') ?>" alt="Edificio U-ERRE Campus Valle Alto">
                                    </div>
                                    <div class="rs-portfolio-content">
                                        <div class="rs-portfolio-tag"><a href="#portafolio">Educativo / Fachada</a></div>
                                        <h4 class="rs-portfolio-title underline has-white"><a href="#portafolio">Edificio U-ERRE Campus Valle Alto</a></h4>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="rs-portfolio-item">
                                    <div class="rs-portfolio-thumb has-clip-path">
                                        <img src="<?= base_url('assets/images/project/project-06.png') ?>" alt="Valmont Monterrey">
                                    </div>
                                    <div class="rs-portfolio-content">
                                        <div class="rs-portfolio-tag"><a href="#portafolio">Industrial / Comedor</a></div>
                                        <h4 class="rs-portfolio-title underline has-white"><a href="#portafolio">Valmont Monterrey</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- project area end -->

<!-- brand area start -->
<section class="rs-brand-area section-space-bottom rs-swiper">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="rs-section-title-wrapper section-title-space text-center">
                    <h3 class="rs-section-title">Clientes</h3>
                </div>
            </div>
        </div>
        <div class="swiper" data-loop="true" data-speed="1200" data-autoplay="true" data-delay="2500" data-item="5" data-item-xl="5" data-item-lg="4" data-item-md="3" data-item-sm="2" data-item-xs="2" data-item-mobile="2" data-margin="24" data-margin-xl="24" data-margin-lg="20" data-margin-md="16" data-margin-sm="14" data-margin-xs="12" data-margin-mobile="12">
            <div class="swiper-wrapper align-items-center">
                <div class="swiper-slide"><div class="rs-brand-item"><img src="<?= base_url('assets/images/brand/brand-01.png') ?>" alt="KIA"></div></div>
                <div class="swiper-slide"><div class="rs-brand-item"><img src="<?= base_url('assets/images/brand/brand-02.png') ?>" alt="Metalsa"></div></div>
                <div class="swiper-slide"><div class="rs-brand-item"><img src="<?= base_url('assets/images/brand/brand-03.png') ?>" alt="U-ERRE"></div></div>
                <div class="swiper-slide"><div class="rs-brand-item"><img src="<?= base_url('assets/images/brand/brand-04.png') ?>" alt="Carza"></div></div>
                <div class="swiper-slide"><div class="rs-brand-item"><img src="<?= base_url('assets/images/brand/brand-05.png') ?>" alt="Younchang"></div></div>
                <div class="swiper-slide"><div class="rs-brand-item"><img src="<?= base_url('assets/images/brand/brand-01.png') ?>" alt="Valmont"></div></div>
                <div class="swiper-slide"><div class="rs-brand-item"><img src="<?= base_url('assets/images/brand/brand-02.png') ?>" alt="Afirme"></div></div>
            </div>
        </div>
    </div>
</section>
<!-- brand area end -->

<!-- contact area start -->
<section id="contacto" class="rs-contact-area section-space-top section-space-bottom black-bg">
    <div class="container">
        <div class="row g-5">
            <div class="col-xl-12">
                <div class="rs-section-title-wrapper text-center">
                    <span class="rs-section-subtitle">Contacto</span>
                    <h2 class="rs-section-title">Contacto</h2>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="rs-contact-item text-center">
                    <h5>Dirección</h5>
                    <p>Av. Miguel Alemán #106-1 Col. Libertad, Guadalupe, Nuevo León. C.P. 67130.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="rs-contact-item text-center">
                    <h5>Teléfono</h5>
                    <p><a href="tel:+528131436292">81 31 43 62 92</a></p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="rs-contact-item text-center">
                    <h5>Celular</h5>
                    <p><a href="tel:+528115450426">81 15 45 04 26</a></p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="rs-contact-item text-center">
                    <h5>Correo</h5>
                    <p><a href="mailto:proyectos@desaingenieria.com">proyectos@desaingenieria.com</a></p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- contact area end -->
</main>

<?= $this->endSection() ?>
