<section id="post-<?php the_ID(); ?>" class="section single">
  <div class="section__header single__header">
    <div class="wrapper">
      <h1 class="section__title section__title_color_accent single__title"><?php the_title(); ?></h1>
      <div class="line">
        <div class="line__item line__item_color_accent"></div>
        <div class="line__square line__square_color_accent"><i class="fa fa-square" aria-hidden="true"></i></div>
        <div class="line__item line__item_color_accent"></div>
      </div>
    </div>
  </div>
  <div class="section-content single__content">
    <div class="wrapper">
      <div class="breadcrumb"><?php if (function_exists('the_breadcrumbs')) the_breadcrumbs(); ?></div>
      <div class="single__thumb"><?php the_post_thumbnail( array() ); ?></div>
      <?php the_content(); ?>
      <p><?php the_date(); ?></p>
    </div>
  </div>
  <div class="section__footer single__footer">
    <div class="wrapper">
      <div class="rambler-share text-center"></div>
      <script>
        ( function() {
          var init = function() {
            RamblerShare.init('.rambler-share', {
              "style": {
                "buttonHeight": 28,
                "iconSize": 16,
                "buttonBackground": "#007b7d"
              },
              "utm": "utm_source=social",
              "counters": true,
              "buttons": [
                "vkontakte",
                "facebook",
                "odnoklassniki",
                "twitter"
              ]
            });
          };
          var script = document.createElement( 'script' );
          script.onload = init;
          script.async = true;
          script.src = 'https://developers.rambler.ru/likes/widget.js';
          document.head.appendChild(script);
        })();
      </script>
    </div>
  </div>
</section>