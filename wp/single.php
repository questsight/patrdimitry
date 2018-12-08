<?php get_header(); ?>

  <?php
  while ( have_posts() ) : the_post();
    if(in_category(32) || in_category(34) || in_category(31) || in_category(33) || in_category(35)) {
        get_template_part( 'template-parts/content-materials', get_post_type() ); 
    }
    else if (in_category(18)) {
        get_template_part( 'template-parts/content-current', get_post_type() );
    }
    else if (in_category(8)) {
        get_template_part( 'template-parts/content-news', get_post_type() );
    }
    else {
        get_template_part( 'template-parts/content', get_post_type() );
    }


  endwhile;
  ?>

<?php get_footer(); ?>