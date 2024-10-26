<div itemscope itemtype="http://schema.org/SiteNavigationElement" class="header__navmenu">
    <div class="php-code-nav">
        <?php wp_nav_menu( array (
            'theme_location'  => 'menu-1',
            'menu'            => '',
            'container'       => 'div',
            'container_class' => 'navigation  header__nav header__nav_none',
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
    </div>
</div>