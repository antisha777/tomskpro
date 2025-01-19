<?php 
/**
 *
 *
 * Template Name: ТомскПро
*/
get_header(' '); 
?>     
    <div class="wrapper">

        <header class="header">
            <div class="container">
                <div class="black-stripe">
                    <div id="bar" class="bar-menu"></div>
                </div>
                <div class="header__wrap">
                    <div class="logo">
                        <a href="#" class="logo-a">
                            <img src="./img/TomskProB.png" class="custom-logo" alt="Логотип">
                        </a>
                    </div>
                    <div class="contact">
                        <div class="contact__col">
                            <a href="tel:8800200600">+7 (953) 923 31-09</a>
                        </div>    
                        <button data-fancybox="" data-src="#form-glow" class="button button_green">Записаться</button>
                    </div>
                    <div class="header__burger">
                        <div class="mobile">
                            <nav class="mobile__nav">
                                
                                <button id="menuButton" class="mobile__burger"></button>

                                <div class="mobile__holder">

                                    <div class="mobile__navigation">
                                        <div class="menu">
                                            <div class="navigation  header__nav header__nav_none">
                                                <ul class="navigation__list">
                                                    <li class="menu-item">
                                                        <a href="#" data-toggle="collapse">Главная</a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a href="#about" data-toggle="collapse">О нас</a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a href="#price">Услуги</a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a href="#promo">Акции</a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a href="#contacts">Контакты</a>
                                                    </li>
                                                </ul>
                                            </div>    
                                        </div>
                                    </div>

                                    <div class="mobile__footer">
                                        <div class="contact__col">
                                            <a href="tel:8800200600">+7 (953) 923 31-09</a>
                                        </div>                                 
                                        <button data-fancybox="" data-src="#form-glow" class="button button_green">Записаться</button>
                                        <div class="social social__mobile">
                                            <a href="#">
                                                <img src="./img/vk.png" alt="VK">
                                            </a>
                                            <a href="#">
                                                <img src="./img/wt.png" alt="WhatsApp">
                                            </a>
                                        </div>
                                    </div>

                                </div>

                            </nav>
                        </div>
                    </div>
                </div>
            </div> 
        </header>

        <main class="main">

            <section id="hero">
                <div class="section-video">
                    <video playsinline="" muted="muted" autoplay="autoplay" loop="loop" preload="auto">
                        <source type="video/mp4" src="video/04.mp4">
                    </video>
                </div>
                <div class="hero">
                    <div class="container screen">
                        <div class="hero__content">

                            <div class="hero__item">
                                <div class="subtitle">
                                    <span>TomskPro.ru</span>
                                </div>
                                <h1 class="title">Студия разработка сайтов</h1>
                            </div>

                            <div class="hero__item">

                                <div class="slide">
                                    <div class="btn-slider">
                                        <div class="hero__pagination hero__pagination_vertical swiper-pagination-clickable swiper-pagination-bullets"><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 1"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 2"></span><span class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0" role="button" aria-label="Go to slide 3"></span></div>
                                        <div class="botton-slider botton-slider__arrows hero__botton-slider">
                                            <div class="botton-slider__arrow botton-slider__arrow_next" tabindex="0" role="button" aria-label="Next slide"></div>
                                            <div class="botton-slider__arrow botton-slider__arrow_prev" tabindex="0" role="button" aria-label="Previous slide"></div>
                                        </div>
                                    </div>
                                    <div class="hero__wrapper swiper-wrapper">
                                        <div class="hero__slide">
                                            <div class="hero__slide-content">

                                                <div class="hero__inner">
                                                    <div class="slide__title">Слайд 1</div>
                                                    <div class="slide__subtitle">
                                                        <span class="slide__subtitle-backgroun">
                                                            <span>Создание сайтов</span>
                                                        </span>
                                                    </div>
                                                    <div class="slide__text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cum nobis consequuntur ipsa eligendi voluptates commodi</div>    
                                                </div>
                                                <button data-fancybox="" data-src="#form-glow" class="button button_gradient">Узнать</button>
                                            </div>
                                        </div>
                                    </div>
                                   
                                </div>
                            </div>
                        </div>

                        <div class="atom">
                            <div class="atom__point">
                                <div class="atom__text">.</div>
                            </div>
                        </div>

                        <div class="atom-2">
                            <div class="atom-2__point">
                                <div class="atom-2__text">.</div>
                            </div>
                        </div>

                    </div>

                </div>
            </section>
        </main>
        <footer>
            <div class="wrapper-grey">
                <div class="container">
                    <div class="footer">
                        <div class="footer__item">
                            <div class="footer__logo logo">
                                <img src="./img/TomskProB.png" alt="">
                            </div>
                        </div>
                        <div class="footer__item">
                            <a href="#">Политика конфиденциальности</a>
                            <p>© 2025 «Студия разработка сайтов»</p>
                        </div>
                        <div class="footer__item">
                            <div class="footer__info">
                                <p>«Информация на сайте не является публичной офертой (ст. 437 ГК РФ)»</p>
                                <a href="https://tomskpro.ru">Сайт создан TomskPro.ru</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <script def type="text/javascript" src="./js/burger.js"></script> 
    </div>

</body>
</html>