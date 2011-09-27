    if (jQuery("#cfct-module-slideshow-post_image-image-select-items-list")) {
        // Move dnd slideshow section to new place
        var wrapper = jQuery('div[idjQuery="-selected-images-wrap"]').clone(true);
        jQuery('div[idjQuery="-selected-images-wrap"]').remove();
        jQuery("#cfct-module-slideshow-post_image-image-select-items-list").append(wrapper);
    }

    jQuery("ul.cfct-image-select-items li").click(function () {
        // Get thumb image preview
        var ImgSrc = jQuery(this).find("div:first").css("background-image").replace("url(", "").replace(")", "");

        var imagesItem = '<div class="slideshow-dnd-item">' +
            '<div class="dnd"></div>' +
            '<div class="thumb"><img src=\'+ImgSrc+\'></div>' +
            '<div class="info"><ul><li><input type="text" /></li><li><textarea></textarea></li><li><input type="text" /></li></ul></div>' +
            '<div class="actions"><ul><li>delete</li></ul></div>' +
        '</div>';

        jQuery('div[idjQuery="-selected-images-wrap"]').append(imagesItem);
        jQuery('div[idjQuery="-selected-images-wrap"]').sortable({
            items: "div.slideshow-dnd-item"
        });
    });