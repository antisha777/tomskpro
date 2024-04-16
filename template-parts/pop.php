<div class="container">
    <div class="services block">

        <div class="block__about"><h2>Услуги</h2></div>
        <div class="block__title"></div>
        <!-- Slider main container -->
        <div class="swiper swiper1 swiper__container">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper swiper__slider">

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

                        <!-- Slides -->
                        <div class="swiper-slide swiper__slide">

                            <a class="swiper__content">

                                <div class="swiper__img">

                                    <div class="swiper__overlay"></div>
                                    
                                    <?php the_post_thumbnail('large'); ?>

                                    <button data-fancybox data-src="#form-glow"  class="btn btn_large">
                                        <div class="btn__large">
                                            <div class="rectangle-runner-button__text blink-2">Заказать</div>
                                            <div class="go-up-button rectangle-runner-button__icon right">
                                                <div class="go-up-button__runner is-white"></div>
                                            </div>
                                        </div>
                                    </button>

                                    <div class="swiper__title">
                                        <span class="swiper__title swiper__title_backgraund">
                                            <span class="swiper__title swiper__title_color"><?php the_title(); ?></span>
                                        </span>
                                    </div>
                                    
                                </div>  
                                <!-- end swiper__img -->
                                <div class="swiper__subtitle"><?php the_excerpt(); ?></div>

                            </a>
                        
                        </div>
                        <!-- end swiper-slide swiper__slide -->
                        <?php
                            }
                            
                        wp_reset_postdata(); ?>
            </div>
            <!-- end swiper-wrapper swiper__slider -->
        </div>
        <!-- end swiper swiper1 swiper__containerr -->
    </div>
    <!-- end services block -->
</div>