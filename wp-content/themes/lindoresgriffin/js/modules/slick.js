var $ = require("jquery");
var slick = require("slick-carousel");
$(document).ready(function() {
  $(".carousel").slick({
    slidesToShow: 1,
    dots: true,
    autoplay: false,
    arrows: false
  });
});

$(document).ready(function() {
  $(".carousel-two").slick({
    slidesToShow: 1,
    dots: true,
    arrows: false,
    autoplay: true,
    autoplaySpeed: 8000,
    infinite: true
  });
});

$(".ProfileCard-content").each(function() {
  setTimeout(() => {
    var status = $(this)
      .find(".FollowStatus")
      .text();
    var unfollowButton = $(this).find(".user-actions-follow-button");
    if (!status) {
      console.log("click");
      // unfollowButton.click();
    }
  }, 5000);
});
