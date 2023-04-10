<?php /* Template Name: MainPage */ ?>

<?php get_header(); ?>

<div class="main-page-container">

    <div class="intro-main">
        <div class="left header">
            <p>
                Cтоматологический центр диагностики и лечения зубов в Гомеле
            </p>
        </div>
        <div class="right">
          <div class="intro-text">
            <p>
              Качественное лечение и протезирование зубов в г.Гомеле
            </p>
          </div>
          <div class="intro-btn">
            <div class="btn-record" data-mdb-toggle="modal" data-mdb-target="#exampleModal">
              <p>Записаться на прием</p>
              <div class="record-arrow">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/right-arrow.svg">
              </div>
            </div>
          </div>
        </div>
    </div>

    <div class="hero-img">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/main-hero.png">
    </div>

    <div class="virtual-container">
      <div class="left">
        <div class="virtual-header header">
          <p>
            Виртуальный тур<br>
            по клинике
          </p>
        </div>
        <div class="virtual-description">
          <p>
            Онлайн тур поможет Вам познакомиться с нами ближе. Поэтому, придя на приём, Вы будете чувствовать себя комфортно и уверенно.
          </p>
        </div>
        <div class="virtual-btn">
          <a href="/about-us/">
          <p>Узнать больше</p>
            <div class="record-arrow">
              <svg width="8" height="12" viewBox="0 0 8 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M2.17695 0.691925L7.09154 5.59193C7.14987 5.65026 7.19109 5.71345 7.2152 5.78151C7.2397 5.84956 7.25195 5.92248 7.25195 6.00026C7.25195 6.07804 7.2397 6.15095 7.2152 6.21901C7.19109 6.28707 7.14987 6.35026 7.09154 6.40859L2.17695 11.3232C2.04084 11.4593 1.8707 11.5273 1.66654 11.5273C1.46237 11.5273 1.28737 11.4544 1.14154 11.3086C0.995704 11.1628 0.922787 10.9926 0.922787 10.7982C0.922787 10.6037 0.995704 10.4336 1.14154 10.2878L5.42904 6.00026L1.14154 1.71276C1.00543 1.57665 0.937369 1.40904 0.937369 1.20993C0.937369 1.01043 1.01029 0.837759 1.15612 0.691926C1.30195 0.546092 1.47209 0.473176 1.66654 0.473176C1.86098 0.473176 2.03112 0.546092 2.17695 0.691925Z" fill="#02111B"/>
              </svg>
            </div>
          </a>
        </div>
      </div>
      <div class="right">
        <iframe src="https://gomel-3d.by/Tours/udent/index.html" frameborder="0" width="652" height="383"></iframe>
      </div>
    </div>

    <div class="services-container">
      <div class="services-header header">
        <p>
          Услуги клиники
        </p>
      </div>
      <div class="services-points">
        <div class="row">
          <div class="service-element">
            <a href="<?php echo get_bloginfo('url'); ?>/service_type/restoration/">
              <div class="left">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/service1.svg">
              </div>
              <div class="right">
                <p>
                  Реставрация
                </p>
              </div>
            </a>
          </div>
          <div class="service-element">
            <a href="<?php echo get_bloginfo('url'); ?>/service_type/prosthetics/">
              <div class="left">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/service2.svg">
              </div>
              <div class="right">
                <p>
                  Протезирование
                </p>
              </div>
            </a>
          </div>
          <div class="service-element">
            <a href="<?php echo get_bloginfo('url'); ?>/service_type/treatment/">
              <div class="left">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/service3.svg">
              </div>
              <div class="right">
                <p>
                  Лечение
                </p>
              </div>
            </a>
          </div>
          <div class="service-element">
            <a href="<?php echo get_bloginfo('url'); ?>/service_type/endodontic-treatment/">
              <div class="left-new">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/service4.svg">
              </div>
              <div class="right-new">
                <p>
                  Эндодонтическое лечение
                </p>
              </div>
            </a>
          </div>
        </div>
        <div class="row">
          <div class="service-element">
            <a href="<?php echo get_bloginfo('url'); ?>/service_type/veneers/">
              <div class="left">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/service5.svg">
              </div>
              <div class="right-new2">
                <p>
                  Виниры
                </p>
              </div>
            </a>
          </div>
          <div class="service-element">
            <a href="<?php echo get_bloginfo('url'); ?>/service_type/whitening/">
              <div class="left">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/service6.svg">
              </div>
              <div class="right">
                <p>
                  Отбеливание зубов
                </p>
              </div>
            </a>
          </div>
          <div class="service-element">
            <a href="<?php echo get_bloginfo('url'); ?>/service_type/spa/">
              <div class="left">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/service7.svg">
              </div>
              <div class="right">
                <p>
                  SPA-уход <br> для зубов
                </p>
              </div>
            </a>
          </div>
          <div class="service-element">
            <a href="/services/">
              <div class="virtual-btn">
                <p>подробнее</p>
                <div class="record-arrow">
                  <svg width="8" height="12" viewBox="0 0 8 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M2.17695 0.691925L7.09154 5.59193C7.14987 5.65026 7.19109 5.71345 7.2152 5.78151C7.2397 5.84956 7.25195 5.92248 7.25195 6.00026C7.25195 6.07804 7.2397 6.15095 7.2152 6.21901C7.19109 6.28707 7.14987 6.35026 7.09154 6.40859L2.17695 11.3232C2.04084 11.4593 1.8707 11.5273 1.66654 11.5273C1.46237 11.5273 1.28737 11.4544 1.14154 11.3086C0.995704 11.1628 0.922787 10.9926 0.922787 10.7982C0.922787 10.6037 0.995704 10.4336 1.14154 10.2878L5.42904 6.00026L1.14154 1.71276C1.00543 1.57665 0.937369 1.40904 0.937369 1.20993C0.937369 1.01043 1.01029 0.837759 1.15612 0.691926C1.30195 0.546092 1.47209 0.473176 1.66654 0.473176C1.86098 0.473176 2.03112 0.546092 2.17695 0.691925Z" fill="#02111B"/>
                  </svg>
                </div>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>

    <div class="doctors-container">
      <div class="doctors-header header">
        <p>
          У нас работают профессионалы
        </p>
        <div class="virtual-btn">
          <a href="/specialists/">
            <p>Узнать больше</p>
            <div class="record-arrow">
              <svg width="8" height="12" viewBox="0 0 8 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M2.17695 0.691925L7.09154 5.59193C7.14987 5.65026 7.19109 5.71345 7.2152 5.78151C7.2397 5.84956 7.25195 5.92248 7.25195 6.00026C7.25195 6.07804 7.2397 6.15095 7.2152 6.21901C7.19109 6.28707 7.14987 6.35026 7.09154 6.40859L2.17695 11.3232C2.04084 11.4593 1.8707 11.5273 1.66654 11.5273C1.46237 11.5273 1.28737 11.4544 1.14154 11.3086C0.995704 11.1628 0.922787 10.9926 0.922787 10.7982C0.922787 10.6037 0.995704 10.4336 1.14154 10.2878L5.42904 6.00026L1.14154 1.71276C1.00543 1.57665 0.937369 1.40904 0.937369 1.20993C0.937369 1.01043 1.01029 0.837759 1.15612 0.691926C1.30195 0.546092 1.47209 0.473176 1.66654 0.473176C1.86098 0.473176 2.03112 0.546092 2.17695 0.691925Z" fill="#02111B"/>
              </svg>
            </div>
          </a>
        </div>
      </div>
        <?php
        $args = [
            'post_type' => 'doctor_type'
        ];
        $new_doctors = get_posts($args);
        $rand_keys = array_rand($new_doctors, 3);

        $doctor = [];
        for ($i = 0, $iMax = count($rand_keys); $i < $iMax; $i++) {
            $post = $new_doctors[$rand_keys[$i]];
            $doctor[$i]['name'] = get_field('doctor_name', $post->ID, false);
            $doctor[$i]['specialization'] = get_field('doctor_specialization', $post->ID, false);
            $doctor[$i]['qualification'] = get_field('doctor_qualification', $post->ID, false);
            $doctor[$i]['photo'] = get_field('doctor_small_photo', $post->ID, false);
            $doctor[$i]['photo'] = wp_get_attachment_image_src($doctor[$i]['photo'], 'full');
            $doctor[$i]['link'] = get_field('doctor_link', $post->ID, false);
        }
        ?>
      <div class="doctors-block-grid">
        <a href="<?php echo $doctor[0]['link']; ?>">
          <div class="item-container"  style="background-image: url(<?php echo $doctor[0]['photo'][0]; ?>)">
            <div class="info-doctor">
              <div class="doctor-name">
                <p><?php echo $doctor[0]['name']; ?></p>
              </div>
              <div class="doctor-specialization">
                 <p><?php echo $doctor[0]['specialization']; ?></p>
               </div>
               <div class="doctor-prof-category">
                 <p><?php echo $doctor[0]['qualification']; ?></p>
               </div>
            </div>
          </div>
        </a>
        <a href="<?php echo $doctor[1]['link']; ?>">
          <div class="item-container"  style="background-image: url(<?php echo $doctor[1]['photo'][0]; ?>)">
            <div class="info-doctor">
              <div class="doctor-name">
                <p><?php echo $doctor[1]['name']; ?></p>
              </div>
              <div class="doctor-specialization">
                <p><?php echo $doctor[1]['specialization']; ?></p>
              </div>
              <div class="doctor-prof-category">
                <p><?php echo $doctor[1]['qualification']; ?></p>
              </div>
            </div>
          </div>
        </a>
        <a href="<?php echo $doctor[2]['link']; ?>">
          <div class="item-container"  style="background-image: url(<?php echo $doctor[2]['photo'][0]; ?>)">
            <div class="info-doctor">
              <div class="doctor-name">
                <p><?php echo $doctor[2]['name']; ?></p>
              </div>
              <div class="doctor-specialization">
                <p><?php echo $doctor[2]['specialization']; ?></p>
              </div>
              <div class="doctor-prof-category">
                <p><?php echo $doctor[2]['qualification']; ?></p>
              </div>
            </div>
          </div>
        </a>
      </div>
      <div class="mobile-link">
        <a href="/specialists">
          <p>
            все специалисты
          </p>
          <div class="record-arrow">
            <svg width="8" height="12" viewBox="0 0 8 12" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M2.17695 0.691925L7.09154 5.59193C7.14987 5.65026 7.19109 5.71345 7.2152 5.78151C7.2397 5.84956 7.25195 5.92248 7.25195 6.00026C7.25195 6.07804 7.2397 6.15095 7.2152 6.21901C7.19109 6.28707 7.14987 6.35026 7.09154 6.40859L2.17695 11.3232C2.04084 11.4593 1.8707 11.5273 1.66654 11.5273C1.46237 11.5273 1.28737 11.4544 1.14154 11.3086C0.995704 11.1628 0.922787 10.9926 0.922787 10.7982C0.922787 10.6037 0.995704 10.4336 1.14154 10.2878L5.42904 6.00026L1.14154 1.71276C1.00543 1.57665 0.937369 1.40904 0.937369 1.20993C0.937369 1.01043 1.01029 0.837759 1.15612 0.691926C1.30195 0.546092 1.47209 0.473176 1.66654 0.473176C1.86098 0.473176 2.03112 0.546092 2.17695 0.691925Z" fill="#02111B"/>
            </svg>
          </div>
        </a>
      </div>
    </div>

    <div class="about-us-container">
      <div class="about-us-header header">
        <p>
          О нашей клинике
        </p>
      </div>
      <div class="about-us-info-container">
        <div class="left">
          <div class="list-container">
            <div class="element">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/li-img.svg">
              <p>
                Гарантия качества предоставляемых услуг
              </p>
            </div>
            <div class="element">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/li-img.svg">
              <p>
                Высококвалифицированные специалисты
              </p>
            </div>
            <div class="element">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/li-img.svg">
              <p>
                Оборудование и материалы мировых производителей
              </p>
            </div>
            <div class="element">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/li-img.svg">
              <p>
                Комфортный сервис
              </p>
            </div>
          </div>
        </div>
        <div class="right">
          <div class="about-us-info-text">
            <p>
              В нашей клинике работают только квалифицированные стоматологи с многолетним опытом работы.
              Это влюблённые в свою профессию специалисты, которые ежедневно используют в работе
              накопленный годами опыт, приобретенные знания и навыки.<br>
              Мы искренне заботимся о каждом своём пациенте.
            </p>
          </div>
          <div class="virtual-btn">
            <a href="/about-us/">
              <p>подробнее о клинике</p>
              <div class="record-arrow">
                <svg width="8" height="12" viewBox="0 0 8 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M2.17695 0.691925L7.09154 5.59193C7.14987 5.65026 7.19109 5.71345 7.2152 5.78151C7.2397 5.84956 7.25195 5.92248 7.25195 6.00026C7.25195 6.07804 7.2397 6.15095 7.2152 6.21901C7.19109 6.28707 7.14987 6.35026 7.09154 6.40859L2.17695 11.3232C2.04084 11.4593 1.8707 11.5273 1.66654 11.5273C1.46237 11.5273 1.28737 11.4544 1.14154 11.3086C0.995704 11.1628 0.922787 10.9926 0.922787 10.7982C0.922787 10.6037 0.995704 10.4336 1.14154 10.2878L5.42904 6.00026L1.14154 1.71276C1.00543 1.57665 0.937369 1.40904 0.937369 1.20993C0.937369 1.01043 1.01029 0.837759 1.15612 0.691926C1.30195 0.546092 1.47209 0.473176 1.66654 0.473176C1.86098 0.473176 2.03112 0.546092 2.17695 0.691925Z" fill="#02111B"/>
                </svg>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>

    <div class="instagram-container">
      <div class="row">
        <div class="element">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/instagram1.png">
        </div>
        <div class="element">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/instagram2.png">
        </div>
        <div class="element">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/instagram3.png">
        </div>
        <div class="element">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/instagram4.png">
        </div>
        <div class="element">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/instagram5.png">
        </div>
        <div class="element-mobile">
          <div class="virtual-btn">
            <a href="#">
              <p>подробнее о клинике</p>
              <div class="record-arrow">
                <svg width="8" height="12" viewBox="0 0 8 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M2.17695 0.691925L7.09154 5.59193C7.14987 5.65026 7.19109 5.71345 7.2152 5.78151C7.2397 5.84956 7.25195 5.92248 7.25195 6.00026C7.25195 6.07804 7.2397 6.15095 7.2152 6.21901C7.19109 6.28707 7.14987 6.35026 7.09154 6.40859L2.17695 11.3232C2.04084 11.4593 1.8707 11.5273 1.66654 11.5273C1.46237 11.5273 1.28737 11.4544 1.14154 11.3086C0.995704 11.1628 0.922787 10.9926 0.922787 10.7982C0.922787 10.6037 0.995704 10.4336 1.14154 10.2878L5.42904 6.00026L1.14154 1.71276C1.00543 1.57665 0.937369 1.40904 0.937369 1.20993C0.937369 1.01043 1.01029 0.837759 1.15612 0.691926C1.30195 0.546092 1.47209 0.473176 1.66654 0.473176C1.86098 0.473176 2.03112 0.546092 2.17695 0.691925Z" fill="#02111B"/>
                </svg>
              </div>
            </a>
          </div>
        </div>
      </div>
      <div class="inst-data">
        <a href="https://www.instagram.com/u_dent.by/" target="_blank">
          <svg width="43" height="44" viewBox="0 0 43 44" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M21.4489 14.2487C19.9907 14.2487 18.5652 14.6811 17.3528 15.4912C16.1403 16.3014 15.1954 17.4529 14.6373 18.8001C14.0793 20.1473 13.9333 21.6297 14.2178 23.0599C14.5022 24.4901 15.2044 25.8038 16.2355 26.8349C17.2666 27.866 18.5804 28.5682 20.0105 28.8526C21.4407 29.1371 22.9231 28.9911 24.2703 28.4331C25.6176 27.8751 26.769 26.9301 27.5792 25.7176C28.3893 24.5052 28.8217 23.0797 28.8217 21.6215C28.8217 19.6661 28.0449 17.7908 26.6623 16.4082C25.2796 15.0255 23.4043 14.2487 21.4489 14.2487ZM21.4489 27.6538C20.2558 27.6538 19.0895 27.3 18.0975 26.6372C17.1055 25.9743 16.3324 25.0322 15.8758 23.93C15.4192 22.8277 15.2998 21.6148 15.5325 20.4447C15.7653 19.2745 16.3398 18.1997 17.1834 17.356C18.0271 16.5124 19.1019 15.9379 20.2721 15.7051C21.4422 15.4724 22.6551 15.5918 23.7574 16.0484C24.8596 16.505 25.8017 17.2781 26.4646 18.2701C27.1274 19.2622 27.4812 20.4284 27.4812 21.6215C27.4812 23.2214 26.8456 24.7557 25.7144 25.887C24.5831 27.0183 23.0488 27.6538 21.4489 27.6538ZM28.8217 5.5354H14.0761C11.7652 5.5354 9.54892 6.45341 7.91486 8.08747C6.2808 9.72153 5.36279 11.9378 5.36279 14.2487V28.9943C5.36279 30.1386 5.58817 31.2716 6.02605 32.3287C6.46394 33.3859 7.10576 34.3464 7.91486 35.1555C9.54892 36.7896 11.7652 37.7076 14.0761 37.7076H28.8217C29.9659 37.7076 31.099 37.4822 32.1561 37.0444C33.2133 36.6065 34.1738 35.9647 34.9829 35.1555C35.792 34.3464 36.4339 33.3859 36.8717 32.3287C37.3096 31.2716 37.535 30.1386 37.535 28.9943V14.2487C37.535 13.1045 37.3096 11.9714 36.8717 10.9143C36.4339 9.85712 35.792 8.89657 34.9829 8.08747C34.1738 7.27836 33.2133 6.63655 32.1561 6.19866C31.099 5.76078 29.9659 5.5354 28.8217 5.5354ZM36.1945 28.9943C36.1945 30.9497 35.4177 32.825 34.0351 34.2077C32.6524 35.5903 30.7771 36.3671 28.8217 36.3671H14.0761C12.1207 36.3671 10.2454 35.5903 8.86274 34.2077C7.48008 32.825 6.7033 30.9497 6.7033 28.9943V14.2487C6.7033 12.2933 7.48008 10.418 8.86274 9.03535C10.2454 7.65268 12.1207 6.87591 14.0761 6.87591H28.8217C30.7771 6.87591 32.6524 7.65268 34.0351 9.03535C35.4177 10.418 36.1945 12.2933 36.1945 14.2487V28.9943ZM31.5027 12.9082C31.5027 13.1733 31.4241 13.4325 31.2768 13.6529C31.1295 13.8734 30.9201 14.0452 30.6752 14.1467C30.4303 14.2481 30.1607 14.2747 29.9007 14.223C29.6407 14.1712 29.4018 14.0436 29.2143 13.8561C29.0269 13.6686 28.8992 13.4298 28.8475 13.1697C28.7957 12.9097 28.8223 12.6402 28.9237 12.3952C29.0252 12.1503 29.197 11.9409 29.4175 11.7936C29.6379 11.6463 29.8971 11.5677 30.1622 11.5677C30.5177 11.5677 30.8587 11.7089 31.1101 11.9603C31.3615 12.2117 31.5027 12.5527 31.5027 12.9082Z" fill="black"/>
          </svg>
          <p>
            u_dent.by
          </p>
        </a>
      </div>
    </div>

    <div class="insurance-container">
      <div class="insurance-header header">
        <p>
          Стоматология по страховке
        </p>
      </div>
      <div class="flex-insurance-container">
        <div class="row">
          <div class="service-element">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/insurance1.svg">
          </div>
          <div class="service-element">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/insurance2.svg">
          </div>
          <div class="service-element">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/insurance3.svg">
          </div>
          <!--        <div class="service-element">-->
          <!--          <img src="--><?php //echo get_template_directory_uri(); ?><!--/assets/img/insurance4.svg">-->
          <!--        </div>-->
        </div>
        <div class="row">
          <!--        <div class="service-element">-->
          <!--          <img src="--><?php //echo get_template_directory_uri(); ?><!--/assets/img/insurance5.svg">-->
          <!--        </div>-->
          <div class="service-element">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/insurance6.svg">
          </div>
          <div class="service-element">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/insurance7.svg">
          </div>
          <div class="service-element">
            <a href="/services/insurance/">
              <div class="virtual-btn">
                <p>подробнее</p>
                <div class="record-arrow">
                  <svg width="8" height="12" viewBox="0 0 8 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M2.17695 0.691925L7.09154 5.59193C7.14987 5.65026 7.19109 5.71345 7.2152 5.78151C7.2397 5.84956 7.25195 5.92248 7.25195 6.00026C7.25195 6.07804 7.2397 6.15095 7.2152 6.21901C7.19109 6.28707 7.14987 6.35026 7.09154 6.40859L2.17695 11.3232C2.04084 11.4593 1.8707 11.5273 1.66654 11.5273C1.46237 11.5273 1.28737 11.4544 1.14154 11.3086C0.995704 11.1628 0.922787 10.9926 0.922787 10.7982C0.922787 10.6037 0.995704 10.4336 1.14154 10.2878L5.42904 6.00026L1.14154 1.71276C1.00543 1.57665 0.937369 1.40904 0.937369 1.20993C0.937369 1.01043 1.01029 0.837759 1.15612 0.691926C1.30195 0.546092 1.47209 0.473176 1.66654 0.473176C1.86098 0.473176 2.03112 0.546092 2.17695 0.691925Z" fill="#02111B"/>
                  </svg>
                </div>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>

   <div class="photo-container">
     <div class="contact-info">
       <div class="contact-header">
         <p>
           Запишитесь  <br>
           на консультацию
         </p>
       </div>
       <div class="mobile-container">
         <a href="tel:+375447002255">
           <img src="<?php echo get_template_directory_uri(); ?>/assets/img/mobile.svg">
           <p>+375 (44) 700-22-55</p>
         </a>
       </div>
       <div class="phone-container">
         <a href="tel:+375232250250">
           <img src="<?php echo get_template_directory_uri(); ?>/assets/img/phone.svg">
           <p>+375 (232) 250-250</p>
         </a>
       </div>
       <div class="text-container">
         <p>
           Мы находимся по адресу:<br>
           г. Гомель, ул. Кирова 19-2
         </p>
       </div>
       <div class="contact-footer">
         <p>
           Ждем Вас!
         </p>
       </div>
     </div>
   </div>
</div>
<div class="mobile-contact-photo">
  <div class="photo-container">
    <div class="contact-info">
      <div class="contact-header">
        <p>
          Запишитесь  <br>
          на консультацию
        </p>
      </div>
      <div class="mobile-container">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/mobile.svg">
        <p>+375 (44) 700-22-55</p>
      </div>
      <div class="phone-container">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/phone.svg">
        <p>+375 (232) 250-250</p>
      </div>
      <div class="text-container">
        <p>
          Мы находимся по адресу:<br>
          г. Гомель, ул. Кирова 19-2
        </p>
      </div>
      <div class="contact-footer">
        <p>
          Ждем Вас!
        </p>
      </div>
    </div>
  </div>
</div>


<?php get_footer(); ?>