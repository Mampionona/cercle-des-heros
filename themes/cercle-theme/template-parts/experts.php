<?php $experts = get_post_meta($post->ID, 'experts', true); ?>

<?php if ($experts) : ?>
  <div class="expert">
    <div class="expert-slider glide">
      <div class="glide__track" data-glide-el="track">
        <ul class="glide__slides mb-0">
          <?php foreach ($experts as $expert) : ?>
            <li class="glide__slide">
              <div class="expert-item">
                <div class="row flex-lg-row-reverse">
                  <div class="col-photo photo">
                    <figure class="mb-0">
                      <?php echo wp_get_attachment_image($expert['expert_photo'], 'expert-thumb', false, array('class' => 'img-fluid')); ?>
                    </figure>
                  </div>
                  <div class="col-text my-5 my-lg-0">
                    <div class="text">
                      <h4 class="name text-white"><?php echo $expert['expert_name']; ?></h4>
                      <p class="about mb-0 text-white"><?php echo nl2br($expert['expert_about']); ?></p>
                    </div>
                  </div>
                </div>
              </div>
            </li>
          <?php endforeach; ?>
        </ul>
      </div>
      <div class="glide__arrows d-none d-xl-block" data-glide-el="controls">
        <button class="glide__arrow glide__arrow--left" data-glide-dir="<">
          <img src="<?php echo asset_path('images/prev.png'); ?>" alt="">
        </button>
        <button class="glide__arrow glide__arrow--right" data-glide-dir=">">
          <img src="<?php echo asset_path('images/next.png'); ?>" alt="">
        </button>
      </div>
    </div>
  </div>
<?php endif; ?>
