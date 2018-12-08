<?php get_header(); ?>

<section class="section category">
  <div class="section__header category__header">
    <div class="wrapper">
      <h2 class="section__title section__title_color_accent category__title"><?php echo single_tag_title(); ?></h2>
      <div class="line">
        <div class="line__item line__item_color_accent"></div>
        <div class="line__square line__square_color_accent"><i class="fa fa-square" aria-hidden="true"></i></div>
        <div class="line__item line__item_color_accent"></div>
      </div>
    </div>
  </div>
  <div class="section__content category__content">
    <div class="wrapper">
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <section class="category__one one">
        <a class="category__link" href="<?php echo get_permalink(); ?>">
          <h3 class="category__name name"><?php the_title(); ?></h3>
        </a>
        <a class="category__link" href="<?php echo get_permalink(); ?>">
          <div class="category__description description">
            <?php the_excerpt(); ?>
          </div>
        </a>
        <a class="button button_bg_theme" href="<?php echo get_permalink(); ?>">Подробнее</a>
      </section>
      <?php endwhile; endif; ?>
    </div>
  </div>
  <div class="section-footer current-footer text-center">
    <?php if ( function_exists( 'wp_pagenavi' )) { wp_pagenavi(); } ?>
  </div>
</section>

<?php get_footer(); ?>
