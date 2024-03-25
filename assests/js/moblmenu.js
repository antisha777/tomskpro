$('.header__navmenu-wrapper').on('click', function(e) {
	e.preventDefault();
	$(this).toggleClass('header__navmenu-wrapper-active');
	$('.header__navmenu-mobile').toggleClass('header__navmenu-mobile-active');
});