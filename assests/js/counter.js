let time = 2, cc = 1;
$(window).scroll(function(){
	$('#counter').each(function(){
		let
		cPos = $(this).offset().top,
		topWindow = $(window).scrollTop();
		if (cPos < topWindow + 1000) {
			if (cc < 2) {
				$('.number').addClass('viz');
				$('div').each(function(){
					let
					i = 1,
					num = $(this).data('num'),
					step = 100 * time / num,
					that = $(this),
					int = setInterval(function(){
						if (i <= num) {
							that.html(i);
						}
						else {
							cc = cc + 2;
							clearInterval(int);
						}
						i++;
					},step);
				});
			}
		}
	});
});