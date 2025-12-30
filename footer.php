<?php

/**
 * Footer template
 *
 * Contains the site footer and closing HTML tags.
 *
 * @package EHD_WP_Theme__Single_Page_Food_Truck
 * @author Eric Hepperle Designs
 * @version 1.0.0
 * @license GPL-2.0+
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}
?>
</main><!-- #site-content -->

<footer id="site-footer">
  <div class="container footer-inner">
    <p>&copy; <?php echo date( 'Y' ); ?> <?php echo esc_html(sps_data('business', 'legal')) ?>. All rights reserved.</p>
    <?php
    // Optional: output menu or policy links.
    ?>
  </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>