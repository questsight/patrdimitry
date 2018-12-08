<?php get_header(); ?>

<section class="section page">
  <div class="section__header page__header">
    <div class="wrapper">
      <h1 class="section__title section__title_color_accent page__title"><?php echo single_cat_title(); ?></h1>
      <div class="line">
        <div class="line__item line__item_color_accent"></div>
        <div class="line__square line__square_color_accent"><i class="fa fa-square" aria-hidden="true"></i></div>
        <div class="line__item line__item_color_accent"></div>
      </div>
    </div>
  </div>
  <div class="section_content page__content">
    <div class="wrapper">
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <section class="category__one one">
        <h3 class="category__name name"><?php the_title(); ?></h3>
        <div class="category__description description">
          <?php the_excerpt(); ?>
        </div>
        <a class="button button_bg_theme" target="_blank" href="<?php echo get_post_meta($post->ID, 'reports-link', true)?> ">Скачать</a>
      </section>
      <?php endwhile; endif; ?>
    </div>
  </div>
</section>

<?php get_footer(); ?>
