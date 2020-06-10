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
          <li>Like <span class="footer-social-uniduck">Uniduck</span> on <a href="http://www.facebook.com"><img src="<?php echo get_template_directory_uri(); ?>/assets/icons/ic-facebook.svg"></a></li>
          <li>Follow <span class="footer-social-uniduck">@uniduck</span> on <a href="http://www.twitter.com"><img src="<?php echo get_template_directory_uri(); ?>/assets/icons/ic-twitter.svg"></a></li>
          <li>Follow <span class="footer-social-uniduck">@uniduck</span> on <a href="http://www.instagram.com"><img src="<?php echo get_template_directory_uri(); ?>/assets/icons/ic-instagram.svg"></a></li>
        </ul>
      </div>
    </div>
  </div>
</footer>


</body>
</html>
