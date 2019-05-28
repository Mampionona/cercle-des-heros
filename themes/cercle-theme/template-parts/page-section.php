<?php
global $post;
$postName = $post->post_name;
$backgroundImage = get_field('background_image');
$template = get_field('template');
if (!$template) {
  $template = 'default';
}
?>

<section class="section-item <?php echo $postName; ?>" id="<?php echo $postName; ?>">
  <h2 class="section-title"><?php echo $post->post_title; ?></h2>
  <?php include(locate_template("template-parts/sections/{$template}.php")); ?>
</section>
