window.addEventListener("scroll", () => {
  document
    .querySelector("nav")
    .classList.toggle("window-scrool", window.scrollY > 0);
});
let letter = 0;
const text = "Kejar karir impian kamu bersama RumahJawir";

function scrollToSmoothly(pos, time) {
  var currentPos = window.pageYOffset;
  var start = null;
  if (time == null) time = 500;
  (pos = +pos), (time = +time);
  window.requestAnimationFrame(function step(currentTime) {
    start = !start ? currentTime : start;
    var progress = currentTime - start;
    if (currentPos < pos) {
      window.scrollTo(0, ((pos - currentPos) * progress) / time + currentPos);
    } else {
      window.scrollTo(0, currentPos - ((currentPos - pos) * progress) / time);
    }
    if (progress < time) {
      window.requestAnimationFrame(step);
    } else {
      window.scrollTo(0, pos);
    }
  });
}
//SHOW/HIDE NAV MENU
const menu = document.querySelector(".nav__menu");
const menuBtn = document.querySelector("#open-menu-btn");
const closeBtn = document.querySelector("#close-menu-button");
menuBtn.addEventListener("click", () => {
  menu.style.display = "flex";
  closeBtn.style.display = "inline-block";
  menuBtn.style.display = "none";
});
//CLOSE NAV MENU
const closeNav = () => {
  menu.style.display = "none";
  closeBtn.style.display = "none";
  menuBtn.style.display = "inline-block";
};.addEventListener("scroll", () => {
  document
    .querySelector("nav")
    .classList.toggle("window-scrool", window.scrollY > 0);
});
let letter = 0;
const text = "Kejar karir impian kamu bersama RumahJawir";

function scrollToSmoothly(pos, time) {
  var currentPos = window.pageYOffset;
  var start = null;
  if (time == null) time = 500;
  (pos = +pos), (time = +time);
  window.requestAnimationFrame(function step(currentTime) {
    start = !start ? currentTime : start;
    var progress = currentTime - start;
    if (currentPos < pos) {
      window.scrollTo(0, ((pos - currentPos) * progress) / time + currentPos);
    } else {
      window.scrollTo(0, currentPos - ((currentPos - pos) * progress) / time);
    }
    if (progress < time) {
      window.requestAnimationFrame(step);
    } else {
      window.scrollTo(0, pos);
    }
  });
}
//SHOW/HIDE NAV MENU
const menu = document.querySelector(".nav__menu");
const menuBtn = document.querySelector("#open-menu-btn");
const closeBtn = document.querySelector("#close-menu-button");
menuBtn.addEventListener("click", () => {
  menu.style.display = "flex";
  closeBtn.style.display = "inline-block";
  menuBtn.style.display = "none";
});
//CLOSE NAV MENU
const closeNav = () => {
  menu.style.display = "none";
  closeBtn.style.display = "none";
  menuBtn.style.display = "inline-block";
};

closeBtn.addEventListener("click", closeNav);
