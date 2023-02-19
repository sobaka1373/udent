jQuery(document).ready(function($) {
   $('.burger-inner img').click(function (){
      if ($('.hide-menu').length > 0) {
         $('.burger-menu').removeClass('hide-menu');
         $('.burger-menu').addClass('active-menu');
         $('body').addClass('hide-page');
      } else {
         $('.burger-menu').removeClass('active-menu');
         $('.burger-menu').addClass('hide-menu');
         $('body').removeClass('hide-page');
      }
   });

   $('.burger-menu-header .close').click(function (){
      $('.burger-menu').removeClass('active-menu');
      $('.burger-menu').addClass('hide-menu');
      $('body').removeClass('hide-page');
   });


   $('.burger-sub-p img').click(function (){
      if ($('.close-sub').length > 0) {
         $('.burger-sub').removeClass('close-sub');
         $('.burger-sub').addClass('active-sub');

         $('.sub-menu-second').show();
      } else {
         $('.burger-sub').addClass('close-sub');
         $('.burger-sub').removeClass('active-sub');

         $('.sub-menu-second').hide();
      }
   });

   $('.price-container-ul .arrow-down img').click(function () {
      if ($(this).closest('.level-menu-first-p').find('.price-menu-hide').length > 0) {
         $(this).closest('.arrow-down').hide();
         $(this).closest('.price-container-ul').find('.arrow-up').show();
         $(this).closest('.level-menu-first-p').find('.price-menu').addClass('price-menu-active');
         $(this).closest('.level-menu-first-p').find('.price-menu').removeClass('price-menu-hide');
      }
   });

   $('.price-container-ul .arrow-up img').click(function () {
      if ($(this).closest('.level-menu-first-p').find('.price-menu-active').length > 0) {
         $(this).closest('.arrow-up').hide();
         $(this).closest('.price-container-ul').find('.arrow-down').show();
         $(this).closest('.level-menu-first-p').find('.price-menu').removeClass('price-menu-active');
         $(this).closest('.level-menu-first-p').find('.price-menu').addClass('price-menu-hide');
      }
   });

   $('.record').click(function (){
      $('.pop-it-record').show();
      $('.pop-helper').hide();
      $('body').addClass('hide-page');
      $('.ellipse').css('box-shadow', 'unset');
      $('.ellipse').css('background', 'unset');
   });

   $('.footer-whatsapp').click(function (e){
      e.preventDefault();
      $('.pop-it-record').show();
      $('.pop-helper').hide();
      $('body').addClass('hide-page');
      $('.ellipse').css('box-shadow', 'unset');
      $('.ellipse').css('background', 'unset');
   });

   $('.btn-round').click(function (){
      $('.pop-it-record').show();
      $('.pop-helper').hide();
      $('body').addClass('hide-page');
      $('.ellipse').css('box-shadow', 'unset');
      $('.ellipse').css('background', 'unset');
   });

   $(document).mouseup(function (e) {
      var container = $(".pop-it-record");
      if (container.has(e.target).length === 0){
         container.hide();
         $('.pop-it-record').hide();
         $('body').removeClass('hide-page');
         $('.ellipse').css('box-shadow', '0px 5px 100px 100px rgb(253 253 253) inset');
         $('.ellipse').css('background', 'rgba(254, 204, 0, 0.0784313725)');
      }
   });

   $('.record-header .close img').click(function (){
      $('.pop-it-record').hide();
      $('body').removeClass('hide-page');
      $('.ellipse').css('box-shadow', '0px 5px 100px 100px rgb(253 253 253) inset');
      $('.ellipse').css('background', 'rgba(254, 204, 0, 0.0784313725)');
   });

   $('.header-question').click(function (){
      $(this).siblings('.pop-helper').show();
      $('.pop-it-record').hide();
   });

   $('.helper-header .close img').click(function (){
      $('.pop-helper').hide();
   });


   $('.icones-carousel').slick({
      nextArrow: '<i class="fas fa-chevron-right slick-next"></i>',
      prevArrow: '<i class="fas fa-chevron-left slick-prev"></i>',
      autoplay: true,
      autoplaySpeed: 2500,
      dots: false,
      arrows: true,
      infinite: true,
      speed: 500,
      cssEase: 'linear',
      slidesToShow: 3,
      slidesToScroll: 1,
      responsive: [{
         breakpoint: 800,
         settings: {
            dots: false,
            arrows: true,
            slidesToShow: 1,
            slidesToScroll: 1,
         }
      },{
         breakpoint: 1200,
         settings: {
            dots: false,
            arrows: true,
            slidesToShow: 2,
            slidesToScroll: 2,
         }
      }]
   });

   $('.owl-carousel').owlCarousel({
      items: 3,
      margin: 50,
      autoPlay: 3000,
      itemsDesktop : [1515,2],
      itemsDesktopSmall : [900,1],
      itemsTablet: [600,1],
      navigation: false,
      pagination: false,
      center: true,
   });
});