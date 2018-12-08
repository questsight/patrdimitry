<?php get_header(); ?>

<section class="section page">
  <div class="section__header page__header">
    <div class="wrapper">
      <h1 class="section__title section__title_color_accent page__title"><?php the_title(); ?></h1>
      <div class="line">
        <div class="line__item line__item_color_accent"></div>
        <div class="line__square line__square_color_accent"><i class="fa fa-square" aria-hidden="true"></i></div>
        <div class="line__item line__item_color_accent"></div>
      </div>
    </div>
  </div>
  <div class="section__content page__content">
    <div class="wrapper">
      <?php while ( have_posts() ) : the_post(); the_content(); endwhile; ?>
    </div>
  </div>
</section>

<?php get_footer(); ?>
