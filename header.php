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

                        <div class="nav-menu">
                            <?php include (TEMPLATEPATH . '/template-parts/nav.php'); ?>
                        </div>

                        <button data-fancybox data-src="#form-glow"  class="btn header__btn">
                            <div class="btn__large">
                                <div class="rectangle-runner-button__text blink-2">Перезвонить мне</div>
                                <div class="go-up-button rectangle-runner-button__icon right">
                                    <div class="go-up-button__runner is-white"></div>
                                </div>
                            </div>
                        </button>

                        <div class="header__nav-tel">
                            <?php dynamic_sidebar( 'sidebar-telephone' ); ?>
                        </div>
                        
                        <div class="header__burger">
                            <?php include (TEMPLATEPATH . '/template-parts/burger.php'); ?>
                        </div>

                    </div> 
                    <!-- end header__menu -->
                </div>
                <!-- end header__top -->
            </div>
            <!-- end container -->
        </header>