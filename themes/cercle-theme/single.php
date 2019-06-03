<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

get_header();
?>

<?php get_template_part('template-parts/content-single', get_post_type()); ?>


<?php get_footer();
