<?php get_header(); ?>

<section class="section category">
  <div class="section__header category__header">
    <div class="wrapper">
      <h2 class="section__title section__title_color_accent category__title"><?php echo single_cat_title(); ?></h2>
      <div class="line">
        <div class="line__item line__item_color_accent"></div>
        <div class="line__square line__square_color_accent"><i class="fa fa-square" aria-hidden="true"></i></div>
        <div class="line__item line__item_color_accent"><?php echo category_description(); ?></div>
      </div>
      <div class="section__subtitle section__subtitle_color_accent category__subtitle"></div>
    </div>
  </div>
  <div class="section__content category__content">
    <div class="container">
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <section class="category__one one">
        <div class="row">
          <div class="col-sm-5 col-md-4 col-lg-3">
            <div class="category__frame frame">
              <a target="_blank" href="<?php echo get_post_meta($post->ID, 'manual-link', true)?>">
              <?php the_post_thumbnail( array() ); ?>
            </a>
            </div>
          </div>
          <div class="col-sm-7 col-md-8 col-lg-9">
            <h3 class="category__name name"><?php the_title(); ?></h3>
              <div class="category__description description">
                <?php the_excerpt(); ?>
              </div>
            <a class="button button_bg_theme" target="_blank" href="<?php echo get_post_meta($post->ID, 'manual-link', true)?> ">Скачать</a></div>
        </div>
      </section>
      <?php endwhile; endif; ?>
    </div>
  </div>
  <div class="section__footer category-footer text-center">
    <div class="wrapper">
      <div class="single__line"></div>
      <p class="single__help text-center">Патронажная служба Милосердие существует в основном за счет пожертвований. Просим вас помочь службе. Собранные средства идут на оплату патронажного ухода для наших подопечных и дальнейшую публикацию полезной информации на сайте.</p>
      <div class="button-group text-center"><a class="button button_bg_accent button_size_large" href="https://miloserdie.help/donate/?item=1350" target="_blank" onclick="yaCounter37338160.reachGoal('order_material'); return true;">Поддержать службу</a></div>
      <div class="single__line"></div>
    </div>
      
    <?php if ( function_exists( 'wp_pagenavi' )) { wp_pagenavi(); } ?>
  </div>
</section>

<?php get_footer(); ?>
