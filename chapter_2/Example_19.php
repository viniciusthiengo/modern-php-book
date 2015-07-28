<?php
    $closure = function( $name ){
        return( sprintf("%s", $name) );
    };

    echo $closure('Thiengo');