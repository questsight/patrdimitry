<?php get_header(); ?>

<section class="section about">
  <div class="section__header about__header">
    <div class="wrapper">
    <h1 class="section__title section__title_color_accent about__title"><?php the_title(); ?></h1>
      <div class="line">
        <div class="line__item line__item_color_accent"></div>
        <div class="line__square line__square_color_accent"><i class="fa fa-square" aria-hidden="true"></i></div>
        <div class="line__item line__item_color_accent"></div>
      </div>
      <div class="section__subtitle section__subtitle_color_accent about__subtitle">История и описание патронажной службы</div>
    </div>
  </div>
  <div class="section__content about__content">
    <div class="container">
      <div class="about__one one">
        <div class="row">
          <div class="col-sm-4 col-md-3">
            <div class="about__frame frame"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/about/about_01.jpg"></div>
          </div>
          <div class="col-sm-8 col-md-9">
            <div class="about__description one-description">
              <p>Патронажная служба создана в 1993 году, имеет государственную лицензию на ведение медицинской деятельности. Цель нашей деятельности &mdash; помощь больным, чьи родственники не могут частично или полностью оплатить услуги сиделок, а так же нуждаются в консультативной помощи по организации ухода за тяжелобольным. Подопечные службы &mdash; это люди, требующие многочасового ухода: преимущественно одинокие тяжелобольные с прогрессирующими заболеваниями, больные после тяжелых травм. В некоторых семьях помощь оказывается одновременно двум инвалидам. Для многих наших опекаемых стабильность в ходе болезни &mdash; уже большое достижение. В патронажной службе более 40 подопечных и порядка 40 медицинских и патронажных сестер по уходу.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="about__one one">
        <div class="row">
          <div class="col-sm-4 col-sm-push-8 col-md-3 col-md-push-9">
            <div class="about__frame frame"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/about/about_02.jpg"></div>
          </div>
          <div class="col-sm-8 col-sm-pull-4 col-md-9 col-md-pull-3">
            <div class="about__description">
              <p>В течение года в службу поступает около 1000 новых просьб. К сожалению, предоставить сестер по уходу из-за ограниченности кадрового резерва удается далеко не для всех обращающихся, но каждый нуждающийся может рассчитывать на разовую выездную помощь. В службе действует выездная сестринская бригада: на выездах сестры оказывают помощь в совершении гигиенических процедур, а так же организуют консультации и обучающие занятия с родственниками. Ежегодно проводится около 200 консультаций с родственниками тяжелобольных инвалидов, обращающихся за помощью в патронажную службу. Для малоимущих нуждающихся в патронажной службе организован благотворительный прокат медтехники и медицинского инвентаря.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="about__one one">
        <div class="row">
          <div class="col-sm-4 col-md-3">
            <div class="about__frame frame"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/about/about_03.jpg"></div>
          </div>
          <div class="col-sm-8 col-md-9">
            <div class="about__description description">
              <p>Внутри патронажной службы существует подразделение &mdash; служба православных нянь для многодетных семей прихода храма царевича Димитрия. Под опекой службы более 40 семей (в том числе, неполные семьи и семьи с детьми-инвалидами), в которых воспитываются около 200 детей. Служба осуществляет поддержку многодетных семей, а для детей из таких семей периодически организовывает различные досуговые и праздничные мероприятия.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>
