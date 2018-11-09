<!doctype html>
<html lang="ru">
  <head>
    <title>LTS - Услуги</title>
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
    
    .page .header {
    background-color: #272e3c;
    }

    .page .header-main {
    display: none;
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
    <!-- Yandex.Metrika counter --> 
    <script> (function (d, w, c) { (w[c] = w[c] || []).push(function() { try { w.yaCounter50857403 = new Ya.Metrika2({ id:50857403, clickmap:true, trackLinks:true, accurateTrackBounce:true, webvisor:true, trackHash:true }); } catch(e) { } }); var n = d.getElementsByTagName("script")[0], s = d.createElement("script"), f = function () { n.parentNode.insertBefore(s, n); }; s.type = "text/javascript"; s.async = true; s.src = "https://cdn.jsdelivr.net/npm/yandex-metrica-watch/tag.js"; if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); } })(document, window, "yandex_metrika_callbacks2"); </script>
    <noscript>
      <div><img src="https://mc.yandex.ru/watch/50857403" style="position:absolute; left:-9999px;" alt="" /></div>
    </noscript> <!-- /Yandex.Metrika counter -->
    
    <div class="page">
      <?php
        include('header.php');
      ?>
    </div>
    <!-- /.page -->
    
    <div class="main" id="main">
      <div class="container">
        <div class="row">

          <div class="col-12 col-lg-4">
            <div class="service">
              <h2 class="service-title">
                Наши услуги
              </h2>
              <!-- /.service-title -->
              <div class="service-blocks">

                <a href="#" id="link_1">
                  <div class="service-block wow fadeInUp">
                    <div class="service-block__img">
                      <img class="on" src="img/features/icon-1.png" alt="Производство">
                      <img class="off" src="img/features/icon-1-active.png" alt="Производство">
                    </div>
                    <!-- /.service-block__img -->
                    <div class="service-block__text">
                      Международные грузоперевозки
                    </div>
                    <!-- /.service-block__text -->
                  </div>
                  <!-- /.service-block -->
                </a>

                <a href="#" id="link_2">
                  <div class="service-block wow fadeInUp" data-wow-delay="0.2s">
                    <div class="service-block__img">
                      <img class="on" src="img/features/icon-2.png" alt="Производство">
                      <img class="off" src="img/features/icon-2-active.png" alt="Производство">
                    </div>
                    <!-- /.service-block__img -->
                    <div class="service-block__text">
                      Доставка грузов из Китая
                    </div>
                    <!-- /.service-block__text -->
                  </div>
                  <!-- /.service-block -->
                </a>

                <a href="#" id="link_3">
                  <div class="service-block wow fadeInUp" data-wow-delay="0.4s">
                    <div class="service-block__img">
                      <img class="on" src="img/features/icon-3.png" alt="Производство">
                      <img class="off" src="img/features/icon-3-active.png" alt="Производство">
                    </div>
                    <!-- /.service-block__img -->
                    <div class="service-block__text">
                      Таможенное оформление
                    </div>
                    <!-- /.service-block__text -->
                  </div>
                  <!-- /.service-block -->
                </a>

                <a href="#" id="link_4">
                  <div class="service-block wow fadeInUp" data-wow-delay="0.6s">
                    <div class="service-block__img">
                      <img class="on" src="img/features/icon-4.png" alt="Производство">
                      <img class="off" src="img/features/icon-4-active.png" alt="Производство">
                    </div>
                    <!-- /.service-block__img -->
                    <div class="service-block__text">
                      Контейнерные перевозки
                    </div>
                    <!-- /.service-block__text -->
                  </div>
                  <!-- /.service-block -->
                </a>

                <a href="#" id="link_5">
                  <div class="service-block wow fadeInUp" data-wow-delay="0.8s">
                    <div class="service-block__img">
                      <img class="on" src="img/features/icon-5.png" alt="Производство">
                      <img class="off" src="img/features/icon-5-active.png" alt="Производство">
                    </div>
                    <!-- /.service-block__img -->
                    <div class="service-block__text">
                      Доставка сборных грузов
                    </div>
                    <!-- /.service-block__text -->
                  </div>
                  <!-- /.service-block -->
                </a>

                <a href="#" id="link_6">
                  <div class="service-block wow fadeInUp" data-wow-delay="1s">
                    <div class="service-block__img">
                      <img class="on" src="img/features/icon-6.png" alt="Производство">
                      <img class="off" src="img/features/icon-6-active.png" alt="Производство">
                    </div>
                    <!-- /.service-block__img -->
                    <div class="service-block__text">
                      Финансирование поставок
                    </div>
                    <!-- /.service-block__text -->
                  </div>
                  <!-- /.service-block -->
                </a>

              </div>
              <!-- /.service-blocks -->
            </div>
            <!-- /.service -->
          </div>
          <!-- /.col-4 -->

          <div class="col-12 col-lg-8 page">
            <div class="info">
              <div class="info-block_1">
                <div class="info-block">
                  <h2 class="info-title">
                    Международные грузоперевозки
                  </h2>
                  <!-- /.info-title -->

                  <div class="info-text">
                    Идейные соображения высшего порядка, а также начало повседневной работы по формированию
                    позиции влечет за собой процесс внедрения и модернизации систем массового участия. Товарищи!
                    постоянное информационно-пропагандистское обеспечение нашей деятельности способствует
                    подготовки и реализации существенных финансовых и административных условий.
                  </div>
                  <!-- /.info-text -->
                </div>
                <!-- /.info-block -->

                <div class="info-block">
                  <h2 class="info-title">
                    Галерея изображений
                  </h2>
                  <!-- /.info-title -->

                  <div class="info-img">
                    <img src="img/information/ship_page.jpg" alt="Корабль">
                    <img src="img/information/airplane.jpg" alt="Самолет">
                  </div>
                  <!-- /.info-img -->
                </div>
                <!-- /.info-block -->
              </div>
              <!-- /.info-block_1 -->

              <div class="info-block_2">
                <div class="info-block">
                  <h2 class="info-title">
                    Доставка грузов из Китая
                  </h2>
                  <!-- /.info-title -->

                  <div class="info-text">
                    Идейные соображения высшего порядка, а также начало повседневной работы по формированию
                    позиции влечет за собой процесс внедрения и модернизации систем массового участия. Товарищи!
                    постоянное информационно-пропагандистское обеспечение нашей деятельности способствует
                    подготовки и реализации существенных финансовых и административных условий.
                  </div>
                  <!-- /.info-text -->
                </div>
                <!-- /.info-block -->

                <div class="info-block">
                  <h2 class="info-title">
                    Галерея изображений
                  </h2>
                  <!-- /.info-title -->

                  <div class="info-img">
                    <img src="img/information/airplane.jpg" alt="Самолет">
                    <img src="img/information/ship_page.jpg" alt="Корабль">
                  </div>
                  <!-- /.info-img -->
                </div>
                <!-- /.info-block -->
              </div>
              <!-- /.info-block_2 -->

              <div class="info-block_3">
                <div class="info-block">
                  <h2 class="info-title">
                    Таможенное оформление
                  </h2>
                  <!-- /.info-title -->

                  <div class="info-text">
                    Идейные соображения высшего порядка, а также начало повседневной работы по формированию
                    позиции влечет за собой процесс внедрения и модернизации систем массового участия. Товарищи!
                    постоянное информационно-пропагандистское обеспечение нашей деятельности способствует
                    подготовки и реализации существенных финансовых и административных условий.
                  </div>
                  <!-- /.info-text -->
                </div>
                <!-- /.info-block -->

                <div class="info-block">
                  <h2 class="info-title">
                    Галерея изображений
                  </h2>
                  <!-- /.info-title -->

                  <div class="info-img">
                    <img src="img/information/airplane.jpg" alt="Самолет">
                    <img src="img/information/ship_page.jpg" alt="Корабль">
                  </div>
                  <!-- /.info-img -->
                </div>
                <!-- /.info-block -->
              </div>
              <!-- /.info-block_3 -->

              <div class="info-block_4">
                <div class="info-block">
                  <h2 class="info-title">
                    Контейнерные перевозки
                  </h2>
                  <!-- /.info-title -->

                  <div class="info-text">
                    Идейные соображения высшего порядка, а также начало повседневной работы по формированию
                    позиции влечет за собой процесс внедрения и модернизации систем массового участия. Товарищи!
                    постоянное информационно-пропагандистское обеспечение нашей деятельности способствует
                    подготовки и реализации существенных финансовых и административных условий.
                  </div>
                  <!-- /.info-text -->
                </div>
                <!-- /.info-block -->

                <div class="info-block">
                  <h2 class="info-title">
                    Галерея изображений
                  </h2>
                  <!-- /.info-title -->

                  <div class="info-img">
                    <img src="img/information/airplane.jpg" alt="Самолет">
                    <img src="img/information/ship_page.jpg" alt="Корабль">
                  </div>
                  <!-- /.info-img -->
                </div>
                <!-- /.info-block -->
              </div>
              <!-- /.info-block_4 -->

              <div class="info-block_5">
                <div class="info-block">
                  <h2 class="info-title">
                    Доставка сборных грузов
                  </h2>
                  <!-- /.info-title -->

                  <div class="info-text">
                    Идейные соображения высшего порядка, а также начало повседневной работы по формированию
                    позиции влечет за собой процесс внедрения и модернизации систем массового участия. Товарищи!
                    постоянное информационно-пропагандистское обеспечение нашей деятельности способствует
                    подготовки и реализации существенных финансовых и административных условий.
                  </div>
                  <!-- /.info-text -->
                </div>
                <!-- /.info-block -->

                <div class="info-block">
                  <h2 class="info-title">
                    Галерея изображений
                  </h2>
                  <!-- /.info-title -->

                  <div class="info-img">
                    <img src="img/information/airplane.jpg" alt="Самолет">
                    <img src="img/information/ship_page.jpg" alt="Корабль">
                  </div>
                  <!-- /.info-img -->
                </div>
                <!-- /.info-block -->
              </div>
              <!-- /.info-block_5 -->

              <div class="info-block_6">
                <div class="info-block">
                  <h2 class="info-title">
                    Финансирование поставок
                  </h2>
                  <!-- /.info-title -->

                  <div class="info-text">
                    Идейные соображения высшего порядка, а также начало повседневной работы по формированию
                    позиции влечет за собой процесс внедрения и модернизации систем массового участия. Товарищи!
                    постоянное информационно-пропагандистское обеспечение нашей деятельности способствует
                    подготовки и реализации существенных финансовых и административных условий.
                  </div>
                  <!-- /.info-text -->
                </div>
                <!-- /.info-block -->

                <div class="info-block">
                  <h2 class="info-title">
                    Галерея изображений
                  </h2>
                  <!-- /.info-title -->

                  <div class="info-img">
                    <img src="img/information/airplane.jpg" alt="Самолет">
                    <img src="img/information/ship_page.jpg" alt="Корабль">
                  </div>
                  <!-- /.info-img -->
                </div>
                <!-- /.info-block -->
              </div>
              <!-- /.info-block_6 -->

              <div class="info-block">
                <h2 class="info-title">
                  Отзывы
                </h2>
                <!-- /.info-title -->

                <div class="info-block_review">
                  <div class="info-text__title">
                    Ольга Петрова
                  </div>
                  <!-- /.info-text__title -->
                  <div class="info-text">
                    Спасибо вашей компании за сотрудничество, постоянно доказываете, что с вами очень приятно
                    работать, хорошая скорость и все товары всегда в сохранности. Всем советую.
                  </div>
                  <!-- /.info-text -->
                </div>
                <!-- /.info-block_review -->

                <div class="info-block_review">
                  <div class="info-text__title">
                    Ольга Петрова
                  </div>
                  <!-- /.info-text__title -->
                  <div class="info-text">
                    Спасибо вашей компании за сотрудничество, постоянно доказываете, что с вами очень приятно
                    работать, хорошая скорость и все товары всегда в сохранности. Всем советую.
                  </div>
                  <!-- /.info-text -->
                </div>
                <!-- /.info-block_review -->
              </div>
              <!-- /.info-block -->

              <div class="info-block">
                <h2 class="info-title">
                  Оставить отзыв
                </h2>
                <!-- /.info-title -->

                <form action="mailer/smart_page.php" class="info-form form4" method="POST">
                  <input type="text" id="input_4n" class="info-input" name="user_name" required placeholder="Как вас зовут?">
                  <input type="email" id="input_4" class="info-input" name="user_email" required placeholder="Ваш e-mail">
                  <textarea id="textarea" class="info-textarea" name="user_review" required placeholder="Ваш отзыв"></textarea>
                  <button class="button button-send_4">Отправить</button>
                </form>
                <!-- /.info-form -->
              </div>
              <!-- /.info-block -->

              <div class="info-block info-none">
                <h2 class="info-title">
                  Таблица
                </h2>
                <!-- /.info-title -->

                <table class="table table-bordered text-center">
                  <thead class="thead-inverse">
                    <tr table-tr first-tr>
                      <th class="align-middle">Фамилия</th>
                      <th class="align-middle">Имя</th>
                      <th class="align-middle">Отчество</th>
                      <th class="align-middle">Телефон</th>
                      <th class="align-middle">Адрес</th>
                      <th class="align-middle th-bold">Семейное положение</th>
                      <th class="align-middle">Код подразделения</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr table-tr first-tr>
                      <td class="align-middle" scope="row">Фамилия</th>
                      <td class="align-middle">Имя</td>
                      <td class="align-middle">Отчество</td>
                      <td class="align-middle">Телефон</td>
                      <td class="align-middle">Адрес</td>
                      <td class="align-middle th-bold">Семейное положение</td>
                      <td class="align-middle">Код подразделения</td>
                    </tr>
                    <tr table-tr first-tr>
                      <td class="align-middle" scope="row">Фамилия</th>
                      <td class="align-middle">Имя</td>
                      <td class="align-middle">Отчество</td>
                      <td class="align-middle">Телефон</td>
                      <td class="align-middle">Адрес</td>
                      <td class="align-middle th-bold">Семейное положение</td>
                      <td class="align-middle th-bold-2">Код подразделения</td>
                    </tr>
                  </tbody>
                </table>

              </div>
              <!-- /.info-block -->

            </div>
            <!-- /.info -->
          </div>
          <!-- /.col-8 -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container -->
    </div>
    <!-- /.main -->
    
    <?php
      include('footer.php');
    ?>

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
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700,900&amp;subset=cyrillic" rel="stylesheet">

    <link rel="stylesheet" href="css/palatino.css">
    
    <!-- Подключаем анимацию -->
    <link rel="stylesheet" href="css/animate.css">
    
    <!-- Custome styles for this template -->
    <link rel="stylesheet" href="css/style.css">
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
    <script src="js/jquery.maskedinput.min.js"></script>
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