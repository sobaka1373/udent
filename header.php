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

  <title>Ю-КЛИНИК | Стоматологический центр в Гомеле</title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<header id="main-header" data-height-onload="66" class="<?php if ($post->post_name === 'services' || $post->post_name === 'specialists' || $post->post_parent !== 0) { echo 'big-header'; } ?>">
    <?php get_template_part('template-parts/header/site-header'); ?>
  <div class="header-row1">
    <?php
        if (!is_front_page() ) {
            $slug = $post->post_name;
            if ($slug === 'services' || $slug === 'specialists' || $post->post_parent !== 0 || $post->post_type === 'doctor_type') {
              echo "<div class=\"header-logo\">";
            } else {
                echo "<div class=\"header-logo\">";
            }
        } else {
            echo "<div class=\"header-logo\">";
        }
    ?>
      <a href="/">
        <img class="logo-hd" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo_hd.svg" alt="logo">
        <img class="logo-sm" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo_sm.svg" alt="logo">
      </a>
    </div>
  <div class="header-container">
    <div class="container-right-header">
      <div class="column-address">
        <p>г. Гомель, ул. Каменщикова 36-4</p>
      </div>
      <div class="column-time">
        <p>
          Пн-Пт 8:30-20:00
        </p>
        <div class="flex">
          <p>Сб-Вс 9:00-19:00</p>
          <div class="header-question"></div>
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
                      if ($start_time && $end_time) {
                          echo "<p>$item[day_name] ($date_day.$date_month) $start_time-$end_time</p>";
                      } else {
                          echo "<p>$item[day_name] ($date_day.$date_month)</p>";
                      }
                  } else {
                      if ($start_time && $end_time) {
                          echo "<p>$item[day_name]  $start_time-$end_time</p>";
                      } else {
                          echo "<p>$item[day_name]</p>";
                      }
                  }
                }
                ?>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="column-tel">
        <p>
          <a href="tel:+375447229911">+375 (44) 722-99-11</a>
        </p>
        <p>
          <a href="tel:+375232339911">+375 (232) 33-99-11</a>
        </p>
      </div>
    </div>
    <nav id="top-menu-nav">
        <?php
        wp_nav_menu(array(
            'theme_location' => 'Top menu',
            'menu_id' => 'top-menu',
            'container' => 'ul',
            'menu_class' => 'nav',
        )); ?>
    </nav>
      <?php
      if (!is_front_page() ) {
          $slug = $post->post_name;
          if ($slug === 'services' || $slug === 'specialists' || $post->post_parent !== 0) {
              $site_map[] = $post->post_title;
              $map_slug[] = $slug;
              $tmp_post = $post;
              if ($tmp_post->post_parent !== 0) {
                  while ($tmp_post->post_parent !== 0) {
                      $tmp_post = get_post($tmp_post->post_parent);
                      $site_map[] = $tmp_post->post_title;
                      $map_slug[] = $tmp_post->post_name;
                  }
              }
              $site_map[] = 'Главная';
              $map_slug[] = '/';
              $site_map = array_reverse($site_map);
              $map_slug = array_reverse($map_slug);
              ?>
            <div class="site-map">
              <p>
                  <?php
                  $link = '/';
                  foreach ($site_map as $key => $item) {
                      if ($key !== 0) {
                          $link = $link . $map_slug[$key] . '/';
                          echo "<img src='" . get_template_directory_uri() . "/assets/img/arrow-menu.svg' />";
                      }

                      echo "<a href='" . $link . "'>" . $item . "</a>";
                  }
                  ?>
              </p>
            </div>
              <?php
          } elseif ($post->post_type === 'doctor_type') {
              $site_map[] = $post->post_title;
              $site_map[] = 'Специалисты';
              $site_map[] = 'Главная';
              $map_slug[] = '/';
              $map_slug[] = '/specialists';
              $map_slug[] = get_post_permalink($post->ID);
              $site_map = array_reverse($site_map);
              ?>
            <div class="site-map">
              <p>
                  <?php
                  $link = '/';
                  foreach ($site_map as $key => $item) {
                      if ($key !== 0) {
                          $link =  $map_slug[$key];
                          echo "<img src='" . get_template_directory_uri() . "/assets/img/arrow-menu.svg' />";
                      }

                      echo "<a href='" . $link . "'>" . $item . "</a>";
                  }
                  ?>
              </p>
            </div>
              <?php
          }
      }
      ?>
  </div>
  <div class="btn-header">
    <div class="btn-round">
      <p class="btn-text">Записаться на прием</p>
    </div>
    <div class="burger-menu-btn">
      <div class="burger-inner">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/burger-btn.svg" />
      </div>
    </div>
  </div>
  <div class="burger-menu hide-menu">
    <div class="burger-menu-header">
      <div class="mobile-logo">
        <a href="/">
          <img class="logo-hd" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo_hd.svg" alt="logo">
          <img class="logo-sm" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo_sm.svg" alt="logo">
        </a>
      </div>
      <div class="mobile-phone">
        <p>
          <a href="tel:+375447229911">+375 (44) 722-99-11</a>
        </p>
      </div>
      <div class="close">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/close.svg" />
      </div>
    </div>
    <nav class="burger-nav">
      <ul id="top-menu" class="nav"><li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-109">
          <p><a href="<?php echo get_bloginfo('url'); ?>/about-us/">О клинике</a></p>
        </li>
        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-107">
          <p class="burger-sub-p"><a href="<?php echo get_bloginfo('url'); ?>/services/">Услуги</a>
            <img class="burger-sub close-sub" src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow-down.svg" /></p>

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
      <p class="address">
        г. Гомель, ул. Каменщикова 36-4
      </p>
      <div class="time">
        <p>
          Пн-Пт 8:30-20:00
          Сб-Вс 9:00-19:00
        </p>
        <div class="header-question">
        </div>
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
                        echo "<p>$item[day_name] ($date_day.$date_month) $start_time-$end_time</p>";
                    } else {
                        echo "<p>$item[day_name]  $start_time-$end_time</p>";
                    }
                }
                ?>
            </div>
          </div>
        </div>
      </div>
      <div class="social-icons">
        <div class="footer-row">
          <div class="footer-inst">
            <a href="https://www.instagram.com/u_klinik_gomel/" class="inst-svg">
              <svg width="35" height="35" viewBox="0 0 35 35" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M8.33053 0.0697607C7.1841 0.201237 5.84171 0.645371 4.81536 1.23281C2.16243 2.75111 0.411927 5.40648 0.0757145 8.42217C-0.0252382 9.32801 -0.0252382 25.6614 0.0757145 26.5673C0.565783 30.963 4.03577 34.434 8.43018 34.9243C9.33575 35.0252 25.6642 35.0252 26.5698 34.9243C30.9642 34.434 34.4342 30.963 34.9243 26.5673C35.0252 25.6614 35.0252 9.32801 34.9243 8.42217C34.4342 4.02643 30.9642 0.555396 26.5698 0.0651799C25.7655 -0.0245222 9.11628 -0.0203516 8.33053 0.0697607ZM28.0942 4.65632C29.1199 4.96406 29.9027 5.86388 30.077 6.93573C30.283 8.20133 29.5114 9.51958 28.2937 9.98238C27.2532 10.3778 26.0165 10.0946 25.2624 9.28822C23.6839 7.60015 24.6663 4.87039 26.9664 4.55322C27.2375 4.51582 27.796 4.5669 28.0942 4.65632ZM27.1031 6.60591C26.8837 6.65595 26.5956 6.97121 26.5508 7.2103C26.4579 7.70571 26.9443 8.19224 27.4396 8.09932C27.7696 8.03738 28.0445 7.71611 28.0445 7.39244C28.0445 7.24715 28.0085 7.06091 27.9644 6.97859C27.8225 6.71339 27.4116 6.53555 27.1031 6.60591ZM18.757 8.02459C20.8714 8.30608 22.7002 9.21684 24.2389 10.7545C28.0004 14.5134 28.0004 20.4731 24.2389 24.2357C20.4773 27.9985 14.5227 27.9985 10.761 24.2357C6.99955 20.4731 6.99955 14.5134 10.761 10.7545C12.9121 8.60492 15.7746 7.62764 18.757 8.02459ZM16.3653 10.0735C14.7748 10.3207 13.3498 11.0468 12.2019 12.1951C9.26029 15.1376 9.26029 19.8519 12.2019 22.7944C12.5045 23.0971 13.0135 23.5188 13.3331 23.7314C16.3323 25.7277 20.2538 25.3395 22.7981 22.7944C25.7397 19.8519 25.7397 15.1376 22.7981 12.1951C21.096 10.4924 18.7176 9.70801 16.3653 10.0735Z" fill="#808080"/>
              </svg>
            </a>
          </div>
          <div class="footer-email">
            <a href="mailto:info@u-clinic.by" class="email-svg">
              <svg width="47" height="29" viewBox="0 0 47 29" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M1.97686 0.582237C2.02484 0.627544 6.88674 3.81144 12.7811 7.65774L23.4982 14.6509L34.2468 7.65017C40.1586 3.79973 45.0347 0.615834 45.0826 0.574671C45.1306 0.533597 35.4317 0.5 23.5297 0.5C10.47 0.5 1.9243 0.532607 1.97686 0.582237ZM0 14.5526V26.5442L0.210529 26.38C0.689839 26.0061 15.87 13.0072 15.87 12.9705C15.87 12.9392 0.570768 2.89648 0.114667 2.62842C0.0232087 2.57465 0 4.98347 0 14.5526ZM39.0328 7.76168C34.7442 10.5597 31.2014 12.8824 31.1599 12.9231C31.1037 12.9783 45.5203 25.4166 46.757 26.38L46.9677 26.5442V14.603C46.9677 8.03533 46.9368 2.66454 46.8989 2.66806C46.8611 2.67148 43.3213 4.96366 39.0328 7.76168ZM10.0945 21.5172L1.97989 28.4677L12.7318 28.4905C18.6455 28.5032 28.3222 28.5032 34.2357 28.4905L44.9876 28.4677L36.9189 21.5726C32.4812 17.7802 28.8009 14.6479 28.7405 14.612C28.6751 14.5731 27.7388 15.1291 26.4263 15.9862C25.2139 16.7779 24.0558 17.4696 23.8529 17.5233C23.588 17.5933 23.3798 17.5933 23.1148 17.5233C22.9119 17.4696 21.7554 16.779 20.5451 15.9885C19.3347 15.1981 18.3139 14.5548 18.2768 14.559C18.2395 14.5632 14.5576 17.6944 10.0945 21.5172Z" fill="#808080"/>
              </svg>
            </a>
          </div>
          <div class="footer-whatsapp">
            <a href="#" class="whatsapp-svg">
              <svg width="36" height="35" viewBox="0 0 36 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M17.7676 0.0192431C17.6358 0.0345708 17.2354 0.0804854 16.8777 0.121336C14.4071 0.403325 11.8292 1.34851 9.67559 2.76201C5.50566 5.49876 2.76757 9.87317 2.12568 14.8239C1.99898 15.801 1.97912 17.8262 2.08708 18.765C2.30537 20.6645 2.81303 22.4974 3.57211 24.1273L3.87173 24.7705L2.42312 28.883C1.12619 32.5647 0.973811 33.0426 0.968335 33.4455C0.962996 33.8332 0.990925 33.9422 1.16932 34.2307C1.43827 34.6654 1.90417 34.9591 2.3856 34.9973C2.70905 35.0229 3.13148 34.8891 6.95921 33.5484L11.1764 32.0714L11.7711 32.3499C17.9537 35.246 25.3124 34.1401 30.3864 29.552C32.837 27.3362 34.6028 24.4189 35.4298 21.2196C36.638 16.5465 35.7878 11.5272 33.1136 7.54583C30.3911 3.49261 26.2678 0.896411 21.3614 0.146176C20.7087 0.0464087 18.2735 -0.0396727 17.7676 0.0192431ZM14.6187 7.98212C15.0435 8.19636 17.5572 10.6958 17.8042 11.1495C18.0519 11.6044 18.1036 12.2105 17.9374 12.7107C17.8411 13.0006 17.6907 13.2052 17.2059 13.7062L16.5954 14.3369L16.9823 14.9621C17.9816 16.5768 19.3723 17.967 20.9876 18.9658L21.6131 19.3526L22.2441 18.7424C22.7453 18.2578 22.9499 18.1074 23.2399 18.0112C23.7403 17.845 24.3467 17.8967 24.8018 18.1443C25.2566 18.3918 27.7564 20.9044 27.9697 21.3286C28.2009 21.7881 28.2257 22.4198 28.0331 22.9366C27.8961 23.3037 27.7559 23.4711 26.7085 24.5174C25.5008 25.7239 25.1469 25.9907 24.5284 26.1613C24.0853 26.2835 23.0845 26.2977 22.5012 26.1901C20.8804 25.8912 18.8529 24.8407 16.7408 23.2053C15.728 22.4211 13.5257 20.2197 12.7412 19.2073C10.018 15.6928 9.06272 12.6959 10.0483 10.7586C10.1254 10.607 10.7309 9.94023 11.3939 9.2771C12.42 8.25069 12.6553 8.04952 12.9758 7.92498C13.4709 7.7327 14.1725 7.75706 14.6187 7.98212ZM12.7905 10.8078C11.6358 11.9675 11.6005 12.0427 11.7646 12.9933C12.0931 14.8959 13.7393 17.509 16.0895 19.8583C18.4398 22.2077 21.0538 23.8532 22.9572 24.1816C23.9082 24.3456 23.9834 24.3103 25.1435 23.1561L26.1191 22.1856L25.0417 21.107C24.4491 20.5138 23.935 20.0285 23.8993 20.0285C23.8635 20.0285 23.5519 20.3053 23.2066 20.6437C22.503 21.3335 22.2215 21.4857 21.6553 21.4822C21.3214 21.4801 21.1775 21.4325 20.6628 21.1534C18.1904 19.8129 16.135 17.7582 14.794 15.2869C14.5147 14.7723 14.4671 14.6285 14.465 14.2947C14.4615 13.7288 14.6138 13.4473 15.3039 12.744C15.6424 12.3989 15.9193 12.0873 15.9193 12.0516C15.9193 12.0159 15.4338 11.502 14.8404 10.9096L13.7614 9.83266L12.7905 10.8078Z" fill="#808080"/>
              </svg>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>
<div class="mobile-block">
    <?php
    if (!is_front_page() ) {
        $slug = $post->post_name;
        if ($slug === 'services' || $slug === 'specialists' || $post->post_parent !== 0) {
            ?>
          <div class="burger-map">
            <p>
                <?php
                $link = '/';
                foreach ($site_map as $key => $item) {
                    if ($key !== 0) {
                        $link = $link . $map_slug[$key] . '/';
                        echo "<img src='" . get_template_directory_uri() . "/assets/img/burger-arrow.svg' />";
                    }

                    echo "<p><a href='" . $link . "'>" . $item . "</a></p>";
                }
                ?>
            </p>
          </div>
            <?php
        } elseif ($post->post_type === 'doctor_type') {
            ?>
          <div class="burger-map">
            <p>
                <?php
                $link = '/';
                foreach ($site_map as $key => $item) {
                    if ($key !== 0) {
                        $link =  $map_slug[$key];
                        echo "<img src='" . get_template_directory_uri() . "/assets/img/burger-arrow.svg' />";
                    }

                    echo "<p><a href='" . $link . "'>" . $item . "</a></p>";
                }
                ?>
            </p>
          </div>
            <?php
        }
    }
    ?>
</div>
<div class="pop-it-record">
  <div class="record-header">
    <div class="close">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/close.svg" />
    </div>
  </div>
  <div class="record-content">
    <p class="record-h1">
      Записаться на прием можно по номеру:
    </p>
    <div class="phone-numbers">
      <div class="flex">
        <a href="tel:+375447229911">
          <img src='<?php echo get_template_directory_uri(); ?>/assets/img/noun-phone.svg' />
          <p>+375 (44) 722-99-11</p>
        </a>
      </div>
      <div class="flex">
        <a href="tel:+375232339911">
          <img src='<?php echo get_template_directory_uri(); ?>/assets/img/noun-phone-2.svg' />
          <p>+375 (232) 33-99-11</p>
        </a>
      </div>
    </div>
    <div class="record-text">
      <p>Мы находимся по адресу:</p>
      <p>г. Гомель, ул. Каменщикова 36-4</p>
    </div>
    <p class="record-h1">
      Ждем Вас!
    </p>
  </div>
</div>