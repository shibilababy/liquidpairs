$('[data-toggle="offcanvas"]').on('click', function () {
    $('.offcanvas-collapse').addClass('open');
})
$('#mobnav-close').on('click', function () {
    $('.offcanvas-collapse').removeClass('open');
})

$(document).ready(function () {
    // $(".hamburger").click(function () {
    //     $(this).toggleClass("is-active");
    // });
    $(window).scroll(function () {
        if ($(this).scrollTop() > 0) {
            $('.navbar').addClass('shrink');
        } else {
            $('.navbar').removeClass('shrink');
        }
    });
});



$('.navbar-nav li a').click(function () {
    $('.navbar-collapse').removeClass('open');
    $('.navbar-nav li a').removeClass('active');
    $('.hamburger').removeClass('is-active');
    $(this).addClass('active');
    $('html, body').animate({
      scrollTop: $($(this).attr('href')).offset().top - 120
    }, 100);
});

// window.location.href.split('#')
const ur=window.location.href.split('#')[1];
if(ur=='navResources'){
    $('.navbar-nav li a').removeClass('active');
    $(`#navResourcesLink`).addClass('active');
    $('html,body').animate({
        scrollTop: $('#navResources').offset().top - 120
    });
    if ($(window).width() < 579) {
        $('html,body').animate({
            scrollTop: $('#navResources').offset().top - 900
        });
     }
}
else if(ur=='aboutUs'){
    $('.navbar-nav li a').removeClass('active');
    $(`#navAboutLink`).addClass('active');
    $('html,body').animate({
        scrollTop: $('#aboutUs').offset().top - 120
    });
    if ($(window).width() < 579) {
        $('html,body').animate({
            scrollTop: $('#aboutUs').offset().top - 900
        });
     }
}


// Footer nav

$('.footer-nav li a').click(function () {
$('html, body').animate({
    scrollTop: $($(this).attr('href')).offset().top - 120
}, 100);
});


// Tab slider

$('.slider-content').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    centerMode: true,
    centerPadding: '15px',
    arrows: true,
    fade: false,
    infinite: false,
    speed: 300,
    asNavFor: '.slider-thumb',
    arrows: true,
    autoplay: false,
  });
  $('.slider-thumb').slick({
    slidesToShow: 3,
    slidesToScroll: 3,
    asNavFor: '.slider-content',
    dots: false,
    infinite: false,
    centerMode: false,
    focusOnSelect: true
  });


  