<?php

/**
 * About section template part
 *
 * Displays the about section with business story and image.
 *
 * @package EHD_WP_Theme__Single_Page_Food_Truck
 * @subpackage Template_Parts
 * @category Theme
 * @author Eric Hepperle Designs
 * @version 1.0.0
 * @license GPL-2.0+
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

$about = sps_data('about');

?>
<section id="about" class="section-about">
  <div class="container about-inner">
    <div class="about-text">
      <h2><?php echo esc_html( $about['title'] ); ?></h2>
      <div class="about-body"><?php echo wp_kses_post( wpautop( $about['content'] ) ); ?></div>
    </div>
    <div class="about-media">
      <img src="<?php echo esc_url( $about['image_url'] ); ?>" alt="<?php echo esc_attr( $about['image_alt'] ); ?>">
    </div>
  </div>
</section>
