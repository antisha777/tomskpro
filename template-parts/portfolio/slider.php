<div class="blog-slider">
   <div class="blog-slider__wrp swiper-wrapper">

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
    
        <div class="blog-slider__item swiper-slide">

            <div class="blog-slider__img">
                <?php the_post_thumbnail('large'); ?>
            </div>

            <div class="blog-slider__content">
                <div class="portfolio__title about__title blog-slider__code"><?php the_title(); ?></div>
                <div class="portfolio__subtitle about__subtitle blog-slider__text"><?php the_content(); ?></div>
                <a href="" class=" hero__btn btn-inst blog-slider__button">Подробней</a>
            </div>
            
            <?php
                }
                wp_reset_postdata(); ?>

    </div>
    
    <div class="blog-slider__item swiper-slide">

        <div class="blog-slider__img">
            <img src="https://res.cloudinary.com/muhammederdem/image/upload/q_60/v1535759871/jason-leung-798979-unsplash.webp" alt="">
        </div>

        <div class="blog-slider__content">
            <span class="blog-slider__code">26 December 2019</span>
            <div class="blog-slider__title">Lorem Ipsum Dolor2</div>
            <div class="blog-slider__text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Recusandae voluptate repellendus magni illo ea animi?</div>
            <a href="#" class="blog-slider__button">READ MORE</a>
        </div>

    </div>

    <div class="blog-slider__item swiper-slide">
    <div class="blog-slider__img">
    <img src="https://res.cloudinary.com/muhammederdem/image/upload/q_60/v1535759871/alessandro-capuzzi-799180-unsplash.webp" alt="">
    </div>
    <div class="blog-slider__content">
    <span class="blog-slider__code">26 December 2019</span>
    <div class="blog-slider__title">Lorem Ipsum Dolor</div>
    <div class="blog-slider__text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Recusandae voluptate repellendus magni illo ea animi?</div>
    <a href="#" class="blog-slider__button">READ MORE</a>
    </div>
    </div>
    
    </div>
    <div class="blog-slider__pagination"></div>
</div>