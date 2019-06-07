<article <?php post_class('mb-5'); ?>>
  <div class="card card-cascade border-0">
    <div class="view view-cascade overlay mb-5">
      <a href="<?php the_permalink(); ?>" class="link d-block">
        <?php if (has_post_thumbnail()) : ?>
          <?php the_post_thumbnail('blog-thumb'); ?>
        <?php else : ?>
          <img src="<?php echo asset_path('images/placeholder.jpg'); ?>" class="img-fluid" alt />
        <?php endif; ?>
      </a>
    </div>
    <header>
      <h2 class="entry-title mb-4"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    </header>
    <div class="entry-summary mb-3">
      <?php the_excerpt(); ?>
    </div>
    <footer>
      <?php get_template_part('template-parts/entry', 'meta'); ?>
    </footer>
  </div>
</article>
