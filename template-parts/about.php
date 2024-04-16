<div class="container container_head-top">

    <div class="about">
        <div class="about__title">
            <h1 class="about__title-size"><span  class="about__text"><?php bloginfo('description'); ?></span>
                <span class="about__text-backgraund">
                    <span class="about__text2"><?php bloginfo('name'); ?></span>
                </span>
            </h1>
        </div>
        
        <?php dynamic_sidebar( 'about-text' ); ?>
    </div> 
    
    <button data-fancybox data-src="#form-glow"  class="btn">
        <div class="btn__large">
            <div class="rectangle-runner-button__text blink-2">Заказать</div>
            <div class="go-up-button rectangle-runner-button__icon right">
                <div class="go-up-button__runner is-white"></div>
            </div>
        </div>
    </button>

    <div class="about__hero">
        <!-- <img src="<?php echo get_header_image(); ?>" alt="<?php bloginfo('title'); ?>"> -->
    </div>

</div>