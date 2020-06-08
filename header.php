<header>
  <div class="container">


    <nav class="navbar navbar-expand-lg">
      <?php
      if ( function_exists( 'the_custom_logo' ) ) {
       the_custom_logo();
      }
      ?>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <?php
        wp_nav_menu(
          array(
            'theme-location' => 'top-menu',
            'menu_class' => 'navbar-nav mr-auto',
          )
        );
      ?>
    </div>
    </nav>
  </div>
</header>
