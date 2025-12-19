<?php
/**
 * Contact section - TT Soul To Go
 */
if (!defined('ABSPATH')) {
  exit;
}

$contact = sps_data('contact');

?>
<section id="contact" class="section-contact">
  <div class="container contact-inner">
    <div class="contact-details">
      <h2><?php echo esc_html($contact['title']); ?></h2>
      <p><?php echo esc_html($contact['intro']); ?></p>

      <ul class="contact-list">
        <li><strong>📍 Address:</strong> <?php echo esc_html($contact['address']); ?></li>
        <li><strong>📱 Phone:</strong>
          <a href="tel:+1-<?php echo esc_html($contact['phone']); ?>"><?php echo esc_html($contact['phone']); ?></a>
        </li>
        <li><strong>✉️ Email:</strong>
          <a href="mailto:<?php echo esc_html($contact['email']); ?>"><?php echo esc_html($contact['email']); ?></a>
        </li>
        <li><strong>Facebook:</strong> Search "TT Soul To Go"</li>
      </ul>
    </div>
    <div class="contact-form">
      <p style="font-size:0.9rem;color:#9ca3af;text-align:center;padding:20px;">
        📞 Call or message for today's specials!
      </p>
    </div>
  </div>
</section>