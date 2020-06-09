<footer>

  <?php wp_footer(); ?>


  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="footer-logo">
          <?php

          if ( function_exists( 'the_custom_logo' ) ) {
           the_custom_logo();
          }

           ?>
        </div>
        <p class="copyright">&copy Uniduck All rights reserved</p>
      </div>
      <div class="col-md-6">
        <ul class="footer-social">
          <li>Like <span class="purple">Uniduck</span> on <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/ic-facebook.svg"></li>
          <li>Follow <span class="purple">@uniduck</span> on <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/ic-twitter.svg"></li>
          <li>Follow <span class="purple">@uniduck</span> on <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/ic-instagram.svg"></li>
        </ul>
      </div>
    </div>
  </div>
</footer>


</body>
</html>
