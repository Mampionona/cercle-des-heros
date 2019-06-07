<?php
/**
 * The template for displaying 404 pages (not found).
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
?>
<main id="main" class="site-main" role="main">

	<div class="container">
		<div class="row">
			<div class="col text-center">
				<header class="page-header">
					<h1 class="entry-title"><?php esc_html_e('The page can&rsquo;t be found.', 'cercle-des-heros'); ?></h1>
				</header>

				<div class="page-content mt-5">
					<p class="mb-0">
						<a href="<?php echo esc_url(home_url('/')); ?>" class="btn btn-secondary">
							<?php _e('Revenir à l\'accueil', 'cercle-des-heros'); ?>
						</a>
					</p>
				</div>
			</div>
		</div>
	</div>
</main>
