

jQuery(document).ready(function($){


$(window).scroll(function(){
  if($(this).scrollTop() > 100){
      $('.navbar').addClass('fixed-top')
  } else{
      $('.navbar').removeClass('fixed-top')
  }
});


$('.tab-menu li a').on('click', function(){
  var target = $(this).attr('data-rel');
$('.tab-menu li a').removeClass('active');
  $(this).addClass('active');
  $("#"+target).fadeIn('slow').siblings(".tab-box").hide();
  return false;
});



$('.resources-slider').slick({
 slidesToShow: 1,
 slidesToScroll: 1,
 arrows: false,
 dots: true,
 speed: 300,
 infinite: true,
 autoplaySpeed: 5000,
 autoplay: true,
 margin:15,
  responsive: [
{
 breakpoint: 991,
 settings: {
   slidesToShow: 1,
 }
},
{
 breakpoint: 767,
 settings: {
   slidesToShow: 1,
 }
}
]
});




  $('.resources-about-slider').slick({
   slidesToShow: 1,
   slidesToScroll: 1,
   arrows: false,
   dots: true,
   speed: 300,
   infinite: true,
   autoplaySpeed: 5000,
   autoplay: true,
   margin:15,
    responsive: [
  {
   breakpoint: 991,
   settings: {
     slidesToShow: 1,
   }
  },
  {
   breakpoint: 767,
   settings: {
     slidesToShow: 1,
   }
  }
  ]
  });



    $('.resources-about-slider1').slick({
     slidesToShow: 1,
     slidesToScroll: 1,
     arrows: false,
     dots: true,
     speed: 300,
     infinite: true,
     autoplaySpeed: 5000,
     autoplay: true,
     margin:15,
      responsive: [
    {
     breakpoint: 991,
     settings: {
       slidesToShow: 1,
     }
    },
    {
     breakpoint: 767,
     settings: {
       slidesToShow: 1,
     }
    }
    ]
    });




$('.testimonials-slider').slick({
 slidesToShow: 3,
 slidesToScroll: 1,
 arrows: false,
 dots: true,
 speed: 300,
 infinite: true,
 autoplaySpeed: 5000,
 autoplay: true,
 margin:15,
 centerMode: true,
  responsive: [
{
 breakpoint: 991,
 settings: {
   slidesToShow: 3,
 }
},
{
 breakpoint: 767,
 settings: {
   slidesToShow: 1,
 }
}
]
});


$('.training-slider').slick({
  slidesToShow: 1.5,
  slidesToScroll: 15,
  arrows: true,
  dots: false,
  speed: 300,
  infinite: true,
  autoplaySpeed: 600000,
  autoplay: true,
  margin:15,
  prevArrow: '<button class="slide-arrow prev-arrow"><span class="arrow-left"><svg xmlns="http://www.w3.org/2000/svg" width="35.6" height="23.121" viewBox="0 0 35.6 23.121" class="arrow-left-svg"><style type="text/css">.arrow-color{color:var(--theme-primary-color);}</style>\<g class="arrow-color" id="Icon_feather-arrow-left" data-name="Icon feather-arrow-left" transform="translate(0 1.061)">\<path id="Path_479" data-name="Path 479" d="M7.5,18H41.6" transform="translate(-7.5 -7.5)" fill="none" stroke="currentcolor" stroke-linejoin="round" stroke-width="3"/>\
  <path id="Path_480" data-name="Path 480" d="M7.5,28.5,18,18,7.5,7.5" transform="translate(16.1 -7.5)" fill="none" stroke="currentcolor" stroke-linejoin="round" stroke-width="3"/>\</g>\</svg></span></button>',
  nextArrow: '<button class="slide-arrow next-arrow"><span class="arrow-right"><svg xmlns="http://www.w3.org/2000/svg" width="35.6" height="23.121" viewBox="0 0 35.6 23.121" class="arrow-left-svg"><style type="text/css">.arrow-color{color:var(--theme-primary-color);}</style>\<g class="arrow-color" id="Icon_feather-arrow-left" data-name="Icon feather-arrow-left" transform="translate(0 1.061)">\<path id="Path_479" data-name="Path 479" d="M7.5,18H41.6" transform="translate(-7.5 -7.5)" fill="none" stroke="currentcolor" stroke-linejoin="round" stroke-width="3"/>\
  <path id="Path_480" data-name="Path 480" d="M7.5,28.5,18,18,7.5,7.5" transform="translate(16.1 -7.5)" fill="none" stroke="currentcolor" stroke-linejoin="round" stroke-width="3"/>\</g>\</svg></span></button>',


   responsive: [
 {
  breakpoint: 991,
  settings: {
    slidesToShow: 1,
  }
 },
 {
  breakpoint: 767,
  settings: {
    slidesToShow: 1,
  }
 }
 ]
 });


$('.awards-slider').slick({
centerMode: true,
slidesToShow: 1,
dots: true,
arrows: true,
swipe: true,
swipeToSlide: true,
responsive: [
{
 breakpoint: 991,
 settings: {
   slidesToShow: 1,
 }
},
{
 breakpoint: 767,
 settings: {
   slidesToShow: 1,
 }
}
]
});



$('.slider-video').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  arrows: true,
  // fade: true,
  asNavFor: '.video-thum'
});
$('.video-thum').slick({
  slidesToShow: 4,
  slidesToScroll: 1,
  asNavFor: '.slider-video',
  dots: true,
  arrows: false,
  // centerMode: true,
  focusOnSelect: true,
  responsive: [
   
    {
     breakpoint: 767,
     settings: {
       slidesToShow: 2,
     }
    }
    ]
});


  jQuery('.play_bnt').on('click',function(){
  let vidSrc = $(this).siblings('iframe');
  let cover = $(this).siblings('img');
  vidSrc.trigger('play');
  $(this).parents().eq(1).find('.common-conetnt').hide()
  cover.hide();
  $(this).hide();
  });





$('.slider-main-nav').slick({
  slidesToShow: 1,
  arrows: false,
  asNavFor: '.slider-nav',
  vertical: true,
  autoplay: false,
  verticalSwiping: true,
  responsive: [
{
 breakpoint: 991,
 settings: {
   slidesToShow: 1,
   vertical: false,
 }
},
{
 breakpoint: 767,
 settings: {
   slidesToShow: 1,
   vertical: false,
 }
}
]
});

$('.slider-nav').slick({
  slidesToShow: 5,
  asNavFor: '.slider-main-nav',
  vertical: true,
  focusOnSelect: true,
  autoplay: false,
  centerMode: true,
  responsive: [
{
 breakpoint: 991,
 settings: {
   slidesToShow: 5,
   vertical: false,
 }
},
{
 breakpoint: 767,
 settings: {
   slidesToShow: 3,
   vertical: false,
 }
}
]
});




$('.surgeries a').click(function(e){
  $('.surgeries a').removeClass('active');
  $(this).addClass('active');
  var tagid = $(this).data('tag');
  $('.tab-slider').removeClass('active').addClass('hide');
  $('#'+tagid).addClass('active').removeClass('hide');
  e.target
   e.relatedTarget
   $('.slider').slick('setPosition');
});


$('.slider-gallery').slick({
 slidesToShow: 1,
 slidesToScroll: 1,
 arrows: false,
 dots: true,
 speed: 300,
 infinite: true,
 autoplaySpeed: 5000,
 autoplay: true,
 margin:15,
  responsive: [
{
 breakpoint: 991,
 settings: {
   slidesToShow: 1,
 }
},
{
 breakpoint: 767,
 settings: {
   slidesToShow: 1,
 }
}
]
});

$('.surgeries a[data-toggle="tab"]').on('click', function (e) {
$('.slider-video, .video-thum').slick('setPosition');
});



$('.faq-tab a').click(function(e) {
  $('.faq-tab a').removeClass('active');
  $(this).addClass('active');
  var tagid = $(this).data('tag');
  $('.tab-content').removeClass('active').addClass('hide');
  $('#' + tagid).addClass('active').removeClass('hide');

});

$(document).ready(function() {
  $('.faq-accordion li').click(function() {
      $('li').removeClass("active");
      $(this).toggleClass("active");
  });
});
$(document).ready(function() {
  $('.faq-tab li').click(function() {
      $('li').removeClass("active");
      $(this).addClass("active");
  });
});



$('.toggle').click(function(e) {
  e.preventDefault();

  let $this = $(this);

  if ($this.next().hasClass('show')) {
      $this.next().removeClass('show');
      $this.next().slideUp(350);
  } else {
      $this.parent().parent().find('li .inner').removeClass('show');
      $this.parent().parent().find('li .inner').slideUp(350);
      $this.next().toggleClass('show');
      $this.next().slideToggle(350);
  }
});

$('#show-search-box').click(function() {
  $("#hidden-search-box").toggle();
});

document.querySelector('.rightNav-toggle')
.addEventListener('click', function() {
this.classList.toggle('activate');
});


$('#show-search-box').click(function() {
  $("#hidden-search-box").toggle();
});

});