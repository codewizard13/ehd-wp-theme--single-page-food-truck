<?php

/**
 * Contact section template part
 *
 * Displays contact information, map, and contact form.
 *
 * @package EHD_WP_Theme__Single_Page_Food_Truck
 * @subpackage Template_Parts
 * @category Theme
 * @author Eric Hepperle Designs
 * @version 1.0.0
 * @license GPL-2.0+
 * @since 1.0.0
 */

if (!defined('ABSPATH')) {
  exit;
}

$contact = sps_data('contact');
$business = sps_data('business');

$phone_disp = sps_fmt_phone(sps_data('business')['phone']);
$phone_url = sps_fmt_phone(sps_data('business')['phone'], 3);

$cta_btn_url = "tel:1$phone_url";

?>
<section id="contact" class="section-contact">
  <div class="container contact-inner">
    <div class="contact-details">
      <h2><?php echo esc_html($contact['title']); ?></h2>
      <p><?php echo esc_html($contact['intro']); ?></p>

      <ul class="contact-list">
        <li><strong>📍 Address:</strong> <?php echo esc_html($contact['address']); ?></li>
        <li><strong>📱 Phone:</strong>
          <a href="tel:1<?php echo esc_html($phone_url) ?>"><?php echo esc_html($phone_disp); ?></a>
        </li>
        <li><strong>✉️ Email:</strong>
          <a href="mailto:<?php echo esc_html($contact['email']); ?>"><?php echo esc_html($contact['email']); ?></a>
        </li>
        <li><strong>Facebook:</strong> <a href="<?php echo esc_attr($business['facebook']) ?>"><?php echo esc_html($business['facebook']) ?></a> </li>
      </ul>
    </div>
    <div class="contact-form">
      <p style="font-size:0.9rem;color:#9ca3af;text-align:center;padding:20px;">
        📞 Call or message for today's specials!
      </p>
    </div>
  </div>
</section>