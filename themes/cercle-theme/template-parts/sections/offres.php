<?php $offres = get_post_meta($post->ID, 'offres', true); ?>

<div class="content--offres">
  <div class="content">
    <div class="container">
      <div class="row">
        <div class="col">
          <?php echo $post->post_content; ?>
        </div>
      </div>
    </div>
  </div>
  <?php if ($offres) : ?>
    <div class="offres">
      <div class="container">
        <div class="row">
          <?php foreach ($offres as $offre) : ?>
            <div class="col-6 offre-item">
              <h4 class="name"><?php echo $offre['title']; ?></h4>
              <p class="subtitle text-primary"><?php echo $offre['subtitle']; ?></p>
              <figure>
                <?php echo wp_get_attachment_image($offre['photo'], 'offre-thumb', false, array('class' => 'img-fluid')); ?>
              </figure>
              <p class="description"><?php echo $offre['offer_description']; ?></p>
              <div class="reserve">
                <a href="#" class="btn btn-secondary"><?php _e('Réserver', 'cercle-des-heros'); ?></a>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  <?php endif; ?>
</div>
