<?php
$icons = get_post_meta($post->ID, 'icons', true);
$backgroundImage = get_field('background_image');
?>

<div class="content--vision">
  <div class="content text-white" style="background-image: url(<?php echo $backgroundImage['url']; ?>)">
    <?php echo $post->post_content; ?>
  </div>
  <div class="icons">
    <div class="d-flex justify-content-center flex-column flex-lg-row">
      <?php foreach ($icons as $icon) : ?>
        <?php if (!$icon['active']) continue; ?>
        <div class="icon-item text-center">
          <div class="d-inline-block">
            <div class="icon d-flex align-items-center justify-content-center">
              <img src="<?php echo wp_get_attachment_url($icon['icon']); ?>" alt>
            </div>
          </div>
          <div class="text"><?php echo $icon['text']; ?></div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
  <div class="post-thumbnail">
    <?php the_post_thumbnail('vision-thumb', array('class' => 'img-fluid')); ?>
  </div>
</div>
