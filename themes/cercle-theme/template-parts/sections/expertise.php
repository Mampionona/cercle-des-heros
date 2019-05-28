<?php
// $icons = get_post_meta($post->ID, 'icons', true);
$backgroundImage = get_field('background_image');
?>

<div class="content--expertise">
  <div class="content" style="background-image: url(<?php echo $backgroundImage['url']; ?>)">
    <?php echo $post->post_content; ?>
  </div>
  <div class="post-thumbnail">
    <?php the_post_thumbnail('expertise-thumb', array('class' => 'img-fluid')); ?>
  </div>
</div>
