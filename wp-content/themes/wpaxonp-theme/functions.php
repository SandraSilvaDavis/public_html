<?php
/*Disable Block Editor*/
add_filter('use_block_editor_for_post', '__return_false');

/*Disable Tiny MCE Editor*/
add_filter('user_can_richedit', '__return_false', 50 );

// Prevent WP from adding <p> tags on pages
function disable_wp_auto_p( $content ) {
    if ( is_singular( 'page' ) ) {
      remove_filter( 'the_content', 'wpautop' );
      remove_filter( 'the_excerpt', 'wpautop' );
    }
    return $content;
  }
  add_filter( 'the_content', 'disable_wp_auto_p', 0 );

/* ADD A MENU BAR*/
register_nav_menu('siteNavigation', 'Primary Navigation');

/* Replace 'current-menu-item' with 'current' */
function replace_current_menu_class($classes) {
  $classes = str_replace('current-menu-item', 'current', $classes);
  return $classes;
}
add_filter('nav_menu_css_class', 'replace_current_menu_class');
?>
