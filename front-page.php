<?php
/**
 * Front page (single-page layout)
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