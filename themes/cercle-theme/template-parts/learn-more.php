<?php $learnMore = get_field('learn_more'); ?>
<?php if ($learnMore) : ?>
  <div class="learn-more">
    <a href="<?php echo $learnMore ?>" class="btn btn-learn-more btn-secondary">
      <?php _e('En savoir plus', 'cercle-des-heros'); ?>
    </a>
  </div>
<?php endif; ?>
