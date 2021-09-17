"use strict";

var prevIMG = function prevIMG() {
  var selecFile = document.getElementById("input-:file1");
  var visualizationImg = document.getElementById("visualizationIMG");
  var plusIcon = document.getElementById("plusIcon");
  selecFile.addEventListener("change", function () {
    plusIcon.style.display = "none";
    visualizationImg.style.width = "15rem";
    visualizationImg.style.height = "15rem";
    visualizationImg.style.borderRadius = "3rem";
    var file = selecFile.files;
    var oneFile = file[0];
    var objectURL = URL.createObjectURL(oneFile);
    visualizationImg.src = objectURL;
  });
};

prevIMG();