<?php get_header(); ?>

<section class="section contact">
  <div class="section__header contact__header">
    <div class="wrapper">
    <h1 class="section__title section__title_color_accent contact__title"><?php the_title(); ?></h1>
      <div class="line">
        <div class="line__item line__item_color_accent"></div>
        <div class="line__square line__square_color_accent"><i class="fa fa-square" aria-hidden="true"></i></div>
        <div class="line__item line__item_color_accent"></div>
      </div>
      <div class="section__subtitle section__subtitle_color_accent contact__subtitle">Как с нами можно связаться</div>
    </div>
  </div>
  <div class="section__content contact__content">
    <div class="wrapper">
      <div class="contact__info">
        <table class="contact__table">
          <tbody>
            <tr>
              <td class="contact__td">
                <div class="contact__item"><i class="fas fa-map-marker"></i><span>Россия, г. Москва, Ленинский проспект, д. 10, к. 5</span></div>
                <div class="contact__item"><i class="fas fa-phone-square"></i><span>+7 (499) 705-88-20</span></div>
                <div class="contact__item"><i class="fas fa-envelope"></i><a href="mailto:patr.dimitry@gmail.com" target="_blank">patr.dimitry@gmail.com</a></div>
                <div class="contact__social">
                  <h3 class="contact__name name">Социальные сети:</h3><a href="https://vk.com/patrdimitry" target="_blank"><i class="fab fa-vk"></i></a><a href="https://www.facebook.com/programmasidelki/" target="_blank"><i class="fab fa-facebook-f"></i></a><a href="https://plus.google.com/103887673363548195003" target="_blank"><i class="fab fa-google-plus-g"></i></a>
                </div>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="contact__map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2247.174877617547!2d37.59425431616187!3d55.720712980544846!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46b54b7308ca9541%3A0x3e559498a5a1ae1d!2z0JvQtdC90LjQvdGB0LrQuNC5INC_0YAuLCAxMNC6NSwg0JzQvtGB0LrQstCwLCAxMTkwNDk!5e0!3m2!1sru!2sru!4v1508317922792" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen></iframe>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>
