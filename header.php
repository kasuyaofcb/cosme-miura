<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <head prefix="og: https://ogp.me/ns#">
    <meta property="og:url" content="<?php echo home_url('/'); ?>" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="ポートフォリオサイトコスメ">
    <meta property="og:description" content="【web制作】ポートフォリオサイトです。コーディング業務を承っています。コーディングに関して少しでもお困りごとや疑問点などございましたらお気軽にお問い合わせください。" />
    <meta property="og:site_name" content="cosme" />
    <meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/images/KV.png" />
    <meta property="og:locale" content="ja_JP">
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="@mk_craft_tokyo" />

    <link rel="icon" href="<?php echo get_template_directory_uri();?>/images/favicon.jpg" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Noto+Serif+JP:wght@200..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
      rel="stylesheet"
    />
    <title>cosme</title>
  <?php wp_head(); ?>
  </head>

  <body <?php body_class(); ?>>
    <header id="header" class="header">
      <div class="header__inner">
        <h1 class="header__title-logo">
          <a class="header__link-logo" href="#">
          <img
              src="<?php echo get_template_directory_uri();?>/images/logo.png"
              alt="ロゴ"
              width="140"
              height="55"
              decoding="async"
            />
          </a>
        </h1>

        <nav>
          <ul class="header-nav">
            <li class="header-nav__item">
              <a class="header-nav__link" href="#">TOP</a>
            </li>
            <li class="header-nav__item">
              <a
                class="header-nav__link"
                href="https://line.me/ja/"
                target="_blank"
                >公式LINE</a
              >
            </li>
            <li class="header-nav__item">
              <a class="header-nav__link" href="#" >会社概要</a>
            </li>
          </ul>
        </nav>
        <!-- ハンバーガーメニュー -->
        <nav class="bl_hamburger_nav">
          <ul class="bl_hamburger_menu">
            <li class="bl_hamburger_item">
              <a class="bl_hamburger_link" href="#">TOP</a>
            </li>
            <li class="bl_hamburger_item">
              <a
                href="https://line.me/ja/"
                class="bl_hamburger_link"
                target="_blank"
                >公式LINE</a
              >
            </li>
            <li class="bl_hamburger_item">
              <a class="bl_hamburger_link" href="#">会社概要</a>
            </li>
          </ul>
        </nav>

        <div class="bl_hamburger_box">
          <span class="bl_hamburger_line"></span>
          <span class="bl_hamburger_line"></span>
          <span class="bl_hamburger_line"></span>
        </div>
        <!-- /.bl_hamburger_box -->
      </div>
      <!-- /.header__inner -->
    </header>
