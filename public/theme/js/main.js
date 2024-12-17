$(document).ready(function () {
  /*------
    loader fade out 
  -------*/
  $(".loader").fadeOut(1500);
  /*------
    popup
  -------*/
  // videos
  $(".popup-video").magnificPopup({
    type: "iframe",
    mainClass: "mfp-fade",
    callbacks: {
      beforeOpen: function () {
        this.st.mainClass = this.st.el.attr("data-effect");
      },
    },
  });
  // images
  $(".image-popup").magnificPopup({
    type: "image",
    closeOnContentClick: true,
    mainClass: "mfp-img-mobile",
    image: {
      verticalFit: true,
    },
    callbacks: {
      beforeOpen: function () {
        this.st.mainClass = this.st.el.attr("data-effect");
      },
    },
  });
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
