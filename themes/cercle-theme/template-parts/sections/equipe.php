<?php $equipes = get_post_meta($post->ID, 'equipes', true); ?>

<div class="template--equipe">
  <div class="container">
    <div class="row">
      <div class="col">
        <?php echo $post->post_content; ?>
      </div>
    </div>
  </div>
  <?php if ($equipes) : ?>
    <div class="equipe">
      <div class="equipe-slider glide">
        <div class="glide__track" data-glide-el="track">
          <ul class="glide__slides">
            <?php foreach ($equipes as $equipe) : ?>
              <li class="glide__slide">
                <figure>
                  <?php echo wp_get_attachment_image($equipe['equipe_photo'], 'equipe-thumb', false, array('class' => 'img-fluid')); ?>
                </figure>
                <h4 class="text-primary"><?php echo $equipe['name']; ?></h4>
                <p><?php echo nl2br($equipe['about']); ?></p>
              </li>
            <?php endforeach; ?>
          </ul>
        </div>
      </div>
    </div>
  <?php endif; ?>
</div>
