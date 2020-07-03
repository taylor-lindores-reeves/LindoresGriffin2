const content = document.querySelector(".content__inner");
const image = document.querySelector(".inner-page-banner img");
const gridOne = document.querySelectorAll(".services-grid__item-row-one");
const gridTwo = document.querySelectorAll(".services-grid__item-row-two");
const gridThree = document.querySelectorAll(".services-grid__item-row-three");
const toolbox = document.querySelectorAll(".toolbox__list-item");
const featured = document.querySelector(".featured-post");
const featuredContent = document.querySelector(".featured-post__content");
const insight = document.querySelectorAll(".post");
const studies = document.querySelectorAll(".study");
const isMobile = require("../modules/isMobile");
const $ = require("jquery");

$(document).ready(function() {
  if (image) {
    image.style.opacity = 1;
  }

  if (content) {
    content.style.marginTop = 0;
  }

  if (featured && !isMobile.isMobileDevice()) {
    featured.style.opacity = 1;
    featuredContent.style.bottom = "-90%";
  }

  if (window.location.pathname === "/digital-marketing/") {
    toolbox.forEach((el, index) => {
      setTimeout(() => {
        el.style.opacity = 1;
      }, index * 200);
    });

    var waypoint = new Waypoint({
      element: document.getElementById("basic-waypoint-one"),
      handler: function() {
        gridOne.forEach((el, index) => {
          setTimeout(() => {
            el.style.opacity = 1;
            el.style.paddingTop = 0;
          }, index * 200);
        });
      },
      offset: 1100
    });
    var waypoint = new Waypoint({
      element: document.getElementById("basic-waypoint-two"),
      handler: function() {
        gridTwo.forEach((el, index) => {
          setTimeout(() => {
            el.style.opacity = 1;
            el.style.paddingTop = 0;
          }, index * 200);
        });
      },
      offset: 1100
    });

    var waypoint = new Waypoint({
      element: document.getElementById("basic-waypoint-three"),
      handler: function() {
        gridThree.forEach((el, index) => {
          setTimeout(() => {
            el.style.opacity = 1;
            el.style.paddingTop = 0;
          }, index * 200);
        });
      },
      offset: 1100
    });
  }

  if (
    window.location.pathname === "/insights/" ||
    window.location.pathname.substr(0, 10) === "/category/"
  ) {
    insight.forEach((el, index) => {
      var waypoint = new Waypoint({
        element: el,
        handler: function() {
          el.style.opacity = 1;
        },
        offset: "95%"
      });
    });
  }

  if (window.location.pathname === "/case-studies/") {
    studies.forEach((el, index) => {
      var waypoint = new Waypoint({
        element: el,
        handler: function() {
          el.style.opacity = 1;
        },
        offset: "95%"
      });
    });
  }
});
