<?php
/**
 * Hero section - TT Soul To Go
 */
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// $headline    = sps_field( 'hero_headline', "Soul Food from the Heart" );
// $subheadline = sps_field( 'hero_subheadline', "Hot plates of chili, BBQ pork, fried chicken, fish, ribs & daily specials from Geneva, AL." );
// $button_text = sps_field( 'hero_button_text', 'See Today\'s food_Menu' );
// $button_url  = sps_field( 'hero_button_url', '#services' );

$hero = sps_data('hero');
$food_menu = sps_data('food_menu');
  error_log(basename(__FILE__) . ': ' . __LINE__ . ' - ' . '$food_menu: ' . print_r($food_menu, 1));



// BUILT-IN HERO IMAGE (fried chicken plate)
// $hero_image = array(
//     'url' => 'https://images.unsplash.com/photo-1690519315565-c31ce99f8d58?w=300&fit=crop',
//     'alt' => 'Hot fried chicken plate from TT Soul To Go'
// );
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
