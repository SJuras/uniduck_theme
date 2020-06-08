<header>
  <div class="container">
    <div class="logo">
      <?php
      if ( function_exists( 'the_custom_logo' ) ) {
       the_custom_logo();
      }
      ?>
    </div>
    <div class="main-menu">
      <?php
        wp_nav_menu(
          array(
            'theme-location' => 'top-menu',
            'menu_class' => 'top-bar',
          )
        );
      ?>
    </div>
  </div>
</header>
