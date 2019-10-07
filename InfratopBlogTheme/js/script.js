$(function(){
  // $("#category__list > li").on("click", function() {
  //   $(this).next().slideToggle();
  // });

  $(".header__list li").hover(function() {
      $(this).children('ul').fadeIn(400);
  }, function() {
      $(this).children('ul').hide();
  });

  $("#btn").click(function() {
      $("#headerRes__bodyWrapper--search_active").fadeIn();
  });
  $("#headerRes__closeSearch").click(function() {
      $("#headerRes__bodyWrapper--search_active").fadeOut();
  });

  var menu = $('#headerRes__menu--device_sp'), // スライドインするメニューを指定
      menuBtn = $('#button'), // メニューボタンを指定
      body = $('.wrapper'),
      menuWidth = menu.outerWidth();
      // メニューボタンをクリックした時の動き
      menuBtn.on('click', function(){
        // body に open クラスを付与する
        body.addClass('open');

        if(body.hasClass('open')){
            // open クラスが body についていたらメニューをスライドインする
            body.animate({'right' : menuWidth }, 300);
            $('.headerRes').animate({'right' : menuWidth }, 300);
            menu.animate({'right' : 0 }, 300);
            $("#headerRes__bodyWrapper--menu_open").fadeIn();

            current_scrollY = $( window ).scrollTop();
            body.css({
              position : 'fixed',
              width : '100%',
              top : -current_scrollY
            });
            $('.headerRes__label').css({
              position : 'fixed',
              top : '0'
            })
        };
      });

    $('#closeMenu').on('click', function(){
      body.removeClass('open');
      menu.animate({'right' : -menuWidth }, 300);
      $('.headerRes').animate({'right' : 0 }, 300);
      body.animate({'right' : 0 }, 300).attr( { style: '' });
      $("#headerRes__bodyWrapper--menu_open").fadeOut();
      $('.headerRes__label').attr( { style: '' });
      $( 'html, body' ).prop( { scrollTop: current_scrollY });
    });

    $('#headerRes__bodyWrapper--menu_open').on('click', function(){
        menu.animate({'right' : -menuWidth }, 300);
        $('.headerRes').animate({'right' : 0 }, 300);
        body.animate({'right' : 0 }, 300);
        $("#headerRes__bodyWrapper--menu_open").fadeOut();
        body.attr( { style: '' }).removeClass('open');
        $('.headerRes__label').attr( { style: '' });
        $( 'html, body' ).prop({ scrollTop: current_scrollY });
    });

    // fadeIn hidden menu
    $('#header__listLinkMenu').on('click', function(){
          $('#headerRes__menu--device_tab').fadeToggle();
    });

    $(function() {
      $('#headerRes__menu--device_tab, #header__listLinkMenu').on('click touchend', function(e) {
        e.stopPropagation();
      });

      $(document).on('click touchend', function() {
        $('#headerRes__menu--device_tab').fadeOut();
      });
    });    

    $('.bxslider').bxSlider({
      auto: true,
      pager: false
    });

    new WOW().init();
});