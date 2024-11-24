$(document).ready(function () {
	$('.popup-img').magnificPopup({
		type: 'image',
		closeBtnInside: false,
		closeOnContentClick: true,
		tLoading: '',

		zoom: {
			enabled: true,

			duration: 300,
			easing: 'ease-in-out',

			// The "opener" function should return the element from which popup will be zoomed in
			// and to which popup will be scaled down
			// By defailt it looks for an image tag:
			opener: function (openerElement) {
				// openerElement is the element on which popup was initialized, in this case its <a> tag
				// you don't need to add "opener" option if this code matches your needs, it's defailt one.
				return openerElement.is('img') ? openerElement : openerElement.find('img');
			},
		},
	});
});