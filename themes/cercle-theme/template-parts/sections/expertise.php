<?php $backgroundImage = get_field('background_image'); ?>

<div class="content--expertise">
  <div class="content" style="background-image: url(<?php echo $backgroundImage['url']; ?>)">
    <div class="container">
      <div class="row">
        <div class="col list-background">
          <?php echo $post->post_content; ?>
          <?php get_template_part('template-parts/learn', 'more'); ?>
        </div>
      </div>
    </div>
  </div>
  <div class="post-thumbnail">
    <?php the_post_thumbnail('expertise-thumb', array('class' => 'img-fluid')); ?>
  </div>
</div>
