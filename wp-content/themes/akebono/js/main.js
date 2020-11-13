/*
関数概要：swiper
引数：なし
戻り値：なし
*/
var swiper = new Swiper('.swiper-container', {
  loop: true,
  autoplay: {
    delay: 5000,
    disableOnInteraction: false
  },
  centeredSlides: true,
  slidesPerView: 1.2,
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  }
});

/*
関数概要：.menu_btnクリック時処理
引数：なし
戻り値：なし
*/
$('.menu_btn').on('click', function () {
  $('nav').toggleClass('on');
})

/*
関数概要：送信クリック時処理
引数：なし
戻り値：なし
*/
var $panel = $('.toast_panel');
$('#subbtn').click(function () {
  $panel.fadeIn();
  var timer = window.setTimeout(function () {
    $panel.fadeOut();
    window.clearTimeout(timer);
  }, 3000);
});