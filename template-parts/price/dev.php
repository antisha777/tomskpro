<!-- Slider main container -->
<div class="swiper swiper1 swiper__container">
    <!-- Additional required wrapper -->
    <div class="swiper-wrapper swiper__slide">

        <?php
            $args = array(
                'numberposts' => 0,
                'category'    => 8,
                // 'taxonomy'    => 'category',
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
                <div class="swiper-slide price__slide">

                    <div class="price__content">

                        <div class="price__img">
                            <!-- <div class="swiper__overlay"></div> -->
                            <?php the_post_thumbnail('large'); ?>
                        </div>

                        <div class="price__inner">

                            <!-- <div class="price__title"><?php the_title(); ?></div> -->

                            <div class="price__content"><?php the_content(); ?></div>

                            <button data-fancybox data-src="#form-glow"  class="btn">
                                <div class="btn__large">
                                    <div class="rectangle-runner-button__text blink-2">Заказать</div>
                                    <div class="go-up-button rectangle-runner-button__icon right">
                                        <div class="go-up-button__runner is-white"></div>
                                    </div>
                                </div>
                            </button>

                        </div>
                        <!-- end sprice__text -->
                    </div>
                    <!-- end price__content -->
                </div>
                <!-- end swiper-slide swiper__slide -->
            <?php
                }
                
            wp_reset_postdata(); ?>

    </div>
    <!-- end swiper-wrapper -->
</div>