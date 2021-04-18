$(function () {
  // 点击遮罩退出
  $('.mask').on('click', function (e) {
    if ($(e.target).closest('.mask .content').length == 0) {
      $(this).fadeOut()
    }
  })
  $('.mask .close').click(function () {
    $(this).parents('.mask').fadeOut()
  })

  // 退出导航
  $(document).bind('click', function (e) {
    if (
      $(e.target).closest('.navwrap').length == 0 &&
      $(e.target).closest('.header').length == 0
    ) {
      $('body').removeClass('open')
    }
  })

  $('.navbtn').click(function () {
    $('body').toggleClass('open')
  })

  $(window).scroll(function () {
    change()
  })
  change()
})

function change() {
  var wtop = $(window).scrollTop()
  if (wtop > 100) {
    $('.header').addClass('fixed')
  } else {
    $('.header').removeClass('fixed')
  }
}
