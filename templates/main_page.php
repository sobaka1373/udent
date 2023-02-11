<?php /* Template Name: MainPage */ ?>

<?php get_header(); ?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">
            <div class="header">
                <div class="container">
                    <div class="flex">
                        <div class="main-description">
                            <div class="title">
                                С заботой о Вашей улыбке
                            </div>
                            <div class="images images-mobile">
                                <div class="ellipse">

                                </div>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/doctors-main.png"
                                     class="doctor-image" alt="doctors-main">
                            </div>
                            <div class="description">
                                Стоматологический центр Ю-КЛИНИК предоставляет качественную диагностику и лечение зубов
                                в
                                Гомеле. Мы
                                обеспечим Вам полный комплекс стоматологических услуг по доступным ценам.
                            </div>
                            <div class="btn-record">
                                <button class="record">
                                    Записаться на прием
                                </button>
                            </div>
                        </div>
                        <div>
                            <div class="images images-desktop">
                                <div class="ellipse">

                                </div>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/doctors-main.png"
                                     class="doctor-image" alt="doctors-main">
                            </div>
                        </div>
                    </div>
                    <div class="text">
                        Профессиональное медицинское обслуживание по самым высоким стандартам
                    </div>
                </div>
            </div>
            <div class="intro">
                <div class="container flex">
                    <div class="inner-text mobile-text">
                        Добро пожаловать в <img
                                src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-u.png"
                                alt="clinic"><span>-КЛИНИК</span>
                    </div>
                    <div class="video">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/RlabjCbtcIw"
                                title="Ю-КЛИНИК - Новый корпус" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                    </div>
                    <div class="text">
                        <div class="inner-text desktop-text">
                            Добро пожаловать в <img
                                    src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-u.png"
                                    alt="clinic"><span>-КЛИНИК</span>
                        </div>
                        <div class="learn-more">
                            <a href="./about-us">
                                Узнать о нас больше
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow.svg" alt="arrow"></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="services">
                <div class="container">
                    <div class="main-title">
                        Наши услуги
                    </div>
                    <div class="grid-wrapper">
                        <div class="grid-item">
                            <div class="grid-item-container">
                                <a href="./services/implatation/">
                                    <div class="image">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/implant.png"
                                             alt="implant">
                                    </div>
                                    <p>Имплантация</p>
                                </a>
                            </div>
                        </div>
                        <div class="grid-item">
                            <div class="grid-item-container">
                                <a href="./services/protezirovanie/">
                                    <div class="image">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/protez.png"
                                             alt="protez">
                                    </div>
                                    <p>Протезирование</p>
                                </a>
                            </div>
                        </div>
                        <div class="grid-item">
                            <div class="grid-item-container">
                                <a href="./services/treatment/">
                                    <div class="image">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/lechenie.png"
                                             alt="lechenie">
                                    </div>
                                    <p>Лечение</p>
                                    <span>под микроскопом</span>
                                </a>
                            </div>
                        </div>
                        <div class="grid-item">
                            <div class="grid-item-container">
                                <a href="./services/bite-correction/">
                                    <div class="image">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/pricus.png"
                                             alt="pricus">
                                    </div>
                                    <p>Исправление прикуса</p>
                                </a>
                            </div>
                        </div>
                        <div class="grid-item">
                            <div class="grid-item-container">
                                <a href="./services/rentgen/">
                                    <div class="image">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/rentgen.png"
                                             alt="rentgen">
                                    </div>
                                    <p>Рентген-диагностика</p>
                                </a>
                            </div>
                        </div>
                        <div class="grid-item">
                            <div class="grid-item-container">
                                <a href="./services/whitening/">
                                    <div class="image">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/otbel.png"
                                             alt="otbel">
                                    </div>
                                    <p>Отбеливание зубов</p>
                                </a>
                            </div>
                        </div>
                        <div class="grid-item">
                            <div class="grid-item-container">
                                <a href="./services/spa/">
                                    <div class="image">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/spa.png"
                                             alt="spa">
                                    </div>
                                    <p>SPA-уход для зубов</p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="more">
                        <a href="./services/">
                            Подробнее
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow.svg" alt="arrow">
                        </a>
                    </div>
                </div>
            </div>
            <div class="why-us">
                <div class="container">
                    <div class="main-title">
                        Почему выбирают нас
                    </div>
                    <div class="flex">
                        <div class="list">
                            <ul>
                                <li>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/line-circle.svg"
                                         alt="line-circle">
                                    <span>Современная команда специалистов</span>
                                </li>
                                <li>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/line-circle.svg"
                                         alt="line-circle">
                                    <span> Оборудование и материалы мировых производителей</span>
                                </li>
                                <li>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/line-circle.svg"
                                         alt="line-circle">
                                    <span> Своя зуботехническая лаборатория</span>
                                </li>
                                <li>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/line-circle.svg"
                                         alt="line-circle">
                                    <span> Постоянное повышение профессиональных навыков</span>
                                </li>
                                <li>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/line-circle.svg"
                                         alt="line-circle">
                                    <span> Бесплатное гарантийное лечение</span>
                                </li>
                            </ul>
                        </div>
                        <div class="benefits">
                            <div class="digit">
                                5
                            </div>
                            <div class="text">
                                Лет работы
                            </div>
                            <div class="digit">
                                15
                            </div>
                            <div class="text">
                                Ведущих специалистов
                            </div>
                            <div class="digit">
                                15 000+
                            </div>
                            <div class="text">
                                Довольных клиентов
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="winner">
                <div class="container flex">
                    <div class="image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/winner.png" alt="winner">
                    </div>
                    <div class="text">
                        <div class="middle">
                            <div class="inner-text desktop-block">
                                <p>Наша клиника стала победителем</p>
                                <p>VI ежегодной премии «НОМЕР ОДИН» 2022 года</p>
                                <p>по итогам народного голосования.</p>
                            </div>
                            <div class="inner-text block-mobile">
                                <p>Наша клиника стала победителем
                                    VI ежегодной премии «НОМЕР ОДИН» 2022 года
                                    по итогам народного голосования.</p>
                            </div>
                            <div class="learn-more">
                                Мы благодарим Вас за доверие!
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="doctors-block">
                <div class="doctors-block-header">
                    Они заботятся о Вашей улыбке
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
                    <div class="item-container">
                        <a href="<?php echo $doctor[0]['link']; ?>">
<!--                            <img src="-->
<!--            --><?php //echo $doctor[0]['photo'][0]; ?><!--" width="345" height="440" alt="doctor">-->
                            <div class="doctor-cover-img" style="background-image: url(<?php echo $doctor[0]['photo'][0]; ?>)"></div>
                            <div class="doctor-name">
                                <p><?php echo $doctor[0]['name']; ?></p>
                            </div>
                            <div class="doctor-specialization">
                                <p><?php echo $doctor[0]['specialization']; ?></p>
                            </div>
                            <div class="doctor-prof-category">
                                <p><?php echo $doctor[0]['qualification']; ?></p>
                            </div>
                        </a>
                    </div>
                    <div class="item-container">
                        <a href="<?php echo $doctor[1]['link']; ?>">
<!--                            <img src="-->
<!--            --><?php //echo $doctor[1]['photo'][0]; ?><!--" width="345" height="440" alt="doctor">-->
                          <div class="doctor-cover-img" style="background-image: url(<?php echo $doctor[1]['photo'][0]; ?>)"></div>
                            <div class="doctor-name">
                                <p><?php echo $doctor[1]['name']; ?></p>
                            </div>
                            <div class="doctor-specialization">
                                <p><?php echo $doctor[1]['specialization']; ?></p>
                            </div>
                            <div class="doctor-prof-category">
                                <p><?php echo $doctor[1]['qualification']; ?></p>
                            </div>
                        </a>
                    </div>
                    <div class="item-container">
                        <a href="<?php echo $doctor[2]['link']; ?>">
<!--                            <img src="-->
<!--            --><?php //echo $doctor[2]['photo'][0]; ?><!--" width="345" height="440" alt="doctor">-->
                            <div class="doctor-cover-img" style="background-image: url(<?php echo $doctor[2]['photo'][0]; ?>)"></div>
                            <div class="doctor-name">
                                <p><?php echo $doctor[2]['name']; ?></p>
                            </div>
                            <div class="doctor-specialization">
                                <p><?php echo $doctor[2]['specialization']; ?></p>
                            </div>
                            <div class="doctor-prof-category">
                                <p><?php echo $doctor[2]['qualification']; ?></p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="doctors-link">
                    <div class="more">
                        <a href="./specialists">
                            Наши специалисты
                            <img src="
            <?php echo get_template_directory_uri(); ?>/assets/img/arrow.svg" alt="arrow">
                        </a>
                    </div>
                </div>
            </div>
            <div class="inst">
                <div class="inst-link"><a href="https://www.instagram.com/u_klinik_gomel/" target="_blank">
                        @u_klinik_gomel
                    </a>
                </div>
                <div class="inst-more">
                    Еще больше информации в нашем instagram
                </div>
            </div>
            <div class="photo-gallery">
                <div class="container-photo">
                    <div class="gallery">
                        <figure class="gallery__item gallery__item--1">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/im-1.jpg"
                                 class="gallery__img" alt="Image 1">
                        </figure>
                        <figure class="gallery__item gallery__item--2">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/im-2.jpg"
                                 class="gallery__img" alt="Image 1">
                        </figure>
                        <figure class="gallery__item gallery__item--3">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/im-3.jpg"
                                 class="gallery__img" alt="Image 1">
                        </figure>
                        <figure class="gallery__item gallery__item--4">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/im-4.jpg"
                                 class="gallery__img" alt="Image 1">
                        </figure>
                        <figure class="gallery__item gallery__item--5">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/im-5.jpg"
                                 class="gallery__img" alt="Image 1">
                        </figure>
                        <figure class="gallery__item gallery__item--6">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/im-6.jpg"
                                 class="gallery__img" alt="Image 1">
                        </figure>
                        <figure class="gallery__item gallery__item--7">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/im-7.jpg"
                                 class="gallery__img" alt="Image 1">
                        </figure>
                    </div>
                </div>
            </div>
            <div class="insurance-block">
                <div class="insurance-block-header">Стоматология по страховке</div>
                <div class="owl-carousel">
                    <div class="item">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/slider/image48.png"
                             alt="insurance">
                    </div>
                    <div class="item">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/slider/image49.png"
                             alt="insurance">
                    </div>
                    <div class="item">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/slider/image50.png"
                             alt="insurance">
                    </div>
                    <div class="item">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/slider/image52.png"
                             alt="insurance">
                    </div>
                    <div class="item">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/slider/image33.png"
                             alt="insurance">
                    </div>
                    <div class="item">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/slider/image48.png"
                             alt="insurance">
                    </div>
                    <div class="item">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/slider/image49.png"
                             alt="insurance">
                    </div>
                    <div class="item">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/slider/image50.png"
                             alt="insurance">
                    </div>
                    <div class="item">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/slider/image52.png"
                             alt="insurance">
                    </div>
                    <div class="item">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/slider/image33.png"
                             alt="insurance">
                    </div>
                </div>
                <div class="insurance-description">
                    <p>
                        Мы позаботились о Вашем удобстве и заключили договора на оказание стоматологической помощи со
                        страховыми компаниями
                    </p>
                    <div class="more">
                        <a href="./services/insurance/">
                            Подробнее
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow.svg" alt="arrow">
                        </a>
                    </div>
                </div>
            </div>
            <div class="main-photo">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/uklinik-team.jpg" alt="Team">
            </div>
        </main>
    </div>

<?php get_footer(); ?>