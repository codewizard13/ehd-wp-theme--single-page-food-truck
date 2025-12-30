<?php

/**
 * Call-to-action section template part
 *
 * Displays a prominent call-to-action with button.
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