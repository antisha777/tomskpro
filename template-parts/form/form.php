<div class="form">
    <div class="form__container">
        <!-- <div class="container__title">Отправить завку</div> -->
        <div class="form__inner">
            <div class="form__slider blog-slider">
                <!-- <div class="box box__backgraund"></div> -->
                <!-- Additional required wrapper -->
                <div class="form__wrapper swiper-wrapper">

                    <?php $args = array(
                        'numberposts' => 0,
                        'category'    => 10,
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
                    <div class="form__item form__slide swiper-slide">

                        <div class="backbox__img form__img">
                            <?php the_post_thumbnail('large'); ?>
                        </div>

                        <div class="form__content">
                            <div class="container">
                                <!-- <div class="portfolio__title"><?php the_title(); ?></div> -->
                                <div class="form__text"><?php the_content(); ?></div>
                            </div>
                            <!-- end container -->      
                        </div>

                    </div>
                    <?php
                    }
                    wp_reset_postdata(); ?>
                </div>
                <!-- end talking__wrapper swiper-wrapper -->
            </div>
            <!-- end backbox__slider -->
        </div>
        <!-- end talking__inner --> 
    </div>
    <!-- end form__container -->
</div>