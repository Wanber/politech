<?php get_header(); ?>

<body id="body">

<!-- preloader -->
<div id="preloader">
    <div class="loder-box">
        <div class="loader">
            <div class="loader__bar"></div>
            <div class="loader__bar"></div>
            <div class="loader__bar"></div>
            <div class="loader__bar"></div>
            <div class="loader__bar"></div>
            <div class="loader__ball"></div>
        </div>
    </div>
</div>
<!-- end preloader -->

<main class="site-content" role="main">

    <section id="home-slider">
        <div id="slider" class="sl-slider-wrapper">

            <div class="sl-slider">

                <!--
                <div class="sl-slide" data-orientation="vertical" data-slice1-rotation="10"
                     data-slice2-rotation="-15" data-slice1-scale="1.5" data-slice2-scale="1.5">

                    <div class="bg-img"
                         style="background-image: url('<?php echo get_template_directory_uri() ?>/img/slider/b5.jpg');"></div>

                    <div class="slide-caption">
                        <div class="caption-content">
                            <h2 class="animated fadeInDown">Processo Seletivo 2017/1</h2>
                            <span class="animated fadeInDown"><a
                                        href="<?php echo get_site_url() ?>/processo-seletivo"
                                        class="btn btn-blue btn-effect current">Saiba mais</a>
                            </span>
                        </div>
                    </div>

                </div>
                -->

                <!-- begin loop -->
                <?php
                $imgs = obter_imagens_slider(get_setting("slider_id__banner"), false);
                foreach ($imgs as $img) {
                    echo '
                        <div class="sl-slide" data-orientation="vertical" data-slice1-rotation="10"
                             data-slice2-rotation="-15" data-slice1-scale="1.5" data-slice2-scale="1.5">
        
                            <div class="bg-img"
                                 style="background-image: url(' . $img->image_url . ');"></div>
        
                            <div class="slide-caption">
                                <div class="caption-content">
                                    <h2 class="animated fadeInDown">' . $img->name . '</h2>
                                    <span class="animated fadeInDown">' . $img->description . '</span>
                                </div>
                            </div>
        
                        </div>
                    ';
                }
                ?>
                <!-- end loop -->

                <div class="sl-slide" data-orientation="vertical" data-slice1-rotation="10"
                     data-slice2-rotation="-15" data-slice1-scale="1.5" data-slice2-scale="1.5">

                    <div class="bg-img"
                         style="background-image: url('<?php echo get_template_directory_uri() ?>/img/slider/b4.jpg');"></div>

                    <div class="slide-caption">
                        <div class="caption-content">
                            <h2 class="animated fadeInDown">Mundo MeJ</h2>
                            <span class="animated fadeInDown"><a
                                        href="#mej-modal"
                                        data-toggle="modal"
                                        class="btn btn-blue btn-effect current">Saiba mais</a>
                            </span>
                        </div>
                    </div>

                </div>

                <!-- Start modal Mej Section -->
                <div class="section-modal modal fade" id="mej-modal" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-content">
                        <div class="close-modal" data-dismiss="modal">
                            <div class="lr">
                                <div class="rl">
                                </div>
                            </div>
                        </div>

                        <div class="container">
                            <div class="row row-centered">
                                <div class="section-title text-center" style="margin-bottom: 6%">
                                    <?php
                                    query_posts('showposts=1&category_name=sobre-mej');
                                    while (have_posts()) : the_post();
                                        echo '
                                            <h2>' . get_the_title() . '</h2>
                                            <p style="text-align: justify">' . get_the_content() . '</p>
                                        ';
                                    endwhile;
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End modal Mej Section -->


            </div><!-- /sl-slider -->


            <nav id="nav-arrows" class="nav-arrows">
                <span class="nav-arrow-prev">Previous</span>
                <span class="nav-arrow-next">Next</span>
            </nav>

            <!--
            <nav id="nav-arrows" class="nav-arrows hidden-xs hidden-sm visible-md visible-lg">
                <a href="javascript:;" class="sl-prev">
                    <i class="fa fa-angle-left fa-3x"></i>
                </a>
                <a href="javascript:;" class="sl-next">
                    <i class="fa fa-angle-right fa-3x"></i>
                </a>
            </nav>
            -->

            <nav id="nav-dots" class="nav-dots visible-xs visible-sm hidden-md hidden-lg">
                <span class="nav-dot-current"></span>
                <span></span>
            </nav>

        </div><!-- /slider-wrapper -->
    </section>

    <!-- portfolio section --
    <section id="portfolio">
        <div class="container">
            <div class="row">

                <div class="sec-title text-center wow animated fadeInDown">
                    <h2>Projetos realizados</h2>
                    <p>Conheça alguns de nossos projetos já finalizados.</p>
                </div>


                <ul class="project-wrapper wow animated fadeInUp">

                    <!--begin loop--
                    <li class="portfolio-item">
                        <img src="<?php echo get_template_directory_uri() ?>/img/portfolio/item.jpg"
                             class="img-responsive"
                             alt="Projeto realizado em um secador de cafe na cidade de Caratinga-MG em que foi criado o diagrama elétrico de 4 secadores de café">
                        <figcaption class="mask">
                            <h3>Secadores de Café</h3>
                            <p>Normalização conforme a norma NBR 2000</p>
                        </figcaption>
                        <ul class="external">
                            <li><a class="fancybox" title="Secadores de Café" data-fancybox-group="works"
                                   href="<?php echo get_template_directory_uri() ?>/img/portfolio/item.jpg"><i
                                        class="fa fa-search"></i></a></li>
                        </ul>
                    </li>
                    <li class="portfolio-item">
                        <img src="<?php echo get_template_directory_uri() ?>/img/portfolio/item.jpg"
                             class="img-responsive"
                             alt="Projeto realizado em um secador de cafe na cidade de Caratinga-MG em que foi criado o diagrama elétrico de 4 secadores de café">
                        <figcaption class="mask">
                            <h3>Secadores de Café</h3>
                            <p>Normalização conforme a norma NBR 2000</p>
                        </figcaption>
                        <ul class="external">
                            <li><a class="fancybox" title="Secadores de Café" data-fancybox-group="works"
                                   href="<?php echo get_template_directory_uri() ?>/img/portfolio/item.jpg"><i
                                        class="fa fa-search"></i></a></li>
                        </ul>
                    </li>
                    <!--end loop--

                </ul>

            </div>
        </div>
    </section>
    <!-- end portfolio section -->

    <!-- about section -->
    <?php
    query_posts('showposts=1&category_name=sobre');
    while (have_posts()) : the_post();
        ?>
        <section id="about" style="background: rgb(50, 59, 89)">
            <div class="container">
                <div class="row">
                    <div class="col-md-11 col-md-offset-1 wow animated fadeInRight">
                        <div class="welcome-block">
                            <h3><?php echo get_the_title() ?></h3>
                            <div class="message-body row">
                                <div class="col-md-2"><img
                                            src="<?php echo get_template_directory_uri() ?>/img/so-logo.png"
                                            class="pull-left"
                                            alt="member"></div>
                                <div class="col-md-10">
                                    <p style="text-align: justify">
                                        <?php echo get_the_excerpt() ?>
                                    </p>
                                </div>
                            </div>
                            <a href="#sobre-modal" data-toggle="modal" class="btn btn-border btn-effect pull-right">Leia
                                mais</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end about section -->

        <!-- Start sobre Modal Section -->
        <div class="section-modal modal fade" id="sobre-modal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>

                <div class="container">
                    <div class="row row-centered">
                        <div class="section-title text-center" style="margin-bottom: 6%">
                            <h2>Politech Projetos e Consultoria</h2>
                            <p style="text-align: justify"><?php echo get_the_content() ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End galeria Modal Section -->
    <?php endwhile; ?>


    <!-- Sobre section -->
    <section id="service">
        <div class="container">
            <div class="row row-centered" style="padding: 30px 0 30px 0">

                <!--
                <div class="sec-title text-center">
                    <h2 class="wow animated bounceInLeft">Serviços</h2>
                    <p class="wow animated bounceInRight">A chave para seu negócio</p>
                </div>
                -->

                <div class="col-md-4 col-sm-6 col-xs-12 text-center wow animated zoomIn" data-wow-delay="0.3s">
                    <div class="service-item">
                        <div class="service-icon">
                            <i class="fa fa-bullseye fa-3x"></i>
                        </div>
                        <h3>Missão</h3>
                        <p><?php echo get_setting('misso') ?></p>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 col-xs-12 text-center wow animated zoomIn" data-wow-delay="0.6s">
                    <div class="service-item">
                        <div class="service-icon">
                            <i class="fa fa-line-chart fa-3x"></i>
                        </div>
                        <h3>Visão</h3>
                        <p><?php echo get_setting('viso') ?></p>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 col-xs-12 text-center wow animated zoomIn" data-wow-delay="0.9s">
                    <div class="service-item">
                        <div class="service-icon">
                            <i class="fa fa-group fa-3x"></i>
                        </div>

                        <h3>Valores</h3>
                        <p><?php echo get_setting('valores') ?></p>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- end Sobre section -->

    <!-- Testimonial section -->
    <section id="testimonials" class="parallax hidden-xs hidden-sm">
        <div class="overlay">
            <div class="container">
                <div class="row">

                    <div class="sec-title text-center white wow animated fadeInDown">
                        <h2>Depoimentos</h2>
                    </div>

                    <div id="testimonial" class="wow animated fadeInUp">

                        <?php
                        query_posts('showposts=5&category_name=depoimentos&orderby=rand');
                        while (have_posts()) : the_post();
                            ?>

                            <!--begin loop-->
                            <div class="testimonial-item text-center">
                                <?php the_post_thumbnail('large', 'style=width:100px;height:100px;') ?>
                                <div class="clearfix">
                                    <span><?php echo get_the_title() ?></span>
                                    <p><?php echo get_the_content() ?></p>
                                </div>
                            </div>
                            <!--end loop-->

                        <?php endwhile; ?>

                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- end Testimonial section -->

    <!-- Price section--
    <section id="servicos">
        <div class="container">
            <div class="row">

                <div class="sec-title text-center wow animated fadeInDown">
                    <h2>Serviços</h2>
                    <p></p>
                </div>

                <div class="col-md-4 wow animated fadeInUp">
                    <div class="price-table text-center">
                        <span>Engenharia Civil</span>
                        <!--<div class="value">
                            <span>$</span>
                            <span>24,35</span><br>
                            <span>month</span>
                        </div>
                        --
                        <ul>
                            <li>Projetos Hidrossanitários</li>
                            <li>Usucapião</li>
                            <li>Projeto de Combate ao Incêndio</li>
                            <li><a href="#contact">Solicitar</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-4 wow animated fadeInUp" data-wow-delay="0.8s">
                    <div class="price-table featuredx text-center">
                        <span>Engenharia Elétrica</span>
                        <!--
                        <div class="value">
                            <span>$</span>
                            <span>123,12</span><br>
                            <span>month</span>
                        </div>
                        --
                        <ul>
                            <li>Instalações elétricas</li>
                            <li>Eficiência Energética</li>
                            <li><a href="#contact">Solicitar</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-4 wow animated fadeInUp" data-wow-delay="0.4s">
                    <div class="price-table text-center">
                        <span>Arquitetura e Urbanismo</span>
                        <!--
                        <div class="value">
                            <span>$</span>
                            <span>50,00</span><br>
                            <span>month</span>
                        </div>

                        --
                        <ul>
                            <li>Projetos Arquitetônicos</li>
                            <li>Layout</li>
                            <li>Projeto de Conforto</li>
                            <li><a href="#contact">Solicitar</a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--end Price section -->


    <!-- Price section
    <section id="price">
        <div class="container">
            <div class="row">

                <div class="sec-title text-center wow animated fadeInDown">
                    <h2>Preço</h2>
                    <p>Our price for your company</p>
                </div>

                <div class="col-md-4 wow animated fadeInUp">
                    <div class="price-table text-center">
                        <span>Silver</span>
                        <div class="value">
                            <span>$</span>
                            <span>24,35</span><br>
                            <span>month</span>
                        </div>
                        <ul>
                            <li>No Bonus Points</li>
                            <li>No Bonus Points</li>
                            <li>No Bonus Points</li>
                            <li>No Bonus Points</li>
                            <li><a href="#">sign up</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-4 wow animated fadeInUp" data-wow-delay="0.4s">
                    <div class="price-table featured text-center">
                        <span>Gold</span>
                        <div class="value">
                            <span>$</span>
                            <span>50,00</span><br>
                            <span>month</span>
                        </div>
                        <ul>
                            <li>Free Trial</li>
                            <li>Free Trial</li>
                            <li>Free Trial</li>
                            <li>Free Trial</li>
                            <li><a href="#">sign up</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-4 wow animated fadeInUp" data-wow-delay="0.8s">
                    <div class="price-table text-center">
                        <span>Diamond</span>
                        <div class="value">
                            <span>$</span>
                            <span>123,12</span><br>
                            <span>month</span>
                        </div>
                        <ul>
                            <li>All Bonus Points</li>
                            <li>All Bonus Points</li>
                            <li>All Bonus Points</li>
                            <li>All Bonus Points</li>
                            <li><a href="#">sign up</a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>
    end Price section -->

    <!-- Start galeria Section -->
    <section id="galeria" class="galeria-section">
        <div class="container">
            <div class="row">
                <div class="sec-title text-center wow animated fadeInDown">
                    <h2>Galeria</h2>
                    <p><!--Algumas de nossas participações em eventos--></p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">

                    <!-- Start galeria items -->
                    <ul id="galeria-list">

                        <?php
                        $imgs = obter_imagens_slider(get_setting("slider_id__galeria"), true, 0);
                        $cont = 0;

                        echo '<div>';

                        foreach ($imgs as $img) {

                            echo '
                                <li class="wow animated fadeInUp" style="width: 50%">
                                    <div class="galeria-item">
                                        <img src="' . $img->image_url . '"
                                             class="img-responsive" alt="" style="width: 100%; height: 42vh"/>
                                        <div class="galeria-caption">
                                            <h4>' . $img->name . '</h4>
                                            <a href="#galeria-modal-' . $cont++ . '" data-toggle="modal" class="link-1"><i
                                                    class="fa fa-magic" style="margin-left: 50px"></i></a>
                                        </div>
                                    </div>
                                </li>
                            ';

                            if ($cont % 4 == 0)
                                echo $x . '</div><div>';

                        }

                        echo '<div>';
                        ?>

                    </ul>
                    <!-- End galeria items -->

                    <style>#galeria-list .owl-buttons {
                            position: absolute;
                            margin-left: 540px
                        }</style>

                </div>

            </div>
        </div>
    </section>
    <!-- End galeria Section -->

    <?php
    $cont = 0;
    foreach ($imgs as $img) { ?>
        <!-- Start galeria Modal Section -->
        <div class="section-modal modal fade" id="galeria-modal-<?php echo $cont++ ?>" tabindex="-1" role="dialog"
             aria-hidden="true">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>

                <div class="container">
                    <div class="row">
                        <div class="section-title text-center" style="margin-bottom: 6%">
                            <h2><?php echo $img->name ?></h2>
                            <p><?php echo $img->description ?></p>
                        </div>
                    </div>

                    <div class="row row-centered">
                        <div class="col-md-12 col-centered">
                            <img src="<?php echo $img->image_url ?>"
                                 class="img-responsive center-block" style="max-width: 100%">
                        </div>
                    </div><!-- /.row -->
                </div>
            </div>
        </div>
        <!-- End galeria Modal Section -->
    <?php } ?>

    <!-- Start Team Member Section -->
    <section id="membros" class="team-member-section parallax"
             style='background-image: url("<?php echo get_template_directory_uri() ?>/img/membros.jpg"); padding: 0'>
        <div class="overlay"
             style='background: linear-gradient(rgba(255, 255, 255, 0.75), rgba(255, 255, 255, 0.85)), url("img/slide_bg.png") repeat scroll 0 0 transparent; padding: 80px 0 100px;'>
            <div class="container">
                <div class="row">
                    <div class="sec-title text-center wow animated fadeInDown">
                        <h2>Membros</h2>
                        <p>Conheça a equipe Politech</p>
                    </div>
                </div>

                <div class="row row-centered">

                    <!-- begin loop -->
                    <div class="col-md-3 col-sm-6 col-centered wow animated fadeInUp">
                        <div class="team-member" style="box-shadow: #cfcfcf 0 0 3px">
                            <a href="#membros-modal" data-toggle="modal">
                                <img src="<?php echo get_template_directory_uri() ?>/img/team-member.png"
                                     class="img-responsive" alt="" style="padding: 30px 30px 10px 30px">
                                <p style="text-align: center;">Presidência</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-centered wow animated fadeInUp">
                        <div class="team-member" style="box-shadow: #cfcfcf 0 0 3px">
                            <a href="#membros-modal" data-toggle="modal">
                                <img src="<?php echo get_template_directory_uri() ?>/img/team-member.png"
                                     class="img-responsive" alt="" style="padding: 30px 30px 10px 30px">
                                <p style="text-align: center;">Marketing</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-centered wow animated fadeInUp">
                        <div class="team-member" style="box-shadow: #cfcfcf 0 0 3px">
                            <a href="#membros-modal" data-toggle="modal">
                                <img src="<?php echo get_template_directory_uri() ?>/img/team-member.png"
                                     class="img-responsive" alt="" style="padding: 30px 30px 10px 30px">
                                <p style="text-align: center;">Planejamento e Projetos</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-centered wow animated fadeInUp">
                        <div class="team-member" style="box-shadow: #cfcfcf 0 0 3px">
                            <a href="#membros-modal" data-toggle="modal">
                                <img src="<?php echo get_template_directory_uri() ?>/img/team-member.png"
                                     class="img-responsive" alt="" style="padding: 30px 30px 10px 30px">
                                <p style="text-align: center;">Administrativo Financeiro</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-centered wow animated fadeInUp">
                        <div class="team-member" style="box-shadow: #cfcfcf 0 0 3px">
                            <a href="#membros-modal" data-toggle="modal">
                                <img src="<?php echo get_template_directory_uri() ?>/img/team-member.png"
                                     class="img-responsive" alt="" style="padding: 30px 30px 10px 30px">
                                <p style="text-align: center;">Qualidade</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-centered wow animated fadeInUp">
                        <div class="team-member" style="box-shadow: #cfcfcf 0 0 3px">
                            <a href="#membros-modal" data-toggle="modal">
                                <img src="<?php echo get_template_directory_uri() ?>/img/team-member.png"
                                     class="img-responsive" alt="" style="padding: 30px 30px 10px 30px">
                                <p style="text-align: center;">Recursos Humanos</p>
                            </a>
                        </div>
                    </div>
                    <!-- end loop -->

                </div>

                <div class="row row-centered" style="margin-top: 50px">
                    <a href="#membros-modal" id="todos-membros" data-toggle="modal"
                       class="btn btn-blue btn-effect current">Todos membros</a>
                </div>

            </div>
        </div>
    </section>
    <!-- End Team Member Section -->

    <!-- Start membros Modal Section -->
    <div class="section-modal modal fade" id="membros-modal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>

            <div class="container">

                <?php

                $presidencia = array();
                $marketing = array();
                $plan_proj = array();
                $ad_fin = array();
                $qualidade = array();
                $rh = array();

                query_posts('showposts=99&category_name=membros');
                while (have_posts()) : the_post();

                    $membro = array();
                    $membro['nome'] = get_the_title();
                    $membro['desc'] = get_the_content();
                    $membro['foto'] = wp_get_attachment_url(get_post_thumbnail_id(get_the_ID()));
                    get_post_meta(get_the_ID(), 'facebook', true) != '' ? $membro['facebook'] = get_post_meta(get_the_ID(), 'facebook', true) : $membro['facebook'] = '';
                    get_post_meta(get_the_ID(), 'linkedin', true) != '' ? $membro['linkedin'] = get_post_meta(get_the_ID(), 'linkedin', true) : $membro['linkedin'] = '';
                    get_post_meta(get_the_ID(), 'twitter', true) != '' ? $membro['twitter'] = get_post_meta(get_the_ID(), 'twitter', true) : $membro['twitter'] = '';
                    get_post_meta(get_the_ID(), 'site', true) != '' ? $membro['site'] = get_post_meta(get_the_ID(), 'site', true) : $membro['site'] = '';

                    switch (get_post_meta(get_the_ID(), 'setor', true)) {
                        case 'presidencia':
                            $presidencia[] = $membro;
                            break;
                        case 'marketing':
                            $marketing[] = $membro;
                            break;
                        case 'planejamento_e_projetos':
                            $plan_proj[] = $membro;
                            break;
                        case 'administrativo_financeiro':
                            $ad_fin[] = $membro;
                            break;
                        case 'qualidade':
                            $qualidade[] = $membro;
                            break;
                        case 'recursos_humanos':
                            $rh[] = $membro;
                            break;
                    }
                endwhile;
                ?>

                <?php
                if (!empty($presidencia)) {
                    echo '
                         <div class="row">
                            <div class="section-title text-center" style="margin-bottom: 6%">
                                <h2>Presidência</h2>
                            </div>
                        </div>
                        <div class="row row-centered">
                    ';
                    foreach ($presidencia as $membro) {

                        $redes_sociais = '<ul>';

                        if ($membro['facebook'] != '')
                            $redes_sociais .= '<li><a href="' . $membro['facebook'] . '" target="_BLANK"><i class="fa fa-facebook"></i></a></li> ';
                        if ($membro['twitter'] != '')
                            $redes_sociais .= '<li><a href="' . $membro['twitter'] . '" target="_BLANK"><i class="fa fa-twitter"></i></a></li> ';
                        if ($membro['linkedin'] != '')
                            $redes_sociais .= '<li><a href="' . $membro['linkedin'] . '" target="_BLANK"><i class="fa fa-linkedin"></i></a></li> ';
                        if ($membro['site'] != '')
                            $redes_sociais .= '<li><a href="' . $membro['site'] . '" target="_BLANK"><i class="fa fa-dribbble"></i></a></li> ';

                        $redes_sociais .= '</ul>';

                        echo '
                             <div class="col-md-3 col-sm-6 col-centered">
                                <div class="team-member">
                                    <img src="' . $membro['foto'] . '"
                                         class="img-responsive" alt="" style="width:280px; height: 326px">
                                    <div class="team-details">
                                        <h4>' . $membro['nome'] . '</h4>
                                        <div class="designation">' . $membro['desc'] . '</div>
                                        ' . $redes_sociais . '
                                    </div>
                                </div>
                            </div>
                        ';
                    }

                    echo '</div>';
                }
                ?>


                <?php
                if (!empty($marketing)) {
                    echo '
                         <div class="row">
                            <div class="section-title text-center" style="margin-bottom: 6%">
                                <h2>Marketing</h2>
                            </div>
                        </div>
                        <div class="row row-centered">
                    ';
                    foreach ($marketing as $membro) {

                        $redes_sociais = '<ul>';

                        if ($membro['facebook'] != '')
                            $redes_sociais .= '<li><a href="' . $membro['facebook'] . '" target="_BLANK"><i class="fa fa-facebook"></i></a></li> ';
                        if ($membro['twitter'] != '')
                            $redes_sociais .= '<li><a href="' . $membro['twitter'] . '" target="_BLANK"><i class="fa fa-twitter"></i></a></li> ';
                        if ($membro['linkedin'] != '')
                            $redes_sociais .= '<li><a href="' . $membro['linkedin'] . '" target="_BLANK"><i class="fa fa-linkedin"></i></a></li> ';
                        if ($membro['site'] != '')
                            $redes_sociais .= '<li><a href="' . $membro['site'] . '" target="_BLANK"><i class="fa fa-dribbble"></i></a></li> ';

                        $redes_sociais .= '</ul>';

                        echo '
                             <div class="col-md-3 col-sm-6 col-centered">
                                <div class="team-member">
                                    <img src="' . $membro['foto'] . '"
                                         class="img-responsive" alt="" style="width:280px; height: 326px">
                                    <div class="team-details">
                                        <h4>' . $membro['nome'] . '</h4>
                                        <div class="designation">' . $membro['desc'] . '</div>
                                        ' . $redes_sociais . '
                                    </div>
                                </div>
                            </div>
                        ';
                    }

                    echo '</div>';
                }
                ?>

                <?php
                if (!empty($plan_proj)) {
                    echo '
                         <div class="row">
                            <div class="section-title text-center" style="margin-bottom: 6%">
                                <h2>Planejamento e Projetos</h2>
                            </div>
                        </div>
                        <div class="row row-centered">
                    ';
                    foreach ($plan_proj as $membro) {

                        $redes_sociais = '<ul>';

                        if ($membro['facebook'] != '')
                            $redes_sociais .= '<li><a href="' . $membro['facebook'] . '" target="_BLANK"><i class="fa fa-facebook"></i></a></li> ';
                        if ($membro['twitter'] != '')
                            $redes_sociais .= '<li><a href="' . $membro['twitter'] . '" target="_BLANK"><i class="fa fa-twitter"></i></a></li> ';
                        if ($membro['linkedin'] != '')
                            $redes_sociais .= '<li><a href="' . $membro['linkedin'] . '" target="_BLANK"><i class="fa fa-linkedin"></i></a></li> ';
                        if ($membro['site'] != '')
                            $redes_sociais .= '<li><a href="' . $membro['site'] . '" target="_BLANK"><i class="fa fa-dribbble"></i></a></li> ';

                        $redes_sociais .= '</ul>';

                        echo '
                             <div class="col-md-3 col-sm-6 col-centered">
                                <div class="team-member">
                                    <img src="' . $membro['foto'] . '"
                                         class="img-responsive" alt="" style="width:280px; height: 326px">
                                    <div class="team-details">
                                        <h4>' . $membro['nome'] . '</h4>
                                        <div class="designation">' . $membro['desc'] . '</div>
                                        ' . $redes_sociais . '
                                    </div>
                                </div>
                            </div>
                        ';
                    }

                    echo '</div>';
                }
                ?>

                <?php
                if (!empty($ad_fin)) {
                    echo '
                         <div class="row">
                            <div class="section-title text-center" style="margin-bottom: 6%">
                                <h2>Administrativo Financeiro</h2>
                            </div>
                        </div>
                        <div class="row row-centered">
                    ';
                    foreach ($ad_fin as $membro) {

                        $redes_sociais = '<ul>';

                        if ($membro['facebook'] != '')
                            $redes_sociais .= '<li><a href="' . $membro['facebook'] . '" target="_BLANK"><i class="fa fa-facebook"></i></a></li> ';
                        if ($membro['twitter'] != '')
                            $redes_sociais .= '<li><a href="' . $membro['twitter'] . '" target="_BLANK"><i class="fa fa-twitter"></i></a></li> ';
                        if ($membro['linkedin'] != '')
                            $redes_sociais .= '<li><a href="' . $membro['linkedin'] . '" target="_BLANK"><i class="fa fa-linkedin"></i></a></li> ';
                        if ($membro['site'] != '')
                            $redes_sociais .= '<li><a href="' . $membro['site'] . '" target="_BLANK"><i class="fa fa-dribbble"></i></a></li> ';

                        $redes_sociais .= '</ul>';

                        echo '
                             <div class="col-md-3 col-sm-6 col-centered">
                                <div class="team-member">
                                    <img src="' . $membro['foto'] . '"
                                         class="img-responsive" alt="" style="width:280px; height: 326px">
                                    <div class="team-details">
                                        <h4>' . $membro['nome'] . '</h4>
                                        <div class="designation">' . $membro['desc'] . '</div>
                                        ' . $redes_sociais . '
                                    </div>
                                </div>
                            </div>
                        ';
                    }

                    echo '</div>';
                }
                ?>

                <?php
                if (!empty($qualidade)) {
                    echo '
                         <div class="row">
                            <div class="section-title text-center" style="margin-bottom: 6%">
                                <h2>Qualidade</h2>
                            </div>
                        </div>
                        <div class="row row-centered">
                    ';
                    foreach ($qualidade as $membro) {

                        $redes_sociais = '<ul>';

                        if ($membro['facebook'] != '')
                            $redes_sociais .= '<li><a href="' . $membro['facebook'] . '" target="_BLANK"><i class="fa fa-facebook"></i></a></li> ';
                        if ($membro['twitter'] != '')
                            $redes_sociais .= '<li><a href="' . $membro['twitter'] . '" target="_BLANK"><i class="fa fa-twitter"></i></a></li> ';
                        if ($membro['linkedin'] != '')
                            $redes_sociais .= '<li><a href="' . $membro['linkedin'] . '" target="_BLANK"><i class="fa fa-linkedin"></i></a></li> ';
                        if ($membro['site'] != '')
                            $redes_sociais .= '<li><a href="' . $membro['site'] . '" target="_BLANK"><i class="fa fa-dribbble"></i></a></li> ';

                        $redes_sociais .= '</ul>';

                        echo '
                             <div class="col-md-3 col-sm-6 col-centered">
                                <div class="team-member">
                                    <img src="' . $membro['foto'] . '"
                                         class="img-responsive" alt="" style="width:280px; height: 326px">
                                    <div class="team-details">
                                        <h4>' . $membro['nome'] . '</h4>
                                        <div class="designation">' . $membro['desc'] . '</div>
                                        ' . $redes_sociais . '
                                    </div>
                                </div>
                            </div>
                        ';
                    }

                    echo '</div>';
                }
                ?>

                <?php
                if (!empty($rh)) {
                    echo '
                         <div class="row">
                            <div class="section-title text-center" style="margin-bottom: 6%">
                                <h2>Recursos Humanos</h2>
                            </div>
                        </div>
                        <div class="row row-centered">
                    ';
                    foreach ($rh as $membro) {

                        $redes_sociais = '<ul>';

                        if ($membro['facebook'] != '')
                            $redes_sociais .= '<li><a href="' . $membro['facebook'] . '" target="_BLANK"><i class="fa fa-facebook"></i></a></li> ';
                        if ($membro['twitter'] != '')
                            $redes_sociais .= '<li><a href="' . $membro['twitter'] . '" target="_BLANK"><i class="fa fa-twitter"></i></a></li> ';
                        if ($membro['linkedin'] != '')
                            $redes_sociais .= '<li><a href="' . $membro['linkedin'] . '" target="_BLANK"><i class="fa fa-linkedin"></i></a></li> ';
                        if ($membro['site'] != '')
                            $redes_sociais .= '<li><a href="' . $membro['site'] . '" target="_BLANK"><i class="fa fa-dribbble"></i></a></li> ';

                        $redes_sociais .= '</ul>';

                        echo '
                             <div class="col-md-3 col-sm-6 col-centered">
                                <div class="team-member">
                                    <img src="' . $membro['foto'] . '"
                                         class="img-responsive" alt="" style="width:280px; height: 326px">
                                    <div class="team-details">
                                        <h4>' . $membro['nome'] . '</h4>
                                        <div class="designation">' . $membro['desc'] . '</div>
                                        ' . $redes_sociais . '
                                    </div>
                                </div>
                            </div>
                        ';
                    }

                    echo '</div>';
                }
                ?>

            </div>
        </div>
    </div>
    <!-- End galeria Modal Section -->

    <!-- Social section -->
    <section id="socialx" class="parallaxx">
        <div class="overlay">
            <div class="container">
                <div class="row">

                    <div class="sec-title text-center wow animated fadeInDown">
                        <h2>Parceiros</h2>
                        <p><!--Algumas de nossas parcerias--></p>
                    </div>

                    <style>#parccc .owl-buttons {
                            position: absolute;
                            margin-left: -50px
                        }</style>

                    <div class="row row-centered" id="parccc" style="padding: 65px 0 50px 80px">
                        <?php
                        $imgs = obter_imagens_slider(get_setting("slider_id__parceiros"), true, 0);
                        foreach ($imgs as $img) {
                            if (!filter_var($img->description, FILTER_VALIDATE_URL))
                                echo '
                                    <div class="col-md-2 col-centered" style=" width: 100% !important;"><img src="' . $img->image_url . '" style="float: left; width: 180px; height: 70px;"></div>
                                ';
                            else
                                echo '
                                    <div class="col-md-2 col-centered" style=" width: 100% !important;"><a href="' . $img->description . '" target="_BLANK"><img src="' . $img->image_url . '" style="float: left; width: 180px; height: 70px;"></a></div>
                                ';
                        } ?>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- end Social section -->

    <!-- Start Latest News Section -->
    <section id="latest-news" class="latest-news-section">
        <div class="container">
            <div class="row">
                <div class="sec-title text-center wow animated fadeInDown">
                    <h2>Ultimas Notícias</h2>
                    <p><!--Fique por dentro do mundo Mej--></p>
                </div>
            </div>
            <div class="row">
                <div class="latest-news">


                    <?php
                    query_posts('showposts=3&category_name=blog');
                    while (have_posts()) : the_post(); ?>

                        <div class="col-md-4 col-sm-4 wow animated fadeInUp">
                            <div class="latest-post waves-effect">
                                <img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id(get_the_ID())) ?>"
                                     class="img-responsive" alt="">
                                <h4><?php echo get_the_title() ?></h4>

                                <p><?php echo get_the_excerpt() ?></p>
                                <a class="btn btn-primary bg-blue" href="<?php echo get_permalink() ?>">LEIA MAIS</a>
                            </div>
                        </div>

                    <?php endwhile; ?>

                </div>
            </div>

            <div class="row row-centered" style="margin-top: 50px">
                <a href="blog" target="_blank" class="btn" style="color: #002536">Veja mais em nosso BLOG</a>
            </div>
        </div>
    </section>
    <!-- End Latest News Section -->

    <section class="newsletter-form" style="background-color: rgba(50,59,89,0.1); padding: 100px 0 100px 0">
        <div class="container">
            <div class="row">
                <div class="sec-title text-center wow animated fadeInDown">
                    <h2>FIQUE POR DENTRO</h2>
                </div>
            </div>

            <style>
                .newsletter-form .sec-title h2 {
                    padding-bottom: 0;
                }

                .newsletter-form .sec-title h2::after {
                    border: none;
                }
            </style>
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <form action="" method="post" class="subscribe-form wow animated fadeInUp">
                        <div class="input-field">
                            <input type="email" name="newsletter-email" class="subscribe form-control"
                                   style="color: rgba(0,0,0,0.8)"
                                   placeholder="Seu email...">
                            <button type="submit" name="submit" value="newsletter" class="submit-icon">
                                <i class="fa fa-paper-plane fa-lg"></i>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact section -->
    <section id="contact">
        <div class="container">
            <div class="row">

                <div class="sec-title text-center wow animated fadeInDown">
                    <h2>Contato</h2>
                    <p>Deixe uma mensagem</p>
                </div>


                <div class="col-md-7 contact-form wow animated fadeInLeft">
                    <form action="" method="post">
                        <div class="input-field">
                            <input type="text" name="contato-nome" required class="form-control"
                                   placeholder="Seu nome...">
                        </div>
                        <div class="input-field">
                            <input type="email" name="contato-email" required class="form-control"
                                   placeholder="Seu email...">
                        </div>
                        <div class="input-field">
                            <textarea name="contato-mensagem" required class="form-control"
                                      placeholder="Mensagem..."></textarea>
                        </div>
                        <button type="submit" name="submit" value="contato" id="submit" class="btn btn-blue">
                            Enviar
                        </button>
                    </form>
                </div>

                <div class="col-md-5 wow animated fadeInRight">
                    <address class="contact-details">
                        <h3>Endereço</h3>
                        <p><i class="fa fa-pencil"></i>Av. Tancredo Neves, 3500, B. Universitário, Bloco Q, Sala
                            200, 35170-056</p><br>
                        <p><i class="fa fa-phone"></i>Telefone: (31) 3846-5595 </p>
                        <p><i class="fa fa-envelope"></i>contato@politechjr.com.br</p>
                    </address>
                </div>

            </div>
        </div>
    </section>
    <!-- end Contact section -->

    <section id="google-map">
        <iframe src="https://www.google.com/maps?q=Av. Tancredo Neves, 3500, Universitário, 35170-056&amp;output=embed"
                style="border:0; pointer-events: none;" allowfullscreen="" width="100%" frameborder="0"
                height="450"></iframe>
    </section>

</main>

<?php get_footer(); ?>

<?php

if (@$_REQUEST['submit'] == 'newsletter') {
    $add = add_newsletter_tribulant($_REQUEST['newsletter-email']);
    if ($add == 1)
        echo '
            <script language="javascript">
                $( document ).ready(function() {
                    swal({
                        title: "Você foi inscrito em nossa Newsletter",
                        text: "",
                        type: "success",
                        showCancelButton: false,
                        confirmButtonColor: "#030570",
                        confirmButtonText: "Ok",
                        closeOnConfirm: false,
                        html: false
                    });
                });
            </script>
        ';
    elseif ($add == 0)
        echo '
            <script language="javascript">
                $( document ).ready(function() {
                    swal({
                        title: "Informe um email válido",
                        text: "",
                        type: "error",
                        showCancelButton: false,
                        confirmButtonColor: "#030570",
                        confirmButtonText: "Ok",
                        closeOnConfirm: false,
                        html: false
                    });
                });
            </script>
        ';
    elseif ($add == -1)
        echo '
            <script language="javascript">
                $( document ).ready(function() {
                    swal({
                        title: "Você já esta inscrito em nossa newsletter",
                        text: "",
                        type: "warning",
                        showCancelButton: false,
                        confirmButtonColor: "#030570",
                        confirmButtonText: "Ok",
                        closeOnConfirm: false,
                        html: false
                    });
                });
            </script>
        ';
}

if (@$_REQUEST['submit'] == 'contato') {
    $nome = htmlspecialchars(addslashes($_REQUEST['contato-nome']));
    $email = htmlspecialchars(addslashes($_REQUEST['contato-email']));
    $mensagem = htmlspecialchars(addslashes($_REQUEST['contato-mensagem']));

    if (contato($nome, $email, 'Mensagem enviada pelo formulário de contato', $mensagem))
        echo '
            <script language="javascript">
                $( document ).ready(function() {
                    swal({
                        title: "Mensagem enviada!",
                        text: "",
                        type: "success",
                        showCancelButton: false,
                        confirmButtonColor: "#030570",
                        confirmButtonText: "Ok",
                        closeOnConfirm: false,
                        html: false
                    });
                });
            </script>
        ';
    else
        echo '
            <script language="javascript">
                $( document ).ready(function() {
                    swal({
                        title: "Verifique todos os campos",
                        text: "",
                        type: "error",
                        showCancelButton: false,
                        confirmButtonColor: "#030570",
                        confirmButtonText: "Ok",
                        closeOnConfirm: false,
                        html: false
                    });
                });
            </script>
        ';
}
?>
