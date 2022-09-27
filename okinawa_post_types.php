<?php
/* 
  Plugin Name: Okinawa - Post types
  Plugin URI:
  Description: Agrega post types personalizados al sitio okinawa karate Rionegro
  Version: 1.0.0
  Author: Harlynton Castaño García
  Author URI: https://harlynton.github.io/
  Text Domain: okinawa
*/

if(!defined('ABSPATH')) die();

// Register Custom Post Type
function okinawa_clases() {

	$labels = array(
		'name'                  => _x( 'Clases', 'Post Type General Name', 'okinawa' ),
		'singular_name'         => _x( 'Clase', 'Post Type Singular Name', 'okinawa' ),
		'menu_name'             => __( 'Clases', 'okinawa' ),
		'name_admin_bar'        => __( 'Clase', 'okinawa' ),
		'archives'              => __( 'Archivo', 'okinawa' ),
		'attributes'            => __( 'Atributos', 'okinawa' ),
		'parent_item_colon'     => __( 'Clase Padre', 'okinawa' ),
		'all_items'             => __( 'Todas Las Clases', 'okinawa' ),
		'add_new_item'          => __( 'Agregar Clase', 'okinawa' ),
		'add_new'               => __( 'Agregar Clase', 'okinawa' ),
		'new_item'              => __( 'Nueva Clase', 'okinawa' ),
		'edit_item'             => __( 'Editar Clase', 'okinawa' ),
		'update_item'           => __( 'Actualizar Clase', 'okinawa' ),
		'view_item'             => __( 'Ver Clase', 'okinawa' ),
		'view_items'            => __( 'Ver Clases', 'okinawa' ),
		'search_items'          => __( 'Buscar Clase', 'okinawa' ),
		'not_found'             => __( 'No Encontrado', 'okinawa' ),
		'not_found_in_trash'    => __( 'No Encontrado en Papelera', 'okinawa' ),
		'featured_image'        => __( 'Imagen Destacada', 'okinawa' ),
		'set_featured_image'    => __( 'Guardar Imagen destacada', 'okinawa' ),
		'remove_featured_image' => __( 'Eliminar Imagen destacada', 'okinawa' ),
		'use_featured_image'    => __( 'Utilizar como Imagen Destacada', 'okinawa' ),
		'insert_into_item'      => __( 'Insertar en Clase', 'okinawa' ),
		'uploaded_to_this_item' => __( 'Agregado en Clase', 'okinawa' ),
		'items_list'            => __( 'Lista de Clases', 'okinawa' ),
		'items_list_navigation' => __( 'Navegación de Clases', 'okinawa' ),
		'filter_items_list'     => __( 'Filtrar Clases', 'okinawa' ),
	);
	$args = array(
		'label'                 => __( 'Clase', 'okinawa' ),
		'description'           => __( 'Clases para el Sitio Web', 'okinawa' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'hierarchical'          => true, //true = posts; false = pages.
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
        'menu_position'         => 6,
        'menu_icon'             => 'dashicons-welcome-learn-more',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => false,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'okinawa_clases', $args );

}
add_action( 'init', 'okinawa_clases', 0 );

// Register Custom Post Type
function okinawa_instructores() {

	$labels = array(
		'name'                  => _x( 'Instructores', 'Post Type General Name', 'okinawa' ),
		'singular_name'         => _x( 'Instructor', 'Post Type Singular Name', 'okinawa' ),
		'menu_name'             => __( 'Instructores', 'okinawa' ),
		'name_admin_bar'        => __( 'Instructor', 'okinawa' ),
		'archives'              => __( 'Archivo', 'okinawa' ),
		'attributes'            => __( 'Atributos', 'okinawa' ),
		'parent_item_colon'     => __( 'Instructor Padre', 'okinawa' ),
		'all_items'             => __( 'Todas Las Instructores', 'okinawa' ),
		'add_new_item'          => __( 'Agregar Instructor', 'okinawa' ),
		'add_new'               => __( 'Agregar Instructor', 'okinawa' ),
		'new_item'              => __( 'Nueva Instructor', 'okinawa' ),
		'edit_item'             => __( 'Editar Instructor', 'okinawa' ),
		'update_item'           => __( 'Actualizar Instructor', 'okinawa' ),
		'view_item'             => __( 'Ver Instructor', 'okinawa' ),
		'view_items'            => __( 'Ver Instructores', 'okinawa' ),
		'search_items'          => __( 'Buscar Instructor', 'okinawa' ),
		'not_found'             => __( 'No Encontrado', 'okinawa' ),
		'not_found_in_trash'    => __( 'No Encontrado en Papelera', 'okinawa' ),
		'featured_image'        => __( 'Imagen Destacada', 'okinawa' ),
		'set_featured_image'    => __( 'Guardar Imagen destacada', 'okinawa' ),
		'remove_featured_image' => __( 'Eliminar Imagen destacada', 'okinawa' ),
		'use_featured_image'    => __( 'Utilizar como Imagen Destacada', 'okinawa' ),
		'insert_into_item'      => __( 'Insertar en Instructor', 'okinawa' ),
		'uploaded_to_this_item' => __( 'Agregado en Instructor', 'okinawa' ),
		'items_list'            => __( 'Lista de Instructores', 'okinawa' ),
		'items_list_navigation' => __( 'Navegación de Instructores', 'okinawa' ),
		'filter_items_list'     => __( 'Filtrar Instructores', 'okinawa' ),
	);
	$args = array(
		'label'                 => __( 'Instructores', 'okinawa' ),
		'description'           => __( 'Instructores para el Sitio Web', 'okinawa' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
        'menu_position'         => 7,
        'menu_icon'             => 'dashicons-admin-users',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => false,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'instructores', $args );

}
add_action( 'init', 'okinawa_instructores', 0 );

function okinawa_testimoniales() {

	$labels = array(
		'name'                  => _x( 'Testimoniales', 'Post Type General Name', 'okinawa' ),
		'singular_name'         => _x( 'Testimonial', 'Post Type Singular Name', 'okinawa' ),
		'menu_name'             => __( 'Testimoniales', 'okinawa' ),
		'name_admin_bar'        => __( 'Testimonial', 'okinawa' ),
		'archives'              => __( 'Archivo', 'okinawa' ),
		'attributes'            => __( 'Atributos', 'okinawa' ),
		'parent_item_colon'     => __( 'Testimonial Padre', 'okinawa' ),
		'all_items'             => __( 'Todas Las Testimoniales', 'okinawa' ),
		'add_new_item'          => __( 'Agregar Testimonial', 'okinawa' ),
		'add_new'               => __( 'Agregar Testimonial', 'okinawa' ),
		'new_item'              => __( 'Nueva Testimonial', 'okinawa' ),
		'edit_item'             => __( 'Editar Testimonial', 'okinawa' ),
		'update_item'           => __( 'Actualizar Testimonial', 'okinawa' ),
		'view_item'             => __( 'Ver Testimonial', 'okinawa' ),
		'view_items'            => __( 'Ver Testimoniales', 'okinawa' ),
		'search_items'          => __( 'Buscar Testimonial', 'okinawa' ),
		'not_found'             => __( 'No Encontrado', 'okinawa' ),
		'not_found_in_trash'    => __( 'No Encontrado en Papelera', 'okinawa' ),
		'featured_image'        => __( 'Imagen Destacada', 'okinawa' ),
		'set_featured_image'    => __( 'Guardar Imagen destacada', 'okinawa' ),
		'remove_featured_image' => __( 'Eliminar Imagen destacada', 'okinawa' ),
		'use_featured_image'    => __( 'Utilizar como Imagen Destacada', 'okinawa' ),
		'insert_into_item'      => __( 'Insertar en Testimonial', 'okinawa' ),
		'uploaded_to_this_item' => __( 'Agregado en Testimonial', 'okinawa' ),
		'items_list'            => __( 'Lista de Testimoniales', 'okinawa' ),
		'items_list_navigation' => __( 'Navegación de Testimoniales', 'okinawa' ),
		'filter_items_list'     => __( 'Filtrar Testimoniales', 'okinawa' ),
	);
	$args = array(
		'label'                 => __( 'Testimoniales', 'okinawa' ),
		'description'           => __( 'Testimoniales para el Sitio Web', 'okinawa' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
        'menu_position'         => 8,
        'menu_icon'             => 'dashicons-editor-quote',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => false,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'testimoniales', $args );

}
add_action( 'init', 'okinawa_testimoniales', 0 );