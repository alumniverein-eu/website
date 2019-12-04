<?php
/*
All the functions are in the PHP pages in the `functions/` folder.
*/

	require get_template_directory() . '/functions/cleanup.php';
	require get_template_directory() . '/functions/setup.php';
	require get_template_directory() . '/functions/enqueues.php';
	require get_template_directory() . '/functions/navbar.php';
	require get_template_directory() . '/functions/widgets.php';
	require get_template_directory() . '/functions/search-widget.php';
	require get_template_directory() . '/functions/index-pagination.php';
	require get_template_directory() . '/functions/split-post-pagination.php';
	require get_template_directory() . '/functions/feedback.php';
	require get_template_directory() . '/functions/remove-query-string.php';
	require get_template_directory() . '/functions/content.specific.php';
	require get_template_directory() . '/functions/footer.php';

// Add a shortcode
add_shortcode('categoryposts', 'wpb_postsbycategory');

// Enable shortcodes in text widgets
add_filter('widget_text', 'do_shortcode');


add_action('mtl_lang_switch', 'mtl_custom_lang_switch', 10, 2);

/**
 * @param array of WP_Post language custom post
 * @param Sublanguage_site $this Sublanguage instance.
 */
function mtl_custom_lang_switch($languages, $sublanguage) {

	echo "<ul class='mdl-menu mdl-js-menu mdl-menu--bottom-right mdl-js-ripple-effect wpm-language-switcher switcher-list' for='more-button'>";
	/*
	<li class="mdl-menu__item">DE</li>
	<li class="mdl-menu__item">EN</li>
	<li class="mdl-menu__item">HU</li>
	*/
	foreach ($languages as $language) {
		echo "<li class='mdl-menu__item";
		if ($sublanguage->current_language->ID == $language->ID) echo 'current';
		echo "'>";
		echo "<a href='$sublanguage->get_translation_link($language)'> $language->post_title;</a>";
		echo "</li>";
	}
	echo "</ul>";

}
