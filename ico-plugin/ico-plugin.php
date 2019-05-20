<?php
/*
Plugin Name: Ico Plugin
*/
//Fonction qui affiche la balise meta
function ico_plugin_meta_keywords() {
    echo '<meta name="keywords" content="HTML,CSS,XML,JavaScript">';
}
//Ajout d'une action sur 'wp_head' qui appellera mon_plugin_meta_keywords()
add_action('wp_head', 'mon_plugin_meta_keywords' );


function ico_plugin_vador_shortcode($atts, $content = "") {

    return '<img style="background-color:red; padding:20px; border-radius:20px;"
src="http://monsite.com/wp-content/plugins/ico-plugin/img/'.$content.'.png"
 alt="wordpress" /%gt;';
}


//Enregistre les shortcodes du plugin
function ico_plugin_register_shortcode() {
    add_shortcode( 'ico', 'ico_plugin_yoda_shortcode' );

}
add_action( 'init', 'mon_plugin_register_shortcode' );