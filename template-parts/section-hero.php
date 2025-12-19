<?php
/**
 * Hero section - TT Soul To Go
 */
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

$headline    = sps_field( 'hero_headline', "Soul Food from the Heart" );
$subheadline = sps_field( 'hero_subheadline', "Hot plates of chili, BBQ pork, fried chicken, fish, ribs & daily specials from Geneva, AL." );
$button_text = sps_field( 'hero_button_text', 'See Today\'s Menu' );
$button_url  = sps_field( 'hero_button_url', '#services' );

// BUILT-IN HERO IMAGE (fried chicken plate)
$hero_image = array(
    'url' => 'https://images.unsplash.com/photo-1621996346565-e3dbc353d2e5?w=800&fit=crop&crop=entropy',
    'alt' => 'Hot fried chicken plate from TT Soul To Go'
);
?>
<section id="hero" class="section-hero">
  <div class="container hero-inner">
    <div class="hero-content">
      <div class="hero-badges">
        <span class="hero-badge">Geneva, AL · Dothan · Enterprise</span>
        <span class="hero-badge">Daily Soul Food Specials</span>
      </div>
      <h1><?php echo esc_html( $headline ); ?></h1>
      <p><?php echo esc_html( $subheadline ); ?></p>
      <a class="btn btn-primary" href="<?php echo esc_url( $button_url ); ?>">
        <?php echo esc_html( $button_text ); ?>
      </a>
      <div class="hero-meta">
        <span>"Cooked from the soul, affordable for everyone" — Jackie Morris</span>
      </div>
    </div>
    <div class="hero-media">
      <img src="<?php echo esc_url( $hero_image['url'] ); ?>" alt="<?php echo esc_attr( $hero_image['alt'] ); ?>">
      <div class="hero-tag">Fresh Daily</div>
    </div>
  </div>
</section>
