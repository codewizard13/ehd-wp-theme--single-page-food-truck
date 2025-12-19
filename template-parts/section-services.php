<?php
/**
 * Menu Highlights section
 */
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

$title = sps_field( 'services_title', 'Hot Plates & Daily Specials' );
$intro = sps_field( 'services_intro', 'Lunch menu & sides change daily. Call to ask what\'s cooking!' );

// BUILT-IN MENU ITEMS with free images
$services = array(
    array(
        'service_title' => 'BBQ Pork Plate',
        'service_description' => 'Slow-smoked pork shoulder, cornbread & two hot sides.',
        'service_image' => 'https://images.unsplash.com/photo-1567620905732-2d1ec7ab7445?w=300&fit=crop'
    ),
    array(
        'service_title' => 'Fried Chicken',
        'service_description' => 'Crispy golden fried chicken with daily sides.',
        'service_image' => 'https://images.unsplash.com/photo-1621996346565-e3dbc353d2e5?w=300&fit=crop'
    ),
    array(
        'service_title' => 'Chili & Chili Dogs',
        'service_description' => 'Hearty homemade chili, also on hot dogs.',
        'service_image' => 'https://images.pexels.com/photos/1279330/pexels-photo-1279330.jpeg?w=300&fit=crop'
    ),
    array(
        'service_title' => 'Fried Fish Plate',
        'service_description' => 'Crispy fried fish with your choice of sides.',
        'service_image' => 'https://images.unsplash.com/photo-1579586140626-5981f5e8f90d?w=300&fit=crop'
    )
);
?>
<section id="services" class="section-services">
  <div class="container">
    <h2><?php echo esc_html( $title ); ?></h2>
    <?php if ( $intro ) : ?>
      <p class="section-subtitle"><?php echo esc_html( $intro ); ?></p>
    <?php endif; ?>

    <div class="services-grid">
      <?php foreach ( $services as $service ) : ?>
        <div class="service-item">
          <?php if ( ! empty( $service['service_image'] ) ) : ?>
            <img src="<?php echo esc_url( $service['service_image'] ); ?>" 
                 alt="<?php echo esc_attr( $service['service_title'] ); ?>" 
                 style="width:100%; height:140px; object-fit:cover; border-radius:12px; margin-bottom:12px;">
          <?php endif; ?>
          <?php if ( ! empty( $service['service_title'] ) ) : ?>
            <h3><?php echo esc_html( $service['service_title'] ); ?></h3>
          <?php endif; ?>
          <?php if ( ! empty( $service['service_description'] ) ) : ?>
            <p><?php echo esc_html( $service['service_description'] ); ?></p>
          <?php endif; ?>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>
