<!-- // walker-nav-menu-custom
// ============================================= -->

<?php
class Walker_Nav_Menu_Custom extends Walker_Nav_Menu {
  function start_lvl(&$output, $depth = 0, $args = null) {
    $output .= "<ul class='dropdown-menu'>\n";
  }

  function start_el(&$output, $item, $depth = 0, $args = null, $id = 0) {
    $classes = empty($item->classes) ? array() : (array) $item->classes;
    $classes[] = 'nav-item';
    
    $output .= '<li class="' . implode(' ', $classes) . '">';

    $attributes = '';
    ! empty($item->attr_title) and $attributes .= ' title="'  . esc_attr($item->attr_title) .'"';
    ! empty($item->target) and $attributes .= ' target="' . esc_attr($item->target    ) .'"';
    ! empty($item->xfn) and $attributes .= ' rel="'    . esc_attr($item->xfn       ) .'"';
    ! empty($item->url) and $attributes .= ' href="'   . esc_attr($item->url       ) .'"';

    $item_output = $args->before;
    $item_output .= '<a class="nav-link"'. $attributes .'>';
    $item_output .= $args->link_before . apply_filters('the_title', $item->title, $item->ID) . $args->link_after;
    $item_output .= '</a>';
    $item_output .= $args->after;

    $output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
  }
}

?>
