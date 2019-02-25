// JavaScript Document

/* $('.single-item').slick({
dots: true,
arrows:false,
});

$('.expertise-box-sldier').slick({
dots: true,
arrows:false,
});

$('.customers-slick').slick({
  prevArrow: $(".pp2"),
    nextArrow: $(".nn2"),
});
 */


$('.home-banner').slick({
dots: false,
arrows:false,
speed: 200,
  fade: true,
  autoplay: true,
  autoplaySpeed: 5000,
});

$('.about-slider').slick({
dots: false,
arrows:true,

});


$('.kids-gallery-slider2').slick({
dots: false,
arrows:true,

});





$('.doctors-slider').slick({
dots: false,
//arrows:false,
  slidesToShow: 3,
 slidesToScroll: 3,
  prevArrow: $(".pp2"),
    nextArrow: $(".nn2"),


responsive: [
    {
      breakpoint: 960,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
      dots: false,
      }
    },
	{
      breakpoint: 640,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    },

]

});





$('.kids-services-slider').slick({
dots: false,
//arrows:false,
  slidesToShow: 4,
 slidesToScroll: 4,
  prevArrow: $(".pp2"),
    nextArrow: $(".nn2"),


responsive: [
    {
      breakpoint: 960,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
      dots: false,
      }
    },
	{
      breakpoint: 640,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    },

]

});




$('.kids-our-doctor-right').slick({
dots: false,
//arrows:false,
  slidesToShow: 3,
  slidesToScroll: 3,
  prevArrow: $(".doctor-arrow-left"),
  nextArrow: $(".doctor-arrow-right"),


responsive: [
    {
      breakpoint: 960,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
      dots: false,
      }
    },
	{
      breakpoint: 640,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    },

]

});
			



$(document).ready(function(){
    $(".hamburger-menu").click(function(){
        $(".navigation ul").slideToggle(500);
    });
});


 var dW = 1550;

function setSizes() {
    var wW = $(window).width();
    var cW = $('.container').width();
    if (cW < 1550) {
        var nW = cW;
    } else {
        var nW = dW;
    }
    if (wW <= 1024) $('html,body').css('font-size', 12);
    else
        $('html,body').css('font-size', (nW * 18 / dW));
}
setSizes();
$(window).bind("resize", function() {
    setSizes();
}); 




	var accItem = document.getElementsByClassName('accordionItem');
    var accHD = document.getElementsByClassName('accordionItemHeading');
    for (i = 0; i < accHD.length; i++) {
        accHD[i].addEventListener('click', toggleItem, false);
    }
    function toggleItem() {
        var itemClass = this.parentNode.className;
        for (i = 0; i < accItem.length; i++) {
            accItem[i].className = 'accordionItem close';
        }
        if (itemClass == 'accordionItem close') {
            this.parentNode.className = 'accordionItem open';
        }
    }
	
	
	
	
	


(function($) {
$.fn.menumaker = function(options) {  
 var cssmenu = $(this), settings = $.extend({
   format: "dropdown",
   sticky: false
 }, options);
 return this.each(function() {
   $(this).find(".button").on('click', function(){
     $(this).toggleClass('menu-opened');
     var mainmenu = $(this).next('ul');
     if (mainmenu.hasClass('open')) { 
       mainmenu.slideToggle().removeClass('open');
     }
     else {
       mainmenu.slideToggle().addClass('open');
       if (settings.format === "dropdown") {
         mainmenu.find('ul').show();
       }
     }
   });
   cssmenu.find('li ul').parent().addClass('has-sub');
multiTg = function() {
     cssmenu.find(".has-sub").prepend('<span class="submenu-button"></span>');
     cssmenu.find('.submenu-button').on('click', function() {
       $(this).toggleClass('submenu-opened');
       if ($(this).siblings('ul').hasClass('open')) {
         $(this).siblings('ul').removeClass('open').slideToggle();
       }
       else {
         $(this).siblings('ul').addClass('open').slideToggle();
       }
     });
   };
   if (settings.format === 'multitoggle') multiTg();
   else cssmenu.addClass('dropdown');
   if (settings.sticky === true) cssmenu.css('position', 'fixed');
resizeFix = function() {
  var mediasize = 1000;
     if ($( window ).width() > mediasize) {
       cssmenu.find('ul').show();
     }
     if ($(window).width() <= mediasize) {
       cssmenu.find('ul').hide().removeClass('open');
     }
   };
   resizeFix();
   return $(window).on('resize', resizeFix);
 });
  };
})(jQuery);

(function($){
$(document).ready(function(){
$("#cssmenu").menumaker({
   format: "multitoggle"
});
});
})(jQuery);


$(window).scroll(function(){
  var sticky = $('header'),
      scroll = $(window).scrollTop();

  if (scroll >= 300) sticky.addClass('darkHeader');
  else sticky.removeClass('darkHeader');
});
	
	
$(document).ready(function(){
  $(".button").click(function(){
    $(".mobile-title").toggleClass("main");
  });
});	


$(document).ready(function() {
  $('select').niceSelect();
})




	
