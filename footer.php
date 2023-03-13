<?php
/**
 * The template for displaying the footer
 *
 * Contains the opening of the #site-footer div and all content after.
 *
 */

$test = is_front_page();
?>
<div class="pop-up-container">
  <div class="pop-up-header">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/close3.svg" />
  </div>
  <div class="pop-up-content">
    <div class="contact-info">
      <div class="contact-header">
        <p>
          Записаться на прием<br>
          можно по номеру:
        </p>
      </div>
      <div class="mobile-container">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/mobile.svg">
        <p>+375 (44) 700-22-55</p>
      </div>
      <div class="phone-container">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/phone.svg">
        <p>+375 (232) 25-02-50</p>
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
<footer class="footer">
  <div class="footer-container">
    <div class="column1">
      <div class="logo">
        <div class="first-img">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo_u.svg" alt="logo">
        </div>
        <div class="second-img">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo_dent.svg" alt="logo">
        </div>
      </div>
      <div class="bottom-text">
        <p>ООО «Ю-ДЕНТ»</p>
        <p>г.Гомель, ул.Кирова 19-2</p>
        <p>УНП: 491326913</p>
        <p>Электронная почта: <a href="mailto:info@u-clinic.by">yudent@inbox.ru</a></p>
      </div>

      <p class="p-legal"><a href="./privacy-policy/">Политика конфиденциальности</a></p>
    </div>

    <div class="column2">
      <nav id="bottom-menu-nav">
          <?php
          wp_nav_menu( array(
              'theme_location' => 'Bottom menu',
              'menu_id'        => 'bottom-menu',
              'container'       => 'ul',
              'menu_class' => 'nav',
          ) );?>
      </nav>
    </div>

    <div class="column3">
      <div class="btn-record">
        <p>Записаться на прием</p>
        <div class="record-arrow">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/right-arrow.svg">
        </div>
      </div>


        <div class="address-data">
          <p class="city-street">г.Гомель, ул.Кирова 19-2</p>
          <div class="address-data-container">
            <div>
              <p>Пн-Пт 8:00-20:00</p>
              <p>Сб-Вс 9:00-15:00</p>
            </div>
            <div class="left">
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
            </div>
          </div>
      </div>
      <div class="social-icons">
        <div class="footer-inst">
          <a href="https://www.instagram.com/u_dent.by/" class="inst-svg">
            <svg width="43" height="44" viewBox="0 0 43 44" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M21.4489 14.2487C19.9907 14.2487 18.5652 14.6811 17.3528 15.4912C16.1403 16.3014 15.1954 17.4529 14.6373 18.8001C14.0793 20.1473 13.9333 21.6297 14.2178 23.0599C14.5022 24.4901 15.2044 25.8038 16.2355 26.8349C17.2666 27.866 18.5804 28.5682 20.0105 28.8526C21.4407 29.1371 22.9231 28.9911 24.2703 28.4331C25.6176 27.8751 26.769 26.9301 27.5792 25.7176C28.3893 24.5052 28.8217 23.0797 28.8217 21.6215C28.8217 19.6661 28.0449 17.7908 26.6623 16.4082C25.2796 15.0255 23.4043 14.2487 21.4489 14.2487ZM21.4489 27.6538C20.2558 27.6538 19.0895 27.3 18.0975 26.6372C17.1055 25.9743 16.3324 25.0322 15.8758 23.93C15.4192 22.8277 15.2998 21.6148 15.5325 20.4447C15.7653 19.2745 16.3398 18.1997 17.1834 17.356C18.0271 16.5124 19.1019 15.9379 20.2721 15.7051C21.4422 15.4724 22.6551 15.5918 23.7574 16.0484C24.8596 16.505 25.8017 17.2781 26.4646 18.2701C27.1274 19.2622 27.4812 20.4284 27.4812 21.6215C27.4812 23.2214 26.8456 24.7557 25.7144 25.887C24.5831 27.0183 23.0488 27.6538 21.4489 27.6538ZM28.8217 5.5354H14.0761C11.7652 5.5354 9.54892 6.45341 7.91486 8.08747C6.2808 9.72153 5.36279 11.9378 5.36279 14.2487V28.9943C5.36279 30.1386 5.58817 31.2716 6.02605 32.3287C6.46394 33.3859 7.10576 34.3464 7.91486 35.1555C9.54892 36.7896 11.7652 37.7076 14.0761 37.7076H28.8217C29.9659 37.7076 31.099 37.4822 32.1561 37.0444C33.2133 36.6065 34.1738 35.9647 34.9829 35.1555C35.792 34.3464 36.4339 33.3859 36.8717 32.3287C37.3096 31.2716 37.535 30.1386 37.535 28.9943V14.2487C37.535 13.1045 37.3096 11.9714 36.8717 10.9143C36.4339 9.85712 35.792 8.89657 34.9829 8.08747C34.1738 7.27836 33.2133 6.63655 32.1561 6.19866C31.099 5.76078 29.9659 5.5354 28.8217 5.5354ZM36.1945 28.9943C36.1945 30.9497 35.4177 32.825 34.0351 34.2077C32.6524 35.5903 30.7771 36.3671 28.8217 36.3671H14.0761C12.1207 36.3671 10.2454 35.5903 8.86274 34.2077C7.48008 32.825 6.7033 30.9497 6.7033 28.9943V14.2487C6.7033 12.2933 7.48008 10.418 8.86274 9.03535C10.2454 7.65268 12.1207 6.87591 14.0761 6.87591H28.8217C30.7771 6.87591 32.6524 7.65268 34.0351 9.03535C35.4177 10.418 36.1945 12.2933 36.1945 14.2487V28.9943ZM31.5027 12.9082C31.5027 13.1733 31.4241 13.4325 31.2768 13.6529C31.1295 13.8734 30.9201 14.0452 30.6752 14.1467C30.4303 14.2481 30.1607 14.2747 29.9007 14.223C29.6407 14.1712 29.4018 14.0436 29.2143 13.8561C29.0269 13.6686 28.8992 13.4298 28.8475 13.1697C28.7957 12.9097 28.8223 12.6402 28.9237 12.3952C29.0252 12.1503 29.197 11.9409 29.4175 11.7936C29.6379 11.6463 29.8971 11.5677 30.1622 11.5677C30.5177 11.5677 30.8587 11.7089 31.1101 11.9603C31.3615 12.2117 31.5027 12.5527 31.5027 12.9082Z" fill="black"/>
            </svg>
          </a>
        </div>
        <div class="footer-email">
          <a href="mailto:yudent@inbox.ru" class="email-svg">
            <svg width="44" height="43" viewBox="0 0 44 43" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M13.2106 16.0884L22.1473 22.3441L31.084 16.0884" stroke="black" stroke-width="1.42988" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M4.27429 30.3858V12.5123C4.27429 11.5642 4.65091 10.655 5.32129 9.98462C5.99168 9.31424 6.90092 8.93762 7.84898 8.93762H36.4465C37.3946 8.93762 38.3038 9.31424 38.9742 9.98462C39.6446 10.655 40.0212 11.5642 40.0212 12.5123V30.3858C40.0212 31.3338 39.6446 32.2431 38.9742 32.9134C38.3038 33.5838 37.3946 33.9605 36.4465 33.9605H7.84898C6.90092 33.9605 5.99168 33.5838 5.32129 32.9134C4.65091 32.2431 4.27429 31.3338 4.27429 30.3858Z" stroke="black" stroke-width="1.42988"/>
            </svg>
          </a>
        </div>
        <div class="footer-whatsapp">
          <a href="tel:+375447002255" class="whatsapp-svg">
            <svg width="42" height="42" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M29.9753 27.2499C29.6056 28.3022 27.822 29.2529 26.9566 29.383L29.9753 27.2499ZM29.9753 27.2499C30.3451 26.2017 30.3451 25.3038 30.2354 25.1169L29.9753 27.2499ZM29.2188 24.9067L29.2188 24.9068L29.2259 24.9102C29.3087 24.9505 29.3822 24.9853 29.4484 25.0166C29.5736 25.0759 29.6729 25.1229 29.7599 25.1713C29.8757 25.2358 29.9102 25.2725 29.9196 25.2853C29.9193 25.2879 29.93 25.3225 29.9366 25.4088C29.9444 25.5122 29.944 25.6549 29.929 25.8299C29.899 26.1791 29.8129 26.636 29.6382 27.131L29.6381 27.1314C29.4942 27.541 29.0421 27.9869 28.4587 28.3615C27.8841 28.7305 27.27 28.9743 26.9038 29.0294C26.2215 29.1308 25.6293 29.1545 24.8666 29.0104C24.0935 28.8643 23.1325 28.5432 21.7193 27.9335C17.6397 26.1683 14.8727 22.2264 14.3004 21.4112C14.2583 21.3511 14.228 21.308 14.2101 21.284C14.2051 21.2772 14.1994 21.2694 14.1931 21.2608C14.0594 21.0785 13.6414 20.5083 13.2474 19.7305C12.8302 18.907 12.4561 17.8817 12.4561 16.8611C12.4561 14.947 13.3824 13.9534 13.8397 13.4628C13.8724 13.4277 13.9027 13.3952 13.9301 13.3651C14.2618 13.0078 14.6434 12.9241 14.8614 12.9241C15.165 12.9241 15.4497 12.9243 15.6964 12.9397L15.6974 12.9397C15.7419 12.9424 15.7865 12.9423 15.82 12.9422L15.826 12.9422C15.8638 12.9421 15.8922 12.9422 15.9197 12.9438C15.9711 12.9467 16.0059 12.9544 16.0375 12.9692C16.0947 12.9959 16.2312 13.0895 16.396 13.4875L16.3962 13.4882C16.521 13.7879 16.7038 14.233 16.8964 14.7022C16.9917 14.9344 17.0895 15.1726 17.1839 15.402C17.4637 16.082 17.7233 16.709 17.7879 16.8382C17.8788 17.0199 17.9028 17.1486 17.8277 17.3044C17.4718 18.0137 17.1119 18.3905 16.8369 18.6785C16.8016 18.7155 16.7677 18.751 16.7354 18.7855C16.6015 18.9286 16.4385 19.1098 16.3776 19.3415C16.3089 19.603 16.3842 19.8487 16.5226 20.0875L16.523 20.0882C17.4089 21.609 18.3011 22.6463 19.3169 23.472C20.3273 24.2935 21.4478 24.8952 22.7657 25.5542C23.0113 25.678 23.2644 25.7607 23.5216 25.7292C23.7929 25.6961 23.9979 25.546 24.1625 25.3561C24.4288 25.0534 25.2968 24.0338 25.6126 23.56L25.6127 23.5601L25.6147 23.5569C25.7256 23.3867 25.7924 23.3775 25.8183 23.3745C25.8832 23.3668 25.9824 23.3881 26.1969 23.4688L26.1969 23.4689L26.2028 23.4709C26.3851 23.5359 27.0168 23.8313 27.6852 24.1531C28.3428 24.4697 29.0016 24.7951 29.2188 24.9067Z" fill="#02111B" stroke="#FDFDFD" stroke-width="0.714938"/>
              <path d="M28.0959 4.5964L28.0964 4.59663C30.2335 5.49039 32.1483 6.78127 33.7899 8.42287C35.4314 10.0684 36.7185 11.9832 37.6165 14.1169C38.5424 16.3263 39.0113 18.6742 38.9993 21.0947C38.9874 23.5045 38.5104 25.8365 37.573 28.0292L37.5727 28.0297C36.6709 30.1473 35.3799 32.0461 33.7386 33.6716L33.7383 33.6719C32.1014 35.2968 30.1909 36.568 28.0649 37.4542C25.8913 38.3562 23.5829 38.8172 21.2016 38.8172L21.1181 38.8172C21.1178 38.8172 21.1175 38.8172 21.1172 38.8172C18.3598 38.8052 15.6219 38.1454 13.1749 36.91L13.0899 36.867H12.9946H6.81495C6.00389 36.867 5.34602 36.2092 5.34602 35.3981V29.2225V29.1273L5.3031 29.0422C4.06752 26.5949 3.40775 23.8567 3.39583 21.0991L3.39583 21.0988C3.38391 18.6898 3.8449 16.3496 4.75884 14.1482L4.75886 14.1481C5.64068 12.023 6.91566 10.1162 8.5415 8.47445C10.1666 6.83342 12.0655 5.54624 14.1839 4.64006C16.3763 3.70276 18.7079 3.22577 21.1173 3.21372H21.1976C23.5908 3.21372 25.9108 3.67868 28.0959 4.5964ZM32.1278 32.042L32.1281 32.0418C35.0639 29.131 36.6946 25.2389 36.7197 21.087L36.7197 21.0861C36.728 18.9773 36.3236 16.9333 35.5144 15.0062C34.7344 13.1458 33.608 11.4731 32.178 10.0432C30.7439 8.60907 29.0753 7.4868 27.215 6.70681C25.3087 5.90595 23.2856 5.50152 21.2016 5.50152L21.1326 5.50151L21.131 5.50152C16.9748 5.5182 13.0823 7.14484 10.1713 10.085C7.25603 13.0252 5.66696 16.9302 5.68364 21.0861L5.68364 21.0865C5.69615 23.6007 6.32137 26.0983 7.49801 28.3056L7.4984 28.3063L7.63382 28.5591V34.1792V34.5792H8.03382H13.654L13.9068 34.7147L13.9075 34.715C16.1147 35.8917 18.6124 36.5169 21.1265 36.5294H21.1285H21.1976C25.3249 36.5294 29.2046 34.9361 32.1278 32.042Z" fill="#02111B" stroke="#FDFDFD" stroke-width="0.8"/>
            </svg>
          </a>
        </div>
      </div>
    </div>
  </div>
</footer>
</body>
</html>
