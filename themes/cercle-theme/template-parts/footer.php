<?php if (!defined('ABSPATH')) exit; ?>
<footer id="site-footer" class="site-footer text-center text-xl-left" role="contentinfo">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-xl-auto">
				<div class="d-xl-flex">
					<div>
						<a href="<?php echo esc_url(home_url('/'));  ?>" class="brand">
							<img src="<?php echo asset_path('images/white-logo.png'); ?>" alt="<?php bloginfo('name'); ?>">
						</a>
					</div>
					<?php get_template_part('template', 'parts/address'); ?>
				</div>
			</div>
			<div class="col-xl">
				<nav class="footer-menu" id="footer-menu" role="navigation">
					<?php wp_nav_menu(array('theme_location' => 'footer', 'walker' => new Onepage_WalkerOverride())); ?>
				</nav>
			</div>
			<?php dynamic_sidebar('sidebar-footer'); ?>
			<?php get_template_part('template-parts/social-icons'); ?>
		</div>
	</div>
</footer>
