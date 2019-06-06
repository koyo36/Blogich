<?php

class Wp_Navwalker extends Walker_Nav_Menu
{


	function start_el(&$output, $item, $depth=0, $args=array(), $id=0 ) {
		//var_dump($item);
		$object 	 = $item->object;
		$type   	 = $item->type;
		$title  	 = $item->title;
		$description = $item->description;
		$permalink   = $item->url;
		$item->classes[]   .= 'nav-item ';
		// var_dump($item->classes);

		$output .= "<li class='".implode(" ", $item->classes) . "'>";

		// Add SPAN if no permalink
		if( $permalink && $permalink != '#' )
		{
			$output .= '<a class="nav-link" href="'.$permalink .'">';
		}
		else
		{
			$output .= '<span>';
		}

		$output .= $title;

		if( $description != '' && $depth == 0 )
		{
			$output .= '<small class="description">'. $description .'</small>';
		}

		if( $permalink && $premalink != '#' )
		{
			$output .= '</a>';
		}
		else
		{
			$output .= '</span>';
		}
	}


}
