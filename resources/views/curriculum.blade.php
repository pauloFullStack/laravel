<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>PauloFullStack</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ URL::asset('assets-curriculum/img/favicon.png') }}" rel="icon">
    <link href="{{ URL::asset('assets-curriculum/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Vendor CSS Files -->
    <link href="{{ URL::asset('assets-curriculum/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets-curriculum/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets-curriculum/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets-curriculum/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
    <!-- Template Main CSS File -->
    <link href="{{ URL::asset('assets-curriculum/css/style.css') }}" rel="stylesheet">

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
        /* body {
            color: #161F3A;
            font-family: "Roboto Slab", Sans-serif;
        } */

        .lead {
            color: #161F3A;
        }

        .highlight-color {
            color: #513ae9 !important;
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

        @media only screen and (max-width: 991px) {
            .about-img {
                text-align: center !important;
                padding: 0 0 20px 0 !important;
            }
        }

        @media only screen and (max-width: 630px) {

            .img-perso-whatsapp {
                width: 60px;
                height: 60px;
            }

        }

        .image-responsive {
            background-size: contain;
            background-color: #2D1362;
        }

        .box-shadow-full {
            border-radius: 8px !important;
            /* box-shadow: 0 2px 2px 0 rgb(0 0 0 / 14%), 0 3px 1px -2px rgb(0 0 0 / 12%), 0 1px 5px 0 rgb(0 0 0 / 20%) !important; */
            box-shadow: 0 6px 10px 0 rgb(0 0 0 / 14%), 0 1px 18px 0 rgb(0 0 0 / 12%), 0 3px 5px -1px rgb(0 0 0 / 20%);
        }
    </style>

</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center justify-content-between">

            <h1 class="logo"><a href="index.html">FullStack</a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo"><img src="assets-curriculum/img/logo.png" alt="" class="img-fluid"></a>-->

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                    <li><a class="nav-link scrollto" href="#about">Perfil Pessoal</a></li>
                    <li><a class="nav-link scrollto" href="#services">Conhecimento</a></li>
                    <li><a class="nav-link scrollto " href="#work">Experiência</a></li>
                    {{-- <li><a class="nav-link scrollto" href="#portfolio">Portfólio</a></li> --}}
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <div id="hero" class="hero route bg-image image-responsive"
        style='background-image: url("{{ URL::asset('assets-curriculum/img/hero-bg.png') }}");'>
        <div class="overlay-itro"></div>
        <div class="hero-content display-table">
            <div class="table-cell">
                <div class="container">
                    <h1 class="hero-title mb-4">Paulo Renato</h1>
                    <p class="hero-subtitle"><span class="typed" data-typed-items="Desenvolvedor, Full Stack"></span>
                    </p>

                </div>
            </div>
        </div>
    </div><!-- End Hero Section -->

    <main id="main">
        <!-- ======= About Section ======= -->
        <section id="about" class="about-mf sect-pt4 route">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="box-shadow-full">
                            <div class="row">
                                <div class="col-md-12">
                                    <div>
                                        <div class="row">
                                            <div class="col-lg-6 col-sm-12 col-md-12">
                                                <div class="about-img">
                                                    <img src="{{ URL::asset('assets-curriculum/img/paulo.png') }}"
                                                        class="img-fluid rounded b-shadow-a" alt="">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-sm-12 col-md-12">
                                                <div class="about-info text-center">
                                                    <p><span class="title-s">Nome: </span> <span>Paulo Renato Alves da
                                                            Silva</span></p>
                                                    <p><span class="title-s">Perfil: </span> <span>Full Stack
                                                            Developer</span></p>
                                                    {{-- <p><span class="title-s">Email: </span>
                                                        <span>paulofullstack@hotmail.com</span>
                                                    </p>
                                                    <p><span class="title-s">Telefone: </span> <span>(34)
                                                            99224-5739</span>
                                                    </p> --}}
                                                    <ul class="list-ico">
                                                        <li class="p-10"><span class="bi bi-geo-alt"></span> Av indaiá
                                                            1575, Planalto, Uberlândia MG</li>
                                                        <li class="p-10"><span class="bi bi-phone"></span> (34)
                                                            99224-5739</li>
                                                        <li class="p-10"><span class="bi bi-envelope"></span>
                                                            paulofullstack@hotmail.com</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="about-me pt-4 pt-md-0">
                                        <div class="title-box-2">
                                            <h5 class="title-left">
                                                Perfil Pessoal
                                            </h5>
                                        </div>
                                        <p class="lead">
                                            Olá, sou um desenvolvedor com 34 anos de idade, residente em Uberlândia,
                                            Minas Gerais. Possuo 6 anos de experiência profissional e 9 anos dedicados
                                            ao estudo da programação.
                                        </p>
                                        <p class="lead">
                                            Sou uma pessoa proativa, flexível e de fácil convivência. Possuo habilidades
                                            de aprendizagem rápida, o que me permite manter-me atualizado com as mais
                                            recentes tecnologias e ferramentas.
                                        </p>
                                        <p class="lead">
                                            Em minhas tarefas, busco sempre realizá-las com eficiência e qualidade,
                                            levando em consideração os princípios SOLID e mantendo o código limpo e de
                                            fácil compreensão para equipes futuras. Sempre trabalho em colaboração com
                                            os meus contratantes e busco fazer melhorias somente com o consentimento
                                            deles.
                                        </p>
                                        <p class="lead">
                                            Minha paixão por tecnologia e meu desejo constante de aprendizagem me
                                            motivam a continuar me desenvolvendo profissionalmente.
                                        </p>
                                        <p class="lead highlight-color"><b>Este site foi criado e desenvolvido
                                                por mim, oferecendo a você uma experiência de
                                                navegação eficiente e informações precisas.</i></b></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- End About Section -->

        <!-- ======= Services Section ======= -->
        <section id="services" class="services-mf pt-5 route">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="title-box text-center">
                            <h1>
                                CONHECIMENTO
                            </h1>
                            <div class="line-mf"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="service-box box-shadow-full">
                            <div class="service-content format-font">
                                <h5><b><i>Metodologia Scrum</i></b></h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="service-box box-shadow-full">
                            <div class="service-ico">
                                <span class="ico-circle"><i class="bi bi-filetype-html"></i></span>
                            </div>
                            <div class="service-content">
                                <h2 class="s-title">Front End</h2>
                                <p class="s-description txt-left format-font">
                                    Com habilidades sólidas em <span class="highlight-color">HTML, CSS, Bootstrap,
                                        JavaScript modular,</span> sou capaz de criar
                                    atributos e manipular o <span class="highlight-color">DOM (Document Object
                                        Model),</span> acessando a estrutura,
                                    estilo e conteúdo de um documento. Por exemplo, sou capaz de atualizar estilos
                                    com código como:
                                </p>
                                <p class="s-description txt-left format-font">
                                    <code>document.getElementById(id).style.cssText =
                                        'border-bottom: #FF0000 solid 1px !important;';</code>.
                                </p>
                                <p class="s-description txt-left format-font">
                                    <b><i>JavaScript modular, exemplo importação:</i></b></span><br>
                                    <code>
                                        import { filterData, getFilterData } from './filter.js'
                                    </code>
                                </p>
                                <p class="s-description txt-left format-font">
                                    Além disso, sou proficiente na criação de views usando a <span
                                        class="highlight-color">engine Blade,</span>
                                    permitindo-me criar condicionais e manipular <span
                                        class="highlight-color">arrays</span> com suas <span
                                        class="highlight-color">diretivas,</span> como por
                                    exemplo: </p>
                                <p class="s-description txt-left format-font">
                                    <code>@</code><code>if</code>(condition)</code><br>
                                    <code>@</code><code>endif</code><br>
                                    <br><code>@</code><code>forelse</code>($array as $item)</code><br>
                                    <code>@</code><code>empty</code><br>
                                    <code>@</code><code>endforelse</code>
                                </p>
                                <a href="studies/js" class="btn btn-outline-dark" target="_blank">Saiba mais</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="service-box box-shadow-full">
                            <div class="service-ico">
                                <span class="ico-circle"><i class="bi bi-filetype-php"></i></span>
                            </div>
                            <div class="service-content">
                                <h2 class="s-title">Back End</h2>
                                <p class="s-description txt-left format-font">
                                    Como desenvolvedor Full Stack, tenho vasta experiência no uso do <span
                                        class="highlight-color">Laravel</span> para o
                                    <span class="highlight-color">back-end.</span> Possuo conhecimentos sólidos na
                                    aplicação da <span class="highlight-color">arquitetura MVC
                                        (Model-View-Controller),</span> incluindo o uso de <span
                                        class="highlight-color">migrations</span> para a criação e atualização
                                    de tabelas, e da <span class="highlight-color">biblioteca Eloquent</span> para
                                    lidar com relacionamentos de campos
                                    <span class="highlight-color">(chaves estrangeiras).</span>
                                </p>
                                <p class="s-description txt-left format-font">
                                    Sou capaz de criar relacionamentos entre as <span
                                        class="highlight-color">models</span> usando a diretiva <span
                                        class="highlight-color">belongsTo</span>,
                                    definir <span class="highlight-color">rotas,</span> criar <span
                                        class="highlight-color">middlewares</span> e manipular estruturas <span
                                        class="highlight-color">JSON e arrays em loops</span> com
                                    foreach, for ou while. Além disso, sou proficiente em funções <span
                                        class="highlight-color">nativas do PHP puro</span> como
                                    explode, implode, is_null e outras.
                                </p>
                                <p class="s-description txt-left format-font">
                                    Também tenho experiência com ambiente <span class="highlight-color">Docker,</span>
                                    bem como na construção de consultas
                                    <span class="highlight-color">SQL</span> e na administração de bancos de dados
                                    <span class="highlight-color">MySQL.</span> Sou capaz de criar <span
                                        class="highlight-color">APIs</span> e utilizar
                                    métodos <span class="highlight-color">AJAX</span> ou <span
                                        class="highlight-color">fetch</span> para realizar requisições <span
                                        class="highlight-color">POST, GET, DELETE ou UPDATE,</span>
                                    manipulando o retorno e atualizando a árvore do <span
                                        class="highlight-color">DOM</span> sem precisar recarregar a página
                                </p>
                                <a href="studies/laravel" class="btn btn-outline-dark" target="_blank">Saiba mais</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="service-box box-shadow-full">
                            <div class="service-ico">
                                <span class="ico-circle"><i class="bi bi-server"></i></span>
                            </div>
                            <div class="service-content">
                                <h2 class="s-title">Aws</h2>
                                <p class="s-description txt-left format-font">
                                    Desenvolvi competências na criação de instância <span
                                        class="highlight-color">EC2</span> utilizando o sistema operacional <span
                                        class="highlight-color">Ubuntu.</span>
                                    Além disso, configurei uma base de dados <span class="highlight-color">RDS</span>
                                    para suportar a escalabilidade das aplicações.
                                    Gerenciei as configurações de <span class="highlight-color">DNS</span> com o <span
                                        class="highlight-color">Route 53.
                                </p>
                                <p class="s-description txt-left format-font">
                                    </span> Acessando a instância via <span class="highlight-color">SSH,</span>
                                    realizei a instalação de serviços de <span
                                        class="highlight-color">infraestrutura,</span> incluindo o <span
                                        class="highlight-color">Apache, o PHP e o certificado SSL.</span> Também
                                    configurei regras de <span class="highlight-color">firewall</span> para garantir a
                                    <span class="highlight-color">segurança dos dados.</span> Por fim, criei rotinas
                                    programadas utilizando o <span class="highlight-color">crontab</span> para
                                    automatizar tarefas regulares.
                                </p>
                                <a href="studies/aws" class="btn btn-outline-dark" target="_blank">Saiba mais</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="service-box box-shadow-full">
                            <div class="service-ico">
                                <span class="ico-circle"><i class="bi bi-github"></i></span>
                            </div>
                            <div class="service-content">
                                <h2 class="s-title">Git</h2>
                                <p class="s-description txt-left format-font">
                                    Trabalhar com o gerenciamento de versões <span class="highlight-color">Git</span>
                                    envolve a criação de um <span class="highlight-color">repositório</span>
                                    local utilizando o comando <span class="highlight-color">git init,</span> adição
                                    das modificações ao repositório com os
                                    comandos <span class="highlight-color">git add . ou git add caminho/arquivo,</span>
                                    verificação das mudanças realizadas
                                    com <span class="highlight-color">git diff caminho/arquivo,</span> registro das
                                    mudanças com o comando <span class="highlight-color">git commit -v.</span>
                                </p>
                                <p class="s-description txt-left format-font">
                                    Estabelecimento de conexão com repositórios remotos através do comando <span
                                        class="highlight-color">git remote
                                        add origin <code
                                            class="highlight-color">https://github.com/caminho/repositorio.git</code></span>
                                    onde o nome
                                    "origin" pode ser
                                    substituído por qualquer outro nome, envio das modificações para o repositório
                                    remoto com <span class="highlight-color">git push origin master,</span> e criação
                                    de ramificações a partir de outra
                                    branch utilizando o comando <span class="highlight-color">git checkout
                                        origin/master -b nome-nova-branch.</span>
                                </p>
                                <a href="https://github.com/pauloFullStack" class="btn btn-outline-dark"
                                    target="_blank">Saiba mais</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- End Services Section -->

        <!-- ======= Counter Section ======= -->
        <div class="section-counter paralax-mf bg-image"
            style='background-image: url("{{ URL::asset('assets-curriculum/img/counters-bg.jpg') }}");'>
            <div class="overlay-mf"></div>
            <div class="container position-relative">
                <div class="row">
                    <div class="col">
                        <div class="counter-box counter-box pt-4 pt-md-0">
                            <div class="counter-num">
                                <h1>Paulo<span style="color: #fff">FullStack</span></h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- End Counter Section -->

        <!-- ======= Portfolio Section ======= -->
        <section id="work" class="portfolio-mf sect-pt4 route">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="title-box text-center">
                            <h1>
                                EXPERIÊNCIA
                            </h1>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="service-box box-shadow-full">
                            <div class="service-content">
                                <h2 class="s-title">Ademicon Waldir Gaioso</h2>
                                <p class="s-description txt-left format-font">
                                    A minha experiência inclui a implementação de um sistema de CRM a partir do zero,
                                    onde trabalhei de forma independente sem a necessidade de uma equipe ou departamento
                                    de TI. O sistema foi desenvolvido para uma empresa de consórcio e possui as
                                    seguintes funcionalidades:
                                </p>
                                <ul style="letter-spacing: 0.5px;word-spacing: 3px;" class="txt-left">
                                    <h6 style="font-size: 17px">
                                        <li class="padding-bottom">
                                            Gerador de relatórios de vendas: permite monitorar as vendas, as perdas, as
                                            descartadas e a produtividade de cada vendedor, além de identificar a equipe
                                            que mais vende e menos vende.
                                        </li>
                                        <li class="padding-bottom">
                                            Relatórios de campanhas do Facebook: ajuda os proprietários da empresa a
                                            tomar decisões mais informadas sobre seus investimentos em anúncios.
                                        </li>
                                        <li class="padding-bottom">
                                            Importação e exportação de planilhas.
                                        </li>
                                        <li class="padding-bottom">
                                            Criação de equipes, hierarquia de gerentes, supervisores, vendedores
                                        </li>
                                        <li class="padding-bottom">
                                            Gerenciamento de usuários: incluindo criação de contas e redefinição de
                                            senhas.
                                        </li>
                                        <li class="padding-bottom">
                                            Criação de equipes e hierarquias: incluindo a designação de gerentes,
                                            supervisores e vendedores.
                                        </li>
                                        <li class="padding-bottom">
                                            Integração com o Facebook via API: permite que os clientes preencham um
                                            formulário na página do Facebook, a API coleta as informações e as salva no
                                            CRM, além de enviar um e-mail de notificação para o vendedor.
                                        </li>
                                        <li class="padding-bottom">
                                            Manipulação de arrays em loops com o uso do comando foreach.
                                        </li>
                                        <li class="padding-bottom">
                                            API com fetch (JavaScript) para solicitações POST, GET, DELETE e UPDATE, que
                                            atualiza o DOM para refletir as mudanças.
                                        </li>
                                        <li class="padding-bottom">
                                            Criação de consultas SQL com relacionamento inner join.
                                        </li>
                                    </h6>
                                </ul>
                                <p class="s-description txt-left format-font highlight-color">
                                    Todo esse sistema foi implementado utilizando a plataforma AWS.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="service-box box-shadow-full">
                            <div class="service-content">
                                <h2 class="s-title">Nocartorio</h2>
                                <p class="s-description txt-left format-font">
                                    Durante minha experiência profissional, tive a oportunidade de trabalhar em uma
                                    startup que desenvolvia um sistema web para cartórios. O projeto foi desenvolvido
                                    utilizando a plataforma Laravel e executado em um ambiente Docker.
                                </p>
                                <ul class="txt-left format-font">
                                    <h6 style="font-size: 17px">
                                        <li class="padding-bottom">
                                            Minhas principais responsabilidades incluíam a implementação de recursos de
                                            relatórios em formatos XML, TXT e PDF.
                                        </li>
                                        <li class="padding-bottom">
                                            Trabalhar na estruturação do
                                            sistema baseado no padrão MVC (model-view-controller), configurando
                                            relacionamentos nas models e rotas, e utilizando as diretivas do Blade.
                                        </li>
                                        <li class="padding-bottom">
                                            Também colaborei na criação de migrations para atualização e gerenciamento
                                            de tabelas e campos, além de criar a estrutura XML.
                                        </li>
                                        <li class="padding-bottom">
                                            Fui responsável por gerar relatórios a partir de comandos criados em
                                            app/Console/Commands, e também manipular arrays em loops com foreach e
                                            forelse. Além disso, trabalhei na criação de APIs, jobs e serviços
                                            utilizando docker.
                                        </li>
                                        <li class="padding-bottom">
                                            Todo esse trabalho foi realizado com o objetivo de proporcionar uma solução
                                            completa e eficiente para a gestão de cartórios, agilizando processos e
                                            tornando a gestão mais segura e precisa.
                                        </li>
                                    </h6>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- End Portfolio Section -->

        {{-- portifolio --}}
        {{-- <section id="portfolio" class="paralax-mf footer-paralax bg-image sect-mt4 route"
            style='background-image: url("{{ URL::asset('assets-curriculum/img/overlay-bg.jpg') }}");'>
            <div class="overlay-mf"></div>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="contact-mf">
                            <div id="contact" class="box-shadow-full">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="title-box-2 pt-4 pt-md-0">
                                            <h5 class="title-left">
                                                Portfólio
                                            </h5>
                                        </div>
                                        <div class="more-info">
                                            <p class="lead format-font">
                                                Criei um sistema para teste, onde o foco é organizar os serviços e a
                                                distribuição de trabalho de uma empresa, onde o usuário com a permissão
                                                <span style="color: #000"><b>colaboradores</b></span> tem a permissão
                                                de criar outros usuários com as respectivas permissões de cada um em
                                                particular, <span style="color: #000"><b><i>segue o exemplo
                                                            abaixo.</i></b></span>
                                            </p>
                                            <div style="padding: 0 0 20px 0">
                                                <a href="/login" class="btn btn-outline-dark"
                                                    target="_blank">Login</a>
                                            </div>
                                            <h6>
                                                <span style="color: #7460ee"><b><i>Usuário:</i></b></span>&nbsp;
                                                teste@teste.com
                                            </h6>
                                            <h6>
                                                <span style="color: #7460ee"><b><i>Senha:</i></b></span>
                                                &nbsp; teste123456789
                                            </h6>
                                            <h5><span style="color: #000"><b>Clientes:</b></span> &nbsp; <span
                                                    class="lead">Tela onde adiciona os clientes</span>
                                                <a style="color: #7460ee;" href="systems/erp/customers"
                                                    target="_blank">&nbsp;<i class="bi bi-forward"></i></a>
                                            </h5>
                                            <h5><span style="color: #000"><b>Colaboradores:</b></span> &nbsp; <span
                                                    class="lead">Tela onde adiciona os colaboradores, é enviado um
                                                    email para a criação de senha.</span>
                                                <a style="color: #7460ee;" href="systems/erp/employees"
                                                    target="_blank">&nbsp;<i class="bi bi-forward"></i></a>
                                            </h5>
                                            <h5><span style="color: #000"><b>Todos os Trabalhos:</b></span> &nbsp;
                                                <span class="lead">Lista de todos os trabalhos.</span>
                                                <a style="color: #7460ee" href="systems/erp/all-works"
                                                    target="_blank">&nbsp;<i class="bi bi-forward"></i></a>
                                            </h5>
                                            <h5><span style="color: #000"><b>Serviços Fornecidos:</b></span> &nbsp;
                                                <span class="lead">Tela onde cadastra, atualiza e exclui um novo tipo
                                                    de serviço.</span>
                                                <a style="color: #7460ee;" href="systems/erp/services"
                                                    target="_blank">&nbsp;<i class="bi bi-forward"></i></a>
                                            </h5>
                                            <h5><span style="color: #000"><b>Meus Trabalhos:</b></span> &nbsp;
                                                <span class="lead">Lista de trabalhos de cada colaborador
                                                    individual.</span>
                                                <a style="color: #7460ee;" href="systems/erp/my-works"
                                                    target="_blank">&nbsp;<i class="bi bi-forward"></i></a>
                                            </h5>

                                        </div>
                                        <div class="socials">
                                            <ul>
                                                <li><a href="https://api.whatsapp.com/send?phone=5534992245739"
                                                        target="_blank"><span class="ico-circle"><i
                                                                class="bi bi-whatsapp"></i></span></a></li>
                                                <li><a href="https://www.linkedin.com/in/paulo-renato-alves-da-silva-75ab30212/"
                                                        target="_blank"><span class="ico-circle"><i
                                                                class="bi bi-linkedin"></i></span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- End Contact Section --> --}}



        <!-- ======= Contact Section ======= -->
        {{-- <section id="contact" class="paralax-mf footer-paralax bg-image sect-mt4 route"
            style="background-image: url(assets-curriculum/img/overlay-bg.jpg)">
            <div class="overlay-mf"></div>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="contact-mf">
                            <div id="contact" class="box-shadow-full">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="title-box-2">
                                            <h5 class="title-left">
                                                Send Message Us
                                            </h5>
                                        </div>
                                        <div>
                                            <form action="forms/contact.php" method="post" role="form"
                                                class="php-email-form">
                                                <div class="row">
                                                    <div class="col-md-12 mb-3">
                                                        <div class="form-group">
                                                            <input type="text" name="name" class="form-control"
                                                                id="name" placeholder="Your Name" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 mb-3">
                                                        <div class="form-group">
                                                            <input type="email" class="form-control" name="email"
                                                                id="email" placeholder="Your Email" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 mb-3">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" name="subject"
                                                                id="subject" placeholder="Subject" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 text-center my-3">
                                                        <div class="loading">Loading</div>
                                                        <div class="error-message"></div>
                                                        <div class="sent-message">Your message has been sent. Thank
                                                            you!</div>
                                                    </div>
                                                    <div class="col-md-12 text-center">
                                                        <button type="submit"
                                                            class="button button-a button-big button-rouded">Send
                                                            Message</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="title-box-2 pt-4 pt-md-0">
                                            <h5 class="title-left">
                                                Entrar em contato
                                            </h5>
                                        </div>
                                        <div class="more-info">
                                            <p class="lead">
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis dolorum
                                                dolorem soluta quidem
                                                expedita aperiam aliquid at.
                                                Totam magni ipsum suscipit amet? Autem nemo esse laboriosam ratione
                                                nobis
                                                mollitia inventore?
                                            </p>
                                            <ul class="list-ico">
                                                <li><span class="bi bi-geo-alt"></span> 329 WASHINGTON ST BOSTON, MA
                                                    02108</li>
                                                <li><span class="bi bi-phone"></span> (617) 557-0089</li>
                                                <li><span class="bi bi-envelope"></span> contact@example.com</li>
                                            </ul>
                                        </div>
                                        <div class="socials">
                                            <ul>
                                                <li><a href=""><span class="ico-circle"><i
                                                                class="bi bi-facebook"></i></span></a></li>
                                                <li><a href=""><span class="ico-circle"><i
                                                                class="bi bi-instagram"></i></span></a></li>
                                                <li><a href=""><span class="ico-circle"><i
                                                                class="bi bi-twitter"></i></span></a></li>
                                                <li><a href=""><span class="ico-circle"><i
                                                                class="bi bi-linkedin"></i></span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- End Contact Section --> --}}

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="copyright-box">
                        <p class="copyright"><strong>PauloFullStack</strong>.</p>
                        <div class="credits">
                            <!--
              All the links in the footer should remain intact.
              You can delete the links only if you purchased the pro version.
              Licensing information: https://bootstrapmade.com/license/
              Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=DevFolio
            -->

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer><!-- End  Footer -->

    <div id="preloader"></div>

    <div id="zap-botao">
        <a href="https://api.whatsapp.com/send?phone=5534992245739&text=Estou%20interessado%20em%20contratar%20seus%20serviços%20e%20gostaria%20de%20saber%20mais"
            target="_blank"><img src="{{ URL::asset('assets-site-phpgold/img/whatsapp-logo.png') }}"
                class="img-fluid animated img-perso-whatsapp" alt="whatsapp"><br>
    </div>

    <!-- Vendor JS Files -->
    <script src="{{ URL::asset('assets-curriculum/vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ URL::asset('assets-curriculum/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ URL::asset('assets-curriculum/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ URL::asset('assets-curriculum/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ URL::asset('assets-curriculum/vendor/typed.js/typed.min.js') }}"></script>
    <script src="{{ URL::asset('assets-curriculum/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ URL::asset('assets-curriculum/js/main.js') }}"></script>

</body>

</html>
