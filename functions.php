<?php
add_theme_support( 'menus' );
add_theme_support('custom-logo');
/*
array(
    'width'                => null,
    'height'               => null,
    'flex-width'           => false,
    'flex-height'          => false,
    'header-text'          => '',
    'unlink-homepage-logo' => false,
    */


/**
 * Modifie la requete principale de Wordpress avant qu'elle soit exécuté
 * le hook « pre_get_posts » se manifeste juste avant d'exécuter la requête principal
 * Dépendant de la condition initiale on peut filtrer un type particulier de requête
 * Dans ce cas çi nous filtrons la requête de la page d'accueil
 * @param WP_query  $query la requête principal de WP
 */

function _4w4_modifie_requete_principal( $query ) {
    if ( $query->is_home() && $query->is_main_query() && ! is_admin() ) {
      $query->set( 'category_name', 'populaire' );
      $query->set( 'orderby', 'title' );
      $query->set( 'order', 'ASC' );
      }
     }
     add_action( 'pre_get_posts', '_4w4_modifie_requete_principal' );    