<div class="header__navmenu-buttom">
    <!--Вывод номера телефона--->
    <?php 
    $contact_inf = get_option('theme_contacttext');
    if($contact_inf != null){ ?>
    <!-- <div class="contact_inf"><i class="fa fa-map-marker" aria-hidden="true"></i> <?php echo $contact_inf; ?></div> -->
    <a href="tel:+79539233109" class="header__navmenu-namber header__navmenu-namber_tel"><?php echo $contact_inf; ?></a>
    <?php } ?>
    <!--Вывод WhatsApp--->
    <?php 
    $tel = get_option('site_telephone');
    if($tel != null){ ?>
    <a href="https://wa.me/+79539233109" class="header__navmenu-namber header__navmenu-namber_wtp" ><?php echo get_option('site_telephone'); ?></a>
    <!-- <div class="phone-number"><i class="fa fa-phone" aria-hidden="true"></i> <?php echo get_option('site_telephone'); ?></div> -->
    <?php } ?>
</div>