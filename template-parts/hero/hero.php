<div class="container">
    <div class="hero">

        <?php
            $args = array(
                'numberposts' => 0,
                'category'    => 5,
                'taxonomy'    => 'category',
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

        <div class="hero__folder">

            <div class="hero__text">
                <div class="hero__title"><h2><?php the_title(); ?></h2></div>
                <div class="hero__subtitle"><?php the_content(); ?></div>
                <div class="hero__btn">Оставить заявку</div>
            </div>

            <div class="hero__img">
                <?php the_post_thumbnail('large'); ?>
            </div>

        </div>
        <!-- end hero__folder -->
        <?php
            }
            wp_reset_postdata(); ?>
    </div> 
    <!-- end hero -->
</div>
<!-- end container -->