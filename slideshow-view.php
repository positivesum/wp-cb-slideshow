<div class="cfct-mod-content center"><?php echo $slideshow_html; ?></div>
<script>

jQuery(document).ready(function(){
	var  width = 0;
	var  height = 0;	
	var  count = 0;		
	/**To fix cached image problem on IE 8.0
	* Added by Steven.	
	*/
	/*
	jQuery.event.special.load = {
		add: function (hollaback) {
			if ( this.nodeType === 1 && this.tagName.toLowerCase() === 'img' && this.src !== '' ) {
			// Image is already complete, fire the hollaback (fixes browser issues were cached
			// images isn't triggering the load event)
				if ( this.complete || this.readyState === 4 ) {
				hollaback.handler.apply(this);
				}

				// Check if data URI images is supported, fire 'error' event if not
				else if ( this.readyState === 'uninitialized' && this.src.indexOf('data:') === 0 ) {
				jQuery(this).trigger('error');
				}

			else {
				jQuery(this).bind('load', hollaback.handler);
				}
			}
		}
	};*/
	
	jQuery('<?php echo('#slideshow-'.$data["module_id"]); ?> img').each(function(index) {
		
		width += parseInt(jQuery(this).css("width"));
		height += parseInt(jQuery(this).css("height"));		
		count++;
		
	});
	width = width/count;
	height = height/count;
	
	jQuery('.center').css({'width': width, 'height': height});	
	jQuery('.slideshow').css({'width': width, 'height': height});
	
	//activate the lightbox
	jQuery('a[href$=jpg], a[href$=png], a[href$=gif], a[href$=jpeg]').prettyPhoto({theme: "light_square"});
		// here you can see the slide options I used in the demo page. depending on the id of the slider a different setup gets activated
		jQuery('<?php echo('#slideshow-'.$data["module_id"]); ?>').aviaSlider({
            slideControlls: <?php echo($display); ?>,
            autorotation: <?php echo($autoplay); ?>,
            autorotationSpeed: <?php echo($autoplay_delay); ?>,
            showText: false,
            betweenBlockDelay: <?php echo($transition_delay*60); ?>
	});
																										
});
</script>
