<?php /* Template Name: specialists */ ?>

<?php get_header(); ?>
<div class="specialist-page">
    <div class="doctors-block">
    <div class="doctors-block-header">
      Наши специалисты позаботятся о Вашей улыбке
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
      foreach ($doctor as $item) :
      ?>
        <div class="item-container">
          <a href="<?php if ($item['link']) { echo $item['link']; } else { echo '#'; } ?>" >
            <img src="<?php echo $item['photo'][0]; ?>" width="300" height="380" alt="doctor">
            <div class="doctor-name">
                <p><?php echo $item['name']; ?></p>
            </div>
            <div class="doctor-specialization">
                <p><?php echo $item['specialization']; ?></p>
            </div>
            <div class="doctor-prof-category">
                <p><?php echo $item['qualification']; ?></p>
            </div>
          </a>
        </div>
      <?php
      endforeach;
      ?>
    </div>
<!--      <div class="specialist-next">-->
<!--        <p>Дальше</p>-->
<!--        <img src="--><?php //echo get_template_directory_uri(); ?><!--/assets/img/arrow.svg">-->
<!--      </div>-->
</div>
</div>
<?php get_footer(); ?>
