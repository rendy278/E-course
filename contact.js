const inputs = document.querySelectorAll(".input");

function focusFunc() {
  let parent = this.parentNode;
  parent.classList.add("focus");
}

function blurFunc() {
  let parent = this.parentNode;
  if (this.value == "") {
    parent.classList.remove("focus");
  }
}
inputs.forEach((input) => {
  input.addEventListener("focus", focusFunc);
  input.addEventListener("blur", blurFunc);
});
window.addEventListener("scroll", () => {
  document
    .querySelector("nav")
    .classList.toggle("window-scrool", window.scrollY > 0);
});

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
const ketik = new Typed(".ketik", {
  strings: ["Menyenangkan", "Serta", "Mengasyikan"],
  typeSpeed: 150,
  backSpeed: 90,
  loop: true,
});
// notifikasi error
function notif() {
  alert("Terima kasih sudah mendaftar");
}
