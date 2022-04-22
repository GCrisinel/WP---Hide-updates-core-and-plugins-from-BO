<?php
/* Supprimer les notifications du core */
add_filter('pre_site_transient_update_core', create_function('$a', "return null;"));

/* Supprimer les notifications de thèmes */
remove_action('load-update-core.php', 'wp_update_themes');
add_filter('pre_site_transient_update_themes', create_function('$a', "return null;"));

/* Supprimer les notifications de plugins */
remove_action('load-update-core.php', 'wp_update_plugins');
add_filter('pre_site_transient_update_plugins', create_function('$a', "return null;"));



/* afficher les notifications pour les seuls comptes administrateurs (optionnel, à mettre à la place du code ci-dessus) */
/*
if (! current_user_can('update_plugins')) {
	add_action('admin_init', create_function(false,"remove_action('admin_notices', 'update_nag', 3);"));
}
*/
