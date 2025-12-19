<?php
/**
 * FAQ section
 */
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

$title = sps_field( 'faq_title', 'Frequently Asked Questions' );
$items = function_exists( 'get_field' ) ? get_field( 'faq_items' ) : array();
/*
  Repeater "faq_items":
    - question
    - answer
*/
?>
<section id="faq" class="section-faq">
  <div class="container">
    <h2><?php echo esc_html( $title ); ?></h2>

    <?php if ( ! empty( $items ) ) : ?>
      <div class="faq-list">
        <?php foreach ( $items as $item ) : ?>
          <div class="faq-item">
            <?php if ( ! empty( $item['question'] ) ) : ?>
              <h3 class="faq-question"><?php echo esc_html( $item['question'] ); ?></h3>
            <?php endif; ?>
            <?php if ( ! empty( $item['answer'] ) ) : ?>
              <div class="faq-answer">
                <?php echo wp_kses_post( wpautop( $item['answer'] ) ); ?>
              </div>
            <?php endif; ?>
          </div>
        <?php endforeach; ?>
      </div>
    <?php endif; ?>
  </div>
</section>