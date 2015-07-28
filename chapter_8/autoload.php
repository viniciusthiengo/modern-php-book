<?php
spl_autoload_register(function ($class) {
    $paths = array('/Applications/MAMP/htdocs/modern-php-book/chapter_8/');

    for($i = 0, $tamI = count($paths); $i < $tamI; $i++){
        if( file_exists( $paths[$i] . $class . '.php' ) ){
            require_once( $paths[$i] . $class . '.php');
        }
    }
});