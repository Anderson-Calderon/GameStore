<?php

/*
Plugin Name: Game Store General
Plugin URI: https://andersoncalderoncampos.com/
Description: PLugin que carga por defecto al cargar wordpress
Version: 1.0.0
Author: Anderson Calderón
Author URI: https://andersoncalderoncampos.com/
License: GPL2
License URI: https://www.gnu.org/licenses/old-licenses/gpl-2.0.html
*/


function gamestore_remove_dashboard_widgets()
{

    global $wp_meta_boxes;

    unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_activity']);

}

add_action("wp_dashboard_setup","gamestore_remove_dashboard_widgets");