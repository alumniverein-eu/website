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
