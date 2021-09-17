// load progress
const load = () => {
  const loadItem = document.getElementById("load-main");
  window.addEventListener("load", () => {
    loadItem.style.display = "none";
  });
};
load();

const search_nav = document.getElementById("search-nav");
const search_content = document.getElementById("search-content");
const search_nav__input = document.getElementById("search-nav__input");
const icon_search = document.getElementById("icon-search");
icon_search.addEventListener("click", () => {
  search_nav.classList.toggle("menu-despliegue");
  search_content.classList.toggle("block");
});
// menu
// menu.toggleAttribute('ani-menu__full-screen'); esto añade un atributo
const menu = document.getElementById("nav-icon__menu");
const list_menu = document.getElementById("nav-list__menu");
const bi_list = document.getElementById("bi-list");
menu.addEventListener("click", () => {
  menu.classList.toggle("ani-menu__full-screen");
  list_menu.classList.toggle("list-menu");
  bi_list.classList.toggle("none");
});
// btn up
const btn_up = document.getElementById("btn-up");
const func_up = () => {
  let winScroll = document.body.scrollTop || document.documentElement.scrollTop;
  let height =
    document.documentElement.scrollHeight -
    document.documentElement.clientHeight;
  let scrolled = (winScroll / height) * 100;
  if (scrolled >= 7) {
    btn_up.style.display = "block";
  } else {
    btn_up.style.display = "none";
  }
};
const up = () => {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
};
window.addEventListener("scroll", () => {
  func_up();
  window.st;
});
btn_up.addEventListener("click", () => up());
// media responsive
const mediaRemove = () => {
  const removeClass = document.querySelectorAll("[data-delete]");
  let EX = window.matchMedia("(max-width: 768px)");
  removeClass.forEach((i) => {
    if (EX.matches) {
      i.classList.remove("container120");
    } else {
      i.classList.add("container120");
    }
  });
};
mediaRemove();

// fechas data-arrow
// id flechas data-imgInfo
// imagenes enlasadas data-img_id
function sliderG(id, prev, next) {
  const arrowLeft = document.getElementById(prev);
  const arrowRigth = document.getElementById(next);
  const slides = document.querySelectorAll(`[data-img_id="${id}"]`);
  const slidesInfo = document.querySelectorAll(`[data-info="${id}"]`);

  let slideIndex = 1;
  showSlides(slideIndex);

  function plusSlides(n) {
    showSlides((slideIndex += n));
  }

  function showSlides(n) {
    let i;
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

  arrowLeft.addEventListener("click", () => plusSlides(-1));
  arrowRigth.addEventListener("click", () => plusSlides(1));
}
sliderG("1", "prev1", "next1");
sliderG("2", "prev2", "next2");
sliderG("3", "prev3", "next3");
// previsualizacion de imagen

