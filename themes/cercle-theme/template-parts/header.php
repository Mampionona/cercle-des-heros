<?php if (!defined( 'ABSPATH')) exit; ?>
<header id="site-header" class="site-header w-100" role="banner">
	<div class="wrap">
		<div class="container-fluid">
			<div class="row align-items-center">
				<div class="col">
					<!-- <button class="menu-toggler pl-0" id="navbar-toggler"></button> -->
					<div class="hamburger hamburger--slider js-hamburger" id="navbar-toggler">
		        <div class="hamburger-box">
		          <div class="hamburger-inner"></div>
		        </div>
		      </div>
				</div>
				<div class="col text-center">
					<div class="logo">
						<?php the_custom_logo(); ?>
					</div>
				</div>
				<div class="col">
					<ul class="language-switcher list-unstyled d-flex justify-content-end mb-0"><?php pll_the_languages();?></ul>
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
