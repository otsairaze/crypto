const overlay = document.querySelector("#over");

const body = document.querySelector("body");
const btnScroll = document.querySelector(".main__second-btn");
const program = document.querySelector(".program");

const btn = document.querySelectorAll("#btn");
const popupProgram = document.querySelector("#popupProgram");

const consultOver = document.querySelector("#consultOver");
const popupConsult = document.querySelector("#popupConsult");
const consultBtn = document.querySelector(".main__first-btn");

const popupTraining = document.querySelector("#popupTraining");
const trainingOver = document.querySelector("#training");
const trainingBtn = document.querySelectorAll(".program__training");

const money = document.querySelectorAll(".program__money");
const names = document.querySelectorAll(".program__name");
const price = document.querySelector(".popup__total");
const popupName = document.querySelector(".popup__name");

const popupText = document.querySelector(".popup__text");

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
  (element, index) =>
    (element.onclick = function () {
      overlay.classList.add("popup--active");
      body.style.overflow = "hidden";
      price.innerHTML = money[index].textContent;
      popupName.innerHTML = names[index].textContent;
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

trainingBtn.forEach(
  (obj, id) =>
    (obj.onclick = function () {
      trainingOver.classList.add("popup--active");
      body.style.overflow = "hidden";
      popupText.innerHTML = descArray[id];
    })
);

trainingOver.onclick = function () {
  trainingOver.classList.remove("popup--active");
  body.style.overflow = "auto";
};

popupTraining.addEventListener("click", (e) => {
  e.stopPropagation();
});

const descArray = [
  "Module 0: Introduction to the exchange, software and its setup \n Module 1: Understanding market structure (sideways movement, trends) within the framework of BOS/SMS. \n Module 2: Liquidity Analysis via SWEEP. \n Module 3: Application of working with Imbalance. \n Module 4: Using Fibonacci methods (Fibo adjustment, OTE). \n Module 5: Mastering the terminology STB/BTS, OB, WICK, BB, MB. \n Module 6: Understanding Multi-Market Structures. \n Module 7: Learning Order Flow and Its Application. \n Module 8: Trading within the framework of ROI (Return on Investment) using all instruments. \n Module 9: Introduction to the PO3 Method. \n Module 10: Trading Psychology, Risk Management and the Risk-Return Relationship. \n Module 11: Using the Wyckoff Method to Range the Market. \n Module 12: Exploring various trading setups. \n Trading journal to track results. \n 1 month of free access to the closed INTRADAY community. 12 streams with question and answer sessions to reinforce the material learned",

  "Understanding market structure (sideways movement, trends) within the framework of BOS/SMS. \n Module 2: Liquidity Analysis via SWEEP. \n Module 3: Application of working with Imbalance. \n Module 4: Using Fibonacci methods (Fibo adjustment, OTE). \n Module 5: Mastering the terminology STB/BTS, OB, WICK, BB, MB. \n Module 6: Understanding Multi-Market Structures. \n Module 7: Learning Order Flow and Its Application. \n Module 8: Trading within the framework of ROI (Return on Investment) using all instruments. \n Module 9: Introduction to the PO3 Method. \n Module 10: Trading Psychology, Risk Management and the Risk-Return Relationship. \n Module 11: Using the Wyckoff Method to Range the Market. \n Module 12: Exploring various trading setups. \n Trading journal to track results. \n 1 month of free access to the closed INTRADAY community. 12 streams with question and answer sessions to reinforce the material learned",
];
