<?php if (!defined('ABSPATH')) exit; ?>
<footer id="site-footer" class="site-footer" role="contentinfo">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-auto col-xs-12">
				<div class="d-flex">
					<div>
						<a href="<?php echo esc_url(home_url('/'));  ?>" class="brand">
							<img src="<?php echo asset_path('images/white-logo.png'); ?>" alt="<?php bloginfo('name'); ?>">
						</a>
					</div>
					<?php get_template_part('template', 'parts/address'); ?>
				</div>
			</div>
			<div class="col col-xs-12">
				<nav class="footer-menu" id="footer-menu" role="navigation">
					<?php wp_nav_menu(array('theme_location' => 'footer', 'walker' => new Onepage_WalkerOverride())); ?>
				</nav>
			</div>
			<?php dynamic_sidebar('sidebar-footer'); ?>
			<?php get_template_part('template-parts/social-icons'); ?>
		</div>
	</div>
</footer>
