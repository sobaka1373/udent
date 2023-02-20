<?php /* Template Name: specialists */ ?>

<?php get_header(); ?>
<div class="specialist-page">
  <div class="doctors-container">
    <div class="doctors-block-header header">
      <p>У нас работают профессионалы</p>
    </div>
      <?php
      $args = [
          'post_type' => 'doctor_type',
          'numberposts'       => -1
      ];
      $new_doctors = array_reverse(get_posts($args));
      $doctor = [];
      for ($i = 0, $iMax = count($new_doctors); $i < $iMax; $i++) {
          $post = $new_doctors[$i];
          $doctor[$i]['name'] = get_field('doctor_name', $post->ID, false);
          $doctor[$i]['specialization'] = get_field('doctor_specialization', $post->ID, false);
          $doctor[$i]['qualification'] = get_field('doctor_qualification', $post->ID, false);
          $doctor[$i]['photo'] = get_field('doctor_small_photo', $post->ID, false);
          $doctor[$i]['photo'] =  wp_get_attachment_image_src( $doctor[$i]['photo'], 'full');
          $doctor[$i]['link'] =  get_field('doctor_link', $post->ID, false);
          $doctor[$i]['number'] =  get_field('position', $post->ID, false);
      }
      usort($doctor, function($a, $b){
          return ($a['number'] - $b['number']);
      });
      ?>

    <div class="doctors-block-grid">
        <?php
        foreach ($doctor as $item) : ?>
        <a href="<?php echo $item['link']; ?>">
          <div class="item-container"  style="background-image: url(<?php echo $item['photo'][0]; ?>)">
            <div class="info-doctor">
              <div class="doctor-name">
                <p><?php echo $item['name']; ?></p>
              </div>
              <div class="doctor-specialization">
                <p><?php echo $item['specialization']; ?></p>
              </div>
              <div class="doctor-prof-category">
                <p><?php echo $item['qualification']; ?></p>
              </div>
            </div>
          </div>
        </a>
        <?php
        endforeach;
        ?>
    </div>
  </div>
  <div class="after-footer-row"></div>
</div>
<?php get_footer(); ?>
