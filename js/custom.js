jQuery(document).ready(function(){
	//activate the lightbox
	jQuery('a[href$=jpg], a[href$=png], a[href$=gif], a[href$=jpeg]').prettyPhoto({theme: "light_square"});
		// here you can see the slide options I used in the demo page. depending on the id of the slider a different setup gets activated
		jQuery('#slideshow-1').aviaSlider({	blockSize: {height: 80, width:80},
		transition: 'slide',
		display: 'all',
		transitionOrder: ['diagonaltop', 'diagonalbottom','topleft', 'bottomright', 'random']
	});
																										
});

