<?php
class Helper
{
    public static function show_all_super_globals()
    {
        echo '<p>&nbsp;</p>';
        echo '<p>&nbsp;</p>';
        echo '<p>&nbsp;</p>';
        echo '<div class="container-variablen">';
        echo '<p>&nbsp;</p>';
        echo '<p>Variable: $_SERVER</p>';
        echo '<pre>';
        print_r($_SERVER);
        echo '</pre>';
        echo '<p>&nbsp;</p>';

        echo '<p>Variable: $_GET</p>';
        echo '<pre>';
        print_r($_GET);
        echo '</pre>';
        echo '<p>&nbsp;</p>';

        echo '<p>Variable: $_POST</p>';
        echo '<pre>';
        print_r($_POST);
        echo '</pre>';
        echo '<p>&nbsp;</p>';

        //echo '<p>Variable: $_SESSION</p>';
        //echo '<pre>';
        //print_r ($_SESSION);
        //echo '</pre>';
        //echo '<p>&nbsp;</p>';

        echo '<p>Variable: $_COOKIE</p>';
        echo '<pre>';
        print_r($_COOKIE);
        echo '</pre>';
        echo '<p>&nbsp;</p>';

        echo '<p>Variable: $_REQUEST</p>';
        echo '<pre>';
        print_r($_REQUEST);
        echo '</pre>';
        echo '<p>&nbsp;</p>';

        echo '<p>Variable: $_ENV</p>';
        echo '<pre>';
        print_r($_ENV);
        echo '</pre>';
        echo '<p>&nbsp;</p>';

        echo '<p>Variable: $_FILES</p>';
        echo '<pre>';
        print_r($_FILES);
        echo '</pre>';
        echo '<p>&nbsp;</p>';
        echo '</div>';
    }

    public static function show_super_global_post()
    {
        echo '<p>&nbsp;</p>';
        echo '<p>&nbsp;</p>';
        echo '<p>&nbsp;</p>';
        echo '<div class="container-variablen">';
        echo '<p>-------------------------------------------------------------</p>';
        echo '<p>Variable: $_POST</p>';
        echo '<pre>';
        print_r($_POST);
        echo '</pre>';
        echo '<p>&nbsp;</p>';
        echo '</div>';
    }

    public static function show_super_global_get()
    {
        echo '<p>&nbsp;</p>';
        echo '<p>&nbsp;</p>';
        echo '<p>&nbsp;</p>';
        echo '<div class="container-variablen">';
        echo '<p>-------------------------------------------------------------</p>';
        echo '<p>Variable: $_GET</p>';
        echo '<pre>';
        print_r($_GET);
        echo '</pre>';
        echo '<p>&nbsp;</p>';
        echo '</div>';
    }

    public static function show_super_global_server()
    {
        echo '<p>&nbsp;</p>';
        echo '<p>&nbsp;</p>';
        echo '<p>&nbsp;</p>';
        echo '<div class="container-variablen">';
        echo '<p>-------------------------------------------------------------</p>';
        echo '<p>Variable: $_GET</p>';
        echo '<pre>';
        print_r($_SERVER);
        echo '</pre>';
        echo '<p>&nbsp;</p>';
        echo '</div>';
    }

    public static function show_super_global_files()
    {
        echo '<p>&nbsp;</p>';
        echo '<p>&nbsp;</p>';
        echo '<p>&nbsp;</p>';
        echo '<div class="container-variablen">';
        echo '<p>-------------------------------------------------------------</p>';
        echo '<p>Variable: $_FILES</p>';
        echo '<pre>';
        print_r($_FILES);
        echo '</pre>';
        echo '<p>&nbsp;</p>';
        echo '</div>';
    }

    public static function show_super_global_session()
    {
        echo '<p>&nbsp;</p>';
        echo '<p>&nbsp;</p>';
        echo '<p>&nbsp;</p>';
        echo '<div class="container-variablen">';
        echo '<p>-------------------------------------------------------------</p>';
        echo '<p>Variable: $_SESSION</p>';
        echo '<pre>';
        print_r($_SESSION);
        echo '</pre>';
        echo '<p>&nbsp;</p>';
        echo '</div>';
    }

    public static function loremIpsumKurz()
    {
        $strLoremIpsumKurz = 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.';
        return $strLoremIpsumKurz;
    }

    public static function loremIpsumLang()
    {
        $strLoremIpsumLang = 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.';
        return $strLoremIpsumLang;
    }
}
