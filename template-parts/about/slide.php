<!-- Slider main container -->
<div class="swiper swiper4 hero__slider blog-slider">

    <div class="btn-slider">
        <div class="hero__pagination hero__pagination_vertical"></div>
        <div class="botton-slider botton-slider__arrows hero__botton-slider">
            <div class="botton-slider__arrow botton-slider__arrow_left4"></div>
            <div class="botton-slider__arrow botton-slider__arrow_right4"></div>
        </div>
    </div>
    
    <!-- Additional required wrapper -->
    <div class="swiper-wrapper hero__wrapper">
        <?php $args = array(
            'numberposts' => 0,
            'category'    => 16,
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
        <div class="swiper-slide hero__slide blog-slider__item">

            <div class="hero__slide-content blog-slider__content">

                <div class="hero__content">
                    <div class="hero__content-text">
                        <?php the_content(); ?>
                    </div>
                </div>
            </div>
            <!-- end about__slide-content -->
        </div>
        <!-- end swiper-slide swiper__slide -->
        <?php
            } 
        wp_reset_postdata(); ?>
    </div>
</div>