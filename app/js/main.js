const overlay = document.querySelector("#over");

const body = document.querySelector("body");
const btnScroll = document.querySelector(".main__second-btn");
const program = document.querySelector(".program");

const btn = document.querySelectorAll("#btn");
const popupProgram = document.querySelector("#popupProgram");

const consultOver = document.querySelector("#consultOver");
const popupConsult = document.querySelector("#popupConsult");
const consultBtn = document.querySelector(".main__first-btn");

overlay.onclick = function () {
  overlay.classList.remove("popup--active");
  body.style.overflowY = "auto";
};

popupProgram.addEventListener("click", (e) => {
  e.stopPropagation();
});

btnScroll.onclick = function () {
  const positionY = program.getBoundingClientRect().y;
  window.scrollTo(0, positionY);
};

btn.forEach(
  (element) =>
    (element.onclick = function () {
      overlay.classList.add("popup--active");
      body.style.overflow = "hidden";
    })
);

consultBtn.onclick = function () {
  consultOver.classList.add("popup--active");
  body.style.overflow = "hidden";
};

consultOver.onclick = function () {
  consultOver.classList.remove("popup--active");
  body.style.overflowY = "auto";
};

popupConsult.addEventListener("click", (e) => {
  e.stopPropagation();
});
