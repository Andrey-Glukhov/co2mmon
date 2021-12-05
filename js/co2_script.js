$(document).ready(function () {
  var controller = new ScrollMagic.Controller();

  if ($("#user_opener").length) {
    var usersScene = new ScrollMagic.Scene({
      triggerElement: "#user_opener",
      triggerHook: 0,
      duration: "55%",
    })
      .setPin("#user_opener", { pushFollowers: false })
      .addTo(controller);
  }

  if ($("#home_opener").length) {
    var typed = new Typed("#typed", {
      stringsElement: "#typed-strings",
      typeSpeed: 45,
      startDelay: 190,
    });

    var homeScene = new ScrollMagic.Scene({
      triggerElement: "#home_phone-image",
      triggerHook: 0.05,
      duration: "100%",
    })
      .setPin("#home_phone-image", { pushFollowers: false })
      .addTo(controller);

    var aboutScene = new ScrollMagic.Scene({
      triggerElement: ".home_about",
      triggerHook: 0.05,
      duration: "100%",
    })
      .on("enter", setVideo)
      .on("leave", setVideo)
      .addTo(controller);
  }
});

document.addEventListener("DOMContentLoaded", function (event) {
  if ($(".about_grid").length) {
    drawLine();
    window.addEventListener("resize", function (event) {
      var svgObj = SVG("#picsvg");
      svgObj.find(".event_point").each(function (item) {
        item.remove();
      });
      drawLine();
    });
  }
  //console.log("DOM fully loaded and parsed");
});

function setVideo(event) {
  //console.log(event);
  //console.log(event.scrollDirection);
  if (event.type === "enter" && event.scrollDirection === "FORWARD") {
    $("#top_video").css("display", "none");
  } else if (event.type === "leave" && event.scrollDirection === "REVERSE") {
    $("#top_video").css("display", "block");
  }
}

function drawLine() {
  var odd = true;
  var grid = document.querySelector(".grid");
  var items = document.querySelectorAll(".gtig__item");
  if (items.length < 6 || items.length % 3 !== 0) {
    return;
  }

  var gridWidth = grid.clientWidth;
  var gridHeight = grid.clientHeight;
  var svgElement = document.querySelector("#picsvg");
  var svgObj = SVG("#picsvg");
  var hLineLength = Math.floor((gridWidth * 2) / 3);
  var vStep = Math.floor((gridHeight * 3) / items.length);
  var hStep = Math.floor(gridWidth / 3);
  var cpLength = Math.floor(gridWidth / 6);
  if (hStep > vStep) {
    cpLength = vStep / 2;
  }
  var lineColor = "#79D3A7";
  svgObj.viewbox("0 0 " + gridWidth + " " + gridHeight);
  svgObj.find("#cur_line").attr("d", "M" + hStep / 2 + " 5");

  for (ind = 0; ind < items.length / 3; ind++) {
    var vStepInt;
    if (ind == 0 || ind == items.length / 3 - 1) {
      vStepInt = vStep - 5;
    } else {
      vStepInt = vStep;
    }

    if (odd) {
      drawR(svgObj, "#cur_line", hLineLength);
      drawCR(svgObj, "#cur_line", cpLength, 0, cpLength, vStepInt, 0, vStepInt);
    } else {
      drawL(svgObj, "#cur_line", hLineLength);
      drawCL(
        svgObj,
        "#cur_line",
        -cpLength,
        0,
        -cpLength,
        vStepInt,
        0,
        vStepInt
      );
    }
    odd = !odd;
  }
  if (odd) {
    drawR(svgObj, "#cur_line", hLineLength);
  } else {
    drawL(svgObj, "#cur_line", hLineLength);
  }

  odd = true;
  for (ind = 1; ind < items.length / 3; ind++) {
    if (odd) {
      svgObj
        .circle(30)
        .fill(lineColor)
        .addClass("event_point")
        .move(hStep / 2 - 15, vStep * ind - 15);
      svgObj
        .circle(30)
        .fill(lineColor)
        .addClass("event_point")
        .move(hStep * 1.5 - 15, vStep * ind - 15);
    } else {
      svgObj
        .circle(30)
        .fill(lineColor)
        .addClass("event_point")
        .move(hStep * 1.5 - 15, vStep * ind - 15);
      svgObj
        .circle(30)
        .fill(lineColor)
        .addClass("event_point")
        .move(hStep * 2.5 - 15, vStep * ind - 15);
    }
    odd = !odd;
  }
  if (odd) {
    svgObj
      .circle(30)
      .fill(lineColor)
      .addClass("event_point")
      .move(hStep / 2 - 15, vStep * ind - 20);
    svgObj
      .circle(30)
      .fill(lineColor)
      .addClass("event_point")
      .move(hStep * 1.5 - 15, vStep * ind - 20);
  } else {
    svgObj
      .circle(30)
      .fill(lineColor)
      .addClass("event_point")
      .move(hStep * 1.5 - 15, vStep * ind - 20);
    svgObj
      .circle(30)
      .fill(lineColor)
      .addClass("event_point")
      .move(hStep * 2.5 - 15, vStep * ind - 20);
  }
  console.log("len", items.length);
}

function drawL(svgObject, path, length) {
  var currentPath = svgObject.find(path).attr("d")[0];
  svgObject.find(path).attr("d", currentPath + "h -" + length);
}
function drawR(svgObject, path, length) {
  var currentPath = svgObject.find(path).attr("d")[0];
  svgObject.find(path).attr("d", currentPath + "h " + length);
}

function drawCL(svgObject, path, x1, y1, x2, y2, x, y) {
  var currentPath = svgObject.find(path).attr("d")[0];
  svgObject
    .find(path)
    .attr(
      "d",
      currentPath +
        "c " +
        x1 +
        " " +
        y1 +
        " " +
        x2 +
        " " +
        y2 +
        " " +
        x +
        " " +
        y
    );
}
function drawCR(svgObject, path, x1, y1, x2, y2, x, y) {
  var currentPath = svgObject.find(path).attr("d")[0];
  svgObject
    .find(path)
    .attr(
      "d",
      currentPath +
        "c " +
        x1 +
        " " +
        y1 +
        " " +
        x2 +
        " " +
        y2 +
        " " +
        x +
        " " +
        y
    );
}
