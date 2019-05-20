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
    //Si contenu vide
    if (empty( $content )) {
        $content = 'Luke';
    }
    return "<blockquote>" . $content . ", Je suis ton père !</blockquote>";
}

//Fonction de rappel qui retourne la célèbre citation de maître Yoda
function ico_plugin_yoda_shortcode() {
    return "<blockquote>Que la force soit avec toi jeune padawan !</blockquote>";
}

//Enregistre les shortcodes du plugin
function ico_plugin_register_shortcode() {
    add_shortcode( 'yoda', 'mon_plugin_yoda_shortcode' );
    add_shortcode( 'vador', 'mon_plugin_vador_shortcode' );
}
add_action( 'init', 'mon_plugin_register_shortcode' );