/* ==================================================
	Init
================================================== */

jQuery(function($){

var BRUSHED = window.BRUSHED || {};

//BRUSHED.slider();

$(document).ready(function(){
	BRUSHED.nav();
	BRUSHED.mobileNav();
	BRUSHED.listenerMenu();
	BRUSHED.menu();
	BRUSHED.goSection();
	BRUSHED.goUp();
	BRUSHED.filter();
	BRUSHED.fancyBox();
	BRUSHED.contactForm();
	BRUSHED.tweetFeed();
	BRUSHED.scrollToTop();
	BRUSHED.utils();
	BRUSHED.accordion();
	BRUSHED.toggle();
	BRUSHED.toolTip();
});

$(window).resize(function(){
	BRUSHED.mobileNav();
});


var showText = function showText(){
    $("#download").toggle("slide");
};

$("img.img-responsive.lazy").lazyload();

//http://osvaldas.info/lazy-loading-google-maps
$(".map").lazyLoadGoogleMaps();

});