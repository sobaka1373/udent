jQuery(document).ready(function($) {
   $('.burger-menu img').click(function (){
      if ($('.hide-menu').length > 0) {
         $('.burger-menu1').removeClass('hide-menu');
         $('.burger-menu1').addClass('active-menu');
         $('body').addClass('hide-page');
      } else {
         $('.burger-menu1').removeClass('active-menu');
         $('.burger-menu1').addClass('hide-menu');
         $('body').removeClass('hide-page');
      }
   });

   $('.burger-menu-header .close').click(function (){
      $('.bburger-menu1').removeClass('active-menu');
      $('.burger-menu1').addClass('hide-menu');
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

   $('.level-menu-first-p').click(function () {
      if ($(this).find('.price-menu-hide').length > 0) {
         $(this).find('.arrow-down').hide();
         $(this).find('.arrow-up').show();
         $(this).find('.price-menu').addClass('price-menu-active');
         $(this).find('.price-menu').removeClass('price-menu-hide');
      } else {
         $(this).find('.arrow-up').hide();
         $(this).find('.arrow-down').show();
         $(this).find('.price-menu').removeClass('price-menu-active');
         $(this).find('.price-menu').addClass('price-menu-hide');
      }
   });


   $('.btn-record').click(function (){
      $('.pop-up-container').addClass('pop-up-active');
      $('#myModal').modal({backdrop: true});
      // $('body').addClass('hide-page');
   });

   $('.link-record').click(function (e) {
      e.preventDefault();
      $('.pop-up-container').addClass('pop-up-active');
      $('#myModal').modal({backdrop: true});
      // $('body').addClass('hide-page');
   });

   $('.footer-whatsapp').click(function (e){
      e.preventDefault();
      $('.pop-up-container').addClass('pop-up-active');
      $('#myModal').modal({backdrop: true});
   });

   $('.btn-round').click(function (){
      $('.pop-it-record').show();
      $('.pop-helper').hide();
      $('body').addClass('hide-page');
      $('.ellipse').css('box-shadow', 'unset');
      $('.ellipse').css('background', 'unset');
   });

   // $(document).mouseup(function (e) {
   //    var container = $(".pop-it-record");
   //    if (container.has(e.target).length === 0){
   //       container.hide();
   //       $('.pop-it-record').hide();
   //       $('body').removeClass('hide-page');
   //       $('.ellipse').css('box-shadow', '0px 5px 100px 100px rgb(253 253 253) inset');
   //       $('.ellipse').css('background', 'rgba(254, 204, 0, 0.0784313725)');
   //    }
   // });

   $('.pop-up-container .pop-up-header img').click(function (){
      $('.pop-up-container').removeClass('pop-up-active');
      $('body').removeClass('hide-page');
      // $('.ellipse').css('box-shadow', '0px 5px 100px 100px rgb(253 253 253) inset');
      // $('.ellipse').css('background', 'rgba(254, 204, 0, 0.0784313725)');
   });

   $('.help-box').click(function (){
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
      // variableWidth: true,
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



   $('.burger-menu1 #top-menu-nav ul .menu-item-has-children').click(function () {
      $('.burger-menu1 #top-menu-nav .sub-menu').show();

      // console.log(11);
   });

   // $('.btn-record').click(function () {
   //    $('.pop-up-container').addClass('pop-up-active');
   // });


});