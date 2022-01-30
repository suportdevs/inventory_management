/* ====== Index ======

1. JEKYLL INSTANT SEARCH
2. SCROLLBAR CONTENT
3. TOOLTIPS AND POPOVER
4. JVECTORMAP DASHBOARD
5. JVECTORMAP ANALYTICS
6. JVECTORMAP WIDGET
7. MULTIPLE SELECT
8. LOADING BUTTON
  8.1. BIND NORMAL BUTTONS
  8.2. BIND PROGRESS BUTTONS AND SIMULATE LOADING PROGRESS
9. TOASTER
10. PROGRESS BAR

====== End ======*/
// Navbar Dropdown
$(function () {
  $(".dropdown").hover(
    function () {
      $('.dropdown-menu', this).stop(true, true).fadeIn("fast");
      $('#right-navbar a.dropdown-toggle:before', this).stop(true, true).fadeIn("fast");
      $(this).toggleClass('open');
      $('b', this).toggleClass("caret caret-up");
      $('.dropdown-menu').css('display:block');
    },
    function () {
      $('.dropdown-menu', this).stop(true, true).fadeOut("fast");
      $('#right-navbar a.dropdown-toggle:before', this).stop(true, true).fadeOut("fast");
      $(this).toggleClass('open');
      $('b', this).toggleClass("caret caret-up");
      $('.dropdown-menu').css('display:block');
    });
}); // end navbar dropdown

$(document).ready(function () {
  "use strict";

  /*======== 3. TOOLTIPS AND POPOVER ========*/
  $('[data-toggle="tooltip"]').tooltip({
    container: "body",
    template:
      '<div class="tooltip" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>'
  });
  $('[data-toggle="popover"]').popover();

  /*======== 4. JVECTORMAP DASHBOARD ========*/
  var mapData = {
    US: 1298,
    FR: 540,
    DE: 350,
    BW: 450,
    NA: 250,
    ZW: 300,
    AU: 760,
    GB: 120,
    ZA: 450
  };

  if (document.getElementById("world")) {
    $("#world").vectorMap({
      map: "world_mill",
      backgroundColor: "transparent",
      zoomOnScroll: false,
      regionStyle: {
        initial: {
          fill: "#e4e4e4",
          "fill-opacity": 0.9,
          stroke: "none",
          "stroke-width": 0,
          "stroke-opacity": 0
        }
      },
      markerStyle: {
        initial: {
          stroke: "transparent"
        },
        hover: {
          stroke: "rgba(112, 112, 112, 0.30)"
        }
      },

      markers: [
        {
          latLng: [54.673629, -62.347026],
          name: "America",
          style: {
            fill: "limegreen"
          }
        },
        {
          latLng: [62.466943, 11.797592],
          name: "Europe",
          style: {
            fill: "orange"
          }
        },
        {
          latLng: [23.956725, -8.768815],
          name: "Africa",
          style: {
            fill: "red"
          }
        },
        {
          latLng: [-21.943369, 123.102198],
          name: "Australia",
          style: {
            fill: "royalblue"
          }
        }
      ]
    });
  }

  /*======== 5. JVECTORMAP ANALYTICS ========*/
  var mapData2 = {
    IN: 19000,
    US: 13000,
    TR: 9500,
    DO: 7500,
    PL: 4600,
    UK: 4000
  };

  if (document.getElementById("analytic-world")) {
    $("#analytic-world").vectorMap({
      map: "world_mill",
      backgroundColor: "transparent",
      zoomOnScroll: false,
      regionStyle: {
        initial: {
          fill: "#e4e4e4",
          "fill-opacity": 0.9,
          stroke: "none",
          "stroke-width": 0,
          "stroke-opacity": 0
        }
      },

      series: {
        regions: [
          {
            values: mapData2,
            scale: ["#6a9ef9", "#b6d0ff"],
            normalizeFunction: "polynomial"
          }
        ]
      }
    });
  }

  /*======== 6. JVECTORMAP WIDGET ========*/
  if (document.getElementById("demoworld")) {
    $("#demoworld").vectorMap({
      map: "world_mill",
      backgroundColor: "transparent",
      regionStyle: {
        initial: {
          fill: "#9c9c9c"
        }
      }
    });
  }

  /*======== 10. PROGRESS BAR ========*/
  NProgress.done();
});

/*  ============= Date Time ============= */
setInterval(function () {
  var d = new Date();
  var date = d.toDateString();
  var time = d.toLocaleTimeString();
  var dateTime = date + " " + time;
  document.getElementById("print-date").innerText = dateTime;
}, 1000);

/*  ============= Dark Mode Enable ============= */
var modeSwitch = document.querySelector(".light");
var modeIcon = document.querySelector("#modeIcon");
var existTheme = localStorage.getItem('theme');
var themeLink = document.querySelector('#darkTheme');
if (existTheme == "http://127.0.0.1:8000/inventory_management/assets/css/dark.css") {
  themeLink.setAttribute('href', existTheme);
  modeSwitch.classList.add("animate");
  modeIcon.classList.remove("fa-sun");
  modeIcon.classList.add("fa-moon");
} else {
  themeLink.setAttribute('href', existTheme);
  modeSwitch.classList.remove("animate");
  modeIcon.classList.add("fa-sun");
  modeIcon.classList.remove("fa-moon");
};
modeSwitch.addEventListener("click", function () {
  modeSwitch.classList.toggle("animate");
  if (existTheme !== "http://127.0.0.1:8000/inventory_management/assets/css/dark.css") {
    localStorage.setItem('theme', "http://127.0.0.1:8000/inventory_management/assets/css/dark.css");
    location.reload();
  };
  if (existTheme == "http://127.0.0.1:8000/inventory_management/assets/css/dark.css") {
    localStorage.setItem('theme', ' ');
    location.reload();
  };
});
/*  ============= End Dark Mode Enable ============= */