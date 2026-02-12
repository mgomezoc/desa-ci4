<?= $this->extend('layouts/main') ?>

<?= $this->section('styles') ?>
<style>
    .rs-feature-one .rs-feature-item {
        height: 100%;
        display: flex;
        flex-direction: column;
    }

    .rs-feature-one .rs-feature-title {
        font-size: 40px;
        line-height: 1.18;
        min-height: 94px;
    }

    .rs-about-contact-btn {
        margin-top: 30px;
    }

    .rs-work-step-area .rs-work-step-item {
        height: 100%;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }

    .rs-work-step-top {
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin-bottom: 22px;
    }

    .rs-work-step-index {
        font-size: 64px;
        line-height: 1;
        font-weight: 700;
        color: rgba(20, 20, 20, 0.08);
    }
</style>
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<section id="inicio" class="rs-banner-area rs-banner-one p-relative rs-swiper">
    <div class="rs-banner-shape">
        <img src="<?= base_url('assets/images/shape/half-arrow.png') ?>" alt="Decoración">
    </div>

    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-xl-3 d-none d-xl-block">
                <div class="rs-banner-meta-wrapper">
                    <div class="rs-banner-contact-item">
                        <span>Correo</span>
                        <h6><a href="mailto:proyectos@desaingenieria.com">proyectos@desaingenieria.com</a></h6>
                    </div>
                    <div class="rs-banner-contact-item">
                        <span>Teléfono</span>
                        <h6><a href="tel:+528131436292">81 31 43 62 92</a></h6>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="rs-banner-slider-wrapper">
        <div class="swiper" data-clone-slides="false" data-loop="true" data-speed="2000" data-autoplay="true" data-hover-pause="true" data-effect="fade" data-delay="2500" data-item="1">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="rs-banner-item-wrapper">
                        <div class="rs-banner-bg-thumb" data-background="<?= base_url('assets/images/bg/banner-bg-01.png') ?>"></div>
                        <div class="container">
                            <div class="row">
                                <div class="col-xxl-8 col-xl-8 col-lg-10">
                                    <div class="rs-banner-item">
                                        <div class="rs-banner-content">
                                            <h1 class="rs-banner-title">Ingenieros y Arquitectos con más de 20 años de experiencia</h1>
                                            <div class="rs-banner-descrip">
                                                <p>Desarrollamos ingenierías de valor para proyectos industriales, comerciales y residenciales.</p>
                                            </div>
                                            <div class="rs-banner-btn">
                                                <a class="rs-btn has-theme-orange has-icon has-bg" href="#servicios">Nuestros servicios
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
                                <div class="col-xxl-8 col-xl-8 col-lg-10">
                                    <div class="rs-banner-item">
                                        <div class="rs-banner-content">
                                            <h2 class="rs-banner-title">Eficiencia y tecnología aplicada a cada proyecto</h2>
                                            <div class="rs-banner-descrip">
                                                <p>Aplicamos software especializado para optimizar tiempos de entrega, calidad y seguridad.</p>
                                            </div>
                                            <div class="rs-banner-btn">
                                                <a class="rs-btn has-theme-orange has-icon has-bg" href="#proyectos">Ver proyectos
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

            <div class="rs-banner-navigation">
                <button class="swiper-button-prev rs-swiper-btn"><i class="fa-regular fa-arrow-left"></i></button>
                <button class="swiper-button-next rs-swiper-btn"><i class="fa-regular fa-arrow-right"></i></button>
            </div>
        </div>
    </div>
</section>

<section class="rs-feature-area section-space rs-feature-one">
    <div class="container">
        <div class="row g-5 process-counts">
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="rs-feature-item">
                    <div class="rs-feature-icon"><i class="ri-building-2-line" style="font-size:48px;color:#EA5501;"></i></div>
                    <h4 class="rs-feature-title">Ingeniería Estructural</h4>
                    <p class="rs-feature-descrip">Diseño estructural asistido por computadora para proyectos industriales, comerciales y residenciales.</p>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="rs-feature-item">
                    <div class="rs-feature-icon"><i class="ri-compass-3-line" style="font-size:48px;color:#EA5501;"></i></div>
                    <h4 class="rs-feature-title">Arquitectura</h4>
                    <p class="rs-feature-descrip">Planos arquitectónicos, proyectos ejecutivos y representaciones en 3D.</p>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="rs-feature-item">
                    <div class="rs-feature-icon"><i class="ri-flashlight-line" style="font-size:48px;color:#EA5501;"></i></div>
                    <h4 class="rs-feature-title">Ingeniería Eléctrica</h4>
                    <p class="rs-feature-descrip">Cableado, iluminación, estudios de corto circuito y diagramas unifilares.</p>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="rs-feature-item">
                    <div class="rs-feature-icon"><i class="ri-drop-line" style="font-size:48px;color:#EA5501;"></i></div>
                    <h4 class="rs-feature-title">Ingeniería Hidrosanitaria</h4>
                    <p class="rs-feature-descrip">Diseño de redes hidrológicas, sanitarias y pluviales con memorias de cálculo.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="nosotros" class="rs-about-area section-space-bottom rs-about-one">
    <div class="container">
        <div class="row g-5">
            <div class="col-xl-7 col-lg-7">
                <div class="rs-section-title-wrapper">
                    <span class="rs-section-subtitle has-theme-orange justify-content-start">Nosotros</span>
                    <h2 class="rs-section-title rs-split-text-enable split-in-fade">Más de <span class="rs-theme-orange">20 años</span> de experiencia en ingeniería y arquitectura</h2>
                </div>
            </div>
            <div class="col-xl-5 col-lg-5">
                <div class="rs-about-content">
                    <div class="rs-about-description">
                        <p class="descrip-1">Somos una empresa formada por ingenieros y arquitectos orientados a resultados.</p>
                        <p class="descrip-2">Reducimos tiempos de entrega con tecnología de vanguardia, priorizando seguridad, funcionalidad y viabilidad constructiva.</p>
                    </div>
                    <div class="rs-about-contact-btn">
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
                <div class="rs-about-thumb">
                    <div class="rs-about-bg-thumb" data-background="<?= base_url('assets/images/about/about-thumb-01.png') ?>"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="rs-counter-area rs-counter-one">
    <div class="container">
        <div class="rs-counter-wrapper">
            <div class="rs-counter-bg" data-background="<?= base_url('assets/images/bg/counter-bg-01.png') ?>"></div>
            <div class="row g-5 justify-content-center">
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6"><div class="rs-counter-item"><div class="rs-counter-inner"><div class="rs-counter-number-wrapper"><span class="rs-counter-number odometer" data-count="20">00</span><span class="prefix">+</span></div><span class="rs-counter-title">Años de experiencia</span></div></div></div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6"><div class="rs-counter-item"><div class="rs-counter-inner"><div class="rs-counter-number-wrapper"><span class="rs-counter-number odometer" data-count="5">00</span><span class="prefix">+</span></div><span class="rs-counter-title">Áreas de ingeniería</span></div></div></div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6"><div class="rs-counter-item"><div class="rs-counter-inner"><div class="rs-counter-number-wrapper"><span class="rs-counter-number odometer" data-count="8">00</span><span class="prefix">+</span></div><span class="rs-counter-title">Software especializado</span></div></div></div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6"><div class="rs-counter-item"><div class="rs-counter-inner"><div class="rs-counter-number-wrapper"><span class="rs-counter-number odometer" data-count="20">00</span><span class="prefix">+</span></div><span class="rs-counter-title">Normas aplicadas</span></div></div></div>
            </div>
        </div>
    </div>
</div>

<section id="servicios" class="rs-services-area section-space-top rs-services-one primary-bg p-relative">
    <div class="rs-services-shape"><img src="<?= base_url('assets/images/shape/wave-shape-01.png') ?>" alt="Decoración"></div>
    <div class="container">
        <div class="row g-5 section-title-space align-items-center">
            <div class="col-xl-7 col-lg-7">
                <div class="rs-section-title-wrapper">
                    <span class="rs-section-subtitle has-theme-orange justify-content-start">Nuestros Servicios</span>
                    <h2 class="rs-section-title">Soluciones integrales de ingeniería y arquitectura</h2>
                </div>
            </div>
            <div class="col-xl-5 col-lg-5">
                <div class="rs-services-btn">
                    <a class="rs-btn has-bg-transparent has-icon has-bg" href="#contacto">Solicitar cotización
                        <span class="icon-box">
                            <svg class="icon-first" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"><path d="M31.71,15.29l-10-10L20.29,6.71,28.59,15H0v2H28.59l-8.29,8.29,1.41,1.41,10-10A1,1,0,0,0,31.71,15.29Z"></path></svg>
                            <svg class="icon-second" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"><path d="M31.71,15.29l-10-10L20.29,6.71,28.59,15H0v2H28.59l-8.29,8.29,1.41,1.41,10-10A1,1,0,0,0,31.71,15.29Z"></path></svg>
                        </span>
                    </a>
                </div>
            </div>
        </div>
        <div class="row"><div class="col-xl-12"><p class="text-white-50">Ingeniería estructural, preliminares, arquitectura, eléctrica e hidrosanitaria para ejecución segura y eficiente.</p></div></div>
    </div>
</section>

<section id="tecnologia" class="rs-work-step-area rs-work-step-one section-space primary-bg">
    <div class="container">
        <div class="row g-5 section-title-space justify-content-center">
            <div class="col-xl-8">
                <div class="rs-section-title-wrapper text-center">
                    <span class="rs-section-subtitle has-theme-orange">Nuestra metodología</span>
                    <h2 class="rs-section-title">Proceso de trabajo uniforme para cada proyecto</h2>
                </div>
            </div>
        </div>

        <div class="rs-work-step-wrapper">
            <div class="row g-5 process-counts">
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="rs-work-step-item">
                        <div>
                            <h5 class="rs-work-step-title">Objetivos y filosofía</h5>
                            <div class="rs-work-step-top">
                                <div class="rs-work-step-icon"><i class="ri-target-line" style="font-size:48px;"></i></div>
                                <span class="rs-work-step-index">01</span>
                            </div>
                        </div>
                        <div class="rs-work-step-descrip"><p>Crecimiento ordenado con mejora continua y enfoque en tiempo, costo y calidad.</p></div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="rs-work-step-item">
                        <div>
                            <h5 class="rs-work-step-title">Especificaciones y normas</h5>
                            <div class="rs-work-step-top">
                                <div class="rs-work-step-icon"><i class="ri-shield-check-line" style="font-size:48px;"></i></div>
                                <span class="rs-work-step-index">02</span>
                            </div>
                        </div>
                        <div class="rs-work-step-descrip"><p>Diseños alineados con normas nacionales e internacionales aplicables.</p></div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="rs-work-step-item">
                        <div>
                            <h5 class="rs-work-step-title">Tecnología aplicada</h5>
                            <div class="rs-work-step-top">
                                <div class="rs-work-step-icon"><i class="ri-computer-line" style="font-size:48px;"></i></div>
                                <span class="rs-work-step-index">03</span>
                            </div>
                        </div>
                        <div class="rs-work-step-descrip"><p>Uso de CYPE CAD, TEKLA, Revit, STAAD Pro, ETABS, AutoCAD y más.</p></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="proyectos" class="rs-portfolio-area section-space-top rs-portfolio-one rs-swiper">
    <div class="container">
        <div class="row g-5 section-title-space align-items-end">
            <div class="col-xxl-7 col-xl-8 col-lg-8">
                <div class="rs-section-title-wrapper">
                    <span class="rs-section-subtitle has-theme-orange justify-content-start">Proyectos</span>
                    <h2 class="rs-section-title">Portafolio de proyectos</h2>
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
                    <div class="swiper has-space" data-loop="true" data-speed="1500" data-autoplay="true" data-hover-pause="true" data-delay="2500" data-item="4" data-item-xl="3" data-item-lg="3" data-item-md="2" data-item-sm="1" data-item-xs="1" data-item-mobile="1" data-margin="30">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide"><div class="rs-portfolio-item"><div class="rs-portfolio-thumb"><img src="<?= base_url('assets/images/portfolio/portfolio-thumb-01.png') ?>" alt="Plaza Vía Puerta de Hierro"></div><div class="rs-portfolio-content"><div class="rs-portfolio-tag"><span>PAGA Desarrollos</span></div><h4 class="rs-portfolio-title underline has-white">Plaza Vía Puerta de Hierro</h4><p class="text-white-50">Diseño estructural de cubiertas y escaleras.</p></div></div></div>
                            <div class="swiper-slide"><div class="rs-portfolio-item"><div class="rs-portfolio-thumb"><img src="<?= base_url('assets/images/portfolio/portfolio-thumb-02.png') ?>" alt="Agencia Mercedes Benz La Rioja"></div><div class="rs-portfolio-content"><div class="rs-portfolio-tag"><span>SIE Industrial</span></div><h4 class="rs-portfolio-title underline has-white">Agencia Mercedes Benz La Rioja</h4><p class="text-white-50">Ingeniería de estructura metálica de cubierta y mezzanine.</p></div></div></div>
                            <div class="swiper-slide"><div class="rs-portfolio-item"><div class="rs-portfolio-thumb"><img src="<?= base_url('assets/images/portfolio/portfolio-thumb-03.png') ?>" alt="Plaza Comercial Andenes Guadalupe"></div><div class="rs-portfolio-content"><div class="rs-portfolio-tag"><span>PAGA Desarrollos</span></div><h4 class="rs-portfolio-title underline has-white">Plaza Comercial Andenes</h4><p class="text-white-50">Diseño estructural de cubierta metálica.</p></div></div></div>
                            <div class="swiper-slide"><div class="rs-portfolio-item"><div class="rs-portfolio-thumb"><img src="<?= base_url('assets/images/portfolio/portfolio-thumb-04.png') ?>" alt="Preparatoria U-ERRE"></div><div class="rs-portfolio-content"><div class="rs-portfolio-tag"><span>U-ERRE</span></div><h4 class="rs-portfolio-title underline has-white">Preparatoria U-ERRE</h4><p class="text-white-50">Diseño estructural de fachada metálica.</p></div></div></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="clientes" class="rs-brand-area rs-brand-one section-space primary-bg rs-swiper">
    <div class="container">
        <div class="row g-5 section-title-space justify-content-center">
            <div class="col-xl-8">
                <div class="rs-section-title-wrapper text-center">
                    <span class="rs-section-subtitle has-theme-orange">Nuestros clientes</span>
                    <h2 class="rs-section-title">Clientes que confían en DESA Ingeniería</h2>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xl-12">
                <div class="rs-brand-wrapper">
                    <div class="swiper" data-loop="true" data-speed="1500" data-autoplay="true" data-hover-pause="true" data-delay="1800" data-item="6" data-item-xl="5" data-item-lg="4" data-item-md="3" data-item-sm="2" data-item-xs="2" data-item-mobile="1">
                        <div class="swiper-wrapper">
                            <?php
                            $clientes = [
                                ['brand-thumb-02.png', 'PAGA Desarrollos'],
                                ['brand-thumb-03.png', 'Pastelería Lety'],
                                ['brand-thumb-04.png', 'Valmont'],
                                ['brand-thumb-05.png', 'KIA'],
                                ['brand-thumb-06.png', 'VYNMSA'],
                                ['brand-thumb-07.png', 'Metalsa'],
                                ['brand-thumb-08.png', 'Carza'],
                                ['brand-thumb-09.png', 'U-ERRE'],
                                ['brand-thumb-10.png', 'Azcunaga Arquitectos'],
                                ['brand-thumb-11.png', 'AD Arquitectos'],
                                ['brand-thumb-12.png', 'HW Proyectos'],
                                ['brand-thumb-13.png', 'Younchang'],
                                ['brand-thumb-14.png', 'SIE Industrial'],
                            ];
                            ?>
                            <?php foreach ($clientes as [$logo, $nombre]): ?>
                                <div class="swiper-slide">
                                    <div class="rs-brand-item has-clip-path">
                                        <div class="rs-brand-thumb">
                                            <img src="<?= base_url('assets/images/brand/' . $logo) ?>" alt="<?= esc($nombre) ?>">
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="contacto" class="rs-contact-area rs-contact-one section-space black-bg p-relative">
    <div class="rs-contact-bg" data-background="<?= base_url('assets/images/bg/contact-bg-01.png') ?>"></div>
    <div class="container">
        <?php if (session()->getFlashdata('success')): ?>
            <div class="alert alert-success mb-30" role="alert"><?= esc(session()->getFlashdata('success')) ?></div>
        <?php endif; ?>
        <?php if (session()->getFlashdata('error')): ?>
            <div class="alert alert-danger mb-30" role="alert"><?= esc(session()->getFlashdata('error')) ?></div>
        <?php endif; ?>

        <div class="row align-items-xl-center g-5">
            <div class="col-xl-7 col-lg-7">
                <div class="rs-contact-wrapper">
                    <div class="rs-section-title-wrapper">
                        <span class="rs-section-subtitle has-theme-orange justify-content-start">Contacto</span>
                        <h2 class="rs-section-title mb-30 rs-split-text-enable split-in-fade">¿Tiene un proyecto en mente? Contáctenos</h2>
                        <p class="descrip">Av. Miguel Alemán #106-1 Col. Libertad, Guadalupe, Nuevo León C.P. 67130.</p>
                    </div>
                    <div class="rs-contact-list">
                        <div class="rs-contact-list-item"><div class="rs-contact-list-content"><span>Dirección</span><h6><a href="#">Av. Miguel Alemán #106-1 Col. Libertad, Guadalupe, Nuevo León C.P. 67130</a></h6></div></div>
                        <div class="rs-contact-list-item"><div class="rs-contact-list-content"><span>Teléfonos</span><h6 class="mb-5"><a href="tel:+528131436292">Oficina: 81 31 43 62 92</a></h6><h6><a href="tel:+528115450426">Celular: 81 15 45 04 26</a></h6></div></div>
                        <div class="rs-contact-list-item"><div class="rs-contact-list-content"><span>Correo</span><h6><a href="mailto:proyectos@desaingenieria.com">proyectos@desaingenieria.com</a></h6></div></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-5 col-lg-5">
                <div class="rs-contact-form wow fadeInRight" data-wow-delay=".3s" data-wow-duration="1s">
                    <div class="rs-contact-form-bg-thumb" data-background="<?= base_url('assets/images/bg/contact-bg-03.png') ?>"></div>
                    <h3 class="rs-contact-form-title">Solicite una cotización</h3>
                    <form action="<?= base_url('/') ?>" method="post">
                        <?= csrf_field() ?>
                        <div class="row g-4">
                            <div class="col-md-12"><div class="rs-contact-input"><input name="nombre" type="text" placeholder="Nombre completo" value="<?= old('nombre') ?>" required><?php if (isset($validation) && $validation->hasError('nombre')): ?><small class="text-danger"><?= esc($validation->getError('nombre')) ?></small><?php endif; ?></div></div>
                            <div class="col-md-12"><div class="rs-contact-input"><input name="email" type="email" placeholder="Correo electrónico" value="<?= old('email') ?>" required><?php if (isset($validation) && $validation->hasError('email')): ?><small class="text-danger"><?= esc($validation->getError('email')) ?></small><?php endif; ?></div></div>
                            <div class="col-md-12"><div class="rs-contact-input"><input name="telefono" type="text" placeholder="Teléfono" value="<?= old('telefono') ?>" required><?php if (isset($validation) && $validation->hasError('telefono')): ?><small class="text-danger"><?= esc($validation->getError('telefono')) ?></small><?php endif; ?></div></div>
                            <div class="col-md-12"><div class="rs-contact-input"><textarea name="mensaje" placeholder="Descripción del proyecto" required><?= old('mensaje') ?></textarea><?php if (isset($validation) && $validation->hasError('mensaje')): ?><small class="text-danger"><?= esc($validation->getError('mensaje')) ?></small><?php endif; ?></div></div>
                            <div class="col-md-12"><div class="rs-contact-btn"><button type="submit" class="rs-btn black-bg">Enviar mensaje</button></div></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection() ?>
