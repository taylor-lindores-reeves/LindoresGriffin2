const isMobile = require("./isMobile");
const $ = require("jquery");

if (!isMobile.isMobileDevice()) {
  if (window.location.pathname !== "/") {
    var prevScrollpos = window.pageYOffset + "102px";
    var currentScrollPos = window.pageYOffset;
    $(window).scroll(function() {
      if ($(window).scrollTop() > 110) {
        document.getElementById("navbar").style.top = "-102px";
        const insight = document.getElementById("insight-column");
        if (insight) {
          document.getElementById("insight-column").style.marginTop = "-102px";
        }
      } else {
        document.getElementById("navbar").style.top = "0";
        const insight = document.getElementById("insight-column");
        if (insight) {
          document.getElementById("insight-column").style.marginTop = "0";
        }
      }
      prevScrollpos = currentScrollPos;
    });
  }
}
