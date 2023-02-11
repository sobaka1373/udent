<?php /* Template Name: Services */ ?>

<?php get_header(); ?>
    <div class="services-page">
        <div class="container">
            <div class="main-title">
                Наша клиника оказывает следующие виды услуг
            </div>
            <div class="grid-wrapper">
                <div class="grid-item">
                    <a href="./implatation/">
                        <div class="image">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/implant.png" alt="implant">
                        </div>
                        <p>Имплантация</p>
                    </a>
                </div>
                <div class="grid-item">
                    <a href="./protezirovanie/">
                        <div class="image">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/protez.png" alt="protez">
                        </div>
                        <p>Протезирование</p>
                    </a>
                </div>
                <div class="grid-item">
                    <a href="./treatment/">
                        <div class="image">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/lechenie.png"
                                 alt="lechenie">
                        </div>
                        <p>Лечение</p>
                        <span>под микроскопом</span>
                    </a>
                </div>
                <div class="grid-item">
                    <a href="./bite-correction/">
                        <div class="image">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/pricus.png" alt="pricus">
                        </div>
                        <p>Исправление прикуса</p>
                    </a>
                </div>
                <div class="grid-item">
                    <a href="./rentgen/">
                        <div class="image">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/rentgen.png" alt="rentgen">
                        </div>
                        <p>Рентген-диагностика</p>
                    </a>
                </div>
                <div class="grid-item">
                    <a href="./whitening/">
                        <div class="image">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/otbel.png" alt="otbel">
                        </div>
                        <p>Отбеливание зубов</p>
                    </a>
                </div>
                <div class="grid-item">
                    <a href="./spa/">
                        <div class="image">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/spa.png" alt="spa">
                        </div>
                        <p>SPA-уход для зубов</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="insurance-block-service">
        <div class="insurance-block-header">Также мы позаботились о Вашем удобстве и заключили договоры на оказание
            стоматологической помощи
            со страховыми компаниями:
        </div>
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
            <div class="more">
                <a href="./services/insurance">
                Подробнее
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow.svg" alt="arrow"></a>
            </div>
        </div>
    </div>
<?php get_footer(); ?>