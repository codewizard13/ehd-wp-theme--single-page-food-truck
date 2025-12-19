<?php
/**
 * CTA section
 */
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// $title       = sps_field( 'cta_title', 'Hungry? Come See TT Soul To Go' );
// $subtitle    = sps_field(
//     'cta_subtitle',
//     'Check our daily specials and swing by for a hot, affordable soul food plate.'
// );
// $button_text = sps_field( 'cta_button_text', 'Call to Ask What’s Cooking' );
// $button_url  = sps_field( 'cta_button_url', 'tel:13348679329' );

$cta = sps_data('cta');

?>
<section id="cta" class="section-cta">
  <div class="container cta-inner">
    <h2><?php echo esc_html( $cta['title'] ); ?></h2>
    <?php if ( $cta['subtitle'] ) : ?>
      <p><?php echo esc_html( $cta['subtitle'] ); ?></p>
    <?php endif; ?>
    <?php if ( $cta['button_text'] && $cta['button_url'] ) : ?>
      <a class="btn btn-primary" href="<?php echo esc_url( $cta['button_url'] ); ?>">
        <?php echo esc_html( $cta['button_text'] ); ?>
      </a>
    <?php endif; ?>
  </div>
</section>