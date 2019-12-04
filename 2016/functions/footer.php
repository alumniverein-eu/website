<?php

/*
	<div class="col-md-3">
  		<ul class="nav-ul">
  			<li><h7>Test</h7></li>
  			<li><a href="#">Test</a></li>
  			<li><a href="#">Test</a></li>
  			<li><a href="#">Test</a></li>
  		</ul>
  </div>
*/

class FooterTopWalker extends Walker_Nav_Menu {
		
    function start_lvl(&$output, $depth=0, $args=array()) { }

    function end_lvl(&$output, $depth=0, $args=array()) { }

    function start_el(&$output, $item, $depth=0, $args=array(), $id = 0){
        if($depth === 0){
        	$output .= '<div class="col-md-3">
  											<ul class="nav-ul">
  												<li>';
  				if($item->url === '#'){
  					$output .= '<li>
  												<h7>
  													'.$item->title .'
  												</h7>
  											</li>';
  				} else {
  					$output .= '<li>
                          <h7>
    												<a href="'.$item->url.'">
    												'.$item->title .'
    												</a>
    											</h7>
                        </li>';
  				}
  				$output .= '';				
    		} else {
    			if($item->url === '#'){
            $output .= '<li>
                          '.$item->title .'
                        </li>';
          } else {
            $output .= '<li>
                          <a href="'.$item->url.'">
                          '.$item->title .'
                          </a>
                        </li>';
          }
    		}
    }

    function end_el(&$output, $item, $depth=0, $args=array()) {
       	if($depth === 0){
        	$output .= '		</li>
        								</ul>
  										</div>';
        }
    }
}



register_nav_menu('footer', __('Footer', 'b4st'));








