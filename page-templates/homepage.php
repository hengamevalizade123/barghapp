<?php
/* Template Name: Home Page */
get_header();

//include get_template_directory() . '/template-parts/partials/home/svgs.php';
include get_template_directory() . '/template-parts/partials/home/hero.php';
include get_template_directory() . '/template-parts/partials/home/vision.php';
include get_template_directory() . '/template-parts/partials/home/city.php';
include get_template_directory() . '/template-parts/partials/home/about.php';
include get_template_directory() . '/template-parts/partials/home/customers.php';
include get_template_directory() . '/template-parts/partials/home/certificates.php';
include get_template_directory() . '/template-parts/partials/home/social-responsibility.php';
include get_template_directory() . '/template-parts/partials/home/faq.php';
include get_template_directory() . '/template-parts/partials/home/home-blog.php';

get_footer();
