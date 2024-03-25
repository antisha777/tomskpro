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

                    <div class="header__menu">

                        <div class="logo"><?php the_custom_logo (); ?></div>

                        <div itemscope itemtype="http://schema.org/SiteNavigationElement" class="header__navmenu">
                            <div class="php-code-nav" style="display: none;">
                                <?php wp_nav_menu( array (
                                            // 'theme_location'  => '',
                                            // 'menu'            => '',
                                            'container'       => 'div',
                                            'container_class' => 'menu-menu-1-container',
                                            'menu_class'      => 'menu-menu-1-container',
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
                            

                            <nav id="nav" class="navigation  header__nav header__nav_none">
                                <ul class="navigation__list">
                                    <li class="navigation__item"><a href="https://xn--2-8sbac5b2c.xn--p1ai" class="navigation__link">Главная</a></li>
                                    <li class="navigation__item"><a href="#about" class="navigation__link">Основные услуги</a></li>
                                    <li class="navigation__item"><a href="#popular" class="navigation__link">Обучение</a></li>
                                    <li class="navigation__item"><a href="#we" class="navigation__link">Цены</a></li>
                                    <li class="navigation__item"><a href="#price" class="navigation__link" yu="">Цены</a></li>
                                    <li class="navigation__item"><a href="#contacts" class="navigation__link">Контакты</a></li>
                                </ul>
                            </nav>


                        </div>

                        <button data-fancybox data-src="#form-glow"  class="btn btn_large but-effect">
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
                        
                    </div> 

                </div>
            </div>
        </header>