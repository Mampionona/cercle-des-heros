<?php
/**
 * The template for displaying archive pages.
 */

if (!defined('ABSPATH')) exit;
?>
<main id="main" class="site-main" role="main">
	<div class="container">
		<div class="row">
			<div class="col">
				<h1 class="mb-5">Blog</h1>
				<?php while (have_posts()) : the_post(); ?>
				  <?php get_template_part('template-parts/content', get_post_type()); ?>
				<?php endwhile; ?>
				<?php
				  $links = paginate_links(array(
						'type' => 'array',
				    'prev_next' => false
					));
				?>
				<?php if ($links) : ?>
				  <nav>
				    <ul class="pagination justify-content-center">
				      <?php foreach ($links as $link) : ?>
				        <li class="page-item"><?php echo $link; ?></li>
				      <?php endforeach; ?>
				    </ul>
				  </nav>
				<?php endif; ?>
			</div>
		</div>
	</div>
</main>
