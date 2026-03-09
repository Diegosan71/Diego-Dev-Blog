<?php

function diego_assets(){

wp_enqueue_style(
'diego-style',
get_stylesheet_uri()
);

wp_enqueue_script(
'custom-js',
get_template_directory_uri() . '/js/script.js',
array(),
null,
true
);

}

add_action('wp_enqueue_scripts', 'diego_assets');


function diego_registrar_menu(){

register_nav_menu(
'menu-principal',
'Menu Principal'
);

}

add_action('after_setup_theme','diego_registrar_menu');


function diego_crear_tabla_contacto(){

global $wpdb;

$tabla = $wpdb->prefix . 'contact_messages';

$charset = $wpdb->get_charset_collate();

$sql = "CREATE TABLE $tabla (
id mediumint(9) NOT NULL AUTO_INCREMENT,
nombre text NOT NULL,
email text NOT NULL,
mensaje text NOT NULL,
PRIMARY KEY (id)
) $charset;";

require_once(ABSPATH . 'wp-admin/includes/upgrade.php');

dbDelta($sql);

}

add_action('after_switch_theme','diego_crear_tabla_contacto');


function obtener_posts_api(){

$response = wp_remote_get(
'https://jsonplaceholder.typicode.com/posts?_limit=3'
);

if(is_wp_error($response)){
return;
}

$body = wp_remote_retrieve_body($response);

$data = json_decode($body,true);

return $data;

}

function guardar_mensaje_contacto(){

if(isset($_POST['enviar_mensaje'])){

global $wpdb;

$tabla = $wpdb->prefix . 'contact_messages';

$nombre = sanitize_text_field($_POST['nombre']);
$email = sanitize_email($_POST['email']);
$mensaje = sanitize_textarea_field($_POST['mensaje']);

$wpdb->insert(
$tabla,
array(
'nombre' => $nombre,
'email' => $email,
'mensaje' => $mensaje
)
);

}

}

add_action('init','guardar_mensaje_contacto');