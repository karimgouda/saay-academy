$(document).ready(function () {
  /*------
    counter
  -------*/
  $(".counter").countUp();
  $(".flexslider.sliders__down").flexslider({
    animation: "fade",
    controlNav: false,
  });
  /*--------
    owlCarousel
  --------*/
  let flag = false;
  if (document.dir == "rtl") {
    flag = true;
  }
  $(".owl-carousel.slides").owlCarousel({
    loop: true,
    nav: true,
    rtl: flag,
    autoplay: false,
    dots: flag,
    responsive: {
      0: {
        items: 1,
      },
      600: {
        items: 2,
      },
      992: {
        items: 3,
      },
    },
  });

  // custom slide by hover
  $("#customHover").mouseenter(function () {
    $(".flexslider.sliders__down").flexslider("pause");
  });
  $("#customHover").mouseleave(function () {
    $(".flexslider.sliders__down").flexslider("play");
  });
  $("#customHover li").mouseenter(function () {
    let img = $(this).find("img");
    let src = img.attr("src");
    $(`.flex-active-slide`)
      .find("img")
      .animate({ opacity: 0.7 }, 200, function () {
        $(this).attr("src", src).animate({ opacity: 1 }, 400);
      });
  });
});
