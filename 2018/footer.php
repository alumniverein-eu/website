<footer class="android-footer mdl-mega-footer">
  <div class="mdl-mega-footer--top-section">
    <div class="mdl-mega-footer--left-section">
      <a href="https://instagram.com/alumniverein.eu" target="_blank">
        <button  class="mdl-mega-footer--social-btn social-btn social-btn__twitter"></button>
      </a>
      &nbsp;
      <a href="https://facebook.com/alumniverein.eu" target="_blank">
        <button  class="mdl-mega-footer--social-btn social-btn social-btn__blogger"></button>
      </a>
    </div>
    <div class="mdl-mega-footer--right-section">
      <a class="mdl-typography--font-light" href="#top">
        Back to Top
        <i class="material-icons">expand_less</i>
      </a>
    </div>
  </div>

  <div class="mdl-mega-footer--middle-section">
    <p class="mdl-typography--font-light">Copyright © 2018 Alumniverein der SchulBrücken e.V.</p>
  </div>

  <div class="mdl-mega-footer--bottom-section">

    <?php
      wp_nav_menu(
          array (
              'theme_location' => 'footer-1',
              'walker'         => new footer_nav(),
              'items_wrap'     => '%3$s'  //'<nav>%3$s</nav>'
          )
      );
    ?>
    <!--
    <a class="android-link android-link-menu mdl-typography--font-light" id="version-dropdown">
      Versions
      <i class="material-icons">arrow_drop_up</i>
    </a>
    <ul class="mdl-menu mdl-js-menu mdl-menu--top-left mdl-js-ripple-effect" for="version-dropdown">
      <li class="mdl-menu__item">5.0 Lollipop</li>
      <li class="mdl-menu__item">4.4 KitKat</li>
      <li class="mdl-menu__item">4.3 Jelly Bean</li>
      <li class="mdl-menu__item">Android History</li>
    </ul>
    <a class="android-link android-link-menu mdl-typography--font-light" id="developers-dropdown">
      For Developers
      <i class="material-icons">arrow_drop_up</i>
    </a>
    <ul class="mdl-menu mdl-js-menu mdl-menu--top-left mdl-js-ripple-effect" for="developers-dropdown">
      <li class="mdl-menu__item">App developer resources</li>
      <li class="mdl-menu__item">Android Open Source Project</li>
      <li class="mdl-menu__item">Android SDK</li>
      <li class="mdl-menu__item">Android for Work</li>
    </ul>

    <a class="android-link mdl-typography--font-light" href="">Impressum</a>

    <a class="android-link mdl-typography--font-light" href="">Privacy Policy</a>
    -->
  </div>

</footer>
</div>
</div>
<a href="http://alumniverein.org/category/news/" id="view-source" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-color--accent mdl-color-text--accent-contrast">
News
</a>
<script src="https://code.getmdl.io/1.3.0/material.min.js"></script>
<?php wp_footer(); ?>
</body>
</html>


<?php /*
<div class="container">
<div class="row">

<div class="<?php if(is_active_sidebar('sidebar-widget-area')): ?>col-sm-8<?php else: ?>col-sm-12<?php endif; ?>">
<div id="content" role="main">
    <?php get_template_part('loops/content', get_post_format()); ?>
</div><!-- /#content -->
</div>

<div class="col-sm-4" id="sidebar" role="navigation">
 <?php get_sidebar(); ?>
</div>

</div><!-- /.row -->
</div><!-- /.container -->


<?php
  /*
  wp_nav_menu( array(
    'theme_location'    => 'footer',
    'container'         => false,
    'menu_class'        => '',
    'fallback_cb'       => '__return_false',
    'items_wrap'        => '%3$s',
    'depth'             => 2,
    'walker'            => new FooterTopWalker()
  ) );
  */
?>
