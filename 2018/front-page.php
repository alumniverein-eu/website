
      <?php get_header(); ?>

        <a name="top"></a>

        <?php echo PortalHeadline(); ?>

        <div class="android-more-section">
          <div class="android-section-title mdl-typography--display-1-color-contrast">Aus den Arbeitsbereichen</div>
          <div class="android-card-container mdl-grid">

            <?php
              echo PortalPreview();
            ?>

          </div>
        </div>

        <?php get_footer(); ?>
