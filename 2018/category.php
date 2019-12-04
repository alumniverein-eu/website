<?php get_header(); ?>

  <?php
    $category = get_category( get_query_var( 'cat' ) );
  ?>

  <div class="android-customized-section">
    <div class="android-customized-section-text">
      <div class="mdl-typography--font-light mdl-typography--display-2-color-contrast"><?php echo $category->name; ?></div>
      <p class="mdl-typography--font-light">
        <?php echo $category->description; ?>
      </p>
    </div>
  </div>


    <?php
      if($category->slug != "news"){
        echo '
        <div class="android-more-section">
          <div class="mdl-typography--font-light">Aus dem Arbeitsbereich</div>
          <div class="android-card-container mdl-grid">
            '.PostPreview($category->slug).'
          </div>
        </div>
        ';
      } else {
        echo '
        <div class="android-screen-section mdl-typography--text-center">
          <a name="screens"></a>
          <div class="mdl-typography--display-1-color-contrast">Meldungen</div>
          <div class="android-screens">
            '.NewsFeed().'
          </div>
        </div>
        ';
      }
    ?>





<?php get_footer(); ?>
