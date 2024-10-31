<?php
/*
Plugin Name: Right Click Menu
Plugin URI: http://developerssuman.orgfree.com/
Description: User can get a menu by mouse right click. Admin can set a menu from admin panel
Author: Suman Biswas
Version: 2.2

Copyright 2016 Right Click Menu/Suman Biswas.

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program.  If not, see <http://www.gnu.org/licenses/>.
	
*/

add_action('wp_footer', 'rcm_enqueue_script_style');
add_action('wp_head','rcm_enqueue_menu');
add_action('init', 'rcm_plugin_setup' );

function rcm_enqueue_script_style()
{
	wp_enqueue_style( 'rcm-style', plugins_url( 'css/rcm.css', __FILE__ ));
	wp_enqueue_script( 'rcm-script', plugins_url( 'js/rcm.js', __FILE__ ),array('jquery'));
}

function rcm_enqueue_menu()
{
	wp_nav_menu( array( 'theme_location' => 'rcm-menu','container' => 'ul','menu_class'=>'rcm-custom-menu','menu_id'=>'rcm-custom-menu') ); 
}

function rcm_plugin_setup()
{
	register_nav_menus( array(
		'rcm-menu' => __( 'Right Click Menu', 'rcm' ),
	) );
}
?>