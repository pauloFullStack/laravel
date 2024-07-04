<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>PhpGold</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ URL::asset('assets-curriculum/img/favicon.png') }}" rel="icon">
    <link href="{{ URL::asset('assets-site-phpgold/img/apple-touch-icon.png') }}" rel="apple-touch-icon">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ URL::asset('assets-site-phpgold/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets-site-phpgold/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets-site-phpgold/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets-site-phpgold/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets-site-phpgold/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets-site-phpgold/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets-site-phpgold/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ URL::asset('assets-site-phpgold/css/style.css') }}" rel="stylesheet">

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-479623967"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'AW-479623967');

        gtag('event', 'page_view', {
            'send_to': 'AW-479623967',
            'ecomm_pagetype': 'replace with value',
            'ecomm_prodid': 'replace with value'
        });
    </script>

    <style>
        body {
            color: #161F3A;
            font-family: "Roboto Slab", Sans-serif;
        }

        p {
            color: #161F3A;
            font-family: "Roboto Slab", Sans-serif;
            font-size: 20px;
            font-weight: 300;
            line-height: 26px;
        }

        #zap-botao {
            position: fixed;
            border: 1px solid transparent;
            bottom: 10px;
            right: 15px;
            z-index: 999999999999;
            opacity: 0.97;
        }

        .img-perso-whatsapp {
            width: 80px;
            height: 80px;
        }

        .shadow-perso,
        .box,
        .icon-box {
            border-radius: 8px !important;
            /* box-shadow: 0 2px 2px 0 rgb(0 0 0 / 14%), 0 3px 1px -2px rgb(0 0 0 / 12%), 0 1px 5px 0 rgb(0 0 0 / 20%) !important; */
            box-shadow: 0 6px 10px 0 rgb(0 0 0 / 14%), 0 1px 18px 0 rgb(0 0 0 / 12%), 0 3px 5px -1px rgb(0 0 0 / 20%) !important;
        }

        @media only screen and (max-width: 630px) {

            .img-perso-whatsapp {
                width: 60px;
                height: 60px;
            }

        }
    </style>

</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top ">
        <div class="container d-flex align-items-center">

            <h1 class="logo me-auto"><a href="index.html">phpGold</a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo me-auto"><img src="assets-site-phpgold/img/logo.png" alt="" class="img-fluid"></a>-->

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                    <li><a class="nav-link scrollto" href="#about">Sobre</a></li>
                    <li><a class="nav-link scrollto" href="#services">Serviços</a></li>
                    {{-- <li><a class="nav-link   scrollto" href="#portfolio">Portfólio</a></li> --}}
                    <li><a class="nav-link   scrollto" href="#pricing">Preços</a></li>
                    <li><a class="nav-link scrollto" href="#contact">Contato</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1"
                    data-aos="fade-up" data-aos-delay="200">
                    <h1>Construa sua presença on-line exclusiva com sites personalizados</h1>
                    <h2></h2>
                    <div class="d-flex justify-content-center justify-content-lg-start">
                        <a href="https://api.whatsapp.com/send?phone=5534992245739&text=Estou%20interessado(a)%20em%20criar%20um%20site"
                            target="_blank" class="btn-get-started scrollto">Comece agora</a>
                        {{-- <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="glightbox btn-watch-video"><i
                                class="bi bi-play-circle"></i><span>Assistir Video</span></a> --}}
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
                    <img src="{{ URL::asset('assets-site-phpgold/img/hero-img.png') }}" class="img-fluid animated"
                        alt="">
                </div>
            </div>
        </div>

    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= Clients Section ======= -->
        <section id="clients" class="clients section-bg">
            <div class="container">

                <div class="row" data-aos="zoom-in">

                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="{{ URL::asset('assets-site-phpgold/img/technology-used/aws.png') }}"
                            class="img-fluid" alt="">
                    </div>

                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="{{ URL::asset('assets-site-phpgold/img/technology-used/laravel.png') }}"
                            class="img-fluid" alt="">
                    </div>

                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="{{ URL::asset('assets-site-phpgold/img/technology-used/mysql.png') }}"
                            class="img-fluid" alt="">
                    </div>

                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="{{ URL::asset('assets-site-phpgold/img/technology-used/js.png') }}" class="img-fluid"
                            alt="">
                    </div>

                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="{{ URL::asset('assets-site-phpgold/img/technology-used/php.png') }}"
                            class="img-fluid" alt="">
                    </div>

                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="{{ URL::asset('assets-site-phpgold/img/technology-used/css.png') }}"
                            class="img-fluid" alt="">
                    </div>

                </div>

            </div>
        </section><!-- End Cliens Section -->

        <!-- ======= About Us Section ======= -->
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Sobre</h2>
                </div>
                <div class="row content">
                    <div class="col-lg-12 text-center">
                        <p>
                            Liberte Seu Potencial Online com Meus Serviços de Desenvolvimento de Sites Personalizados -
                            Bem-vindo ao Meu Negócio!
                        </p>
                        <div style="padding: 10px 0 20px 0">
                            <img src="{{ URL::asset('assets-curriculum/img/paulo.png') }}"
                                class="img-fluid rounded b-shadow-a shadow-perso" alt="">
                        </div>
                        <p>
                            Olá, me chamo Paulo Renato e entendo que um site é a porta de entrada para sua presença
                            online e pode ser crucial para a imagem da sua marca. É por isso que ofereço soluções de
                            websites personalizados para ajudá-lo a alcançar sua visão e metas únicas.
                        </p>
                        <p>Se você está começando do zero ou quer reformular um site existente, estou aqui para ajudá-lo
                            a realizar o site dos seus sonhos.
                            Como desenvolvedor experiente, posso ajudar a transformar sua visão em um site incrível e
                            funcional. Juntos, podemos criar um site que reflita sua marca e ajude a impulsionar seus
                            negócios online.
                        </p>
                        <a href="https://api.whatsapp.com/send?phone=5534992245739&text=Estou%20interessado(a)%20em%20criar%20um%20site"
                            target="_blank" class="btn-learn-more">Comece agora</a>
                    </div>
                </div>

            </div>
        </section><!-- End About Us Section -->

        <!-- ======= Why Us Section ======= -->
        <section id="why-us" class="why-us section-bg">
            <div class="container-fluid" data-aos="fade-up">

                <div class="row">

                    <div
                        class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">

                        <div class="content">
                            <h3>Transforme Sua Presença Online <strong>com Websites Personalizados!</strong></h3>
                            <h5>
                                Posso ajudá-lo a criar uma presença online forte e profissional com soluções
                                personalizadas de websites. Com anos de experiência em design e desenvolvimento de
                                sites, trabalho de perto com cada cliente para criar soluções únicas que correspondam à
                                sua visão exclusiva. Se você precisa criar um novo site ou atualizar um existente,
                                juntos podemos criar um site que reflita a identidade da sua marca e ajude a alcançar
                                seus objetivos de negócios.
                            </h5>
                        </div>
                    </div>

                    <div class="col-lg-5 align-items-stretch order-1 order-lg-2 img"
                        style='background-image: url("{{ URL::asset('assets-site-phpgold/img/why-us.png') }}");'
                        data-aos="zoom-in" data-aos-delay="150">&nbsp;</div>
                </div>

            </div>
        </section><!-- End Why Us Section -->

        <!-- ======= Services Section ======= -->
        <section id="services" class="services section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Serviços</h2>
                    <h5>Como desenvolvedor de sites, crio soluções personalizadas para atender às necessidades
                        exclusivas de cada cliente, desde pequenas empresas até grandes corporações. Além disso, também
                        ofereço serviços de copywriting para complementar sua presença online.
                    </h5>
                </div>

                <div class="row">
                    <div class="col-xl-6 col-md-6 d-flex align-items-stretch" data-aos="zoom-in"
                        data-aos-delay="100">
                        <div class="icon-box">
                            <div class="icon"><i class="fa-solid fa-earth-americas"></i></div>
                            <h4><a href="">Criação de sites </a></h4>
                            <h6 style="font-size: 18px">Criação de sites personalizadas e eficientes para
                                impulsionar o
                                sucesso da sua presença online.</h6>
                        </div>
                    </div>

                    <div class="col-xl-6 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in"
                        data-aos-delay="300">
                        <div class="icon-box">
                            <div class="icon"><i class="fa-solid fa-pen-to-square"></i></div>
                            <h4><a href="">Serviços de Copywriting</a></h4>
                            <h6 style="font-size: 18px">Copywriting para presença online com mensagens
                                efetivas e atraentes.</h6>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Services Section -->

        <!-- ======= Cta Section ======= -->
        <section id="cta" class="cta">
            <div class="container" data-aos="zoom-in">

                <div class="row">
                    <div class="col-lg-9 text-center text-lg-start">
                        <h3>PhpGold</h3>
                        <p> Em resumo, estou aqui para ajudá-lo a alcançar seus objetivos online. Entre em contato
                            comigo hoje para descobrir como posso ajudá-lo a criar ou renovar seu site!</p>
                    </div>
                    <div class="col-lg-3 cta-btn-container text-center">
                        <a class="cta-btn align-middle"
                            href="https://api.whatsapp.com/send?phone=5534992245739&text=Estou%20interessado(a)%20em%20criar%20um%20site"
                            target="_blank">Comece agora</a>
                    </div>
                </div>

            </div>
        </section><!-- End Cta Section -->

        <!-- ======= Portfolio Section ======= -->
        {{-- <section id="portfolio" class="portfolio">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Portfólio</h2>
                    <p>Exemplos de sucesso: landing pages personalizadas para alcançar objetivos online. Contate-nos
                        para soluções eficazes e personalizadas para atender suas necessidades.</p>
                </div>

                <ul id="portfolio-flters" class="d-flex justify-content-center" data-aos="fade-up"
                    data-aos-delay="100">
                    <li data-filter="*" class="filter-active">Saúde</li>
                    <li data-filter=".filter-app">Loja virtual</li>
                    <li data-filter=".filter-card">Beleza</li>
                    <li data-filter=".filter-web">Sites</li>
                </ul>

                <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-img"><img src="assets-site-phpgold/img/portfolio/portfolio-1.jpg"
                                class="img-fluid" alt=""></div>
                        <div class="portfolio-info">
                            <h4>App 1</h4>
                            <p>App</p>
                            <a href="assets-site-phpgold/img/portfolio/portfolio-1.jpg"
                                data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"
                                title="App 1"><i class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" class="details-link" title="More Details"><i
                                    class="bx bx-link"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <div class="portfolio-img"><img src="assets-site-phpgold/img/portfolio/portfolio-2.jpg"
                                class="img-fluid" alt=""></div>
                        <div class="portfolio-info">
                            <h4>Web 3</h4>
                            <p>Web</p>
                            <a href="assets-site-phpgold/img/portfolio/portfolio-2.jpg"
                                data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"
                                title="Web 3"><i class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" class="details-link" title="More Details"><i
                                    class="bx bx-link"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <div class="portfolio-img"><img src="assets-site-phpgold/img/portfolio/portfolio-8.jpg"
                                class="img-fluid" alt=""></div>
                        <div class="portfolio-info">
                            <h4>Card 3</h4>
                            <p>Card</p>
                            <a href="assets-site-phpgold/img/portfolio/portfolio-8.jpg"
                                data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"
                                title="Card 3"><i class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" class="details-link" title="More Details"><i
                                    class="bx bx-link"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <div class="portfolio-img"><img src="assets-site-phpgold/img/portfolio/portfolio-9.jpg"
                                class="img-fluid" alt=""></div>
                        <div class="portfolio-info">
                            <h4>Web 3</h4>
                            <p>Web</p>
                            <a href="assets-site-phpgold/img/portfolio/portfolio-9.jpg"
                                data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"
                                title="Web 3"><i class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" class="details-link" title="More Details"><i
                                    class="bx bx-link"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-img"><img src="assets-site-phpgold/img/portfolio/portfolio-3.jpg"
                                class="img-fluid" alt=""></div>
                        <div class="portfolio-info">
                            <h4>App 2</h4>
                            <p>App</p>
                            <a href="assets-site-phpgold/img/portfolio/portfolio-3.jpg"
                                data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"
                                title="App 2"><i class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" class="details-link" title="More Details"><i
                                    class="bx bx-link"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <div class="portfolio-img"><img src="assets-site-phpgold/img/portfolio/portfolio-4.jpg"
                                class="img-fluid" alt=""></div>
                        <div class="portfolio-info">
                            <h4>Card 2</h4>
                            <p>Card</p>
                            <a href="assets-site-phpgold/img/portfolio/portfolio-4.jpg"
                                data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"
                                title="Card 2"><i class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" class="details-link" title="More Details"><i
                                    class="bx bx-link"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <div class="portfolio-img"><img src="assets-site-phpgold/img/portfolio/portfolio-5.jpg"
                                class="img-fluid" alt=""></div>
                        <div class="portfolio-info">
                            <h4>Web 2</h4>
                            <p>Web</p>
                            <a href="assets-site-phpgold/img/portfolio/portfolio-5.jpg"
                                data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"
                                title="Web 2"><i class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" class="details-link" title="More Details"><i
                                    class="bx bx-link"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-img"><img src="assets-site-phpgold/img/portfolio/portfolio-6.jpg"
                                class="img-fluid" alt=""></div>
                        <div class="portfolio-info">
                            <h4>App 3</h4>
                            <p>App</p>
                            <a href="assets-site-phpgold/img/portfolio/portfolio-6.jpg"
                                data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"
                                title="App 3"><i class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" class="details-link" title="More Details"><i
                                    class="bx bx-link"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <div class="portfolio-img"><img src="assets-site-phpgold/img/portfolio/portfolio-7.jpg"
                                class="img-fluid" alt=""></div>
                        <div class="portfolio-info">
                            <h4>Card 1</h4>
                            <p>Card</p>
                            <a href="assets-site-phpgold/img/portfolio/portfolio-7.jpg"
                                data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"
                                title="Card 1"><i class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" class="details-link" title="More Details"><i
                                    class="bx bx-link"></i></a>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Portfolio Section --> --}}

        <!-- ======= Pricing Section ======= -->
        <section id="pricing" class="pricing">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Preços</h2>
                    <p>Ofereço preços acessíveis a partir de R$400, incluindo um domínio gratuito no primeiro ano e um
                        mês de hospedagem gratuita. Não perca mais tempo e invista em uma presença online profissional e
                        eficiente. Entre em contato comigo para mais informações e para agendar seu projeto hoje mesmo.
                    </p>
                </div>

                <div class="row">

                    <div class="col-lg-6 mt-4 mt-lg-0 mx-auto" data-aos="fade-up" data-aos-delay="200">
                        <div class="box featured">
                            <h3>Website Personalizado</h3>
                            <h4><sup>R$</sup>400<span>Parcela única</span></h4>
                            <ul>
                                <li><i class="bx bx-check"></i> Copywriting gratuito.</li>
                                <li><i class="bx bx-check"></i> Sites personalizados.</li>
                                <li><i class="bx bx-check"></i> Mantenha-se relevante na web.</li>
                                <li><i class="bx bx-check"></i> Alcance seus objetivos online.</li>
                                <li><i class="bx bx-check"></i> Invista em uma presença online de sucesso.</li>
                            </ul>
                            <a href="https://api.whatsapp.com/send?phone=5534992245739&text=Estou%20interessado(a)%20em%20criar%20um%20site"
                                target="_blank" class="buy-btn">Comece agora</a>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End Pricing Section -->

        <!-- ======= Frequently Asked Questions Section ======= -->
        <section id="faq" class="faq section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Perguntas Frequentes</h2>
                </div>

                <div class="faq-list">
                    <ul>
                        <li data-aos="fade-up" data-aos-delay="100" class="shadow-perso">
                            <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse"
                                data-bs-target="#faq-list-1">Qual é o preço do site? <i
                                    class="bx bx-chevron-down icon-show"></i><i
                                    class="bx bx-chevron-up icon-close"></i></a>
                            <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
                                <p>
                                    Um site personalizado custa a partir de R$400, que inclui o domínio e o
                                    primeiro
                                    mês de
                                    hospedagem.
                                </p>
                            </div>
                        </li>

                        {{-- <li data-aos="fade-up" data-aos-delay="100">
                            <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse"
                                data-bs-target="#faq-list-2" class="collapsed">Posso editar meu site depois
                                que ele
                                foi criado? <i class="bx bx-chevron-down icon-show"></i><i
                                    class="bx bx-chevron-up icon-close"></i></a>
                            <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
                                <p>
                                    Sim, você pode editar o texto, as imagens e as cores do seu site depois que ele foi
                                    criado. Isso permite que você atualize facilmente seu site com novas
                                    informações, promoções ou outras alterações que desejar fazer.
                                </p>
                            </div>
                        </li> --}}

                        <li data-aos="fade-up" data-aos-delay="100" class="shadow-perso">
                            <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse"
                                data-bs-target="#faq-list-3" class="collapsed">Qual é o prazo para ter meu site
                                pronto? <i class="bx bx-chevron-down icon-show"></i><i
                                    class="bx bx-chevron-up icon-close"></i></a>
                            <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">
                                <p>
                                    O prazo para a entrega do site personalizado pode variar de 1 a 2 semanas ou
                                    mais,
                                    conforme as exigências e preferências do cliente.
                                </p>
                            </div>
                        </li>

                        <li data-aos="fade-up" data-aos-delay="100" class="shadow-perso">
                            <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse"
                                data-bs-target="#faq-list-4" class="collapsed">Eu preciso fornecer o conteúdo para o
                                site ou você pode criá-lo? <i class="bx bx-chevron-down icon-show"></i><i
                                    class="bx bx-chevron-up icon-close"></i></a>
                            <div id="faq-list-4" class="collapse" data-bs-parent=".faq-list">
                                <p>
                                    Posso ajudar na criação de conteúdo, mas é necessário que você forneça as
                                    informações básicas e imagens relevantes.
                                </p>
                            </div>
                        </li>

                        <li data-aos="fade-up" data-aos-delay="100" class="shadow-perso">
                            <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse"
                                data-bs-target="#faq-list-5" class="collapsed">É possível mudar de servidor no futuro?
                                <i class="bx bx-chevron-down icon-show"></i><i
                                    class="bx bx-chevron-up icon-close"></i></a>
                            <div id="faq-list-5" class="collapse" data-bs-parent=".faq-list">
                                <p>
                                    Sim, o cliente pode escolher hospedar o seu site em qualquer servidor de sua
                                    preferência.
                                </p>
                            </div>
                        </li>


                        <li data-aos="fade-up" data-aos-delay="100" class="shadow-perso">
                            <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse"
                                data-bs-target="#faq-list-7" class="collapsed">O que é um domínio?
                                <i class="bx bx-chevron-down icon-show"></i><i
                                    class="bx bx-chevron-up icon-close"></i></a>
                            <div id="faq-list-7" class="collapse" data-bs-parent=".faq-list">
                                <p>
                                    Um domínio na internet é como o endereço de uma casa na internet. É o nome que você
                                    escolhe para identificar seu site na web. Por exemplo, www.exemplo.com é um
                                    domínio.
                                    É importante escolher um nome de domínio único e fácil de lembrar para que as
                                    pessoas possam encontrar facilmente o seu site na internet.
                                </p>
                            </div>
                        </li>

                    </ul>
                </div>

            </div>
        </section><!-- End Frequently Asked Questions Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Contato</h2>
                    <p>Entre em contato comigo agora e descubra como posso ajudar a levar a sua presença online ao
                        próximo nível. Não perca mais tempo, entre em contato hoje mesmo por e-mail ou WhatsApp!</p>
                </div>
                {{-- <div style="padding: 0 0 20px 0" class="text-center">
                    <a class="btn btn-outline-success"
                        href="https://api.whatsapp.com/send?phone=5534992245739&text=Estou%20interessado(a)%20em%20criar%20um%20site"
                        target="_blank"><i class="fa-brands fa-whatsapp"></i>
                        Whatsapp</a>
                </div> --}}

                <div class="row">
                    <div class="col-lg-12 mt-5 mt-lg-0 d-flex align-items-stretch">
                        <form class="php-email-form form shadow-perso">
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="name">Seu nome</label>
                                    <input type="text" name="name" class="form-control" id="name"
                                        required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="name">Seu Email</label>
                                    <input type="email" class="form-control" name="email" id="email"
                                        required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="name">Assunto</label>
                                <input type="text" class="form-control" name="subject" id="subject" required>
                            </div>
                            <div class="form-group">
                                <label for="name">Mensagem</label>
                                <textarea class="form-control" name="message" id="message" rows="10" required></textarea>
                            </div>
                            {{-- <div class="my-3">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Your message has been sent. Thank you!</div>
                            </div> --}}
                            <div id="msg" class="text-center">

                            </div>
                            <div id="loading-request" class="text-center"><i style="color:#2c58f5"
                                    class="fa fa-spinner fa-spin fa-3x fa-fw"></i>
                            </div>
                            <div class="text-center"><button type="button" class="btn btn-outline-primary"
                                    id="submit-btn">Enviar
                                    mensagem</button></div>
                        </form>
                    </div>

                </div>

            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 footer-links text-center">
                        {{-- <h4>Our Social Networks</h4> --}}
                        {{-- <p>Cras fermentum odio eu feugiat lide par naso tierra videa magna derita valies</p> --}}
                        <div class="social-links mt-3">
                            {{-- <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                            <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a> --}}
                            {{-- <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a> --}}
                            {{-- <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                            <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a> --}}
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="container footer-bottom clearfix">
            <div class="text-center">
                <strong><span>phpGold</span></strong>.
            </div>
        </div>
    </footer><!-- End Footer -->

    <div id="preloader"></div>

    <div id="zap-botao">
        <a href="https://api.whatsapp.com/send?phone=5534992245739&text=Estou%20interessado(a)%20em%20criar%20um%20site"
            target="_blank"><img src="{{ URL::asset('assets-site-phpgold/img/whatsapp-logo.png') }}"
                class="img-fluid animated img-perso-whatsapp" alt="whatsapp"><br>
    </div>

    <!-- Vendor JS Files -->
    <script src="{{ URL::asset('assets-site-phpgold/vendor/aos/aos.js') }}"></script>
    <script src="{{ URL::asset('assets-site-phpgold/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ URL::asset('assets-site-phpgold/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ URL::asset('assets-site-phpgold/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ URL::asset('assets-site-phpgold/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ URL::asset('assets-site-phpgold/vendor/waypoints/noframework.waypoints.js') }}"></script>
    <script src="{{ URL::asset('assets-site-phpgold/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ URL::asset('assets-site-phpgold/js/main.js') }}"></script>

    <script>
        document.addEventListener("DOMContentLoaded", function(e) {
            document.getElementById('msg').style.display = 'none';
            document.getElementById('loading-request').style.display = 'none';
        });


        document.querySelector('#submit-btn').addEventListener('click', (event) => {

            event.preventDefault();

            const token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

            const name = document.querySelector('#name').value;
            const email = document.querySelector('#email').value;
            const subject = document.querySelector('#subject').value;
            const message = document.querySelector('#message').value;
            const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            let msg = document.getElementById('msg');

            if (name === '' || email === '' || subject === '' || message === '') {
                msg.style.display = 'block';
                msg.innerHTML = `<p style="color: #ff0000" >Preencha todos os campos.</p>`;
                setTimeout(() => clearNotification(msg), 3000);
                return;
            } else if (!emailPattern.test(email)) {
                msg.style.display = 'block';
                msg.innerHTML =
                    `<p style="color: #ff0000" >Insira um endereço de e-mail válido no campo de e-mail.</p>`;
                setTimeout(() => clearNotification(msg), 5000);
                return;
            }

            const data = {
                name: name,
                email: email,
                subject: subject,
                message: message
            }

            document.getElementById('loading-request').style.display = 'block';

            fetch('/api/sendinblue-generic', {

                method: 'POST',
                body: JSON.stringify(data),
                dataType: 'json',
                headers: {
                    "Content-Type": "application/json",
                    "Accept": "application/json, text-plain, */*",
                    "X-Requested-With": "XMLHttpRequest",
                    "X-CSRF-TOKEN": token
                }

            }).then(function(response) {
                return response.text();
            }).then(function(result) {

                const message = JSON.parse(result);

                msg.style.display = 'block';
                if (message.data && message.data.hasOwnProperty('message_success')) {
                    document.querySelector('.form').reset();
                    msg.innerHTML = `<p style="color: #008033" >${message.data.message_success}</p>`;
                    setTimeout(() => clearNotification(msg), 3000);
                    document.getElementById('loading-request').style.display = 'none';
                    return;

                }

                msg.innerHTML = `<p style="color: #ff0000" >${message.data.message_danger}</p>`;
                setTimeout(() => clearNotification(msg), 3000);
                document.getElementById('loading-request').style.display = 'none';
                return;

            });

        });

        const clearNotification = (msg) => {
            msg.style.display = 'none';
        }
    </script>

</body>

</html>
