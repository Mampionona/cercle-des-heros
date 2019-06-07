<?php
$icons = array(
  'linkedin',
  'twitter',
  'vimeo',
  'googleplus',
  'youtube',
  'instagram',
  'facebook'
);
?>

<div class="col col-xs-12">
  <div class="social-icons">
    <h4 class="title"><?php _e('Follow us', 'cercle-des-heros'); ?></h4>
    <ul class="pl-0 list-unstyled d-flex justify-content-center justify-content-xl-start">
      <?php foreach ($icons as $icon): ?>
        <?php $link = get_theme_mod($icon); ?>
        <?php if (!$link) continue; ?>
        <li>
          <a href="<?php echo $link; ?>" target="_blank">
            <img src="<?php echo asset_path("images/{$icon}.png"); ?>" alt="<?php echo $icon; ?>">
          </a>
        </li>
      <?php endforeach; ?>
    </ul>
  </div>
  <div class="ss-design">
    <img src="<?php echo asset_path('images/ss-design.png'); ?>" alt="Design by Sauvages Studio">
  </div>
</div>
