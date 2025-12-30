<?php

/**
 * Hero section template part
 *
 * Displays the main hero banner with headline, subheadline, and call-to-action.
 *
 * @package EHD_Single_Page_Food_Truck
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

$hero = sps_data('hero');
$food_menu = sps_data('food_menu');

?>
<section id="hero" class="section-hero">
  <div class="container hero-inner">
    <div class="hero-content">
      <div class="hero-badges">
        <span class="hero-badge">Geneva, AL · Dothan · Enterprise</span>
        <span class="hero-badge">Daily Soul Food Specials</span>
      </div>
      <h1><?php echo esc_html( $hero['headline'] ); ?></h1>
      <p><?php echo esc_html( $hero['subheadline'] ); ?></p>
      <a class="btn btn-primary" href="<?php echo esc_url( $hero['button_url'] ); ?>">
        <?php echo esc_html( $hero['button_text'] ); ?>
      </a>
      <div class="hero-meta">
        <span>"Cooked from the soul, affordable for everyone" — Jackie Morris</span>
      </div>
    </div>
    <div class="hero-media">
      <img src="<?php echo esc_url( $food_menu['Fried Chicken']['image_url'] ); ?>" alt="<?php echo esc_attr( $food_menu['Fried Chicken']['alt'] ); ?>">
      <div class="hero-tag">Fresh Daily</div>
    </div>
  </div>
</section>
