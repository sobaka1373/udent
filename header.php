<?php
/**
 * Header file for the pgberlin WordPress default theme.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage pgberlin
 * @since pgberlin 1.0
 */

global $post;
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/logo_hd.ico" type="image/x-icon" />
  <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/logo_hd.ico" type="image/x-icon" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/g/jquery.owlcarousel@1.31(owl.carousel.css+owl.theme.css)">
  <script src="https://cdn.jsdelivr.net/g/jquery@2.2.4,jquery.owlcarousel@1.31"></script>

  <script src="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js"></script>
  <link href="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css" rel="stylesheet"/>
  <link href="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick-theme.css" rel="stylesheet"/>

  <title>Ю-Дент | Стоматологический центр в Гомеле</title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<header id="main-header" data-height-onload="66" class="<?php if ($post->post_name === 'services' || $post->post_name === 'specialists' || $post->post_parent !== 0) { echo 'big-header'; } ?>">
  <div class="header-container">
    <div class="burger-menu1 hide-menu">
      <div class="burger-menu-header">
        <div class="close">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/close.svg" />
        </div>
      </div>
<!--      <nav id="top-menu-nav">-->
<!--          --><?php
//          wp_nav_menu(array(
//              'theme_location' => 'Top menu',
//              'menu_id' => 'top-menu',
//              'container' => 'ul',
//              'menu_class' => 'nav',
//          )); ?>
<!--      </nav>-->
      <nav id="top-menu-nav" class="nav">
        <ul id="top-menu" class="nav"><li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-109">
            <p><a href="<?php echo get_bloginfo('url'); ?>/about-us/">О клинике</a></p>
          </li>
          <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-107">
            <p class="burger-sub-p"><a href="<?php echo get_bloginfo('url'); ?>/services/">Услуги</a>
              <img class="burger-sub close-sub" src="<?php echo get_template_directory_uri(); ?>/assets/img/down-arrow.svg" /></p>

            <ul class="sub-menu-second">
              <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-108">
                <p><a href="<?php echo get_bloginfo('url'); ?>/services/implatation/">Имплантация</a></p>
              </li>
              <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-82">
                <p><a href="<?php echo get_bloginfo('url'); ?>/services/protezirovanie/">Протезирование</a></p>
              </li>
              <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-83">
                <p><a href="<?php echo get_bloginfo('url'); ?>/services/treatment/">Лечение под микроскопом</a></p>
              </li>
              <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-84">
                <p><a href="<?php echo get_bloginfo('url'); ?>/services/bite-correction/">Исправление прикуса</a></p>
              </li>
              <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-86">
                <p><a href="<?php echo get_bloginfo('url'); ?>/services/rentgen/">Рентген-диагностика</a></p>
              </li>
              <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-87">
                <p><a href="<?php echo get_bloginfo('url'); ?>/services/whitening/">Отбеливание зубов</a></p>
              </li>
              <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-88">
                <p><a href="<?php echo get_bloginfo('url'); ?>/services/spa/">SPA-уход для зубов</a></p>
              </li>
              <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-89">
                <p><a href="<?php echo get_bloginfo('url'); ?>/services/insurance">Стоматология по страховке</a></p>
              </li>
            </ul>
          </li>
          <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-50">
            <p><a href="<?php echo get_bloginfo('url'); ?>/specialists/">специалисты</a></p>
          </li>
          <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-52">
            <p><a href="<?php echo get_bloginfo('url'); ?>/price/">цены</a></p>
          </li>
          <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-49">
            <p><a href="<?php echo get_bloginfo('url'); ?>/achiv/">Наши достижения</a></p>
          </li>
          <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-53">
            <p><a href="<?php echo get_bloginfo('url'); ?>/contact/">контакты</a></p>
          </li>
        </ul>
      </nav>
      <div class="burger-footer">

      </div>
    </div>
    <div class="first-row">
      <div class="header-left">
        <div class="logo">
          <div class="first-img">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo_u.svg" alt="logo">
          </div>
          <div class="second-img">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo_dent.svg" alt="logo">
          </div>
        </div>
        <div class="header-address">
          <p>г. Гомель, ул. Кирова 19-2</p>
        </div>
      </div>
      <div class="header-right">
        <div class="header-days">
          <div class="days-left">
            <p>Пн-Пт 8:00-20:00</p>
            <p>Сб-Вс 9:00-15:00</p>
          </div>
          <div class="days-right">
            <div class="help-box"></div>
          </div>
        </div>
        <div class="header-tel">
          <p>+375 (44) 700-22-55</p>
          <p>8 (0232) 250-250</p>
        </div>
      </div>
      <div class="burger-menu">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/burger-btn.svg" />
      </div>
    </div>
    <div class="second-row">
      <div class="header-left">
        <nav id="top-menu-nav">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'Top menu',
                'menu_id' => 'top-menu',
                'container' => 'ul',
                'menu_class' => 'nav',
            )); ?>
        </nav>
      </div>
      <div class="header-right">
        <div class="header-btn">
          <p>Записаться на прием</p>
          <div class="record-arrow">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/right-arrow.svg">
          </div>
        </div>
      </div>
    </div>

</header>
