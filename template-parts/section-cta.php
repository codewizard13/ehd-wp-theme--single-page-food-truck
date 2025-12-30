<?php
/**
 * CTA section
 */
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

$cta = sps_data('cta');
$phone_num = sps_fmt_phone( sps_data('business')['phone'], 3);
$cta_btn_url = "tel:1$phone_num";

?>
<section id="cta" class="section-cta">
  <div class="container cta-inner">
    <h2><?php echo esc_html( $cta['title'] ); ?></h2>
    <?php if ( $cta['subtitle'] ) : ?>
      <p><?php echo esc_html( $cta['subtitle'] ); ?></p>
    <?php endif; ?>
    <?php if ( $cta['button_text'] && $cta_btn_url ) : ?>
      <a class="btn btn-primary" href="<?php echo esc_url( $cta_btn_url ); ?>">
        <?php echo esc_html( $cta['button_text'] ); ?>
      </a>
    <?php endif; ?>
  </div>
</section>