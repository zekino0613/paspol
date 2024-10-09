<!DOCTYPE html>
<head>
  <meta charset="UTF-8">
  <title>PAS-POL -旅のモノづくりブランド-｜TABIPPO</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="PAS-POLはTABIPPOのモノづくりブランドです。 ⾃分と世界を繋げる新しい時代のパスポートのようなモノを作りたいと思い、PAS-POLという名前をつけました。">
  <link rel="canonical" href="【正規化するURL】" />
  <meta property="og:url" content="https://pas-pol.jp">
  <meta property="og:title" content="PAS-POL -旅のモノづくりブランド-｜TABIPPO">
  <meta property="og:type" content="website" />
  <meta property="og:site_name" content="PAS-POL -旅のモノづくりブランド-｜TABIPPO">
  <meta name="description" content="PAS-POLはTABIPPOのモノづくりブランドです。 ⾃分と世界を繋げる新しい時代のパスポートのようなモノを作りたいと思い、PAS-POLという名前をつけました。">
  <meta property="og:image" content="https://pas-pol.jp/wp-content/themes/pas-pol/dist/img/ogp.jpg">
  <meta property="fb:app_id" content="【appID】" />
  <meta property="og:locale" content="ja_JP" />
  <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon/favicon.ico">
  <link rel="stylesheet" href="https://kit.fontawesome.com/d4a0aa4940.css" crossorigin="anonymous">
  <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/reset.css">
  <!-- slick/CSS -->
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css">
  <!-- <link rel="stylesheet" href="assets/css/slick/slick.css">
  <link rel="stylesheet" href="assets/css/slick/slick-theme.css"> -->
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <header id="header">
    <div class="header__inner--pc">
      <a href="<?php echo home_url('/'); ?>">
        <h1>
          <img class="header__image" src="<?php echo get_template_directory_uri(); ?>/assets/images/paspol-image/siteLogo-pc@2x.png" alt="ヘッダーロゴ">
        </h1>
      </a>

      <ul class="header__nav">
        <li class="nav_li"><a href="<?php echo home_url('/'); ?>#top">TOP</a></li>
        <li><a href="<?php echo get_post_type_archive_link('product'); ?> ">PRODUCT</li></a>
        <li><a href="<?php echo home_url('/'); ?>#about">ABOUT</li></a>
        <li><a href="<?php echo get_post_type_archive_link('news'); ?> ">NEWS</li></a>
        <li><a href="<?php echo home_url('/contact2/'); ?>">CONTACT</li></a>
      </ul>
    </div><!-- /.header__inner--pc -->

    <div class="header__inner--sp">
      <nav class="hamburger">
        <ul>
          <li><a href="<?php echo home_url('/'); ?>#top">TOP</a></li>
          <li><a href="<?php echo get_post_type_archive_link('product'); ?> ">PRODUCT</li></a>
          <li><a href="<?php echo home_url('/'); ?>#about">ABOUT</li></a>
          <li><a href="<?php echo get_post_type_archive_link('news'); ?> ">NEWS</li></a>
          <li><a href="<?php echo home_url('/contact2/'); ?>">CONTACT</li></a>
        </ul>
      </nav><!-- /.hamburger-menu -->

      <div class="sp-menu">
        <div class="menu">MENU</div><!-- /.menu -->
        <img class="menu-tab" src="<?php echo get_template_directory_uri(); ?>/assets/images/paspol-image/navigation-toggle@2x.png" alt="メニュー画像">
      </div><!-- /.sp-menu -->

    </div><!-- /.header__inner--sp -->

  </header>

