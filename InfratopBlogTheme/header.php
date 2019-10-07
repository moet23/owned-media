<!DOCTYPE html>
<html lang="ja">
<head>
  <title>Infratop magazine</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0,  user-scalable=no" />
  <!-- <link rel="stylesheet" href="//yui.yahooapis.com/3.18.1/build/cssreset/cssreset-min.css"> -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/yui/3.18.0/cssreset/cssreset-min.css">
  <link href='https://fonts.googleapis.com/css?family=Noto+Sans' rel='stylesheet' type='text/css'>
  <script src="https://use.fontawesome.com/63c1cf48b1.js"></script>
  <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/jquery.bxslider.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/animate.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/common.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/common-res.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/stylesheet.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/stylesheet-res.css">
  <?php if(is_category() || is_tag() || is_search()): ?>
    <style>
      .search__input{
        margin: 0 auto 30px auto;
      }

      @media all and (max-width: 768px){
      .main{
        padding-top: 51px;
      }
      }
    </style>
  <?php endif; ?>
  <?php wp_head(); ?>
  <?php if(is_home()): ?>
    <!-- FacebookOGP -->
    <meta property="og:title" content="継続率No.1！プログラミング学習ならインフラトップ-公式ブログ">
    <meta property="og:type" content="blog">
    <meta property="og:url" content="<?php echo home_url('/'); ?>">
    <meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/img/ogp-fb.png">
    <meta property="og:site_name" content="継続率No.1！プログラミング学習ならインフラトップ-公式ブログ">
    <meta property="og:description" content="Webスク・WebCampを運営する株式会社インフラトップの公式ブログです。エンジニア・Webデザイナーを目指す初心者の方に向けて、プログラミングやWebデザインに関する最新ニュースや、受講生インタビュー、講義レポートなどを発信しています。">
    <meta property="og:locale" content="ja_JP">

    <!-- TwitterOGP -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="@infratop" />
    <meta name="twitter:title" content="継続率No.1！プログラミング学習ならインフラトップ-公式ブログ">
    <meta name="twitter:description" content="Webスク・WebCampを運営する株式会社インフラトップの公式ブログです。エンジニア・Webデザイナーを目指す初心者の方に向けて、プログラミングやWebデザインに関する最新ニュースや、受講生インタビュー、講義レポートなどを発信しています。" />
    <meta name="twitter:image" content="<?php echo get_template_directory_uri(); ?>/img/ogp-tw.png">
    <meta name="twitter:url" content="<?php echo home_url('/'); ?>">
  <?php endif; ?>

  <!-- 20170113 追加 -->
  <script type="text/javascript" class="microad_blade_track">
  <!--
  var microad_blade_jp = microad_blade_jp || { 'params' : new Array(), 'complete_map' : new Object() };
  (function() {
  var param = {'co_account_id' : '15540', 'group_id' : '', 'country_id' : '1', 'ver' : '2.1.0'};
  microad_blade_jp.params.push(param);
  var src = (location.protocol == 'https:')
  ? 'https://d-cache.microad.jp/js/blade_track_jp.js' : 'http://d-cache.microad.jp/js/blade_track_jp.js';
  var bs = document.createElement('script');
  bs.type = 'text/javascript'; bs.async = true;
  bs.charset = 'utf-8'; bs.src = src;
  var s = document.getElementsByTagName('script')[0];
  s.parentNode.insertBefore(bs, s);
  })();
  -->
  </script>
  <!-- /20170113 追加 -->

  <!-- Facebook Pixel Code -->
  <script>
  !function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
  n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
  document,'script','https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '939573686066562'); // Insert your pixel ID here.
  fbq('track', 'PageView');
  </script>
  <noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=939573686066562&ev=PageView&noscript=1"
  /></noscript>
  <!-- DO NOT MODIFY -->
  <!-- End Facebook Pixel Code -->

</head>

<?php
if(is_single()) : ?>
  <body class="single">
<?php else : ?>
  <body class="home">
<?php endif; ?>
<div class="wrapper">
<div id="headerRes__bodyWrapper--menu_open" class="headerRes__bodyWrapper--menu_open"></div>
<header class="header wow fadeInDownBig">
  <div class="header__top w-1100">
    <h2 class="header__copy">学びと仕事を通して、人生を「最高の物語」にする。</h2>
    <div class="header__sns">
      <a target="_blank" href="https://twitter.com/infratop">
        <span class="fa-stack fa-lg header__twitter">
          <i class="fa fa-square fa-stack-2x"></i>
          <i class="fa fa-twitter-square fa-stack-2x"></i>
        </span>
      </a>
      <a target="_blank" href="https://www.facebook.com/infra.top.no1">
        <span class="fa-stack fa-lg header__facebook">
          <i class="fa fa-square fa-stack-2x"></i>
          <i class="fa fa-facebook-square fa-stack-2x"></i>
        </span>
      </a>
    </div>
  </div>
  <div class="header__bottom">
    <div class="w-1100">
      <ul class="header__list clearfix">
        <li class="header__listItem"><a href="<?php echo get_tag_link(78); ?>">ニュース</a></li>
        <li class="header__listItem"><a href="<?php echo get_tag_link(48); ?>">イベント</a></li>
        <li class="header__listItem"><a href="<?php echo get_tag_link(61); ?>">インタビュー</a></li>
        <li class="header__listItem"><a href="<?php echo get_tag_link(46); ?>">就活</a></li>
        <li class="header__listItem"><i class="fa fa-bars"></i> MENU</a>
          <ul>
            <li class="header__menuItem"><a target="_blank" href="http://infratop.jp/about.php">会社概要</a></li>
            <li class="header__menuItem"><a target="_blank" href="http://infratop.jp/member.php">メンバー</a></li>
            <li class="header__menuItem"><a target="_blank" href="http://infratop.jp/corporation.php#footer">制作実績</a></li>
            <li class="header__menuItem"><a target="_blank" href="http://infratop.jp/service/">サービス</a></li>
            <li class="header__menuItem"><a target="_blank" href="https://www.wantedly.com/companies/infratop3">採用情報</a></li>
            <li class="header__menuItem"><a target="_blank" href="http://infratop.jp/contact/">お問い合わせ</a></li>
          </ul>
        </li>
        <li class="header__listItem"><span target="_blank" id="header__listLinkMenu" class="header__listLink"><i class="fa fa-bars"></i> MENU</span></li>
      </ul>
    </div>
  </div>
  <div class="w-1100">
    <div class="header__logo">
      <a href="<?php echo home_url('/'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/infratop-magazine-logo.png" alt="Infratop magazine"></a>
    </div>
  </div>
</header>
<header class="headerRes clearfix">
  <div class="w-1100">
    <a href="<?php echo home_url('/'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/infratop-magazine-logo_sp.png" alt="" class="header__logoOrange headerRes__logo"></a>
    <a href="<?php echo home_url('/'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/infratop-logo_white.png" alt="Infratop magazine" class="header__logoWhite headerRes__logo"></a>
  </div>
  <i id="button" class="fa fa-bars headerRes__bars" aria-hidden="true"></i>
  <div id="headerRes__bodyWrapper--search_active" class="headerRes__bodyWrapper--search_active">
    <div class="clearfix"><p id="headerRes__closeSearch" class="headerRes__closeSearch">×</p></div>
    <div class="headerRes__searchformWrapper">
      <form action="<?php echo home_url('/'); ?>">
        <input class="headerRes__searchform" type="search" placeholder="Search..." name="s">
      </form>
    </div>
  </div>
  <i id="btn" class="fa fa-search headerRes__search" aria-hidden="true"></i>
</header>
<div class="w-1100">
<nav id="headerRes__menu--device_tab" class=" headerRes__menu headerRes__menu--device_tab w-1100">
  <div class="clearfix header__menuList">
    <ul class="headerRes__menuHead">
      <li class="headerRes__menuTitle"><h2>Main</h2></li>
      <li><a href="<?php echo get_tag_link(78); ?>">ニュース</a></li>
      <li><a href="<?php echo get_tag_link(48); ?>">イベント</a></li>
      <li><a href="<?php echo get_tag_link(61); ?>">インタビュー</a></li>
      <li><a href="<?php echo get_tag_link(46); ?>">就活</a></li>
    </ul>
    <ul class="headerRes__menuHead">
      <li class="headerRes__menuTitle"><h2>Category</h2></li>
      <li><a href="<?php echo get_category_link(79); ?>">Infratopの記事一覧</a></li>
      <li><a href="<?php echo get_category_link(15); ?>">Webスクの記事一覧</a></li>
      <li><a href="<?php echo get_category_link(38); ?>">WebCampの記事一覧</a></li>
    </ul>
    <ul class="headerRes__menuHead">
      <li class="headerRes__menuTitle"><h2>Information</h2></li>
      <li><a target="_blank" href="http://infratop.jp/about.php">会社概要</a></li>
      <li><a target="_blank" href="http://infratop.jp/member.php">メンバー</a></li>
      <li><a target="_blank" href="http://infratop.jp/corporation.php#footer">制作実績</a></li>
      <li><a target="_blank" href="http://infratop.jp/service/">サービス</a></li>
      <li><a target="_blank" href="https://www.wantedly.com/companies/infratop3">採用情報</a></li>
      <li><a target="_blank" href="http://infratop.jp/contact/">お問い合わせ</a></li>
    </ul>
  </div>
</nav>
</div>