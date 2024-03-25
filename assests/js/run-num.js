// var number = document.querySelector('.infografics__runnum'),
// 		numberTop = number.getBoundingClientRect().top,
// 		start = +number.innerHTML, end = +number.dataset.max;

// 		window.addEventListener('scroll', function onScroll() {
// 			if(window.pageYOffset > numberTop - window.innerHeight / 2) {
// 				this.removeEventListener('scroll', onScroll);
// 				var interval = setInterval(function() {
// 					number.innerHTML = ++start;
// 					if(start == end) {
// 						clearInterval(interval);
// 					}
// 				}, 5);
// 			}
// 		});

        document.addEventListener("DOMContentLoaded", function () {
            window.addEventListener("scroll", function onScroll() {
                let scrollNumbers = document.querySelectorAll(
                    ".infografics__runnum"
                );
                scrollNumbers.forEach(function (item) {
                    let numberTop = item.getBoundingClientRect().top,
                        start = +item.innerHTML,
                        end = +item.dataset.max;
                    if (window.pageYOffset > numberTop - window.innerHeight / 2) {
                        this.removeEventListener("scroll", onScroll);
                        var interval = setInterval(function () {
                            item.innerHTML = ++start;
                            if (start == end) {
                                clearInterval(interval);
                            }
                        }, 5);
                    }
                });
            });
        })