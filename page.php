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
<section id="about" class="section">
    <div class="container container_head-top">

        <div class="about">
            <div class="about__title">
                <h1 class="about__title-size"><span  class="about__text"><?php bloginfo('description'); ?></span>
                    <span class="about__text-backgraund">
                        <span class="about__text2"><?php bloginfo('name'); ?></span>
                    </span>
                </h1>
            </div>
            <!-- <div class="about__inner">
                <div class="about__lode">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Enim sunt animi ratione labore alias. Nulla, incidunt, accusantium, ex dolorum possimus tempora expedita facere recusandae accusamus vitae ea fugiat quis aperiam!
                Blanditiis doloremque culpa similique ab iusto
                </div>
            </div> -->
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
            <img src="<?php echo get_header_image(); ?>" alt="<?php bloginfo('title'); ?>">
        </div>

    </div>
</section>

<!------ Услуги ----->

<section id="popular" class="section">
    <div class="container">

        <div class="services block">

            <div class="block__about"><h2>Услуги</h2></div>
                <div class="block__title"></div>

                <!-- Slider main container -->
                <div class="swiper swiper1 swiper__container">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper swiper__slider">

                        <?php
                            $args = array(
                                'numberposts' => 0,
                                'category'    => 3,
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
                                <div class="swiper-slide swiper__slide">

                                    <a class="swiper__content">

                                        <div class="swiper__img">

                                            <div class="swiper__overlay"></div>
                                            
                                            <?php the_post_thumbnail('large'); ?>

                                            <button data-fancybox data-src="#form-glow"  class="btn btn_large">
                                                <div class="btn__large">
                                                    <div class="rectangle-runner-button__text blink-2">Заказать</div>
                                                    <div class="go-up-button rectangle-runner-button__icon right">
                                                        <div class="go-up-button__runner is-white"></div>
                                                    </div>
                                                </div>
                                            </button>

                                            <div class="swiper__title">
                                                <span class="swiper__title swiper__title_backgraund">
                                                    <span class="swiper__title swiper__title_color"><?php the_title(); ?></span>
                                                </span>
                                            </div>
                                            
                                        </div>  
                                        <!-- end swiper__img -->
                                        <div class="swiper__subtitle"><?php the_excerpt(); ?></div>

                                    </a>
                                
                                </div>
                                <!-- end swiper-slide swiper__slide -->
                                <?php
                                    }
                                    
                                wp_reset_postdata(); ?>
                    </div>
                    <!-- end swiper-wrapper swiper__slider -->
                </div>
                <!-- end swiper swiper1 swiper__containerr -->
            </div>
            <!-- end block__about -->
        </div>
        <!-- end services block -->
    </div>
    <!-- end container -->
</section>

<!------------------ Портфолио -------------------->

<section id="Portfolio" class="section">
    <div class="container">

        <div class="Portfolio block">

            <div class="block__about"><h2>Портфолио</h2></div>
            <div class="block__title"></div>
            <!-- Slider main container -->
            <div class="swiper swiper1 swiper__container">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper swiper__slider">

                    <?php
                        $args = array(
                            'numberposts' => 0,
                            'category'    => 2,
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

                            <!-- Slides -->
                            <div class="swiper-slide swiper__slide">

                                <div class="swiper__content">

                                    <div class="swiper__img">
                                        <div class="swiper__overlay"></div>
                                        <?php the_post_thumbnail('large'); ?>
                                    </div>

                                    <div class="swiper__title"><?php the_title(); ?></div>

                                    <div class="swiper__subtitle"><?php the_excerpt_rss(); ?></div>

                                    <button data-fancybox data-src="#form-glow"  class="btn">
                                        <div class="btn__large">
                                            <div class="rectangle-runner-button__text blink-2">Заказать</div>
                                            <div class="go-up-button rectangle-runner-button__icon right">
                                                <div class="go-up-button__runner is-white"></div>
                                            </div>
                                        </div>
                                    </button>

                                </div>
                            
                            </div>
          
                            <?php
                                }
                                
                            wp_reset_postdata(); ?>

                </div>
                
                <!-- If we need navigation buttons -->
                <div class="swiper__arrow swiper__arrow_right">
                    <div class="swiper__button swiper__button_right"></div>
                </div>

                <div class="swiper__arrow swiper__arrow_left">
                    <div class="swiper__button swiper__button_left"></div>
                </div>

            </div>
        </div>

        </div>

    </div>
</section>



<section id="price" class="section">
    <div class="container">
        <div class="about">
            <div class="about__title">
                <h2><span style="background: linear-gradient(74deg,#00ffff -36%,#00ffff -22%,#3bbeb1 4%,#43ca71 104%);-webkit-background-clip: text;-webkit-text-fill-color: transparent;">Цены на<span>
                    <span style="background: #fff; -webkit-background-clip: text;-webkit-text-fill-color: transparent;">&nbsp;услуги</span>
                </h2>
            </div>
            <div data-v-173c7a46 class="about__inner-lode">
                <div data-v-173c7a46 class="about__lode"></div>
            </div>                       
        </div>
        <div class="services__inner">    
            <div id="myTabs" class="tabs">
                <nav class="navigation tabs__navigation">
                    <ul class="navigation__list tabs__links "> 
                        <li class="navigation__item">Ремонт телефонов<a class="navigation__link"></a></li> 
                        <li class="navigation__item">Ремонт ноутбуков<a class="navigation__link"></a></li> 
                        <li class="navigation__item">Ремонт компьютеров<a class="navigation__link"></a></li>
                        <li class="navigation__item">Бытовая техника<a class="navigation__link"></a></li>
                    </ul>
                </nav>
                <div class="tabs__content"> 
                    <!-- Ремонт телефонов -->
                    <div class="tabs__item">
                        <ul class="block block__list">
                            <li class="block__item">
                                <p class="block__index">
                                    <span class="block__money">&emsp;&emsp;&emsp;0&#x20bd;</span>
                                    <span class="block__simbol">/</span>
                                </p>
                                <p class="block__title">Диагностика телефона, планшета без разбора аппарата</p>
                            </li>
                            <li class="block__item">
                                <p class="block__index">
                                    <span class="block__money">от 900&#x20bd;</span>
                                    <span class="block__simbol">/</span>
                                </p>
                                <p class="block__title">Замена дисплея (экрана, стекла, тачскрина). На всех видах смартфонов и планшетов</p>
                            </li>
                            <li class="block__item">
                                <p class="block__index">
                                    <span class="block__money">от 600&#x20bd;</span>
                                    <span class="block__simbol">/</span>
                                </p>
                                <p class="block__title">Восстановления заряда батареи (замена АКБ), замена разъема питания. Любой сложности</p>
                            </li>
                            <li class="block__item">
                                <p class="block__index">
                                    <span class="block__money">от 1000&#x20bd;</span>
                                    <span class="block__simbol">/</span>
                                </p>
                                <p class="block__title">Работа с софтом (Аккаунты)</p>
                            </li>
                            <li class="block__item">
                                <p class="block__index">
                                    <span class="block__money">от 300&#x20bd;</span>
                                    <span class="block__simbol">/</span>
                                </p>
                                <p class="block__title">Замена, восстановление кнопок включения, громкости и прочие</p>
                            </li>
                        </ul>
                    </div>
                    <!-- Ремонт ноутбуков -->
                    <div class="tabs__item">
                        <ul class="block block__list">
                            <li class="block__item">
                                <p class="block__index">
                                    <span class="block__money">&emsp;&emsp;&emsp;0&#x20bd;</span>
                                    <span class="block__simbol">/</span>
                                </p>
                                <p class="block__title">Диагностика ноутбука, нетбука без разбора аппарата</p>
                            </li>
                            <li class="block__item">
                                <p class="block__index">
                                    <span class="block__money">от 1200&#x20bd;</span>
                                    <span class="block__simbol">/</span>
                                </p>
                                <p class="block__title">Замена дисплея (экрана, сматрицы). На всех видах ноутбуков и нетбуков</p>
                            </li>
                            <li class="block__item">
                                <p class="block__index">
                                    <span class="block__money">от 1500&#x20bd;</span>
                                    <span class="block__simbol">/</span>
                                </p>
                                <p class="block__title">Восстановления заряда батареи (замена АКБ), замена разъема питания. Любой сложности</p>
                            </li>
                            <li class="block__item">
                                <p class="block__index">
                                    <span class="block__money">от 350&#x20bd;</span>
                                    <span class="block__simbol">/</span>
                                </p>
                                <p class="block__title">Работа с софтом (Windows)</p>
                            </li>
                            <li class="block__item">
                                <p class="block__index">
                                    <span class="block__money">от 600&#x20bd;</span>
                                    <span class="block__simbol">/</span>
                                </p>
                                <p class="block__title">Замена, восстановление клавиатуры, и прочих устройств</p>
                            </li>
                        </ul>
                    </div>
                    <!-- Ремонт компьютеров -->
                    <div class="tabs__item">
                        <ul class="block block__list">
                            <li class="block__item">
                                <p class="block__index">
                                    <span class="block__money">&emsp;&emsp;&emsp;0&#x20bd;</span>
                                    <span class="block__simbol">/</span>
                                </p>
                                <p class="block__title">Програмная диагностика компьютера, без разбора</p>
                            </li>
                            <li class="block__item">
                                <p class="block__index">
                                    <span class="block__money">от 200&#x20bd;</span>
                                    <span class="block__simbol">/</span>
                                </p>
                                <p class="block__title">Ремонт, замена комплектующих</p>
                            </li>
                            <li class="block__item">
                                <p class="block__index">
                                    <span class="block__money">от 200&#x20bd;</span>
                                    <span class="block__simbol">/</span>
                                </p>
                                <p class="block__title">Удаление вирусов</p>
                            </li>
                            <li class="block__item">
                                <p class="block__index">
                                    <span class="block__money">от 350&#x20bd;</span>
                                    <span class="block__simbol">/</span>
                                </p>
                                <p class="block__title">Установка программ</p>
                            </li>
                            <li class="block__item">
                                <p class="block__index">
                                    <span class="block__money">от 990&#x20bd;</span>
                                    <span class="block__simbol">/</span>
                                </p>
                                <p class="block__title">Восстановление данных</p>
                            </li>
                        </ul>
                    </div>
                    <!-- Бытовая техника -->
                    <div class="tabs__item">
                        <ul class="block block__list">
                            <li class="block__item">
                                <p class="block__index">
                                    <span class="block__money">&emsp;&emsp;&emsp;0&#x20bd;</span>
                                    <span class="block__simbol">/</span>
                                </p>
                                <p class="block__title">Диагностика, без разбора аппарата</p>
                            </li>
                            <li class="block__item">
                                <p class="block__index">
                                    <span class="block__money">от 990&#x20bd;</span>
                                    <span class="block__simbol">/</span>
                                </p>
                                <p class="block__title">Ремонт, замена корпуса (часть корпуса)</p>
                            </li>
                            <li class="block__item">
                                <p class="block__index">
                                    <span class="block__money">от 590&#x20bd;</span>
                                    <span class="block__simbol">/</span>
                                </p>
                                <p class="block__title">Ремонт, замена кнопок (включения, громкости и тд)</p>
                            </li>
                            <li class="block__item">
                                <p class="block__index">
                                    <span class="block__money">от 990&#x20bd;</span>
                                    <span class="block__simbol">/</span>
                                </p>
                                <p class="block__title">Замена, ремонт блока питания</p>
                            </li>
                            <li class="block__item">
                                <p class="block__index">
                                    <span class="block__money">от 990&#x20bd;</span>
                                    <span class="block__simbol">/</span>
                                </p>
                                <p class="block__title">Замена ЖК экрана (без стоимости з/ч)</p>
                            </li>
                        </ul>
                    </div>                           
                </div> 
            </div>
        </div>  
    </div>
</section>
        
<!-- Преимущество -->

<section id="grafics" class="section">
    <div class="container">

        <div class="about">
            <div class="about__title">
                <h2><span style="background: linear-gradient(74deg,#00ffff -36%,#00ffff -22%,#3bbeb1 4%,#43ca71 104%);-webkit-background-clip: text;-webkit-text-fill-color: transparent;">Нас<span>
                    <span style="background: #fff; -webkit-background-clip: text;-webkit-text-fill-color: transparent;">&nbsp;выбирают</span>
                </h2>

                <div class="switch">
                    <div class="switch__action">
                        <button class="switch__prev switch__prev_view blink-2"><img src="<?php echo get_template_directory_uri() ?>/assests/img/btnl.png" alt="Назад" class="switch__btnl"></button>
                        <button class="switch__next switch__prev_view blink-2"><img src="<?php echo get_template_directory_uri() ?>/assests/img/btnl.png" alt="Вперед" class="switch__btnr"></button>
                    </div>
                </div>

            </div> <!-- about__title -->
            <div data-v-173c7a46 class="about__inner-lode">
                <div data-v-173c7a46 class="about__lode"></div>
            </div><!-- about__inner-lode -->               
        </div>

        <div class="slider-row">
            <div class="slider">

                <div class="slid scale">
                    <div class="slid__wrap">
                        <!-- <div class="slid__overlay"></div> -->
                        <img class="slid__img img" src="<?php echo get_template_directory_uri() ?>/assests/img/advantage_01.jpg" alt="#">
                        <div class="slid__title slid__title_blue">Бесплатная диагностика</div>
                        <div class="slid__subtitle">У нас Вы можете всегда получить консультацию по любому вопросу касающейся ремонта смартфонов. Наша диагностика всегда бесплатна!</div>
                    </div>
                </div>

                <div class="slid scale">
                    <div class="slid__wrap">
                        <img class="slid__img img" src="<?php echo get_template_directory_uri() ?>/assests/img/advantage_02.jpg" alt="#">
                        <div class="slid__title slid__title_green">Самый быстрый ремонт</div>
                        <div class="slid__subtitle">Большинство легкого ремонта делается сразу на месте в течении 15 минут. Более сложный ремонт, осуществляем в течении дня</div>
                    </div>
                </div>

                <div class="slid scale">
                    <div class="slid__wrap">
                        <div class="slid__overlay"></div>
                        <img class="slid__img img" src="<?php echo get_template_directory_uri() ?>/assests/img/advantage_03.jpg" alt="#">
                        <div class="slid__title slid__title_yelow">Общение с мастером</div>
                        <div class="slid__subtitle">Вам не нужно заниматься "выяснялками" , Ваш мастер всегда с Вами на связи, общайтесь на прямую без посредников (Менеджеров)</div>
                    </div>
                </div>

                <div class="slid scale">
                    <div class="slid__wrap">
                        <div class="slid__overlay"></div>
                        <img class="slid__img img" src="<?php echo get_template_directory_uri() ?>/assests/img/stelag.jpg">
                        <div class="slid__title slid__title_orange">Запчасти в наличии</div>
                        <div class="slid__subtitle">Наш склад запчастей находиться в Томске. Запчасти высокого качество класса Original</div>
                    </div>
                </div>

                <div class="slid scale">
                    <div class="slid__wrap">
                        <div class="slid__overlay"></div>
                        <img class="slid__img img" src="<?php echo get_template_directory_uri() ?>/assests/img/advantage_05.jpg">
                        <div class="slid__title slid__title_blue">Оплата только за результат</div>
                        <div class="slid__subtitle">Никаких рисков нет. Оплата ремонта исключительно только по факту проделанных работ</div>
                    </div>
                </div>

                <div class="slid scale">
                    <div class="slid__wrap">
                        <div class="slid__overlay"></div>
                        <img class="slid__img img" src="<?php echo get_template_directory_uri() ?>/assests/img/advantage_06.jpg">
                        <div class="slid__title slid__title_violet">Гарантия</div>
                        <div class="slid__subtitle">На все виды работ предоставляется индивидуальная гарантия!</div>
                    </div>
                </div>

            </div>
        </div><!-- slider-row -->

        <div class="advantage">

            <div class="advantage__container wow fadeInLeft">
                <div class="advantage__content">
                    <a href="" class="advantage__link">
                        <div class="advantage__wrap">
                            <div class="advantage__true">
                                <img class="advantage__img" src="<?php echo get_template_directory_uri() ?>/assests/img/advantage_01.jpg" alt="">
                            </div>
                        </div>
                        <div class="advantage__title advantage__title_blue">Бесплатная диагностика</div>
                        <div class="advantage__subtitle">У нас Вы можете всегда получить консультацию по любому вопросу касающейся ремонта смартфонов. Наша диагностика всегда бесплатна!</div>
                    </a>
                </div>
            </div>

            <div class="advantage__container wow fadeInRight">
                <div class="advantage__content">
                    <a href="" class="advantage__link">
                        <div class="advantage__wrap">
                            <div class="advantage__true">
                                <img class="advantage__img" src="<?php echo get_template_directory_uri() ?>/assests/img/advantage_02.jpg" alt="">
                            </div>
                        </div>
                        <div class="advantage__title advantage__title_red">Самый быстрый ремонт</div>
                        <div class="advantage__subtitle">Большинство легкого ремонта делается сразу на месте в течении 15 минут. Более сложный ремонт, осуществляем в течении дня</div>
                    </a>
                    
                </div>
            </div>

            <div class="advantage__container advantage__container_span7 wow fadeInLeft">
                <div class="advantage__content">
                    <a href="" class="advantage__link">
                        <div class="advantage__wrap">
                            <div class="advantage__true">
                                <img class="advantage__img" src="<?php echo get_template_directory_uri() ?>/assests/img/advantage_03.jpg" alt="">
                            </div>
                        </div>
                        <div class="advantage__title advantage__title_yellow">Общение с мастером</div>
                        <div class="advantage__subtitle">Вам не нужно заниматься "выяснялками" , Ваш мастер всегда с Вами на связи, общайтесь на прямую без посредников (Менеджеров)</div>
                    </a>
                </div>
            </div>

            <div class="advantage__container advantage__container_span5 wow fadeInRight">
                <div class="advantage__content">
                    <a href="" class="advantage__link">
                        <div class="advantage__wrap">
                            <div class="advantage__true">
                                <img class="advantage__img" src="<?php echo get_template_directory_uri() ?>/assests/img/stelag.jpg" alt="">
                            </div>
                        </div>
                        <div class="advantage__title advantage__title_blue">Запчасти в наличии</div>
                        <div class="advantage__subtitle">Наш склад запчастей находиться в Томске. Запчасти высокого качество класса Original</div>
                    </a>
                </div>
            </div>

            <div class="advantage__container advantage__container_span5 wow fadeInLeft">
                <div class="advantage__content">
                    <a href="" class="advantage__link">
                        <div class="advantage__wrap">
                            <div class="advantage__true">
                                <img class="advantage__img" src="<?php echo get_template_directory_uri() ?>/assests/img/advantage_05.jpg" alt="">
                            </div>
                        </div>
                        <div class="advantage__title advantage__title_red">Оплата только за результат</div>
                        <div class="advantage__subtitle">Никаких рисков нет. Оплата ремонта исключительно только по факту проделанных работ</div>
                    </a>
                </div>
            </div>

            <div class="advantage__container advantage__container_span7 wow fadeInRight">
                <div class="advantage__content">
                    <a href="" class="advantage__link">
                        <div class="advantage__wrap">
                            <div class="advantage__true">
                                <img class="advantage__img" src="<?php echo get_template_directory_uri() ?>/assests/img/advantage_06.jpg" alt="">
                            </div>
                        </div>
                        <div class="advantage__title advantage__title_violet">Гарантия</div>
                        <div class="advantage__subtitle">На все виды работ предоставляется индивидуальная гарантия!</div>
                    </a>
                </div>
            </div>
            
        </div>



        
    </div>
</section>

<!-- Квиз -->

<section id="quiz" class="section">

    <div class="container">
        <div class="quiz">
            <div class="quiz__col quiz__col_left">
                <div class="quiz__title">Пройти опрос</div>

                <div class="form-box form-quiz">
                <form id="calc" class="" action="send2.php" method="post">
                    <div class="form-box__item form-quiz__item wow fadeInUp">
                        <label class="form-box__label form-quiz__label">Что сломалось?</label>
                        <select class="form-quiz__select" name="brend" onchange="calc()" id="type_design">
                            <option value="0">Выбрать</option>
                            <option value="Телефон">Телефон</option>
                            <option value="Ноутбук">Ноутбук</option>
                            <option value="Компьютер">Компьютер</option>
                            <option value="Компьютерная переферия">Компьютерная периферия</option>
                            <option value="Монитор">Монитор</option>
                            <option value="Моноблок">Моноблок</option>
                            <option value="Телевизор">Телевизор</option>
                            <option value="Бытовой прибор">Бытовой прибор</option>
                            <option value="Другое">Другое</option>
                        </select>
                    </div>
                    <div class="form-box__item form-quiz__item wow fadeInUp" data-wow-delay=".5s">
                        <label class="form-box__label form-quiz__label">Какая проблема?</label>
                        <select class="form-quiz__select" name="problem" onchange="calc()" id="is_html2">
                            <option value="0">Выбрать</option>
                            <option value="Не включается">Не включается</option>
                            <option value="Физические повреждения">Физические повреждения</option>
                            <option value="Не работают кнопки">Не работают кнопки</option>
                            <option value="Другая поломка">Другая поломка</option>
                        </select>
                    </div>
                    <div class="form-box__item form-quiz__item wow fadeInUp" data-wow-delay=".8s">
                        <label class="form-box__label form-quiz__label">Куда прислать результат и персональную скидку?</label>
                        <select class="form-quiz__select" name="messaeger" onchange="calc()" id="is_html2">
                            <option value="0">Выбрать</option>
                            <option value="Telegram">Telegram</option>
                            <option value="Whatsapp">Whatsapp</option>
                        </select>
                    </div>
                    <div class="form-box__item form-quiz__item wow fadeInUp" data-wow-delay="1s">
                        <label class="form-box__label form-quiz__label">Ваш ник в Telegram или номер телефона</label>
                        <input class="form-box__input form-quiz__input form-quiz__select" type="text" placeholder="@Telegram или +7(___) ___-__-__" name="phone" required="">
                    </div>
                    <button  class="form-box__but form-box__but_border btn form-quiz__but" type="submit" style="margin-top: 20px;">+ Отправить</button>
                    <p class="form-box__agreement">Нажимая кнопку “Отправить” Вы соглашаетесь на обработку Ваших данных</p>
                    <input type="hidden" name="act" value="order">
                </form>
            </div>

            </div>
            <div class="quiz__col quiz__col_right">
                <div class="quiz__subtitle">Ответь на 3 вопроса для получения скидки - 20%</div>
                <div class="quiz__image wow fadeIn"><img src="<?php echo get_template_directory_uri() ?>/assests/img/sale.jpg"></div>
                <div class="quiz__text wow fadeInUp" data-wow-delay=".5s">После отправления формы, первый освободившейся менеджер, сразу свяжется с Вами в выбранном Вами мессенджере, и сориентирует по цене ремонта предоставив Вам персональную скидку на ремонт при обращении в наш сервис</div>
            </div>                     
        </div>
    </div>


</section>

<!----О нас ---->

<section id="grafics" class="section">
    <div class="container">
        <div class="infografics">

            <div class="infografics__item">
                <div class="infografics__title">[ всего выполненных работ ]</div>
                <div class="infografics__value infografics__runnum" data-max="4589">0</div>
                <div class="infografics__line"></div>
            </div>

            <div class="infografics__item">
                <div class="infografics__title">[ выполняется сегодня ]</div>
                <div class="infografics__value "><span>6</span></div>
                <div class="infografics__line infografics__line_tow"></div>
            </div>

        </div>
    </div>
</section>

            <!-------------------------section contacts, form---------------->
            
        </main><!-- #main -->

<?php
// get_sidebar();
get_footer();
