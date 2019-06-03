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
  <div class="page-header">
    <div class="container">
      <div class="row">
        <div class="col">
          <h2 class="section-title">
            <span class="line"></span>
            <?php echo $post->post_title; ?>
          </h2>
        </div>
      </div>
    </div>
  </div>
  <?php include(locate_template("template-parts/sections/{$template}.php", false, false)); ?>
</section>
