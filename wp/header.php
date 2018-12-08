<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta http-equiv="content-type" content="text/html" charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <?php wp_head(); ?>
  </head>
  <body class="body">
    <div class="site">
      <header class="site__header header">
        <table class="header__table">
          <tbody>
            <tr>
              <td class="header__td">
                <div class="header__logo"><?php the_custom_logo(); ?></div>
              </td>
              <td class="header__td">
                <nav id="navigation" class="navigation">
                  <?php
                    wp_nav_menu( array(
                      'theme_location' => 'header',
                      'container'      => false,
                      'menu_id'        => 'navigation__list',
                      'menu_class'     => 'navigation__list navigation__hidden',
                    ) );
                  ?>
                </nav>
              </td>
              <td class="header__td text-right">
                <div class="header__search" id="header__search"><i class="fas fa-search"></i></div>
              </td>
              <td class="header__td text-right">
                <div class="header__phone"><i class="fas fa-mobile-alt"></i>+7 (499) 705-88-20</div>
              </td>
              <td class="header__td text-right">
                <div class="header__hamburger">
                  <div class="hamburger" id="hamburger">
                    <div class="hamburger__item"></div>
                    <div class="hamburger__item"></div>
                    <div class="hamburger__item"></div>
                  </div>
                </div>
              </td>
            </tr>
          </tbody>
        </table>
      </header>
      <div class="site__content content">
