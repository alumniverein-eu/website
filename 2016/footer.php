<footer class="bg-grey">
  <div class="container">
    <div class="row footer-nav-row">
      <?php
        wp_nav_menu( array(
          'theme_location'    => 'footer',
          'container'         => false,
          'menu_class'        => '',
          'fallback_cb'       => '__return_false',
          'items_wrap'        => '%3$s',
          'depth'             => 2,
          'walker'            => new FooterTopWalker()
        ) );
      ?>
    </div>
    <div class="row">
        <div class="col-8">
          <p>Copyright © 2017 Alumniverein der SchulBrücken. Alle Rechte vorbehalten.</p>
        </div>
        <div class="col-4">
          <!--<p class="pull-right"><a href="/imprint">Impressum</a></p>-->
        </div>
    </div>

  </div>
</footer>


<?php wp_footer(); ?>
</body>
</html>
