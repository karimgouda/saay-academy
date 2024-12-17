$(document).ready(function () {
  /*-----------------------
    loader
  -------------------- */
  $(".loader").fadeOut(2000);
  /*-------------
    handel scroll to top btn 
  ----------------*/
  $(window).scroll(function () {
    if (this.scrollY >= 600) {
      $(".scroll-icon").fadeIn();
    } else {
      $(".scroll-icon").fadeOut();
    }
  });
  $(".scroll-icon").click(function () {
    $("body, html").animate({ scrollTop: 0 }, 2000);
  });
});
