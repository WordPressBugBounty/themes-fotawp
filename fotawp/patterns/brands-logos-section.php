<?php

/**
 * Title: Brands Logos Section
 * Slug: fotawp/brands-logos-section
 * Categories: fotawp
 */
$fotawp_url = trailingslashit(get_template_directory_uri());
$fotawp_images = array(
  $fotawp_url . 'assets/images/logo1.png',
  $fotawp_url . 'assets/images/logo2.png',
  $fotawp_url . 'assets/images/logo3.png',
  $fotawp_url . 'assets/images/logo4.png',
  $fotawp_url . 'assets/images/logo5.png',
  $fotawp_url . 'assets/images/logo6.png',
);
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|80"}}},"backgroundColor":"background","layout":{"type":"constrained","justifyContent":"center","contentSize":"1180px"}} -->
<div class="wp-block-group has-background-background-color has-background" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:heading {"level":5,"style":{"typography":{"fontStyle":"normal","fontWeight":"600","textAlign":"center"}},"fontSize":"medium"} -->
  <h5 class="wp-block-heading has-text-align-center has-medium-font-size" style="font-style:normal;font-weight:600"><?php esc_html_e('Trusted and used by 50+ Brands', 'fotawp') ?></h5>
  <!-- /wp:heading -->

  <!-- wp:gallery {"columns":6,"imageCrop":false,"linkTo":"none","sizeSlug":"full","align":"center","className":"fotawp-brands-logos is-style-enable-grayscale-mode-on-image","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|70","left":"var:preset|spacing|70"},"margin":{"top":"var:preset|spacing|70","right":"0"},"padding":{"right":"0","left":"0","bottom":"var:preset|spacing|50"}}}} -->
  <figure class="wp-block-gallery aligncenter has-nested-images columns-6 fotawp-brands-logos is-style-enable-grayscale-mode-on-image" style="margin-top:var(--wp--preset--spacing--70);margin-right:0;padding-right:0;padding-bottom:var(--wp--preset--spacing--50);padding-left:0"><!-- wp:image {"id":5901,"sizeSlug":"full","linkDestination":"none"} -->
    <figure class="wp-block-image size-full"><img src="<?php echo esc_url($fotawp_images[0]) ?>" alt="" class="wp-image-5901" /></figure>
    <!-- /wp:image -->

    <!-- wp:image {"id":5902,"sizeSlug":"full","linkDestination":"none"} -->
    <figure class="wp-block-image size-full"><img src="<?php echo esc_url($fotawp_images[1]) ?>" alt="" class="wp-image-5902" /></figure>
    <!-- /wp:image -->

    <!-- wp:image {"id":5903,"sizeSlug":"full","linkDestination":"none"} -->
    <figure class="wp-block-image size-full"><img src="<?php echo esc_url($fotawp_images[2]) ?>" alt="" class="wp-image-5903" /></figure>
    <!-- /wp:image -->

    <!-- wp:image {"id":5904,"sizeSlug":"full","linkDestination":"none"} -->
    <figure class="wp-block-image size-full"><img src="<?php echo esc_url($fotawp_images[3]) ?>" alt="" class="wp-image-5904" /></figure>
    <!-- /wp:image -->

    <!-- wp:image {"id":5906,"sizeSlug":"full","linkDestination":"none"} -->
    <figure class="wp-block-image size-full"><img src="<?php echo esc_url($fotawp_images[4]) ?>" alt="" class="wp-image-5906" /></figure>
    <!-- /wp:image -->

    <!-- wp:image {"id":5910,"sizeSlug":"full","linkDestination":"none"} -->
    <figure class="wp-block-image size-full"><img src="<?php echo esc_url($fotawp_images[5]) ?>" alt="" class="wp-image-5910" /></figure>
    <!-- /wp:image -->
  </figure>
  <!-- /wp:gallery -->
</div>
<!-- /wp:group -->