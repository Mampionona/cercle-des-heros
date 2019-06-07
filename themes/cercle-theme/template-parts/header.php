<?php if (!defined( 'ABSPATH')) exit; ?>
<header id="site-header" class="site-header w-100" role="banner">
	<div class="wrap">
		<div class="container-fluid">
			<div class="row align-items-center">
				<div class="col">
					<?php get_template_part('template-parts/partials/hamburger'); ?>
				</div>
				<div class="col text-center">
					<div class="logo">
						<?php the_custom_logo(); ?>
					</div>
				</div>
				<div class="col">
					<?php get_template_part('template-parts/partials/switcher'); ?>
				</div>
			</div>
		</div>
		<nav id="top-menu" class="primary-menu" role="navigation">
			<?php wp_nav_menu(array(
				'theme_location' => 'primary',
				'menu_class' => 'list-unstyled d-block text-center',
				'walker' => new Onepage_WalkerOverride()
			)); ?>
		</nav>
	</div>
</header>
<div class="sticky-header" id="sticky-header">
	<div class="container-fluid">
		<div class="row align-items-center">
			<div class="col">
				<?php get_template_part('template-parts/partials/hamburger'); ?>
			</div>
			<div class="col text-center">
				<div class="logo">
					<a href="<?php echo esc_url(home_url('/')); ?>">
						<img src="<?php echo asset_path('images/sticky-logo.png'); ?>" alt="<?php bloginfo('name'); ?>">
					</a>
				</div>
			</div>
			<div class="col">
				<?php get_template_part('template-parts/partials/switcher'); ?>
			</div>
		</div>
	</div>
</div>
