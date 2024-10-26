<div class="container">
    <div class="container__title container__title_black font-media__title">Мои работы</div>
    <div class="portfolio">   
        <!-- Slider main container -->
        <div class="portfolio__container">
            <div class="portfolio__slider blog-slider">
                <div class="box box_black box_absolute box_ml35"></div>
                <!-- Additional required wrapper -->
                <div class="portfolio__wrapper swiper-wrapper">

                    <?php $args = array(
                        'numberposts' => 0,
                        'category'    => 5,
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
                    <div class="portfolio__item blog-slider__item swiper-slide grid">

                        <div class="blog-slider__img portfolio__img">
                            <?php the_post_thumbnail('large'); ?>
                        </div>

                        <div class="btn-slider">
                            <div class="botton-slider botton-slider__arrows hero__botton-slider">
                                <div class="botton-slider__arrow botton-slider__arrow_next portfolio__btn"></div>
                                <div class="botton-slider__arrow botton-slider__arrow_prev portfolio__btn"></div>
                            </div>
                        </div>

                        <div class="blog-slider__content portfolio__content grid__col">
                            <!-- <div class="portfolio__title"><?php the_title(); ?></div> -->
                            <div class="portfolio__text"><?php the_content(); ?></div>
                            <!-- <a href="#" class="portfolio__btn hero__btn btn-inst">Подробней</a> -->
                            <!-- <a class="arrow-sign arrow-sign__left">Записаться</a> -->
                        </div>

                    </div>
                    <?php
                    }
                    wp_reset_postdata(); ?>

                    <div class="portfolio__pagination"></div>
                </div>
                <!-- end portfolio__wrapper swiper-wrapper -->
            </div>
            <!-- end portfolio__slider -->        
        </div>
        <!-- end portfolio__container -->  
    </div>
    <!-- end portfolio -->
</div>