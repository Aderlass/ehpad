<?php 
/*
 * ============================
 * Paramétrage de la barre de menu par défaut
 * http://www.wpbeginner.com/wp-themes/how-to-add-custom-navigation-menus-in-wordpress-3-0-themes/
 * http://codex.wordpress.org/Function_Reference/wp_nav_menu
 * ============================
 */ 
add_theme_support( 'menus' ); 


/*
 * ============================
 * Ce code cachera la barre de paramétrage pour tout le monde sauf l'administrateur
 * http://codex.wordpress.org/Function_Reference/show_admin_bar
 * ============================
 */
show_admin_bar( false );

?>