<?php

/**
 * Front page template
 *
 * Displays the main single-page layout with all sections.
 *
 * @package EHD_Single_Page_Food_Truck
 * @author Eric Hepperle Designs
 * @version 1.0.0
 * @license GPL-2.0+
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

get_header();
?>

<?php get_template_part( 'template-parts/section', 'hero' ); ?>
<?php get_template_part( 'template-parts/section', 'services' ); ?>
<?php get_template_part( 'template-parts/section', 'about' ); ?>
<?php get_template_part( 'template-parts/section', 'testimonials' ); ?>
<?php get_template_part( 'template-parts/section', 'faq' ); ?>
<?php get_template_part( 'template-parts/section', 'cta' ); ?>
<?php get_template_part( 'template-parts/section', 'contact' ); ?>

<?php
get_footer();