<?php get_header(); ?>

<section class="section material">
  <div class="section__header material__header">
    <div class="wrapper">
      <h1 class="section__title section__title_color_accent material__title"><?php echo single_cat_title(); ?></h1>
      <div class="line">
        <div class="line__item line__item_color_accent"></div>
        <div class="line__square line__square_color_accent"><i class="fa fa-square" aria-hidden="true"></i></div>
        <div class="line__item line__item_color_accent"></div>
      </div>
      <div class="section__subtitle section__subtitle_color_accent material__subtitle"><?php echo category_description(); ?></div>
    </div>
  </div>
  <div class="section__content material__content">
    <div class="container text-center">
      <div class="row"> 
        <?php
          $idObj = get_category_by_slug( 'memo' );
          $id = $idObj->term_id;
        ?>
        <section class="material__one col-sm-4">
          <a class="material__link link" href="<?php echo get_category_link( $id ); ?>">
            <div class="material__thumbnail"><i class="fas fa-clone"></i></div>
            <h2 class="material__name name"><?php echo get_cat_name( $id ); ?></h2>
          </a>
        </section>
        <?php
          $idObj = get_category_by_slug( 'answers' );
          $id = $idObj->term_id;
        ?>
        <section class="material__one col-sm-4">
          <a class="material__link link" href="<?php echo get_category_link( $id ); ?>">
            <div class="material__thumbnail"><i class="far fa-comments"></i></div>
            <h2 class="material__name name"><?php echo get_cat_name( $id ); ?></h2>
          </a>
        </section>
        <?php
          $idObj = get_category_by_slug( 'articles' );
          $id = $idObj->term_id;
        ?>
        <section class="material__one col-sm-4">
          <a class="material__link link" href="<?php echo get_category_link( $id ); ?>">
            <div class="material__thumbnail"><i class="far fa-edit"></i></div>
            <h2 class="material__name name"><?php echo get_cat_name( $id ); ?></h2>
          </a>
        </section>
        </div>
        <div class="row">
        <?php
          $idObj = get_category_by_slug( 'manual' );
          $id = $idObj->term_id;
        ?>
        <section class="material__one col-sm-4">
          <a class="material__link link" href="<?php echo get_category_link( $id ); ?>">
            <div class="material__thumbnail"><i class="fas fa-book"></i></div>
            <h2 class="material__name name"><?php echo get_cat_name( $id ); ?></h2>
          </a>
        </section>
        <?php
          $idObj = get_category_by_slug( 'presentations' );
          $id = $idObj->term_id;
        ?>
        <section class="material__one col-sm-4">
          <a class="material__link link" href="<?php echo get_category_link( $id ); ?>">
            <div class="material__thumbnail"><i class="far fa-image"></i></div>
            <h2 class="material__name name"><?php echo get_cat_name( $id ); ?></h2>
          </a>
        </section>
        <?php
          $idObj = get_category_by_slug( 'video' );
          $id = $idObj->term_id;
        ?>
        <section class="material__one col-sm-4">
          <a class="material__link link" href="<?php echo get_category_link( $id ); ?>">
            <div class="material__thumbnail"><i class="fas fa-film"></i></div>
            <h2 class="material__name name"><?php echo get_cat_name( $id ); ?></h2>
          </a>
        </section>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>
