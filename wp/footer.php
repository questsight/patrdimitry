      </div>
      <footer class="site__footer footer">
        <div class="wrapper">
          <div class="footer__cell">
            <section class="bottom-nav">
              <h3 class="bottom-nav__name">Наша служба</h3>
              <?php
                wp_nav_menu( array(
                  'theme_location' => 'bot-nav-1',
                  'container'      => false,
                  'menu_class'     => 'bottom-nav__list',
                ) );
              ?>
            </section>
          </div>
          <div class="footer__cell">
            <section class="bottom-nav">
              <h3 class="bottom-nav__name">Социальные сети</h3>
              <?php
                wp_nav_menu( array(
                  'theme_location' => 'bot-nav-2',
                  'container'      => false,
                  'menu_class'     => 'bottom-nav__list',
                ) );
              ?>
            </section>
          </div>
          <div class="footer__cell">
            <section class="bottom-nav">
              <h3 class="bottom-nav__name">В помощь ухаживающим</h3>
              <?php
                wp_nav_menu( array(
                  'theme_location' => 'bot-nav-3',
                  'container'      => false,
                  'menu_class'     => 'bottom-nav__list',
                ) );
              ?>
            </section>
          </div>
          <div class="footer__cell">
            <section class="bottom-nav">
              <h3 class="bottom-nav__name">Наши партнеры</h3>
              <?php
                wp_nav_menu( array(
                  'theme_location' => 'bot-nav-4',
                  'container'      => false,
                  'menu_class'     => 'bottom-nav__list',
                ) );
              ?>
            </section>
          </div>
        </div>
        <div class="wrapper">
          <div class="footer__line"></div>
        </div>
        <div class="wrapper">
          <div class="corpinfo">Местная православная религиозная организация &laquo;Сестричество во имя благоверного царевича Димитрия&raquo; Московской епархии Русской Православной Церкви</div>
          <div class="copyright">При использовании материалов ссылка на <a class="copyright__link" href="https://patrdimitry.ru">patrdimitry.ru</a> обязательна</div>
          <div class="webmikorn"><a href="https://webmikorn.ru/" target="_blank">Разработка сайта Микорн</a></div>
        </div>
      </footer>
      <div class="search" id="search">
        <form class="search__form">
          <table class="search__table">
            <tbody>
              <tr>
                <td class="search__td">
                  <input class="search__input" type="text" placeholder="Поиск по сайту">
                </td>
                <td class="search__td text-center">
                  <button class="search__button" id="search__button" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                </td>
              </tr>
            </tbody>
          </table>
        </form>
        <div class="search__shut shut" id="search__shut"><i class="fa fa-times" aria-hidden="true"></i></div>
      </div>
    </div>
    <script type="text/javascript">
      (function (d, w, c) {
      (w[c] = w[c] || []).push(function() {
      try {
      w.yaCounter37338160 = new Ya.Metrika({
      id:37338160,
      clickmap:true,
      trackLinks:true,
      accurateTrackBounce:true,
      webvisor:true
      });
      } catch(e) { }
      });
      var n = d.getElementsByTagName("script")[0],
      s = d.createElement("script"),
      f = function () { n.parentNode.insertBefore(s, n); };
      s.type = "text/javascript";
      s.async = true;
      s.src = "https://mc.yandex.ru/metrika/watch.js";
      if (w.opera == "[object Opera]") {
      d.addEventListener("DOMContentLoaded", f, false);
      } else { f(); }
      })(document, window, "yandex_metrika_callbacks");
    </script>
    <noscript>
      <div><img src="https://mc.yandex.ru/watch/37338160" style="position:absolute; left:-9999px;" alt=""></div>
    </noscript>
    <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-77714031-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
      gtag('config', 'UA-77714031-1');
    </script>
    <?php wp_footer(); ?>
  </body>
</html>
