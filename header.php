<?php

/**
 * Header template
 *
 * Contains the site header, navigation, and branding.
 *
 * @package SinglePageStarter
 * @author Eric Hepperle
 * @version 1.5.0
 * @license GPL-2.0+
 * @since 1.0.0
 */

if (!defined('ABSPATH')) {
  exit;
}
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <header id="site-header">
    <div class="container header-inner">
      <div class="site-branding">
        <?php if (has_custom_logo()): ?>
          <?php the_custom_logo(); ?>
        <?php else: ?>
          <a href="<?php echo esc_url(home_url('/')); ?>" class="site-title">
            <?php bloginfo('name'); ?>
          </a>
        <?php endif; ?>
      </div>

      <nav id="site-navigation" class="main-navigation">
        <ul class="nav-list">
          <li><a href="#hero">Home</a></li>
          <li><a href="#services">Services</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#testimonials">Testimonials</a></li>
          <li><a href="#faq">FAQ</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
      </nav>
    </div>
  </header>
  <main id="site-content"></main>