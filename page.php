<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://vk.com/dmitry_itdoctor
 *
 * @package garant
 */

get_header();
?>

<main class="main">
<!-------------------------section about------------------------->
<div class="video">
    <video data-v-4e7c03c7="" playsinline="" muted="muted" autoplay="autoplay" loop="loop"  src="<?php echo get_template_directory_uri() ?>/assests/video/04.mp4">
        <!-- <source data-src="https://www.youtube.com/watch?v=ONFbl9KTV_k" type="video/mp4"> -->
    </video>
</div>

<section id="about" class="section">
    <?php include (TEMPLATEPATH . '/template-parts/about/about.php'); ?>
    <!-- end container container_head-top -->
</section>

<!------ Услуги ----->
<section id="popular" class="section">
    <?php include (TEMPLATEPATH . '/template-parts/pop/pop.php'); ?>
    <!-- end container -->
</section>

<!------------------ hero -------------------->
<section id="hero" class="section">
    <?php include (TEMPLATEPATH . '/template-parts/hero/hero.php'); ?>
</section>

<!------------------ Портфолио -------------------->
<section id="portfolio" class="section">
    <?php include (TEMPLATEPATH . '/template-parts/portfolio.php'); ?>    
</section>

<!------------------ Прайс -------------------->
<section id="price" class="section">
    <?php include (TEMPLATEPATH . '/template-parts/price/price.php'); ?>    
</section>

<!------------------ Форма -------------------->
<section id="form" class="section">
    <?php include (TEMPLATEPATH . '/template-parts/form/form.php'); ?>    
</section>
<!------------------ FAQ -------------------->
<section id="faq" class="section">
    <?php include (TEMPLATEPATH . '/template-parts/faq/faq.php'); ?>    
</section> 
            
</main>

<?php
get_footer();
