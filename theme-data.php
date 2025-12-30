<?php

/**
 * Theme data configuration
 *
 * Centralized data array for theme content and settings.
 *
 * @package EHD_WP_Theme__Single_Page_Food_Truck
 * @author Eric Hepperle Designs
 * @version 1.0.0
 * @license GPL-2.0+
 * @since 1.5.0
 */

if (!defined('ABSPATH'))
    exit;

return array(
    'hero' => array(
        'headline' => 'Soul Food from the Heart',
        'subheadline' => 'Hot plates of chili, BBQ pork, fried chicken, fish, ribs & daily specials from Ozark, AL.',
        'button_text' => 'See Today\'s Menu',
        'button_url' => '#services',
        'badges' => [
            'service_area' => 'Ozark · Troy · Eufaula',
            'menu_highlight' => 'Daily Soul Food Specials',
        ],
        'image_url' => 'https://images.unsplash.com/photo-1621996346565-e3dbc353d2e5?w=800&fit=crop',
        'image_alt' => 'Fictional replacement: Finger Lickin’ Chicken fried dish',
        'quote' => [
            'content' => 'Cooked from the soul, affordable for everyone',
            'source' => 'Mack Turner',
        ],
    ),
    'business' => array(
        'name' => 'Finger Lickin’ Chicken',
        'legal' => 'Finger Lickin’ Chicken LLC',
        'owner' => 'Marcus “Mack” Turner',
        'address' => '123 Main St, Ozark, AL 36360',
        'phone' => '(555) 482-9183',
        'email' => 'mack.turner@flchicken.com',
        // 'facebook' => 'Search "Finger Lickin’ Chicken" on Facebook'
        'facebook' => 'https://www.facebook.com/fingerlickinchickenal',
    ),
    'food_menu' => array(
        'BBQ Pork Plate' => [
            'title' => 'BBQ Pork Plate',
            'desc' => 'Slow-smoked pork, cornbread & two sides.',
            'image_url' => 'https://images.unsplash.com/photo-1567620905732-2d1ec7ab7445?w=300&fit=crop',
            'alt' => 'BBQ Pork Plate'
        ],
        'Fried Chicken' => [
            'title' => 'Fried Chicken',
            'desc' => 'Crispy golden fried with daily sides.',
            'image_url' => 'https://images.unsplash.com/photo-1690519315565-c31ce99f8d58?w=300&fit=crop',
            'alt' => 'Fried Chicken'
        ],
        'Chili & Dogs' => [
            'title' => 'Chili & Dogs',
            'desc' => 'Hearty homemade chili on hot dogs.',
            'image_url' => 'https://images.pexels.com/photos/1279330/pexels-photo-1279330.jpeg?w=300&fit=crop',
            'alt' => 'Chili & Dogs'
        ],
        'Fried Fish' => [
            'title' => 'Fried Fish',
            'desc' => 'Crispy fried fish plate & sides.',
            'image_url' => 'https://images.unsplash.com/photo-1579208030886-b937da0925dc?w=300&fit=crop',
            'alt' => 'Fried Fish'
        ],
    ),
    'about' => array(
        'title' => 'About Finger Lickin’ Chicken',
        'content' => "Owned by Marcus 'Mack' Turner at 123 Main St, Ozark AL. " .
            '<strong>Our mission:</strong> To serve crave-worthy fried chicken prepared with care and flavor. ' .
            'Serving Ozark, Dothan, Enterprise and surrounding areas from our mobile kitchen.',
        'image_url' => 'https://images.pexels.com/photos/1639557/pexels-photo-1639557.jpeg?w=500&fit=crop',
        'image_alt' => 'Finger Lickin’ Chicken food truck'
    ),
    'contact' => [
        'title' => "Get In Touch",
        'intro' => "Call to ask about today's menu or where the truck will be parked.",
        'address' => "123 Main St, Ozark, AL 36360",
        'phone' => "(555) 482-9183",
        'email' => "mack.turner@flchicken.com",
    ],
    'cta' => array(
        'title' => 'Hungry? Come Eat!',
        'subtitle' => 'Check our daily specials and swing by for a hot, affordable soul food plate.',
        'button_text' => 'Call Now',
        'button_url' => 'tel:+15554829183'
    ),
    'testimonials' => [
        ['quote' => 'Nothing beats the fried chicken that tastes like Sunday dinner at grandma’s house.', 'name' => 'MaryLou Jenkins', 'role' => 'Local Homemaker'],
        ['quote' => 'Their cornbread and collard greens are worth the drive from town.', 'name' => 'Jimbo Carter', 'role' => 'Farmer'],
        ['quote' => 'Fast, friendly service and the best pecan pie I’ve had in ages.', 'name' => 'Sharon Reed', 'role' => 'Retired Nurse'],
        ['quote' => 'The soul in every bite—comfort food done right.', 'name' => 'Bobby Lee', 'role' => 'Truck Driver'],
        ['quote' => 'We feed the football team here every game night. Always a crowd pleaser.', 'name' => 'Coach Daniels', 'role' => 'School Coach'],
        ['quote' => 'The hush puppies alone are worth the trip. Tender meat, big flavor.', 'name' => 'Linda Mae', 'role' => 'Stay-at-Home Mom'],
        ['quote' => 'Kid-friendly portions, big flavors, and a smile with every plate.', 'name' => 'Clyde Turner', 'role' => 'Small Business Owner'],
        ['quote' => 'If you’re hungry after church, this is the place to be.', 'name' => 'Grace Thompson', 'role' => 'Church Member'],
        ['quote' => 'Practical, hearty meals that remind you of home.', 'name' => 'Ralph Davis', 'role' => 'Mechanic'],
        ['quote' => 'We come here every Sunday. It’s the taste of home in every bite.', 'name' => 'Ella Mae', 'role' => 'Grandmother'],
    ],
    'faq' => [
        [
            'question' => 'Do y’all serve breakfast?',
            'answer' => 'Yes, ma’am! We open early with biscuits, gravy, and fresh-brewed coffee starting at 6:30 AM.'
        ],
        [
            'question' => 'Can I call ahead to order takeout?',
            'answer' => 'Absolutely. Just give us a ring and we’ll have your fried chicken and sides ready when you get here.'
        ],
        [
            'question' => 'Do you cater church events or family reunions?',
            'answer' => 'You bet. We’ve catered everything from Sunday potlucks to wedding receptions. Give us a few days’ notice and we’ll handle the cooking.'
        ],
        [
            'question' => 'Are your sides homemade?',
            'answer' => 'Every single one. From our mac ’n’ cheese to our collard greens, it’s all made fresh in-house every morning.'
        ],
        [
            'question' => 'Do you have vegetarian options?',
            'answer' => 'We sure do! Try our fried okra, black-eyed peas, and cornbread — all cooked Southern-style with love.'
        ],
        [
            'question' => 'What are your hours?',
            'answer' => 'We’re open Monday through Saturday, 6:30 AM to 8:00 PM, and closed on Sundays to spend time with family and the Lord.'
        ],
    ],
);
