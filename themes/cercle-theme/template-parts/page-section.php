<?php
global $post;
$postName = $post->post_name;
$template = get_field('template');
if (!$template) {
  $template = 'default';
}
?>

<section class="section-item section--<?php echo $template; ?> <?php echo $postName; ?>" id="<?php echo $postName; ?>">
  <?php include(locate_template("template-parts/sections/{$template}.php", false, false)); ?>
</section>
