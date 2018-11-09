$(document).ready(function () {
  var link = $('.gamburger-btn');
  var link_active = $('.gamburger-btn_active');
  var gamburger = $('.gamburger');
  var menu = $('.header-menu');

  link.click(function () {
    link.toggleClass('gamburger-btn_active');
    menu.css('display', 'block');
    menu.toggleClass('header-menu_active');
  });
  link_active.click(function () {
    menu.togglelass('header-none');
    link.removeClass('gamburger-btn_active');
    menu.removeClass('header-menu_active');
  });
  
  /* Получить элементы, к которым необходимо добавить маски */
  $(function () {
    $("#input_1").mask("+7(999) 999-99-99");
  });
  $(function () {
    $("#input_2").mask("+7(999) 999-99-99");
  });
  $(function () {
    $("#input_3").mask("+7(999) 999-99-99");
  });
  
  $('.button-click').on("click", function () {
    $('.overlay').show(); 
  });
  $('.button-click-order').on("click", function () {
    $('.overlay-order').show(); 
  });
  $('.popup-close').on("click", function () {
    $('.overlay').hide();
    $('.overlay-order').hide();
    $('.thanks').hide();
  });

  $('.button-send_1').on("click", function () {
    var input1n = $('#input_1n').val();
    var input1 = $('#input_1').val();

    if (input1 == '' || input1n == '') {
      return alert('Заполните поле');
    }
    else {
      $('.thanks').show();
    }
  });

  $('.button-send_2').on("click", function () {
    var input2f = $('#input_2f').val();
    var input2t = $('#input_2t').val();
    var input2n = $('#input_2n').val();
    var input2 = $('#input_2').val();

    if (input2 == '' || input2f == '' || input2t == '' || input2n == '') {
      return alert('Заполните поле');
    } else {
      $('.thanks').show();
    }
  });

  $('.button-send_3').on("click", function () {
    var input3f = $('#input_3f').val();
    var input3t = $('#input_3t').val();
    var input3n = $('#input_3n').val();
    var input3 = $('#input_3').val();

    if (input3 == '' || input3f == '' || input3t == '' || input3n == '') {
      return alert('Заполните поле');
    } else {
      $('.thanks').show();
    }
  });

  $('.button-send_4').on("click", function () {
    var input2n = $('#input_4n').val();
    var input2 = $('#input_4').val();
    var textarea = $('#textarea').val();

    if (input2 == '' || input2n == '' || textarea == '') {
      return alert('Заполните поле');
    } else {
      $('.thanks').show();
    }
  });

  var block_1 = $('.info-block_1');
  var block_2 = $('.info-block_2');
  var block_3 = $('.info-block_3');
  var block_4 = $('.info-block_4');
  var block_5 = $('.info-block_5');
  var block_6 = $('.info-block_6');
  var link_1 = $('#link_1');
  var link_2 = $('#link_2');
  var link_3 = $('#link_3');
  var link_4 = $('#link_4');
  var link_5 = $('#link_5');
  var link_6 = $('#link_6');

  block_1.toggleClass('block-active');

  link_1.click(function () {
    block_1.toggleClass('block-active');
    block_2.toggleClass('block-none');
    block_3.toggleClass('block-none');
    block_4.toggleClass('block-none');
    block_5.toggleClass('block-none');
    block_6.toggleClass('block-none');

    block_1.removeClass('block-none');
    block_2.removeClass('block-active');
    block_3.removeClass('block-active');
    block_4.removeClass('block-active');
    block_5.removeClass('block-active');
    block_6.removeClass('block-active');
  });
  link_2.click(function () {
    block_1.toggleClass('block-none');
    block_2.toggleClass('block-active');
    block_3.toggleClass('block-none');
    block_4.toggleClass('block-none');
    block_5.toggleClass('block-none');
    block_6.toggleClass('block-none');

    block_1.removeClass('block-active');
    block_2.removeClass('block-none');
    block_3.removeClass('block-active');
    block_4.removeClass('block-active');
    block_5.removeClass('block-active');
    block_6.removeClass('block-active');
  });
  link_3.click(function () {
    block_1.toggleClass('block-none');
    block_2.toggleClass('block-none');
    block_3.toggleClass('block-active');
    block_4.toggleClass('block-none');
    block_5.toggleClass('block-none');
    block_6.toggleClass('block-none');

    block_1.removeClass('block-active');
    block_2.removeClass('block-active');
    block_3.removeClass('block-none');
    block_4.removeClass('block-active');
    block_5.removeClass('block-active');
    block_6.removeClass('block-active');
  });
  link_4.click(function () {
    block_1.toggleClass('block-none');
    block_2.toggleClass('block-none');
    block_3.toggleClass('block-none');
    block_4.toggleClass('block-active');
    block_5.toggleClass('block-none');
    block_6.toggleClass('block-none');

    block_1.removeClass('block-active');
    block_2.removeClass('block-active');
    block_3.removeClass('block-active');
    block_4.removeClass('block-none');
    block_5.removeClass('block-active');
    block_6.removeClass('block-active');
  });
  link_5.click(function () {
    block_1.toggleClass('block-none');
    block_2.toggleClass('block-none');
    block_3.toggleClass('block-none');
    block_4.toggleClass('block-none');
    block_5.toggleClass('block-active');
    block_6.toggleClass('block-none');

    block_1.removeClass('block-active');
    block_2.removeClass('block-active');
    block_3.removeClass('block-active');
    block_4.removeClass('block-active');
    block_5.removeClass('block-none');
    block_6.removeClass('block-active');
  });
  link_6.click(function () {
    block_1.toggleClass('block-none');
    block_2.toggleClass('block-none');
    block_3.toggleClass('block-none');
    block_4.toggleClass('block-none');
    block_5.toggleClass('block-none');
    block_6.toggleClass('block-active');

    block_1.removeClass('block-active');
    block_2.removeClass('block-active');
    block_3.removeClass('block-active');
    block_4.removeClass('block-active');
    block_5.removeClass('block-active');
    block_6.removeClass('block-none');
  });
});
