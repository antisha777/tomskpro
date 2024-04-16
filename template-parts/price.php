<div class="container">
    <div class="price block">
        <div class="block__about"><h2>Прайс</h2></div>

        <div class="price__inner">
            <div id="myTabs" class="tabs">

                <?php wp_nav_menu( array (
                    'theme_location'  => 'menu-2',
                    'menu'            => '',
                    'container'       => 'div',
                    'container_class' => 'navigation  price__navigation',
                    'menu_class'      => 'navigation__list',
                    'menu_id'         => '',
                    'echo'            => true,
                    'fallback_cb'     => 'wp_page_menu',
                    'before'          => '',
                    'after'           => '',
                    'link_before'     => '',
                    'link_after'      => '',
                    'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                    'depth'           => 0,
                    'walker'          => '',

                ) ); ?>

                <div class="tabs__content"> 
                    <!-- Ремонт компьютеров -->
                    <div class="tabs__item">
                        <?php include (TEMPLATEPATH . '/template-parts/dev.php'); ?>
                    </div>
                    <!-- Ремонт ноутбуков -->
                    <div class="tabs__item">
                        <div class="block-left">
                            <div class="block block_background">
                                <h3 class="block__title">Диагностика ноутбука</h3>
                                <p class="block__money">0 &#x20bd;</p>
                                <p class="block__subtitle">Без разбора</p>
                            </div>
                            <div class="block">
                                <h3 class="block__title">Диагностика ноутбука</h3>
                                <p class="block__money">от 800 &#x20bd;</p>
                                <p class="block__subtitle">С полной разборкой</p>
                            </div>
                            <div class="block block_background">
                                <h3 class="block__title">Чистка от пыли</h3>
                                <p class="block__money">от 1300 &#x20bd;</p>
                                <p class="block__subtitle">С разбором</p>
                            </div>
                            <div class="block">
                                <h3 class="block__title">Установка жесткого диска</h3>
                                <p class="block__money">200 &#x20bd;</p>
                                <p class="block__subtitle">Без полного рабора</p>
                            </div>
                        </div>
                        <div class="block-right">
                            <div class="block block_background">
                                <h3 class="block__title">Установка модулей памяти</h3>
                                <p class="block__money">300 &#x20bd;</p>
                                <p class="block__subtitle">Без полного рабора</p>
                            </div>
                            <div class="block">
                                <h3 class="block__title">Замена матрицы</h3>
                                <p class="block__money">от 800 &#x20bd;</p>
                                <p class="block__subtitle">Без стоимости матрицы</p>
                            </div>
                            <div class="block block_background">
                                <h3 class="block__title">Замена клавиаутуры</h3>
                                <p class="block__money">от 500 &#x20bd;</p>
                                <p class="block__subtitle">Без стоимости клавиатуры</p>
                            </div>
                            <div class="block">
                                <h3 class="block__title">Замена разъемов</h3>
                                <p class="block__money">от 1200 &#x20bd;</p>
                                <p class="block__subtitle">Цены от 1500</p>
                            </div>
                        </div>
                    </div>
                    <!-- Ремонт телевизоров -->
                    <div class="tabs__item">
                        <div class="block-left">
                            <div class="block block_background">
                                <h3 class="block__title">Диагностика</h3>
                                <p class="block__money">200 &#x20bd;</p>
                                <p class="block__subtitle">Без разбора</p>
                            </div>
                            <div class="block">
                                <h3 class="block__title">Замена ламп</h3>
                                <p class="block__money">от 1000 &#x20bd;</p>
                                <p class="block__subtitle"></p>
                            </div>
                            <div class="block block_background">
                                <h3 class="block__title">Замена лент подсветки</h3>
                                <p class="block__money">от 1000 &#x20bd;</p>
                                <p class="block__subtitle"></p>
                            </div>
                            <div class="block">
                                <h3 class="block__title">Ремонт блока питания</h3>
                                <p class="block__money">от 500&#x20bd;</p>
                                <p class="block__subtitle"></p>
                            </div>
                        </div>
                    </div>
                    <!-- Ремонт смартфонов -->
                    <div class="tabs__item">
                        <div class="block-left">
                            <div class="block block_background">
                                <h3 class="block__title">Диагностика</h3>
                                <p class="block__money">0 &#x20bd;</p>
                                <p class="block__subtitle">Без разбора</p>
                            </div>
                            <div class="block">
                                <h3 class="block__title">Диагностика</h3>
                                <p class="block__money">500&#x20bd;</p>
                                <p class="block__subtitle">С разбором</p>
                            </div>
                            <div class="block block_background">
                                <h3 class="block__title">Замена экрана</h3>
                                <p class="block__money">от 1200 &#x20bd;</p>
                                <p class="block__subtitle">Без стоимости запчастей</p>
                            </div>
                            <div class="block">
                                <h3 class="block__title">Замена аккумулятоора</h3>
                                <p class="block__money">от 600 &#x20bd;</p>
                                <p class="block__subtitle">Без стоимости запчастей</p>
                            </div>
                        </div>
                        <div class="block-right">
                            <div class="block block_background">
                                <h3 class="block__title">Ремонт кнопок</h3>
                                <p class="block__money">от 600 &#x20bd;</p>
                                <p class="block__subtitle">Без стоимости запчастей</p>
                            </div>
                            <div class="block">
                                <h3 class="block__title">Чистка от залития</h3>
                                <p class="block__money">от 1200 &#x20bd;</p>
                                <p class="block__subtitle">Без гарантии</p>
                            </div>
                            <div class="block block_background">
                                <h3 class="block__title">Разблокировка</h3>
                                <p class="block__money">от 1000 &#x20bd;</p>
                                <p class="block__subtitle"></p>
                            </div>
                            <div class="block">
                                <h3 class="block__title">Прошивка</h3>
                                <p class="block__money">от 1500 &#x20bd;</p>
                                <p class="block__subtitle"></p>
                            </div>
                        </div>
                    </div>
                    <!-- IT - услуги -->
                    <div class="tabs__item">
                        <div class="block-left">
                            <div class="block block_background">
                                <h3 class="block__title">Настройка Банк клиента</h3>
                                <p class="block__money">от 500 &#x20bd;</p>
                                <p class="block__subtitle">Одно рабочие место</p>
                            </div>
                            <div class="block">
                                <h3 class="block__title">Видеонаблюдение</h3>
                                <p class="block__money">от 500 &#x20bd;</p>
                                <p class="block__subtitle"></p>
                            </div>
                            <div class="block block_background">
                                <h3 class="block__title">Абонентское обслуживание</h3>
                                <p class="block__money">от 500 &#x20bd;</p>
                                <p class="block__subtitle">Обслуживание офисов</p>
                            </div>
                            <div class="block">
                                <h3 class="block__title">Абонентское серверов</h3>
                                <p class="block__money">от 1000 &#x20bd;</p>
                                <p class="block__subtitle">Обслуживание офисов</p>
                            </div>
                        </div>
                    </div>
                    <!-- Компьютерная помощь -->
                    <div class="tabs__item">
                        <div class="block-left">
                            <div class="block block_background">
                                <h3 class="block__title">Выезд инженера</h3>
                                <p class="block__money">0 &#x20bd;</p>
                                <p class="block__subtitle">С продолжением работ</p>
                            </div>
                            <div class="block">
                                <h3 class="block__title">Установка Windows</h3>
                                <p class="block__money">от 500 &#x20bd;</p>
                                <p class="block__subtitle"></p>
                            </div>
                            <div class="block block_background">
                                <h3 class="block__title">Установка ОС Linux</h3>
                                <p class="block__money">от 1200 &#x20bd;</p>
                                <p class="block__subtitle"></p>
                            </div>
                            <div class="block">
                                <h3 class="block__title">Установка Microsoft Office</h3>
                                <p class="block__money">500 &#x20bd;</p>
                                <p class="block__subtitle"></p>
                            </div>
                        </div>
                        <div class="block-right">
                            <div class="block block_background">
                                <h3 class="block__title">Установка антивируса</h3>
                                <p class="block__money">500 &#x20bd;</p>
                                <p class="block__subtitle"></p>
                            </div>
                            <div class="block">
                                <h3 class="block__title">Удаление вирусов</h3>
                                <p class="block__money">от 350 &#x20bd;</p>
                                <p class="block__subtitle"></p>
                            </div>
                            <div class="block block_background">
                                <h3 class="block__title">Восстановление Windows</h3>
                                <p class="block__money">от 600 &#x20bd;</p>
                                <p class="block__subtitle">Восстановление после сбоя</p>
                            </div>
                            <div class="block">
                                <h3 class="block__title">Настройка Wi-Fi роутера</h3>
                                <p class="block__money">600 &#x20bd;</p>
                                <p class="block__subtitle">Базавая настройка</p>
                            </div>
                        </div>
                    </div>                              
                </div> 
            </div>
            <!-- end tabs -->
        </div>
        <!-- end price__inner -->
    </div>
    <!-- end price block -->
</div>