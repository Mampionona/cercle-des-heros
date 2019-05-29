<?php
global $post;
$postName = $post->post_name;
$template = get_field('template');
if (!$template) {
  $template = 'default';
}
?>

<section class="section-item <?php echo $postName; ?>" id="<?php echo $postName; ?>">
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
  <?php include(locate_template("template-parts/sections/{$template}.php")); ?>
</section>
