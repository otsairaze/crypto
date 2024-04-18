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
const redirectBtn = document.querySelector(".popup__btn");

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
  "Module 0: Introduction to the exchange, software and its setup <br>  Module 1: Understanding market structure (sideways movement, trends) within the framework of BOS/SMS. <br> Module 2: Liquidity Analysis via SWEEP. <br> Module 3: Application of working with Imbalance. <br> Module 4: Using Fibonacci methods (Fibo adjustment, OTE). <br> Module 5: Mastering the terminology STB/BTS, OB, WICK, BB, MB. <br> Module 6: Understanding Multi-Market Structures.<br> Module 7: Learning Order Flow and Its Application. <br> Module 8: Trading within the framework of ROI (Return on Investment) using all instruments. <br> Module 9: Introduction to the PO3 Method. <br> Module 10: Trading Psychology, Risk Management and the Risk-Return Relationship. <br> Module 11: Using the Wyckoff Method to Range the Market. <br> Module 12: Exploring various trading setups. <br> Trading journal to track results. <br> 1 month of free access to the closed INTRADAY community. 12 streams with question and answer sessions to reinforce the material learned",

  "Module 1: Obtaining funds for management through proprietary companies <br> Module 2: Working with MetaTrader 4 and 5 trading terminals <br> Module 3: Study of trading sessions and time timings in the Forex market. <br> Module 4: Introduction to the CLS method of interbank transactions. <br> Module 5: Understanding the price delivery process for executing interbank orders through CERR.<br> Module 6: Exploring the IPDA Method <br> Module 7: SMT (Social Market Trading) Analysis Trading journal to track results. <br> 2 months of free access to the closed INTRADAY community. <br> 19 streams with question and answer sessions to reinforce the material learned. <br> Bonus lesson: The psychology of trading from a scientific point of view. <br> 3 backtest sessions with analysis of transactions of participants and mentors <br>",

  "1.	Lessons are conducted online in small groups of up to three to five people. <br> 2.	Lost lessons and homework. <br> 3.	Additional practical instructions for consolidating information.<br> 4.All the features and bonuses of the Pro package <br>",
];

redirectBtn.onclick = function () {
  window.location.pathname = "./pay.html";
};
