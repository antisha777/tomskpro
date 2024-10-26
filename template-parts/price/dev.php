<!-- Slider main container -->
<div class="swiper swiper3 swiper__container">
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
                <?php include (TEMPLATEPATH . '/template-parts/price/slides.php'); ?>
                <!-- end swiper-slide swiper__slide -->
            <?php
                }
                
            wp_reset_postdata(); ?>

    </div>
    <!-- end swiper-wrapper -->
</div>