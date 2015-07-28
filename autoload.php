<?php
/**
 * Created by PhpStorm.
 * User: viniciusthiengo
 * Date: 6/22/15
 * Time: 8:40 AM
 */

spl_autoload_register(function ($class) {
    $class = explode("\\", $class);
    $class = $class[ count($class) - 1 ];

    $paths = array('class/','interface/','trait/');
    for($i = 0, $tamI = count($paths); $i < $tamI; $i++){
        if( file_exists( $paths[$i] . $class . '.php' ) ){
            require_once($paths[$i] . $class . '.php');
        }
    }
});