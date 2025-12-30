<?php

/**
 * Services section template part
 *
 * Renders a responsive grid of services or menu items for the single-page site.
 * Data is sourced via EHD helper functions:
 * - sps_field() for the section title and intro
 * - sps_data() for the menu/service items
 *
 * This template expects each dish in the food_menu array to include:
 * - image_url (string): URL of the dish image
 * - title (string): dish name
 * - desc (string): dish description
 *
 * The output includes:
 * - A section heading
 * - An optional subtitle/intro
 * - A grid of cards with image, title, and description
 *
 * @package EHD_WP_Theme__Single_Page_Food_Truck
 * @subpackage Template_Parts
 * @category Theme
 * @author Eric Hepperle Designs
 * @version 1.0.0
 * @since   1.0.0
 * @license GPL-2.0+
 * @see     sps_field(), sps_data()
 * @global  none
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

$title = sps_field( 'services_title', 'Hot Plates & Daily Specials' );
$intro = sps_field( 'services_intro', 'Lunch menu & sides change daily. Call to ask what\'s cooking!' );

$food_menu = sps_data('food_menu');

?>
<section id="services" class="section-services">
  <div class="container">
    <h2><?php echo esc_html( $title ); ?></h2>
    <?php if ( $intro ) : ?>
      <p class="section-subtitle"><?php echo esc_html( $intro ); ?></p>
    <?php endif; ?>

    <div class="services-grid">
      <?php foreach ( $food_menu as $dish ) : ?>
        <div class="service-item">
          <?php if ( ! empty( $dish['image_url'] ) ) : ?>
            <img src="<?php echo esc_url( $dish['image_url'] ); ?>" 
                 alt="<?php echo esc_attr( $dish['title'] ); ?>" 
                 style="width:100%; height:140px; object-fit:cover; border-radius:12px; margin-bottom:12px;">
          <?php endif; ?>
          <?php if ( ! empty( $dish['title'] ) ) : ?>
            <h3><?php echo esc_html( $dish['title'] ); ?></h3>
          <?php endif; ?>
          <?php if ( ! empty( $dish['desc'] ) ) : ?>
            <p><?php echo esc_html( $dish['desc'] ); ?></p>
          <?php endif; ?>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>
