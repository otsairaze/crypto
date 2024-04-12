const btn = document.querySelectorAll("#btn");
const overlay = document.querySelector("#over");
const popup = document.querySelector(".popup");
const body = document.querySelector("body");
const btnScroll = document.querySelector(".main__second-btn");
const program = document.querySelector(".program");

overlay.onclick = function () {
  overlay.classList.remove("popup--active");
  body.style.overflowY = "auto";
};
popup.addEventListener("click", (e) => {
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
