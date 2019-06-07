<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class(); ?>>
    <div class="post-thumbnail">
      <?php
        if (has_post_thumbnail())
          the_post_thumbnail('blog-large', array('class' => 'img-fluid'));
        else
          echo '<img src="' . asset_path('images/placeholder-1920x1200.jpg') . '" class="img-fluid" alt>';
      ?>
    </div>
    <div class="container">
      <div class="row">
        <div class="col">
          <header>
            <h1 class="entry-title mb-4"><?php the_title(); ?></h1>
            <?php get_template_part('template-parts/entry', 'meta'); ?>
          </header>
          <div class="entry-content mt-5">
            <?php the_content(); ?>
          </div>
          <footer>
            <?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
          </footer>
          <?php // comments_template('/templates/comments.php'); ?>
        </div>
      </div>
    </div>
  </article>
<?php endwhile; ?>
