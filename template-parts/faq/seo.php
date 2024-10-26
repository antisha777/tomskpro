<?php
    $args = array(
        'numberposts' => 0,
        'category'    => 13,
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


            <div class="faq__item">

                <input id="ac-1" name="accordion-1" type="checkbox" checked />
                <label for="ac-1"><span>- <?php the_title(); ?></span></label>
                <article>
                    <div class="faq__content"><?php the_content(); ?></div>
                </article>

            </div>
            <!-- end faq__content -->

    <?php
        }      
    wp_reset_postdata(); ?>
