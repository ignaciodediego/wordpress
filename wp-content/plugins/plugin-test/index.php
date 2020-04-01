<?php

/*
Plugin Name: Redes Sociales
Plugin URI: http://www.google.com
Description: Short Code para incluir barra de redes sociales en Wordpress
Author: Ignacio De Diego
Version: 0.9
Author URI: http://www.google.com
*/


function social_aulaformativa($atts) {

    $args = shortcode_atts( array(
        'facebook' => 'http://www.facebook.com',
        'twitter' => 'http://www.twitter.com',
        'google' => 'http://plus.google.com'
        ), $atts );

    $uf = $args["facebook"];
    $ug = $args["twitter"];
    $ut = $args["google"];


    $facebook = "<a href='".$uf."' target='_blank'>Facebook</a>";
    $twitter = "<a href='".$ug."' target='_blank'>Twitter</a>";
    $google = "<a href='".$ut."' target='_blank'>Google</a>";
     
    $redes = $facebook . " " . $twitter . " " . $google;

    return $redes;

}

add_shortcode("social_aulaformativa", "social_aulaformativa");

?>