<?php

require_once('classes/Helper.php');

//#############################################################################
// Shortcode: [allgemeiner_seitenhinweis]
function allgemeiner_seitenhinweis_function()
{
    // über Buffer einfügen:
    ob_start(); // Buffer start
    // bewerten.php wird nun im Buffer gespeichert
    require_once('allgemeiner_seitenhinweis.php');
    // Der Buffer wird in die Variable $strTemp übertragen
    $strTemp = ob_get_contents();
    // Buffer löschen
    ob_end_clean();
    // den Inhalt der $strTemp zurückgeben
    return $strTemp;
}
add_shortcode('allgemeiner_seitenhinweis', 'allgemeiner_seitenhinweis_function');
//#############################################################################

//#############################################################################
// Shortcode: [die_seite_startseite]
function die_seite_startseite_function()
{
    // über Buffer einfügen:
    ob_start(); // Buffer start
    // bewerten.php wird nun im Buffer gespeichert
    require_once('die_seite_startseite.php');
    // Der Buffer wird in die Variable $strTemp übertragen
    $strTemp = ob_get_contents();
    // Buffer löschen
    ob_end_clean();
    // den Inhalt der $strTemp zurückgeben
    return $strTemp;
}
add_shortcode('die_seite_startseite', 'die_seite_startseite_function');
//#############################################################################

//#############################################################################
// Shortcode: [die_seite_ihre_web_praesenz]
function die_seite_ihre_web_praesenz_function()
{
    // über Buffer einfügen:
    ob_start(); // Buffer start
    // bewerten.php wird nun im Buffer gespeichert
    require_once('die_seite_ihre_web_praesenz.php');
    // Der Buffer wird in die Variable $strTemp übertragen
    $strTemp = ob_get_contents();
    // Buffer löschen
    ob_end_clean();
    // den Inhalt der $strTemp zurückgeben
    return $strTemp;
}
add_shortcode('die_seite_ihre_web_praesenz', 'die_seite_ihre_web_praesenz_function');
//#############################################################################

//#############################################################################
// Shortcode: [die_seite_ihre_app]
function die_seite_ihre_app_function()
{
    // über Buffer einfügen:
    ob_start(); // Buffer start
    // bewerten.php wird nun im Buffer gespeichert
    require_once('die_seite_ihre_app.php');
    // Der Buffer wird in die Variable $strTemp übertragen
    $strTemp = ob_get_contents();
    // Buffer löschen
    ob_end_clean();
    // den Inhalt der $strTemp zurückgeben
    return $strTemp;
}
add_shortcode('die_seite_ihre_app', 'die_seite_ihre_app_function');
//#############################################################################

//#############################################################################
// Shortcode: [die_seite_kontakt]
function die_seite_kontakt_function()
{
    // über Buffer einfügen:
    ob_start(); // Buffer start
    // bewerten.php wird nun im Buffer gespeichert
    require_once('die_seite_kontakt.php');
    // Der Buffer wird in die Variable $strTemp übertragen
    $strTemp = ob_get_contents();
    // Buffer löschen
    ob_end_clean();
    // den Inhalt der $strTemp zurückgeben
    return $strTemp;
}
add_shortcode('die_seite_kontakt', 'die_seite_kontakt_function');
//#############################################################################

//#############################################################################
// Shortcode: [die_seite_datenschutz]
function die_seite_datenschutz_function()
{
    // über Buffer einfügen:
    ob_start(); // Buffer start
    // bewerten.php wird nun im Buffer gespeichert
    require_once('die_seite_datenschutz.php');
    // Der Buffer wird in die Variable $strTemp übertragen
    $strTemp = ob_get_contents();
    // Buffer löschen
    ob_end_clean();
    // den Inhalt der $strTemp zurückgeben
    return $strTemp;
}
add_shortcode('die_seite_datenschutz', 'die_seite_datenschutz_function');
//#############################################################################

//#############################################################################
// Shortcode: [die_seite_impressum]
function die_seite_impressum_function()
{
    // über Buffer einfügen:
    ob_start(); // Buffer start
    // bewerten.php wird nun im Buffer gespeichert
    require_once('die_seite_impressum.php');
    // Der Buffer wird in die Variable $strTemp übertragen
    $strTemp = ob_get_contents();
    // Buffer löschen
    ob_end_clean();
    // den Inhalt der $strTemp zurückgeben
    return $strTemp;
}
add_shortcode('die_seite_impressum', 'die_seite_impressum_function');
//#############################################################################

//#############################################################################
// Shortcode: [shortcode_briefumschlag]
function shortcode_briefumschlag_function()
{
    // über Buffer einfügen:
    ob_start(); // Buffer start
    // bewerten.php wird nun im Buffer gespeichert
    require_once('shortcode_briefumschlag.php');
    // Der Buffer wird in die Variable $strTemp übertragen
    $strTemp = ob_get_contents();
    // Buffer löschen
    ob_end_clean();
    // den Inhalt der $strTemp zurückgeben
    return $strTemp;
}
add_shortcode('shortcode_briefumschlag', 'shortcode_briefumschlag_function');
//#############################################################################

//#############################################################################
function register_my_menus()
{
    register_nav_menus(
        array(
            'header-menu' => __('Header Menu'),
            'footer-menu' => __('Footer Menu')
        )
    );
}
add_action('init', 'register_my_menus');
//-----------------------------------------------------------------------------
// die css-Klasse "active" zum aktiven Seiten-Menülink hinzufügen
add_filter('nav_menu_css_class', 'special_nav_class', 10, 2);

function special_nav_class($classes, $item)
{
    if (in_array('current-menu-item', $classes)) {
        $classes[] = 'active ';
    }
    return $classes;
}
//#############################################################################

//#############################################################################
// SMTP für den eMailVersand:
function set_php_mailer($phpmailer)
{
    $phpmailer->isSMTP();
    $phpmailer->Host = 'securesmtp.t-online.de';
    $phpmailer->SMTPAuth = true;
    $phpmailer->Port = 587;
    $phpmailer->Username = 'ameise@t-online.de';
    $phpmailer->Password = '7fCRQ8SaephoceHK';
    $phpmailer->SMTPSecure = "ssl";
    $phpmailer->From = 'ENKHO Homepage';
    $phpmailer->FromName = 'Peter Unden';
}add_action('phpmailer_init', 'set_php_mailer');
//#############################################################################

/*
//#############################################################################
// custom styles for Bewertungen admin backend
function load_custom_style_and_script()
{
    // wp_enqueue_style( 'admin-style', get_theme_file_uri('css/xxxx.css'), array(), null, 'all' );
    // wp_enqueue_script( 'admin-script', get_theme_file_uri('js/xxxx.js'), array(), null, 'all' );
}
add_action('wp_enqueue_scripts', 'load_custom_style_and_script');
//#############################################################################
*/
