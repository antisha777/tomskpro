<?php wp_nav_menu( array (
    'theme_location'  => 'menu-3',
    'menu'            => '',
    'container'       => 'nav',
    'container_class' => 'navigation  price__navigation tabs__links',
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