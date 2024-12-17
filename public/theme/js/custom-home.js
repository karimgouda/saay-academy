$(document).ready(function () {
  /*------
    header slid down
  -------*/
  $(window).on("scroll", function () {
    if ($(window).scrollTop() >= 200) {
      $(".main-header").addClass("sticky");
    } else {
      $(".main-header").removeClass("sticky");
    }
  });

  /*------
    title flex slider
  -------*/
  $(".flexslider.landing").flexslider({
    animation: "slide",
    controlNav: false,
  });

  /*------
    counter
  -------*/
  $(".counter").countUp();

  /*------
    progress
  -------*/
  $(".ab-progress").progressBar({
    fill: "linear-gradient(to right,#20b7b9 0,#63BF85 100%)",
  });

  /*--------
    owlCarousel
  --------*/
  let flag = false;
  if (document.dir == "rtl") {
    flag = true;
  }
  $(".banner__carousel").owlCarousel({
    loop: true,
    nav: false,
    dots: false,
    rtl: flag,
    autoplay: true,
    responsive: {
      600: {
        items: 2,
      },
      900: {
        items: 4,
      },
      1100: {
        items: 6,
      },
    },
  });
  $(".our-team__carousel").owlCarousel({
    loop: true,
    nav: true,
    rtl: flag,
    autoplay: true,
    dots: false,
    responsive: {
      0: {
        items: 1,
      },
      500: {
        items: 2,
      },
      768: {
        items: 3,
      },
      992: {
        items: 4,
      },
    },
  });
  /*------
    wow effects
  -------*/
  new WOW().init();
});
