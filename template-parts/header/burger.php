<div class="mobile">
    <nav class="mobile__nav">
        <button class="mobile__burger"></button>
        <div class="mobile__holder">
            <div class="mobile__navigation">
                <?php include (TEMPLATEPATH . '/template-parts/header/nav.php'); ?>
            </div>
            <div class="mobile__footer">
                <a href="" class="mobile__form">Оставить заявку</a>
                <a href="" class="mobile__btn">Перезвонить</a>
                
                <div class="mobile__messenger">
                    <?php dynamic_sidebar( 'sidebar-telephone' ); ?>
                </div>

            </div>
        </div>
    </nav>
</div>