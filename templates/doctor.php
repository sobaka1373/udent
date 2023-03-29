<?php
/*
Template Name: Doctor
Template Post Type: post, doctor_type
*/

?>
<?php get_header(); ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="doctor-page-container">
        <?php
        global $post;
        $args = [
            'post_type' => 'doctor_type',
            'numberposts'       => -1,
            'name' => 1
        ];
        $new_doctors = get_posts($args);
        $doctor['name'] = get_field('doctor_name', $post->ID, false);
        $doctor['specialization'] = get_field('doctor_specialization', $post->ID, false);
        $doctor['experience'] = get_field('doctor_experience', $post->ID, false);
        $doctor['photo'] = get_field('doctor_main_photo', $post->ID, false);
        $doctor['photo'] =  wp_get_attachment_image_src( $doctor['photo'], 'full');
        $doctor['education'] = get_field('doctor_education', $post->ID, false);
        $doctor['professional_courses'] = get_field('doctor_professional_courses', $post->ID, false);
        $doctor['certificates'] = get_field('doctor_certificates', $post->ID, false);
        $doctor['internships_abroad'] = get_field('doctor_internships_abroad', $post->ID, false);
        $doctor['work_experience'] = get_field('doctor_work_experience', $post->ID, false);
        ?>

      <div class="doctor-main-container">
        <div class="doctor-main-left">
          <div class="doctor-main-name">
            <p>
                <?php echo $doctor['name']; ?>
            </p>
          </div>
            <?php if(!empty($doctor['specialization'])): ?>
              <div class="doctor-main-specialization">
                <p>
                    <?php echo $doctor['specialization']; ?>
                </p>
              </div>
            <?php endif; ?>
            <?php if(!empty($doctor['experience'])): ?>
              <div class="doctor-main-experience">
                <p>
                  Стаж – <?php echo $doctor['experience']; ?>
                </p>
              </div>
            <?php endif; ?>

          <div class="mobile-photo-doctor">
            <div class="doctor-cover-img" style="background-image:  url(<?php echo $doctor['photo'][0]; ?>)">
<!--              <img src="--><?php //echo $doctor['photo'][0]; ?><!--" />-->
            </div>
          </div>

            <?php if(!empty($doctor['education'])): ?>
              <div class="doctor-main-education">
                <p class="doctor-main-education-title">
                  Образование:
                </p>
                  <?php foreach ($doctor['education'] as $item) : ?>
                    <div class="education-p">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/line-circle.svg">
                      <p class="education-p-text">
                          <?php echo array_shift($item); ?>
                      </p>
                    </div>
                  <?php endforeach; ?>
              </div>
            <?php endif; ?>
        </div>
        <div class="doctor-main-right">
          <img src="<?php echo $doctor['photo'][0]; ?>" alt="" />
        </div>
      </div>

        <?php if(!empty($doctor['professional_courses'])): ?>
          <div class="doctor-main-container-second <?php if (count($doctor['education']) > 4) { echo "margin-block";} ?>">
            <div class="doctor-professional-courses">
              <p class="doctor-professional-courses-title">
                Курсы повышения квалификации:
              </p>
              <ul class="doctor-professional-courses-ul">
                  <?php  foreach ($doctor['professional_courses'] as $item) : ?>
                    <li class="doctor-professional-courses-text">
                        <?php echo array_shift($item); ?>
                    </li>
                  <?php endforeach; ?>
              </ul>
            </div>
          </div>
        <?php endif; ?>

        <?php if(!empty($doctor['certificates'])): ?>
          <div class="doctor-certificates">
            <section class="icones" style="height: 500px;">
              <div class="container">
                <div class="icones-carousel d-flex">
                    <?php foreach ($doctor['certificates'] as $item): ?>
                      <div class="item">
                          <?php
                          $image =  wp_get_attachment_image_src( array_shift($item), 'full');
                          ?>
                        <img src="<?php echo $image[0]; ?>" alt="diploma">
                      </div>
                        <?php if ($image[1] > $image[2]): ?>
                        <div class="item">
                          <p></p>
                        </div>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </div>
              </div>
            </section>
            <style>
                .slick-list {
                    width: 100%;
                }
            </style>

          </div>
        <?php endif; ?>
      <div class="doctor-main-container-third">
          <?php if(!empty($doctor['internships_abroad'])): ?>
            <p class="internships-abroad-title">
              Стажировки за рубежом:
            </p>
              <?php foreach ($doctor['internships_abroad'] as $item): ?>
              <div class="internships-abroad-p">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/line-circle.svg">
                <p class="internships-abroad-p-text">
                    <?php echo array_shift($item); ?>
                </p>
              </div>
              <?php endforeach; ?>
          <?php endif; ?>
      </div>

        <?php if(!empty($doctor['work_experience'])): ?>
          <div class="doctor-main-container-third">
            <p class="work_experience-title">
              Опыт работы:
            </p>
              <?php foreach ($doctor['work_experience'] as $item): ?>
                <div class="work_experience-p">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/line-circle.svg">
                  <p class="work_experience-p-text">
                      <?php echo array_shift($item); ?>
                  </p>
                </div>
              <?php endforeach; ?>
          </div>
        <?php endif; ?>
      <div class="after-footer-row"></div>
    </div>
</article><!-- #post-<?php the_ID(); ?> -->

<?php get_footer(); ?>