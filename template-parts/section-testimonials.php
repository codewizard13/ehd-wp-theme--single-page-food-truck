<?php

/**
 * Testimonials section template part
 *
 * Displays customer testimonials in a grid layout.
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

$title        = sps_field( 'testimonials_title', 'What clients say' );
// $testimonials = function_exists( 'get_field' ) ? get_field( 'testimonials_items' ) : array();
$testimonials = sps_data('testimonials');


/*
  Repeater "testimonials_items":
    - quote
    - name
    - role
*/
?>
<section id="testimonials" class="section-testimonials">
  <div class="container">
    <h2><?php echo esc_html( $title ); ?></h2>

    <?php if ( ! empty( $testimonials ) ) : ?>
      <div class="testimonials-grid">
        <?php foreach ( $testimonials as $testimonial ) : ?>
          <blockquote class="testimonial">
            <?php if ( ! empty( $testimonial['quote'] ) ) : ?>
              <p class="testimonial-quote">
                “<?php echo esc_html( $testimonial['quote'] ); ?>”
              </p>
            <?php endif; ?>
            <footer class="testimonial-footer">
              <?php if ( ! empty( $testimonial['name'] ) ) : ?>
                <span class="testimonial-name"><?php echo esc_html( $testimonial['name'] ); ?></span>
              <?php endif; ?>
              <?php if ( ! empty( $testimonial['role'] ) ) : ?>
                <span class="testimonial-role"> — <?php echo esc_html( $testimonial['role'] ); ?></span>
              <?php endif; ?>
            </footer>
          </blockquote>
        <?php endforeach; ?>
      </div>
    <?php endif; ?>
  </div>
</section>