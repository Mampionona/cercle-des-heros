<?php
global $post;
$postName = $post->post_name;
$backgroundImage = get_field('background_image');
$template = get_field('template');
if (!$template) {
  $template = 'default';
}
?>

<section class="section-item section--<?php echo $template; ?> <?php echo $postName; ?>" id="<?php echo $postName; ?>">
  <?php if ($template === 'champions') : ?>
    <div class="bg position-absolute w-100" style="background-image: url(<?php echo $backgroundImage['url']; ?>)"></div>
  <?php endif; ?>
  <?php include(locate_template("template-parts/sections/{$template}.php", false, false)); ?>
</section>
