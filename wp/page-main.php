<?php get_header(); ?>

<section class="coast parallax-window" data-parallax="scroll" data-image-src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/coast/coast.jpg">
  <div class="coast__overlay">
    <div class="coast__header">
      <h1 class="coast__title"><?php echo get_bloginfo( 'name' ); ?></h1>
      <div class="line">
        <div class="line__item line__item_color_light"></div>
        <div class="line__square line__square_color_light"><i class="fa fa-square"></i></div>
        <div class="line__item line__item_color_light"></div>
      </div>
      <div class="coast__subtitle"><?php echo get_bloginfo( 'description' ); ?></div>
    </div>
  </div>
</section>
<section class="section service">
  <div class="section__header service__header">
    <div class="wrapper">
      <h2 class="section__title section__title_color_accent service__title">Как мы помогаем</h2>
      <div class="line">
        <div class="line__item line__item_color_accent"></div>
        <div class="line__square line__square_color_accent"><i class="fa fa-square" aria-hidden="true"></i></div>
        <div class="line__item line__item_color_accent"></div>
      </div>
      <div class="section__subtitle section__subtitle_color_accent service__subtitle">Служба оказывает помощь по различным направлениям, связанных с патронажным уходом и социальной адаптацией</div>
    </div>
  </div>
  <div class="section__content service__content">
    <div class="wrapper">
      <div class="section__overlay service__overlay" id="service__overlay"></div>
      <div class="service__cell">
        <section class="service__one one">
          <div class="service__shut shut"><i class="fa fa-times" aria-hidden="true"></i></div>
          <div class="service__frame frame"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/services/service_01.jpg"></div>
          <h3 class="service__name name">Уход за тяжелобольными</h3>
          <div class="service__description description">
            <ul class="service__list">
              <li class="service__item">Оценка и контроль общего состояния</li>
              <li class="service__item">Выполнение гигиенических процедур</li>
              <li class="service__item">Соблюдение режима дня питания</li>
              <li class="service__item">Учет физиологических показателей</li>
              <li class="service__item">Выполнение врачебных назначений</li>
              <li class="service__item">Социально-бытовая помощь</li>
            </ul>
          </div>
        </section>
      </div>
      <div class="service__cell">
        <section class="service__one one">
          <div class="service__shut shut"><i class="fa fa-times" aria-hidden="true"></i></div>
          <div class="service__frame frame"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/services/service_02.jpg"></div>
          <h3 class="service__name name">Разовая выездная помощь </h3>
          <div class="service__description description">
            <ul class="service__list">
              <li class="service__item">Демонстрация приемов перемещения</li>
              <li class="service__item">Помощь в купании больного </li>
              <li class="service__item">Стрижка волос и ногтей</li>
              <li class="service__item">Обработка пролежней</li>
              <li class="service__item">Другие разовые процедуры</li>
            </ul>
          </div>
        </section>
      </div>
      <div class="service__cell">
        <section class="service__one one">
          <div class="service__shut shut"><i class="fa fa-times" aria-hidden="true"></i></div>
          <div class="service__frame frame"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/services/service_03.jpg"></div>
          <h3 class="service__name name">Консультирование родственников</h3>
          <div class="service__description description">
            <ul class="service__list">
              <li class="service__item">Планирование ухода</li>
              <li class="service__item">Рекомендации по подбору медицинской техники</li>
              <li class="service__item">Планирование режима дня и питания</li>
              <li class="service__item">Профилактика и обработка пролежней</li>
            </ul>
          </div>
        </section>
      </div>
      <div class="service__cell">
        <section class="service__one one">
          <div class="service__shut shut"><i class="fa fa-times" aria-hidden="true"></i></div>
          <div class="service__frame frame"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/services/service_04.jpg"></div>
          <h3 class="service__name name">Благотворительный прокат</h3>
          <div class="service__description description">
            <ul class="service__list">
              <li class="service__item">Медицинский инвентарь</li>
              <li class="service__item">Реабилитационная техника</li>
            </ul>
          </div>
        </section>
      </div>
      <div class="service__cell">
        <section class="service__one one">
          <div class="service__shut shut"><i class="fa fa-times" aria-hidden="true"></i></div>
          <div class="service__frame frame"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/services/service_05.jpg"></div>
          <h3 class="service__name name">Предоставление средств по уходу</h3>
          <div class="service__description description">
            <ul class="service__list">
              <li class="service__item">Подгузники</li>
              <li class="service__item">Пеленки</li>
              <li class="service__item">Гигиенические средства</li>
              <li class="service__item">На период оформления ИПР инвалида</li>
            </ul>
          </div>
        </section>
      </div>
      <div class="service__cell">
        <section class="service__one one">
          <div class="service__shut shut"><i class="fa fa-times" aria-hidden="true"></i></div>
          <div class="service__frame frame"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/services/service_06.jpg"></div>
          <h3 class="service__name name">Обучение навыкам ухода</h3>
          <div class="service__description description">
            <ul class="service__list">
              <li class="service__item">На дому</li>
              <li class="service__item">На занятиях Школы по уходу</li>
            </ul>
          </div>
        </section>
      </div>
    </div>
  </div>
</section>

<?php
  $idObj = get_category_by_slug( 'current' );
  $id = $idObj->term_id;
?>

<section class="section ward">
  <div class="section__header ward__header">
    <div class="wrapper">
      <h2 class="section__title section__title_color_accent ward__title"><?php echo get_cat_name( $id ); ?></h2>
      <div class="line">
        <div class="line__item line__item_color_accent"></div>
        <div class="line__square line__square_color_accent"><i class="fa fa-square" aria-hidden="true"></i></div>
        <div class="line__item line__item_color_accent"></div>
      </div>
      <div class="section__subtitle section__subtitle_color_accent ward__subtitle"><?php echo category_description( $id ); ?></div>
    </div>
  </div>
  <div class="section__content ward__content">
    <div class="wrapper">
      <div class="owl-carousel owl-theme ward__carousel">
        <?php
          $args = array(
            'cat'            => $id,
            'posts_per_page' => 8
          );
          $query = new WP_Query( $args );
          if ( $query->have_posts() ) { while ( $query->have_posts() ) { $query->the_post();
        ?>
        <section class="item ward__one one">
          <a class="ward__link link" href="<?php echo get_permalink(); ?>">
            <div class="ward__frame frame">
              <?php the_post_thumbnail( array(240, 160) ); ?>
            </div>
            <h3 class="ward__name name"><?php the_title(); ?></h3>
            <div class="ward__description description">
              <?php the_excerpt(); ?>
            </div>
          </a>
        </section>
        <?php } } else { } wp_reset_postdata(); ?>
      </div>
    </div>
    <?php
      $idObj = get_category_by_slug( 'current' );
      $id = $idObj->term_id;
    ?>
    <div class="wrapper">
      <div class="button-group text-center">
        <a class="button button_color_theme button_size_large" href="<?php echo get_category_link( $id ); ?>">Смотреть всех подопечных</a>
      </div>
    </div>
  </div>
</section>

<?php
  $idObj = get_category_by_slug( 'news' );
  $id = $idObj->term_id;
?>

<section class="section news">
  <div class="section__header news__header">
    <div class="wrapper">
      <h2 class="section__title section__title_color_accent news__title"><?php echo get_cat_name( $id ); ?></h2>
      <div class="line">
        <div class="line__item line__item_color_accent"></div>
        <div class="line__square line__square_color_accent"><i class="fa fa-square" aria-hidden="true"></i></div>
        <div class="line__item line__item_color_accent"></div>
      </div>
      <div class="section__subtitle section__subtitle_color_accent news__subtitle"><?php echo category_description( $id ); ?></div>
    </div>
  </div>
  <div class="section__content news__content">
    <div class="wrapper">
      <?php
        $args = array(
          'cat'            => $id,
          'posts_per_page' => 3
        );
        $query = new WP_Query( $args );
        if ( $query->have_posts() ) { while ( $query->have_posts() ) { $query->the_post();
      ?>
      <div class="news__cell">
        <section class="news__one one">
          <a class="news__link link" href="<?php echo get_permalink(); ?>">
          <h3 class="news__name name"><?php the_title(); ?></h3>
            <div class="news__description description">
              <?php the_excerpt(); ?>
            </div>
            <div class="news__square"><i class="fa fa-square" aria-hidden="true"></i><i class="fa fa-square" aria-hidden="true"></i><i class="fa fa-square" aria-hidden="true"></i></div>
          </a>
        </section>
      </div>
      <?php } } else { } wp_reset_postdata(); ?>
    </div>
    <?php
      $idObj = get_category_by_slug( 'news' );
      $id = $idObj->term_id;
    ?>
    <div class="wrapper">
      <div class="button-group text-center">
        <a class="button button_color_theme button_size_large" href="<?php echo get_category_link( $id ); ?>">Смотреть все новости</a>
      </div>
    </div>
  </div>
</section>
<section class="section fact parallax-window" data-parallax="scroll" data-image-src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/fact/fact.jpg">
  <div class="fact__overlay">
    <div class="section__header fact__header">
      <div class="wrapper">
        <h2 class="section__title section__title_color_light fact__title">Наша служба в цифрах</h2>
        <div class="line">
          <div class="line__item line__item_color_light"></div>
          <div class="line__square line__square_color_light"><i class="fa fa-square" aria-hidden="true"></i></div>
          <div class="line__item line__item_color_light"></div>
        </div>
        <div class="section__subtitle section__subtitle_color_light fact__subtitle">Основные показатели деятельности службы</div>
      </div>
    </div>
    <div class="section__content fact__content">
      <div class="wrapper">
        <div class="fact__cell">
          <section class="fact__one one">
            <div class="fact__name name">60+</div>
            <div class="fact__description description">
              <p>медицинских и патронажных сестер</p>
            </div>
          </section>
        </div>
        <div class="fact__cell">
          <section class="fact__one one">
            <div class="fact__name name">40+</div>
            <div class="fact__description description">
              <p>православных нянь</p>
            </div>
          </section>
        </div>
        <div class="fact__cell">
          <section class="fact__one one">
            <div class="fact__name name">50+</div>
            <div class="fact__description description">
              <p>тяжелобольных и инвалидов под опекой</p>
            </div>
          </section>
        </div>
        <div class="fact__cell">
          <section class="fact__one one">
            <div class="fact__name name">200+</div>
            <div class="fact__description description">
              <p>консультативных выездов в год</p>
            </div>
          </section>
        </div>
        <div class="fact__cell">
          <section class="fact__one one">
            <div class="fact__name name">350+</div>
            <div class="fact__description">
              <p>человек в год получают средства по уходу и медтехнику</p>
            </div>
          </section>
        </div>
        <div class="fact__cell">
          <section class="fact__one one">
            <div class="fact__name name">200+</div>
            <div class="fact__description description">
              <p>детей на воспитании более чем в 40 семьях</p>
            </div>
          </section>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="section charity">
  <div class="section__header charity__header">
    <div class="wrapper">
      <h2 class="section__title section__title_color_accent charity__title">Как вы можете помочь</h2>
      <div class="line">
        <div class="line__item line__item_color_accent"></div>
        <div class="line__square line__square_color_accent"><i class="fa fa-square" aria-hidden="true"></i></div>
        <div class="line__item line__item_color_accent"></div>
      </div>
      <div class="section__subtitle section__subtitle_color_accent charity__subtitle">Патронажная служба Милосердие на 90% существует за счет пожертвований и любая ваша помощь важна для нас</div>
    </div>
  </div>
  <div class="section__content charity__content">
    <div class="wrapper">
      <div class="charity__cell">
        <section class="charity__one one">
          <div class="charity__frame frame"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/charity/charity_01.jpg"></div>
          <h3 class="charity__name name">Сделать финансовое пожертвование</h3>
        </section>
      </div>
      <div class="charity__cell">
        <section class="charity__one one">
          <div class="charity__frame frame"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/charity/charity_02.jpg"></div>
          <h3 class="charity__name name">Передать в дар медицинскую технику</h3>
        </section>
      </div>
      <div class="charity__cell">
        <section class="charity__one one">
          <div class="charity__frame frame"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/charity/charity_03.jpg"></div>
          <h3 class="charity__name name">Пожертвовать средства по уходу и лечебное питание</h3>
        </section>
      </div>
      <div class="charity__cell">
        <section class="charity__one one">
          <div class="charity__frame frame"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/charity/charity_04.jpg"></div>
          <h3 class="charity__name name">Стать добровольцем</h3>
        </section>
      </div>
    </div>
    <div class="wrapper">
      <div class="charity__description">
        <p>Большинство наших подопечных &mdash; тяжелобольные, инвалиды, одинокие пожилые люди &mdash; не имеют возможности самостоятельно оплатить патронажный уход. Для помощи таким категориям граждан Православной службой помощи &laquo;Милосердие&raquo; была создана благотворительная программа &laquo;Сиделки&raquo;.</p>
        <p>Даже небольшое денежное пожертвование важно для нас и наших подопечных. Вы можете сделать как разовое, так и регулярное ежемесячное списание в рамках благотворительной программы &laquo;Сиделки&raquo;.</p>
      </div>
    </div>
    <div class="wrapper">
      <div class="button-group text-center"><a class="button button_bg_accent button_size_large" href="https://miloserdie.help/donate/?item=1350" target="_blank" onclick="yaCounter37338160.reachGoal('order_main'); return true;">Помочь службе</a></div>
    </div>
  </div>
</section>
<section class="section benefactor">
  <div class="section__header benefactor__header">
    <div class="wrapper">
      <h2 class="section__title section__title_color_accent benefactor__title">Наши благодарности</h2>
      <div class="line">
        <div class="line__item line__item_color_accent"></div>
        <div class="line__square line__square_color_accent"><i class="fa fa-square" aria-hidden="true"></i></div>
        <div class="line__item line__item_color_accent"></div>
      </div>
      <div class="section__subtitle section__subtitle_color_accent benefactor__subtitle">Сердечно благодарим наших жертвователей</div>
    </div>
  </div>
  <div class="section__content benefactor__content">
    <div class="wrapper">
      <div class="benefactor__description description">
        <ul class="benefactor__list list">
          <li class="benefactor__item list__item">Компанию &laquo;Ростелеком&raquo; за помощь в финансировании проекта</li>
          <li class="benefactor__item list__item">Комитет общественных связей г. Москвы за предоставление субсидии 2013-15 гг.</li>
          <li class="benefactor__item list__item">Институт проблем гражданского общества за выделение средств Гранта в 2014-15 гг.</li>
          <li class="benefactor__item list__item">Школу испанского языка ESPALABRA за предоставление бесплатных занятий по испанскому языку для детей из многодетных семей, а также сбор канцелярских принадлежностей и книг для детей.</li>
          <li class="benefactor__item list__item">Благотворителя Евгения</li>
          <li class="benefactor__item list__item">Благотворителя Виктора</li>
        </ul>
      </div>
    </div>
  </div>
</section>
<section class="section partner">
  <div class="section__header partner__header">
    <div class="wrapper">
      <h2 class="section__title section__title_color_accent partner__title">Наши партнеры</h2>
      <div class="line">
        <div class="line__item line__item_color_accent"></div>
        <div class="line__square line__square_color_accent"><i class="fa fa-square" aria-hidden="true"></i></div>
        <div class="line__item line__item_color_accent"></div>
      </div>
      <div class="section__subtitle section__subtitle_color_accent partner__subtitle">Наша деятельность осуществляется в сотрудничестве и при поддержке следующих организаций</div>
    </div>
  </div>
  <div class="section__content partner__content">
    <div class="wrapper">
      <div class="partner__cell">
        <section class="partner__one one"><a class="partner__link link" href="http://www.diaconia.ru/" target="_blank">
            <div class="partner__frame frame"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/partner/partner_diaconia.jpg"></div>
            <h3 class="partner__name name">Синодальный отдел по церковной благотворительности и социальному служению</h3></a></section>
      </div>
      <div class="partner__cell">
        <section class="partner__one one"><a class="partner__link link" href="https://www.miloserdie.ru/" target="_blank">
            <div class="partner__frame frame"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/partner/partner_miloserdie.jpg"></div>
            <h3 class="partner__name name">Православная служба помощи &laquo;Милосердие&raquo;</h3></a></section>
      </div>
      <div class="partner__cell">
        <section class="partner__one one"><a class="partner__link link" href="http://www.sestra-miloserdiya.ru/" target="_blank">
            <div class="partner__frame frame"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/partner/partner_sisters.jpg"></div>
            <h3 class="partner__name name">Свято-Димитриевское училище сестер милосердия </h3></a></section>
      </div>
      <div class="partner__cell">
        <section class="partner__one one"><a class="partner__link link" href="http://pravbolnitsa.ru/" target="_blank">
            <div class="partner__frame frame"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/partner/partner_alexiy.jpg"></div>
            <h3 class="partner__name name">Больница Святителя Алексия</h3></a></section>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>
