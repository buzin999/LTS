<section id="message" class="message">
  <div class="container">
    <div class="section-title section-title__message">
      <h2 class="section-title__text">
        Запрос на услуги
      </h2>
      <!-- /.section-title__text -->
    </div>

    <div class="message-form">
      <form action="mailer/smart.php" class="form form3" method="POST">
        <div class="form-block form-block__left">
          <input type="text" id="input_3f" class="form-input form-input__img"  name="user_from" required placeholder="Откуда">
        </div>
        <!-- /.form-block -->

        <div class="form-block form-block__right">
          <input type="text" id="input_3t" class="form-input form-input__img"  name="user_to" required placeholder="Куда">
        </div>
        <!-- /.form-block -->

        <div class="form-block form-block__left">
          <input type="text" id="input_3n" class="form-input"  name="user_name" required placeholder="Как вас зовут?">
        </div>
        <!-- /.form-block -->

        <div class="form-block form-block__right">
          <input type="tel" id="input_3" class="form-input" name="user_phone" required placeholder="Номер телефона">
        </div>
        <!-- /.form-block -->

        <button class="button button-send_3">Получить расчет</button>
      </form>
      <!-- /.form -->
      <small class="form-small">
        Нажав кнопку «Получить расчет», я даю согласие на обработку моих персональных данных.
      </small>
      <!-- /.message-form-small -->
    </div>
    <!-- /.message-form -->
  </div>
  <!-- /.container -->
</section>
<!-- /.message -->

<footer class="footer">
  <div class="container">
    <div class="footer-wrapper">

      <div class="footer-logo">
        <div class="footer-logo__title">
          LTS
        </div>
        <!-- /.footer-logo__title -->
        <div class="footer-logo__sub">
          Large Transport Ships
        </div>
        <!-- /.footer-logo_sub -->
      </div>
      <!-- /.footer-logo -->

      <div class="footer-nav">
        <div class="footer-nav__item"><a href="index.php">О компании</a></div>
        <!-- /.nav-item -->
        <div class="footer-nav__item"><a href="#features">Услуги</a></div>
        <!-- /.nav-item -->
        <div class="footer-nav__item"><a href="#news">Новости</a></div>
        <!-- /.nav-item -->
        <div class="footer-nav__item"><a href="#">Калькулятор</a></div>
        <!-- /.nav-item -->
        <div class="footer-nav__item"><a href="#">Контакты</a></div>
        <!-- /.nav-item -->
      </div>
      <!-- /.nav -->

      <div class="footer-rights">
        <div class="footer-rights__text form-small">
          Создание сайта:
        </div>
        <div class="footer-rights__img">
          <img src="img/footer/copyright.png" alt="ИРС">
        </div>
      </div>

    </div>
    <!-- /.footer-wrapper -->
  </div>
  <!-- /.container -->
</footer>