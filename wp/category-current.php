<?php get_header(); ?>

<section class="section category">
  <div class="section__header category__header">
    <div class="wrapper">
      <h2 class="section__title section__title_color_accent category__title"><?php echo single_cat_title(); ?></h2>
      <div class="line">
        <div class="line__item line__item_color_accent"></div>
        <div class="line__square line__square_color_accent"><i class="fa fa-square" aria-hidden="true"></i></div>
        <div class="line__item line__item_color_accent"></div>
      </div>
      <div class="section__subtitle section__subtitle_color_accent category__subtitle"><?php echo category_description(); ?></div>
    </div>
  </div>
  <div class="section__content category__content">
    <div class="container">
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <section class="category__one one">
        <div class="row">
          <div class="col-sm-5 col-md-4 col-lg-3">
            <a href="<?php echo get_permalink(); ?>">
              <div class="category__frame frame">
                <?php the_post_thumbnail( array() ); ?>
              </div>
            </a>
          </div>
          <div class="col-sm-7 col-md-8 col-lg-9">
            <a class="category__link" href="<?php echo get_permalink(); ?>">
              <h3 class="category__name name"><?php the_title(); ?></h3>
            </a>
            <a class="category__link" href="<?php echo get_permalink(); ?>">
              <div class="category__description description">
                <?php the_excerpt(); ?>
              </div>
            </a>
            <a class="button button_bg_theme" href="<?php echo get_permalink(); ?>">Подробнее</a></div>
        </div>
      </section>
      <?php endwhile; endif; ?>
    </div>
  </div>
  <div class="section-footer category-footer text-center">
    <?php if ( function_exists( 'wp_pagenavi' )) { wp_pagenavi(); } ?>
  </div>
</section>

<?php get_footer(); ?>
