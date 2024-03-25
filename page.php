<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://vk.com/dmitry_itdoctor
 *
 * @package garant
 */

get_header();
?>

<main class="main">
<!-------------------------section about------------------------->
<section id="about" class="section">
    <div class="container container_head-top">

        <div class="about">
            <div class="about__title">
                <h1 class="about__title-size"><span  class="about__text">Продвижение</span>
                    <span class="about__text-backgraund">
                        <span class="about__text2">Создание сайтов</span>
                    </span>
                </h1>
            </div>
            <div class="about__inner">
                <div class="about__lode">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Enim sunt animi ratione labore alias. Nulla, incidunt, accusantium, ex dolorum possimus tempora expedita facere recusandae accusamus vitae ea fugiat quis aperiam!
                Blanditiis doloremque culpa similique ab iusto
            </div>                       
        </div> 
        
        <button data-fancybox data-src="#form-glow"  class="btn btn_large but-effect">
            <div class="btn__large">
                <div class="rectangle-runner-button__text blink-2">Заказать</div>
                <div class="go-up-button rectangle-runner-button__icon right">
                    <div class="go-up-button__runner is-white"></div>
                </div>
            </div>
        </button>

        <div class="about__hero">
            <img src="<?php echo get_template_directory_uri() ?>/assests/img/defoult/hero.png" alt="" class="hero-img">
        </div>

    </div>
</section>
<!------ Услуги ----->



<section id="popular" class="section">
    <div class="container">

        <div class="services">

            <!-- Slider main container -->
            <div class="swiper swiper1 swiper__container">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper swiper__slider">

                    <?php
                        $args = array(
                            'numberposts' => 0,
                            'category'    => 2,
                            'orderby'     => 'date',
                            'order'       => 'DESC',
                            'include'     => array(),
                            'exclude'     => array(),
                            'meta_key'    => '',
                            'meta_value'  =>'',
                            'post_type'   => 'post',
                            'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                            );

                            $posts = get_posts ( $args );

                            foreach($posts as $post) { setup_postdata($post);
                            ?>

                            <!-- Slides -->
                            <div class="swiper-slide swiper__slide">

                                <div class="swiper__content">

                                    <div class="swiper__img">
                                        <div class="swiper__overlay"></div>
                                        <?php the_post_thumbnail('large'); ?>
                                    </div>

                                    <div class="swiper__title"><?php the_title(); ?></div>

                                    <div class="swiper__subtitle"><?php the_excerpt_rss(); ?></div>

                                    <button data-fancybox data-src="#form-glow"  class="btn btn_large but-effect">
                                        <div class="btn__large">
                                            <div class="rectangle-runner-button__text blink-2">Заказать</div>
                                            <div class="go-up-button rectangle-runner-button__icon right">
                                                <div class="go-up-button__runner is-white"></div>
                                            </div>
                                        </div>
                                    </button>

                                </div>
                            
                            </div>
          
                            <?php
                                }
                                
                            wp_reset_postdata(); ?>

                </div>
                
                <!-- If we need navigation buttons -->
                <div class="swiper__arrow swiper__arrow_right">
                    <div class="swiper__button swiper__button_right"></div>
                </div>

                <div class="swiper__arrow swiper__arrow_left">
                    <div class="swiper__button swiper__button_left"></div>
                </div>

            </div>
        </div>

        </div>

    </div>

</section>

<!------ Услуги ----->



<section id="popular" class="section">
    <div class="container">

        <div class="services">

                    <?php
                        $args = array(
                            'numberposts' => 0,
                            'category'    => 3,
                            'orderby'     => 'date',
                            'order'       => 'DESC',
                            'include'     => array(),
                            'exclude'     => array(),
                            'meta_key'    => '',
                            'meta_value'  =>'',
                            'post_type'   => 'post',
                            'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                            );

                            $posts = get_posts ( $args );

                            foreach($posts as $post) { setup_postdata($post);
                            ?>

                            <div class="blog-card__item slick-slide slick-current slick-active" tabindex="0" style="" data-slick-index="0" aria-hidden="false">
                                    <a href="/blog/pitanie/3-glavnyh-prichiny-pochemu-ves-stoit-na-meste-pri-pohudenii/" tabindex="0">
                                        <div class="blog-card__img lazy-img-bg img-loaded"><?php the_post_thumbnail('large'); ?>
                                            <div class="blog-card__tag"><?php the_title(); ?></div>
                                        </div>
                                        <div class="blog-card__content"> <?php the_excerpt_rss(); ?></div>
                                    </a>
                                    <?php
                                                            }
                                                            
                                                        wp_reset_postdata(); ?>
                            </div>

    


                                    <button data-fancybox data-src="#form-glow"  class="btn btn_large but-effect">
                                        <div class="btn__large">
                                            <div class="rectangle-runner-button__text blink-2">Заказать</div>
                                            <div class="go-up-button rectangle-runner-button__icon right">
                                                <div class="go-up-button__runner is-white"></div>
                                            </div>
                                        </div>
                                    </button>


        </div>

    </div>

    
</section>

            <!-------------------------section contacts, form---------------->
            
        </main><!-- #main -->

<?php
// get_sidebar();
get_footer();
