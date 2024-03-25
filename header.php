<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://vk.com/dmitry_itdoctor
 *
 * @package tomskpro
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="Keywords" content="гарант, томск, ремонт, запчасти, сотовые, ремонт, apple, samsung, xiaomi, huawei, meizu, asus">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css"> -->
    <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri() ?>/assests/img/favicon.png">
    <link rel="icon" href="<?php echo get_template_directory_uri() ?>/assests/img/favicon.png" type="image/png">
    <script src="<?php echo get_template_directory_uri() ?>/assests/js/wow.min.js"></script>
    <script>
        new WOW().init();
    </script>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div class="wrapper">
        <!-------------------------section heade------------------------->
        <header class="header">

            <div class="container">
                <div class="header__top">

                    <!-- <div class="black-stripe">
                        <div id="bar" class="bar-menu"></div>
                    </div> -->

                    <div class="header__menu">

                        <div class="logo"><?php the_custom_logo (); ?></div>

                        <div itemscope itemtype="http://schema.org/SiteNavigationElement" class="header__navmenu">
                            <div class="php-code-nav">
                                <?php wp_nav_menu( array (
                                            // 'theme_location'  => '',
                                            // 'menu'            => '',
                                            'container'       => 'div',
                                            'container_class' => 'navigation  header__nav header__nav_none',
                                            'menu_class'      => 'navigation__list',
                                            'menu_id'         => '',
                                            'echo'            => true,
                                            'fallback_cb'     => 'wp_page_menu',
                                            'before'          => '',
                                            'after'           => '',
                                            'link_before'     => '',
                                            'link_after'      => '',
                                            'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                                            'depth'           => 0,
                                            'walker'          => '',

                                    ) ); ?>
                                </div>
                            

                            <!-- <nav id="nav" class="navigation  header__nav header__nav_none">
                                <ul class="navigation__list">
                                    <li class="navigation__item"><a href="https://xn--2-8sbac5b2c.xn--p1ai" class="navigation__link">Главная</a></li>
                                    <li class="navigation__item"><a href="#about" class="navigation__link">Основные услуги</a></li>
                                    <li class="navigation__item"><a href="#popular" class="navigation__link">Обучение</a></li>
                                    <li class="navigation__item"><a href="#we" class="navigation__link">Цены</a></li>
                                    <li class="navigation__item"><a href="#price" class="navigation__link" yu="">Цены</a></li>
                                    <li class="navigation__item"><a href="#contacts" class="navigation__link">Контакты</a></li>
                                </ul>
                            </nav> -->


                        </div>

                        <button data-fancybox data-src="#form-glow"  class="btn">
                            <div class="btn__large">
                                <div class="rectangle-runner-button__text blink-2">Перезвонить мне</div>
                                <div class="go-up-button rectangle-runner-button__icon right">
                                    <div class="go-up-button__runner is-white"></div>
                                </div>
                            </div>
                        </button>

                        <div class="header__navmenu-buttom">
                            <?php dynamic_sidebar( 'sidebar-telephone' ); ?>
                        </div>

                        <div class="header__navmenu-buttom">
                                <!--Вывод адреса--->
                                <?php 
                                $contact_inf = get_option('theme_contacttext');
                                if($contact_inf != null){ ?>
                                <!-- <div class="contact_inf"><i class="fa fa-map-marker" aria-hidden="true"></i> <?php echo $contact_inf; ?></div> -->
                                <a href="tel:+79539233109" class="header__navmenu-namber header__navmenu-namber_tel"><?php echo $contact_inf; ?></a>
                                <?php } ?>
                                <!--Вывод номера телефона--->
                                <?php 
                                $tel = get_option('site_telephone');
                                if($tel != null){ ?>
                                <a href="https://wa.me/+79539233109" class="header__navmenu-namber header__navmenu-namber_wtp" ><?php echo get_option('site_telephone'); ?></a>
                                <!-- <div class="phone-number"><i class="fa fa-phone" aria-hidden="true"></i> <?php echo get_option('site_telephone'); ?></div> -->
                                <?php } ?>
                        </div>

                        <!-- <nav class="navigation header__navmenu-mobile">


                            <?php wp_nav_menu( array (
                                            // 'theme_location'  => '',
                                            // 'menu'            => '',
                                            'container'       => 'div',
                                            'container_class' => 'menu-menu-1-mobile',
                                            'menu_class'      => 'menu-menu-1-container-mobile',
                                            'menu_id'         => '',
                                            'echo'            => true,
                                            'fallback_cb'     => 'wp_page_menu',
                                            'before'          => '<div class="mobile-sub-menu-btn"><a href="" class="mobile-sub-menu-btn__wrap"><span></span></a></div>',
                                            'after'           => '',
                                            'link_before'     => '',
                                            'link_after'      => '',
                                            'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                                            'depth'           => 0,
                                            'walker'          => '',

                                    ) ); ?>

                            <li class="navigation__item-mobile">
                                <a href="https://vk.com/dmitry_itdoctor" class="navigation__link-mobile">
                                    <div class="navigation__site">
                                        <div id="marquee" class="marquee-site">
                                            <div id='mylist' class='garage-title'>разработка сайтов  тут  создание сайтов  тут</div>
                                            <div id='mylist' class='garage-title'>разработка сайтов  тут  создание сайтов  тут</div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </nav> -->

                    </div> 

                </div>
                <!-- <div class="header__content">
                    <div class="hero header__hero">

                        <h1 class="wow fadeIn hero__title" data-wow-delay="1s">
                            <div class="hero__title-wrap">Ремонт <span>ц</span><span>и</span><span>ф</span><span>р</span><span>о</span><span>в</span><span>о</span><span>й</span> техники
                            </div>
                        </h1>
                        
                        <div class="hero__prezentation">
                            
                            <div class="hero__prezentation_left">
                                <div class="hero__subtitle"><h2><span style="background: linear-gradient(74deg,#00ffff -36%,#00ffff -22%,#3bbeb1 4%,#43ca71 104%);-webkit-background-clip: text;-webkit-text-fill-color: transparent;">Все обещают завтра, а мы делаем<span><span style="background: #fff; -webkit-background-clip: text;-webkit-text-fill-color: transparent;">&nbsp;сегодня!</span></h2></div>
                                <div class="hero__wrap-item-desktop">
                                    <div class="hero__item wow fadeInUp"><span>01</span>Починим при Вас от 5 минут</div>
                                    <div class="hero__item wow fadeInUp" data-wow-delay=".5s"><span>02</span>Комплектующие класса "Original"</div>
                                    <div class="hero__item wow fadeInUp" data-wow-delay="1s"><span>03</span>100% Гарантия</div>
                                </div>
                            </div>
                            <div class="hero__prezentation_right">
                                <div class="hero__box">
                                    <video data-v-4e7c03c7="" playsinline="" muted="muted" autoplay="autoplay" loop="loop" src="<?php echo get_template_directory_uri() ?>/assests/img/garant-pr.mp4" class="project-card-small__image" style=""></video>
                                </div>
                                
                            </div>
                            <div class="hero__wrap-item-mobile">
                                    <div class="hero__item wow fadeInUp"><span>01</span>Быстро</div>
                                    <div class="hero__item wow fadeInUp" data-wow-delay=".5s"><span>02</span>Качественно</div>
                                    <div class="hero__item wow fadeInUp" data-wow-delay="1s"><span>03</span>Гарантия</div>
                                </div>
                        </div>
                        
                        <button data-fancybox data-src="#form-glow"  class="btn btn_large but-effect">
                            <div class="btn__large">
                                <div class="rectangle-runner-button__text blink-2">Перезвонить мне</div>
                                <div class="go-up-button rectangle-runner-button__icon right">
                                    <div class="go-up-button__runner is-white"></div>
                                </div>
                            </div>
                        </button>

                    </div>
                </div> -->
            </div>
        </header>