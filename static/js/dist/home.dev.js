"use strict";

// load progress
var load = function load() {
  var loadItem = document.getElementById("load-main");
  window.addEventListener("load", function () {
    loadItem.style.display = "none";
  });
};

load();
var search_nav = document.getElementById("search-nav");
var search_content = document.getElementById("search-content");
var search_nav__input = document.getElementById("search-nav__input");
var icon_search = document.getElementById("icon-search");
icon_search.addEventListener("click", function () {
  search_nav.classList.toggle("menu-despliegue");
  search_content.classList.toggle("block");
}); // menu
// menu.toggleAttribute('ani-menu__full-screen'); esto añade un atributo

var menu = document.getElementById("nav-icon__menu");
var list_menu = document.getElementById("nav-list__menu");
var bi_list = document.getElementById("bi-list");
menu.addEventListener("click", function () {
  menu.classList.toggle("ani-menu__full-screen");
  list_menu.classList.toggle("list-menu");
  bi_list.classList.toggle("none");
}); // btn up

var btn_up = document.getElementById("btn-up");

var func_up = function func_up() {
  var winScroll = document.body.scrollTop || document.documentElement.scrollTop;
  var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
  var scrolled = winScroll / height * 100;

  if (scrolled >= 7) {
    btn_up.style.display = "block";
  } else {
    btn_up.style.display = "none";
  }
};

var up = function up() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
};

window.addEventListener("scroll", function () {
  func_up();
  window.st;
});
btn_up.addEventListener("click", function () {
  return up();
}); // media responsive

var mediaRemove = function mediaRemove() {
  var removeClass = document.querySelectorAll("[data-delete]");
  var EX = window.matchMedia("(max-width: 768px)");
  removeClass.forEach(function (i) {
    if (EX.matches) {
      i.classList.remove("container120");
    } else {
      i.classList.add("container120");
    }
  });
};

mediaRemove(); // fechas data-arrow
// id flechas data-imgInfo
// imagenes enlasadas data-img_id

function sliderG(id, prev, next) {
  var arrowLeft = document.getElementById(prev);
  var arrowRigth = document.getElementById(next);
  var slides = document.querySelectorAll("[data-img_id=\"".concat(id, "\"]"));
  var slidesInfo = document.querySelectorAll("[data-info=\"".concat(id, "\"]"));
  var slideIndex = 1;
  showSlides(slideIndex);

  function plusSlides(n) {
    showSlides(slideIndex += n);
  }

  function showSlides(n) {
    var i;

    if (n > slides.length) {
      slideIndex = 1;
    }

    if (n < 1) {
      slideIndex = slides.length;
    }

    for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
      slidesInfo[i].style.display = "none";
    }

    slides[slideIndex - 1].style.display = "block";
    slidesInfo[slideIndex - 1].style.display = "block";
  }

  arrowLeft.addEventListener("click", function () {
    return plusSlides(-1);
  });
  arrowRigth.addEventListener("click", function () {
    return plusSlides(1);
  });
}

sliderG("1", "prev1", "next1");
sliderG("2", "prev2", "next2");
sliderG("3", "prev3", "next3"); // previsualizacion de imagen