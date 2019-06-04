<?php $equipes = get_post_meta($post->ID, 'equipes', true); ?>
<?php include(locate_template("template-parts/page-header.php", false, false)); ?>
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
                <div class="equipe-item">
                  <figure>
                    <?php echo wp_get_attachment_image($equipe['equipe_photo'], 'equipe-thumb', false, array('class' => 'img-fluid')); ?>
                  </figure>
                  <div class="text">
                    <h4 class="name text-primary"><?php echo $equipe['name']; ?></h4>
                    <p class="about mb-0"><?php echo nl2br($equipe['about']); ?></p>
                  </div>
                </div>
              </li>
            <?php endforeach; ?>
          </ul>
        </div>
      </div>
    </div>
  <?php endif; ?>
</div>
