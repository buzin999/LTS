<!doctype html>
<html lang="ru">
  <head>
    <title>LTS</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <style>
    .button {
      font-size: 15px;
      font-weight: 700;
      letter-spacing: 0.3px;
      background-color: #0b5e8f;
      background-image: linear-gradient(-18deg, #0b5e8f 0%, #2e76a0 50%, #0b5e8f 100%);
      font-family: 'Roboto', sans-serif;
      border: 2px solid transparent;
      color: #ffffff;
      padding: 16px 28px;
      border-radius: 30px;
    }

    .button:hover {
      background-color: #0b6194;
      background-image: none;
      cursor: pointer;
    }

    .button-o {
      padding: 15px 32px;
      background-color: transparent;
      background-image: none;
      color: #ffffff;
      border: 2px solid #ffffff;
    }

    .button-o:hover {
      background-color: gray;
      color: #ffffff;
      border: 2px solid transparent;
    }

    .button img {
      vertical-align: middle;
    }

    .button-search {
      width: 28px;
      height: 28px;
      border-radius: 50%;
      border: none;
      background-color: #0b5e8f;
      background-image: linear-gradient(-18deg, #0b5e8f 0%, #2e76a0 50%, #0b5e8f 100%);
    }

    .button-search img {
      width: 14px;
      height: 14px;
      vertical-align: middle;
    }

    .slider-arrow {
      position: absolute;
      z-index: 99;
      height: 100%;
    }

    .slider-arrow_header {
      top: 0;
      width: 24px;
    }

    .slider-arrow_header:hover {
      cursor: pointer;
    }

    .slider-arrow__right {
      background: url("img/slider/arrow-right.png") center no-repeat;
      right: 0;
      margin-right: 25px;
    }

    .slider-arrow__left {
      background: url("img/slider/arrow-left.png") center no-repeat;
      left: 0;
      margin-left: 25px;
    }

    .slick-slider ul li button {
      margin-bottom: 152px;
      width: 14px;
      height: 13px;
      border: 2px solid #ffffff;
      border-radius: 50%;
    }

    .slick-slider ul li button::before {
      color: transparent;
    }

    .slick-slider ul li.slick-active button {
      width: 14px;
      height: 13px;
      border: 2px solid #246f9b;
      border-radius: 50%;
      background-color: #246f9b;
    }

    .slick-slider ul li.slick-active button::before {
      color: #246f9b;
    }

    .header {
      padding-top: 62px;
      padding-bottom: 39px;
      color: #ffffff;
      background: #133f58;
      position: relative;
      /* Блоки для слайдера в хэдере */
      /* Верхний блок хэдера */
      /* Лого хэдера */
      /* Меню хэдера */
      /* Главный блок хэдера */
      /* Слайдер в хэдере */
    }

    .header-top {
      position: relative;
      z-index: 99;
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      margin-top: 4px;
      margin-bottom: 45px;
      -webkit-box-pack: justify;
      -ms-flex-pack: justify;
      justify-content: space-between;
      -webkit-box-align: center;
      -ms-flex-align: center;
      align-items: center;
    }

    .header-top__text {
      font-size: 14px;
      font-weight: 400;
      line-height: 24px;
      -ms-flex-preferred-size: 33%;
      flex-basis: 33%;
    }

    .header-top__phone {
      margin-right: 26px;
      font-size: 16px;
      font-weight: 700;
      line-height: 24px;
    }

    .header-top__logo {
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      -webkit-box-pack: center;
      -ms-flex-pack: center;
      justify-content: center;
      -webkit-box-align: center;
      -ms-flex-align: center;
      align-items: center;
      -ms-flex-preferred-size: 33%;
      flex-basis: 33%;
    }

    .header-top__logo::before {
      content: '';
      position: absolute;
      z-index: 99;
      top: 50%;
      left: 368px;
      height: 2px;
      min-width: 106px;
      background: url("img/line.png") center no-repeat;
    }

    .header-top__logo::after {
      content: '';
      position: absolute;
      z-index: 99;
      top: 50%;
      right: 372px;
      height: 2px;
      min-width: 106px;
      background: url("img/line.png") center no-repeat;
    }

    .header-top__call {
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      -webkit-box-pack: end;
      -ms-flex-pack: end;
      justify-content: flex-end;
      -webkit-box-align: center;
      -ms-flex-align: center;
      align-items: center;
      -ms-flex-preferred-size: 33%;
      flex-basis: 33%;
    }

    .header-logo {
      padding-top: 7px;
      text-align: center;
      z-index: 99;
    }

    .header-logo__title {
      font-family: 'Palatino Linotype', sans-serif;
      font-size: 60px;
      font-weight: 400;
      line-height: 22px;
      text-transform: uppercase;
    }

    .header-logo__sub {
      width: 139px;
      margin-top: 12px;
      font-size: 14px;
      font-weight: 400;
      line-height: 22px;
    }

    .header-menu {
      position: relative;
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      -webkit-box-pack: center;
      -ms-flex-pack: center;
      justify-content: center;
      z-index: 99;
    }

    .header-menu ul {
      margin: 0;
      padding-left: 0;
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      -webkit-box-align: center;
      -ms-flex-align: center;
      align-items: center;
      -webkit-box-pack: center;
      -ms-flex-pack: center;
      justify-content: center;
      color: #ffffff;
    }

    .header-menu ul li {
      position: relative;
      margin-right: 41px;
      cursor: pointer;
    }

    .header-menu ul li:hover::after {
      content: '';
      position: absolute;
      left: 0;
      bottom: -5px;
      width: 38px;
      height: 2px;
      background-color: #0b5e8f;
      -webkit-transition: all 0.2s;
      transition: all 0.2s;
    }

    .header-menu ul li {
      display: inline-block;
      cursor: pointer;
      height: 20px;
    }

    .header-menu ul li a {
      font-size: 16px;
      font-weight: 700;
      letter-spacing: 0.32px;
    }

    .header-menu ul button {
      cursor: pointer;
      margin-top: -12px;
    }

    .header-main {
      margin: 0;
      outline: none;
      position: absolute;
      height: 909px;
      width: 100%;
      left: 0;
      top: 0;
      color: #ffffff;
    }

    .header-main_block {
      margin-top: 364px;
    }

    .header-main__title {
      margin-top: 0;
      margin-bottom: 41px;
      font-size: 61px;
      font-weight: 700;
      line-height: 67px;
      letter-spacing: 1.22px;
    }

    .header-main__descr {
      margin-bottom: 37px;
      font-size: 16px;
      font-weight: 400;
      line-height: 30px;
      letter-spacing: 0.32px;
    }

    .header-slider_bottom {
      height: 100%;
      width: 100%;
    }

    /* Скрытие иконки внутри кнопки */

    .hidden-img {
      display: none;
    }

    /* Блок с иконкой сворачивания */

    .gamburger {
      display: none;
      margin-bottom: 10px;
      z-index: 99;
    }

    .gamburger-btn {
      display: block;
      position: relative;
      width: 32px;
      height: 28px;
    }

    .gamburger-btn_active span {
      background: transparent;
    }

    .gamburger-btn_active span::before {
      -webkit-transform: rotate(135deg);
      transform: rotate(135deg);
      margin-top: 0;
    }

    .gamburger-btn_active span::after {
      -webkit-transform: rotate(-135deg);
      transform: rotate(-135deg);
      margin-top: 0;
    }

    .gamburger-span,
    .gamburger-span::before,
    .gamburger-span::after {
      display: block;
      position: absolute;
      top: 50%;
      margin-top: -2px;
      left: 50%;
      margin-left: -16px;
      height: 4px;
      width: 32px;
      background-color: #ffffff;
    }

    .gamburger-span::before,
    .gamburger-span::after {
      content: '';
      -webkit-transition: all 0.2s;
      transition: all 0.2s;
    }

    .gamburger-span::before {
      margin-top: -9px;
    }

    .gamburger-span::after {
      margin-top: 5px;
    }
    </style>
  </head>
  <body>
  <!-- Yandex.Metrika counter --> <script type="text/javascript" > (function (d, w, c) { (w[c] = w[c] || []).push(function() { try { w.yaCounter50857403 = new Ya.Metrika2({ id:50857403, clickmap:true, trackLinks:true, accurateTrackBounce:true, webvisor:true, trackHash:true }); } catch(e) { } }); var n = d.getElementsByTagName("script")[0], s = d.createElement("script"), f = function () { n.parentNode.insertBefore(s, n); }; s.type = "text/javascript"; s.async = true; s.src = "https://cdn.jsdelivr.net/npm/yandex-metrica-watch/tag.js"; if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); } })(document, window, "yandex_metrika_callbacks2"); </script> <noscript><div><img src="https://mc.yandex.ru/watch/50857403" style="position:absolute; left:-9999px;" alt="" /></div></noscript> <!-- /Yandex.Metrika counter -->

    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700,900&amp;subset=cyrillic" rel="stylesheet">
    <link rel="stylesheet" href="css/palatino.css">
    <link rel="stylesheet" href="slick/slick.css">
    <link rel="stylesheet" href="slick/slick-theme.css">
    
    <?php
      include('header.php');
    ?>

    <div class="header-main">
      <div class="header-slider_bottom">

        <div class="header-bg_first">
          <div class="header-main_block">
            <div class="container">
              <h1 class="header-main__title">
                Грузы из Китая <br>
                с компанией "LTS"
              </h1>
              <!-- /.header-main__title -->
              <div class="header-main__descr">
                Экспорт и импорт грузов из Китая любым видом транспорта. <br>
                Без переплат и точно в срок!
              </div>
              <!-- /.header-main__descr -->
              <button class="button button-click">Быстрая заявка</button>
            </div>
            <!-- /.container -->                
          </div>
          <!-- /.header-main_block -->
        </div>
        <!-- /.header-bg_first -->

        <div class="header-bg_second">
          <div class="header-main_block">
            <div class="container">
              <h1 class="header-main__title">
                Грузы из США <br>
                с компанией "LTS"
              </h1>
              <!-- /.header-main__title -->
              <div class="header-main__descr">
                Экспорт и импорт грузов из Китая любым видом транспорта. <br>
                Без переплат и точно в срок!
              </div>
              <!-- /.header-main__descr -->
              <button class="button button-click">Быстрая заявка</button>
            </div>
            <!-- /.container -->
          </div>
          <!-- /.header-main_block -->   
        </div>
        <!-- /.header-bg_second -->

        <div class="header-bg_third">
          <div class="header-main_block">
            <div class="container">
              <h1 class="header-main__title">
                Грузы из Японии <br>
                с компанией "LTS"
              </h1>
              <!-- /.header-main__title -->
              <div class="header-main__descr">
                Экспорт и импорт грузов из Китая любым видом транспорта. <br>
                Без переплат и точно в срок!
              </div>
              <!-- /.header-main__descr -->
              <button class="button button-click">Быстрая заявка</button>
            </div>
            <!-- /.container -->
          </div>
          <!-- /.header-main_block -->
        </div>
        <!-- /.header-bg_third -->
                        
      </div>
      <!-- /.header-slider_bottom -->
    </div>
    <!-- /.header-main -->
    
    <section class="features">
      <div id="features" class="container features-card">
        <div  class="features-section-title">
          <div class="features-section-title__line">
            <img src="img/line-gray.png" alt="">
          </div>
          <!-- /.features-section-title__line -->
          <h2 class="features-section-title__text">
            Наши услуги
          </h2>
          <!-- /.features-section-title__text -->
          <div class="features-section-title__line">
            <img src="img/line-gray.png" alt="">
          </div>
          <!-- /.features-section-title__line -->   
        </div>

        <div class="features-blocks">
          <div class="features-block wow fadeInUp">
            <div class="features-block__img">
              <img class="on" src="img/features/icon-1.png" alt="Производство">
              <img class="off" src="img/features/icon-1-active.png" alt="Производство">
            </div>
            <!-- /.features-block__img -->
            <div class="features-block__text">
              <div class="features-block__title">
                Международные<br>
                грузоперевозки             
              </div>
              <!-- /.features-block__title -->             
                <button class="button button-o features-button features-hidden__img" onClick='location.href="page.php"'>
                  Подробней
                </button>            
            </div>
            <!-- /.features-block__text -->
          </div>
          <!-- /.features-block -->
          
          <div class="features-block wow fadeInUp" data-wow-delay="0.2s">
            <div class="features-block__img">
              <img class="on" src="img/features/icon-2.png" alt="Бесплатные образцы">
              <img class="off" src="img/features/icon-2-active.png" alt="Бесплатные образцы">
            </div>
            <!-- /.features-block__img -->
            <div class="features-block__text">
              <div class="features-block__title">
                Доставка<br>
                грузов из Китая              
              </div>
              <!-- /.features-block__title -->
                <button class="button button-o features-button features-hidden__img" onClick='location.href="page.php"'>
                  Подробней
                </button>
            </div>
            <!-- /.features-block__text -->
          </div>
          <!-- /.features-block -->

          <div class="features-block wow fadeInUp" data-wow-delay="0.4s">
            <div class="features-block__img">
              <img class="on" src="img/features/icon-3.png" alt="Бесплатные образцы">
              <img class="off" src="img/features/icon-3-active.png" alt="Бесплатные образцы">
            </div>
            <!-- /.features-block__img -->
            <div class="features-block__text">
              <div class="features-block__title">
                Таможенное<br>
                оформление              
              </div>
              <!-- /.features-block__title -->
                <button class="button button-o features-button features-hidden__img" onClick='location.href="page.php"'>
                  Подробней
                </button>
            </div>
            <!-- /.features-block__text -->
          </div>
          <!-- /.features-block -->

          <div class="features-block wow fadeInUp" data-wow-delay="0.6s">
            <div class="features-block__img">
              <img class="on" src="img/features/icon-4.png" alt="Бесплатные образцы">
              <img class="off" src="img/features/icon-4-active.png" alt="Бесплатные образцы">
            </div>
            <!-- /.features-block__img -->
            <div class="features-block__text">
              <div class="features-block__title">
                Контейнерные<br>
                перевозки            
              </div>
              <!-- /.features-block__title -->
                <button class="button button-o features-button features-hidden__img" onClick='location.href="page.php"'>
                  Подробней
                </button>
            </div>
            <!-- /.features-block__text -->
          </div>
          <!-- /.features-block -->

          <div class="features-block wow fadeInUp" data-wow-delay="0.8s">
            <div class="features-block__img">
              <img class="on" src="img/features/icon-5.png" alt="Бесплатные образцы">
              <img class="off" src="img/features/icon-5-active.png" alt="Бесплатные образцы">
            </div>
            <!-- /.features-block__img -->
            <div class="features-block__text">
              <div class="features-block__title">
                Доставка<br>
                сборных грузов    
              </div>
              <!-- /.features-block__title -->
                <button class="button button-o features-button features-hidden__img" onClick='location.href="page.php"'>
                  Подробней
                </button>
            </div>
            <!-- /.features-block__text -->
          </div>
          <!-- /.features-block -->

          <div class="features-block wow fadeInUp" data-wow-delay="1s">
            <div class="features-block__img">
              <img class="on" src="img/features/icon-6.png" alt="Бесплатные образцы">
              <img class="off" src="img/features/icon-6-active.png" alt="Бесплатные образцы">
            </div>
            <!-- /.features-block__img -->
            <div class="features-block__text">
              <div class="features-block__title">
                Финансирование<br>
                поставок    
              </div>
              <!-- /.features-block__title -->
                <button class="button button-o features-button features-hidden__img" onClick='location.href="page.php"'>
                  Подробней
                </button>
            </div>
            <!-- /.features-block__text -->
          </div>
          <!-- /.features-block -->    
        </div>
        <!-- /.features-blocks -->
      </div>
      <!-- /.container -->
    </section>
    <!-- /.features -->

    <section class="information">
      <div class="information-img">
      </div>
      <!-- /.information-img -->
      <div class="information-text">
        <h2 class="information-text__title">
          "LTS" -  large transport ships
        </h2>
        <!-- /.information-text__title -->
        <div class="information-text__sub">
          Международная компания
        </div>
        <!-- /.information-text__sub -->
        <div class="information-text__descr">
          Идейные соображения высшего порядка, а также начало повседневной работы по формированию позиции влечет за собой процесс
          внедрения и модернизации систем массового участия. Товарищи! постоянное информационно-пропагандистское обеспечение
          нашей деятельности способствует подготовки и реализации существенных финансовых и административных условий.
        </div>
        <!-- /.information-text__descr -->
      </div>
      <!-- /.information-text -->
    </section>
    <!-- /.information -->
  
    <section id="news" class="news">
      <div class="container">
        <div class="section-title">
          <div class="section-title__line">
            <img src="img/line-gray.png" alt="">
          </div>
          <!-- /.section-title__line -->
          <h2 class="section-title__text">
            Новости
          </h2>
          <!-- /.section-title__text -->
          <div class="section-title__line">
            <img src="img/line-gray.png" alt="">
          </div>
          <!-- /.section-title__line -->   
        </div>

        <div class="news-blocks">
          <div class="news-block">
           <a href="#">
              <div class="news-block__img">
              <img src="img/news/photo-1.jpg" alt="">
            </div>
            <!-- /.news-block__img -->
            <div class="news-block__text">
              <div class="news-block__title">
                Открытие нового<br>
                направления поставок
              </div>
              <!-- /.news-block__title -->
              <div class="news-block__sub">
                15.09.17
              </div>
              <!-- /.news-block__sub -->
            </div>
            <!-- /.news-block__text -->
           </a>
          </div>
          <!-- /.news-block -->
          
          <div class="news-block">
            <a href="#">
              <div class="news-block__img">
              <img src="img/news/photo-2.jpg" alt="">
            </div>
            <!-- /.news-block__img -->
            <div class="news-block__text">
              <div class="news-block__title">
                Открытие нового<br>
                направления поставок
              </div>
              <!-- /.news-block__title -->
              <div class="news-block__sub">
                15.09.17
              </div>
              <!-- /.news-block__sub -->
            </div>
            <!-- /.news-block__text -->
            </a>
          </div>
          <!-- /.news-block -->

          <div class="news-block">
           <a href="#">
              <div class="news-block__img">
              <img src="img/news/photo-3.jpg" alt="">
            </div>
            <!-- /.news-block__img -->
            <div class="news-block__text">
              <div class="news-block__title">
                Открытие нового<br>
                направления поставок   
              </div>
              <!-- /.news-block__title -->
              <div class="news-block__sub">
                15.09.17
              </div>
              <!-- /.news-block__sub -->
            </div>
            <!-- /.news-block__text -->
           </a>
          </div>
          <!-- /.news-block -->

          <div class="news-block">
            <a href="#">
              <div class="news-block__img">
              <img src="img/news/photo-4.jpg" alt="">
            </div>
            <!-- /.news-block__img -->
            <div class="news-block__text">
              <div class="news-block__title">
                Открытие нового<br>
                направления поставок       
              </div>
              <!-- /.news-block__title -->
              <div class="news-block__sub">
                15.09.17
              </div>
              <!-- /.news-block__sub -->
            </div>
            <!-- /.news-block__text -->
            </a>
          </div>
          <!-- /.news-block -->

        </div>
        <!-- /.news-blocks -->
      </div>
      <!-- /.container -->
    </section>
    <!-- /.news -->

    <div class="offer">

        <div class="offer-slider">         
          <div class="offer-slider__item">
            <div class="container">
              <div class="offer-slider__title">
                Являемся гарантом<br> 
                качества по всему миру
              </div>
              <!-- /.offer-slider__title -->
              <div class="offer-slider__sub">
                Наши специалисты помогут вам доставить<br>
                ваши грузы в любую точку мира
              </div>
              <!-- /.offer-slider__sub -->
              <button class="button button-click">Быстрая заявка</button>
              <!-- /.button -->
            </div>
            <!-- /.container -->
          </div>
          <!-- /.offer-slider__item -->

          <div class="offer-slider__item">
            <div class="container">
              <div class="offer-slider__title">
                Работаем с экспортом<br> 
                и импортом по всему миру
              </div>
              <!-- /.offer-slider__title -->
              <div class="offer-slider__sub">
                Наши специалисты помогут вам доставить<br>
                ваши грузы в любую точку мира
              </div>
              <!-- /.offer-slider__sub -->
              <button class="button button-click">Быстрая заявка</button>
              <!-- /.button -->
            </div>
            <!-- /.container -->
          </div>
          <!-- /.offer-slider__item -->
        </div>
        <!-- /.offer-slider -->      
    </div>
    <!-- /.offer -->
    
    <section class="partners">
      <div class="container">
        <div class="section-title">
          <div class="section-title__line">
            <img src="img/line-gray.png" alt="">
          </div>
          <!-- /.section-title__line -->
          <h2 class="section-title__text">
            Наши партнеры
          </h2>
          <!-- /.section-title__text -->
          <div class="section-title__line">
            <img src="img/line-gray.png" alt="">
          </div>
          <!-- /.section-title__line -->   
        </div>

        <div class="partners-blocks">
          <div class="partners-block partners-block-hp"></div>
          <!-- /.partners-block -->
          <div class="partners-block partners-block-canon"></div>
          <!-- /.partners-block -->
          <div class="partners-block partners-block-dell"></div>
          <!-- /.partners-block -->
          <div class="partners-block partners-block-hp"></div>
          <!-- /.partners-block -->
          <div class="partners-block partners-block-canon"></div>
          <!-- /.partners-block -->
        </div>
        <!-- /.partners-blocks -->
      </div>
      <!-- /.container -->
    </section>
    <!-- /.partners -->
    
    <?php
      include('footer.php');
    ?>

    <div class="overlay">
      <div class="popup">        
        <div class="section-title">
          <h2 class="section-title__text">
            Быстрая заявка
          </h2>
          <!-- /.section-title__text -->
        </div>
        
        <div class="popup-close">&times;</div>
        <!-- /.popup-close -->

        <div class="popup-form">
          <form action="mailer/smart.php" class="form form2" method="POST">
            <div class="form-block form-block__left">
              <input type="text" id="input_2f" class="form-input form-input__img" name="user_from" required placeholder="Откуда">
            </div>
            <!-- /.form-block -->

            <div class="form-block form-block__right">
              <input type="text" id="input_2t" class="form-input form-input__img" name="user_to" required placeholder="Куда">
            </div>
            <!-- /.form-block -->

            <div class="form-block form-block__left">
              <input type="text" id="input_2n" class="form-input" name="user_name" required placeholder="Как вас зовут?">
            </div>
            <!-- /.form-block -->

            <div class="form-block form-block__right">
              <input type="tel" id="input_2" class="form-input" name="user_phone" required placeholder="Номер телефона">
            </div>
            <!-- /.form-block -->

            <button class="button button-send_2">Заказать звонок</button>
          </form>
          <!-- /.form -->
          <small class="form-small">
            Нажав кнопку «Заказать звонок»,<br>
            я даю согласие на обработку моих персональных данных.
          </small>
          <!-- /.message-form-small -->
        </div>
        <!-- /.popup-form -->
      </div>
      <!-- /.popup -->
    </div>
    <!-- /.overlay -->

    <div class="overlay-order">
      <div class="popup">
        <div class="section-title">
          <h2 class="section-title__text">
            Быстрая заявка
          </h2>
          <!-- /.section-title__text -->
        </div>

        <div class="popup-close">&times;</div>
        <!-- /.popup-close -->

        <div class="popup-form">
          <form action="mailer/smart.php" class="form form1" method="POST">

            <div class="form-block form-block__left">
              <input type="text" id="input_1n" class="form-input" name="user_name" required placeholder="Как вас зовут?">
            </div>
            <!-- /.form-block -->

            <div class="form-block form-block__right">
              <input type="tel" id="input_1" class="form-input" name="user_phone" required placeholder="Номер телефона">
            </div>
            <!-- /.form-block -->

            <button class="button button-send_1">Заказать звонок</button>
          </form>
          <!-- /.form -->
          <small class="form-small">
            Нажав кнопку «Заказать звонок»,<br>
            я даю согласие на обработку моих персональных данных.
          </small>
          <!-- /.message-form-small -->
        </div>
        <!-- /.popup-form -->
      </div>
      <!-- /.popup -->
    </div>  
    <!-- /.overlay -->
    
    <div class="thanks">
      <div class="popup">
        <div class="section-title">
          <h2 class="section-title__text">
            Окно благодарности
          </h2>
          <!-- /.section-title__text -->
        </div>
        <div class="popup-close">&times;</div>
        <!-- /.popup-close -->
        <div class="popup-form">
          <div class="popup-form-header">
            Благодарим вас за оставленный запрос
            <span>на наши услуги</span>
          </div>
          <!-- /.popup-form-header -->
        </div>
        <!-- /.popup-form -->
      </div>
      <!-- /.popup -->
    </div>
    <!-- /.thanks -->
    
    <!-- Bootstrap grid CSS -->
    <link rel="stylesheet" href="css/bootstrap-grid.min.css">
    
    <!-- Подключаем анимацию -->
    <link rel="stylesheet" href="css/animate.css">
    
    <!-- Custome styles for this template -->
    <link rel="stylesheet" href="css/style.css">
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
    <script src="slick/slick.min.js"></script>
    <script src="js/jquery.maskedinput.min.js"></script>
    <script>
      $('.header-slider_bottom').slick({
        arrows: true,
        dots: true,
        // dotsClass: 
        slidesToShow: 1,
        slidesToScroll: 1,
        prevArrow: '<div class="slider-arrow slider-arrow_header slider-arrow__left"></div>',
        nextArrow: '<div class="slider-arrow slider-arrow_header slider-arrow__right"></div>',
        responsive: [
          {
            breakpoint: 769,
            settings: {
              dots: false
            }
          }
        ]
      });
      $('.offer-slider').slick({
        arrows: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        prevArrow: '<div class="slider-arrow slider-arrow_header slider-arrow__left"></div>',
        nextArrow: '<div class="slider-arrow slider-arrow_header slider-arrow__right"></div>',
      });
    </script>
    <script src="js/wow.min.js"></script>
    <script>
      /* Инициализация библиотеки wow.min.js */
      new WOW().init();
    </script>
  
    <!-- <script src="js/jquery-3.3.1.min.js"></script> -->
    <script src="js/script.js"></script>
    <script>    
      $('form').submit(function (event) {
        event.preventDefault();
        $.ajax({
          type: "POST",
          url: "mailer/smart.php",
          data: $(this).serialize()
        }).done(function () {
          $(this).find("input").val("");
          // alert("Сообщение успешно отправлено");
          $("form").trigger("reset");
        });
        return false;
      });
    </script>
  </body>
</html>