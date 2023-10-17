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

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

  <title>Ю-Дент | Стоматологическая клиника в Гомеле</title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<header id="main-header" data-height-onload="66" class="<?php if ($post->post_name === 'services' || $post->post_name === 'specialists' || $post->post_parent !== 0) { echo 'big-header'; } ?>">
  <div class="header-container">
    <div class="burger-menu1 hide-menu">
      <div class="burger-menu-header">
        <div class="close">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/close3.svg" />
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
              <img class="burger-sub opensub active-sub" src="<?php echo get_template_directory_uri(); ?>/assets/img/down-arrow2.svg" /></p>

            <ul class="sub-menu-second">
              <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-108">
                <p><a href="<?php echo get_bloginfo('url'); ?>/service_type/restoration/">Реставрация</a></p>
              </li>
              <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-82">
                <p><a href="<?php echo get_bloginfo('url'); ?>/service_type/prosthetics/">Протезирование</a></p>
              </li>
              <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-83">
                <p><a href="<?php echo get_bloginfo('url'); ?>/service_type/treatment/">Лечение</a></p>
              </li>
              <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-84">
                <p><a href="<?php echo get_bloginfo('url'); ?>/service_type/endodontic-treatment/">Эндодонтическое лечение</a></p>
              </li>
              <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-86">
                <p><a href="<?php echo get_bloginfo('url'); ?>/service_type/veneers/">Виниры</a></p>
              </li>
              <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-87">
                <p><a href="<?php echo get_bloginfo('url'); ?>/service_type/whitening/">Отбеливание зубов</a></p>
              </li>
              <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-88">
                <p><a href="<?php echo get_bloginfo('url'); ?>/service_type/spa/">SPA-уход для зубов</a></p>
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
          <a href="<?php echo get_bloginfo('url'); ?>">
            <div class="first-img">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo_u.svg" alt="logo">
            </div>
            <div class="second-img">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo_dent.svg" alt="logo">
            </div>
          </a>
        </div>
        <div class="mobile-logo">
          <a href="<?php echo get_bloginfo('url'); ?>">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo_mobile.png" alt="logo">
          </a>
        </div>
        <div class="header-address">
          <p>г. Гомель, ул. Кирова 19-2</p>
        </div>
      </div>
      <div class="header-right">
        <div class="header-days">
          <div class="days-left">
            <p>Пн-Пт 8:00-20:00</p>
            <p>Сб 9:00-15:00</p>
          </div>
          <div class="days-right">
            <div class="help-box"></div>
            <div class="pop-helper">
              <div class="helper-header">
                <div class="close">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/close.svg" />
                </div>
              </div>
              <div class="helper-content">
                <div class="text-header">
                  Режим работы на выходные:
                </div>
                <div class="text-main">
                    <?php
                    $time = get_field('time_table','options', false);
                    foreach ($time as $item) {
                        $start_time = substr($item['start_time'],0,-3);
                        $end_time = substr($item['end_time'],0,-3);
                        if (!empty($item['date'])) {
                            $date_month = substr($item['date'],4, 2);
                            $date_day = substr($item['date'],6, 2);
                            if (!empty($start_time) && !empty($end_time)) {
                                echo "<p>$item[day_name] ($date_day.$date_month) $start_time-$end_time</p>";
                            } elseif ($item['day_off'] === '1') {
                                echo "<p>$item[day_name] ($date_day.$date_month) - Выходной</p>";
                            } else {
                                echo "<p>$item[day_name] ($date_day.$date_month)</p>";
                            }
                        } else if (!empty($start_time) && !empty($end_time)) {
                            echo "<p>$item[day_name]  $start_time-$end_time</p>";
                        } elseif ($item['day_off'] === '1') {
                            echo "<p>$item[day_name] - Выходной</p>";
                        } else {
                            echo "<p>$item[day_name]</p>";
                        }
                    }
                    ?>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="header-tel">
          <p><a href="tel:+375447002255">+375 (44) 700-22-55</a></p>
          <p><a href="tel:80232250250">8 (0232) 250-250</a></p>
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
          <a class="link-record" href="#">
          <p>Записаться на прием</p>
          <div class="record-arrow">
            <svg width="8" height="12" viewBox="0 0 8 12" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M2.17695 0.691925L7.09154 5.59193C7.14987 5.65026 7.19109 5.71345 7.2152 5.78151C7.2397 5.84956 7.25195 5.92248 7.25195 6.00026C7.25195 6.07804 7.2397 6.15095 7.2152 6.21901C7.19109 6.28707 7.14987 6.35026 7.09154 6.40859L2.17695 11.3232C2.04084 11.4593 1.8707 11.5273 1.66654 11.5273C1.46237 11.5273 1.28737 11.4544 1.14154 11.3086C0.995704 11.1628 0.922787 10.9926 0.922787 10.7982C0.922787 10.6037 0.995704 10.4336 1.14154 10.2878L5.42904 6.00026L1.14154 1.71276C1.00543 1.57665 0.937369 1.40904 0.937369 1.20993C0.937369 1.01043 1.01029 0.837759 1.15612 0.691926C1.30195 0.546092 1.47209 0.473176 1.66654 0.473176C1.86098 0.473176 2.03112 0.546092 2.17695 0.691925Z" fill="#02111B"/>
            </svg>
          </div>
          </a>
        </div>
      </div>
    </div>

</header>
