<?php /* Template Name: AboutUs */ ?>

<?php get_header(); ?>

<div class="about-us-page-container">

  <div class="about-us-page-first">
    <div class="left">
      <div class="about-us-header header">
        <p>
          О нашей клинике
        </p>
      </div>
      <div class="about-us-text">
        <p>
          В нашей клинике работают только квалифицированные стоматологи с многолетним опытом работы.
          Это влюблённые в свою профессию специалисты, которые ежедневно используют в работе накопленный
          годами опыт, приобретенные знания и навыки, и искренне заботятся о каждом своём пациенте.
        </p>
      </div>
      <div class="about-us-list">
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
              Гарантийное лечение
            </p>
          </div>
        </div>
      </div>
    </div>
    <div class="right">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/about-us1.png">
    </div>
  </div>

  <div class="about-us-images-container">
    <div class="row">
      <div class="about-us-element">
        <div class="text-element">
          <p class="main-text">
            5
          </p>
          <p class="second-text">
            Лет работы
          </p>
        </div>
      </div>
      <div class="about-us-element">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/about-us2.png">
      </div>
      <div class="about-us-element">
        <div class="text-element">
          <p class="main-text">
            15 000+
          </p>
          <p class="second-text">
            Довольных клиентов
          </p>
        </div>
      </div>
      <div class="about-us-element">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/about-us3.png">
      </div>
    </div>
    <div class="row">
      <div class="about-us-element">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/about-us4.png">
      </div>
      <div class="about-us-element">
        <div class="text-element">
          <p class="main-text">
            15
          </p>
          <p class="second-text">
            Ведущих специалистов
          </p>
        </div>
      </div>
      <div class="about-us-element">
        <div class="text-element">
          <p class="second-text">
            Удобное расположение в центре города
          </p>
        </div>
      </div>
      <div class="about-us-element">
        <div class="text-element">
          <p class="second-text">
            Работаем с тяжелыми клиническими случаями
          </p>
        </div>
      </div>
    </div>
  </div>

  <div class="virtual-tour">

    <div class="virtual-header header">
      <p>
        Виртуальный тур по клинике
      </p>
    </div>

    <div class="virtual-tour-container">
      <div class="left">
        <iframe src="https://gomel-3d.by/Tours/udent/index.html" frameborder="0" width="1015" height="592"></iframe>
      </div>
      <div class="right">
        <div class="images-right">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/about-us5.png">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/about-us6.png">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/about-us7.png">
        </div>
      </div>
    </div>
  </div>

  <div class="after-footer-row"></div>

</div>

<?php get_footer(); ?>