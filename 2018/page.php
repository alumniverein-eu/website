<?php get_header(); ?>
  <?php if(have_posts()): while(have_posts()): the_post(); ?>
    <div class="android-customized-section">
      <div class="android-customized-section-text">
        <div class="mdl-typography--font-light mdl-typography--display-1-color-contrast"><?php the_title()?></div>
      </div>
      <?php
        if(has_post_thumbnail()){
          echo '<div  class="android-customized-section-image"
                      style="background-image: url(\' '.get_the_post_thumbnail_url().' \');">
                </div>';
        }
      ?>
    </div>

  <div class="android-screen-section mdl-typography--text-center">
    <a name="content"></a>
    <div class="content">

      <div class="android-wear-band-text android-wear-band-text-negative">
        <article role="article" id="post_<?php the_ID()?>" <?php post_class()?>>
        <p class=" mdl-typography--font-thin">
          <?php the_content()?>
          <?php wp_link_pages(); ?>
        </p>
        </article>
      </div>
    </div>
  </div>

  <?php endwhile; else: ?>
  <?php wp_redirect(get_bloginfo('url').'/404', 404); ?>
  <?php exit; ?>
  <?php endif; ?>
<?php get_footer(); ?>
