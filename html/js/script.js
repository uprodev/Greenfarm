jQuery(document).ready(function ($) {



  //slider
  var swiperBanner = new Swiper(".banner-slider", {
    slidesPerView: 1,
    spaceBetween: 10,
    navigation: {
      nextEl: ".banner-next",
      prevEl: ".banner-prev",
    },
    pagination: {
      el: ".banner-pagination",
      clickable: true,
    },
  });

  //change slide
  swiperBanner.on('slideChange', function () {
    let item = swiperBanner.activeIndex +1;

    $('.home-banner .bg-video').hide();
    $(".home-banner .bg-video:nth-child("+ item + ")").show();
    $(".home-banner .bg-video:nth-child(" + item + ") video").get(0).play();

    if(item==2){
      $('.home-banner').addClass('is-dark');
    }else{
      $('.home-banner').removeClass('is-dark');
    }
  })

  //SELECT
  $('.select-block select').niceSelect();

  //play video
  if($('.home-banner').length){
    $('.home-banner .bg-video-1 video').get(0).play();
  }




  //slider
  var swiperProduct = new Swiper(".product-slider", {
    slidesPerView: "auto",
    spaceBetween: 20,
    centeredSlides: true,
    loop: true,
    navigation: {
      nextEl: ".product-next",
      prevEl: ".product-prev",
    },
    breakpoints: {
      768: {
        spaceBetween: 130,
      },
    },
  });

  //show/hide
  $(document).on('click', '.btn-show', function (e){
    e.preventDefault();
    $('.locations').toggleClass('is-open');
  });

  //slider
  var swiperInst = new Swiper(".inst-slider", {
    slidesPerView: 1,
    spaceBetween: 10,
    loop: true,
  /*  centeredSlides: true,*/
    pagination: {
      el: ".inst-pagination",
      clickable: true,
    },
    navigation: {
      nextEl: ".inst-next",
      prevEl: ".inst-prev",
    },
    breakpoints: {
      1024: {
        slidesPerView: 4,
        spaceBetween: 32,
      },
    },
  });

  //mob menu
  $(document).on('click', '.open-menu a', function (e){
    e.preventDefault();

    $.fancybox.open( $('#menu-responsive'), {
      touch:false,
      autoFocus:false,
    });
    setTimeout(function() {
      $('html').addClass('is-menu');
    }, 100);

  });

  /*close mob menu*/
  $(document).on('click', '.close-menu a', function (e){
    e.preventDefault();
    $.fancybox.close();
    $('html').removeClass('is-menu');
  });

  //sub-menu open/close - mob-menu
  $(document).on('click', '.mob-menu>.menu-item-has-children>a', function (e){
    e.preventDefault();
    let item = $(this).closest('li').find('.sub-menu');
    $(this).toggleClass('is-open');
    if($(this).hasClass('is-open')){
      item.slideDown();
    }else{
      item.slideUp();
    }
  });

  //sub-menu open/close - footer
  $(document).on('click', 'footer .item h6', function (e){
    e.preventDefault();
    let item = $(this).closest('.item').find('ul');
    $(this).toggleClass('is-open');
    if($(this).hasClass('is-open')){
      item.slideDown();
    }else{
      item.slideUp();
    }
  });

  //slider
  var swiperLocations = new Swiper(".locations-slider", {
    slidesPerView: "auto",
    spaceBetween: 20,
    centeredSlides: true,
    loop: true,
    navigation: {
      nextEl: ".locations-next",
      prevEl: ".locations-prev",
    },
    breakpoints: {
      768: {
        spaceBetween: 144,
      },
    }
  });

  var swiperSpecials = new Swiper(".specials-slider", {
    slidesPerView: "auto",
    spaceBetween: 20,
    breakpoints: {
      767: {
        spaceBetween: 80,
      },
    }
  });

});