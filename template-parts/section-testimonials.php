<?php
/**
 * Testimonials section
 */
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

$title        = sps_field( 'testimonials_title', 'What clients say' );
$testimonials = function_exists( 'get_field' ) ? get_field( 'testimonials_items' ) : array();
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