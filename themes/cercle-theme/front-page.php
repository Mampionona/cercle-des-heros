<?php
if ( ! defined( 'ABSPATH' ) ) exit;

get_header();

$query = apply_filters('one_page', get_option('page_on_front'));

while ($query->have_posts()) {
  $query->the_post();
}

wp_reset_postdata();

get_footer();
