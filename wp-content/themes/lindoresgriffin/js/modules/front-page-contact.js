var $ = require("jquery");

$(document).ready(function() {
  if (window.location.pathname === "/") {
    $(".contact-btn").click(e => {
      e.preventDefault();
      $(".drawer").toggleClass("drawer--open");
      $(".drawer").hasClass("drawer--open")
        ? $(".btn--contact").text("Close")
        : $(".btn--contact").text("Contact");

      if ($(".client").hasClass("client--open")) {
        $(".client").removeClass("client--open");
      } else {
        setTimeout(() => {
          $(".client").toggleClass("client--open");
        }, 1000);
      }
    });
  }
});
