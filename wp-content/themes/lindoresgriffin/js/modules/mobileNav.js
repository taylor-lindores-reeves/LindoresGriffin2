var $ = require('jquery');
var mobNav = $(".hey");
var container = $(".container");
var body = $("body");
var checkbox = $(".checkbox");
    bodyClick = event => {
        if (!event.target.closest(".panel")) {
            checkbox.checked = false;
            container.toggleClass("menu-open");
        }
    };

    mobNav.on("click touchstart", event => {
        event.stopPropagation();
        event.preventDefault();

        setTimeout(() => {
            checkbox.checked = true;
            container.addClass("menu-open");
            return;
        }, 25);

        body.on("click touchstart", event => {
            if (container.hasClass("menu-open")) {
                bodyClick(event);
            }
        });
    });


