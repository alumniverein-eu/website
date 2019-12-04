<?php

	function alumniPromoPosts() {
		// the query
		$the_query = new WP_Query( array( 'category_name' => 'display-front-promo', 'posts_per_page' => 4 ) );
		$string .= '<div class="row p-0 m-0 promo-row">';
		// The Loop
		if ( $the_query->have_posts() ) {

		  while ( $the_query->have_posts() ) {
		    $the_query->the_post();
		    	$string .= '<div class="col-md-3 col-sm-6 col-12 p-0 m-0 promo-col">';

		      if ( get_the_content() ) {
		      	$string .= '<a href="'. get_the_permalink() .'">
											    <div class="promo-img"
											    		 style="background: url('. get_the_post_thumbnail_url() .') no-repeat center bottom;"

											    		 alt="'. get_the_title() .'"></div>
											    <div class="promo-caption">
											      <h5>'. get_the_title() .'</h5>
											      <p>'. get_the_excerpt().'</p>
											    </div>
											  </a></div>';
		      } else { // if no featured image is found
		      	$string .= '<div class="promo-img"
											    	 style="background: url('. get_the_post_thumbnail_url() .') no-repeat center bottom;"
											    	 alt="'. get_the_title() .'"></div>
											    <div class="promo-caption">
											      <h5>'. get_the_title() .'</h5>
											      <p>'. get_the_excerpt().'</p>
											    </div>
											  </div>';
		      }
		    }
		  } else {
		  // no posts found
		}
		$string .= '</div>';

		return $string;

		/* Restore original Post Data */
		wp_reset_postdata();
	}


	function alumniCarouselPosts() {
		$i0 = 0;
		$i1 = 0;
		// the query
		$the_query = new WP_Query( array( 'category_name' => 'display-front-carousel', 'posts_per_page' => 10 ) );
		$string .= '<div id="alumniCarousel" class="carousel slide" data-ride="carousel">
									<ol class="carousel-indicators">';
		// Indicators
		if ( $the_query->have_posts() ) {

		  while ( $the_query->have_posts() ) {
		    $the_query->the_post();
		    $string .= '<li data-target="#alumniCarousel" data-slide-to="'.$i0.'" class="active"></li>';
		  	$i0++;
		  }

		} else {
		  // no posts found
		}

		$string .= '</ol><div class="carousel-inner" role="listbox">';

		// Slides
		if ( $the_query->have_posts() ) {

		  while ( $the_query->have_posts() ) {
		    $the_query->the_post();
		    if( get_the_content() ) {
		    	$string .= '<div class="carousel-item '.($i1 == 0 ? 'active' : '').'">
	            				<a href="'. get_the_permalink() .'">
		            				<div class="carousel-caption">
		              				<h3>'. get_the_title() .'</h3>
		              				<p>'. get_the_excerpt().'</p>
		            				</div>
		            				<div class="mx-auto d-block carousel-img"
		            						 style="background: url('. get_the_post_thumbnail_url() .') no-repeat center bottom;"
		            						 alt="First slide"></div>
	            				</a>
	          				</div>';
		    } else {
		    	$string .= '<div class="carousel-item '.($i1 == 0 ? 'active' : '').'">
	            				<div class="carousel-caption">
		              			<h3>'. get_the_title() .'</h3>
		              			<p>'. get_the_excerpt().'</p>
		            			</div>
		            			<div class="mx-auto d-block carousel-img"
		            					 style="background: url('. get_the_post_thumbnail_url() .') no-repeat center bottom;"
		            					 alt="First slide"></div>
	          				</div>';
		    }

		  	$i1++;
		  }

		} else {
		  // no posts found
		}
		$string .= '<a class="carousel-control-prev" href="#alumniCarousel" role="button" data-slide="prev">
				          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
				          <span class="sr-only">Previous</span>
				        </a>
				        <a class="carousel-control-next" href="#alumniCarousel" role="button" data-slide="next">
				          <span class="carousel-control-next-icon" aria-hidden="true"></span>
				          <span class="sr-only">Next</span>
				        </a>';
		$string .= '</div></div>';
		return $string;

		/* Restore original Post Data */
		wp_reset_postdata();
	}



	function PortalPreview() {

		/* EXAMPLE
		<div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet mdl-cell--4-col-phone mdl-card mdl-shadow--3dp">
			<div class="mdl-card__media">
				<img src="images/A.jpg">
			</div>
			<div class="mdl-card__title">
				 <h4 class="mdl-card__title-text">Get going on Android</h4>
			</div>
			<div class="mdl-card__supporting-text">
				<span class="mdl-typography--font-light mdl-typography--subhead">Four tips to make your switch to Android quick and easy</span>
			</div>
			<div class="mdl-card__actions">
				 <a class="android-link mdl-button mdl-js-button mdl-typography--text-uppercase" href="">
					 Make the switch
					 <i class="material-icons">chevron_right</i>
				 </a>
			</div>
		</div>
		*/





		// the query
		$the_query = new WP_Query( array( 'category_name' => 'PORTAL', 'posts_per_page' => 4 ) );
		// The Loop
		if ( $the_query->have_posts() ) {

			while ( $the_query->have_posts() ) {
				$the_query->the_post();
					$string .= '

					<div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet mdl-cell--4-col-phone mdl-card mdl-shadow--3dp">
						<div class="mdl-card__media">
							<img src="'.get_the_post_thumbnail_url().'">
						</div>
						<div class="mdl-card__title">
							 <h4 class="mdl-card__title-text">'. get_the_title() .'</h4>
						</div>
						<div class="mdl-card__supporting-text">
							<span class="mdl-typography--font-light mdl-typography--subhead">'. get_the_excerpt().'</span>
						</div>
						<div class="mdl-card__actions">
							 <a class="android-link mdl-button mdl-js-button mdl-typography--text-uppercase" href="'. get_the_permalink() .'">
								 Mehr
								 <i class="material-icons">chevron_right</i>
							 </a>
						</div>
					</div>

					';
				}
			} else {
			// no posts found
		}

		return $string;

		/* Restore original Post Data */
		wp_reset_postdata();
	}


	function PortalHeadline() {

		/* EXAMPLE
		<div
			class="android-be-together-section mdl-typography--text-center"
			style="background-image: url('images/C.jpg');">
			<div class="white-font android-slogan">be together. not the same.</div> <!-- .logo-font -->
			<div class="white-font android-sub-slogan">welcome to android... be yourself. do your thing. see what's going on.</div>

			<!--
			<div class="logo-font android-create-character">
				<a href=""><img src="images/andy.png"> create your android character</a>
			</div>
			-->


			<a href="#screens">
				<button class="android-fab mdl-button mdl-button--colored mdl-js-button mdl-button--fab mdl-js-ripple-effect">
					<i class="material-icons">expand_more</i>
				</button>
			</a>

		</div>
		*/





		// the query
		$the_query = new WP_Query( array( 'category_name' => 'PORTAL', 'posts_per_page' => 1 ) );
		// The Loop
		if ( $the_query->have_posts() ) {

			while ( $the_query->have_posts() ) {
				$the_query->the_post();
					$string .= '
					<a href="'. get_the_permalink() .'">
					<div
						class="android-be-together-section mdl-typography--text-center"
						style="background-image: url(\''.get_the_post_thumbnail_url().'\');">

						<div class="white-font android-slogan">'. get_the_title() .'</div> <!-- .logo-font -->
						<div class="white-font android-sub-slogan">'. get_the_excerpt().'</div>


						<a href="'. get_the_permalink() .'">
							<button class="android-fab mdl-button mdl-button--colored mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--accent">
								<i class="material-icons">more_horiz</i>
							</button>
						</a>

					</div>
					</a>
					';
				}
			} else {
			// no posts found
		}

		return $string;

		/* Restore original Post Data */
		wp_reset_postdata();
	}


	function NewsFeed() {

		/* EXAMPLE
		<div class="android-tv android-screen">
			<a class="android-image-link" href="">
				<img class="android-screen-image" src="images/A.jpg">
			</a>
			<a class="android-link mdl-typography--font-regular mdl-typography--text-uppercase" href="">MV 2018</a>
		</div>
		*/
		// the query
		$the_query = new WP_Query( array( 'category_name' => 'NEWS', 'posts_per_page' => 6 ) );
		// The Loop
		if ( $the_query->have_posts() ) {

			while ( $the_query->have_posts() ) {
				$the_query->the_post();
					$string .= '
					<div class="android-tv android-screen">
						<a class="android-image-link" href="'. get_the_permalink() .'">
							<img class="android-screen-image" src="'.get_the_post_thumbnail_url().'">
						</a>
						<a class="android-link mdl-typography--font-regular mdl-typography--text-uppercase" href="'. get_the_permalink() .'">
							'. get_the_title() .'
						</a>
					</div>
					';
				}
			} else {
			// no posts found
		}

		return $string;

		/* Restore original Post Data */
		wp_reset_postdata();
	}


	function PostFeed($cat, $count = 12) {

		// the query
		$the_query = new WP_Query( array( 'category_name' => $cat, 'posts_per_page' => $count ) );
		// The Loop
		if ( $the_query->have_posts() ) {
			while ( $the_query->have_posts() ) {
				$the_query->the_post();
					$string .= '
					<div class="android-tv android-screen">
						<a class="android-image-link" href="'. get_the_permalink() .'">
							<img class="android-screen-image" src="'.get_the_post_thumbnail_url().'">
						</a>
						<a class="android-link mdl-typography--font-regular mdl-typography--text-uppercase" href="'. get_the_permalink() .'">
							'. get_the_title() .'
						</a>
					</div>
					';
				}
			} else {
			// no posts found
		}

		return $string;

		/* Restore original Post Data */
		wp_reset_postdata();
	}

	function PostPreview($cat) {

		// the query
		$the_query = new WP_Query( array( 'category_name' => $cat, 'posts_per_page' => 4 ) );
		// The Loop
		if ( $the_query->have_posts() ) {

			while ( $the_query->have_posts() ) {
				$the_query->the_post();
					$string .= '

					<div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet mdl-cell--4-col-phone mdl-card mdl-shadow--3dp">
						<div class="mdl-card__media">
							<img src="'.get_the_post_thumbnail_url().'">
						</div>
						<div class="mdl-card__title">
							 <h4 class="mdl-card__title-text">'. get_the_title() .'</h4>
						</div>
						<div class="mdl-card__supporting-text">
							<span class="mdl-typography--font-light mdl-typography--subhead">'. get_the_excerpt().'</span>
						</div>
						<div class="mdl-card__actions">
							 <a class="android-link mdl-button mdl-js-button mdl-typography--text-uppercase" href="'. get_the_permalink() .'">
								 Mehr
								 <i class="material-icons">chevron_right</i>
							 </a>
						</div>
					</div>

					';
				}
			} else {
			// no posts found
		}

		return $string;

		/* Restore original Post Data */
		wp_reset_postdata();
	}
