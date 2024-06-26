


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
      rel="stylesheet"
    />

    <link rel="stylesheet" href="./css/style.min.css" />
    <script src="./js/main.min.js" defer></script>
    <title>Innovative Personal</title>
  </head>
  <body>
    <div id="over" class="overlay">
      <div id="popupProgram" class="popup">
        <h3 class="popup__title">
          Have you <span>decided</span> on your study program?
        </h3>
        <div class="popup__block">
          <span class="popup__name">EXPERT</span>
          <div class="poppup__input-inner">
            <div>
              <input class="popup__input" placeholder="Name" type="text" />
              <input class="popup__input" placeholder="Surname" type="text" />
              <input class="popup__input" placeholder="E-mail" type="text" />
              <input class="popup__input" placeholder="Number" type="text" />
            </div>
            <img src="./img/popup/payment.png" alt="" class="popup__img" />
          </div>
          <div class="popup__price">
            <p>Total to Pay:<span class='popup__total'></span></p>
            
            <button class="popup__btn">Continue</button>
            
          </div>
        </div>
      </div>
    </div>
    <div id="consultOver" class="overlay">
      <div id="popupConsult" class="popup__consult">
        <h3 class="popup__title">Do you need <span>consultation</span>?</h3>
        <div class="popup__block">
          <div class="poppup__input-inner">
            <form action='sendmail.php' method='POST'>
              <input class="popup__input" placeholder="Name" type="text" name='message' required />
              <input class="popup__input" placeholder="E-mail" type="email" name='email' required />
              <input class="popup__input" placeholder="Number" type="text" name='tel' required />
              <button type='submit' value='Отправить данные' class="popup__btn">Continue</button>
            </form>
            <img src="./img/popup/consult.png" alt="" class="popup__img" />
          </div>
          <div class="popup__price">
          </div>
        </div>
      </div>
    </div>
    <div id="training" class="overlay">
      <div id="popupTraining" class="popup__training">
        <p class='popup__text'>
          Module 0: Introduction to the exchange, software and its setup<br>
          Module 1: Understanding market structure (sideways movement, trends) within the framework of BOS/SMS.<br>
          Module 2: Liquidity Analysis via SWEEP.<br>
          Module 3: Application of working with Imbalance.<br>
          Module 4: Using Fibonacci methods (Fibo adjustment, OTE).<br>
          Module 5: Mastering the terminology STB/BTS, OB, WICK, BB, MB.<br>
          Module 6: Understanding Multi-Market Structures.<br>
          Module 7: Learning
          Order Flow and Its Application.
          Module 8: Trading within the framework of ROI (Return on Investment) using all instruments.<br>
          Module 9: Introduction to the PO3 Method.<br>
          Module 10: Trading Psychology, Risk Management and the Risk-Return Relationship.<br>
          Module 11: Using the Wyckoff Method to Range the Market.<br>
          Module 12: Exploring various trading setups.<br>
          Trading journal to track results.
          1 month of free access to the closed INTRADAY community. 12 streams with question and answer sessions to reinforce the material learned.<br>


      </div>
    </div>
    <div class="container">
      <section class="main">
        <div class="main__wrapper">
          <div class="main__info">
            <h1>Innovative<br>
              personal
            </h1>
            <p class="main__subtitle">
              Trading, courses, information materials
            </p>
            <p class="main__text">
              Get <span>unique</span> skills, <span>valuable</span> experience,
              ready-made tools and our continuous support - start the path to
              successful work in the financial markets while still studying.
            </p>
            <div>
              <button class="main__first-btn">Online consultation</button>
              <button class="main__second-btn">Book your place</button>
            </div>
          </div>
          <div class="main__img">
            <img class="img-laptop" src="./img/main/mainLaptop.png" alt="" />
            <img
              class="main__ellipse-1"
              src="./img/main/Ellipse 1.png"
              alt=""
            />
          </div>
        </div>
        <div class="main__list">
          <div class="main__card">
            <img src="./img/main/consult.png" alt="" />
            <p>Online consultation</p>
          </div>
          <div class="main__card">
            <img src="./img/main/online.png" alt="" />
            <p>Format (Online)</p>
          </div>
          <div class="main__card">
            <img src="./img/main/support.png" alt="" />
            <p>Student support</p>
          </div>
          <div class="main__card">
            <img src="./img/main/duration.png" alt="" />
            <p>Duration 4-12 weeks</p>
          </div>
        </div>
      </section>
      <section class="step">
        <div class="step__wrapper">
          <div class="step__bg-content">
            <img class="step__bg-binance" src="./img/bg/binance.png" alt="" />
            <img class="step__bg-s" src="./img/bg/s.png" alt="" />
            <img class="step__bg-doge" src="./img/bg/doge.png" alt="" />
            <img class="step__bg-usdt" src="./img/bg/usdc.png" alt="" />
            <img
              src="./img/bg/step__elipse-1.png"
              alt=""
              class="step__bg-ellipse-1"
            />
            <img
              src="./img/bg/step__elipse-2.png"
              alt=""
              class="step__bg-ellipse-2"
            />
          </div>

          <h2>THE PATH OF YOUR DEVELOPMENT</h2>
          <div class="step__circle-block">
            <span class="step__circle circle--1">1</span>
            <span class="step__circle circle--2">2</span>
            <span class="step__circle circle--3">3</span>
            <span class="step__circle circle--4">4</span>
            <span class="step__circle circle--5">5 </span>
          </div>

          <div class="step__line"></div>
          <div class="step__block">
            <div class="step__card card--1">
              <h3>Stage 1</h3>
              <p class="step__card-subtitle">
                <span>Answer</span> the <span>following</span> questions:
              </p>
              <p>
                1. What <span>motivates</span> me to start trading?<br>
                2. What <span>expectations</span> do I have from trading?<br>
                3. Are my trading expectations <span>realistic?</span>
              </p>
            </div>

            <div class="step__card card--2">
              <h3>Stage 2</h3>
              <p>
                After <span>mastering</span> the basics of trading, we move on
                to a <span>deeper level.</span> Here you will begin to
                <span>understand</span> the reasons for the price movements of
                various assets in the market.
              </p>
            </div>

            <div class="step__card card--3">
              <h3>Stage 3</h3>
              <p>
                As part of our course, you will <span>receive</span> assignments
                for independent work. Our supervisors will
                <span>support</span> you and <span>help</span> you complete
                these tasks.
              </p>
            </div>

            <div class="step__card card--4">
              <h3>Stage 4</h3>
              <p>
                All training <span>material</span>, livestreams and Q&A sessions
                will be <span>recorded</span>. You can return to the previous
                lesson at any time if something remains unclear or requires
                repetition
              </p>
            </div>

            <div class="step__card card--5">
              <h3>Stage 5</h3>
              <p>
                After <span>mastering</span> trading <span>knowledge</span>, to
                expand your capabilities, you are given the opportunity to
                <span>manage</span> funds from <span>$5,000</span> in
                proprietary companies.  
              </p>
            </div>
          </div>
        </div>
      </section>
      <section id="program" class="program">
        <div class="program__wrapper">
          <h3 class="program__title">CHOOSE YOUR STUDY PROGRAM</h3>
          <div class="program__inner">
            <div class="program__card prog__card--1">
              <div class="program__card-price">
                <span class='program__money'>200$</span>
              </div>
              <div>
                <h3 class='program__name'>EXPERT</h3>
                <p class="program__subtitle">12 modules 4 weeks</p>
                <p class="program__desc">
                  Upon completion of the program, the student will acquire the
                  following skills:<br>
                  1. Creating your own trading strategy, based on the experience
                  of mentors for 3 years.<br>
                  2. Development of an approach to trading as an intraday trader
                  (trading in the middle of the day) and in positions that
                  require less time for analytics, which helps to increase
                  trading efficiency.<br>
                  3. Course pdf + mentoring
                </p>
              </div>
              <div class="button__inner">

                <p class='program__training'>TRAINING PROGRAM</p>
                <button id="btn">SUBMIT YOUR APLICATION</button>
              </div>
            </div>
            <div class="program__card prog__card--2">
              <div class="program__card-price">
                <span class='program__money'>500$</span>
              </div>
              <div>
                <h3 class='program__name'>PRO</h3>
                <p class="program__subtitle">19 modules 8 weeks</p>
                <p class="program__desc">
                  Upon completion of the program, the student will acquire the
                  following skills and experience:   1. In-depth experience from
                  mentors in trading, including weekly sessions of chart
                  analysis, testing strategies on historical data (backtest), as
                  well as creating and managing a spot portfolio and analyzing
                  new projects. 2. The course is focused on developing
                  professional competence and the perception of trade not only
                  as a temporary hobby, but also as a future profession. 3.
                  Course pdf + mentoring
                </p>
              </div>

              <div class="button__inner">
                <p class='program__training'>TRAINING PROGRAM</p>
                <button id="btn">SUBMIT YOUR APLICATION</button>
              </div>
            </div>
            <div class="program__card prog__card--3">
              <div class="program__card-price">
                <span class='program__money'>800$</span>
              </div>
              <div>
                <h3 class='program__name'>INDIVIDUAL</h3>
                <p class="program__subtitle">
                  19 training modules Duration 8 weeks Additional 4 weeks of
                  support from a mentor
                </p>
                <p class="program__desc">
                  Program results include:<br>
                  1. A comprehensive set of knowledge and tools necessary for
                  successful trading<br>
                  2. Acquiring skills and competencies to become a trader<br>
                  3. Course pdf + mentoring
                </p>
              </div>
              <div class="button__inner">
                <p class='program__training'>TRAINING PROGRAM</p>
                <button id="btn">SUBMIT YOUR APLICATION</button>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="reviews">
        <div class="reviews__wrapper">
          <div class="reviews__bg-content">
            <img
              class="reviews__bg-ellipse-1"
              src="./img/reviews/el-1.png"
              alt=""
            />
          </div>
          <h3 class="reviews__title">CUSTOMER REVIEWS</h3>
          <div class="reviews__inner">
            <h3 class="reviews__name">Monica</h3>
            <div class="reviews__card">
              <img src="./img/reviews/1.png" alt="" />
              <div>
                I am completely satisfied with the training! All aspects of the
                program are at a high level: the quality of the information
                provided, support from mentors and curators, always ready to
                help. Every question received a comprehensive answer, all
                homework was checked and discussed. The streams were fun and
                very informative. I I'm glad and grateful for the opportunity to
                be part of such a community and to learn and work in such a
                wonderful atmosphere. A huge thank you to everyone who took part
                in this process!
              </div>
            </div>
          </div>
          <div class="reviews__inner">
            <h3 class="reviews__name">Lucas</h3>
            <div class="reviews__card">
              <img src="./img/reviews/2.png" alt="" />
              <div>
                I am completely satisfied with the training! All aspects of the
                program are at a high level: the quality of the information
                provided, support from mentors and curators, always ready to
                help. Every question received a comprehensive answer, all
                homework was checked and discussed. The streams were fun and
                very informative. I I'm glad and grateful for the opportunity to
                be part of such a community and to learn and work in such a
                wonderful atmosphere. A huge thank you to everyone who took part
                in this process!
              </div>
            </div>
          </div>
          <div class="reviews__inner">
            <h3 class="reviews__name">Olivia</h3>
            <div class="reviews__card">
              <img src="./img/reviews/3.png" alt="" />
              <div>
                I am completely satisfied with the training! All aspects of the
                program are at a high level: the quality of the information
                provided, support from mentors and curators, always ready to
                help. Every question received a comprehensive answer, all
                homework was checked and discussed. The streams were fun and
                very informative. I I'm glad and grateful for the opportunity to
                be part of such a community and to learn and work in such a
                wonderful atmosphere. A huge thank you to everyone who took part
                in this process!
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    <footer class="footer">
      <div class="footer__wrapper">
        <div class="container">
          <div class="footer__inner">
            <div class="footer__info">
              <a href=""><p>About us</p></a>
              <a href=""> <p>Term of Service</p></a>
              <a href=""> <p>Privacy Policy</p></a>
            </div>
            <div class="footer__info">
              <p>+44 7537 171933</p>
              <p>vitaliitabachok@outlook.com</p>
              <a
                href="
              "
              >
                <p>@InvestiGenius</p></a
              >
            </div>
            <div class="footer__copyright">
              <p>© 2023- 2024</p>
            </div>
          </div>
        </div>
      </div>
    </footer>
  </body>
</html>
