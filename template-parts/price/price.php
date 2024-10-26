<div class="container">
    <div class="price block">

        <div class="block__about"><h2>Прайс</h2></div>

            <div id="myTabs" class="tabs">
                <?php include (TEMPLATEPATH . '/template-parts/price/menu.php'); ?>
                <div class="tabs__content"> 
                    <!-- Разработка сайтов -->
                    <div class="tabs__item">
                        <?php include (TEMPLATEPATH . '/template-parts/price/dev.php'); ?>
                    </div>
                    <!-- Поддержка -->
                    <div class="tabs__item">
                        <?php include (TEMPLATEPATH . '/template-parts/price/support.php'); ?>
                    </div>
                    <!-- Ремонт телевизоров -->
                    <div class="tabs__item">
                        <?php include (TEMPLATEPATH . '/template-parts/price/dev.php'); ?>
                    </div>
                    <!-- Ремонт смартфонов -->
                    <div class="tabs__item">
                        <?php include (TEMPLATEPATH . '/template-parts/price/dev.php'); ?>
                    </div>
                </div> 
            </div>

            <!-- end tabs -->
        </div>

        <!-- end price__inner -->
    </div>
    <!-- end price block -->
</div>