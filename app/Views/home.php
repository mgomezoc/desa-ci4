<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<section class="rs-banner-area rs-banner-one p-relative rs-swiper">
    <div class="rs-banner-shape">
        <img src="<?= base_url('assets/images/shape/half-arrow.png') ?>" alt="decoración">
    </div>
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-xl-2">
                <div class="rs-banner-meta-wrapper">
                    <div class="rs-banner-contact-item">
                        <span>Correo.</span>
                        <h6><a href="mailto:proyectos@desaingenieria.com">proyectos@desaingenieria.com</a></h6>
                    </div>
                    <div class="rs-banner-contact-item">
                        <span>Teléfono.</span>
                        <h6><a href="tel:+528131436292">81 31 43 62 92</a></h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="rs-banner-slider-wrapper">
        <div class="swiper" data-clone-slides="false" data-loop="true" data-speed="2000" data-autoplay="true" data-dots-dynamic="false" data-hover-pause="true" data-effect="fade" data-delay="4500" data-item="1" data-item-xl="1" data-item-lg="1" data-item-md="1" data-item-sm="1" data-item-xs="1" data-item-mobile="1" data-margin="30" data-margin-xl="30" data-margin-lg="30" data-margin-md="30" data-margin-sm="30" data-margin-xs="30" data-margin-mobile="30">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="rs-banner-item-wrapper">
                        <div class="rs-banner-bg-thumb" data-background="<?= base_url('assets/images/bg/banner-bg-01.png') ?>"></div>
                        <div class="container">
                            <div class="row">
                                <div class="col-xxl-8 col-xl-8 col-lg-10">
                                    <div class="rs-banner-item">
                                        <div class="rs-banner-content">
                                            <h1 class="rs-banner-title">DESA INGENIERÍA: Soluciones Integrales en Construcción</h1>
                                            <div class="rs-banner-descrip">
                                                <p>Desarrollamos Ingenierías de valor para proyectos Industriales, Comerciales y Residenciales.</p>
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
            </div>
            <div class="rs-swiper-dot rs-banner-dot"></div>
        </div>
    </div>
</section>

<section class="rs-about-area section-space-bottom rs-about-one">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-xl-6 col-lg-6">
                <div class="rs-section-title-wrapper">
                    <span class="rs-section-subtitle wow fadeInLeft" data-wow-delay=".2s">Sobre Nosotros</span>
                    <h2 class="rs-section-title wow fadeInLeft" data-wow-delay=".4s">Más de 20 años de experiencia</h2>
                </div>
                <div class="rs-about-content">
                    <div class="rs-about-description">
                        <p>Nuestra empresa se caracteriza por la eficiencia de nuestros servicios, reducimos los tiempos de entrega contando con la última tecnología en software de ingeniería.</p>
                    </div>
                    <div class="rs-about-list wow fadeInUp" data-wow-delay=".3s">
                        <ul>
                            <li>Ingeniería de Valor</li>
                            <li>Seguridad e Integridad</li>
                            <li>Tecnología Avanzada (Tekla, CypeCAD, Revit)</li>
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

<section class="rs-services-area section-space-top rs-services-one primary-bg p-relative">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="rs-section-title-wrapper section-title-space text-center">
                    <span class="rs-section-subtitle wow fadeInUp" data-wow-delay=".2s">Servicios</span>
                    <h2 class="rs-section-title wow fadeInUp" data-wow-delay=".4s">Áreas de especialidad DESA INGENIERÍA</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="rs-services-tab">
                    <ul class="nav nav-pills" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation"><button class="nav-link active" id="pills-item-one-tab" data-bs-toggle="pill" data-bs-target="#pills-item-one" type="button" role="tab" aria-controls="pills-item-one" aria-selected="true">Ingenierías Preliminares</button></li>
                        <li class="nav-item" role="presentation"><button class="nav-link" id="pills-item-two-tab" data-bs-toggle="pill" data-bs-target="#pills-item-two" type="button" role="tab" aria-controls="pills-item-two" aria-selected="false">Ingeniería Estructural</button></li>
                        <li class="nav-item" role="presentation"><button class="nav-link" id="pills-item-three-tab" data-bs-toggle="pill" data-bs-target="#pills-item-three" type="button" role="tab" aria-controls="pills-item-three" aria-selected="false">Arquitectura</button></li>
                        <li class="nav-item" role="presentation"><button class="nav-link" id="pills-item-four-tab" data-bs-toggle="pill" data-bs-target="#pills-item-four" type="button" role="tab" aria-controls="pills-item-four" aria-selected="false">Ingeniería de Instalaciones</button></li>
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-item-one" role="tabpanel" aria-labelledby="pills-item-one-tab" tabindex="0">
                            <div class="rs-services-tab-content-wrapper p-relative"><h3 class="rs-services-tab-title">Ingenierías Preliminares</h3><p>Topografía y mecánica de suelos para una base técnica confiable desde la etapa inicial del proyecto.</p></div>
                        </div>
                        <div class="tab-pane fade" id="pills-item-two" role="tabpanel" aria-labelledby="pills-item-two-tab" tabindex="0">
                            <div class="rs-services-tab-content-wrapper p-relative"><h3 class="rs-services-tab-title">Ingeniería Estructural</h3><p>Diseño asistido por computadora, cimentaciones y naves industriales con enfoque en seguridad e integridad estructural.</p></div>
                        </div>
                        <div class="tab-pane fade" id="pills-item-three" role="tabpanel" aria-labelledby="pills-item-three-tab" tabindex="0">
                            <div class="rs-services-tab-content-wrapper p-relative"><h3 class="rs-services-tab-title">Arquitectura</h3><p>Planos arquitectónicos y visualización con renders 3D para optimizar la toma de decisiones.</p></div>
                        </div>
                        <div class="tab-pane fade" id="pills-item-four" role="tabpanel" aria-labelledby="pills-item-four-tab" tabindex="0">
                            <div class="rs-services-tab-content-wrapper p-relative"><h3 class="rs-services-tab-title">Ingeniería de Instalaciones</h3><p>Proyectos de instalaciones eléctricas e hidrosanitarias para desarrollos industriales y comerciales.</p></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="rs-project-area section-space">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="rs-section-title-wrapper section-title-space text-center">
                    <span class="rs-section-subtitle wow fadeInUp" data-wow-delay=".2s">Portafolio</span>
                    <h2 class="rs-section-title wow fadeInUp" data-wow-delay=".4s">Proyectos Recientes</h2>
                </div>
            </div>
        </div>
        <div class="row g-4">
            <div class="col-xl-3 col-lg-6 col-md-6">
                <div class="rs-project-item wow fadeInUp" data-wow-delay=".2s">
                    <div class="rs-project-thumb"><img src="<?= base_url('assets/images/project/project-01.png') ?>" alt="Agencia Mercedes Benz La Rioja"></div>
                    <div class="rs-project-content"><h4 class="rs-project-title">Agencia Mercedes Benz La Rioja</h4><span>Comercial / Estructural</span></div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6">
                <div class="rs-project-item wow fadeInUp" data-wow-delay=".3s">
                    <div class="rs-project-thumb"><img src="<?= base_url('assets/images/project/project-02.png') ?>" alt="Plaza Vía Puerta de Hierro"></div>
                    <div class="rs-project-content"><h4 class="rs-project-title">Plaza Vía Puerta de Hierro</h4><span>Comercial</span></div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6">
                <div class="rs-project-item wow fadeInUp" data-wow-delay=".4s">
                    <div class="rs-project-thumb"><img src="<?= base_url('assets/images/project/project-03.png') ?>" alt="Naves Aeropuerto"></div>
                    <div class="rs-project-content"><h4 class="rs-project-title">Naves Aeropuerto - 64,400 m²</h4><span>Industrial</span></div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6">
                <div class="rs-project-item wow fadeInUp" data-wow-delay=".5s">
                    <div class="rs-project-thumb"><img src="<?= base_url('assets/images/project/project-04.png') ?>" alt="Deportivo KIA"></div>
                    <div class="rs-project-content"><h4 class="rs-project-title">Deportivo KIA - Pesquería</h4><span>Recreativo / Industrial</span></div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="contacto" class="rs-contact-area section-space-top section-space-bottom black-bg">
    <div class="container">
        <div class="row g-5">
            <div class="col-xl-12">
                <div class="rs-section-title-wrapper text-center">
                    <span class="rs-section-subtitle">Contacto</span>
                    <h2 class="rs-section-title">Hablemos de tu proyecto</h2>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="rs-contact-item text-center">
                    <h5>Dirección</h5>
                    <p>Av. Miguel Alemán #106-1 Col. Libertad, Guadalupe, Nuevo León</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="rs-contact-item text-center">
                    <h5>Teléfono</h5>
                    <p><a href="tel:+528131436292">81 31 43 62 92</a></p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="rs-contact-item text-center">
                    <h5>Email</h5>
                    <p><a href="mailto:proyectos@desaingenieria.com">proyectos@desaingenieria.com</a></p>
                </div>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection() ?>
