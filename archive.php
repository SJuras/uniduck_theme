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






<footer>

  <?php wp_footer(); ?>


  <div class="container">
    <div class="footer-logo">
      <?php

      if ( function_exists( 'the_custom_logo' ) ) {
       the_custom_logo();
      }

       ?>
    </div>

        <p class="copyright">&copy Uniduck All rights reserved</p>

        <ul class="footer-social">
          <li>Like <span class="purple">Uniduck</span> on <img src="/assets/icons/ic-facebook.svg"></li>
          <li>Follow <span class="purple">@uniduck</span> on <img src="/assets/icons/ic-twitter.svg"></li>
          <li>Follow <span class="purple">@uniduck</span> on <img src="/assets/icons/ic-instagram.svg"></li>
        </ul>
  </div>
</footer>
