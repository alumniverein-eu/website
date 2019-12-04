<?php
/*
The Single Posts Loop
=====================
*/
?> 

<?php if(have_posts()): while(have_posts()): the_post(); ?>
    <article role="article" id="post_<?php the_ID()?>" <?php post_class()?>>
        <header>
            <h2><?php the_title()?></h2>
        </header>
        <section>
            <?php //the_post_thumbnail('img-fluid img-thumbnail'); ?>
            <?php the_content()?>
            <?php wp_link_pages(); ?>
        </section>
        <?/*
        <em style="margin-top: 30px; font-size: .8em">
            <span class="text-muted author"><?php _e('By', 'b4st'); echo " "; the_author() ?>,</span>
            <time  class="text-muted" datetime="<?php the_time('d-m-Y')?>"><?php the_time('jS F Y') ?></time>
            <p class="text-muted">
                <i class="fa fa-folder-open-o"></i>&nbsp; <?php _e('Filed under', 'b4st'); ?>: <?php the_category(', ') ?><br/>
            </p>
        </em>
        */?>
    </article>
<?php //comments_template('/loops/comments.php'); ?>
<?php endwhile; ?>
<?php else: ?>
<?php wp_redirect(get_bloginfo('url').'/404', 404); exit; ?>
<?php endif; ?>
