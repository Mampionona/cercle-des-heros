<?php $backgroundImage = get_field('background_image'); ?>

<div class="section---champions">
  <div class="bg" style="background-image: url(<?php echo $backgroundImage['url']; ?>)">
    <?php include(locate_template("template-parts/page-header.php", false, false)); ?>
    <div class="container">
      <div class="row">
        <div class="col">
          <?php get_template_part('template-parts/experts'); ?>
        </div>
      </div>
    </div>
  </div>
  <div class="content">
    <div class="container">
      <div class="row">
        <div class="col">
          <?php echo $post->post_content; ?>
        </div>
      </div>
    </div>
  </div>
</div>
