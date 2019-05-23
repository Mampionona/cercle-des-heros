<?php
class Onepage_WalkerOverride extends Walker_Nav_menu
{
  function start_el (&$output, $item, $depth = 0, $args = array(), $id = 0)
  {
		global $wp_query;

		$indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';
		$class_names = $value = '';
		$classes = empty( $item->classes ) ? array() : (array) $item->classes;
		$classes[] = 'menu-item-' . $item->ID;
		$class_names = join(' ', $classes);
    $class_names = ' class="'. esc_attr( $class_names ) . '"';
		$attributes = ! empty( $item->target ) ? ' target="' . esc_attr( $item->target     ) .'"' : '';
		$attributes .= ! empty( $item->xfn ) ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';

		if ($item->object == 'page') {
	    $post_object = get_post($item->object_id);
	    $separate_page = get_post_meta($item->object_id, "new_page", true);
	    $disable_item = get_post_meta($item->object_id, "thm_disable_menu", true);

			$current_page_id = get_option('page_on_front');

	    if (($disable_item != true) && ($post_object->ID != $current_page_id)) {
	    	$output .= $indent . '<li ' . $value . $class_names.' data-hash="' . $post_object->post_name . '">';

	    	if ( $separate_page == true )
	        $attributes .= ! empty( $item->url ) ? ' href="'   . esc_attr( $item->url ) .'" class="no-scroll"' : '';
	      else {
        	if (is_front_page()) $attributes .= ' href="#' . $post_object->post_name . '"';
        	else $attributes .= ' href="' . home_url() . '#' . $post_object->post_name . '" class="no-scroll"';
	      }

        $item_output = $args->before;
        $item_output .= '<a'. $attributes .'>';
        $item_output .= '<span class="menu-item-title">';
        $item_output .= $args->link_before .apply_filters( 'the_title', $item->title, $item->ID );
        $item_output .= $args->link_after;
        $item_output .= '</span>';
        $item_output .= '</a>';
        $item_output .= $args->after;

        $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
	    }
		} else {
      $output .= $indent . '<li ' . $value . $class_names.'>';
      $attributes .= ! empty( $item->url ) ? ' href="' . esc_attr( $item->url ) .'" class="no-scroll"' : '';
      $item_output = $args->before;
      $item_output .= '<a'. $attributes .'>';
      $item_output .= $args->link_before .apply_filters( 'the_title', $item->title, $item->ID );
      $item_output .= $args->link_after;
      $item_output .= '</a>';
      $item_output .= $args->after;
      $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
		}
	}
}
