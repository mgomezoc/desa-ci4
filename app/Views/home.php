<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<!-- banner area start -->
<section class="rs-banner-area rs-banner-one p-relative rs-swiper">
    <div class="rs-banner-shape">
        <img src="<?= base_url('assets/images/shape/half-arrow.png') ?>" alt="decoración">
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
                                            <h1 class="rs-banner-title">Más de 20 años de experiencia</h1>
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
<section class="rs-feature-area rs-feature-one section-space-bottom">
    <div class="container">
        <div class="row g-5">
            <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="rs-feature-item wow fadeInUp" data-wow-delay=".2s">
                    <div class="rs-feature-icon"><i class="ri-line-chart-line"></i></div>
                    <div class="rs-feature-content">
                        <h4 class="rs-feature-title">Eficiencia</h4>
                        <p>Reducimos los tiempos de entrega contando con la última tecnología en software de ingeniería.</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="rs-feature-item wow fadeInUp" data-wow-delay=".4s">
                    <div class="rs-feature-icon"><i class="ri-shield-check-line"></i></div>
                    <div class="rs-feature-content">
                        <h4 class="rs-feature-title">Ingeniería de Valor</h4>
                        <p>Proyectos eficientes e ingeniosos tomando en cuenta la seguridad e integridad.</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="rs-feature-item wow fadeInUp" data-wow-delay=".6s">
                    <div class="rs-feature-icon"><i class="ri-cpu-line"></i></div>
                    <div class="rs-feature-content">
                        <h4 class="rs-feature-title">Tecnología Avanzada</h4>
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
        <div class="row g-5 align-items-center">
            <div class="col-xl-6 col-lg-6">
                <div class="rs-section-title-wrapper">
                    <span class="rs-section-subtitle wow fadeInLeft" data-wow-delay=".2s">Sobre Nosotros</span>
                    <h2 class="rs-section-title wow fadeInLeft" data-wow-delay=".4s">Calidad como forma de vida</h2>
                </div>
                <div class="rs-about-content">
                    <div class="rs-about-description">
                        <p>Nuestro objetivo es que nuestros clientes se sientan con la confianza que sus proyectos se realizan de forma eficiente. Buscamos un crecimiento ordenado, implementando un sistema de mejora continua que tome en consideración las exigencias cambiantes del mercado.</p>
                    </div>
                    <div class="rs-about-list wow fadeInUp" data-wow-delay=".3s">
                        <ul>
                            <li>Diseño estructural asistido por computadora.</li>
                            <li>Asesoría y Consultoría Constructiva.</li>
                            <li>Supervisión de Obra Civil Industrial.</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6">
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
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="rs-section-title-wrapper section-title-space text-center">
                    <span class="rs-section-subtitle wow fadeInUp" data-wow-delay=".2s">Servicios</span>
                    <h2 class="rs-section-title wow fadeInUp" data-wow-delay=".4s">Especialidades de Ingeniería y Arquitectura</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="rs-services-tab">
                    <ul class="nav nav-pills" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="pills-item-one-tab" data-bs-toggle="pill" data-bs-target="#pills-item-one" type="button" role="tab" aria-controls="pills-item-one" aria-selected="true">Ingenierías Preliminares</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-item-two-tab" data-bs-toggle="pill" data-bs-target="#pills-item-two" type="button" role="tab" aria-controls="pills-item-two" aria-selected="false">Ingeniería Estructural</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-item-three-tab" data-bs-toggle="pill" data-bs-target="#pills-item-three" type="button" role="tab" aria-controls="pills-item-three" aria-selected="false">Arquitectura</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-item-four-tab" data-bs-toggle="pill" data-bs-target="#pills-item-four" type="button" role="tab" aria-controls="pills-item-four" aria-selected="false">Instalaciones</button>
                        </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-item-one" role="tabpanel" aria-labelledby="pills-item-one-tab" tabindex="0">
                            <div class="rs-services-tab-content-wrapper p-relative">
                                <h3 class="rs-services-tab-title">Ingenierías Preliminares</h3>
                                <p>Levantamiento Topográfico, Construcciones Existentes con Escáner Láser, Estudios de mecánica de suelos, Estudios hidrológicos.</p>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-item-two" role="tabpanel" aria-labelledby="pills-item-two-tab" tabindex="0">
                            <div class="rs-services-tab-content-wrapper p-relative">
                                <h3 class="rs-services-tab-title">Ingeniería Estructural</h3>
                                <p>Diseño de naves industriales, Edificios multiniveles, Cimentaciones de equipos y prensas, Maquila de planos con TEKLA Structures.</p>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-item-three" role="tabpanel" aria-labelledby="pills-item-three-tab" tabindex="0">
                            <div class="rs-services-tab-content-wrapper p-relative">
                                <h3 class="rs-services-tab-title">Arquitectura</h3>
                                <p>Planos Arquitectónicos, Proyectos Ejecutivos, Renders 3D, Recorridos virtuales, Catálogo de Conceptos.</p>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-item-four" role="tabpanel" aria-labelledby="pills-item-four-tab" tabindex="0">
                            <div class="rs-services-tab-content-wrapper p-relative">
                                <h3 class="rs-services-tab-title">Instalaciones</h3>
                                <p>Ingeniería Eléctrica (Media y baja tensión), Ingeniería Hidrosanitaria (Pluvial, Sanitario), Sistemas contra incendio.</p>
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
<section class="rs-work-step-area section-space-top section-space-bottom">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="rs-section-title-wrapper section-title-space text-center">
                    <span class="rs-section-subtitle wow fadeInUp" data-wow-delay=".2s">Normatividad</span>
                    <h2 class="rs-section-title wow fadeInUp" data-wow-delay=".4s">Especificaciones y Normas</h2>
                </div>
            </div>
        </div>
        <div class="row g-5">
            <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="rs-work-step-item wow fadeInUp" data-wow-delay=".2s">
                    <div class="rs-work-step-count">01</div>
                    <h4 class="rs-work-step-title">AISC / IMCA</h4>
                    <p>American Institute of Steel Construction &amp; Instituto Mexicano de la Construcción en Acero.</p>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="rs-work-step-item wow fadeInUp" data-wow-delay=".4s">
                    <div class="rs-work-step-count">02</div>
                    <h4 class="rs-work-step-title">AWS / SJI</h4>
                    <p>American Welding Society &amp; Steel Joist Institute.</p>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="rs-work-step-item wow fadeInUp" data-wow-delay=".6s">
                    <div class="rs-work-step-count">03</div>
                    <h4 class="rs-work-step-title">Reglamentos Locales</h4>
                    <p>NTC CDMX 2017, CFE y Normas Oficiales Mexicanas (NOM).</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- work step area end -->

<!-- project area start -->
<section id="portafolio" class="rs-project-area section-space-bottom rs-swiper">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="rs-section-title-wrapper section-title-space text-center">
                    <span class="rs-section-subtitle wow fadeInUp" data-wow-delay=".2s">Portafolio</span>
                    <h2 class="rs-section-title wow fadeInUp" data-wow-delay=".4s">Portafolio de Proyectos</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="swiper" data-loop="true" data-speed="1200" data-autoplay="true" data-delay="3000" data-item="4" data-item-xl="4" data-item-lg="3" data-item-md="2" data-item-sm="2" data-item-xs="1" data-item-mobile="1" data-margin="24" data-margin-xl="24" data-margin-lg="24" data-margin-md="20" data-margin-sm="20" data-margin-xs="16" data-margin-mobile="16" data-dots="true">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="rs-project-item">
                        <div class="rs-project-thumb"><img src="<?= base_url('assets/images/project/project-01.png') ?>" alt="Agencia Mercedes Benz La Rioja"></div>
                        <div class="rs-project-content"><h4 class="rs-project-title">Agencia Mercedes Benz La Rioja</h4><span>Comercial / Estructural</span></div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="rs-project-item">
                        <div class="rs-project-thumb"><img src="<?= base_url('assets/images/project/project-02.png') ?>" alt="Plaza Vía Puerta de Hierro"></div>
                        <div class="rs-project-content"><h4 class="rs-project-title">Plaza Vía Puerta de Hierro</h4><span>Comercial / Estructural</span></div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="rs-project-item">
                        <div class="rs-project-thumb"><img src="<?= base_url('assets/images/project/project-03.png') ?>" alt="Naves Aeropuerto"></div>
                        <div class="rs-project-content"><h4 class="rs-project-title">Naves Aeropuerto</h4><span>Industrial - 64,400 m²</span></div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="rs-project-item">
                        <div class="rs-project-thumb"><img src="<?= base_url('assets/images/project/project-04.png') ?>" alt="Deportivo KIA"></div>
                        <div class="rs-project-content"><h4 class="rs-project-title">Deportivo KIA</h4><span>Recreativo - Pesquería</span></div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="rs-project-item">
                        <div class="rs-project-thumb"><img src="<?= base_url('assets/images/project/project-05.png') ?>" alt="Edificio U-ERRE Campus Valle Alto"></div>
                        <div class="rs-project-content"><h4 class="rs-project-title">Edificio U-ERRE Campus Valle Alto</h4><span>Educativo / Fachada</span></div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="rs-project-item">
                        <div class="rs-project-thumb"><img src="<?= base_url('assets/images/project/project-06.png') ?>" alt="Valmont Monterrey"></div>
                        <div class="rs-project-content"><h4 class="rs-project-title">Valmont Monterrey</h4><span>Industrial / Comedor</span></div>
                    </div>
                </div>
            </div>
            <div class="rs-swiper-dot rs-project-dot"></div>
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
                    <h3 class="rs-section-title">Nuestros Clientes</h3>
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
                    <h2 class="rs-section-title">Hablemos de tu proyecto</h2>
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

<?= $this->endSection() ?>
