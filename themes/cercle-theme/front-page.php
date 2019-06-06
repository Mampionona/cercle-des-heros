<?php
if ( ! defined( 'ABSPATH' ) ) exit;

get_header();
$query = apply_filters('one_page', get_option('page_on_front'));
?>

<div class="sections overflow-hidden">
  <?php while (have_posts()) : ?>
    <?php the_post(); ?>
    <?php $backgroundImage = get_field('background_image'); ?>
    <section style="background-image: url('<?php echo $backgroundImage['url']; ?>');" class="section-item first-section">
      <?php the_content(); ?>
      <div class="text-center buttons">
        <div>
          <a href="#" class="btn btn-outline text--white"><?php _e('challenge.discover', 'cercle-des-heros'); ?></a>
        </div>
        <div class="scroll-down-wrap">
          <a href="#" id="scroll-down">
            <img src="<?php echo asset_path('images/scroll-down.png'); ?>" alt="<?php _e('Scroll down', 'cercle-des-heros'); ?>">
          </a>
        </div>
      </div>
    </section>
  <?php endwhile ?>

  <?php while ($query->have_posts()) : ?>
    <?php $query->the_post(); ?>
    <?php if (get_post_meta(get_the_id(), 'new_page', true)) continue; ?>
    <?php get_template_part('template-parts/page', 'section'); ?>
  <?php endwhile; ?>
</div>

<?php
wp_reset_postdata();
get_footer();
