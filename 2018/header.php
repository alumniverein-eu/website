<!doctype html>
<!--
  Material Design Lite
  Copyright 2015 Google Inc. All rights reserved.

  Licensed under the Apache License, Version 2.0 (the "License");
  you may not use this file except in compliance with the License.
  You may obtain a copy of the License at

      https://www.apache.org/licenses/LICENSE-2.0

  Unless required by applicable law or agreed to in writing, software
  distributed under the License is distributed on an "AS IS" BASIS,
  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
  See the License for the specific language governing permissions and
  limitations under the License
-->

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Introducing Lollipop, a sweet new take on Android.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <title><?php wp_title('•', true, 'right'); bloginfo('name'); ?></title>
    <?php wp_head(); ?>

    <!-- Page styles -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.min.css">
    <link rel="stylesheet" href="<?= get_template_directory_uri() ?>/theme/css/master.css">
    <style>
    #view-source {
      position: fixed;
      display: block;
      right: 0;
      bottom: 0;
      margin-right: 40px;
      margin-bottom: 40px;
      z-index: 900;
    }
    </style>
  </head>
  <body <?php body_class(); ?>>
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
			<div class="android-header mdl-layout__header mdl-layout__header--waterfall">
				<div class="mdl-layout__header-row">
					<span class="android-title mdl-layout-title">
						<a href="<?php echo esc_url( home_url('/') ); ?>">
							<img class="android-logo-image" src="<?= get_template_directory_uri() ?>/theme/images/logo.png">
						</a>
					</span>
					<!-- Add spacer, to align navigation to the right in desktop -->
					<div class="android-header-spacer mdl-layout-spacer"></div>
					<div class="android-search-box mdl-textfield mdl-js-textfield mdl-textfield--expandable mdl-textfield--floating-label mdl-textfield--align-right mdl-textfield--full-width">
						<label class="mdl-button mdl-js-button mdl-button--icon" for="s">
							<i class="material-icons">search</i>
						</label>
            <form role="search" method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
  						<div class="mdl-textfield__expandable-holder">
                <input  class="mdl-textfield__input"
                        type="text"
                        name="s"
                        id="s"
                        placeholder="Suche ..."
                        value="<?php echo get_search_query(); ?>">
  						</div>
            </form>
					</div>
					<!-- Navigation -->
					<div class="android-navigation-container">
						<nav class="android-navigation mdl-navigation">
							<?php
		            wp_nav_menu(
		                array (
		                    'theme_location' => 'navbar',
		                    'walker'         => new navbar_nav(),
		                    'items_wrap'     => '%3$s'  //'<nav>%3$s</nav>'
		                )
		            );
		          ?>
						</nav>
					</div>
					<!--
					<span class="android-mobile-title mdl-layout-title">
						<img class="android-logo-image" src="images/logo.png">
					</span>
					<button class="android-more-button mdl-button mdl-js-button mdl-button--icon mdl-js-ripple-effect" id="more-button">
						<i class="material-icons">language</i>
					</button>
					<?php
						//do_action('mtl_lang_switch');
					?>
					<ul class="mdl-menu mdl-js-menu mdl-menu--bottom-right mdl-js-ripple-effect wpm-language-switcher switcher-list" for="more-button">
						<li class="mdl-menu__item">DE</li>
						<li class="mdl-menu__item">EN</li>
						<li class="mdl-menu__item">HU</li>
					</ul>
					-->
				</div>
			</div>

			<div class="android-drawer mdl-layout__drawer">
        <span class="mdl-layout-title">
          <a href="<?php echo esc_url( home_url('/') ); ?>">
            <img class="android-logo-image drawer-img" src="<?= get_template_directory_uri() ?>/theme/images/logo-white.png">
          </a>
        </span>

        <nav class="mdl-navigation">
          <?php
            wp_nav_menu(
                array (
                    'theme_location' => 'navbar',
                    'walker'         => new navbar_nav(),
                    'items_wrap'     => '%3$s'  //'<nav>%3$s</nav>'
                )
            );
          ?>
          <div class="android-drawer-separator"></div>
          <?php
            wp_nav_menu(
                array (
                    'theme_location' => 'secondary',
                    'walker'         => new secondary_nav(),
                    'items_wrap'     => '%3$s'  //'<nav>%3$s</nav>'
                )
            );
          ?>
        </nav>
      </div>
			<div class="android-content mdl-layout__content">
