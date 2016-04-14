$(function() {
	$('.box-slides ul').carouFredSel({
		items: 1, direction: "left", width: "auto",
        scroll : {items: 1, easing: "linear", fx: "crossfade", duration: 1500,}});
})