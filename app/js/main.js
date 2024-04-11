const btn = document.querySelector("#btn");
const overlay = document.querySelector("#over");
const popup = document.querySelector(".popup");

btn.onclick = function () {
  overlay.classList.add("popup--active");
  overlay.onclick = function () {
    overlay.classList.remove("popup--active");
  };
  popup.onclick = function (e) {
    e.stopPropagination();
  };
};
