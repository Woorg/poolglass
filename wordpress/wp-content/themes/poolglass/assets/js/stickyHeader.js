let addWindowScrollEvent;

function headerScroll() {
	addWindowScrollEvent = true;
	const header = document.querySelector('.header');
	const headerShow = header.hasAttribute('data-scroll-show');
	const headerShowTimer = header.dataset.scrollShow ? header.dataset.scrollShow : 300;
	const startPoint = header.dataset.scroll ? header.dataset.scroll : 1;
	let scrollDirection = 0;
	let timer;
	document.addEventListener('windowScroll', function (e) {
		const scrollTop = window.scrollY;
		clearTimeout(timer);
		if (scrollTop >= startPoint) {
			if (!header.classList.contains('_header-scroll')) {
        header.classList.add('_header-scroll');
				document.documentElement.classList.add('scroll');
      } 
			if (headerShow) {
				if (scrollTop > scrollDirection) {
					// downscroll code
					// header.classList.contains('_header-show') ? header.classList.remove('_header-show') : null;
          if (header.classList.contains('_header-scroll')) {
						header.classList.remove('_header-scroll');
						document.documentElement.classList.remove('scroll');
					}
				} else {
					// upscroll code
					if (!header.classList.contains('_header-scroll')) {
						header.classList.add('_header-scroll');
						document.documentElement.classList.add('scroll');
					} 
				}
				timer = setTimeout(() => {
					!header.classList.contains('_header-show') ? header.classList.add('_header-show') : null;
				}, headerShowTimer);
			}
		} else {
			// header.classList.contains('_header-scroll') ? header.classList.remove('_header-scroll') : null;
      if (header.classList.contains('_header-scroll')) {
				header.classList.remove('_header-scroll');
				document.documentElement.classList.remove('scroll');
			}
			if (headerShow) {
				header.classList.contains('_header-show') ? header.classList.remove('_header-show') : null;
			}
		}
		scrollDirection = scrollTop <= 0 ? 0 : scrollTop;
	});
}

headerScroll();

setTimeout(() => {
	if (addWindowScrollEvent) {
		let windowScroll = new Event('windowScroll');
		window.addEventListener('scroll', function (e) {
			document.dispatchEvent(windowScroll);
		});
	}
}, 0);
