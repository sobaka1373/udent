<?php
/*
Template Name: Service
Template Post Type: post, service_type
*/


?>
<?php get_header(); ?>
<?php
global $post;
$service['page_content1'] = get_field('page_content1', $post->ID);
$service['page_content2'] = get_field('page_content2', $post->ID);
$service['service_photo'] = get_field('service_photo', $post->ID, false);
$service['service_photo'] =  wp_get_attachment_image_src( $service['service_photo'], 'full');
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="service-type-page-container">
      <div class="page-content1-container">
        <div class="left">
          <div class="service-header header">
            <?php echo $post->post_title; ?>
          </div>
            <div class="service-content1">
                <?php echo $service['page_content1']; ?>
            </div>
        </div>
        <div class="right">
              <img src="<?php echo $service['service_photo'][0]; ?>" alt="" />
        </div>
      </div>
      <div class="page-content2-container">
          <?php echo $service['page_content2']; ?>
      </div>

      <div class="after-footer-row"></div>
    </div>
</article><!-- #post-<?php the_ID(); ?> -->

<?php get_footer(); ?>