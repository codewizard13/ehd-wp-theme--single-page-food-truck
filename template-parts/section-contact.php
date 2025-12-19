<?php
/**
 * Contact section - TT Soul To Go
 */
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

$title   = "Get In Touch";
$intro   = "Call to ask about today's menu or where the truck will be parked.";
$address = "492 Goat Hill Rd, Geneva, AL 36340";
$phone   = "(334) 867-9329";
$email   = "ttsoultogo@gmail.com";
?>
<section id="contact" class="section-contact">
  <div class="container contact-inner">
    <div class="contact-details">
      <h2><?php echo esc_html( $title ); ?></h2>
      <p><?php echo esc_html( $intro ); ?></p>

      <ul class="contact-list">
        <li><strong>📍 Address:</strong> <?php echo esc_html( $address ); ?></li>
        <li><strong>📱 Phone:</strong> 
          <a href="tel:+13348679329"><?php echo esc_html( $phone ); ?></a>
        </li>
        <li><strong>✉️ Email:</strong> 
          <a href="mailto:ttsoultogo@gmail.com"><?php echo esc_html( $email ); ?></a>
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
